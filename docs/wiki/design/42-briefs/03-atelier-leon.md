---
title: P-03 Atelier Leon — Skeleton brief
tags: [design, skeleton, brief, atelier-leon, page-level, recurring-practice]
sources: [40-skeleton; 41-patterns; 30-structure; identity/10-tone-of-voice; glossary; _archive/discovery/26-agenda-analysis (weekly cadence Wed Pianofabriek / Sat Maison des Cultures); strategy/20-personas (P1); strategy/40-value-proposition; 42-briefs/01-home + 05-mariage; existing dansateliers/atelier-leon.blade.php; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-03
slug: /dansateliers-performances/atelier-leon
type: Marketing 5–7
updated: 2026-05-28
---

# P-03 Atelier Leon — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content
> 🟠 first draft ([03-atelier-leon-content](03-atelier-leon-content.md)) · Code 🟠 first
> draft (strawman rendered; §4 live from Event model) · Approved —
> **Confidence:** **3 / 5** (was 2 — raised by section lock-in + pattern decisions;
> strawman written; team-verify on jaartal, exact times-per-week, what-to-bring details).
> **Section budget:** **5 sections** (Marketing tier 5–7 ceiling — staying lean; page is
> low-friction-by-design, not conversion-shaped; "kom langs" IS the CTA).
> **Authored autonomously per user instruction "ask as little questions as possible";
> all open calls documented inline as best-guess decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant B (text header + SP-13 photo as next sibling), consistent with P-01 Home and P-05 Mariage. *Belonging dial high* per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie) — photo carries the "what you walk into" reassurance for P1. | Yes — could collapse to variant A if no atelier photo lands |
| BG-2 | **CTAs in hero** | **None.** "Kom langs" is the page's posture, not a button. No inschrijving form (per Glossary: Atelier Leon is *drop-in · no-registration*). The agenda preview (§4) provides the only action: a concrete next moment. | Yes — could add a single `.btn-ghost` to /agenda if testing shows P1 misses the next-thing-to-attend |
| BG-3 | **Sections (5, locked)** | §1 SP-04 top · §2 SP-13 photo · §3 Wat is een open atelier? (format-doc) · §4 Waar en wanneer (locations + cadence + practical info, with eerstvolgende SP-07 ×N inline) · §5 Voor wie? (reassurance). **No §6 partner-wall on the page** — site-wide footer SP-09 carries it. | Yes — could split §4 into a separate "Eerstvolgende" §, lifts to 6 sections |
| BG-4 | **§4 agenda preview = filter to OpenAtelier × practice=atelier-leon, limit 8** | Per task hint: `Event::forPractice('atelier-leon')->ofType(EventType::OpenAtelier)->upcoming()->limit(8)`. 8 covers ~4 weeks (Wed + Sat ≈ 2/week). | Yes — could trim to 6 or expand to 12; 8 chosen because Atelier Leon page is the canonical home for *when* — generous list, not preview. |
| BG-5 | **Practical info (§4) framing** | Inline beats per locatie: *adres · dag + uur · wat brengt je mee*. No "Inschrijving" header — explicitly absent reinforces drop-in posture. | Yes — could lift to its own §; staying inline keeps the section budget at 5 |
| BG-6 | **§5 "Voor wie?" reassurance** | Lightweight Q-shaped beats: *Heb ik ervaring nodig? · Hoe oud moet ik zijn? · Kost het iets? · Moet ik me inschrijven?* — 4 short answers, no FAQ-accordion (over-engineered for P1). | Yes — could fold into §3 prose if reads too FAQ-shaped |
| BG-7 | **Cadence facts** | "Wekelijks · woensdag in de Pianofabriek (Sint-Gillis) · zaterdag in de Maison des Cultures (Molenbeek)" — from [discovery/26-agenda-analysis](../../_archive/discovery/26-agenda-analysis.md) §2 (independently corroborated from the Excel). Times: *Wo 16:00–18:00 · Za 10:00–12:00* (same source). | Yes — exact times subject to seasonal shifts; team-verify |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Drop-in is the product, not a feature.** The whole page is shaped so a newcomer (P1)
   can read it in 30 seconds and walk in next Wednesday or Saturday. No form, no
   inschrijving, no "first session is free" qualifier — *every* session is free, every
   session is drop-in. The page IS the funnel.
2. **Belonging dial high** per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie).
   Je-vorm, korte zinnen, *"kom gewoon langs"*. Geen jury-toon op deze pagina — P2/P3
   lezen Atelier Leon als bewijs van wekelijkse activiteit door §4 (live Event-data),
   niet door framing.
3. **§4 = the page's spine.** A live list of the next 8 open ateliers is more
   reassuring than any copy. P1 sees "I could go this Wednesday" without hunting on
   /agenda. The list IS the proof of "wekelijks · gratis · zonder inschrijving".
4. **One canonical home for cadence + locations.** Per-locatie practical info (adres,
   dag+uur, wat brengt je mee) lives here; /agenda shows the dated sessions; nothing
   repeats across surfaces. Glossary lock: *atelier · drop-in · zonder inschrijving*.
5. **No CTAs above-the-fold.** No button competes with the posture. The agenda preview
   in §4 is the only action; the page-end `→ Volledige agenda` link is the only afsluiter.
   This is deliberate restraint, not absence — Atelier Leon is a place, not a sale.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  DANSATELIERS & PERFORMANCES · OPEN DANSATELIERS                   │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant B)
│  Atelier Leon                                                      │
│                                                                    │
│  Wekelijks samen dansen in Brussel. Gratis, zonder inschrijving.   │
│  Geen ervaring nodig — kom gewoon langs.                           │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │           single editorial atelier photo · full-width        │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │
│  © Photographer · Atelier Leon, Pianofabriek, 2024                 │
├────────────────────────────────────────────────────────────────────┤
│  Wat is een open atelier?                                          │ §3 FORMAT-DOC
│                                                                    │
│  Een open atelier is een dansles waar iedereen welkom is. Er is    │
│  een vaste begeleider, een opwarming, en daarna werken we samen    │
│  aan beweging — op muziek, in een groep, op je eigen ritme.        │
│                                                                    │
│  [2 alineas · concreet: wat gebeurt er, wie leidt, hoe ziet 1u30   │
│   uit, geen choreografie-leren maar samen dansen]                  │
├────────────────────────────────────────────────────────────────────┤
│  Waar en wanneer                                                   │ §4 LOCATIES +
│                                                                    │   EERSTVOLGENDE
│  Woensdag · 16:00–18:00 · Pianofabriek (Sint-Gillis)               │
│  Fortstraat 35, 1060 Sint-Gillis                                   │
│                                                                    │
│  Zaterdag · 10:00–12:00 · Maison des Cultures (Molenbeek)          │
│  Mommaertsstraat 4, 1080 Molenbeek                                 │
│                                                                    │
│  Wat breng je mee? Kledij waarin je makkelijk beweegt en           │
│  een fles water. Schoenen mogen uit.                               │
│                                                                    │
│  ── Eerstvolgende ────────────────────────────────────────────     │
│                                                                    │
│  WO 04.06 · 16:00   Atelier Leon — Pianofabriek                    │ SP-07 × N
│  ZA 07.06 · 10:00   Atelier Leon — Maison des Cultures             │ (live, limit 8)
│  WO 11.06 · 16:00   Atelier Leon — Pianofabriek                    │
│  ZA 14.06 · 10:00   Atelier Leon — Maison des Cultures             │
│  …                                                                 │
│  → Volledige agenda                                                │
├────────────────────────────────────────────────────────────────────┤
│  Voor wie?                                                         │ §5 REASSURANCE
│                                                                    │   (Q-shaped beats)
│  Heb ik ervaring nodig?                                            │
│  Nee. Wie nog nooit gedanst heeft is even welkom als wie het       │
│  al jaren doet.                                                    │
│                                                                    │
│  Hoe oud moet ik zijn?                                             │
│  Vanaf 16. Geen bovengrens — onze oudste vaste danser is in        │
│  de zeventig.                                                      │
│                                                                    │
│  Kost het iets?                                                    │
│  Nee. Gratis, elke week.                                           │
│                                                                    │
│  Moet ik me inschrijven?                                           │
│  Nee. Kom op het uur, dans mee, ga weer.                           │
├────────────────────────────────────────────────────────────────────┤
│  [SP-09 default funder wall renders in footer — not suppressed]    │ SP-02 footer
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │
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
│ OPEN DANSATELIERS           │ §1 SUBPAGE TOP
│                             │
│ Atelier Leon                │
│                             │
│ Wekelijks samen dansen in   │
│ Brussel. Gratis, zonder     │
│ inschrijving. Geen ervaring │
│ nodig — kom gewoon langs.   │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │  atelier photo          │ │ §2 PHOTO
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ Wat is een open atelier?    │ §3 FORMAT-DOC
│ [2 alineas in 1-col]        │
├─────────────────────────────┤
│ Waar en wanneer             │ §4 WHERE+WHEN
│                             │
│ Woensdag · 16:00–18:00      │
│ Pianofabriek (Sint-Gillis)  │
│ Fortstraat 35               │
│                             │
│ Zaterdag · 10:00–12:00      │
│ Maison des Cultures         │
│ Mommaertsstraat 4           │
│                             │
│ Wat breng je mee?           │
│ [korte regel]               │
│                             │
│ ── Eerstvolgende ──         │
│                             │
│ WO 04.06 · 16:00            │ SP-07 (mobile reflow:
│ Atelier Leon — Pianofabriek │  date wraps above name)
│                             │
│ ZA 07.06 · 10:00            │
│ Atelier Leon — MdC          │
│ …                           │
│                             │
│ → Volledige agenda          │
├─────────────────────────────┤
│ Voor wie?                   │ §5 REASSURANCE
│ Heb ik ervaring nodig?      │
│ [antwoord]                  │
│ Hoe oud moet ik zijn?       │
│ [antwoord]                  │
│ Kost het iets?              │
│ [antwoord]                  │
│ Moet ik me inschrijven?     │
│ [antwoord]                  │
├─────────────────────────────┤
│ ⤓ SP-09 default funder      │ ← footer wall
│   wall (4 tiers)            │   (NOT suppressed)
│                             │
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- No CTAs to manage — no full-width-on-mobile button reflow concern.
- §4 SP-07 rows wrap date/time above name on mobile (already handled by `date-row.blade.php` `flex-col md:flex-row`).
- §5 reassurance Q + A pairs stack naturally — no card-grid to break.
- No section disappears between viewports.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Wat is dit en is het iets voor mij?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Composition:** eyebrow (`DANSATELIERS & PERFORMANCES · OPEN DANSATELIERS`) · h1 (`Atelier Leon`) · lede (2 sentences, invitation-forward).
- **Eyebrow link:** `DANSATELIERS & PERFORMANCES` → `/dansateliers-performances`. Second token `OPEN DANSATELIERS` is the sub-category — static text (matches Glossary "*Open dansateliers: Atelier Leon*" naming).
- **BG-2:** **No hero CTA.** The page's posture IS the CTA — see kern point 5.

### §2 — Photo (SP-13)

- **User question:** *"Hoe ziet zo'n atelier eruit?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant A (full-width).
- **Asset note:** Atelier Leon has the **highest photo coverage** in [90-image-map](../90-image-map.md) — strawman caption assumes a Pianofabriek shot, real selection per Surface plane against the Boris Charmatz benchmark ([Dn-20](../01-concerns.md)).
- **Missing-asset state:** section collapses (SP-13 contract).

### §3 — Wat is een open atelier? (format-doc)

- **User question:** *"Wat gebeurt er eigenlijk in zo'n atelier?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP.
- **Composition:** h2 + 2 short paragraphs. Concrete (opwarming, ~1u30, vaste begeleider, geen choreografie-uit-het-hoofd-leren). No abstract claims (*"laagdrempelig"*, *"inclusief"* — banned in [TOV](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy)).
- **Strawman opener:** *"Een open atelier is een dansles waar iedereen welkom is. Er is een vaste begeleider, een opwarming, en daarna werken we samen aan beweging — op muziek, in een groep, op je eigen ritme."*

### §4 — Waar en wanneer (locaties + eerstvolgende SP-07 × N)

- **User question:** *"Wanneer en waar kan ik komen — en wat moet ik meebrengen?"*
- **Pattern:** plain `.section` with two locatie-blocks (dag · uur · venue · adres) + inline *Wat breng je mee* line + a horizontal rule + live SP-07 list of next ≤ 8 open ateliers + `→ Volledige agenda` link.
- **Data source:** `Event::query()->where('is_public', true)->forPractice('atelier-leon')->ofType(EventType::OpenAtelier)->upcoming()->limit(8)->get()`.
- **Locaties** (per [discovery/26-agenda-analysis §2](../../_archive/discovery/26-agenda-analysis.md)):
  - Woensdag · 16:00–18:00 · **Pianofabriek** · Fortstraat 35, 1060 Sint-Gillis
  - Zaterdag · 10:00–12:00 · **Maison des Cultures** · Mommaertsstraat 4, 1080 Molenbeek
- **Wat breng je mee:** kledij + water + schoenen-mogen-uit (1 zin).
- **Empty state:** copy "Geen aankomende open ateliers in de agenda. Kijk gerust op de [volledige agenda](/agenda)." — should be theoretical (cadence is weekly).
- **No "inschrijven" prompt.** Explicitly absent.

### §5 — Voor wie? (reassurance — Q-shaped beats)

- **User question:** *"Heb ik ervaring nodig · ben ik te oud · kost het iets · moet ik me inschrijven?"* — the four P1 thresholds.
- **Pattern:** plain `.section` + `.container-text` with 4 Q-A pairs (h3 question · short paragraph answer). No accordion (over-engineered for 4 short pairs).
- **Order locked** (most-friction-first): *Ervaring · Leeftijd · Geld · Inschrijving*.
- **Each answer:** 1–2 short sentences. Belonging dial, je-vorm.
- **Why §5 not §1?** P1 only asks "ben ik welkom?" once they've decided they're interested — answering it above the fold reads defensive ("we beloven dat…"). After §3 format-doc + §4 next-thing-to-attend, the reassurance lands as a final clearing of doubts, not a pre-emptive disclaimer.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL lede — strawman is 2 short zinnen, safe) |
| §2 SP-13 photo | Default · **Missing-asset → section collapses** |
| §3 format-doc | Default only |
| §4 Waar en wanneer | Default (2 locatie-blocks + N upcoming) · **Empty (no upcoming events) → empty-state copy** · Locatie-block-with-no-adres (theoretical) |
| §5 reassurance | Default only |
| Page-level | Reduced-motion (global, app.css) · Mobile reflow (above) · Event data unavailable → §4 SP-07 list shows empty-state copy, locatie-blocks still render |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-07 Date-row | 🟠 | 🟠 (unchanged — second live-data use after P-01 §4) |
| SP-13 Photo block | 🟠 | 🟠 (unchanged) |

**No new patterns introduced.** All needs met by the existing library — this brief is
a pure consumer of SP-01/02/04/07/13. Notable absence: **no SP-09 inline-on-page** —
the site-wide footer wall carries the org-level partner picture; Atelier Leon has no
project-specific partners to surface inline (it's a recurring practice, not a project).

## Canonical home for facts (anti-bloat discipline)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| What an open atelier is (format) | §3 this page | Glossary references *atelier* generically; home P-01 §3 carries only 1-line card-desc |
| Locations + days + times | §4 this page (locatie-blocks) | Home card-desc summarises ("woensdag in Pianofabriek, zaterdag in MdC"); /agenda shows individual dated rows |
| Wat breng je mee | §4 this page | Don't repeat — link from elsewhere if needed |
| Eerstvolgende open ateliers | /agenda (P-12, canonical) | §4 shows next 8 as preview (this is the page that should show *the most* upcoming, since /agenda is filtered by everything) |
| Cost (gratis) | §5 Q-A pair "Kost het iets?" | Also stated in §1 lede; consistent ("gratis") |
| Drop-in posture (no inschrijving) | §5 Q-A pair "Moet ik me inschrijven?" | Also stated in §1 lede ("zonder inschrijving") — mirroring is OK for the most load-bearing reassurance |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (no CTA on page; "kom langs" posture; BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (5 of 5–7)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (5 listed; 0 new)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Brief is gate-ready for review → 🟡 reviewed → 🟢 final.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §3 format-doc 2 paragraphs — final NL copy | `[content]` | Sam / Kristin | Content stage final |
| 2 | Hero editorial photo choice (§2) | `[asset]` | Frederik + Surface | Content stage · SP-13 final |
| 3 | §4 exact times confirmation — "Wo 16:00–18:00, Za 10:00–12:00" from Mar–May 2026 agenda; do these hold year-round? Any seasonal shift? | `[content]` | Sam / Kristin | §4 → final |
| 4 | §4 venue addresses — *Pianofabriek Fortstraat 35* / *Maison des Cultures Mommaertsstraat 4* — verify exact street numbers | `[content]` | Sam / Kristin | §4 → final |
| 5 | §5 Q-A — verify "vanaf 16, geen bovengrens" leeftijd-claim (or whatever the actual minimum is); verify "oudste in de zeventig" (TOV: concrete over vague) | `[content]` | Sam / Kristin | §5 → final |
| 6 | §5 — does Atelier Leon ever pause (zomerstop / feestdagen)? If yes, add a 5th Q-A or footnote in §4 | `[content]` | Sam / Kristin | §5 → final (or accept as gap if always-running) |
| 7 | Cancellation / Atelier Leon × Mariage rebrand — sometimes the session is labelled *Atelier Leon × Mariage* (per seeder + 26-agenda-analysis). Should those appear in §4? Currently they would (same `practice_slug=atelier-leon`); decision is whether the title prefix matters to a P1 reader. Strawman: **show them as-is** (titles surface as "Atelier Leon x Mariage" — honest, not confusing) | `[strategy]` | Kristin | §4 visual review |

## Confidence rationale

- **Was 2 / 5** (vague, no section list, cadence-facts unverified).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); section list locked at 5;
  cadence corroborated by [26-agenda-analysis](../../_archive/discovery/26-agenda-analysis.md);
  remaining gaps are team-verify on facts (exact times, addresses, leeftijd, zomerstop),
  not structural.
- **→ 4 / 5** when gaps #1 + #3 + #4 close (team confirms format-doc copy + exact
  times + addresses).
- **→ 5 / 5** when all 7 gaps close + photo lands.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [Personas P1](../../strategy/20-personas.md) · [VP](../../strategy/40-value-proposition.md) · [User journey J1](../../strategy/50-user-journey.md)
- Structure: [30-structure](../30-structure.md) — *Open dansateliers: Atelier Leon* (RecurringPractice, no edities)
- Tone: [identity/10-tone-of-voice §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie)
- Vocabulary: [glossary](../../glossary.md) — *atelier · drop-in · inschrijving (paired with "of kom gewoon langs")*
- Cadence source: [discovery/26-agenda-analysis §2](../../_archive/discovery/26-agenda-analysis.md)
- Sister pages: [P-01 Home brief](01-home.md) · [P-05 Mariage brief](05-mariage.md)
- Code stub: [`resources/views/dansateliers/atelier-leon.blade.php`](../../../../resources/views/dansateliers/atelier-leon.blade.php)
- Content: [03-atelier-leon-content](03-atelier-leon-content.md)
