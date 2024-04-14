<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Notifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'type_notification',
        'user_id',
        'status',
    ];

    protected $hidden =[
        'id'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
