<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function cost()
    {
        return $this->belongsTo(Cost::class, 'cost_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
