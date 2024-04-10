<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Division;
use App\Models\Anteproject;
use App\Models\Teachers;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'addres' => $this->faker->streetAddress,
            'asesor_name' => $this->faker->name,
            'job' => $this->faker->jobTitle,
            'company_phone_number' => $this->faker->phoneNumber,
            'company_email' => $this->faker->companyEmail,
            'work_area' => $this->faker->randomElement(['Tecnología de la información', 'Diseño y creatividad', 'Ingeniería y manufactura', 'Publicidad y mercadeo', 'Tecnología médica y salud', 'Energía y medio ambiente', 'Finanzas y consultoría', 'Arquitectura y diseño urbano', 'Tecnología y alimentos', 'Consultoría y gestión empresarial', 'Tecnología y educación', 'Sostenibilidad y medio ambiente', 'Tecnología y análisis de datos', 'Turismo y tecnología', 'Jardinería y paisajismo', 'Tecnología y derecho', 'Tecnología y entretenimiento', 'Moda y diseño', 'Biotecnología y salud']),
            'company_description' => $this->faker->sentence,
        ];
    }
}