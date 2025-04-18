<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MsapiExamTypeApi;
use App\Models\User;

class MsapiExamTypeApiFactory extends Factory
{
    protected $model = MsapiExamTypeApi::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Will auto-create a user
            'ms_type' => $this->faker->randomElement(['Midterm', 'Final', 'Quiz']),
            'ms_categories' => $this->faker->randomElement(['Math', 'Science', 'English']),
        ];
    }
}

