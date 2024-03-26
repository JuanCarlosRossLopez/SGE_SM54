<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Project_management;


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

    protected $hidden =[
        'id'
    ];
    public function books():Hasmany{
        return $this->hasMany(Books::class);
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
    

}
