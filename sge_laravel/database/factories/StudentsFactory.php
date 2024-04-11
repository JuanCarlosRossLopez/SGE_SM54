<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Division;
use App\Models\Anteproject;
use App\Models\Teachers;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_name' => $this->faker->name,
            'id_student' => $this->faker->unique()->numberBetween(10000, 99999),
            'project_creator' => $this->faker->boolean,
            'strike' => $this->faker->numberBetween(0, 5),
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'division_id' => function () {
                return Division::inRandomOrder()->first()->id;
            },
            'anteproject_id' => function () {
                return Anteproject::inRandomOrder()->first()->id;
            },
            'adviser_id' => function () {
                return Teachers::inRandomOrder()->first()->id;
            },
            'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
        ];
    }
}
