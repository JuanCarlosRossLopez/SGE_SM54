<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Teachers;
use App\Models\Project_management;

class Comments extends Model // Nombre de clase en singular
{
    use HasFactory;

    public function anteproject(): BelongsTo
    {
        return $this->belongsTo(Project_management::class);
    }

    public function teacher():BelongsTo {
        return $this->belongsTo(Teachers::class);
    }
    


}

