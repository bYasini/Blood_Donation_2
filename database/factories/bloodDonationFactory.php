<?php

namespace Database\Factories;

use App\Models\BloodDonation;
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
            'fullName' => $this->faker->unique()->userName(),
            'address' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'bloodType' => $this->faker->randomElement(['A*', 'A-', 'B*', 'B-', 'O*', 'O-']),
            'status' => $this->faker->randomElement(['male', 'female']),
            'period' => $this->faker->randomElement(['monthly', 'quarterly']),
            'category' => $this->faker->randomElement(['giver', 'taker']),
        ];
    }
}
