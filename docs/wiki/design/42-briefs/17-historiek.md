---
title: P-17 Historiek — Skeleton brief
tags: [design, skeleton, brief, historiek, page-level, over-leon]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; discovery/21-organisation (KBO + lineage); strategy/40-value-proposition (P5 RTB); 01-concerns Dn-16; existing over-leon/historiek.blade.php; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-17
slug: /over-leon/historiek
type: Marketing 5–7
updated: 2026-05-28
---

# P-17 Historiek — Skeleton brief

> **Status:** Brief 🟠 first draft (validation 8/8 PASS) · Wireframe 🟠 first draft
> (desktop + mobile) · Content 🟠 first draft · Code 🟠 first draft (strawman
> rendered) · Approved —
> **Confidence:** **3 / 5** (was 3; held — narrative page, strawman writable from
> Discovery 21-organisation + Strategy P5 RTB; team verification of jaartallen +
> juried-selection lijst is the gap to 4/5).
> **Section budget:** **6 sections** (Marketing tier 5–7 ceiling — narrative page,
> no top CTA; Historiek is a *read*, not a conversion surface).
> **Authored autonomously per "best-guess" mode; all open calls documented inline as
> BG-N decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Header treatment** | SP-04 **variant A** (plain heading — eyebrow + h1 + lede). No opening photo. Historiek is a text-narrative page; the editorial-photo slot is offered as **optional §6** (SP-13 variant B contained) rather than a hero — keeps the page institutional in dial, avoids the empty-void failure mode if no good lineage photo exists. | Yes — could lift to variant B if an iconic *Birds*/*Atelier Quartier*-era photo lands and Surface decides it earns the hero slot |
| BG-2 | **No CTAs anywhere on the page** | Historiek is a *read*, not a *do*. The page closes with §5 Erkenning + optional §6 photo; the natural next-step is back into the IA via SP-01 nav (Over Leon siblings) or the SP-02 footer wall. Per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact): institutional dial, not apologetic, not schreeuwerig. Adding a "plan een gesprek" CTA would force a conversion shape onto a story page. | Yes — could add a single text-link to Impact (P-15) or Team (P-16) in §1 lede if user-testing shows the page reads as a dead-end |
| BG-3 | **"16 jaar bezig, 5 jaar vzw" framing locked** | The page leads with this honest construction per [TOV §Stijl & ritme](../../identity/10-tone-of-voice.md#stijl--ritme) ("16 jaar bezig, 5 jaar vzw"). Two numbers, one sentence: the practice (Seppe-bij-Ultima-Vez sinds ~2010) is older than the vzw (2021). Resolves the home §1 jury-band open question (gap #3 there: "sinds 2010" / 2017 / 2021 jaartal) by surfacing **all three** anchors in their own context on this page — home keeps the single "sinds 2010" line, Historiek does the unpacking. | Yes — could replace with a different lineage construction if Sam/Kristin prefer a different jaartal-emphasis, but the *honesty* of naming both numbers is structural |
| BG-4 | **Tijdlijn as a §3 list, not a fancy timeline component** | Plain `<ul>` with year-prefixed rows (`.meta` year + body text). Each row = one key moment. No SVG timeline graphic, no scroll-snap pattern (Dn-20 motion-restraint guard) — chronological list reads cleanly and survives translation. | Yes — Surface plane may decide to upgrade visually (e.g. left-rail year column), but the data shape stays a list |
| BG-5 | **Birds + Tornar + INVITED in ONE section (§4), explicit afbakening** | Per [30-structure](../30-structure.md): "*Birds* — Ultima Vez production · Leon tour-direction since 2023 · *not* a Leon own work" / "*Tornar / INVITED* — Ultima Vez roots". One section, four short paragraphs (intro + 3 works), so the *afbakening* (these are Ultima Vez works, not Leon's-own) is the load-bearing point — split across multiple sections would dilute it. | Yes — could split into §4 Birds (active tour-direction) + §5 Tornar/INVITED (historical roots), pushing Erkenning to §6, photo to §7 — but that overruns the 5–7 budget if photo stays, and feels over-engineered |
| BG-6 | **Erkenning (§5) is restrained — juried selection list only, no marketing wrapper** | Per [Dn-16 closure](../01-concerns.md): recognition = lineage-proxy + juried *selection*, **never "award-winning"**. Per [P5 RTB in Strategy VP](../../strategy/40-value-proposition.md#p5--pers--breed-publiek--serves-g3): "INVITED/Tornar — het TheaterFestival; no won prizes". One-paragraph intro that names the framing honestly ("Leon zelf is jong; het werk dat eraan voorafging werd door vakjuries opgepikt") + a small list of selections with year + jury. **No *Mariage* critic claims** (zero published reviews — [Dn-16](../01-concerns.md)). | No — the framing is a strategy decision (D-iii qualitative-led, anti-superlative), reversing it requires re-opening Dn-16/S-11 |
| BG-7 | **Optional §6 photo (SP-13 variant B contained)** | Single editorial photo at `.container-text` width — more editorial feel than full-bleed, fits a story-page. Strawman caption ties to one of the lineage moments (Atelier Quartier Molenbeek, or *Birds* tour). **Missing-asset state collapses the section entirely** (SP-13 contract). v0.1 ships without the photo until Surface picks one. | Yes — could promote photo to variant B-of-SP-04 (hero photo below header) if a signature lineage image is selected; could also drop §6 entirely without harming the page |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **One read, two registers received.** Page is written in the institutional dial
   ([TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)),
   so P2 jury reads it as durability evidence and P5 press reads it as a clean
   background-text. Same substance, no parallel framing.
2. **Honest lineage, no overclaim.** Leon vzw is young (2021); the practice is older
   (Seppe-bij-Ultima-Vez sinds 2010+). Both are true; the page says both. Anything
   else is either subsidiedossier-puffery or false modesty.
3. **Afbakening over claim** for *Birds* / *Tornar* / *INVITED*. These are
   **Ultima Vez productions** (Leon takes tour-direction on *Birds* sinds 2023). The
   page surfaces them because they are part of Seppe's trajectory and the team's
   working history; it does **not** claim them as Leon's-own works. The wording
   carries the distinction openly — per [30-structure](../30-structure.md) IA
   principle "trajectory, not product" applied to the historiek itself.
4. **Recognition = lineage-proxy + juried selection.** Never "award-winning"; no
   implied *Mariage* critic-acclaim. Per [Dn-16 closure](../01-concerns.md) +
   [P5 RTB](../../strategy/40-value-proposition.md#p5--pers--breed-publiek--serves-g3).
   The §5 framing is the closure of the "is er een aparte Pers-pagina?" decision —
   No (v1 Won't-Have), recognition lives here.
5. **Read-only surface, no CTAs.** Belongs to the Over-Leon cluster (Impact, Team,
   Historiek, Contact). The site-wide funder wall in SP-02 footer carries the
   present-day partner-proof; this page carries the past.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVER LEON                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  Historiek                                                         │
│                                                                    │
│  Leon vzw bestaat sinds 2021. Het werk dat eraan voorafging — het  │
│  participatieve atelier, de grote voorstellingen — loopt al sinds  │
│  2010, eerst binnen Ultima Vez, sinds 2021 onder eigen naam.       │
├────────────────────────────────────────────────────────────────────┤
│  Waar Leon vandaan komt                                            │ §2 LINEAGE
│                                                                    │
│  Seppe Baeyens werkte sinds 2010 als choreograaf binnen Ultima Vez │
│  rond een vraag: hoe maak je een dansvoorstelling met mensen die   │
│  geen dansers zijn? Daaruit groeiden de participatieve trajecten   │
│  (Tornar 2015, INVITED 2018, Birds 2021) en — in januari 2017 in   │
│  Molenbeek — Atelier Quartier: een wekelijks open dansatelier      │
│  zonder inschrijving, drempelloos en gratis. Atelier Leon werkt    │
│  vandaag volgens datzelfde model.                                  │
│                                                                    │
│  In 2021 wordt die werking een eigen vzw onder de naam Leon —      │
│  vernoemd naar de danser Leon Gyselinck (1923–2024). De            │
│  participatieve praktijk verhuist mee; de nieuwe voorstellingen    │
│  (Mariage vanaf 2024, Kosmos in 2027) worden onder Leon gemaakt.   │
│  Sinds januari 2025 heeft Leon ook een eigen payroll.              │
├────────────────────────────────────────────────────────────────────┤
│  Tijdlijn                                                          │ §3 TIJDLIJN
│                                                                    │   (plain <ul>,
│  2010   Seppe Baeyens start als choreograaf bij Ultima Vez.        │    year-prefixed
│  2015   Tornar (Ultima Vez) — eerste intergenerationele            │    rows; one moment
│         participatieve voorstelling.                               │    per line)
│  2017   Atelier Quartier opent in Maison des Cultures de Molenbeek │
│         — het wekelijkse open atelier dat de blueprint wordt voor  │
│         Atelier Leon.                                              │
│  2018   INVITED (Ultima Vez) — geselecteerd voor het               │
│         TheaterFestival.                                           │
│  2021   Leon vzw wordt opgericht (10 juni). Birds gaat in première │
│         als Ultima Vez-productie.                                  │
│  2023   Leon neemt de tour-directie van Birds over (De Munt, STUK, │
│         tanzhaus nrw, Festival de Marseille).                      │
│  2024   Mariage gaat in première op MolenFest (21 september) —     │
│         eerste editie in Brussel, eerste Leon-eigen productie.     │
│  2025   Leon wordt werkgever (1 januari). Vier extra Mariage-      │
│         edities in Antwerpen, Rotterdam, Gent, Marseille.          │
│  2026   Mariage in Luik — zesde editie. Atelier Leon loopt         │
│         wekelijks door in de Pianofabriek en de Maison des         │
│         Cultures.                                                  │
│  2027   Kosmos — co-productie met KANAL-Centre Pompidou en KVS.    │
├────────────────────────────────────────────────────────────────────┤
│  Birds, Tornar, INVITED — werk uit de Ultima Vez-periode           │ §4 AFBAKENING
│                                                                    │   (4 paragraphs:
│  De drie grote participatieve voorstellingen waar Seppe Baeyens    │    intro + Birds
│  het meest mee verbonden wordt, zijn Ultima Vez-producties. Ze     │    + INVITED +
│  staan hier omdat ze deel uitmaken van het traject waar Leon uit   │    Tornar)
│  voortkomt — niet omdat het Leon-producties zijn.                  │
│                                                                    │
│  Birds (2021) blijft een Ultima Vez-productie; Leon neemt sinds    │
│  2023 de tour-directie. De voorstelling toerde onder die           │
│  constellatie naar De Munt, STUK Leuven, tanzhaus nrw en het       │
│  Festival de Marseille.                                            │
│                                                                    │
│  INVITED (2018) is een Ultima Vez-voorstelling met dramaturgie van │
│  Kristin Rogghe — geselecteerd door het TheaterFestival.           │
│                                                                    │
│  Tornar (2015) was de eerste grote participatieve voorstelling     │
│  binnen Ultima Vez en de directe voorloper van INVITED en Birds.   │
├────────────────────────────────────────────────────────────────────┤
│  Erkenning                                                         │ §5 ERKENNING
│                                                                    │   (intro paragraph
│  Leon is jong; het werk dat eraan voorafging werd door vakjuries   │    + small list of
│  opgepikt. De selecties hieronder zijn voor Ultima Vez-producties  │    selections —
│  uit Seppe Baeyens' periode binnen die structuur — geen prijzen,   │    no superlatives)
│  een uitnodiging van vakgenoten om het werk te laten zien.         │
│                                                                    │
│  2019  INVITED — selectie het TheaterFestival                      │
│  [meer selecties, te bevestigen door Sam/Kristin — strawman gap #2]│
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │ §6 PHOTO (optional)
│  │           single editorial photo · contained width           │  │   (SP-13 variant B)
│  └──────────────────────────────────────────────────────────────┘  │   collapses if
│  © Photographer · Atelier Quartier, Molenbeek, 2017                │   no asset
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                                  [funder wall here]│   (default — wall
└────────────────────────────────────────────────────────────────────┘   not suppressed)
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ OVER LEON                   │
│                             │ §1 SUBPAGE TOP
│ Historiek                   │
│                             │
│ [lede wraps to ~4 lines]    │
├─────────────────────────────┤
│ Waar Leon vandaan komt      │ §2 LINEAGE
│ [2 alineas, 1-col, prose-   │
│  width op smal scherm]      │
├─────────────────────────────┤
│ Tijdlijn                    │ §3 TIJDLIJN
│                             │
│ 2010  Seppe Baeyens start…  │   (year + text
│ 2015  Tornar (Ultima Vez)…  │    stays in one
│ 2017  Atelier Quartier…     │    visual row;
│ 2018  INVITED…              │    wraps under
│ 2021  Leon vzw opgericht…   │    year if too
│ 2023  Tour-directie Birds…  │    long)
│ 2024  Mariage première…     │
│ 2025  Werkgever sinds 1 jan │
│ 2026  Mariage in Luik…      │
│ 2027  Kosmos co-productie…  │
├─────────────────────────────┤
│ Birds, Tornar, INVITED      │ §4 AFBAKENING
│ — werk uit de Ultima Vez-   │
│ periode                     │
│                             │
│ [intro alinea]              │
│ [Birds alinea]              │
│ [INVITED alinea]            │
│ [Tornar alinea]             │
├─────────────────────────────┤
│ Erkenning                   │ §5 ERKENNING
│ [intro alinea — geen        │
│  prijzen, vakjurys]         │
│                             │
│ 2019  INVITED — selectie    │
│       het TheaterFestival   │
│ [meer, te bevestigen]       │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │ §6 PHOTO (optional)
│ │  editorial photo        │ │   (collapses if
│ └─────────────────────────┘ │    no asset)
│ © Photographer · context    │
├─────────────────────────────┤
│ © Leon vzw · Brussel        │ SP-02 footer
│ Contact · Over Leon · NL·…  │   (stacks)
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- §1 SP-04 header already mobile-safe (no wide elements).
- §2 lineage prose flows naturally in `.container-text` — no layout switch needed.
- §3 tijdlijn uses a plain `<ul>`; year stays as inline `.meta`-styled span ahead of
  the body text. On narrow screens the body wraps under the year — readable.
- §4 + §5 are prose blocks in `.container-text` — same shape across viewports.
- §6 photo: full-width within `.container-text` on all viewports (variant B).

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Waar komt Leon vandaan en hoe lang is dit al bezig?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Eyebrow:** `OVER LEON` → links to `/over-leon` (parent index, per SP-04 spec).
- **h1:** `Historiek` (short, the page name; no marketing-headline).
- **Lede:** 2 zinnen — names the "16 jaar / 5 jaar vzw" honestly. Sets P2 + P5 expectation.
  Strawman now in the rendered view.
- **BG-2:** **No hero CTA.** Page is institutional-read, not a conversion surface.

### §2 — Waar Leon vandaan komt (lineage)

- **User question:** *"Wat is het verschil tussen 'Leon' en 'Seppe Baeyens binnen Ultima Vez'?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP. Two short paragraphs.
- **Composition:** §1 paragraph names Seppe-bij-Ultima-Vez sinds 2010 → Atelier Quartier
  2017 (Molenbeek) → blueprint voor Atelier Leon. §2 paragraph names Leon vzw 2021 →
  Leon Gyselinck namesake → Mariage 2024 als eerste Leon-eigen productie → werkgever
  sinds 2025.
- **Tone:** institutional dial, feitelijk, concrete jaartallen + plaatsen.
- **Anti-pattern check:** geen *"Leon gelooft in…"*, geen *"vernieuwend"* / *"uniek"*.

### §3 — Tijdlijn

- **User question:** *"Wat is er wanneer gebeurd?"*
- **Pattern:** plain `<ul>` (chronological list); each `<li>` = year + body text in one row.
  No SVG timeline, no animated scroll-snap (BG-4 + Dn-20 motion-restraint guard).
- **Composition:** ~10 rows from 2010 → 2027. One moment per row. Year in `.meta`-style
  inline label (visually quieter), body text in default body weight.
- **Data shape:** static array in Blade for v0.1 — promotes to a Milestone model only if
  Historiek becomes admin-editable (not v1; deferred).
- **States:** Default only. (Overflow handled by row-wrap — body wraps under year on narrow.)

### §4 — Birds, Tornar, INVITED — werk uit de Ultima Vez-periode (afbakening)

- **User question:** *"Hoe zit het precies met Birds en die andere voorstellingen — zijn dat Leon-producties?"*
- **Pattern:** plain `.section` + `.container-text`. Four short paragraphs: intro +
  Birds + INVITED + Tornar (newest-first within Ultima-Vez productions).
- **Composition:** intro paragraph names the *afbakening* explicitly ("ze staan hier
  omdat ze deel uitmaken van het traject waar Leon uit voortkomt — niet omdat het
  Leon-producties zijn"). Each work paragraph: jaar + producent-status + Leon's
  betrokkenheid.
- **Birds specific:** Ultima Vez productie · Leon tour-directie sinds 2023 · namedrop
  van de toer-locaties (De Munt · STUK · tanzhaus nrw · Festival de Marseille — per
  [discovery/21-organisation](../../discovery/21-organisation.md)).
- **INVITED specific:** Ultima Vez productie · 2018 · dramaturgie Kristin Rogghe (de
  doorlopende personele lijn naar Leon).
- **Tornar specific:** Ultima Vez productie · 2015 · vroegste participatieve voorganger.
- **Anti-claim guard:** **niet** "Leon's iconische werken"; **wel** "het werk dat
  eraan voorafging".

### §5 — Erkenning

- **User question:** *"Heeft dit werk al erkenning gekregen?"*
- **Pattern:** plain `.section` + `.container-text`. Intro paragraph + small list of
  selections.
- **Composition:** intro paragraph honestly frames the recognition as **juried
  selection** for **werk uit de Ultima Vez-periode** (Mariage heeft geen gepubliceerde
  kritiek). Names *vakjuries* as the source — toon: toonbaar, niet prijzend
  ([TOV §Toonbaar in plaats van prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend)).
- **List:** `2019  INVITED — selectie het TheaterFestival` (verbatim per
  [Strategy VP P5 RTB](../../strategy/40-value-proposition.md#p5--pers--breed-publiek--serves-g3)).
  Extra rijen na team-bevestiging (gap #2).
- **Banned wording:** *"award-winning"*, *"bekroond"*, *"vernieuwend"*, *"kritisch
  toegejuicht"*, implied *Mariage* critical acclaim (per [Dn-16](../01-concerns.md) +
  [TOV verboden lijst](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy)).

### §6 — Editorial photo (optional, SP-13 variant B)

- **User question:** *"Hoe zag dat eruit?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant B (contained,
  `.container-text` width).
- **State note:** **section collapses entirely** if no asset selected (SP-13 contract).
  v0.1 ships without — code includes a commented include block ready to swap in.
- **Asset hint** (gap #1): Atelier Quartier (Molenbeek 2017) OR vroeg-*Birds*-toer-
  beeld OR een Mariage-première-foto (Brussel 2024). Surface plane decides per Boris
  Charmatz photo-discipline benchmark ([Dn-20](../01-concerns.md)).

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · No-eyebrow fallback (not used here) |
| §2 lineage | Default only |
| §3 tijdlijn | Default · Overflow (long body text wraps under year on mobile) |
| §4 afbakening | Default only |
| §5 erkenning | Default · **Selection list empty beyond seed** → only the intro renders + seed row (P5 RTB confirmed) |
| §6 photo | Default · **Missing-asset → section collapses entirely** (SP-13 contract) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · No data-fetch — fully static |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-13 Photo block (variant B contained) | 🟠 | 🟠 (variant B already documented; this is first use) |

**No new SP needed.** Tijdlijn (§3) is intentionally rendered as a plain `<ul>` to
avoid promoting a one-off pattern; if a second page (e.g. Team biographies) ever
wants a near-identical year-prefixed list, lift to SP-14 at that point.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Year-by-year lineage (Ultima Vez → Leon) | §3 this page (Tijdlijn) | Home §1 jury band carries the single "sinds 2010" anchor; Impact P-15 "In cijfers" auto-computes years active |
| The "16 jaar / 5 jaar vzw" framing | §1 + §2 this page | TOV references it as a Leon-stem voorbeeld; do not restate elsewhere |
| Birds / Tornar / INVITED as **Ultima Vez productions** | §4 this page (afbakening) | Each may be named in `Atelier Leon` (P-03) lineage line or `Team` (P-16) bio; never as Leon-eigen werk |
| Birds tour-directie sinds 2023 | §4 this page · §3 tijdlijn | OK to reference factually on Team / Mariage pages; do not claim Birds as Leon-production |
| Juried selection list (TheaterFestival e.a.) | §5 this page | Strategy VP P5 RTB cites it; do not duplicate as a "Pers" or "Awards" surface (Dn-16 Won't-Have v1) |
| Funder/partner present-day list | SP-09 wall (footer, site-wide) | Historiek does **not** repeat partner names — past vs. present split intentional |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary — page is read-only by design (BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 5–7)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (4 listed; no new SP needed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Brief is gate-ready for review → 🟡 reviewed → 🟢 final.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §6 editorial photo choice — Atelier Quartier 2017 OR *Birds* toer OR Mariage 2024 OR drop §6 | `[asset]` | Surface plane | §6 visual final |
| 2 | §5 juried-selection lijst — extra selecties naast INVITED-2019? Bevestigen + jaartal/jury-naam per selectie | `[content]` | Sam / Kristin | §5 → final |
| 3 | §2 + §3 jaartallen verifiëren — *"Seppe sinds 2010 bij Ultima Vez"* + *"Atelier Quartier januari 2017"* + *"Birds tour-directie sinds 2023"* | `[content]` | Sam / Kristin | §2 + §3 → final |
| 4 | §4 *Birds* toer-locaties — `De Munt · STUK · tanzhaus nrw · Festival de Marseille` volledig? Iets vergeten / iets te veel? | `[content]` | Sam / Kristin | §4 → final |
| 5 | *Kosmos 2027* — naam openbaar maken op deze pagina? (zit in [30-structure](../30-structure.md) als forward pipeline maar nog geen public-facing project-pagina) | `[client]` | Sam | §3 tijdlijn 2027-row · §2 lineage closing zin |
| 6 | Leon Gyselinck (1923–2024) namesake — willen Sam/Kristin meer context op deze pagina, of blijft het bij één bijzin in §2? | `[client]` | Sam / Kristin | §2 paragraph 2 — final wording |
| 7 | "Atelier Quartier" als publieksterm — Nederlandse lezers herkennen dit niet altijd. Behouden (correcte historische naam) of toelichten als "het wekelijkse open atelier bij Ultima Vez in Molenbeek"? Strawman doet het laatste. | `[content]` | Kristin | §2 + §3 phrasing |

## Confidence rationale

- **Was 3 / 5** ([40-skeleton P-17 row](../40-skeleton.md): all three gaps `[content]`-
  tagged — lineage, Birds-afbakening, recognition framing).
- **Now 3 / 5 — held**, but with structural decisions locked. Playbook level-3:
  *"could write strawman; would need team review for accuracy."* Strawman is writable
  end-to-end from Discovery [21-organisation](../../discovery/21-organisation.md)
  (KBO + lineage timeline) + Strategy [VP P5 RTB](../../strategy/40-value-proposition.md#p5--pers--breed-publiek--serves-g3)
  + TOV ("16 jaar / 5 jaar vzw"). Remaining gaps are team verification (jaartallen,
  juried-selection lijst), not structural ambiguity.
- **→ 4 / 5** when gaps #2 + #3 close (Sam/Kristin confirm jaartallen + erkennings-
  lijst).
- **→ 5 / 5** when all 7 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md) (Dn-16 closure → recognition folds into Historiek)
- Strategy: [VP P5 RTB](../../strategy/40-value-proposition.md#p5--pers--breed-publiek--serves-g3) (juried selection, never "award-winning")
- Discovery: [21-organisation](../../discovery/21-organisation.md) (KBO timeline · lineage Ultima Vez → Leon · Atelier Quartier 2017 · Birds tour-directie 2023)
- Structure: [30-structure §Over Leon → Historiek](../30-structure.md) (lineage · Birds · recognition framing)
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact) (institutional dial)

- Code stub: [`resources/views/over-leon/historiek.blade.php`](../../../../resources/views/over-leon/historiek.blade.php)
