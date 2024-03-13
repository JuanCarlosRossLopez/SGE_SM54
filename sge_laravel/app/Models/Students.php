<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'id_student',
        'project_creator',
        'strike',
        'user_id',
        'division_id',
        'anteproject_id',
        'adviser_id',
        'evaluation_date_id',
    ];
}
