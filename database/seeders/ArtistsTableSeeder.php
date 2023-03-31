<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::factory()->create([
            'name' => 'Kansas',
            'genre' => 'prog rock'
        ]);
        Artist::factory()->create([
            'name' => 'Jackson Browne',
            'genre' => 'folk rock'
        ]);
        Artist::factory()->create([
            'name' => 'Metallica',
            'genre' => 'metal'
        ]);
    }
}
