<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'first_name' => $this->faker->firstName,
        'last_name' => $this->faker->lastName,
        'gender' => $this->faker->numberBetween(1,3),
        'email' => $this->faker->email,
        'tel' => $this->faker->randomNumber(6, true),
        'address' => $this->faker->address,
        'building' => $this->faker->buildingNumber,
        'content' => $this->faker->sentence()
        ];
    }
}
