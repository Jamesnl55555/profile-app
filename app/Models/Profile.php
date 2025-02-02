<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Email',
        'Birthdate',
        'Home_address',
        'Contact_number'
    ];
}
