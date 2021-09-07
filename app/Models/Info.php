<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected $table = 'user_info';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'dob',
        'mobile',
        'designation',
        'gender',
        'hobbies',
        
    ];
}
