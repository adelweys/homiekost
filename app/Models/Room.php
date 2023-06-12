<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cost;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'cost_id',
        'room_name',
        'roomsize',
        'tableset',
        'wardrobe',
        'closet',
        'bed',
        'fan',
        'ac',
        'electric',
        'pam',
        'price',
        'photo',
    ];
    public static function countRooms()
    {
        return self::count();
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class);
    }
}
