# leon.dance

**Leon vzw** is a Brussels-based dance practice around choreographer **Seppe Baeyens** —
nomadic, participatory, intergenerational. This repository hosts the rebuilt
[`leon.dance`](https://leon.dance) website (Laravel) and the **LLM-maintained knowledge
wiki** that informs the design.

## Status

The website redesign is in flight. So far:

- **Discovery — concluded.** A structured desk-research dossier covering site audit,
  organisation, offerings & audiences, ecosystem, technical context, and a synthesis with
  redesign priorities. → [`docs/wiki/discovery/`](docs/wiki/discovery/)
- **Strategy — concluded** (2026-05-19). Org goals, personas, jobs-to-be-done, value
  proposition, user journey. → [`docs/wiki/strategy/`](docs/wiki/strategy/)
- **Design — active.** Scope, structure & sitemap, page skeletons, the reusable
  pattern library, identity & tone of voice. → [`docs/wiki/design/`](docs/wiki/design/)
- **Build — underway** (scaffolded 2026-05-27). A Laravel 13 app at the repository root
  replacing the current Squarespace site. v1 is wireframe-fidelity: grayscale Blade stubs
  driven by the design sitemap, a normalised content model, and a Filament admin.

## The Laravel app

**Stack:** Laravel 13 · Blade · Tailwind 4 (Vite) · SQLite (dev) · Filament admin
(Livewire). Maps, where needed, use OpenStreetMap + Leaflet only.

**Content model.** The agenda is the spine: an `Event` model normalised behind
`Project → Edition → Event` and `Atelier`/`Venue`, replacing the team's Excel overview.
Models live in [`app/Models/`](app/Models/); the admin is in
[`app/Filament/`](app/Filament/).

**Front-end.** NL-first wireframe stubs under [`resources/views/`](resources/views/)
(`home`, `dansateliers/*`, `samenwerken/*`, `over-leon/*`, `agenda`), with all routes named
in [`routes/web.php`](routes/web.php). Design tokens live in [`DESIGN.md`](DESIGN.md) and
`:root` in `resources/css/app.css`. The build pipeline is tracked in the page-registry and
pattern tables of [`docs/wiki/design/40-skeleton.md`](docs/wiki/design/40-skeleton.md) and
rendered read-only at the `/build` dashboard (non-prod).

**Local dev.** Served via Laravel Herd at `https://leon.test` (HTTPS, self-signed). The app
serves built assets, so run `npm run build` after CSS/Tailwind changes (or `npm run dev`).
SQLite is the dev database — `php artisan migrate --seed` to set it up.

## Navigating the wiki

Start at [`docs/wiki/index.md`](docs/wiki/index.md) — a catalogue of every wiki page with
a one-line summary, category, and phase. From there, drill in. The shared vocabulary used
across code, admin, and site lives in [`docs/wiki/glossary.md`](docs/wiki/glossary.md), and
every webcopy string follows the
[tone of voice guide](docs/wiki/identity/10-tone-of-voice.md).

[`docs/wiki/log.md`](docs/wiki/log.md) is an append-only timeline of how the wiki and build
progressed. `grep "^## \["` for the headers.

## Method

The wiki follows the **LLM-wiki pattern**: an AI agent reads raw research and curated
sources, synthesises them into structured pages, and keeps the pages current as new
sources arrive. The schema lives in [`CLAUDE.md`](CLAUDE.md) and is auto-loaded each
working session. The human curates sources and asks questions; the wiki is the compounding
artifact.

Note: some underlying material (raw research notes, photography, internal specs, capture
scripts) is local-only and **not in this public repo**. The wiki cites it but public
readers will see those citations as plain pointers rather than clickable links. The
analysis itself is intact and self-contained.

## License

All rights reserved. Contact via [leon.dance](https://leon.dance).
</content>
</invoke>


System: tool result for the Write call wasn't received. This does not necessarily mean the call failed. Continue, and use a different approach to verify if needed.