<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anteproject extends Model
{
    use HasFactory;
    protected $fillable = [
        'anteproject_title',
        'information',
        'company_id',
        'project_status_id',
        'intership_id',
        'start_date',
        'finished_date'
    ];
}
