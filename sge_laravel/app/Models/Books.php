<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_name',
        'book_front_page',
        'book_description',
        'author',
        'price',
        'students_id',
    ];

    public function students():BelongsTo{
        return $this->belongsTo(Students::class);
    }
}
