<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use \App\Models\Students;
use \App\Models\Companies;
use \App\Models\Status_project;
use \App\Models\Career;
use \App\Models\Division;
use \App\Models\Group;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //si hay error al obtener los seeders de empresas comenten el de user y role
        $user = User::factory(1)->create()->first(); // Obtener el primer usuario de la colección

        $role = Role::where('name', 'Administrador')->first(); // Reemplaza 'nombre_del_rol' con el nombre real del rol

        if ($role) {
            $user->assignRole($role);
        }



        Companies::factory(20)->create();
        Status_project::create(['status_project' => 'Pendiente']);
        Status_project::create(['status_project' => 'Rechazado']);
        Status_project::create(['status_project' => 'Aprobado']);

        Division::create(['division_name' => 'Ingeniería']);

        Career::create([
            'career_name' => 'Tecnologías de la Información área Desarrollo de Software Multiplataforma',
            'career_description' => 'El egresado de la carrera de Tecnologías de la Información área Desarrollo de Software Multiplataforma será capaz de desarrollar software multiplataforma, aplicaciones web y móviles, así como administrar bases de datos y redes de computadoras, con el fin de satisfacer las necesidades de las organizaciones en el ámbito de las tecnologías de la información y comunicación. Además, podrá diseñar, implementar y administrar sistemas de información, así como brindar soporte técnico a los usuarios de las tecnologías de la información y comunicación. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de las tecnologías de la información y comunicación, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);

        Career::create([
            'career_name' => 'Tecnologías de la Información área Infraestructura de Redes Digitales',
            'career_description' => 'El egresado de la carrera de Tecnologías de la Información área Infraestructura de Redes Digitales será capaz de diseñar, implementar y administrar infraestructuras de redes digitales, así como brindar soporte técnico a los usuarios de las tecnologías de la información y comunicación, con el fin de satisfacer las necesidades de las organizaciones en el ámbito de las tecnologías de la información y comunicación. Además, podrá desarrollar software multiplataforma, aplicaciones web y móviles, así como administrar bases de datos y redes de computadoras. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de las tecnologías de la información y comunicación, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);
        Career::create([
            'career_name' => 'Mantenimiento área Naval*',
            'career_description' => 'El egresado de la carrera de Mantenimiento área Naval será capaz de realizar mantenimiento preventivo y correctivo a sistemas mecánicos, eléctricos, electrónicos, hidráulicos y neumáticos de embarcaciones, con el fin de garantizar su operatividad y seguridad. Además, podrá realizar inspecciones técnicas a embarcaciones, así como elaborar informes técnicos y presupuestos de mantenimiento. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de mantenimiento naval, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);
        Career::create([
            'career_name' => 'Mantenimiento Naval',
            'career_description' => 'El egresado de la carrera de Mantenimiento Naval será capaz de realizar mantenimiento preventivo y correctivo a sistemas mecánicos, eléctricos, electrónicos, hidráulicos y neumáticos de embarcaciones, con el fin de garantizar su operatividad y seguridad. Además, podrá realizar inspecciones técnicas a embarcaciones, así como elaborar informes técnicos y presupuestos de mantenimiento. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de mantenimiento naval, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);
        Career::create([
            'career_name' => 'Ingeniería en Redes Inteligentes y Ciberseguridad ',
            'career_description' => 'El egresado de la carrera de Ingeniería en Redes Inteligentes y Ciberseguridad será capaz de diseñar, implementar y administrar redes inteligentes y sistemas de ciberseguridad, con el fin de garantizar la confidencialidad, integridad y disponibilidad de la información en las organizaciones. Además, podrá desarrollar software multiplataforma, aplicaciones web y móviles, así como administrar bases de datos y redes de computadoras. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de las tecnologías de la información y comunicación, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);
        Career::create([
            'career_name' => 'Ingeniería en Desarrollo y Gestión de Software',
            'career_description' => 'El egresado de la carrera de Ingeniería en Desarrollo y Gestión de Software será capaz de diseñar, implementar y administrar sistemas de información, con el fin de satisfacer las necesidades de las organizaciones en el ámbito de las tecnologías de la información y comunicación. Además, podrá desarrollar software multiplataforma, aplicaciones web y móviles, así como administrar bases de datos y redes de computadoras. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de las tecnologías de la información y comunicación, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);
        Career::create([
            'career_name' => 'Ingeniería en Mantenimiento Industrial',
            'career_description' => 'El egresado de la carrera de Ingeniería en Mantenimiento Industrial será capaz de realizar mantenimiento preventivo y correctivo a sistemas mecánicos, eléctricos, electrónicos, hidráulicos y neumáticos de maquinaria industrial, con el fin de garantizar su operatividad y seguridad. Además, podrá realizar inspecciones técnicas a maquinaria industrial, así como elaborar informes técnicos y presupuestos de mantenimiento. Asimismo, podrá desempeñarse en el ámbito de la docencia y la investigación científica en el área de mantenimiento industrial, con una actitud ética y de responsabilidad social.',
            'division_id' => 1
        ]);


        Group::create([
            'group_name' => 'SM61',
            'career_id' => 1
        ]);
        Group::create([
            'group_name' => 'SM62',
            'career_id' => 1
        ]);
        Group::create([
            'group_name' => 'SM63',
            'career_id' => 1
        ]);
        Group::create([
            'group_name' => 'SM64',
            'career_id' => 1
        ]);

      


    }
}
