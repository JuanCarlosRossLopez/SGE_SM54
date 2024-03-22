<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Teachers;
use App\Models\Students;





class Teaching_advice extends Model
{
    use HasFactory;
    protected $fillable = ['teacher_id','student_id'];

    public function teacher():BelongsTo{
        return $this->belongsTo(Teachers::class,'teacher_id');
    }
    public function student():BelongsTo{
        return $this->belongsTo(Students::class,'student_id');
    }

    
}



