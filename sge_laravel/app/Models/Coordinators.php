<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


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
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
