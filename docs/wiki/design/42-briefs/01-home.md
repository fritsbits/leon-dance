---
title: P-01 Home — Skeleton brief
tags: [design, skeleton, brief, home, page-level]
sources: [40-skeleton; 41-patterns; 30-structure; strategy/40-value-proposition; strategy/50-user-journey; identity/10-tone-of-voice; brainstorm session 2026-05-27]
phase: design
page-id: P-01
slug: /
type: Conversion 6–8
updated: 2026-05-27
---

# P-01 Home — Skeleton brief

> **Status:** Brief 🟠 first draft (validation 8/8 PASS) · Wireframe 🟠 first draft
> (desktop + mobile) · Content 🟠 first draft ([01-home-content](01-home-content.md)) ·
> **Code 🟠 first draft (strawman rendered; §4 live from Event model)** · Approved —
> **Confidence:** **3 / 5** (was 2 — raised by section lock-in + pattern decisions;
> brief gaps #6 & #7 closed by code, gaps #1 & #3 lifted to strawman by content)
> **Section budget:** **6 sections + CTA** (Conversion tier 6–8 ceiling — staying low for invitation-forward simplicity)

## Kern

1. **Invitation-forward dominates** (D-iv). Hero owns the invitation; jury rigor sits
   *immediately below* the line as a single factual one-liner, not a band.
2. **6 sections, no duplication.** Each section serves a unique destination tier: §3 →
   work · §4 → utility · §5 → commission · §6 → proof.
3. **Photo as next sibling, not background.** Hero stays text; SP-13 follows as its own
   band. Avoids the empty-void / fragile-hero failure mode if no great photo is ready.
4. **Agenda preview = utility, not density-as-proof.** Home preview serves P1 (concrete
   next-thing-to-attend); density-as-proof job lives on `/agenda` itself.
5. **No 4-card IA-recap.** The IA grid was redundant with §4 and §5 (it pointed to
   Agenda + Samenwerken which the deeper sections already serve). Replaced with §3
   work-showcase (Atelier Leon · Leon op school · Mariage · Mobiele dansstudio).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  LEON · BRUSSEL                                                    │
│                                                                    │
│  [h1 — invitation-forward, ~6–10 NL words]                         │ §1 HERO
│                                                                    │
│  [lede — 2 sentences, concrete for newcomer]                       │
│                                                                    │
│  [ Kom langs in Atelier Leon ]   [ Bekijk de agenda ]              │
│                                                                    │
│  ── Wekelijks in Brussel. Vier projecten lopend. ──                │ jury 1-line band
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │           single editorial photo · full-width                │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │
│  © Photographer · context · year                                   │
├────────────────────────────────────────────────────────────────────┤
│  Het werk van Leon                                                 │
│                                                                    │
│  ┌──Atelier Leon──────┐  ┌──Leon op school────┐                    │ §3 WORK CARDS
│  │ drop-in · weekly   │  │ scholen / welzijn  │                    │ (SP-05 × 4)
│  └────────────────────┘  └────────────────────┘                    │
│  ┌──Mariage───────────┐  ┌──Mobiele dansstudio┐                    │
│  │ 6 edities · part…  │  │ op locatie         │                    │
│  └────────────────────┘  └────────────────────┘                    │
├────────────────────────────────────────────────────────────────────┤
│  Eerstvolgende                                                     │ §4 AGENDA PREVIEW
│  WO 04.06 · 19:00   Open atelier — Pianofabriek                    │ (SP-07 × 3)
│  ZA 07.06 · 14:00   Open atelier — Maison des Cultures             │
│  DO 12.06 · 20:00   Try-out Mariage — CAMPO                        │
│  → Volledige agenda                                                │
├────────────────────────────────────────────────────────────────────┤
│  Werk je samen met Leon?                                           │ §5 SAMENWERKEN BAND
│  Drie manieren om met Leon in zee te gaan:                         │
│  → Een participatief dansproject opzetten                          │
│  → De mobiele dansstudio uitnodigen                                │
│  → Vrijwilligerswerk of stage doen                                 │
├────────────────────────────────────────────────────────────────────┤
│  Onze partners                                                     │ §6 FUNDER WALL
│  Met steun van          [VL] [VGC] [BXL] [PB]                      │ (SP-09 variant B,
│  Co-producenten         [KANAL] [KVS]                              │  Featured)
│  Speelplekken           [Piano] [MdC] [Munt] [CAMPO]               │
│  In samenwerking met    [MUS-E] [Ketmet] [RITCS]                   │
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
├─────────────────────────────┤
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│   (4 items, no hamburger)
├─────────────────────────────┤
│  LEON · BRUSSEL             │
│                             │
│  [h1 — invitation-forward]  │ §1 HERO
│                             │
│  [lede — 2 sentences,       │
│   max-prose-width]          │
│                             │
│  ┌─Kom langs in Atelier──┐  │ ← CTA primary
│  │       Leon            │  │   full-width on mobile
│  └───────────────────────┘  │
│  ┌─Bekijk de agenda──────┐  │ ← CTA secondary
│  └───────────────────────┘  │
│                             │
│  Wekelijks in Brussel.      │ jury 1-line band
│  Vier projecten lopend.     │ (may wrap to 2 lines)
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │  editorial photo        │ │ §2 PHOTO
│ │  (full-width)           │ │
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ Het werk van Leon           │
│                             │
│ ┌─────────────────────────┐ │ §3 WORK CARDS
│ │ Atelier Leon            │ │ (1-col stack,
│ │ drop-in · weekly        │ │  4 cards)
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Leon op school          │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Mariage                 │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Mobiele dansstudio      │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Eerstvolgende               │
│                             │ §4 AGENDA PREVIEW
│ WO 04.06 · 19:00            │ (SP-07 condensed,
│ Open atelier — Pianofabriek │  date/time wraps
│                             │  above name)
│ ZA 07.06 · 14:00            │
│ Open atelier — MdC          │
│                             │
│ DO 12.06 · 20:00            │
│ Try-out Mariage — CAMPO     │
│                             │
│ → Volledige agenda          │
├─────────────────────────────┤
│ Werk je samen met Leon?     │ §5 SAMENWERKEN BAND
│                             │
│ Drie manieren om met Leon   │
│ in zee te gaan:             │
│                             │
│ → opzetten                  │
│ → uitnodigen                │
│ → doen                      │
├─────────────────────────────┤
│ Onze partners               │ §6 FUNDER WALL
│                             │ (SP-09 mobile:
│ Met steun van               │  2-col tier grid)
│ [VL]  [VGC]                 │
│ [BXL] [PB]                  │
│                             │
│ Co-producenten              │
│ [KANAL]  [KVS]              │
│                             │
│ Speelplekken                │
│ [Piano]   [MdC]             │
│ [Munt]    [CAMPO]           │
│                             │
│ In samenwerking met         │
│ [MUS-E]  [Ketmet]           │
│ [RITCS]                     │
├─────────────────────────────┤
│ © Leon vzw · Brussel        │ SP-02 footer
│                             │ (bottom row stacks
│ Contact                     │  vertically)
│ Over Leon                   │
│ NL · FR · EN                │
│ [legal]                     │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- CTAs are full-width on mobile (per Skeleton playbook rule); on desktop they sit
  side-by-side at intrinsic width. No layout switch needed in markup — flex wrap.
- §3 work cards have no fixed grid in CSS — `grid-template-columns: 1fr` mobile,
  `repeat(2, 1fr)` ≥ 768 px.
- §4 SP-07 date-row wraps date/time above name on mobile; stays single-line on desktop.
- SP-09 grid breakpoints (2 → 3 → 6 cols) inherited from the pattern spec.
- No section disappears between viewports; no mobile-only or desktop-only content.

## Section specs

### §1 — Hero (invitation + jury 1-line band)

- **User question:** *"Is dit voor mij — en kan ik Leon vertrouwen?"*
- **Pattern:** SP-03 Hero — home ([41-patterns](../41-patterns.md#sp-03--hero--home))
- **Composition:** eyebrow `LEON · BRUSSEL` · h1 (invitation NL, ~6–10 words) · lede
  (2 sentences, max-prose) · CTA primary + secondary · jury 1-line band (`.meta`).
- **CTA primary:** `Kom langs in Atelier Leon` → `/dansateliers-performances/atelier-leon`
  (P1 direct, per [30-structure persona/journey routing](../30-structure.md)).
- **CTA secondary:** `Bekijk de agenda` → `/agenda`.
- **Jury 1-line band:** durability + activity + breadth in one factual sentence.
  Strawman: *"Wekelijks in Brussel. Vier projecten lopend."* (gap #3).
- **CTA discipline:** 1 primary visually dominant + 1 secondary + 0 tertiary.

### §SP-16 — Open-call band (CONDITIONAL, between §1 and §2)

- **Pattern:** [SP-16 Open-call band](../41-patterns.md#sp-16--open-call-band) variant `home`.
- **Placement:** between §1 hero and §2 photo. **Does NOT count against the 6-section budget** — it is a conditional, self-removing band that is absent when no editie has `inschrijving_open = true`.
- **State note:** when no open call is active, no element renders here; §1 and §2 sit adjacent as if SP-16 were never there.
- **2026-05-28:** implemented via `@include('partials.open-call-band', ['variant' => 'home'])`.

### §2 — Photo (SP-13)

- **User question:** *"Wat ziet dat eruit?"*
- **Pattern:** [SP-13 Photo block](../41-patterns.md#sp-13--photo-block)
- **Composition:** single editorial photo, full-width within `.container-wide`, credit +
  caption below in `.meta`.
- **State note:** if photo absent, section collapses entirely (no empty placeholder).

### §3 — Het werk van Leon (4 cards)

- **User question:** *"Wat maakt Leon eigenlijk?"*
- **Pattern:** [SP-05 Project card](../41-patterns.md#sp-05--project-card) × 4.
- **Cards (order locked):**
  1. **Atelier Leon** — *drop-in · wekelijks · gratis* (RecurringPractice)
  2. **Leon op school** — *begeleid traject · scholen / welzijn / zorg* (RecurringPractice)
  3. **Mariage** — *project · 6 edities · participatieve voorstelling* (Project)
  4. **Mobiele dansstudio** — *bookable · op locatie* (Page)
- **Grid:** 2×2 desktop · 1-col mobile.
- **Omission:** *Kosmos 2027* not surfaced until ready (per [30-structure](../30-structure.md)).
- **Card CTA:** whole card = link (no separate "lees meer" button — reduces visual noise).

### §4 — Eerstvolgende (Agenda preview)

- **User question:** *"Wanneer kan ik komen?"*
- **Pattern:** [SP-07 Date-row](../41-patterns.md#sp-07--date-row) × 3.
- **Composition:** 3 rows (date · time · type · location · whole row clickable) +
  `→ Volledige agenda` link.
- **Data source:** Event entity, sorted ascending, first 3 upcoming.
- **Open filter decision (gap #7):** include internal event types (LWP, Leon rond de
  tafel)? Recommend **public types only** for home preview (open atelier · repetitie ·
  try-out · voorstelling) to keep the "kom langs" reading clean. Internal types
  remain on `/agenda` (per [30-structure](../30-structure.md)).
- **Empty state:** 1-line copy "Geen aankomende publieke events — kijk gerust op de
  [volledige agenda](#)."
- **Loading state:** 3 skeleton rows at `.meta` height.

### §5 — Werk je samen met Leon? (Samenwerken band)

- **User question:** *"Hoe begin ik een samenwerking?"*
- **Pattern:** no SP yet — inline `text-link list` (lift to SP-14 if used elsewhere).
- **Composition:** h2 + 1-sentence intro + 3 link rows (text + arrow, no card chrome):
  - → Een participatief dansproject opzetten (`/samenwerken/opzetten`)
  - → De mobiele dansstudio uitnodigen (`/samenwerken/uitnodigen`)
  - → Vrijwilligerswerk of stage doen (`/samenwerken/doen`)
- **No card chrome rationale:** keeps it quieter than §3 (which IS card-shaped), and
  links bind to action verbs cleanly.

### §6 — Onze partners (funder wall, Featured)

- **User question:** *"Wie staat er achter Leon?"*
- **Pattern:** [SP-09 variant B Featured](../41-patterns.md#sp-09--funder--partner-wall).
- **Composition:** all 4 tiers (Met steun van · Co-producenten · Speelplekken · In
  samenwerking met), larger tiles, more breathing than the footer instance.
- **Note:** same content as SP-02 footer's wall, but **Featured** weight on home. Not
  duplicative — the home below-fold proof position is a known surface decision (the
  footer is "site-wide", the home Featured is "this is who's with us, said louder").

## State inventory (full)

| Section | States covered |
|---|---|
| §1 Hero | Default · Overflow (long NL h1) |
| §2 Photo | Default · **Missing-asset → section collapses** |
| §3 Work cards | Default · Overflow (long title) · Empty cover (card renders without image, title still bold) |
| §4 Agenda | Default · Empty (no upcoming public events) · Loading (3 skeleton rows) |
| §5 Samenwerken | Default only |
| §6 Partners | Default · Tier-with-no-partners collapses (no empty grid row) |
| Page-level | Reduced-motion: `.section` transitions disabled (covered by SP-04 global rule) · Mobile breakpoint reflow (above) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-03 Hero — home | 🔴 | **🟠 first draft** (spec mirrors this brief §1) |
| SP-05 Project card | 🔴 | **🟠 first draft** (first use) |
| SP-07 Date-row | 🔴 | **🟠 first draft** (first use) |
| SP-09 Funder wall (variant B) | 🟠 | 🟠 (variant B already documented) |
| SP-13 Photo block | 🔴 | **🟠 first draft** (first use) |

## Canonical home for facts (anti-bloat discipline)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Duration / activity / breadth (jury signal) | §1 jury 1-line band | OK to mirror on Impact (P-15) |
| Agenda dates | `/agenda` (P-12) | Home shows top-3 preview only |
| Partner names | SP-09 (footer + §6) | Per-project subsets inline on project pages (variant C) |
| Editorial photo subject | §2 SP-13 | Don't repeat the same photo elsewhere on home |
| Mariage details | P-05 Mariage page | §3 card carries 1-line ONLY |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 1 secondary (§1)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 6–8)
- [x] No either/or notes survive
- [x] Patterns referenced by SP-id (7 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch (added 2026-05-27 second pass)

**Validation: 8 / 8 PASS.** Brief is gate-ready for review → 🟡 reviewed → 🟢 final.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | NL h1 + lede final wording | `[content]` | Kristin | Content stage |
| 2 | Hero editorial photo choice (§2) | `[asset]` | Frederik + Surface | Content stage · SP-13 final |
| 3 | Jury band — confirm "wekelijks since [year]" + project-count phrasing | `[content]` | Sam / Kristin | Content stage |
| 4 | Real partner data, 4 tiers, NL captions | `[content]` | Sam / Kristin (SharePoint) | §6 → final |
| 5 | Project-card cover photos × 4 | `[asset]` | Surface plane | §3 visual final |
| ~~6~~ | ~~Agenda backend feed~~ | ~~`[research]`~~ | **CLOSED 2026-05-27** | Event model shipped (separate thread); home.blade.php @php block queries it; §4 live |
| ~~7~~ | ~~Public-only filter~~ | ~~`[strategy]`~~ | **CLOSED 2026-05-27** | `whereNotIn('type', [LWP, LRDT])` implemented in §4 query |
| ~~8~~ | ~~Mobile wireframe sketch~~ | ~~`[design]`~~ | **CLOSED 2026-05-27** | added above |

## Confidence rationale

- **Was 2 / 5** (vague, missing facts, fundamental decisions pending).
- **Now 3 / 5** — playbook level-3 definition: *"could write strawman; would need team
  review for accuracy."* Section list, order, patterns, CTAs all decided; remaining gaps
  are content/asset/team-verify, not structural.
- **→ 4 / 5** when gaps #1, #3 close (Kristin confirms NL hero + jury band wording).
- **→ 5 / 5** when all 8 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [VP](../../strategy/40-value-proposition.md) · [User journey](../../strategy/50-user-journey.md)
- Structure: [30-structure](../30-structure.md) (5-tension list + persona routing)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md)
- Code stub: [`resources/views/home.blade.php`](../../../../resources/views/home.blade.php)
