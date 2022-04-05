<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'drivers';
    /**
     * 
     */
    protected $fillable = [
        'nif',
        'name',
        'experience',
        'distance',
        'vehicle_id'
    ];

    public function trips()
    {
        return $this->belongsTo(Trip::class);
    }
    public function vehicles()
    {
        return $this->hasMany('App\Models\Vehicle'); 
    }
}
