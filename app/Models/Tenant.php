<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenants';

    protected $fillable = [
        'id_cost',
        'name',
        'username',
        'email',
        'password',
        'phone_no',
        'gender',
        'photo',
    ];

    public function cost()
    {
        return $this->belongsTo(Cost::class, 'id_cost');
    }
}
