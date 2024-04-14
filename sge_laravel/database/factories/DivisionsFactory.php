<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DivisionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'division_name' => 'Ingenieria y Tecnología'
        ];
    }

    /**
     * Define the state for a gastronomy division.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function gastronomy()
    {
        return [
            'division_name' => 'Gastronmia'
        ];
    }

    /**
     * Define the state for a administrative economic division.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function administrativeEconomic()
    {
        return [
            'division_name' => 'Económico Administrativa'
        ];
    }

    /**
     * Define the state for a tourism division.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function tourism()
    {
        return [
            'division_name' => 'Turismo'
        ];
    }
}
