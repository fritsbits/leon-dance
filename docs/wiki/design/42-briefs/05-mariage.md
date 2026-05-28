---
title: P-05 Mariage — Skeleton brief
tags: [design, skeleton, brief, mariage, page-level, project]
sources: [40-skeleton; 41-patterns; 30-structure; strategy/40-value-proposition (P3 + P1 profiles); strategy/50-user-journey; identity/10-tone-of-voice; glossary; existing dansateliers/mariage.blade.php + mariage-editie.blade.php; EventSeeder.php (6 editie slugs); best-guess autonomous pass 2026-05-27]
phase: design
page-id: P-05
slug: /dansateliers-performances/mariage
type: Marketing 5–7
updated: 2026-05-27
---

# P-05 Mariage — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🔴 stub
> (strawman inline; sibling content file when approved) · Code 🔴 stub (routable shell
> exists with editie-list placeholder) · Approved —
> **Confidence:** **3 / 5** (was 2; raised by section lock-in + 3-pattern first-draft).
> **Section budget:** **6 sections** (Marketing tier 5–7 ceiling — staying balanced; not
> conversion-shaped so no top CTA).
> **Authored autonomously per user instruction "ask as little questions as possible";
> all open calls documented inline as best-guess decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant B (text header + SP-13 photo as next sibling), same as P-01 Home | Yes — could go variant A or C in v0.2 |
| BG-2 | **CTAs in hero** | **None.** Page is project-info-first; CTAs land in §6 "Mariage in jouw stad?" footer-band. Belonging dial per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie) — "Inschrijven als laatste sectie, niet als sales-blok." | Yes — could add a single secondary CTA to hero if testing shows the page reads too informational |
| BG-3 | **Edities §4 — show all 6** | All 6 chronological (newest-first), with status chips (`aankomend` / `lopend` / `afgelopen`). N=6 fits without pagination; status-chips solve the past-vs-future ambiguity. | Yes — could trim to upcoming + most-recent-past + "alle edities" link |
| BG-4 | **Quote source** | Single participant voice (P1 belonging dial). Hadja (67) verbatim from [missie-visie current-site mirror](../../../raw/current-site/pages/missie-visie-nl.md) (re-used per [strategy/20-personas P1 evidence](../../strategy/20-personas.md)). | Yes — could swap for partner-coordinator (P4) quote if team prefers; or add second one |
| BG-5 | **§5 sub-headings** | 4 named beats: *Proces · Nazorg · Continuïteit · Evolutie* (per [30-structure](../30-structure.md) Project entity fields) — flowing prose, not bulleted | Yes — could merge into 2 (proces+nazorg ↔ continuïteit+evolutie) if reads too rubric-shaped |
| BG-6 | **Inline partner mention (§6 SP-09 variant C)** | Prose line: *"Mariage komt tot stand met [editie-partners], met steun van [funder-tier 1]."* — names per-project partners, not the org's full footer wall | Yes — could push to footer-only if §6 reads cluttered |
| BG-7 | **§6 primary CTA** | `Plan een gesprek` → `/samenwerken/opzetten` (verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas)) | Yes — copy refinement on review |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Project page = trajectory, not product** (per [30-structure IA principle 2](../30-structure.md)).
   No "boek deze voorstelling" CTA in hero; the page documents the trajectory and routes
   booking via §6 → Samenwerken.
2. **Belonging dial, P1-led** (per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie)).
   The page leads with what Mariage *is*, lets a participant voice carry the proof, and
   only at the end opens the commissioning door (P3/P4). Jury reads the same proof from
   below — no separate jury-shaped framing on this page.
3. **One canonical home for Mariage details** (anti-bloat). Format documentation lives
   on this page; per-editie practical info (groep, typed dates, inschrijving, voor-
   publiek) lives on the editie pages (P-06); voorstellingsdata flows to /agenda. No
   field repeats across surfaces.
4. **Hero owns the project's identity, photo carries register-balance.** SP-04 variant B
   (text header + SP-13 sibling) — same discipline as home. Avoids the fragile-hero
   failure mode; consistent across the site.
5. **§4 Edities table = the project's spine.** The 6 editions are the most load-bearing
   evidence of "this is real, repeatable, durable" — for *every* persona. P1 sees "I
   could be in the next one." P2 sees "6 cycles since 2024." P3 sees "they've done this
   6 times with 6 partners." One pattern serves all three reads.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  DANSATELIERS & PERFORMANCES · PARTICIPATIEVE PERFORMANCES         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant B)
│  Mariage                                                           │
│                                                                    │
│  Een participatieve voorstelling die telkens opnieuw een lokale    │
│  groep op de scène brengt. Zes edities tot nu toe — in Brussel,    │
│  Antwerpen, Rotterdam, Gent, Marseille en Luik.                    │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │           single editorial Mariage photo · full-width        │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │
│  © Photographer · Mariage Brussel 2024, KVS                        │
├────────────────────────────────────────────────────────────────────┤
│  Wat is Mariage?                                                   │ §3 FORMAT-DOC
│                                                                    │
│  Mariage brengt een vaste kerngroep dansers samen met ~20 amateurs │
│  uit de stad waar de editie plaatsvindt. Tien weken samen          │
│  repeteren mondt uit in een publieke voorstelling — telkens een    │
│  unieke versie, telkens met andere mensen.                         │
│                                                                    │
│  [2–3 strawman alineas die het format scherp maken]                │
├────────────────────────────────────────────────────────────────────┤
│  Edities                                                           │ §4 EDITIES
│                                                                    │   (SP-06 × 6 ·
│  ┌──Luik 2026───────────────┐  ┌──Marseille 2025─────────────┐     │   newest-first ·
│  │ aankomend · juni–dec     │  │ afgelopen · sep–dec 2025    │     │   status chips)
│  └──────────────────────────┘  └──────────────────────────────┘    │
│  ┌──Gent 2025───────────────┐  ┌──Rotterdam 2025─────────────┐     │
│  │ afgelopen · mrt–jun 2025 │  │ afgelopen · jan–apr 2025    │     │
│  └──────────────────────────┘  └──────────────────────────────┘    │
│  ┌──Antwerpen 2024──────────┐  ┌──Brussel 2024───────────────┐     │
│  │ afgelopen · sep–dec 2024 │  │ afgelopen · mrt–mei 2024    │     │
│  └──────────────────────────┘  └──────────────────────────────┘    │
├────────────────────────────────────────────────────────────────────┤
│  Hoe het traject loopt                                             │ §5 TRAJECT
│                                                                    │   (proces · nazorg
│  Proces — [10 weken · 1 repetitie per week · core+local cast …]    │    · continuïteit
│                                                                    │    · evolutie ·
│  Nazorg — [de cast blijft contact houden · alumni-momenten …]      │    embedded SP-12)
│                                                                    │
│  Continuïteit — [terugkerende deelnemers · stad-overschrijdend …]  │
│                                                                    │
│  Evolutie — [hoe Mariage veranderde tussen Brussel 2024 → …]       │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │  "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders   │  │ SP-12 QUOTE
│  │   nooit zou tegenkomen."                                     │  │ (embedded in §5)
│  │  — Hadja, 67 · Mariage Brussel 2024                          │  │
│  └──────────────────────────────────────────────────────────────┘  │
├────────────────────────────────────────────────────────────────────┤
│  Mariage in jouw stad?                                             │ §6 SAMENWERKEN
│                                                                    │   HOOK + INLINE
│  Mariage is een traject dat we samen met een lokale partner        │   PARTNERS
│  opzetten. Geïnteresseerd om het in jouw stad of buurt te          │
│  brengen?                                                          │
│                                                                    │
│  [ Plan een gesprek ]                                              │ CTA primary
│                                                                    │
│  Mariage komt tot stand met KANAL — Centre Pompidou, KVS,          │ SP-09 variant C
│  CAMPO, BRONKS en MUS-E, met steun van Vlaamse overheid,           │   (inline prose
│  VGC en Stad Brussel.                                              │    partner line)
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                          [funder wall renders here │   (footer wall NOT
│                                           via default suppression  │    suppressed on
│                                           = NOT on home only)]     │    P-05 — shows)
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ DANSATELIERS & PERFORMANCES │
│                             │ §1 SUBPAGE TOP
│ Mariage                     │
│                             │
│ [lede wraps to 4 lines]     │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │  Mariage hero photo     │ │ §2 PHOTO
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ Wat is Mariage?             │ §3 FORMAT-DOC
│ [2–3 alineas in 1-col]      │
├─────────────────────────────┤
│ Edities                     │ §4 EDITIES
│                             │   (6 cards
│ ┌─Luik 2026──────────────┐  │    1-col stack)
│ │ aankomend · juni–dec   │  │
│ └────────────────────────┘  │
│ ┌─Marseille 2025─────────┐  │
│ └────────────────────────┘  │
│ ┌─Gent 2025──────────────┐  │
│ └────────────────────────┘  │
│ ┌─Rotterdam 2025─────────┐  │
│ └────────────────────────┘  │
│ ┌─Antwerpen 2024─────────┐  │
│ └────────────────────────┘  │
│ ┌─Brussel 2024───────────┐  │
│ └────────────────────────┘  │
├─────────────────────────────┤
│ Hoe het traject loopt       │ §5 TRAJECT
│ Proces — ...                │
│ Nazorg — ...                │
│ Continuïteit — ...          │
│ Evolutie — ...              │
│ ┌─────────────────────────┐ │
│ │ "Ik kan er mezelf zijn…"│ │ SP-12
│ │ — Hadja, 67 · …         │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Mariage in jouw stad?       │ §6 HOOK
│ [korte intro]               │
│ [ Plan een gesprek ]        │
│ [SP-09 inline prose-line]   │
├─────────────────────────────┤
│ ⤓ SP-09 default funder      │ ← footer wall
│   wall (4 tiers) renders    │   (NOT suppressed
│   here in footer            │    on non-home)
│                             │
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant B)

- **User question:** *"Wat is Mariage en waarom zou ik er aandacht aan besteden?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant B (header + SP-13 sibling).
- **Composition:** eyebrow (parent IA · category) · h1 · lede.
- **Eyebrow link:** `DANSATELIERS & PERFORMANCES` → `/dansateliers-performances`.
  Second token `PARTICIPATIEVE PERFORMANCES` is the category — static text (no own URL).
- **BG-2:** **No hero CTA.** CTAs land in §6.

### §2 — Photo (SP-13)

- **User question:** *"Hoe ziet Mariage eruit?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant A (full-width).
- **Asset gap:** strawman caption assumes a Brussels 2024 photo (KVS or Maison des Cultures).
  Real selection per Surface plane against Boris Charmatz photo-discipline benchmark
  ([Dn-20](../01-concerns.md)).
- **Missing-asset state:** section collapses (SP-13 contract).

### §3 — Wat is Mariage? (format-doc)

- **User question:** *"Wat moet ik me concreet voorstellen?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP.
- **Composition:** h2 + 2–3 paragraphs. Concrete (numbers, weeks, cast size, locations).
  No abstract claims (*"vernieuwend"*, *"uniek"* — banned in [TOV](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy)).
- **Strawman opener:** *"Mariage brengt een vaste kerngroep dansers samen met ~20
  amateurs uit de stad waar de editie plaatsvindt. Tien weken samen repeteren mondt uit
  in een publieke voorstelling — telkens een unieke versie, telkens met andere mensen."*
- **Open content (gap #1):** 2 follow-up paragraphs explaining premise + how a typical
  week looks. Team to write or approve.

### §4 — Edities (SP-06 × 6)

- **User question:** *"Wat is er al geweest en wat komt er nog?"*
- **Pattern:** [SP-06 Editie card](../41-patterns.md#sp-06--editie-card) (drafted with this brief).
- **Data source:** Project's `edities` relation (in [30-structure content model](../30-structure.md)
  — Editie entity, hasMany on Project). Per [EventSeeder.php](../../../../database/seeders/EventSeeder.php):
  6 editie_slugs exist (`brussel-2024`, `antwerpen-2024`, `rotterdam-2025`, `gent-2025`,
  `marseille-2025`, `luik-2026`).
- **Order:** chronological, **newest-first** (Luik 2026 → Brussel 2024).
- **Card content:** city + year (slug → title), period, status chip (*aankomend* /
  *lopend* / *afgelopen*), link to `/dansateliers-performances/mariage/{editie}`.
- **Pagination:** none — 6 fits comfortably.
- **Empty state:** placeholder copy ("Eerste editie wordt voorbereid — meer info volgt.")
  but at v0.1 the seeder already populates 6, so empty-state is theoretical.

### §5 — Hoe het traject loopt (proces · nazorg · continuïteit · evolutie + embedded quote)

- **User question:** *"Wat gebeurt er eigenlijk in zo'n traject?"*
- **Pattern:** plain `.section` + `.container-text` with 4 named beats (h3 each) + one
  embedded SP-12 quote block.
- **Order locked** per [30-structure Project entity fields](../30-structure.md): proces →
  nazorg → continuïteit → evolutie.
- **Each beat:** short paragraph (3–5 sentences), concrete, belonging dial.
- **Embedded SP-12 quote:** between *nazorg* and *continuïteit* (the qualitative-proof
  rung in the middle of the explanation, not at the end as testimony coda).
- **Strawman quote** (BG-4): Hadja (67), Mariage Brussel 2024.

### §6 — Mariage in jouw stad? (Samenwerken hook + inline partners)

- **User question:** *"Hoe kan ik dit ook?"* (P3 programmer / P4 partner) en *"Wie helpt
  Leon dit doen?"* (everyone)
- **Pattern:** plain `.section` (h2 + 1-paragraph + CTA) + [SP-09 variant C inline
  prose line](../41-patterns.md#sp-09--funder--partner-wall).
- **Hook copy** (strawman): *"Mariage is een traject dat we samen met een lokale partner
  opzetten. Geïnteresseerd om het in jouw stad of buurt te brengen?"*
- **CTA primary:** `Plan een gesprek` → `/samenwerken/opzetten` (verb-first per TOV).
- **No secondary CTA** — single hook keeps the §6 read clean.
- **Inline partners** (SP-09 variant C): prose sentence after the CTA naming per-project
  partners (KANAL, KVS, CAMPO, BRONKS, MUS-E) + funder tier (Vlaamse overheid, VGC,
  Stad Brussel). The footer's site-wide SP-09 default wall still carries the org-level
  picture (NOT suppressed on P-05 — only home suppresses it).

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL h1 — *Mariage* is short, safe) |
| §2 SP-13 photo | Default · **Missing-asset → section collapses** |
| §3 format-doc | Default only |
| §4 Edities | Default (6 cards) · Empty (no edities — theoretical) · Overflow (long city name) · **Status chip per card** (*aankomend* / *lopend* / *afgelopen*) |
| §5 traject | Default · Quote missing → SP-12 block omitted, section still renders |
| §6 hook | Default · Inline partners empty → SP-09 variant C line collapses, CTA still renders |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Editie data unavailable → §4 shows empty-state copy |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant B) | 🟠 | 🟠 (unchanged) |
| SP-06 Editie card | 🔴 | **🟠 first draft** (first use; spec lands in 41-patterns) |
| SP-09 variant C (inline) | 🟠 (variants A/B drafted; C named, not specced) | **🟠** (variant C now fully drafted) |
| SP-12 Quote / testimony | 🔴 | **🟠 first draft** (first use) |
| SP-13 Photo block | 🟠 | 🟠 (unchanged) |

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Mariage format (core+local cast · ~10 reps · 1-paragraph premise) | §3 this page | Glossary already references *Mariage* generically; home P-01 §3 carries only the 1-line card |
| 6 edities + their cities/periods | §4 this page (cards) | Each editie page (P-06) carries its own deep info |
| Per-editie groep, typed dates, inschrijving | P-06 editie page | Don't repeat here — link via cards |
| Voorstellingsdata | `/agenda` filtered to `project=mariage&type=voorstelling` | P-06 editie page lists its own voorstellingen via Event model (already implemented) |
| Hadja quote | §5 this page (until/unless P-13 Impact also uses it; then split or pick one) | Could mirror on Impact (P-15) — decide there |
| Per-project partners | §6 SP-09 inline | Footer wall carries org-level |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (§6 — only CTA on the page; BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 5–7)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (7 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §3 format-doc 2 follow-up paragraphs | `[content]` | Sam / Kristin | Content stage |
| 2 | §5 *Proces · Nazorg · Continuïteit · Evolutie* paragraphs (~3–5 sentences each) | `[content]` | Sam / Kristin | Content stage |
| 3 | Hero editorial photo choice (§2) | `[asset]` | Frederik + Surface | Content stage · SP-13 final |
| 4 | Quote attribution clearance — confirm Hadja consent + preferred attribution format | `[client]` | Sam / Kristin | §5 → final (block if denied) |
| 5 | Per-editie cover photo × 6 (or text-only cards) | `[asset]` | Surface | §4 visual final |
| 6 | Per-project partner list (§6 inline prose) — KANAL / KVS / CAMPO / BRONKS / MUS-E confirmed? Any missing? | `[content]` | Sam / Kristin | §6 → final |
| 7 | "Plan een gesprek" — does it land on `/samenwerken/opzetten` or on a dedicated `/contact` route? | `[client]` | Sam | §6 CTA href |
| ~~8~~ | ~~Editie status logic — no Editie model in code~~ | ~~`[research]`~~ | **RESOLVED 2026-05-28** | `App\Models\Editie` model landed; §4 editie cards now render from the model (`$editie->status()` method). SP-16 open-call band promoted above §4 when an editie has `inschrijving_open = true` (self-removing when no active call — does not consume the §-budget). |

## Confidence rationale

- **Was 2 / 5** (vague, structural decisions pending).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); remaining gaps are content/
  asset/team-verify, not structural.
- **→ 4 / 5** when gaps #1 + #2 close (team writes §3 + §5 paragraphs) and #4 clears
  (quote consent).
- **→ 5 / 5** when all 8 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [VP P3 + P1 profiles](../../strategy/40-value-proposition.md) · [User journey](../../strategy/50-user-journey.md)
- Structure: [30-structure](../30-structure.md) — *Trajectory not product* (IA principle 2); Project entity fields
- Tone: [identity/10-tone-of-voice §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie)
- Source quote: [missie-visie current-site mirror](../../../raw/current-site/pages/missie-visie-nl.md)
- Code stubs: [`dansateliers/mariage.blade.php`](../../../../resources/views/dansateliers/mariage.blade.php) · [`dansateliers/mariage-editie.blade.php`](../../../../resources/views/dansateliers/mariage-editie.blade.php) (P-06)
- Sister page (next brief): P-06 Mariage editie — already has live event-listing code; brief still pending
