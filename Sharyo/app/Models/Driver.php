<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $primaryKey = 'nif';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'drivers';
    /**
     * 
     */
    protected $fillable = [
        'nif',
        'name',
        'experience',
        'vehicle_id',
        'photo'
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
