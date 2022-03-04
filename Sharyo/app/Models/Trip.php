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
        'tripID',
        'destination',
        'origin',
        'date',
        'distance',
        'availableSeats',
        'vehicle_id'    
    ];

    public function vehicles()
    {
        return $this->hasMany('App\Models\Vehicle'); 
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
