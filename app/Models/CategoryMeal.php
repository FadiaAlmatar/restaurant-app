<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMeal extends Model
{
    use HasFactory;
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getImageAttribute($value)
    {
        return asset("storage/{$value}");
    }
}
