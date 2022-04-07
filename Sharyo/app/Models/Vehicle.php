<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $primaryKey = 'plateNumber';
    public $incrementing = false;
    protected $keyType = 'string';



    protected $table = 'vehicles';
    /**
     * 
     */
    protected $fillable = [
        'plateNumber',
        'model',
    ];

    public function drivers()
    {
        return $this->belongsTo(Driver::class);
    }
}
