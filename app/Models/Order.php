<?php

namespace App\Models;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    public function meals()
    {
        return $this->belongsToMany(Meal::class)->withpivot('quantity');

    }
    public function invoice()
    {
        return $this->hasOne(invoice::class);
    }
    public function offerslog()
    {
        return $this->hasMany(Offerlog::class);
    }
    public function saleslog()
    {
        return $this->hasMany(Salelog::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
