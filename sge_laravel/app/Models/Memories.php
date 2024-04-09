<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Memories extends Model
{
    use HasFactory;

    protected $fillable=['id_memory', 'memory_name', 'memorie_pdf', 'student_id' ];

    public function student():belongsTo {
        return $this->belongsTo(students::class);
    }
}
