<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comments extends Model
{
    use HasFactory;
    protected $fillable=['id_comment', 'general_comment', 'teacher_id', 'anteproject_id' ];

    public function anteproject(): BelongsTo
    {
        return $this->belongsTo(Project_management::class);
    }

    public function teacher():BelongsTo {
        return $this->belongsTo(Teachers::class);
    }
}
