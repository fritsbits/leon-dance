@php use App\Support\Build\BuildStatus; @endphp
<section id="patronen">
  <h2 class="sec">@svg('heroicon-o-squares-2x2', 'sec-ico') Patronen — shared library</h2>
  @foreach ($patterns as $p)
    <div class="row" id="{{ $p['id'] }}">
      <div class="rid">{{ $p['id'] }}</div>
      <div>
        <b>{{ $p['name'] }}</b> <span class="badge">{{ $p['status'] }}</span>
        @if (! empty($p['drift']))<span class="warn" title="{{ implode(' · ', $p['drift']) }}">⚠</span>@endif
        <br><span class="gaps">used on: {!! BuildStatus::linkify($p['usedOn'], $idMap) !!}</span>
      </div>
    </div>
  @endforeach
</section>
