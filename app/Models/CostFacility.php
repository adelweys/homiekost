<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cost;

class CostFacility extends Model
{
    use HasFactory;
    protected $table = 'cost_facilities';

    protected $fillable = [
        'cost_id',
        'car_park',
        'bike_park',
        'wifi',
        'kitchen',
        'security',
        'electric',
        'pam',
        'bathroom',
    ];

    public function cost()
    {
        return $this->belongsTo(Cost::class, 'id_cost');
    }
}
