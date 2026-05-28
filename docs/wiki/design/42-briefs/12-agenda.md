---
title: P-12 Agenda — Skeleton brief
tags: [design, skeleton, brief, agenda, page-level, utility]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice §Agenda; _archive/discovery/26-agenda-analysis; app/Models/Event.php; app/Enums/EventType.php; existing routes/web.php agenda closure; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-12
slug: /agenda
type: Utility 3–5
updated: 2026-05-28
---

# P-12 Agenda — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft ([12-agenda-content](12-agenda-content.md)) · Code 🟠 first draft
> (filters + grouping + URL-param honoring shipped) · Approved — **Confidence:** **3 / 5**
> (was 3; structural decisions now locked; remaining gaps are content/data).
> **Section budget:** **4 sections** (Utility tier 3–5 ceiling — functionality-heavy
> but content-light: page-header · filter row · grouped list · context note).
> **Authored autonomously per task instruction "no user questions"; all open calls
> documented as best-guess decisions (BG-N).**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Default view = upcoming, all types, all projects/practices.** | Lands neutraal-datum-eerst per [TOV §Agenda](../../identity/10-tone-of-voice.md#agenda); honors [30-structure IA principle 5](../30-structure.md) (one surface, default shows everything). Past view = explicit toggle. | Yes |
| BG-2 | **Internal events (LWP, Leon rond de tafel) appear by default**, with a 1-line `meta` explainer beneath the row (no separate filter exclusion). | Per [30-structure IA principle 5](../30-structure.md): "Internal events appear by default with a 1-line explainer; no landing page." Home preview filters them out (per [P-01 §4 brief](01-home.md) gap #7); agenda shows them. | Yes — could push behind a checkbox if list reads cluttered |
| BG-3 | **3 filter axes, not 2** — type · practice · project. | [30-structure](../30-structure.md) names 2 axes (type × project/practice), but Project (*Mariage*) and RecurringPractice (*Atelier Leon · Leon op school*) are distinct entities in the content model with separate DB columns. Splitting the second axis into 2 selects keeps each filter's semantics clean and matches existing `Event` scopes (`forProject` / `forPractice`). The two appear adjacent in the UI and read as one "where it belongs" choice. | Yes — could merge into one select with prefixes ("Project: Mariage", "Practice: Atelier Leon") if the 3-axis grid feels heavy |
| BG-4 | **GET-param-based, no-JS filtering** via `<select onchange="this.form.submit()">`. | v1 stubs are static Blade — no Alpine/Livewire ([CLAUDE.md Build phase](../../../../CLAUDE.md)). URL is the state; bookmarks + back-button work. `route('agenda', ['project' => 'mariage'])` from home preview lands here clean. | Yes — could promote to Livewire when admin lands |
| BG-5 | **Grouping = by month** (NL: *juni 2026 · juli 2026 · …*), not by week or by date-bucket (*vandaag / deze week*). | Discovery [26-agenda-analysis](../../_archive/discovery/26-agenda-analysis.md): ~5 sessions/week sustained → week-buckets clutter; date-buckets (*vandaag*) need refresh logic. Month is the right granularity for an org with weekly cadence + multi-week project arcs. | Yes — could swap to week-buckets if cadence drops |
| BG-6 | **Page-header lede stays utility-neutral, no editorial warmth.** | [TOV §Agenda](../../identity/10-tone-of-voice.md#agenda): "Wordt gescand — geen redactionele toon … de warmte zit in de pagina's waarheen de agenda linkt." | Yes — copy refinement on review |
| BG-7 | **Default sort = ascending (eerstvolgende first)**; past view = descending (recentste eerst). | Conventional + matches the `upcoming` scope behavior in the `Event` model (`orderBy('starts_at')`). | Yes |
| BG-8 | **Empty state per filter combo** — "Geen activiteiten gevonden voor deze filters. [Wis filters]". Empty when no filters: "Nog niets gepland. Stuur ons een mailtje als je iets zoekt." (per [TOV §Empty states](../../identity/10-tone-of-voice.md#empty-states--404)). | Two distinct empty states — *filtered-zero* vs. *agenda-zero* — so the user knows whether to broaden the filter or contact the team. | Yes |

If any of BG-1 … BG-8 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **One surface, default shows everything** (per [30-structure IA principle 5](../30-structure.md)).
   The agenda is THE place to scan what Leon does — not a curated subset, not split per
   audience. Filters narrow; they don't replace the default.
2. **Dual job in one surface** (per [30-structure IA principle 5](../30-structure.md)):
   utility for participants ("when can I come?") + proof-density signal for funders ("look
   how much they actually do"). One surface serves both — no per-audience variant.
3. **Datum-eerst, neutraal** (per [TOV §Agenda](../../identity/10-tone-of-voice.md#agenda)).
   No editorial warmth on this page — the warmth lives on the pages the agenda links to.
   The agenda's job is to be scannable.
4. **Internal events visible by default** (per [30-structure IA principle 5](../30-structure.md)).
   LWP + Leon rond de tafel have no landing pages but ARE part of Leon's week — a
   1-line explainer beneath the row carries the context without inviting external sign-up.
5. **URL is the state** (BG-4). Filters live in `?type=…&practice=…&project=…&past=1`,
   not in client-side JS. Bookmarkable, back-button-friendly, deep-linkable from home + project pages.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  EÉN OVERZICHT                                                     │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 var. A)
│  Agenda                                                            │
│                                                                    │
│  Alles wat Leon doet op één plek. Filter op type of op project.    │
├────────────────────────────────────────────────────────────────────┤
│  Type              Praktijk            Project                     │ §2 FILTER ROW
│  ┌──alle types─▼┐ ┌──alle praktijken▼┐ ┌──alle projecten──▼┐       │   (3 selects ·
│                                                                    │    GET form ·
│  Eerstvolgende  ·  Voorbij           [Wis filters]                 │    + toggle row)
├────────────────────────────────────────────────────────────────────┤
│  juni 2026                                                         │ §3 GROUPED LIST
│  ───────────────────────────────────────────────────────────────   │   (per-month
│  WO 04 jun · 19:00   Atelier Leon · Lena                Piano…     │    headings ·
│  ZA 07 jun · 14:00   Atelier Leon x Mariage · Seppe     MdC        │    one row per
│  DO 12 jun · 20:00   Show Mariage · Team Leon           CAMPO      │    Event)
│  VR 13 jun · 10:00   Leon rond de tafel · Team Leon     MdC        │
│                      Intern overleg — geen publiek programma.      │  ← internal
│                                                                    │     explainer
│  juli 2026                                                         │
│  ───────────────────────────────────────────────────────────────   │
│  WO 02 jul · 19:00   Atelier Leon · Lena                Piano…     │
│  …                                                                 │
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ EÉN OVERZICHT               │ §1 SUBPAGE TOP
│ Agenda                      │
│ [lede wraps to 2 lines]     │
├─────────────────────────────┤
│ Type                        │ §2 FILTER ROW
│ ┌─alle types────────────▼─┐ │   (stacked
│ Praktijk                    │    1-col on
│ ┌─alle praktijken───────▼─┐ │    mobile)
│ Project                     │
│ ┌─alle projecten────────▼─┐ │
│                             │
│ Eerstvolgende · Voorbij     │
│ [Wis filters]               │
├─────────────────────────────┤
│ juni 2026                   │ §3 GROUPED LIST
│ ─────────────────────────── │
│                             │
│ WO 04 jun · 19:00           │
│ Atelier Leon · Lena         │
│ Pianofabriek                │
│                             │
│ ZA 07 jun · 14:00           │
│ Atelier Leon x Mariage · …  │
│ Maison des Cultures         │
│                             │
│ VR 13 jun · 10:00           │
│ Leon rond de tafel · …      │
│ Maison des Cultures         │
│ Intern overleg — geen       │  ← internal explainer
│ publiek programma.          │
│                             │
│ juli 2026                   │
│ …                           │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- Filter selects stack 1-col on mobile, 3-col grid ≥ md.
- Event rows reflow: date/time stack above title-block above venue on mobile;
  single-row baseline-aligned columns on desktop (`8rem · 1fr · auto`).
- Eerstvolgende/Voorbij toggle stays on its own line below filters at all sizes.
- "Wis filters" link only renders when at least one filter is active.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Waar ben ik en wat staat hier?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Composition:** eyebrow `EÉN OVERZICHT` (no parent link — Agenda is a top-level item) ·
  h1 `Agenda` · lede (BG-6 — utility-neutral).
- **Strawman lede:** *"Alles wat Leon doet op één plek. Filter op type of op project."*
- **No hero CTA** — page IS its own CTA (the list).

### §2 — Filter row (3 selects + view toggle + clear-link)

- **User question:** *"Hoe vind ik wat mij interesseert?"*
- **Pattern:** no SP — page-local pattern (functional, not visual). If reused on
  another listing page, promote to SP-14.
- **Composition:**
  - **3 `<select>`s** in a `grid md:grid-cols-3 gap-6`:
    - **Type** — `EventType` cases, internal ones suffixed `(intern)`.
    - **Praktijk** — `atelier-leon`, `leon-op-school`.
    - **Project** — `mariage` (only Project entity to date).
  - **Form behavior:** `method="GET" action="{{ route('agenda') }}"`; selects auto-submit
    on change (`onchange="this.form.submit()"`). No-JS users can still click a submit
    button — but for v1 the page works without one because selects auto-submit when
    JS available; static visitors still see the GET URL pattern via deep-links from
    other pages.
  - **Eerstvolgende / Voorbij toggle:** two text links below the filter form,
    preserving current filter state in URL (`past=1` toggles).
  - **Wis filters:** `btn-text` link that drops all query params, only rendered when
    any filter is active.
- **Label discipline:** visible labels above each select (per [CLAUDE.md a11y](../../../../CLAUDE.md):
  "Form labels: visible, programmatically associated. No placeholder-as-label.").
- **State note:** "Wis filters" link appears only when ≥ 1 filter is active OR
  `past=1`.

### §3 — Grouped event list

- **User question:** *"Wanneer kan ik wat zien?"*
- **Pattern:** custom row layout (denser than SP-07 — needs lead, partners, internal
  explainer slot). Not promoting to SP yet — single-use; revisit if needed elsewhere.
- **Why not SP-07:** SP-07's atomic 3-slot model (date · title-line · location)
  fits the home preview's "kom langs" reading. Agenda needs more data per row
  (lead name + partners + internal explainer) and benefits from a baseline-aligned
  grid (`8rem · 1fr · auto`) for scannability. The custom layout is a page-local
  enrichment of SP-07's shape — same visual language, more data.
- **Composition** (per row):
  - **Left column** (`w-32`): `dd D MMM` (e.g. `wo 4 jun`) + `HH:MM–HH:MM` below.
  - **Center column** (`flex-1`): event title (`font-medium`) · meta line with
    `type · lead · x partners` (where partners present) · **internal explainer**
    on a new meta line when `type->isInternal()`.
  - **Right column** (`auto`, right-aligned on md+): venue.
- **Grouping logic:** events grouped by `starts_at->isoFormat('MMMM YYYY')` (NL
  locale) — yields *juni 2026*, *juli 2026*, etc. Group heading is an `h2` with
  a `border-t` for visual separation.
- **Internal-event explainer:** below the meta line, in `.meta text-faint`.
  Copy per type (per [12-agenda-content](12-agenda-content.md) §Internal explainers).
- **No row CTA / no per-row inschrijving button** — drop-in events have no
  inschrijving; bookable events route to the project page where context lives.
  Per-row link target = project page if `project_slug` set, practice page if
  `practice_slug` set, otherwise `/agenda` self-link (internal events with no parent page).

### §4 — Context note (deferred)

- **Decision:** **no §4 in v0.1.** Anti-bloat — the page is functionally complete with
  §1–§3. Future surfaces that may land here: ICS export link · subscribe-to-agenda ·
  "newsletter when new dates land" — all deferred (Dn-03 GDPR pending; ESP not chosen).
- **Section budget:** 3 of 3–5 used. Headroom preserved.

## State inventory (full)

| State | Treatment |
|---|---|
| **Default** (no filters, upcoming) | All upcoming events, grouped by month, ascending. Internal events visible with explainer. |
| **Filtered** (≥1 filter active) | Same layout; filtered selects show selected; "Wis filters" link visible. |
| **Past view** (`?past=1`) | Header toggle reads "Voorbij" as active; ordering reversed (descending). Same layout otherwise. |
| **Empty — filtered-zero** | "Geen activiteiten gevonden voor deze filters." + `[Wis filters]` link. |
| **Empty — agenda-zero** (no filters, no events at all) | "Nog niets gepland. Stuur ons een mailtje als je iets zoekt: hallo@leon.dance." (per [TOV §Empty states](../../identity/10-tone-of-voice.md#empty-states--404)) |
| **Overflow — long venue name** | Wraps to 2 lines on desktop right column; stacks below on mobile. |
| **Overflow — long partner string** | Meta line wraps; no truncation. |
| **Internal event row** | Standard row + 1-line `meta text-faint` explainer below meta line. |
| **Loading** | n/a — static Blade, server-rendered; no loading state. (Would surface if Livewire-promoted later.) |
| **Error — invalid type query param** | `EventType::tryFrom()` returns null → filter ignored, page renders default. No error UI. |
| **Reduced motion** | Inherited (no motion on this page). |
| **Mobile** | Filter row stacks 1-col; event row reflows date-stack/title/venue. |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| — page-local: filter row | n/a | n/a (single-use; not promoting to SP) |
| — page-local: grouped event row | n/a | n/a (custom enrichment of SP-07's shape; not promoting) |

**No new shared patterns created.** SP-07 is *not* invoked here — the row variant
needed (date · type · lead · partners · venue · internal explainer) is page-local; SP-07
variant B in [41-patterns SP-07 §Variants](../41-patterns.md#sp-07--date-row) named
"full (Agenda)" anticipated *inschrijving-status* and *capacity-state* which are not
relevant pre-Dn-03; the simpler page-local row is the right v1 fit. SP-07 variant B
spec can be reopened when inschrijving lands.

## Canonical home for facts (anti-bloat discipline)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| All event dates + times + venues | **/agenda (this page)** — single source | Home (P-01 §4) shows top-3 upcoming public-only preview · per-project pages (P-05 §4) list project-scoped dates inline · editie pages (P-06) list editie-scoped dates inline |
| Event-type vocabulary | [Glossary](../../glossary.md) + `App\Enums\EventType` | Filter labels mirror enum labels |
| Internal-event explainers | **[12-agenda-content §Internal explainers](12-agenda-content.md)** | Surfaced only on this page beneath internal rows |
| Filter labels (NL) | **[12-agenda-content §Filter labels](12-agenda-content.md)** | — |
| Empty-state copy | **[12-agenda-content §Empty states](12-agenda-content.md)** | — |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA — n/a (utility page; list IS the action surface; per BG-1 no top CTA)
- [x] State inventory explicit (11 states enumerated above)
- [x] Section budget declared and respected (3 of 3–5)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (3 listed; page-local enrichments justified inline)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.**

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Real Project list — only `mariage` today. *Kosmos 2027* surfaces when ready. | `[content]` | Sam / Kristin | Filter completeness |
| 2 | Confirm internal-event 1-line explainer copy with team (currently strawman per content sidecar). | `[content]` | Sam / Kristin | §3 → final |
| 3 | Does "Klas" stay user-facing in the filter dropdown? It's the EventType label, but P1 newcomers may not parse it without context. Alternative: rename label to "Leon op school"-context-aware in filter only. | `[content]` | Kristin | Filter label final |
| 4 | ICS export / subscribe-to-agenda — defer to post-v1 (Dn-03 GDPR + ESP choice pending). | `[strategy]` | Deferred | §4 |
| 5 | Inschrijving / capacity column (SP-07 variant B full) — blocked by Dn-03 GDPR + Dn-11 ESP. | `[strategy]` | Deferred | row enrichment |
| 6 | Per-row href routing — current logic: project → project page · practice → practice page · else `/agenda` (no detail page). Editie pages (P-06) exist for Mariage — should voorstelling rows link to the editie page (`/dansateliers-performances/mariage/{editie}`) when `editie_slug` set? | `[research]` | Frederik | Row link precision |
| 7 | Past view scope — currently shows ALL past events. Cap at, say, 2 years to keep the list scannable? Or paginate? | `[content]` | Sam / Kristin | Past-view scale |

## Confidence rationale

- **Was 3 / 5** ([40-skeleton page registry](../40-skeleton.md#page-registry--single-source-of-status-truth)).
- **Now 3 / 5 → 4 / 5 trajectory** — playbook level-3 → 4 boundary: *"could write
  strawman; would need team review for accuracy."* All structural decisions made
  (BG-1 … BG-8); patterns chosen; states enumerated. Gaps #2 + #3 (content) push to
  4 once team verifies; gap #6 (editie-row routing) pushes further.
- **→ 4 / 5** when gaps #2 + #3 close (Kristin confirms explainer + filter labels).
- **→ 5 / 5** when gaps #1, #6, #7 close (project list complete · row routing precise ·
  past-view cap decided).

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure §Agenda + IA principle 5](../30-structure.md)
- Tone: [identity/10-tone-of-voice §Agenda](../../identity/10-tone-of-voice.md#agenda)
- Vocabulary: [glossary](../../glossary.md) (event-type enum names)
- Evidence: [discovery/26-agenda-analysis](../../_archive/discovery/26-agenda-analysis.md) (cadence + activity mix)
- Content: [12-agenda-content](12-agenda-content.md) (NL copy: empty states · filter labels · internal explainers)
- Code: [`resources/views/agenda.blade.php`](../../../../resources/views/agenda.blade.php) · [`app/Models/Event.php`](../../../../app/Models/Event.php) · [`app/Enums/EventType.php`](../../../../app/Enums/EventType.php) · [`routes/web.php`](../../../../routes/web.php) (agenda route)
- Sister: [01-home brief §4 Eerstvolgende](01-home.md) (the 3-row preview surface)
