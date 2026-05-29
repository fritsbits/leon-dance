@php
    use App\Support\Build\BuildStatus;

    $groups = collect($concerns)->groupBy('status');
    $order = ['open' => 'Open', 'partly' => 'Partly', 'closed' => 'Closed'];
@endphp
<section id="concerns">
  <h2 class="sec">@svg('heroicon-o-flag', 'sec-ico') Concerns — register (Dn-)</h2>

  @foreach ($order as $status => $label)
    @php $items = $groups->get($status, collect()); @endphp
    @if ($items->isNotEmpty())
      <div class="cgroup"><span class="dot dot-{{ $status }}"></span>{{ $label }} <span class="cgcount">{{ $items->count() }}</span></div>
      @foreach ($items as $c)
        <div class="crow" id="{{ $c['id'] }}">
          <div class="cid">{{ $c['id'] }}</div>
          <div>
            <div class="ctitle">{!! BuildStatus::linkify(BuildStatus::summarize($c['title'], 140), $idMap) !!}</div>
            @if (trim($c['resolution']) !== '')
              <div class="cres">{!! BuildStatus::linkify(BuildStatus::summarize($c['resolution'], 130), $idMap) !!}</div>
            @endif
          </div>
        </div>
      @endforeach
    @endif
  @endforeach
</section>
