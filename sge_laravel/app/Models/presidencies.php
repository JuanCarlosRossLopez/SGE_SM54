<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presidencies extends Model
{
    use HasFactory;
    protected $fillable = [
        'president_name',
        'president_lastname',
        'payroll_president',
       'user_id',
       'division_id',
        'career_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
