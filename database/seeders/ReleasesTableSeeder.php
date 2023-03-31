<?php

namespace Database\Seeders;

use App\Models\Release;
use Illuminate\Database\Seeder;

class ReleasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Release::factory()->create([
            'title' => 'Leftoverture',
            'releaseYear' => '1976',
            'artist_id' => 1
        ]);
        Release::factory()->create([
            'title' => 'Point of Know Return',
            'releaseYear' => '1977',
            'artist_id' => 1
        ]);
        Release::factory()->create([
            'title' => 'Running on Empty',
            'releaseYear' => '1970',
            'artist_id' => 2
        ]);
        Release::factory()->create([
            'title' => 'Ride the Lightning',
            'releaseYear' => '1984',
            'artist_id' => 3
        ]);
    }
}
