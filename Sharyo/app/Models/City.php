<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    protected $table = 'cities';
    /**
     * 
     */
    protected $fillable = [
        'id',
        'name',
        'state'
    ];
    protected $primaryKey = 'name';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function trips_origin()
    {
        return $this->belongsTo(Trip::class);
    }

    public function trips_destination()
    {
        return $this->belongsTo(Trip::class);
    }
}
