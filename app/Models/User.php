<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [

        'first_name',
        'middle_name',
        'last_name',
        'age',
        'gender',
        'address',
        'city',
        'state',
        'country',
        'zip'
    ];
}
