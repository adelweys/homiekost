<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
