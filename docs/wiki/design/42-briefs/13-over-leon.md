---
title: P-13 Over Leon (index) — Skeleton brief
tags: [design, skeleton, brief, over-leon, page-level, index]
sources: [40-skeleton; 41-patterns; 30-structure; strategy/40-value-proposition (P2 profile); strategy/50-user-journey (J2); identity/10-tone-of-voice §Over Leon; glossary; existing over-leon/index.blade.php; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-13
slug: /over-leon
type: Utility 3–5
updated: 2026-05-28
---

# P-13 Over Leon (index) — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠 first
> draft · Code 🟠 first draft
> (rewritten 2026-05-28) · Approved —
> **Confidence:** **3 / 5** (was 3; remains 3 — sectioning + opener strawman lifted but
> child sub-page content is still placeholder text).
> **Section budget:** **3 sections** (Utility tier 3–5 ceiling — index page; no CTA-tier
> conversion goal, just routing into 5 children).
> **Authored autonomously per instruction "best-guess autonomous; no user questions";
> open calls documented inline as BG decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant C (eyebrow + h1 + 1-line intro) — index page, no photo. Lede shorter than P-05 because the page is a routing surface, not a destination | Yes — could go variant A (full lede) if more framing needed |
| BG-2 | **Opener paragraph above cards** | Yes — one short framing paragraph: *"16 jaar bezig, 5 jaar vzw."* (per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact) verbatim example). Sets the institutional dial honestly without subsidiedossiertaal. Sits between SP-04 header and the SP-05 card grid as its own small `.section` | Yes — could fold into SP-04 lede if it reads heavy as standalone band |
| BG-3 | **Card grid** | 5 × SP-05 (text-only variant B, no cover photos). Order locked: Missie & visie → Impact → Team → Historiek → Contact — same as nav source-of-truth in [30-structure §Over Leon](../30-structure.md) | Yes — order could re-shuffle if jury arrival is the priority (then Impact + Historiek first) — see Open #1 |
| BG-4 | **5 cards in a 2-col grid** | Same grid as P-01 §3 (`md:grid-cols-2`). 5 cards = 2+2+1 on desktop, single column mobile. The dangling 5th card is accepted — fits the index-page reading | Yes — could go 3-col (`lg:grid-cols-3`) for 3+2 layout if the orphan looks awkward on review |
| BG-5 | **No hero CTA** | Page is a routing index; the cards ARE the CTAs. Adding a separate primary CTA would compete with them | Yes — could add a "Contact" CTA in hero if contact takes priority for an audience that arrives here cold |
| BG-6 | **Card descriptions: 1 sentence each, tell-me-what-I'll-find** | Per instruction. Concrete + plain (TOV); avoid abstract subsidie-language. Mention the content the reader will encounter on that sub-page (not what the sub-page is *about* in the abstract) | Yes — could shorten to a noun-phrase if 1-sentence reads too long for an index |
| BG-7 | **No footer wall suppression** | Site-wide SP-02 footer (with default SP-09 funder wall) renders normally on P-13 — unlike P-01 home which suppresses to avoid double-show. Over Leon doesn't carry its own Featured wall, so footer-default does the job | Yes — could add a Featured variant if Impact later wants the wall up the page |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Index page, not a destination.** P-13's job is routing into the 5 children — every
   load-bearing fact lives on a child (Missie & visie · Impact · Team · Historiek ·
   Contact). The index never repeats them.
2. **P2 jury arrives here from the dossier.** Per [strategy/50-user-journey J2](../../strategy/50-user-journey.md#j2--jury-visitekaartje--p2--g1-dated-keystone),
   the jury comes from the funding dossier wanting to confirm *method · process/aftercare/
   continuity · quality-evolution*. They must find **Impact** and **Historiek** in one
   scan. Card order surfaces them in positions 2 and 4 (after Missie & visie, before
   Team/Contact) so they aren't bottom-of-list filler.
3. **Institutional dial high, per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact).**
   *"Rustig, niet apologetisch, niet schreeuwerig. Géén subsidiedossier-stijl."* The
   opener honestly names duration + scale (*16 jaar bezig, 5 jaar vzw*) without claiming.
4. **No proof-laddering on the index itself.** No funder wall up the page, no big stat
   strip, no embedded quote. The cards carry the reader to the surfaces where proof
   actually lives ([30-structure IA principle 6](../30-structure.md) — rubric-invisibility
   guardrail). Footer SP-09 carries the org-level partner picture; that's enough at index.
5. **One canonical home for sub-page content** (anti-bloat). The index never previews
   sub-page substance; descriptions tell the reader *what they'll find*, not the content
   itself.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│                                                                    │
│  Over Leon                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant C
│  Vijf pagina's die samen vertellen wie Leon is, hoe het werkt en   │    — eyebrow weg-
│  hoe je ons bereikt.                                               │    gelaten op index)
│                                                                    │
├────────────────────────────────────────────────────────────────────┤
│                                                                    │
│  16 jaar bezig, 5 jaar vzw. We dansen en werken in Brussel — met   │ §2 OPENER
│  scholen, welzijnsorganisaties, partners en de mensen die mee      │   (1 paragraph,
│  willen doen.                                                      │    institutional
│                                                                    │    dial high)
├────────────────────────────────────────────────────────────────────┤
│  ┌──Missie & visie────────┐  ┌──Impact────────────────────┐        │ §3 CARD GRID
│  │ Waar Leon voor staat,  │  │ Hoe we werken, met wie en  │        │   (SP-05 × 5 ·
│  │ in het kort.           │  │ wat eruit komt.            │        │   text-only)
│  └────────────────────────┘  └────────────────────────────┘        │
│  ┌──Team──────────────────┐  ┌──Historiek─────────────────┐        │
│  │ Wie er bij Leon werkt. │  │ Van Ultima Vez naar Leon — │        │
│  │                        │  │ zestien jaar in jaartallen.│        │
│  └────────────────────────┘  └────────────────────────────┘        │
│  ┌──Contact───────────────┐                                        │
│  │ Hoe je ons bereikt.    │                                        │
│  └────────────────────────┘                                        │
├────────────────────────────────────────────────────────────────────┤
│  Met steun van     [VL] [VGC] [BXL] [PB]                           │ SP-02 footer
│  Co-producenten    [KANAL] [KVS]                                   │   (SP-09 default
│  Speelplekken      [Piano] [MdC] [Munt] [CAMPO]                    │    funder wall
│  In samenwerking   [MUS-E] [Ketmet] [RITCS]                        │    renders here —
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │    NOT suppressed)
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│                             │
│ Over Leon                   │ §1 SUBPAGE TOP
│                             │
│ Vijf pagina's die samen     │
│ vertellen wie Leon is, hoe  │
│ het werkt en hoe je ons     │
│ bereikt.                    │
├─────────────────────────────┤
│ 16 jaar bezig, 5 jaar vzw.  │ §2 OPENER
│ We dansen en werken in      │   (wraps to ~4-5
│ Brussel — met scholen,      │    lines mobile)
│ welzijnsorganisaties,       │
│ partners en de mensen die   │
│ mee willen doen.            │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │ §3 CARD GRID
│ │ Missie & visie          │ │   (1-col stack)
│ │ Waar Leon voor staat …  │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Impact                  │ │
│ │ Hoe we werken …         │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Team                    │ │
│ │ Wie er bij Leon werkt.  │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Historiek               │ │
│ │ Van Ultima Vez naar …   │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Contact                 │ │
│ │ Hoe je ons bereikt.     │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Met steun van               │ SP-02 footer
│ [VL]   [VGC]                │   (SP-09 default,
│ [BXL]  [PB]                 │    2-col tier grid
│ Co-producenten              │    on mobile)
│ [KANAL] [KVS]               │
│ Speelplekken                │
│ [Piano] [MdC]               │
│ [Munt]  [CAMPO]             │
│ In samenwerking met         │
│ [MUS-E] [Ketmet]            │
│ [RITCS]                     │
│                             │
│ © Leon vzw · Brussel        │
│ Contact · Over Leon · …     │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant C)

- **User question:** *"Ben ik hier goed, en wat vind ik onder Over Leon?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant C (index, no eyebrow,
  short lede that flows into the children's index).
- **Composition:** h1 + 1-sentence lede.
- **No eyebrow:** the page is a top-level destination (visible in primary nav); eyebrow
  would echo the nav. Per [SP-04 spec](../41-patterns.md#sp-04--subpage-top) variant C
  *"may omit the lede and use just eyebrow + h1 + a 1-line intro that flows directly into
  the children's index"*. Here: eyebrow omitted, short lede kept (the routing-promise the
  reader needs).
- **No hero CTA** (BG-5).

### §2 — Opener (institutional dial, honest sizing)

- **User question:** *"Wat is Leon, in één regel?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP. Tiny — 1 paragraph,
  2 sentences max.
- **Composition:** h2 omitted (this is a framing band, not a sub-section); single short
  paragraph between header and card grid.
- **TOV register:** institutional dial high per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact).
  Verbatim opener from TOV example: *"16 jaar bezig, 5 jaar vzw."*
- **No proof claims:** doesn't say *uniek · bekroond · vernieuwend* (banned in
  [TOV](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy)). States duration +
  scale + scope, lets the children carry the rest.

### §3 — Card grid (5 × SP-05 text-only)

- **User question:** *"Welke vijf pagina's en wat staat er op elk?"*
- **Pattern:** [SP-05 Project card](../41-patterns.md#sp-05--project-card) variant B
  (text-only — no cover photo). 5 cards, 2-col grid desktop, 1-col mobile.
- **Cards (order locked per [30-structure §Over Leon](../30-structure.md)):**
  1. **Missie & visie** — *Waar Leon voor staat, in het kort.*
  2. **Impact** — *Hoe we werken, met wie en wat eruit komt.*
  3. **Team** — *Wie er bij Leon werkt.*
  4. **Historiek** — *Van Ultima Vez naar Leon — zestien jaar in jaartallen.*
  5. **Contact** — *Hoe je ons bereikt.*
- **Grid:** 2-col desktop (`md:grid-cols-2`), 1-col mobile. 5th card = orphan in row 3
  (accepted — see BG-4).
- **Card chrome:** SP-05 default — border + radius + hover-tint + whole-card link. No
  separate "Lees meer" button.
- **Descriptions (1 sentence each, BG-6):** *what the reader will find* on that sub-page,
  not what the sub-page is abstractly *about*. Concrete + plain.
- **Cover photos:** none in v0.1 — would require 5 editorial photos that don't repeat
  the project pages. Defer to Surface plane.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (h1 is *Over Leon* — short, safe) |
| §2 Opener | Default only · Single paragraph, fixed at 2 sentences |
| §3 Card grid | Default (5 cards) · Overflow (long description wraps to 3 lines, card height grows; grid row aligns to tallest) · Hover (whole-card tint) · Empty (theoretical — sub-pages are routes; if a route drops we'd remove the card not show empty state) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Footer SP-09 NOT suppressed (only home suppresses) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant C) | 🟠 (variant A drafted; C named, lightly specced) | 🟠 (variant C now first-used; spec in 41-patterns already covers it — no upgrade needed) |
| SP-05 Project card (variant B text-only) | 🟠 | 🟠 (variant B first-used at scale; spec already covers it) |
| SP-09 (default, in footer) | 🟠 | 🟠 (unchanged — default variant renders via footer suppression rule) |

**No new patterns introduced.** All 5 children-routing cards re-use SP-05 variant B.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Leon's missie + visie (incl. Apartheid Free Zones) | P-14 `/over-leon/missie-visie` | Not on index — index only points |
| Method (Inviter · Mixing · Reversing · Affirming) + proces/nazorg/continuïteit + qualitative evidence + "In cijfers" | P-15 `/over-leon/impact` | Not on index |
| Team roster | P-16 `/over-leon/team` | Not on index |
| Lineage (Ultima Vez → Leon · *Birds* · *Tornar/INVITED* · recognition) | P-17 `/over-leon/historiek` | Not on index |
| General contact + bezoek-adres | P-18 `/over-leon/contact` | Footer carries `Contact` link, never the address |
| Duration framing ("16 jaar bezig, 5 jaar vzw") | §2 opener this page | Likely also on P-17 Historiek in fuller form (jaartallen) |
| Partner names (org-level wall) | SP-09 (in footer site-wide) | Not surfaced on P-13 itself |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA OR cards-as-CTA discipline (BG-5: 5 cards ARE the
      CTAs on an index page; no competing primary)
- [x] State inventory explicit
- [x] Section budget declared and respected (3 of 3–5)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions)
- [x] Patterns referenced by SP-id (5 listed)
- [x] Canonical home named for every load-bearing fact (every fact routes to a child)
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Card order — Missie&visie / Impact / Team / Historiek / Contact (nav-default) vs. Impact / Historiek / Missie / Team / Contact (jury-arrival-optimised, per J2)? Current = nav-default (BG-3) | `[strategy]` | Frederik + Sam | §3 → final |
| 2 | "16 jaar bezig, 5 jaar vzw" — jaartal-claims confirmed by team? Same gap as P-01 §1 jury band (gap #3 there). One source of truth. | `[content]` | Sam / Kristin | §2 → final |
| 3 | Card descriptions × 5 — final NL phrasing per Kristin tone-pass | `[content]` | Kristin | §3 → final |
| 4 | Eyebrow on/off — current = off (BG-1, top-level page, primary-nav locating). Confirm visually on review | `[design]` | Frederik | §1 → final |
| 5 | 2-col grid orphan card (5th sits alone in row 3) vs. 3-col grid (3+2 cleaner). Current = 2-col (BG-4). Confirm visually | `[design]` | Frederik | §3 → final |

## Confidence rationale

- **Was 3 / 5** (per [40-skeleton page registry](../40-skeleton.md): *"overzicht-paragraaf;
  sectie-introducties naar 5 children"* — both now drafted).
- **Stays 3 / 5** — structural decisions made (BG-1 … BG-7), strawman copy in hand
  (now in the rendered view); remaining gaps are tone-pass +
  jaartal-confirm + 2 design verifications.
- **→ 4 / 5** when gaps #2 + #3 close (Kristin tone-pass + Sam jaartal-verify).
- **→ 5 / 5** when all 5 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [VP P2 jury profile](../../strategy/40-value-proposition.md) · [User journey J2](../../strategy/50-user-journey.md)
- Structure: [30-structure §Over Leon](../30-structure.md) (card order source) · IA principle 6 (rubric-invisibility guardrail)
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)

- Code stub: [`resources/views/over-leon/index.blade.php`](../../../../resources/views/over-leon/index.blade.php)
- Routes: [`routes/web.php`](../../../../routes/web.php) (`/over-leon` + 5 children)
- Exemplar briefs: [01-home](01-home.md) (P-01) · [05-mariage](05-mariage.md) (P-05)
