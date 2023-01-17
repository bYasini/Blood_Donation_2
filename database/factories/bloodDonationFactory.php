<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bloodDonation>
 */
class bloodDonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => User::all()->random()->id,
            'fullName' => $this->faker->unique()->userName(),
            'address' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'bloodType' => $this->faker->name(),
            'status' => $this->faker->firstNameFemale(),
            'period' => $this->faker->randomElement(['monthly', 'quarterly']),
            'category' => $this->faker->randomElement(['giver', 'taker']),
        ];
    }
}
