<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear algunas divisiones
        Division::factory()->count(5)->create();
    }
}
