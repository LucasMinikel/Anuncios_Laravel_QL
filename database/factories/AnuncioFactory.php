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
            'anuncio_titulo' => $this->faker->title(),
            'anuncio_local' => $this->faker->streetAddress(),
            'anuncio_link' => $this->faker->url(),
            'anuncio_empresa' => $this->faker->company(),
            'anuncio_logo' => $this->faker->imageUrl(),
            'anuncio_marcado' => rand(0, 1),
            'anuncio_favorito' => rand(0, 1),
        ];
    }
}
