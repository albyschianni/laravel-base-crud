<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstName(),
            'birth_place' => fake() -> address(),
            'blessing_date' => fake() -> dateTime(),
            'number_of_miracles' => fake() -> numberBetween(1, 99),
        ];
    }
}
