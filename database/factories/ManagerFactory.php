<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManagerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'voornaam' => $this->faker->firstName,
            'achternaam' => $this->faker->lastName,
            'straat' => $this->faker->streetName,
            'huisnummer' => $this->faker->numberBetween(1, 200),
        ];
    }
}
