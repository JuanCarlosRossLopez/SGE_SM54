<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;

class Teachers extends Model
{
    use HasFactory;
    protected $fillable =[
      'name_teachers',
      'payroll',
      'id_user',
      'division_id'  
    ];
    public function user():BelongsToMany{
        return $this->belongsToMany(User::class);
    }
}
