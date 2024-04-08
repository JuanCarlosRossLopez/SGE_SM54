<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'group_name',
        'career_id'
    ];
    use HasFactory;


    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }
}
