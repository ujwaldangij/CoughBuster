<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HCP extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'hcps'; // Adjust as necessary

    // Specify which attributes are mass assignable
    protected $fillable = [
        'dvc_code',
        'hcp_name',
        'qualification',
        'city',
        'hospital',
        'attempt',
        'correct',
        'increase',
        'users',
    ];
}
