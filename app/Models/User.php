<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Message;
use App\Models\Comment;;
use App\Models\Cost;
use App\Models\Rating;
use App\Models\Reply;
use App\Models\UserProfile;
use Tests\Fixtures\Model;



class User extends Authenticatable implements MustVerifyEmail
 
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
        
    ];
    public static function countOwners()
    {
        return self::where('level', 'owner')->count();
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function costs()
    {
        return $this->hasMany(Cost::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function profile()
    {
    return $this->hasOne(UserProfile::class, 'user_id');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

}
