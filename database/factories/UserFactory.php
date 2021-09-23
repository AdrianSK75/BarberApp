<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'forename' => $this->faker->lastName(),
            'status' => $this->faker->is_integer(),
            'phone' => $this->faker->unique(),
            'phone_verified_at' => now(),
            'password' => '$2y$10$pAoVJwqQTfshw10XZvO2cekJxT3j0Zwa99XiS7ObS5arqRylsMHNq', // password
            'remember_token' => Str::random(10),
        ];
    }


    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'phone_verified_at' => null,
            ];
        });
    }
}
