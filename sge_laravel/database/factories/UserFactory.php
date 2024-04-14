<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin1234'),
        ];
    }

    /**
     * Define the state for a student user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function student()
    {
        return $this->state([
            'name' => 'Student',
            'email' => 'student@test.com',
            'password' => Hash::make('student1234'),
        ]);
    }

    /**
     * Define the state for a teacher user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function teacher()
    {
        return $this->state([
            'name' => 'Teacher',
            'email' => 'teacher@test.com',
            'password' => Hash::make('teacher1234'),
        ]);
    }

    /**
     * Define the state for a president user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function president()
    {
        return $this->state([
            'name' => 'President',
            'email' => 'president@test.com',
            'password' => Hash::make('president1234'),
        ]);
    }

    /**
     * Define the state for a coordinator user.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function coordinator()
    {
        return $this->state([
            'name' => 'Coordinator',
            'email' => 'coordinator@test.com',
            'password' => Hash::make('coordinator1234'),
        ]);
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
