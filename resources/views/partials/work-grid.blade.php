{{-- Shared work-item grid (SP-05 × 4) · data: App\Support\SiteSections::work()
     Used by home §3 + dansateliers/index §2. Caller supplies the section wrapper + heading.
     Adds an "open call" chip (SP-16 sibling) on the Mariage card when a call is open. --}}
@php
    $openCallEditie = \App\Models\Edition::query()
        ->whereHas('project', fn ($q) => $q->where('slug', 'mariage'))
        ->openInschrijving()
        ->orderBy('starts_at')
        ->first();
@endphp
<ul class="grid md:grid-cols-2 gap-6">
    @foreach (\App\Support\SiteSections::work() as $card)
        @php
            $cardData = collect($card)->except('key')->all();
            if (($card['key'] ?? null) === 'mariage' && $openCallEditie) {
                $cardData['badge'] = 'open call';
            }
        @endphp
        <li>@include('partials.project-card', $cardData)</li>
    @endforeach
</ul>
