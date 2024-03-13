<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => $this->faker->name,
            'id_student' => $this->faker->randomNumber(8),
            'project_creator' => $this->faker->boolean(),
            'user_id' => $this->faker->unique()->randomNumber(1),
                
            
        
        ];
    }
}
