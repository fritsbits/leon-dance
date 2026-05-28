---
title: P-04 Leon op school — Skeleton brief
tags: [design, skeleton, brief, leon-op-school, page-level, recurring-practice]
sources: [40-skeleton; 41-patterns; 30-structure; strategy/20-personas (P4); strategy/40-value-proposition (P4 profile); identity/10-tone-of-voice (§Samenwerken); glossary; existing dansateliers/leon-op-school.blade.php; sibling briefs 42-briefs/01-home + 05-mariage; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-04
slug: /dansateliers-performances/leon-op-school
updated: 2026-05-28
---

# P-04 Leon op school — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft · Code 🟠 first
> draft (strawman rendered) · Approved —
> **Confidence:** **3 / 5** (was 2; raised by cadence-lock from VP P4 + partner-stem from
> personas + section pattern-mapping). Remaining gaps are content/asset/team-verify, not
> structural.
> **Section budget:** **6 sections** (Marketing tier 5–7 ceiling — staying balanced; not
> conversion-shaped, so a single contact CTA in §6 rather than top-of-page).
> **Authored autonomously per user instruction "no user questions"; all open calls
> documented inline as best-guess decisions (BG-N) + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant B (text header + SP-13 photo as next sibling), consistent with P-01 + P-05. Eyebrow `DANSATELIERS & PERFORMANCES · ATELIERS OP SCHOOL` locates the page in IA (per [30-structure](../30-structure.md) Dansateliers child). | Yes — could drop to variant A (no photo) if asset never lands |
| BG-2 | **CTAs in hero** | **None.** Page is partner-info-first, not a self-serve funnel (per [strategy/40 P4 RTB](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3) "*not an application funnel — Leon-initiated, relationship-led*"). CTA lands in §6 as *"Plan een gesprek"* → `/samenwerken/opzetten`. | Yes — could add a single secondary CTA to hero if it tests too informational |
| BG-3 | **Cadence stated up front** | h1-lede pair carries cadence immediately: *"wekelijks · ~2 uur per sessie · ~6 maanden"*. Per [strategy/40 P4 RTB](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3): "*cadence stated up front (weekly/2h/~6mo)*". This is the single line that qualifies/disqualifies a partner. | Yes — could move into §3 if hero feels overloaded |
| BG-4 | **§4 "Voor wie" — three sector buckets** | Three named sectors per [30-structure](../30-structure.md) sub-item description: *Scholen · Welzijn · Zorg*. Each with one strawman illustrative line + 1 partner-org placeholder. Education broadest because that's where the existing partner-org density sits (Cardijnschool, Kameleon — per [discovery/25-agenda](../../_archive/discovery/25-agenda.md)). | Yes — could go 2 buckets (school / welzijn-zorg gegroepeerd) if the team prefers |
| BG-5 | **Partner-stem quote** | Els Schoemaker (BUSO Cardijnschool) verbatim from [strategy/20-personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3): *"Het atelier is een plek waar je anders kan communiceren: met je handen, voeten en hoofd."* — gatekeeper's *own* words per [strategy/40 P4 RTB](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3). | Yes — could swap for Dewin (Zonnelied) or Meynaerts; or pair two voices in two sections |
| BG-6 | **§5 placement of partner-stem** | Embedded as standalone section between *Voor wie* (§4) and *Contact* (§6) — gives the partner-voice maximal weight as proof rung, doesn't dilute by nesting inside a traject-explainer. SP-12 variant A (inline frame). | Yes — could embed within §4 sector buckets if the page reads cluttered |
| BG-7 | **§6 CTA target** | `Plan een gesprek` → `/samenwerken/opzetten` (same canonical opzetten-route as P-05 Mariage §6; opzetten is the single canonical intake page per [30-structure](../30-structure.md) Samenwerken table, both P3 + P4 land there). | Yes — could split to a dedicated `/over-leon/contact` if team prefers per-page contact |
| BG-8 | **§3 traject-bouw — three named beats** | *Kennismaking · Wekelijkse sessies · Sluitmoment* — Leon's own three-act trajectory per [strategy/20-personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3) ("*Leon maps orgs → invites → 'come and taste' before any commitment*" + weekly cadence + optional voorstelling as *sluitstuk*). Flowing prose, not bullet list. | Yes — could merge into 2 beats (kennismaking + ritme) if it reads rubric-shaped |

If any of BG-1 … BG-8 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Cadence up front, qualification before invitation** (P4 anti-funnel discipline per
   [strategy/40 P4 profile](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3)).
   *"Wekelijks · ~2u · ~6 maanden"* is in the lede, not buried in §3. A partner-coordinator
   reads the time-commitment **before** Leon's pitch — qualifies-out fast if it doesn't fit,
   qualifies-in concrete if it does. Anti-pattern: leading with "Leon gelooft dat…".
2. **Partner-voice carries proof, not Leon-voice.** Per [TOV §4 Toonbaar in plaats van
   prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend) and P4
   RTB: the *gatekeeper's own words* (Schoemaker — BUSO Cardijnschool) replace any
   Leon-said-it claim. Quote in §5 as standalone SP-12 block.
3. **Limited model, not a funnel** (per P4 promise "*not an application funnel · not
   unlimited capacity*"). Page documents what *is*, who it *fits*, who already *did it* —
   and routes a kennismaking gesprek as the action. No "apply now" framing; no FAQ; no
   capacity-tease.
4. **Hybride dial, leaning institutional** (per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)).
   Warm enough that a school director recognises themselves, grounded enough that
   *"serves your mandate, and it counts"* (the report-card moment) reads as evidence not
   marketing. No verkoop-toon.
5. **Sector-routed, not org-routed.** §4 "Voor wie" lists *scholen / welzijn / zorg* (the
   three sectors per [30-structure](../30-structure.md) sub-item) with one illustrative
   line each — not a logo-grid of partner orgs (that's the footer's job via SP-09). Lets a
   reader self-locate by sector in one scan.
6. **One canonical home** for *Leon op school*: this page. Dates per editie/practice
   flow to `/agenda` filtered by `practice=leon-op-school`; sector-cross-references
   live in *Samenwerken → opzetten* (per [Glossary](../../glossary.md) copy notes for P4
   register).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  DANSATELIERS & PERFORMANCES · ATELIERS OP SCHOOL                  │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant B)
│  Leon op school                                                    │
│                                                                    │
│  Een dansbegeleiding van zes maanden, wekelijks, voor scholen,     │
│  welzijnswerk en zorg. Twee uur per week, samen met een vaste      │
│  groep — naar een gedeeld sluitmoment toe.                         │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │      single editorial photo · klas in beweging · full-width  │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │
│  © Photographer · Atelier op school, GBS Kameleon, 2025            │
├────────────────────────────────────────────────────────────────────┤
│  Wat is Leon op school?                                            │ §3 FORMAT-DOC
│                                                                    │
│  Leon komt zes maanden lang elke week langs in jullie school,      │
│  zorgcentrum of organisatie. Een vaste danser werkt met dezelfde   │
│  groep — een klas, een leefgroep, een buurtgroep — naar een        │
│  voorstelling, een toonmoment of een gewoon sluitmoment toe.       │
│                                                                    │
│  Kennismaking — Leon stelt zich eerst voor in de organisatie       │
│  en bij de groep, vrijblijvend, vooraleer er iets vastligt.        │
│                                                                    │
│  Wekelijkse sessies — Eén vaste sessie per week, twee uur,         │
│  zelfde danser, zelfde groep. Begeleiders dansen mee.              │
│                                                                    │
│  Sluitmoment — Optioneel: een publieke voorstelling, een           │
│  toonmoment voor familie, of een gewoon afsluiten met de groep.    │
│  Geen voorwaarde, wel een ritueel.                                 │
├────────────────────────────────────────────────────────────────────┤
│  Voor wie                                                          │ §4 VOOR WIE
│                                                                    │   (3 sectoren ·
│  Scholen — basisscholen, secundair, BUSO. Een klas, een graad,     │   sector buckets ·
│  een schoolwerking. [bv. BUSO Cardijnschool, GBS Kameleon]         │   geen logo-grid)
│                                                                    │
│  Welzijn — buurtwerk, vrijetijdswerk, opvoedingsondersteuning.     │
│  [bv. een lokale welzijnsorganisatie]                              │
│                                                                    │
│  Zorg — woonzorg, dagcentra, dagopvang. Een vaste leefgroep,       │
│  een vaste begeleider.                                             │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │  "Het atelier is een plek waar je anders kan communiceren:   │  │ §5 PARTNER-STEM
│  │   met je handen, voeten en hoofd."                           │  │ (SP-12 variant A,
│  │  — Els Schoemaker · BUSO Cardijnschool                       │  │  standalone)
│  └──────────────────────────────────────────────────────────────┘  │
├────────────────────────────────────────────────────────────────────┤
│  Leon op school bij jullie?                                        │ §6 CONTACT HOOK
│                                                                    │
│  Een traject begint met een vrijblijvende kennismaking — bij       │
│  jullie op locatie, met de groep, zonder voorwaarden vooraf.       │
│                                                                    │
│  [ Plan een gesprek ]                                              │ CTA primary
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                              [funder wall renders here in footer]  │
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
│ · ATELIERS OP SCHOOL        │ §1 SUBPAGE TOP
│                             │
│ Leon op school              │
│                             │
│ [lede wraps to 4-5 lines]   │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │  klas-in-beweging foto  │ │ §2 PHOTO
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ Wat is Leon op school?      │ §3 FORMAT-DOC
│ [opener · 1 alinea]         │
│                             │
│ Kennismaking — ...          │
│ Wekelijkse sessies — ...    │
│ Sluitmoment — ...           │
├─────────────────────────────┤
│ Voor wie                    │ §4 VOOR WIE
│                             │   (1-col stack)
│ Scholen — ...               │
│                             │
│ Welzijn — ...               │
│                             │
│ Zorg — ...                  │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │ "Het atelier is een     │ │ §5 PARTNER-STEM
│ │  plek waar je anders    │ │ (SP-12)
│ │  kan communiceren..."   │ │
│ │ — Els Schoemaker · ...  │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Leon op school bij jullie?  │ §6 CONTACT HOOK
│ [korte intro]               │
│ [ Plan een gesprek ]        │
├─────────────────────────────┤
│ ⤓ SP-09 default funder      │ ← footer wall
│   wall (4 tiers)            │   (NOT suppressed
│                             │    on non-home)
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- §1 lede wraps cleanly to ~5 lines on mobile (cadence-line stays whole, doesn't split).
- §3 traject-beats stack 1-col by default; no two-column layout introduced (keeps prose readable).
- §4 sector blocks stack 1-col always; no horizontal cards (would read as logo-grid, which it isn't).
- §5 SP-12 quote is the same component on mobile/desktop; quote text scales with body type.
- §6 CTA is full-width on mobile, intrinsic-width on desktop — uses `flex flex-wrap gap-3`
  like P-01 §1 (no media-query layout switch).

## Section specs

### §1 — Subpage top (SP-04 variant B)

- **User question:** *"Wat is Leon op school precies — en past dit qua tijd en vorm bij ons?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant B (header + SP-13 sibling).
- **Composition:** eyebrow (parent IA · category) · h1 · lede.
- **Eyebrow:** `DANSATELIERS & PERFORMANCES · ATELIERS OP SCHOOL` (parent link goes to
  `/dansateliers-performances`; second token is the category label per
  [30-structure children table](../30-structure.md), static text).
- **h1:** `Leon op school` (the proper name; short, sectorale toon).
- **Lede (BG-3 cadence up front):** *"Een dansbegeleiding van zes maanden, wekelijks,
  voor scholen, welzijnswerk en zorg. Twee uur per week, samen met een vaste groep —
  naar een gedeeld sluitmoment toe."* Combines (a) duration, (b) cadence, (c) sectoren,
  (d) groepsritme, (e) richting. Per [TOV §2 Concreet](../../identity/10-tone-of-voice.md#2-concreet-niet-abstract):
  *"datum, plaats, naam, getal, jaar, duur"*.
- **BG-2:** **No hero CTA.** CTAs land in §6.
- **TOV word-check (verboden lijst):** geen *traject* (vervangen door *begeleiding* +
  *zes maanden* concreet); geen *werking · creatie · empoweren · laagdrempelig*;
  geen *bruggen bouwen · inclusief · diversiteit · duurzaam*.

### §2 — Photo (SP-13)

- **User question:** *"Hoe ziet dat eruit in een klas of zorgcentrum?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant A (full-width).
- **Asset gap:** strawman caption suggests a *klas-in-beweging* shot (GBS Kameleon set
  per [discovery/25-agenda](../../_archive/discovery/25-agenda.md) — Mariage × MUS-E weekly classes
  ran there spring 2025). Real selection per Surface plane against Boris Charmatz
  photo-discipline benchmark ([Dn-20](../01-concerns.md)).
- **Missing-asset state:** section collapses entirely (SP-13 contract; partial guards `@if (!empty($src))`).
- **Caption discipline:** include *context + locatie + jaar* per SP-13 contract; never just `© Photographer`.

### §3 — Wat is Leon op school? (format-doc + traject-bouw)

- **User question:** *"Wat gebeurt er concreet in zo'n zes maanden?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP. h2 + 1 opener-alinea
  + 3 h3 beats (BG-8) elk met 2–3 zinnen.
- **Three beats (order locked):**
  1. **Kennismaking** — Leon stelt zich voor in de organisatie en bij de groep,
     vrijblijvend, vooraleer iets vastligt. (Verankert *"Leon-initiated"* houding —
     anti-funnel.)
  2. **Wekelijkse sessies** — Eén vaste sessie per week, twee uur, zelfde danser,
     zelfde groep. **Begeleiders dansen mee** (per [strategy/20-personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3):
     *"the teacher/carer is a participant, not a spectator"*).
  3. **Sluitmoment** — Optioneel: publieke voorstelling, toonmoment voor familie, of
     gewoon afsluiten. Geen voorwaarde, wel een ritueel. (Per [Glossary](../../glossary.md)
     P4 copy notes: *voorstelling = optioneel sluitstuk, geen doel*.)
- **Tone discipline:** prose blocks are 3–5 zinnen each (per [TOV §Stijl & ritme](../../identity/10-tone-of-voice.md#stijl--ritme):
  *"korte zinnen waar het kan; werkwoord vroeg; actief"*).
- **Open content (gap #1):** team kan elk van de 3 alineas verfijnen of corrigeren
  (vooral *Sluitmoment* — welke vormen voorkomen het meest).

### §4 — Voor wie (3 sectoren)

- **User question:** *"Past dit bij mijn organisatie?"*
- **Pattern:** plain `.section` + `.container-text` with 3 stacked sector blocks (h3 +
  paragraph each). No SP — this is structured prose, not card-grid.
- **Sectoren (order: breedste eerst, per partner-density):**
  1. **Scholen** — basisscholen, secundair, BUSO. Een klas, een graad, een
     schoolwerking. Illustratief: BUSO Cardijnschool, GBS Kameleon (verifiëren).
  2. **Welzijn** — buurtwerk, vrijetijdswerk, opvoedingsondersteuning. Illustratief:
     [partner-org placeholder — team SharePoint].
  3. **Zorg** — woonzorg, dagcentra, dagopvang. Een vaste leefgroep, een vaste
     begeleider.
- **Why prose, not logo-grid:** per [TOV §4 Toonbaar in plaats van prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend)
  and the [30-structure IA principle 6 rubric-invisibility guardrail](../30-structure.md) —
  a logo-grid here would read as "wie hoort er allemaal in onze stal", not as "wie zou
  hier zichzelf in herkennen". Footer SP-09 carries the org-level partner-wall;
  sector-routing here is for self-locating.
- **Per-sector partner placeholder:** strawman names BUSO Cardijnschool + GBS Kameleon
  (verifiable from [25-agenda](../../_archive/discovery/25-agenda.md)). Welzijn + zorg sector
  placeholders flagged for team verification (gap #2).

### §5 — Partner-stem (SP-12)

- **User question:** *"Wat zegt iemand die het al deed?"*
- **Pattern:** [SP-12 Quote / testimony](../41-patterns.md#sp-12--quote--testimony)
  variant A (inline frame · `--color-surface-muted` background) — standalone, own section,
  niet ingebed in §4. Embedded would dilute; standalone gives the partner-voice maximal
  proof-rung weight.
- **Quote (BG-5):** Els Schoemaker (BUSO Cardijnschool) verbatim van [strategy/20-personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3):
  > *"Het atelier is een plek waar je anders kan communiceren: met je handen, voeten en hoofd."*
- **Attribution:** `— Els Schoemaker · BUSO Cardijnschool` (per SP-12 contract:
  `— Name · context`; geen titel/age — een coördinator-rol is voldoende context).
- **Why this quote, why here:** gatekeeper-voice is exactly what P4 RTB asks for
  (*"partner-coordinator voice — the gatekeeper's own words"*). The quote answers
  *"is dit iets voor onze groep?"* zonder dat Leon het claimt. Geen partner-logo
  nodig — SP-12 contract verbiedt portretten in v1 (privacy + voyeurism guard).
- **Quote-missing state:** section omits (SP-12 contract); §6 still renders. If the
  team prefers to start without (clearance pending), use the next-step empty handling:
  drop §5 entirely, §4 → §6 directly, no replacement filler.

### §6 — Leon op school bij jullie? (Contact hook)

- **User question:** *"Hoe begin ik een gesprek?"*
- **Pattern:** plain `.section` (h2 + 1-paragraph + CTA). Geen SP yet (SP-11 Contact
  pattern still 🔴 stub — drafted on first Samenwerken-child brief per [40-skeleton
  patterns library](../40-skeleton.md#shared-patterns-library-site-level-prerequisite)).
- **Hook copy (strawman):** *"Een traject begint met een vrijblijvende kennismaking —
  bij jullie op locatie, met de groep, zonder voorwaarden vooraf."* Mirrors the
  Kennismaking beat from §3, sluit de circel: page opens met cadence, sluit met
  kennismaking-invite.
- **CTA primary (BG-7):** `Plan een gesprek` → `/samenwerken/opzetten` (verb-first per
  [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas); same target as P-05 Mariage §6
  — `opzetten` is the canonical kennismaking intake for both P3 + P4 per
  [30-structure Samenwerken table](../30-structure.md)).
- **No secondary CTA** — single hook keeps §6 read clean (matches P-05 §6 discipline).
- **No inline partners (SP-09 variant C):** per [Glossary](../../glossary.md) P4 copy notes
  the org-level funder-wall via footer SP-09 is enough; per-sector partner mentions
  already in §4 inline. Avoids duplication.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL h1 — *Leon op school* is short, safe; lede may wrap to 5 lines on mobile) |
| §2 SP-13 photo | Default · **Missing-asset → section collapses** (partial guards) · Long caption wraps |
| §3 format-doc | Default · Per-beat overflow handled by prose wrap |
| §4 Voor wie | Default · Empty sector (e.g. *Welzijn* not yet populated) → block omitted, other 2 still render · Overflow per illustrative-line |
| §5 SP-12 quote | Default · **Quote missing → section omits** (page jumps §4 → §6 directly) · Overflow (long quote >30 words flagged at content stage) |
| §6 Contact hook | Default only (CTA always renders) |
| Page-level | Reduced-motion (global app.css) · Mobile reflow (above) · No JS state |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant B) | 🟠 | 🟠 (unchanged; second use after P-05) |
| SP-12 Quote / testimony (variant A) | 🟠 | 🟠 (unchanged; second use after P-05 §5) |
| SP-13 Photo block (variant A) | 🟠 | 🟠 (unchanged) |

**No new patterns surfaced.** This brief uses the existing library cleanly — a sign the
library is settling into its job. SP-11 Contact pattern stays 🔴 stub (P-04 §6 is a
single-CTA hook, not yet a contact-form pattern; SP-11 still waits for P-09 Samenwerken
→ opzetten brief).

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Leon op school cadence (wekelijks · 2u · 6 mnd) | §1 lede this page | Mirrored on home P-01 §3 card 1-line desc (already live) |
| Three-beat trajectory (kennismaking · wekelijks · sluitmoment) | §3 this page | Don't repeat on Samenwerken → opzetten (link instead) |
| Three sectoren (scholen / welzijn / zorg) | §4 this page | Mirror inline on Samenwerken → opzetten where opzetten splits P3/P4 register |
| Partner-org names per sector | §4 illustrative + footer SP-09 (org-level) | Don't list logos on this page |
| Schoemaker quote | §5 this page | Could also appear on Impact (P-15) — decide there |
| Per-traject dates | `/agenda` filtered by `practice=leon-op-school` | Don't list dates here (this is the practice page, not an editie page) |
| Kennismaking intake form | `/samenwerken/opzetten` (canonical) | §6 CTA links there; no duplicate form on this page |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (§6 — only CTA on the page; BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 5–7)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (5 listed)
- [x] Canonical home named for every load-bearing fact (7 listed)
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §3 format-doc + 3 beat paragraphs final wording | `[content]` | Sam / Kristin | Content stage |
| 2 | §4 sector partner-org placeholders (vooral Welzijn + Zorg) — welke organisaties willen we noemen? | `[content]` | Sam / Kristin (SharePoint) | §4 → final |
| 3 | Hero editorial photo choice (§2) — bij voorkeur klas-in-beweging niet portret | `[asset]` | Frederik + Surface | Content stage · SP-13 final |
| 4 | Schoemaker quote consent + attribution-format clearance (BUSO Cardijnschool naam mag public?) | `[client]` | Sam / Kristin | §5 → final (block if denied; remove §5 fallback documented) |
| 5 | Cadence verifiëren — geldt *2u/week · 6 mnd* voor alle sectoren, of varieert het? Strategy [P4](../../strategy/20-personas.md) zegt "*weekly (a fixed weekday), 2h, ~6 months*" — verifiëren of dit nog steeds klopt | `[content]` | Sam / Kristin | §1 lede precision |
| 6 | CTA target — `/samenwerken/opzetten` of dedicated kennismaking-route? | `[client]` | Sam | §6 CTA href (matches gap #7 op P-05 brief) |
| 7 | "Begeleiders dansen mee" — universeel of soms enkel observerend? Per strategy/20 P4: *"is a participant, not a spectator (analogue: MUS-E)"* — verifiëren of dit voor Leon ook altijd zo is | `[content]` | Sam / Kristin | §3 *Wekelijkse sessies* precision |

## Confidence rationale

- **Was 2 / 5** ([40-skeleton page registry](../40-skeleton.md#page-registry--single-source-of-status-truth):
  vague brief; ~6-mnd traject beschrijving open; partner-traject lijst open; testimonial-pad
  open).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* Structural decisions made (BG-1 … BG-8); cadence locked from VP P4 RTB;
  partner-stem locked from personas (Schoemaker, verbatim); 3 sectoren-bucket locked from
  Structure. Remaining gaps zijn content/asset/team-verify, niet structureel.
- **→ 4 / 5** wanneer gap #1 + #2 sluiten (team schrijft §3 paragrafen + bevestigt §4
  partner-orgs) en #4 cleart (Schoemaker consent).
- **→ 5 / 5** wanneer alle 7 gaps sluiten.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [Personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3) · [VP P4](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3)
- Structure: [30-structure](../30-structure.md) — Dansateliers children table, Samenwerken children table, IA principle 4 (one canonical page)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)
- Glossary: [glossary §P4 copy notes](../../glossary.md#copy-notes-page-level-when-writing-the-content-complete-draft)
- Sibling briefs: [01-home](01-home.md) · [05-mariage](05-mariage.md) (same BG-N + SP-04+B + SP-13 + §6-hook pattern)

- Code stub: [`dansateliers/leon-op-school.blade.php`](../../../../resources/views/dansateliers/leon-op-school.blade.php)
