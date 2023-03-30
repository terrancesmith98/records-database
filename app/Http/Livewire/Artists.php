<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;

class Artists extends Component
{

    public $artists, $name, $genre, $artist_id;
    public $isOpen = 0;

    public function render()
    {
        $this->artists = Artist::all();
        return view('livewire.artists');
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
        $this->name = '';
        $this->genre = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'genre' => 'required'
        ]);

        Artist::updateOrCreate(['id' => $this->artist_id], [
            'name' => $this->name,
            'genre' => $this->genre
        ]);

        session()->flash(
            'message',
            $this->artist_id ? 'Artist Updated Successfully.' : 'Artist Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $artist = Artist::findOrFail($id);
        $this->artist_id = $id;
        $this->name = $artist->name;
        $this->genre = $artist->genre;

        $this->openModal();
    }

    public function delete($id)
    {
        Artist::find($id)->delete();
        session()->flash('message', 'Artist deleted successfully.');
    }
}
