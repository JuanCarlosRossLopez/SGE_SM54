<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'addres',
        'asesor_name',
        'job',
        'company_phone_number',
        'company_email',
        'work_area',
        'company_description'  
    ];

    
}

