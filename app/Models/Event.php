<?php

namespace App\Models;

use App\Enums\AtelierType;
use App\Enums\EventType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    protected $fillable = [
        'type',
        'title',
        'lead',
        'venue_name',
        'partners',
        'atelier_id',
        'edition_id',
        'venue_id',
        'starts_at',
        'ends_at',
        'is_public',
        'notes',
    ];

    protected $casts = [
        'type' => EventType::class,
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'is_public' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saving(function (Event $event): void {
            $type = $event->type instanceof EventType ? $event->type : EventType::from($event->type);
            $hasAtelier = $event->atelier_id !== null;
            $hasEdition = $event->edition_id !== null;

            if ($type->isInternal()) {
                if ($hasAtelier || $hasEdition) {
                    throw new \InvalidArgumentException("Event type '{$type->value}' is internal and must have no atelier or edition parent.");
                }

                return;
            }

            $needsAtelier = in_array($type, [EventType::OpenAtelier, EventType::Klas], true);

            if ($needsAtelier && (! $hasAtelier || $hasEdition)) {
                throw new \InvalidArgumentException("Event type '{$type->value}' must have an atelier_id and no edition_id.");
            }

            if (! $needsAtelier && (! $hasEdition || $hasAtelier)) {
                throw new \InvalidArgumentException("Event type '{$type->value}' must have an edition_id and no atelier_id.");
            }
        });
    }

    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('starts_at', '>=', now()->startOfDay())->orderBy('starts_at');
    }

    public function scopePast(Builder $query): Builder
    {
        return $query->where('starts_at', '<', now()->startOfDay())->orderByDesc('starts_at');
    }

    public function scopeOfType(Builder $query, string|EventType $type): Builder
    {
        return $query->where('type', $type instanceof EventType ? $type->value : $type);
    }

    public function scopeForProject(Builder $query, string $slug): Builder
    {
        return $query->whereHas('edition.project', fn (Builder $q) => $q->where('slug', $slug));
    }

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Venue::class);
    }

    public function venueLabel(): string
    {
        return $this->venue?->name ?? (string) $this->venue_name;
    }

    public function atelier(): BelongsTo
    {
        return $this->belongsTo(Atelier::class);
    }

    public function edition(): BelongsTo
    {
        return $this->belongsTo(Edition::class);
    }

    public function scopeForAtelierType(Builder $query, AtelierType|string $type): Builder
    {
        $value = $type instanceof AtelierType ? $type->value : $type;

        return $query->whereHas('atelier', fn (Builder $q) => $q->where('type', $value));
    }
}
