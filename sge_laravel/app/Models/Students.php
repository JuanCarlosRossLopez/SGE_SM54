<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
    public function books():HasOne{
        return $this->hasOne(Books::class);
    }
}
