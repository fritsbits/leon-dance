<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Joined on the slug string until editions.project_id lands (Task B1).
    public function editions(): HasMany
    {
        return $this->hasMany(Edition::class, 'project_slug', 'slug');
    }
}
