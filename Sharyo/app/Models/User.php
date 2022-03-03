<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    /**
     * 
     */
    protected $fillable = [
        'name',
        'surname',
        'phoneNumber',
        'email',
        'password',
    ];

    /**
     * 
     */
    protected $hidden = [
        'create_at', 
        'updated_at',
    ];
}
