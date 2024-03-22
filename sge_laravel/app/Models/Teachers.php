<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;
use APP\Models\Comment;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_teachers',
        'payroll',
        'id_user',
        'division_id'  
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function comments( )
    {
        return $this->hasMany(Comments::class);

    }
}

