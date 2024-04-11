<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status_project;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status_project::create(['status_project' => 'Pendiente']);
        Status_project::create(['status_project' => 'Rechazado']);
        Status_project::create(['status_project' => 'Aprobado']);
    }
}
