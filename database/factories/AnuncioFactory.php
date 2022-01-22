<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnuncioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::find(rand(1, 10)),
            'anuncio_titulo' => $this->faker->word(),
            'anuncio_local' => $this->faker->sentence(),
            'anuncio_link' => $this->faker->url(),
            'anuncio_empresa' => $this->faker->word(),
            'anuncio_logo' => $this->faker->url(),
        ];
    }
}
