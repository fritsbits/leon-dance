<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'area', 'address', 'lat', 'lng', 'photo', 'photo_credit'];

    protected $casts = ['lat' => 'float', 'lng' => 'float'];

    public function ateliers(): HasMany
    {
        return $this->hasMany(Atelier::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
