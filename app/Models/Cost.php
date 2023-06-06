<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
// use Cviebrock\EloquentSluggable\Sluggable;




class Cost extends Model
{
    use HasFactory;
    // use Sluggable;
    
    

    

    protected $table = 'costs';
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'cost_name',
    //             'unique' => true,
    //             'separator' => '-',
    //             'onUpdate' => false,
    //         ],
    //     ];
    // }


    // Relasi One-to-Many dengan model Room
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    // Relasi Many-to-One dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function costFacilities()
{
    return $this->hasOne(CostFacility::class);
}
//     public function getSlugAttribute()
// {
//     return Str::slug($this->cost_name);
//     // return $this->getAttribute('slug');

// }

}
