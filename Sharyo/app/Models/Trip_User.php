<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip_User extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'trip_user';
    /**
     * 
     */
    protected $fillable = [
        'trip_id',
        'user_id',
    ];
}
