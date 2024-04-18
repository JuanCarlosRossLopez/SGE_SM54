<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Project_management;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'id_student',
        'career',
        'gruop_id',
        'division_id',
        'user_id',
        'anteproject_id',
        'evaluation_date_id',
    ];

    protected $hidden =[
        'id'
    ];
    public function books():BelongsTo{
        return $this->belongsTo(Books::class,'books_students');
    }
    public function teachers():BelongsTo{
        return $this->belongsTo(Teachers::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function projects():HasOne{
        return $this->hasOne(Project_management::class,'id_student');
    }
    
    public function projectManagement()
    {
        return $this->hasMany(Project_management::class, 'id_student', 'id');
    }

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class, 'careers_id');
    }

    public function project()
    {
        return $this->belongsToMany(Project_management::class, 'anteproject_student');
    }

    

}
