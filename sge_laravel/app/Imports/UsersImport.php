<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Group;
use App\Models\Career;
use App\Models\Students;
use App\Models\Division;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Asignar el rol según el valor en $row[0]
            $roleName = $row[0];            
            $role = DB::table('roles')->where('name', $roleName)->first();

            if (!$role) {
                // Si el rol no se encuentra, puedes manejar el caso según sea necesario
                // Por ejemplo, asignar un rol predeterminado o registrar un error
                continue;
            }

            // Buscar el grupo, carrera y división
            $career = Career::where('career_name', $row[5])->first();
            $division = Division::where('division_name', $row[6])->first();
            $group = Group::where('group_name', $row[7])->first();
            if (!$group || !$career || !$division) {
                continue;
            }

            // Crear el usuario
            $user = User::create([
                'email' => $row[1],
                'password' => Hash::make($row[2]),
            ]);

            // Asignar el rol al usuario
            DB::table('model_has_roles')->insert([
                'role_id' => $role->id,
                'model_type' => 'App\Models\User',
                'model_id' => $user->id,
            ]);

            // Crear un estudiante
            $student = new Students([
                'student_name' => $row[3],
                'id_student' => $row[4],
            ]);

            // Asociar el estudiante con el usuario, grupo, carrera y división
            $student->user()->associate($user);
            $student->group()->associate($group);
            $student->career()->associate($career);
            $student->division()->associate($division);

            // Guardar el estudiante
            $student->save();
        }
    }
}
