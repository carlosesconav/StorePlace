<?php

namespace Database\Factories;
use App\Models\Songs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Songs>
 */
class SongsFactory extends Factory
{

    public function definition()
    {
        return [
            'titulo' => $this->faker->company,
            'autor' => $this->faker->name,
            'album' => $this->faker->text(30),
        ];
    }
}
