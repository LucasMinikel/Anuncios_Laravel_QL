<?php

namespace Database\Factories;

use App\Models\Anuncio;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnuncioTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anuncio_id' => Anuncio::find(rand(1, 10)),
            'tag_id' => Tag::find(rand(1, 10))
        ];
    }
}
