<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_student extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'student_id'
    ];



    public function books(){
        return $this->belongsTo(Books::class, 'book_id');
    }


    public function students(){
        return $this->belongsTo(Students::class, 'student_id');
    }
}
