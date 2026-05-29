@php
    $nav = [
        ['label' => 'Dansateliers & performances', 'href' => route('dansateliers.index')],
        ['label' => 'Samenwerken',                 'href' => route('samenwerken.index')],
        ['label' => 'Agenda',                      'href' => route('agenda')],
        ['label' => 'Over Leon',                   'href' => route('over.index')],
    ];
@endphp

<header class="border-b border-[var(--color-border)]">
    <div class="container-wide flex h-16 items-center justify-between gap-6">
        <a href="{{ route('home') }}" class="font-medium no-underline">Leon</a>

        <nav aria-label="Hoofdnavigatie" class="hidden md:block">
            <ul class="flex items-center gap-6 text-sm">
                @foreach ($nav as $item)
                    <li>
                        <a href="{{ $item['href'] }}"
                           class="no-underline {{ request()->is(trim(parse_url($item['href'], PHP_URL_PATH), '/') . '*') ? 'font-medium' : '' }}">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div class="meta hidden md:block" aria-label="Taal">
            <span aria-current="true">NL</span>
            <span class="text-[var(--color-border)]">·</span>
            <span>FR</span>
            <span class="text-[var(--color-border)]">·</span>
            <span>EN</span>
        </div>
    </div>

    {{-- Mobile nav stub --}}
    <nav aria-label="Hoofdnavigatie mobiel" class="md:hidden border-t border-[var(--color-border-subtle)]">
        <ul class="container-wide flex flex-wrap gap-x-4 gap-y-2 py-3 text-sm">
            @foreach ($nav as $item)
                <li><a href="{{ $item['href'] }}" class="no-underline">{{ $item['label'] }}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
