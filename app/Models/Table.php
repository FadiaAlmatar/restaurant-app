<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function reservations()
    {
        return $this->belongsToMany(Reservation::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
