<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use App\Models\AnuncioTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Tag::factory(10)->create();
        Anuncio::factory(10)->create();
        AnuncioTag::factory(10)->create();
    }
}
