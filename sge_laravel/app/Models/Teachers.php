<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Students;


class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_teachers',
        'payroll',
        'user_id',
        'division_id'  
    ];

    protected $hidden = [
        'id'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

