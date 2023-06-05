<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    // Relasi Many-to-One dengan model Cost
    public function cost()
    {
        return $this->belongsTo(Cost::class);
    }
}
