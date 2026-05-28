---
title: Shared patterns library — detailed specs (Garrett Plane 4)
tags: [design, skeleton, patterns, wireframe, components]
sources: [40-skeleton; 30-structure; CLAUDE.md (Build phase rules); DESIGN.md; resources/css/app.css; existing partials/{nav,footer,page-header}.blade.php]
phase: design
updated: 2026-05-27
---

# Shared patterns library — detailed specs

> **Plane** 4 (Garrett) · sibling to [40-skeleton](40-skeleton.md). The **index** lives in
> 40-skeleton §"Shared patterns library" (one row per pattern with status). **Full specs
> live here.** A pattern enters this file the moment it leaves 🔴 stub. Page briefs (in
> `42-briefs/`) reference patterns by SP-id; deviation requires inline justification.

## Status snapshot (v0.5, 2026-05-28 — bumped by open-call / inschrijving flow build)

| SP-id | Pattern | Status | Spec |
|---|---|---|---|
| SP-01 | Primary nav | 🟠 first draft | [↓](#sp-01--primary-nav) |
| SP-02 | Footer | 🟠 first draft | [↓](#sp-02--footer) |
| SP-03 | Hero — home | 🟠 first draft | [↓](#sp-03--hero--home) (thin — spec lives in [42-briefs/01-home §1](42-briefs/01-home.md)) |
| SP-04 | Subpage top | 🟠 first draft | [↓](#sp-04--subpage-top) |
| SP-05 | Project card | 🟠 first draft | [↓](#sp-05--project-card) |
| SP-06 | Editie card | 🟠 first draft | [↓](#sp-06--editie-card) |
| SP-07 | Date-row | 🟠 first draft | [↓](#sp-07--date-row) |
| SP-09 | Funder / partner wall (variants A · B · C) | 🟠 first draft | [↓](#sp-09--funder--partner-wall) |
| SP-11 | Contact form | 🟠 first draft (partial) | [`partials/contact-form.blade.php`](../../../resources/views/partials/contact-form.blade.php) — server-handled (POST /contact → ContactController → ContactRequestMail). Props: heading, intro, onderwerp, berichtHelp?, submitLabel?. Live on uitnodigen + contact page. |
| SP-12 | Quote / testimony | 🟠 first draft | [↓](#sp-12--quote--testimony) — partial: [`resources/views/partials/quote.blade.php`](../../../resources/views/partials/quote.blade.php) (NEW 2026-05-28) |
| SP-13 | Photo block | 🟠 first draft | [↓](#sp-13--photo-block) |
| SP-16 | Open-call band | 🟠 first draft | [↓](#sp-16--open-call-band) — partial: [`partials/open-call-band.blade.php`](../../../resources/views/partials/open-call-band.blade.php) (NEW 2026-05-28). Conditional; self-removing when no open call. |
| SP-08 | Agenda preview strip | 🔴 **DEPRECATED** | superseded by SP-07 ×N direct usage in P-01 §4 + P-15 "In cijfers" surface; slot kept for ID stability, no spec planned |
| SP-10 | Inschrijving form | 🔴 stub | blocked by Dn-03 GDPR **minors slice**; on-page stubs render `mailto:` + visible "form in voorbereiding" annotation |

**12 / 14** patterns at 🟠 first draft (was 11 / 13). New since v0.4: **SP-16 Open-call
band** (conditional open-call CTA surface; variants `home` + `project`; chip sibling on
SP-05 work-grid Mariage card). Only 🔴 remaining is **SP-10** (GDPR-blocked).

### Candidate patterns (surfaced by the wave, not yet promoted)

Per **draft-on-first-use / promote-on-3rd-use** library discipline:

| Candidate | Where it appeared | Promote when |
|---|---|---|
| **SP-14 text-link rows** | P-01 §5 · P-08 §2 · P-18 §3 (3 uses) | **Ready to promote** — flagged by P-08 + P-18 agents on this wave. Defer to next pattern-pass; create `partials/text-link-list.blade.php` + spec entry below SP-13. |
| **Person card** (P-16 local SP-NEW-1) | P-16 only (kerngroep + geassocieerd grid) | 2nd use — likely P-09 (project owners) or P-18 (contact persons). |
| **SP-15 map placeholder** | P-18 only (Lion City OSM deep-link) | When Leaflet bootstraps in `app.js`. Per [CLAUDE.md](../../../CLAUDE.md): OpenStreetMap + Leaflet.js only, never Google Maps/Mapbox. | 3 patterns still 🔴 (SP-08 redundancy-flagged · SP-10 GDPR-blocked
· SP-11 awaits first contact-bearing page brief).

**Order rationale.** The four drafted here are the **structural shell**: nav + footer +
subpage top + funder wall appear on every page; everything else is content/component that
can wait until the first page brief needs it. **SP-03 home hero** is deferred deliberately
— it carries the home's 5-tension synthesis and deserves a dedicated session.

---

## SP-01 — Primary nav

**Purpose.** Get every visitor (P1 newcomer, P2 jury, P3 programmer, P4 partner, P5 press)
to one of four top-level destinations in a single scan — without forcing a register choice
at the door.

**Used on.** Every page (header, sticky).

### Anatomy (desktop, ≥ 768 px)

```
┌─────────────────────────────────────────────────────────────────────────┐
│ Leon    Dansateliers & performances  Samenwerken  Agenda  Over Leon  NL · FR · EN │
└─────────────────────────────────────────────────────────────────────────┘
  ↑ wordmark           ↑ 4 nav items                          ↑ lang switcher
```

- **Wordmark "Leon"** — left. `font-medium`, base text size; no underline. Links to `/`.
- **Nav items** — right of wordmark, 4 items per [30-structure](30-structure.md):
  *Dansateliers & performances · Samenwerken · Agenda · Over Leon*. Order locked.
- **Lang switcher placeholder** — right edge. `NL · FR · EN`, current = bold (no color
  in wireframe). Inactive items render as static text in v1 (no routes yet — see Dn-24).
- **Container:** `.container-wide` · **Height:** `h-16` (64 px, comfortably above
  44 × 44 tap floor) · **Border-bottom:** `--color-border` (1 px hairline; **no shadow,
  no blur** per CLAUDE.md banned-patterns).

### Anatomy (mobile, < 768 px)

```
┌─────────────────────────────────────┐
│ Leon                    NL · FR · EN│  ← top row (h-16)
├─────────────────────────────────────┤
│ Dansateliers & performances         │  ← wrap row (visible, not hidden)
│ Samenwerken   Agenda   Over Leon    │
└─────────────────────────────────────┘
```

- **No hamburger.** Hidden-hamburger as primary nav is a Dn-20 anti-pattern. 4 items wrap
  visibly into a second row — items remain discoverable in one scan.
- **Lang switcher** stays in top row, right-aligned.

### States

| State | Treatment |
|---|---|
| **Default** | wordmark + 4 nav items + lang switcher |
| **Active (current section)** | nav item: `font-medium`; lang item: same. Prefix-match (`/dansateliers-performances/*` → "Dansateliers & performances" active) |
| **Overflow** | label `Dansateliers & performances` is the longest (~26 chars NL). At < 360 px it wraps inside its `<li>` — accepted. No truncation. |
| **Sticky** | `position: sticky; top: 0; z-index: 50; background: var(--color-surface)`. Border-bottom remains visible during scroll. |

### Tokens used

`--color-text` · `--color-surface` · `--color-border` · `.container-wide` ·
`.meta` (lang switcher) · base font weights 400/500.

### Variants

None in v1. Surface phase may differentiate the home nav (transparent over a hero image
— but only if SP-03 lands an image hero, which is not yet decided).

### Deviations

None permitted in v1. If a page wants a different nav, that's a Structure decision and
goes through Dn-/Concerns.

### Open decisions

- **Sticky vs. static** — current code is static. Recommend sticky for long pages (Agenda,
  Mariage edities). Decide on first page brief that scrolls > 2 viewports.
- **Wordmark typography** — currently `font-medium` system-ui. Real wordmark/logo arrives
  with the brand kit (Dn-10 Open).

### Implementation

[`resources/views/partials/nav.blade.php`](../../../resources/views/partials/nav.blade.php)
already implements this pattern (44 lines). Confirm: no hamburger, 4 items visible on
mobile, lang placeholder. ✓ Aligned with first-draft spec.

---

## SP-02 — Footer

**Purpose.** Two jobs in one block: (1) **funder/partner legitimacy signal** site-wide
(P2 jury proof-ladder, distributed per [Dn-16](01-concerns.md)); (2) **bottom-of-page
utility** (contact, language, legal).

**Used on.** Every page.

### Anatomy

```
─────────────────────────────────────────────────────────────────
│  Met steun van                                                 │
│  ┌───┐ ┌───┐ ┌───┐ ┌───┐ ┌───┐ ┌───┐                          │
│  └───┘ └───┘ └───┘ └───┘ └───┘ └───┘   ← SP-09 funder wall    │
│                                                                │
│  Co-producenten                                                │
│  ┌───┐ ┌───┐ ┌───┐                                            │
│  └───┘ └───┘ └───┘                                            │
│                                                                │
│  …Venues · In-kind tiers below…                                │
─────────────────────────────────────────────────────────────────
│ © Leon vzw · Brussel   Contact · Over Leon · NL·FR·EN · legal │  ← bottom row
─────────────────────────────────────────────────────────────────
```

- **Top zone:** SP-09 Funder/partner wall (full composition — all tiers).
- **Bottom row:** copyright/address (left) · secondary links + lang + legal (right). Wraps
  to stacked on mobile.

### Composition contract

| Slot | Required? | Source |
|---|---|---|
| Funder/partner wall (SP-09, full composition) | Yes | site-wide |
| Copyright + address | Yes | `© Leon vzw · Brussel` (fixed) |
| Secondary links | Yes | `Contact` (P-18), `Over Leon` (P-13) — no more |
| Language switcher placeholder | Yes (deferred) | `NL · FR · EN` static in v1 |
| Legal links | Yes (placeholder in v1) | `[legal]` until cookies/privacy text exists |

### States

| State | Treatment |
|---|---|
| **Default** | full composition |
| **Empty funder data** | SP-09 collapses (no empty tiles); bottom row stays |
| **Mobile** | bottom row stacks vertically; SP-09 grid drops from 6→3→2 columns |

### Tokens used

`--color-border` (top divider) · `--color-border-subtle` (bottom-row separator) ·
`.section` (wall padding) · `.container-wide` · `.meta` (small text).

### Deviations

None permitted in v1. Site-wide consistency is a Dn-16 distribution decision (no
standalone "Pers" or "For funders" page; proof is distributed → footer is one of those
distributed surfaces).

### Open decisions

- **Newsletter sign-up in footer?** Tempting (every page = an enrolment moment), but adds
  complexity (ESP integration, GDPR consent — Dn-03/Dn-11 both Open `[BLOCKER]`). Decide
  after ESP lands. v1: no newsletter in footer.
- **Sitemap link** — not in v1; revisit if site grows past ~25 pages.

### Implementation

[`resources/views/partials/footer.blade.php`](../../../resources/views/partials/footer.blade.php)
implements the v0 shell (30 lines). Funder wall currently single-tier grid (strawman
"Vlaamse overheid / VGC / Stad Brussel / Co-producent A / Venue B / In-kind C") — needs
upgrade to SP-09's tiered composition (see below) and real partner data from team.

---

## SP-04 — Subpage top

**Purpose.** Open every non-home page with **the page's identity in one scan** (eyebrow
locating the page in IA + h1 naming the page + lede setting expectations) — without an
empty-void hero or an autoplay video (Dn-20 anti-patterns).

**Used on.** P-02 … P-18 (every page except P-01 Home, which uses SP-03).

### Default — plain heading (variant A)

```
┌─────────────────────────────────────────────┐
│                                             │
│  EYEBROW (optional, meta uppercase)         │
│                                             │
│  H1 — Page title                            │
│                                             │
│  Lede — one or two sentences setting        │
│  expectations. Max prose-width.             │
│                                             │
└─────────────────────────────────────────────┘
```

- **Eyebrow** (optional) — `meta` style, uppercase, tracking-wide. Names the parent
  section: `DANSATELIERS & PERFORMANCES` on P-03 Atelier Leon; `OVER LEON` on P-15 Impact.
- **H1** — `clamp(2rem, 5.5vw, 3.5rem)`, line-height 1.1 (from DESIGN.md). The page name.
- **Lede** (optional) — `text-lg`, `--color-text-muted`, max-width `--max-content`. One or
  two sentences. **Never** "Welkom op de pagina over X" — must say something.

### Variant B — with photo block below (NOT inside)

When a page genuinely benefits from an opening image (e.g. P-05 Mariage), SP-04 renders as
**variant A** then **SP-13 Photo block** follows as the **next sibling section** — not
nested inside the header. This keeps the heading text crisp on its own and avoids the
empty-void hero failure mode when no good photo exists.

```
┌─────────────────────────────────────┐
│ SP-04 variant A (eyebrow + h1 + lede)│
├─────────────────────────────────────┤
│ SP-13 Photo block (single editorial │
│       image + credit + caption)     │
└─────────────────────────────────────┘
```

### Variant C — index only

Index pages (P-02, P-08, P-13) may omit the lede and use just eyebrow + h1 + a 1-line
intro that flows directly into the children's index. Whether to use B or C is a per-page
brief decision.

### States

| State | Treatment |
|---|---|
| **Default** | all three (eyebrow + h1 + lede) |
| **No eyebrow** | h1 + lede only; section spacing unchanged |
| **No lede** | eyebrow + h1 only |
| **Overflow (long h1)** | `clamp` scaling + line-height 1.1 absorbs up to ~80 chars on desktop, ~50 on mobile. Beyond that = page-name problem, not pattern problem. |

### Tokens used

`.section` · `.container-wide` · `--color-text-faint` (meta) · `--color-text` (h1) ·
`--color-text-muted` (lede) · `--max-content`.

### Deviations

- **P-05 Mariage** likely wants variant B with a *Mariage* hero photo (highest project
  asset coverage per [90-image-map](90-image-map.md)).
- **P-12 Agenda** may want a more compact header to maximise above-fold listing density —
  flag in P-12 brief.

### Open decisions

- **Breadcrumbs?** Not in v1 — IA is flat (max 2 levels), eyebrow does the locating job.
  Revisit if a page acquires sub-sections.
- **Eyebrow link or static?** If link, it goes to the parent index (e.g. eyebrow on
  P-03 → `/dansateliers-performances`). Recommend link, but visually unchanged (`.meta`,
  hover state only).

### Implementation

[`resources/views/partials/page-header.blade.php`](../../../resources/views/partials/page-header.blade.php)
already implements variant A as a `$eyebrow / $title / $lede` slot block (12 lines).
✓ Aligned with first-draft spec. Variant B = adjacent SP-13 (not nested), no markup
change to SP-04 needed.

---

## SP-09 — Funder / partner wall

**Purpose.** **Distributed proof spine** (per [Dn-16](01-concerns.md) Closed and
[30-structure §IA principles](30-structure.md) rule 6: no standalone "for funders" page;
proof distributed across surfaces). On every page footer, the wall says "Leon is real,
funded, partnered" without making any page read as a jury checklist.

**Used on.** Footer site-wide (SP-02); larger version on P-01 Home below-fold; inline
mentions on per-project pages (P-05 Mariage, P-06 editie pages).

### Tier model

| Tier | Caption | Examples (real names pending team input) |
|---|---|---|
| 1. **Funders** | "Met steun van" | Vlaamse overheid · VGC · Stad Brussel · Polsslag Brussel |
| 2. **Co-producers** | "Co-producenten" | KANAL-Centre Pompidou · KVS · (per-project, varies) |
| 3. **Venues** | "Speelplekken" | Pianofabriek · Maison des Cultures · La Monnaie · CAMPO · BRONKS |
| 4. **In-kind** | "In samenwerking met" | MUS-E · Ketmet · RITCS · (per-project, varies) |

**Tier order is fixed** (top-down). **Within-tier order is alphabetical** — no implied
ranking. Captions are visible (not tooltips) — clarity beats density.

### Anatomy (default — full composition)

```
Met steun van
┌────┐ ┌────┐ ┌────┐ ┌────┐
└────┘ └────┘ └────┘ └────┘

Co-producenten
┌────┐ ┌────┐
└────┘ └────┘

Speelplekken
┌────┐ ┌────┐ ┌────┐ ┌────┐ ┌────┐
└────┘ └────┘ └────┘ └────┘ └────┘

In samenwerking met
┌────┐ ┌────┐ ┌────┐
└────┘ └────┘ └────┘
```

- **Tile:** uniform height `h-16` (64 px), aspect-flexible width, 1 px `--color-border`
  outline, `--radius`, centered text/logo.
- **Grid:** 2 cols `< 768` · 3 cols `768–1024` · 6 cols `> 1024`. Within-tier wraps to a
  new row as needed.
- **Wireframe content:** `[Partner name]` text placeholders. Surface phase swaps in real
  logos (Dn-10 Open: brand assets pending; many partner logos exist in raster only).
- **Surface direction (deferred):** real logos render **greyscale** by default to keep
  visual quiet — color is the Surface plane's call.

### Variants

| Variant | Where | Difference from default |
|---|---|---|
| **A. Full (default)** | Footer (SP-02) | all 4 tiers, captioned |
| **B. Featured** | P-01 Home below-fold | same composition, larger tiles, more vertical breathing (`.section` padding doubled), eyebrow above ("Onze partners") |
| **C. Inline mention** | Per-project page (P-05 Mariage §6, P-06 editie pages) | prose line, no grid. Drafted below. |

### Variant C — inline mention (anatomy)

```
Mariage komt tot stand met KANAL — Centre Pompidou, KVS, CAMPO, BRONKS en
MUS-E, met steun van Vlaamse overheid, VGC en Stad Brussel.
```

- **Composition:** single paragraph, body weight, in the page's flow. Verb-led framing
  (*"komt tot stand met"*, *"gemaakt in samenwerking met"*, *"met steun van"*) — keeps
  the partners as *people doing things with Leon*, not as proof tiles.
- **Two halves:** contributors (co-producers + venues + in-kind) + funders. Joined by a
  comma or new sentence. Order = contributors first (they made the thing), funders second
  (they backed it).
- **Why prose, not grid:** a 4-tier grid on a project page would (a) duplicate the
  footer wall and (b) read as a checklist. Prose stays in the project's voice.
- **Empty state:** sentence collapses cleanly; section still renders.

### States

| State | Treatment |
|---|---|
| **Default** | all 4 tiers populated |
| **Empty tier** | tier caption + grid omitted (no empty row) |
| **Empty wall** | entire SP-09 omitted (footer keeps just the bottom row) — should never happen on a live site |
| **Overflow (long partner name)** | tile wraps text on 2 lines; height fixed; tracked overflow logged |
| **Hover (Surface)** | optional color-on-hover for real logos — Surface plane decides |

### Tokens used

`.section` · `.container-wide` · `--color-border` (tile outline) · `.meta` (tier caption)
· `--radius`.

### Deviations

- **P-01 Home** uses variant B (featured) — bigger tiles, more breathing. Justification:
  home is the *visitekaartje* moment-of-truth ([discovery/12-client-kickoff](../discovery/12-client-kickoff-2026-05-19.md)).
- **P-05/P-06 Mariage + editie** use variant C (inline) for project-specific partners,
  then the full footer SP-02 still carries variant A site-wide.

### Open decisions

- **Real partner list per tier** — `[content]` from team (Sam/Kristin). Currently
  strawman. Single biggest content gap blocking SP-09 from reaching 🟢 Final.
- **Logo asset rights** — usually OK (partners want their logo shown) but worth confirming
  per-tier. Flag for [Dn-15](01-concerns.md) per-asset handling.
- **Per-project vs. site-wide partners** — *Mariage* has co-production partners (KANAL,
  KVS); site footer carries the *org-level* picture. Confirm with team that this split
  matches how they want to be seen.
- **Tier names in NL** — current proposal: *Met steun van · Co-producenten · Speelplekken
  · In samenwerking met*. Run past Kristin (tone of voice).

### Implementation

[`resources/views/partials/funder-wall.blade.php`](../../../resources/views/partials/funder-wall.blade.php)
(NEW 2026-05-27) — accepts `$variant` (`'full'` default / `'featured'`). Renders the 4
tiers with strawman partner data. Used by:
- [`partials/footer.blade.php`](../../../resources/views/partials/footer.blade.php) —
  default variant, **suppressed on home** (`@unless (Route::is('home'))`) to avoid
  double-show when P-01 §6 already renders the Featured variant.
- [`resources/views/home.blade.php`](../../../resources/views/home.blade.php) §6 —
  Featured variant.

Variant C (Inline) and real partner data still pending.

---

## SP-03 — Hero — home

**Purpose.** Carries the **invitation-forward** opening of the entire site (D-iv decision
+ value-prop spine) and lands the jury second-line signal as a single factual line — both
above the fold, neither competing with the other.

**Used on.** P-01 only.

> **This entry is intentionally thin.** SP-03 is page-specific (only P-01 uses it), so
> the full spec lives in [42-briefs/01-home §1](42-briefs/01-home.md). Below is the
> abstracted contract for cross-reference.

### Anatomy

```
EYEBROW (LEON · BRUSSEL, meta uppercase)

H1 — invitation-forward NL, 6–10 words

Lede — 2 sentences, max-prose-width

[ Primary CTA ]   [ Secondary CTA ]

── 1-line factual band (.meta) ──
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Eyebrow | Yes | `.meta uppercase tracking-wide` — locates Leon (NOT the page in IA, since it's home) |
| h1 | Yes | invitation-forward, NL, ~6–10 words; the *one* line everyone reads |
| Lede | Yes | 2 sentences, concrete-for-newcomer, max prose width |
| CTA primary | Yes | btn-primary, visually dominant |
| CTA secondary | Yes | btn-ghost |
| Jury 1-line band | Yes | `.meta` line *immediately below* CTAs; durability + activity + breadth, factual tone |

### States, deviations, open

See [42-briefs/01-home §1 + §State inventory](42-briefs/01-home.md). No variants.

---

## SP-05 — Project card

**Purpose.** Surface one Project / RecurringPractice / Page entity (work) as a clickable
unit on index and home surfaces — title-first, with enough texture (1-line desc) to make
the click decision without a hover.

**Used on.** P-01 §3 (Het werk van Leon) · P-02 (Dansateliers index) · P-05 (Mariage —
edities sub-grid via SP-06 cousin) · potentially Agenda filter cards.

### Anatomy

```
┌────────────────────────────────┐
│                                │
│      cover photo (optional)    │  ← collapses if no photo
│                                │
├────────────────────────────────┤
│ Title (medium weight)          │
│ 1-line description (.meta)     │
└────────────────────────────────┘
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Cover photo | Optional | When present: 16:9 ratio, full-width within card, no rounded corners inside the card |
| Title | Yes | `font-medium`, base size, no underline |
| 1-line desc | Yes | `.meta`, single line on desktop, may wrap to 2 on mobile |
| Status chip | Optional | Tiny `.meta` chip (e.g. "lopend", "aankomend") — used sparingly, omit if not load-bearing |
| Whole card link | Yes | entire card is the `<a>` — no separate "Lees meer" button |

### Variants

| Variant | Where | Difference |
|---|---|---|
| **A. With photo (default)** | P-01, P-02 | cover photo present |
| **B. Text-only** | P-01 fallback when cover missing | photo block collapses; title + desc only |

### States

| State | Treatment |
|---|---|
| **Default** | photo + title + desc |
| **No cover photo** | photo slot collapses; card height shrinks accordingly |
| **Long title** | wraps to 2 lines; card height grows; grid row aligns to tallest |
| **Hover** | `--color-hover` background tint on whole card; cursor pointer; no underline appears |

### Tokens used

`--color-border` (card edge), `--radius`, `--color-hover` (hover bg), `.meta`,
`font-medium`.

### Deviations

- P-06 Mariage editie pages may want a **dated** card variant (SP-06 Editie card — a
  cousin pattern, not this one). Date-forward cards = SP-06; project-forward cards = SP-05.

### Open decisions

- **Aspect ratio** — currently 16:9; revisit if portrait-orientation photos dominate the
  asset pool (image-map skews landscape per Pianofabriek shots — 16:9 holds).
- **Status chip vocabulary** — start without; add only when a page brief needs it.

### Implementation

[`resources/views/partials/project-card.blade.php`](../../../resources/views/partials/project-card.blade.php)
— accepts `$title`, `$desc`, `$href`, optional `$image` + `$imageAlt`. Shipped with
P-01 Home strawman render (2026-05-27). Variant A (with photo) waits on asset.

---

## SP-07 — Date-row

**Purpose.** Render one Event entity as a scannable row — date, time, type, location,
clickable to the event detail / editie. The **atomic unit** of every agenda surface
across the site.

**Used on.** P-01 §4 (next-3 home preview) · P-05 / P-06 (per-editie dates) ·
P-12 (Agenda — primary listing).

### Anatomy

```
WO 04.06 · 19:00   Open atelier — Pianofabriek           →
└─date────────┘   └─type────────┘ └─location─────┘
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Date | Yes | format: `DAY DD.MM` (e.g. `WO 04.06`); year omitted in current-year context |
| Time | Yes | `HH:MM` 24h; omit if all-day event |
| Type | Yes | one of: *open atelier · repetitie · try-out · voorstelling · LWP · Leon rond de tafel* (per [Glossary](../glossary.md)) |
| Location | Yes | venue short-name (e.g. `Pianofabriek`, `Maison des Cultures`, `CAMPO`) |
| CTA / link | Yes | whole row is link to the event's editie or detail page |

Date + time render in `.meta` style (text-faint); type + location in body weight; whole
row underlined-on-hover via `--color-hover` background.

### Variants

| Variant | Where | Difference |
|---|---|---|
| **A. Condensed (default)** | P-01 §4 home preview | one line per event; minimal padding |
| **B. Full (Agenda)** | P-12 | adds: project/practice tag, inschrijving-status, capacity-state |

### States

| State | Treatment |
|---|---|
| **Default** | populated row |
| **Today** | date prefixed `VANDAAG · 19:00` (optional eyebrow, P-12 only) |
| **Cancelled** | strikethrough on date+time; `.meta` tag "geannuleerd" appended; row still rendered |
| **Sold-out** | inschrijving CTA replaced by `.meta` tag "volzet" |
| **Hover** | `--color-hover` background, whole-row clickable affordance |

### Tokens used

`--color-text-faint` (date/time meta), `--color-text` (type/location), `.meta`,
`--color-hover`, `--color-border-subtle` (row separator).

### Deviations

- P-12 Agenda may group rows by date-bucket (today / deze week / volgende week) — the
  grouping is page-level, not pattern-level; SP-07 stays the row primitive.

### Open decisions

- **Day-of-week abbreviation** — NL 2-letter (`MA DI WO DO VR ZA ZO`) confirmed; FR/EN
  variants deferred to Dn-24.
- **Public-only filter on P-01 §4** — confirm gap #7 in [42-briefs/01-home](42-briefs/01-home.md).

### Implementation

[`resources/views/partials/date-row.blade.php`](../../../resources/views/partials/date-row.blade.php)
— accepts `$date`, `$time`, `$type`, `$location`, `$href`. Shipped with P-01 Home
strawman render (2026-05-27). The `$type` slot accepts any display label (event-type
label, event title, or composed string) — caller decides. Mobile reflow handled via
`flex-col md:flex-row`. **Wired to live Event model on P-01 §4** (top-3 upcoming,
public-only, internal types excluded — gap #7 implemented).

---

## SP-13 — Photo block

**Purpose.** Render one editorial photograph with credit + caption — the **atomic unit**
of the photographic surface across the site, per the Boris Charmatz photo-discipline
benchmark ([Dn-20](01-concerns.md)). Photo selection IS positioning; the block is the
spec for *how the selected photo lives on the page*.

**Used on.** P-01 §2 · most subpages with a hero photo (variant B of SP-04) ·
P-05/P-06 project pages · potentially P-15 Impact.

### Anatomy

```
┌────────────────────────────────────────────────┐
│                                                │
│              full-width photograph             │
│                                                │
└────────────────────────────────────────────────┘
  © Photographer name · short context · year
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Image | Yes | `<img>` with `alt` (descriptive; never decorative-empty for content photos) |
| Credit | Yes (per [Dn-15](01-concerns.md)) | `.meta` line below image; `© Photographer · context · year` |
| Caption | Optional | `.meta` line; only if the caption adds context the image alone doesn't carry |

### Variants

| Variant | Where | Difference |
|---|---|---|
| **A. Full-width (default)** | P-01 §2, most subpages | image fills `.container-wide`; credit indented to text margin |
| **B. Contained** | P-15 Impact, P-17 Historiek | image fits `.container-text` width — feels more editorial |
| **C. Inline (rare)** | mid-body, e.g. P-17 Historiek | smaller, floats with text; not for v1 home |

### States

| State | Treatment |
|---|---|
| **Default** | image + credit + (optional) caption |
| **Loading** | skeleton block at image aspect ratio (16:9 default) |
| **Missing asset** | **section collapses entirely** — never render an empty/grey-block placeholder (Dn-20 anti-pattern guard) |
| **Long caption** | wraps within text margin; no truncation |

### Tokens used

`--color-text-faint` (credit), `.meta`, `.container-wide` / `.container-text`,
`--radius` (NOT on the photo itself — rounded photos read commercial; only the surrounding
card chrome if any uses `--radius`).

### Deviations

- **Photo selection** is a Surface-plane decision against the Charmatz benchmark — the
  block doesn't dictate which photos qualify, only how the selected one lives on the page.
- **No aspect-ratio enforcement** at the block level — the chosen photo's native ratio
  is preserved. The page brief decides whether to crop.

### Open decisions

- **Credit format** — `© Photographer · short context · year` proposed. Confirm with
  Kristin / photographers. Per [Dn-15](01-concerns.md), credit obligations are resolved
  per-asset; this block defines the *shape* of the credit, not which photos need one.
- **Hover behaviour** — currently none. Lightbox / zoom is a future Surface call.

### Implementation

[`resources/views/partials/photo-block.blade.php`](../../../resources/views/partials/photo-block.blade.php)
— accepts `$src`, `$alt`, optional `$credit` + `$caption` + `$variant`. Shipped
2026-05-27 (unused on home v0.1 — §2 collapses pending hero photo choice; partial
ready for first asset).

---

## SP-06 — Editie card

**Purpose.** Surface one **Editie** entity (one staging of a Project) as a clickable
unit on its parent Project page. Date-forward variant of SP-05 — emphasises *when* +
*where* + *status* rather than *what*, because the Project page already established what.

**Used on.** P-05 Mariage §4 (×6 currently). Future Projects (e.g. Kosmos 2027) when
they acquire edities.

### Anatomy

```
┌────────────────────────────────────┐
│ Luik 2026                          │  ← title (city + year)
│ aankomend · juni–december          │  ← status chip · period
└────────────────────────────────────┘
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Title | Yes | Editie label: `{city} {year}` (e.g. `Brussel 2024`, `Marseille 2025`). Derived from editie slug or stored title. |
| Status chip | Yes | One of: `aankomend` · `lopend` · `afgelopen` — derived from editie start/end dates against today. `.meta` style, no color (wireframe phase). |
| Period | Yes | Date range, NL: `juni–december` or `mrt–mei 2024`. Year omitted when current edition is in the current year. |
| Whole card link | Yes | entire card is the `<a>`, links to `/dansateliers-performances/{project-slug}/{editie-slug}` |
| Cover photo | Optional (future) | Per-editie hero photo. Currently text-only. |

### Variants

| Variant | Where | Difference |
|---|---|---|
| **A. Text-only (default)** | P-05 v0.1 | title + status + period; no image |
| **B. With cover photo** | Future | adds 16:9 cover photo above text |

### States

| State | Treatment |
|---|---|
| **Default** | title + status chip + period |
| **Aankomend** (upcoming) | status chip reads `aankomend`; title/period normal weight |
| **Lopend** (in progress) | status chip reads `lopend`; suggests an active editie (rehearsals running) |
| **Afgelopen** (past) | status chip reads `afgelopen`; title/period at full weight (no fade — past edities are evidence, not graveyard) |
| **Long title** | wraps to 2 lines; card height grows; grid row aligns to tallest |
| **Hover** | `--color-hover` background tint on whole card |

### Tokens used

`--color-border` (card edge), `--radius`, `--color-hover` (hover bg), `.meta` (status +
period), `font-medium` (title).

### Deviations

- **No cover photo in v0.1** — per-editie covers are an asset gap (per [P-05 brief gap #5](42-briefs/05-mariage.md)). When assets arrive, variant B kicks in for individual edities; mixed grids (some with photo, some without) are accepted.

### Open decisions

- **Status logic** — derived from `editie.starts_at` / `editie.ends_at` against `today`:
  - `today < starts_at` → `aankomend`
  - `starts_at ≤ today ≤ ends_at` → `lopend`
  - `today > ends_at` → `afgelopen`
  - No Editie entity in code yet (per [P-05 brief gap #8](42-briefs/05-mariage.md)); status currently hard-coded per editie until model lands.
- **Period format edge cases** — multi-year edities (rare), year-flip mid-period, ongoing-with-no-end-date. Decide per-case.

### Implementation

No partial yet. First implementation arrives with P-05 §4 in the next code stage.
Convention: `resources/views/partials/editie-card.blade.php`, accepts `$title`,
`$status`, `$period`, `$href`, optional `$image`.

---

## SP-12 — Quote / testimony

**Purpose.** Surface a single first-person voice — participant, partner-coordinator, or
press — as **qualitative-led proof** (per [VP D-iii: one ladder, three routed entries](../strategy/40-value-proposition.md)).
Discipline: **one quote per surface**. Quote-walls / carousels are explicitly out.

**Used on.** P-05 Mariage §5 (embedded between *nazorg* and *continuïteit*) · P-13 Over
Leon → Impact (likely; structure pending) · P-15 Impact · P-17 Historiek (potentially).

### Anatomy

```
┌────────────────────────────────────────────────────────────────┐
│                                                                │
│  "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders     │
│   nooit zou tegenkomen."                                       │
│                                                                │
│  — Hadja, 67 · Mariage Brussel 2024                            │
│                                                                │
└────────────────────────────────────────────────────────────────┘
```

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Quote text | Yes | Single string; preserved verbatim (no editorial tightening); typographic quotes (`"..."`); max ~30 words for legibility |
| Attribution | Yes | `— Name, [optional age/role] · [context — project + editie + year]` |
| Context | Optional | Per-quote — *Mariage Brussel 2024*, *Leon op school 2025*, etc. |
| Visual frame | Yes | Border-left rule (1px) OR a soft `--color-surface-muted` background OR generous padding — see variants. **No portrait photo by default** (avoids portrait-rights burden) |

### Variants

| Variant | Where | Difference |
|---|---|---|
| **A. Inline frame (default)** | P-05 §5 | `--color-surface-muted` background, `.container-text` width, generous padding; sits inline within a section |
| **B. Standalone section** | P-15 Impact | own `.section` wrapper; larger type for the quote text; more breathing |
| **C. Pull-quote (rare)** | Long-form (P-17 Historiek?) | mid-prose, smaller, italic, narrower — for breaking up a long article |

### States

| State | Treatment |
|---|---|
| **Default** | quote + attribution rendered |
| **Quote missing** | section omits the SP-12 block; parent section still renders (per P-05 §5 state inventory) |
| **Long attribution** | wraps to 2 lines under quote |
| **Overflow (quote > ~30 words)** | renders fully — but flag at content stage; long quotes belong elsewhere (interview page, not as a testimony block) |

### Tokens used

`--color-text` (quote text — first-class, not muted), `--color-text-muted` (attribution),
`--color-surface-muted` (variant A background) OR `--color-border` (variant A border-left),
`.container-text` width.

### Deviations

- **No portrait photo** in v1 — rights overhead + risk of voyeurism. Quote text + name
  is the spec. Photos arrive via SP-13 in adjacent sections if needed.
- **No multi-quote walls** — anti-pattern guard. If a page needs 3 voices, it gets 3
  separate SP-12 blocks across 3 different sections, not a "wall."

### Open decisions

- **Consent + attribution format per quote** — needs per-quote client clearance.
  Resolved at content stage; never auto-published from a research transcript.
- **Translation handling** — when FR/EN ships, do quotes stay in original NL (preserves
  voice) or get translated? Probably **stay in original + add italicised translation
  below in `.meta`**. Decide before FR/EN launches (Dn-24).

### Implementation

[`resources/views/partials/quote.blade.php`](../../../resources/views/partials/quote.blade.php)
— created 2026-05-28 by the P-15 Impact agent (first canonical user). Accepts `$quote`,
`$attribution`, optional `$context`, optional `$variant` (`'inline'` default /
`'standalone'`). Reused by P-09 Opzetten (§6 partner quote), P-14 Missie & visie (§5
participant quote). P-05 Mariage + P-04 Leon op school + P-06 Mariage editie + P-17
Historiek may switch to the partial on next pass (currently render quote markup inline).

---

## SP-16 — Open-call band

**Purpose.** Surface an active inschrijving opportunity site-wide without adding a
permanent section-budget slot. The band is **conditional and self-removing** — it renders
only when at least one Editie has `inschrijving_open = true`; it is absent otherwise.
Prevents the site from going stale when no call is active.

**Used on.** P-01 Home (between §1 hero and §2 photo) · P-05 Mariage (promoted above §4
edities-grid). A sibling **open-call chip** appears on SP-05 project cards in the
work-grid (P-01 §3 · P-02 §2) when an editie has an open call — same data source, chip
variant.

### Anatomy

```
┌─────────────────────────────────────────────────────────────────────────┐
│  NIEUWE EDITIE                          [Ontdek deze editie →]          │
│  Luik 2026 — inschrijving loopt tot 31 augustus                         │
└─────────────────────────────────────────────────────────────────────────┘
```

- **Eyebrow:** `NIEUWE EDITIE` — `.meta uppercase tracking-wide`. Fixed label; names the
  category (not the editie).
- **Title line:** editie label (`{Stad} {Jaar}`, derived from `Editie.slug`) — body weight.
- **Closing-date line:** rendered only when `inschrijving_closes_at` is set AND the
  deadline is within a near-term window (e.g. ≤ 60 days). Format NL:
  *"inschrijving loopt tot {DD} {maand}"*. Omitted when no date set or deadline far off.
- **CTA:** `Ontdek deze editie →` (btn-primary on home variant, btn-ghost on project
  variant) — links to `/dansateliers-performances/mariage/{editie-slug}`.
- **Container:** `.container-wide` · **Border:** `--color-border` top + bottom hairline
  (not a card; band sits in page flow).

### Composition contract

| Slot | Required | Notes |
|---|---|---|
| Eyebrow | Yes | `NIEUWE EDITIE` — fixed label |
| Editie title | Yes | derived from `Editie.name` / slug |
| Closing-date line | Conditional | only when `inschrijving_closes_at` is set + near |
| CTA | Yes | link to the editie page |

### Variants

| Variant | Where | Difference |
|---|---|---|
| **`home`** | P-01 Home (between §1 + §2) | btn-primary CTA; full-width band; does NOT consume a numbered section slot in the §-budget |
| **`project`** | P-05 Mariage (above §4 edities-grid) | btn-ghost CTA; inline with page flow; promoted above the editie cards |

### States

| State | Treatment |
|---|---|
| **Default (one open call)** | band renders with the first open editie |
| **Multiple open calls** | render only the most-imminent one (soonest `inschrijving_closes_at`, or first in Editie ordering) |
| **Empty — no open call** | **band is entirely absent**; no placeholder, no empty container; page layout closes cleanly |
| **No closing date set** | closing-date line omitted; CTA still renders |
| **Overflow (long editie name)** | title wraps to second line; CTA stays right-aligned on desktop; stacks on mobile |
| **Mobile** | stacks vertically: eyebrow · title · closing-date · CTA full-width |

### Chip sibling (SP-05 card variant)

The work-grid Mariage card in SP-05 carries a small **open-call chip** (`INSCHRIJVING OPEN`
in `.meta` style) when `Editie::openInschrijving()->exists()`. This is the same signal
at a lower zoom level — not a new pattern, a chip variant of SP-05 status chip.
Lives on: P-01 §3 home work-grid · P-02 §2 dansateliers-overzicht.

### Tokens used

`--color-border` (top + bottom band dividers) · `--color-surface` (band bg = default page
surface, no fill) · `.meta` (eyebrow + closing-date line) · `font-medium` (editie title) ·
`.btn-primary` / `.btn-ghost` (variant-dependent) · `.container-wide`.

### Deviations

- **P-01 Home:** band is CONDITIONAL and does **not** count against the 6-section budget
  (it is not a permanent section; it renders between §1 + §2 only when an open call is
  active).
- **P-05 Mariage:** band is promoted *above* §4 edities grid so the open call is visible
  before the full edities list. The §4 Luik 2026 card still shows the `aankomend` status
  chip independently.

### Open decisions

- **"Most-imminent" selection rule** `[client]` — when multiple edities have open calls
  simultaneously, confirm whether to show the one with soonest deadline or the one with
  highest team priority.
- **Near-term window for closing-date line** `[client]` — current default 60 days; confirm
  threshold with team.

### Implementation

[`resources/views/partials/open-call-band.blade.php`](../../../resources/views/partials/open-call-band.blade.php)
— accepts `$variant` (`'home'` default / `'project'`). Queries
`Editie::openInschrijving()->first()` (scope on `App\Models\Editie`) to populate the
band; returns nothing (no output) when no open editie. Created 2026-05-28 by the
open-call flow build wave.

---

## Conventions for future patterns

When promoting any of SP-03 / SP-05 / SP-06 / SP-07 / SP-08 / SP-10 / SP-11 / SP-12 /
SP-13 from 🔴 stub to 🟠 first draft, use this file's per-pattern shape:

1. **Purpose** (1 line — the user question / role it fills).
2. **Used on** (which page IDs).
3. **Anatomy** (ASCII sketch).
4. **Elements / Composition contract** (required vs. optional slots).
5. **Variants** (named, with where-used).
6. **States** (at minimum: default + overflow + the empty/zero state if relevant).
7. **Tokens used** (refs to DESIGN.md / app.css).
8. **Deviations** (which pages legitimately need to differ + why).
9. **Open decisions** (single sentences, each owned by `[content]` / `[strategy]` /
   `[asset]` / `[client]` / `[research]` per [40-skeleton confidence-tagging](40-skeleton.md#confidence-scoring-content)).
10. **Implementation** (pointer to current Blade file if it exists, with delta).

## Cross-links

- Index: [40-skeleton §Shared patterns library](40-skeleton.md#shared-patterns-library-site-level-prerequisite--stub)
- Status: [01-concerns Dn-22](01-concerns.md)
- Inputs: [30-structure](30-structure.md) · [CLAUDE.md "Build phase — Laravel"](../../../CLAUDE.md) · [DESIGN.md](../../../DESIGN.md) · [resources/css/app.css](../../../resources/css/app.css)
- Tone-of-voice: [identity/10-tone-of-voice](../identity/10-tone-of-voice.md)
