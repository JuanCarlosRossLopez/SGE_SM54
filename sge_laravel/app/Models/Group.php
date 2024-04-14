<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Career;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Group extends Model
{
    protected $fillable = [
        'career_id',
        'group_name',
        
    ];
    use HasFactory;


    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class, 'career_id');
    }
    public function division(): HasMany
    {
        return $this->hasMany(Group::class);
    }
}
