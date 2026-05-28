<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Editie extends Model
{
    /** A closing date this many days out (or sooner) counts as "binnenkort". */
    private const CLOSES_SOON_DAYS = 21;

    protected $table = 'edities';

    protected $fillable = [
        'project_slug',
        'slug',
        'stad',
        'jaar',
        'stadgenoot',
        'periode',
        'starts_at',
        'ends_at',
        'partner',
        'locaties',
        'groep_size',
        'groep_age',
        'groep_prose_intro',
        'quote',
        'quote_attr',
        'inschrijving_open',
        'inschrijving_closes_at',
    ];

    protected $casts = [
        'jaar' => 'integer',
        'starts_at' => 'date',
        'ends_at' => 'date',
        'inschrijving_open' => 'boolean',
        'inschrijving_closes_at' => 'date',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    // Joined on the slug string (no Project model yet); renaming a slug orphans events — no DB cascade.
    public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'editie_slug', 'slug');
    }

    /** Date-derived editie status (independent of inschrijving). */
    public function status(): string
    {
        $today = now()->startOfDay();

        if ($today->lt($this->starts_at)) {
            return 'aankomend';
        }
        if ($this->ends_at !== null && $today->gt($this->ends_at)) {
            return 'afgelopen';
        }

        return 'lopend';
    }

    /** The recruitment window: a team toggle, with an optional auto-close date. */
    public function isInschrijvingOpen(): bool
    {
        if (! $this->inschrijving_open) {
            return false;
        }

        return $this->inschrijving_closes_at === null
            || $this->inschrijving_closes_at->gte(now()->startOfDay());
    }

    /** True when the call is open AND its closing date is within the "soon" window. */
    public function inschrijvingClosesSoon(): bool
    {
        return $this->isInschrijvingOpen()
            && $this->inschrijving_closes_at !== null
            && $this->inschrijving_closes_at->lte(now()->addDays(self::CLOSES_SOON_DAYS));
    }

    public function scopeOpenInschrijving(Builder $query): Builder
    {
        return $query
            ->where('inschrijving_open', true)
            ->where(function (Builder $q) {
                $q->whereNull('inschrijving_closes_at')
                    ->orWhereDate('inschrijving_closes_at', '>=', now()->toDateString());
            });
    }
}
