<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'nomor_telepon',
        'photo',
        'jenis_kelamin',
    ];

    

    public static function create(array $attributes = [])
{
    $user = User::findOrFail($attributes['user_id']);

    if ($user->level !== 'user') {
        throw new \Exception('Only users can have a user profile.');
    }

    return static::query()->create($attributes);
}

public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

}
