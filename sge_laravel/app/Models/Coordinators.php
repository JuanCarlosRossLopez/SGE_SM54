<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinators extends Model
{
    use HasFactory;

    protected $fillable =[
      'coordinator_name',
      'payroll',
      'id_user',
      'division_id'  
    ];

    public function user():BelongsToMany{
        return $this->belongsToMany(User::class);
    }
}
