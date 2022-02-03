<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'phone',
        'email',
        'home_address',
        'residental_address'
    ];

}