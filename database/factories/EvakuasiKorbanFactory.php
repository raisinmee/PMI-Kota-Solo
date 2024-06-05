<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvakuasiKorban>
 */
class EvakuasiKorbanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_evakuasikankorban' => $this->faker->unique()->randomNumber(),
            'laka_yangdinevakuasi' => $this->faker->sentence(),
            'laka_ringanberat' => $this->faker->sentence(),
            'meninggal' => $this->faker->sentence(),
        ];
    }
}