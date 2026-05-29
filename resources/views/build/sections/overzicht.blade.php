<section id="overzicht">
  <div class="stats">
    <a href="#paginas" class="stat">@svg('heroicon-o-document-text', 'stat-ico')<div class="n">{{ $overview['pagesAtDraft'] }}/{{ $overview['pagesTotal'] }}</div><div class="l">pagina's voorbij stub (Brief)</div></a>
    <a href="#paginas" class="stat">@svg('heroicon-o-document-text', 'stat-ico')<div class="n">{{ $overview['avgConfidence'] }}/5</div><div class="l">gem. content-confidence</div></a>
    <a href="#patronen" class="stat">@svg('heroicon-o-squares-2x2', 'stat-ico')<div class="n">{{ $overview['patternsDrafted'] }}/{{ $overview['patternsTotal'] }}</div><div class="l">patronen voorbij stub</div></a>
    <a href="#concerns" class="stat">@svg('heroicon-o-flag', 'stat-ico')<div class="n">{{ $overview['concernsOpen'] }}</div><div class="l">open concerns · {{ $overview['concernsPartly'] }} partly · {{ $overview['concernsClosed'] }} closed</div></a>
  </div>
  @if (! empty($drift))
    <div class="drift">
      <h3>⚠️ Drift — wiki vs. code ({{ count($drift) }})</h3>
      <ul>@foreach ($drift as $d)<li><a href="#{{ $d['id'] }}">{{ $d['id'] }}</a> — {{ \Illuminate\Support\Str::after($d['message'], ': ') }}</li>@endforeach</ul>
    </div>
  @else
    <p class="legend">✅ Geen drift — wiki en code lopen gelijk.</p>
  @endif
</section>
