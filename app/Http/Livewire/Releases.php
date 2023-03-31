<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use App\Models\Release;
use Livewire\Component;

class Releases extends Component
{

    public $artist, $releases, $title, $releaseYear, $release_id, $artist_id;
    public $isOpen = 0;


    public function mount($artist = null)
    {
        $this->artist_id = request('artist', $artist->id);
    }

    public function render()
    {
        $this->releases = $this->artist->releases;
        return view('livewire.releases');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->releaseYear = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'releaseYear' => 'required',
        ]);

        Release::updateOrCreate(['id' => $this->release_id], [

            'title' => $this->title,
            'releaseYear' => $this->releaseYear,
            'artist_id' => $this->artist->id
        ]);

        session()->flash(
            'message',
            $this->release_id ? 'Release Updated Successfully.' : 'Release Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $release = Release::findOrFail($id);
        $this->release_id = $id;
        $this->artist_id = $this->artist->id;
        $this->title = $release->title;
        $this->releaseYear = $release->releaseYear;


        $this->openModal();
    }

    public function delete($id)
    {
        Release::find($id)->delete();
        session()->flash('message', 'Release deleted successfully.');
    }
}
