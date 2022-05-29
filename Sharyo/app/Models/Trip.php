<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';
    /**
     * 
     */
    protected $fillable = [
        'date',
        'availableSeats',   
        'driver',
        'origin',
        'destination',
        'price'
    ];

    public function cities_origin()
    {
        return $this->hasMany('App\Models\City'); 
    }
    public function cities_destination()
    {
        return $this->hasMany('App\Models\City'); 
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function drivers()
    {
        return $this->hasMany('App\Models\Driver'); 
    }


}
