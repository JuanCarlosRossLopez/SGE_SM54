<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project_Likes extends Model
{
    use HasFactory;

    
    protected $fillable=['like','teacher_id','project_management_id'];

    public function teachers(): HasMany
    {
        return $this->hasMany(Teachers::class, 'teacher_id');
    }
    public function project_management(): BelongsTo
    {
        return $this->belongsTo(Project_management::class);
    }

    
}
