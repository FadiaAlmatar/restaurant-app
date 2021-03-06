<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    public function meals()
    {
     return $this->belongsToMany(Meal::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
