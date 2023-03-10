<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname'=>$this->faker->firstName(),
            'lastname'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'cellphone'=>$this->faker->phoneNumber(),
            'document'=>$this->faker->randomNumber(8),
            'address'=>$this->faker->streetAddress(),
            'privacy'=>True,
        ];
    }
}
