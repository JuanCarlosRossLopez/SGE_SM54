<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'career_nanme',
        'career_description',
        'division_id',
        'division_name'
    ];
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
