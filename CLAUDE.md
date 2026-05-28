# Leon — LLM Wiki + Project Repo

`leon.dance` = **Leon vzw**, the work structure around choreographer **Seppe Baeyens**: a
nomadic, participatory dance practice in Brussels (Atelier Leon, intergenerational works
*Birds* / *INVITED*), funded by the Flemish government and the VGC. Multilingual EN/FR/NL.

This repo holds (a) an **LLM-maintained knowledge wiki** under `docs/wiki/` driving the
website redesign, and (b) — soon — the **Laravel project** that will replace the current
Squarespace site. The wiki is a compounding artifact: sources synthesised into structured
pages, kept current as new sources arrive. You (the LLM) own it; the human curates sources
and asks questions.

---

## Directory layout

```
CLAUDE.md          # this file — the schema (auto-loaded every session)
docs/
  raw/             # IMMUTABLE sources. Read-only. (gitignored from the public repo)
    research/      # desk-research source notes
    assets/        # downloaded images/files
    current-site/  # machine-generated verbatim leon.dance mirror — `npm run capture`, never hand-edited
  wiki/            # LLM-owned synthesised pages
    index.md       # catalogue: Page | Summary | Category | Phase
    log.md         # append-only timeline
    discovery/  strategy/  design/  …   # per-phase pages
    _archive/      # concluded-phase evidence — local-only, NOT auto-loaded; browse on demand
  superpowers/     # internal design specs for the work itself (gitignored)
scripts/           # capture pipeline + helpers (gitignored)
# Laravel project lives at root once added (app/, routes/, resources/, …)
```

`docs/raw/`, `docs/superpowers/`, `scripts/` are local-only — gitignored from the public
`leon.dance` repo. The wiki cites material the public reader can't see; that's by design.

---

## Phases

Each phase owns a `docs/wiki/<phase>/` folder. Only the active phase's structure is
decided — later phases are deliberately undecided (YAGNI).

- **Discovery — concluded.** `docs/wiki/discovery/`.
- **Strategy — concluded 2026-05-19** (separate thread). `docs/wiki/strategy/`.
- **Design — ACTIVE** (separate thread). `docs/wiki/design/`; consumes Strategy.
- **Build — scaffolded 2026-05-27.** Laravel 13 at root; v1 = wireframe-fidelity stubs.
  Sitemap source-of-truth: `docs/wiki/design/30-structure.md`. Design tokens: `DESIGN.md`
  + `:root` in `resources/css/app.css`. See **Build phase — Laravel** below.

Every wiki page carries a `phase:` frontmatter key.

---

## Concerns register (per phase)

Every phase has **one** Concerns register at `docs/wiki/<phase>/01-concerns.md` — the
**single authoritative status index** for the phase. Answers "what's still open, can we
conclude this phase?" so status lives in one place, not scattered per-doc lists.

- **ID = phase letter + number, stable forever:** Discovery `D-nn`, Strategy `S-nn`,
  Design `Dn-nn`, Build `B-nn`. Never renumber.
- **Status:** 🔴 Open · 🟡 Partly · ✅ Closed. Closed/Partly rows always carry a one-line
  resolution + pointer (e.g. `client 2026-05-19 → 12-client-kickoff`).
- **Deduplicated** — one canonical concern even if several pages touch it. Per-doc "Open
  questions" sections are local detail and point at the register.
- **Layout = open-first:** at-a-glance line → Unresolved (🔴 + 🟡) → Closed audit trail.
- **Conclusion gate:** a phase may only be concluded when no concern is silently `Open` —
  every concern is `Closed`, or explicitly `Partly`/`deferred` with the reason recorded.
- Unresolved items at phase end **seed the next phase's register**.

Updated on every **ingest** and **lint** (see below).

---

## Research principles (govern every wiki page)

1. **Observation ≠ interpretation.** Both may appear; every interpretation is marked **⚠️**.
2. **No unverifiable superlatives.** Specific and falsifiable: "EN/FR/NL toggle on 3 of 7
   pages", not "great multilingual support".
3. **Always cite the source.** Every fact has a URL / screenshot / file. No source ⇒ ⚠️.
4. **Name what you don't know.** Internal data (budget, traffic) is invisible until the
   client says — record gaps explicitly.
5. **Write for a cold reader.** No unexplained jargon; headings that say something.

Discovery ran a structured desk-research playbook (site audit, audience, journeys,
competitive, ecosystem, synthesis). See `docs/wiki/discovery/00-discovery-plan.md` for the
runbook as executed and `discovery/10-desk-research.md` for the executive summary.

---

## Workflows

### Ingest (new source)
1. Drop the source into `docs/raw/` (or `docs/raw/research/`).
2. Read; discuss takeaways with the human.
3. Update relevant `docs/wiki/` pages + cross-refs.
4. Update `docs/wiki/index.md`.
5. Update the phase Concerns register (close/advance + add new).
6. Append an entry to `docs/wiki/log.md`.

### Query
1. Read `docs/wiki/index.md`. Drill into relevant pages.
2. Answer with citations.
3. If the answer is itself valuable (comparison, analysis, new connection), file it back
   as a new wiki page so explorations compound.

### Lint (periodic)
Health-check: contradictions between pages, stale claims, orphan pages, concepts without a
page, missing cross-refs, data gaps a search could fill, ⚠️ markers since verified.
**Reconcile each Concerns register** against per-doc "Open questions" — every item maps to
an ID, statuses agree, no silent `Open`s when a phase is being concluded.

---

## Page conventions

YAML frontmatter on every wiki page:

```yaml
---
title: <Page Title>
tags: []
sources: [<raw filename or url-shorthand>, ...]
phase: discovery        # or: strategy | design | build | cross-cutting
updated: YYYY-MM-DD
---
```

- One concept / entity / phase-output per page.
- Cross-link with standard markdown. Mark interpretations with ⚠️.

### Filename numbering

- **Discovery** uses a **tier-coded** prefix so the file list reads in dependency order:
  `0x` method/agenda + Concerns register · `1x` synthesis (front-door) · `2x` evidence ·
  `9x` raw research input. Increment by 1 within a tier; gaps allowed for later insertion.
- **Strategy & Design** use a **plane/artifact-aligned** scheme: `00` plan/brief · `01`
  Concerns register · `10/20/30/40/50` one file per artifact/plane in dependency order.
  Each phase's `00-*` page is the source of truth for its own numbering.

### `index.md` format
One table at `docs/wiki/index.md`, columns: `Page | Summary | Category | Phase`. Updated
on every ingest and lint.

### `log.md` format
Append-only. Header: `## [YYYY-MM-DD] <op> | <title>` where `<op>` ∈ {scaffold, ingest,
`<phase>`, query, lint}. Greppable: `grep "^## \[" docs/wiki/log.md`.

---

## Build phase — Laravel

Stack: Laravel 13 · Blade · Tailwind 4 (Vite) · SQLite (dev). Filament (admin) +
Livewire arrive when needed. **No Flux / Flux Pro** in this project. Maps when
needed: **OpenStreetMap + Leaflet.js** only — never Google Maps/Mapbox.

Sitemap source of truth: [`docs/wiki/design/30-structure.md`](docs/wiki/design/30-structure.md).
Content model (entities) lives in that file's content-model table — drive scaffolding from
there, not from ad-hoc decisions. Glossary: [`docs/wiki/glossary.md`](docs/wiki/glossary.md)
— one shared vocabulary across code, admin, and site. **Tone of voice (every webcopy
string):** [`docs/wiki/identity/10-tone-of-voice.md`](docs/wiki/identity/10-tone-of-voice.md)
— one Leon-stem with a register-dial (belonging P1/P4 ↔ institutional P2/P3); use the
9-point checklist before any page goes live or after any AI translation.

**Wiki reading path.** Default to the HOT pages (`design/30-structure`, `design/40-skeleton`,
`design/41-patterns`, `design/01-concerns`, `identity/10-tone-of-voice`, `glossary`, `DESIGN.md`)
plus the REFERENCE pages you need (`strategy/*`, the relevant `42-briefs/XX.md`, `design/20-scope`).
`docs/wiki/_archive/` (concluded Discovery) is browse-on-demand — don't load it unless a question
requires the underlying evidence.

**History → `log.md` + git, never page annotations.** Don't changelog-annotate wiki pages
(`was 2 → now 3`, `BG-x updated`, dated `**YYYY-MM-DD:**` change-notes). State the current fact;
the timeline lives in `log.md` and `git log`.

**Built pages: copy lives in the Blade.** Once a page's view is built and verified, its NL copy
lives in the Blade view — there is no parallel `-content.md`. The brief (`42-briefs/XX.md`) stays
as the UX spec, reviewed/updated as client input arrives.

### Wireframing mode (v1)

Visual rules:
- **Grayscale only.** No brand colours yet. Primary CTA: `.btn-primary` (dark on white).
  Never indigo / blue / purple. Destructive: `#dc2626`, success: `#16a34a` — nothing else.
- **Font: `system-ui` only.** No Google Fonts. Banned in wireframes: Inter, Roboto,
  Poppins, Montserrat, Space Grotesk, Geist Sans, Instrument Sans.
- **One radius project-wide** (`--radius`, `0.375rem`). Never mix `rounded-md` with `rounded-xl`.
- **Borders over shadows.** `shadow-sm` only for dropdowns; `shadow-lg` only for modals.
- **Icons:** Lucide outline, stroke-1.5, `size-4 / size-5 / size-6`.
- **Spacing:** only from `1, 2, 3, 4, 6, 8, 12, 16, 24`. Never `5, 7, 9, 11, …`.

Tokens & conventions:
- All colour values live in `:root` (in `resources/css/app.css`). **Never hardcode hex,
  never Tailwind arbitrary colour utilities.**
- All section padding via `.section`. Never inline `py-N` on a section.
- All buttons via `.btn-primary` / `.btn-ghost` / `.btn-text`. Never hand-rolled.
- Containers via `.container-wide` / `.container-text` / `.container-prose`.
- Focus ring via `:focus-visible` only. Never `box-shadow`, never `focus:ring-*`.

Content rules:
- **Never lorem ipsum.** Use realistic strawman copy (NL primary) or annotated placeholders
  like `[Product headline — benefit-focused, ~60 chars]`. The annotation is the value.
- Stubs render real or strawman copy; Skeleton-phase content briefs replace strawman
  as they arrive from the team.
- NL is the v1 language. FR/EN URL & routing model is **deferred to Skeleton** (Dn-).
- **All webcopy follows the [Tone of Voice guide](docs/wiki/identity/10-tone-of-voice.md)**
  (NL): invitation-forward, concrete, toonbaar i.p.v. prijzend, one reader per page.
  Verboden in publieke copy: *duurzaam, laagdrempelig, diversiteit* (cliché), *creatie*
  (use `project`), *werking, traject* (outside funder-page), *uniek/bekroond/vernieuwend*
  (laat anderen het zeggen). **No em-dash (—) in running public copy** — it reads as
  AI/dossier; use a comma, period, colon or parentheses (attribution after a quote is the
  one exception). Run the **9-point checklist** before any page ships.
- Use the [Glossary](docs/wiki/glossary.md) vocabulary in UI copy
  (*project · editie · groep · deelnemer · publiek · voorstelling · inschrijving · …*).
  Never `creatie` (use `project`); `werking` is internal-only, not a label.

Accessibility (always-required):
- Skip link as first child of `<body>`. `<main id="main-content">` wraps page content.
- Reduced-motion media query (already in `app.css`).
- Headings: strict nesting, never skip levels.
- Form labels: visible, programmatically associated. No placeholder-as-label.
- Min tap target: 44 × 44 CSS px for interactive elements.

Banned patterns (never generate):
- Purple/indigo/blue gradients. Gradient text. Glassmorphism. `backdrop-blur`.
- `border-left` accent stripes. Cards nested in cards.
- Hero-metric + sparkline + "trusted by"-logo-bar templates.
- Emoji in UI labels. Multiple border radii. Coloured drop shadows.

Alpine / Livewire / Filament:
- v1 stubs are static Blade — no Alpine, no Livewire yet.
- When admin arrives: Filament. It pulls in Livewire. Alpine ships with Livewire.
- Decision rule: Alpine for local UI state (toggles, show/hide), Livewire for server
  state. Don't duplicate state across the two.

### Directory shape (Laravel)

```
app/             # models, http, providers — populated as content-model lands
resources/
  css/app.css    # @theme + :root tokens + @layer base/components
  js/app.js
  views/
    layouts/app.blade.php
    partials/{nav,footer,page-header}.blade.php
    home.blade.php
    dansateliers/{index,atelier-leon,leon-op-school,mariage,mariage-editie,mobiele-dansstudio}.blade.php
    samenwerken/{index,opzetten,uitnodigen,doen}.blade.php
    over-leon/{index,missie-visie,impact,team,historiek,contact}.blade.php
    agenda.blade.php
routes/web.php   # one source for all v1 routes (named, NL slugs)
DESIGN.md        # human-readable token table
```

### Build phase Concerns

Use prefix **B-** in `docs/wiki/build/01-concerns.md` (file to be created when Build
phase needs its own register). Until then, Build-related decisions surface as `Dn-`
concerns in the Design register and graduate when the phase formally opens.

### Updating the build pipeline (page / pattern status)

The pipeline tracker is the **page-registry (`P-nn`) and patterns-library (`SP-nn`)
tables in [`docs/wiki/design/40-skeleton.md`](docs/wiki/design/40-skeleton.md)** —
rendered read-only at the `/build` dashboard (`build.dashboard`, non-prod, unlinked).
The dashboard *parses* these tables; the markdown is the source of truth. Run `/pipeline`
to do this guided; the steps below are what it follows.

- **Page stage columns:** `UX · Conf · Wire · Assets · UI · Back · OK`. Patterns have a
  single **Status** column. Stage emoji (parsed by `app/Support/Build/Stage.php`):
  🔴 niet begonnen · 🟠 bezig · 🟢 goed · ⚪ n.v.t. · ❓ te beslissen. `Conf` = content-
  confidence `1–5`.
- **Stage meaning** (so a bump is honest): **Wire 🟢** only when the view actually renders
  and is visually verified; **Assets** = media sourced (⚪ when the page needs none);
  **UI** = brand/surface pass (stays 🔴 in wireframe mode); **Back 🟢** only when the
  data/CMS is wired *and verified live*, not merely coded; **OK** = final sign-off (needs
  UI + client approval — don't set it early).
- **One update touches four things, in order:**
  1. The **row** — change the stage emoji(s). Keep all 12 columns intact or the dashboard
     drops the row.
  2. The **Top gaps** cell — delete gaps that are now resolved; add a terse "X live" note
     (match existing style, e.g. "open-atelier list live from Event model").
  3. The **Roll-up** prose below the table — keep the aggregate counts/lists consistent
     with the row you just changed.
  4. Append a **`## [YYYY-MM-DD] build | …`** entry to
     [`docs/wiki/log.md`](docs/wiki/log.md).
- **Verify before claiming done:** load `/build`, or run
  `app(App\Support\Build\BuildStatus::class)->report()` via tinker, and confirm the row's
  stages parse as intended, `warnings` is empty, and no unexpected `drift`.
