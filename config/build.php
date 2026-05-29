<?php

return [
    // Wiki sources (relative to base_path).
    'sources' => [
        'structure' => 'docs/wiki/design/30-structure.md',
        'skeleton' => 'docs/wiki/design/40-skeleton.md',
        'concerns' => 'docs/wiki/design/01-concerns.md',
    ],

    'briefs_dir' => 'docs/wiki/design/42-briefs',

    // Drift heuristics for "is the view still a stub?"
    'stub_line_threshold' => 25,
    'stub_markers' => [
        '[placeholder',
        'Bron: Skeleton content brief',
        '[Editie:',
        '[stad · jaar',
    ],

    // slug (no leading slash) → view-file path, for code-drift checks.
    // Slugs not listed are skipped for the view-stub check (route check still runs).
    'slug_views' => [
        '/' => 'resources/views/home.blade.php',
        'dansateliers-performances' => 'resources/views/dansateliers/index.blade.php',
        'dansateliers-performances/atelier-leon' => 'resources/views/dansateliers/atelier-leon.blade.php',
        'dansateliers-performances/leon-op-school' => 'resources/views/dansateliers/leon-op-school.blade.php',
        'dansateliers-performances/mariage' => 'resources/views/dansateliers/mariage.blade.php',
        'dansateliers-performances/mariage/{editie}' => 'resources/views/dansateliers/mariage-editie.blade.php',
        'dansateliers-performances/mobiele-dansstudio' => 'resources/views/dansateliers/mobiele-dansstudio.blade.php',
        'samenwerken' => 'resources/views/samenwerken/index.blade.php',
        'samenwerken/opzetten' => 'resources/views/samenwerken/opzetten.blade.php',
        'samenwerken/uitnodigen' => 'resources/views/samenwerken/uitnodigen.blade.php',
        'samenwerken/doen' => 'resources/views/samenwerken/doen.blade.php',
        'agenda' => 'resources/views/agenda.blade.php',
        'over-leon' => 'resources/views/over-leon/index.blade.php',
        'over-leon/missie-visie' => 'resources/views/over-leon/missie-visie.blade.php',
        'over-leon/impact' => 'resources/views/over-leon/impact.blade.php',
        'over-leon/team' => 'resources/views/over-leon/team.blade.php',
        'over-leon/historiek' => 'resources/views/over-leon/historiek.blade.php',
        'over-leon/contact' => 'resources/views/over-leon/contact.blade.php',
    ],
];
