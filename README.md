# leon.dance

**Leon vzw** is a Brussels-based dance practice around choreographer **Seppe Baeyens** —
nomadic, participatory, intergenerational. This repository will host the rebuilt
[`leon.dance`](https://leon.dance) website (Laravel) and the **LLM-maintained knowledge
wiki** that informs the design.

## Status

The website redesign is in flight. So far:

- **Discovery — concluded.** A structured desk-research dossier covering site audit,
  organisation, offerings & audiences, ecosystem, technical context, and a synthesis with
  redesign priorities. → [`docs/wiki/discovery/`](docs/wiki/discovery/)
- **Strategy — concluded** (2026-05-19). Org goals, personas, jobs-to-be-done, value
  proposition, user journey. → [`docs/wiki/strategy/`](docs/wiki/strategy/)
- **Design — active.** Scope, structure, image-map. → [`docs/wiki/design/`](docs/wiki/design/)
- **Build — pending.** The Laravel project that will replace the current Squarespace site
  will be added to this repo when the design is ready.

## Navigating the wiki

Start at [`docs/wiki/index.md`](docs/wiki/index.md) — a catalogue of every wiki page with
a one-line summary, category, and phase. From there, drill in.

[`docs/wiki/log.md`](docs/wiki/log.md) is an append-only timeline of how the wiki was
built. `grep "^## \["` for the headers.

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
