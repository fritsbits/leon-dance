<?php

namespace App\Models;

use App\Enums\AtelierType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Atelier extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'venue_id', 'day_of_week', 'start_time', 'end_time',
        'name', 'lead', 'is_active', 'sort',
    ];

    protected $casts = [
        'type' => AtelierType::class,
        'day_of_week' => 'integer',
        'is_active' => 'boolean',
        'sort' => 'integer',
    ];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function scopeOpen(Builder $query): Builder
    {
        return $query->where('type', AtelierType::Open->value);
    }

    public function scopeSchool(Builder $query): Builder
    {
        return $query->where('type', AtelierType::School->value);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('day_of_week')->orderBy('start_time');
    }

    public function dayLabel(): string
    {
        return ucfirst(Carbon::now()->locale('nl')->isoWeekday($this->day_of_week)->isoFormat('dddd'));
    }

    public function timeRange(): string
    {
        return $this->start_time.'–'.$this->end_time;
    }

    public function displayName(): string
    {
        return $this->name
            ?: $this->type->label().' · '.($this->venue?->name ?? '—').' · '.$this->dayLabel();
    }
}
