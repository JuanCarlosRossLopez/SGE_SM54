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

    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class, 'id_comment');
    }
    public function likes(): BelongsTo
    {
        return $this->belongsTo(Project_Likes::class);
    }


    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
    
}

