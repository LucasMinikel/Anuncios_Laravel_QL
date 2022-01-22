<?php

namespace Database\Seeders;

use App\Models\Tag as ModelsTag;
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
        ModelsTag::factory(10)->create();
    }
}
