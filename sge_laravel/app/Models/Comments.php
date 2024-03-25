<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Teachers;
use App\Models\Project_management;

class Comments extends Model // Nombre de clase en singular
{
    use HasFactory;

    // Asegúrate de que todos los campos que vas a asignar masivamente estén listados aquí.
    // He notado que incluiste 'id_comment' que parece un ID autoincremental, usualmente no necesitas incluirlo en fillable.
    protected $primaryKey = 'id';

    protected $fillable = ['general_comment', 'teacher_id', 'project_management_id'];

    // Método anteproject() ajustado para seguir la convención de nombres de modelo en singular
    public function project_management(): BelongsTo
    {
        // Asegúrate de que el nombre de la clase del modelo sea correcto.
        // Laravel asume que el nombre de la tabla es el plural del nombre del modelo, por lo que anteproject debería tener una tabla llamada anteprojects.
        return $this->belongsTo(Project_management::class); // Asegúrate de que el nombre del modelo sea Anteproject
    }

    // Método teacher() ajustado para seguir la convención de nombres de modelo en singular
    public function teacher(): BelongsTo
    {
        // Similar a anteproject, asegúrate de que el nombre de la clase del modelo sea Teachers y su tabla correspondiente teachers.
        return $this->belongsTo(Teachers::class); // Asegúrate de que el nombre del modelo sea Teacher
    }

}

