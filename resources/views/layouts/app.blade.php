<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Leon' }} · Leon</title>
    <meta name="description" content="{{ $description ?? 'Leon: participatieve dans in Brussel.' }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[var(--color-surface)] text-[var(--color-text)]">
    <a href="#main-content" class="skip-link">Skip to content</a>

    @include('partials.nav')

    <main id="main-content">
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
