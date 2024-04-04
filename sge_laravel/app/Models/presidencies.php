<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class presidencies extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'president_name',
        'president_lastname',
        'payroll_president',
        'user_id',
        'division_id',
        'career_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function division():HasOne{
        return $this->hasOne(Division::class, 'division_id');
    }

    public function career():HasOne{
        return $this->hasOne(Career::class, 'career_id');
    }
}
