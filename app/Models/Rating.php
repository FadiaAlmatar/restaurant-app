<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

public function restaurants()
{
    return $this->belongsToMany(Restaurant::class);
}
public function getRouteKeyName()
    {
        return 'slug';
    }

}
