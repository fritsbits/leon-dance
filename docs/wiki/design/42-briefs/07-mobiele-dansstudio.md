---
title: P-07 Mobiele dansstudio — Skeleton brief
tags: [design, skeleton, brief, mobiele-dansstudio, page-level]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; strategy/40-value-proposition (P3 profile); strategy/20-personas (P3); discovery/12-client-kickoff-2026-05-19; raw/research/desk-research-strategy-enrichment-2026-05-19; raw/research/client-meeting-2026-05-19; existing dansateliers/mobiele-dansstudio.blade.php; best-guess autonomous pass 2026-05-28; sibling 42-briefs/01-home + 05-mariage]
phase: design
page-id: P-07
slug: /dansateliers-performances/mobiele-dansstudio
type: Marketing 5–7
updated: 2026-05-28
---

# P-07 Mobiele dansstudio — Skeleton brief

> **Status:** Brief 🟠 first draft (validation 8/8 PASS) · Wireframe 🟠 first draft
> (desktop + mobile) · Content 🟠 first draft (sibling [07-mobiele-dansstudio-content](07-mobiele-dansstudio-content.md)) ·
> Code 🟠 first draft (strawman rendered) · Approved —
> **Confidence:** **3 / 5** (held at 3; section lock-in + pattern reuse · gaps remain
> content/asset/client per registry).
> **Section budget:** **6 sections + 1 CTA hook** (Marketing tier 5–7 ceiling — staying
> within bounds; §7 is the hook, not a separate seventh content section).
> **Authored autonomously per user instruction "best-guess autonomous; no questions";
> all open calls documented inline as BG decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant B (text header + SP-13 photo as next sibling) — same as P-01 Home + P-05 Mariage; site-wide consistency. | Yes — could go variant A if no usable studio-on-location photo exists for v1 |
| BG-2 | **CTAs in hero** | **None.** Page is canonical info-page (P3 programmator + P4 partner read it to *decide*); CTA lands in §7 "Uitnodigen". Hybride dial leunend institutional per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen) — "geen verkoop-toon". | Yes — could add a secondary "Bekijk de technische fiche" anchor-link if §4 becomes too far below the fold |
| BG-3 | **Technische fiche shape** | `<dl>` definition list (term + description × N rijen) — most semantic, most scannable for P3 who scans for *afmetingen / stroom / op-bouw / vloer*. Strawman items per BG-4. | Yes — could become a 2-col table; could become a downloadable PDF link in v0.2 |
| BG-4 | **Technische fiche strawman items** | 6 items: *Afmetingen · Op- en afbouw · Stroom · Vloer & ondergrond · Wat we meebrengen · Wat we vragen van de locatie*. Generic plausible defaults; team confirms cijfers. | Yes — items will move; the *shape* (6 ± 2 rows, term+desc) holds |
| BG-5 | **Zomerformule** | Own §5 with its own h2 ("Zomerformule"). Defensible because the desk-research explicitly flags the summer public-space activation (pannekoeken, 2 gasbranders) as a distinctive variant — not just "a booking, but in summer". One paragraph + a tight bullet of what makes het zomerseizoen anders. | Yes — could collapse into §3 if team says it's not a real product distinction |
| BG-6 | **Track record format** | Text-list ("Waar de studio al stond") — 5–7 strawman entries: `Plaats · context · jaar`. No SP-05 cards (no per-stop detail page exists; cards would over-promise depth). | Yes — could become a single prose paragraph; could become a small map (Leaflet) in v0.2 if data justifies |
| BG-7 | **§7 CTA target** | `Plan een uitnodiging` → `/samenwerken/uitnodigen` (P-10 — bookable intake for programmers/partners). Verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas). | Yes — copy refinement on review; could swap verb to "Boek" or "Vraag aan" |
| BG-8 | **No inline SP-09 partner wall** on this page | Site-wide footer wall (SP-09 variant A) carries the partner picture. This page is about the *thing* (a bookable studio), not the org's relationships. Inline SP-09 variant C is for project pages (Mariage), where named co-producers per editie are load-bearing — not the case here. | Yes — could add a one-line "Eerder uitgenodigd door …" with 3–4 venue logos if track-record §6 needs proof-density |

If any of BG-1 … BG-8 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Bookable thing, not a participation funnel.** P3 programmator and P4 partner land
   here to *decide whether to invite the studio*. Page reads as canonical info (specs,
   summer offer, track record), not as a campaign for newcomers. The intake form lives at
   [P-10 Mobiele dansstudio uitnodigen](../../../../resources/views/samenwerken/uitnodigen.blade.php)
   (`/samenwerken/uitnodigen`) — this page hooks there.
2. **One canonical home for the studio.** All studio-specific facts (what it is, fiche,
   zomerformule, track record) live on this page. P-10 carries booking framing + intake;
   when P-10 is drafted it should **link here** rather than duplicate.
3. **Hybride dial, leunend institutional.** Per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen):
   "Beheerd, rustig, **geen verkoop-toon**. Voor het programmator-pad: feiten, dossier,
   contact. Geen marketing." Plain language, concrete numbers, no superlatives.
4. **No SP-05 cards on this page.** No per-location sub-pages exist; surfacing
   track-record as cards would imply depth that isn't there. Plain list + one good photo
   does the work.
5. **Closes [40-skeleton P-07 gaps](../40-skeleton.md):** `[content]` technische fiche
   (strawman per BG-4) · `[content]` zomerformule + track record (strawman per BG-5/6) ·
   `[asset]` foto van de studio op locatie (still open — section collapses).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  DANSATELIERS & PERFORMANCES                                       │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant B)
│  Mobiele dansstudio                                                │
│                                                                    │
│  Een verplaatsbare dansruimte die we naar je plek brengen — een    │
│  plein, een school, een festival, een binnenkoer. Te boeken voor   │
│  een dag, een week of een hele zomer.                              │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │           single editorial photo · full-width                │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │  (collapses if
│  © Photographer · de studio op locatie, [plaats], [jaar]           │   missing-asset)
├────────────────────────────────────────────────────────────────────┤
│  Wat het is                                                        │ §3 FORMAT-DOC
│                                                                    │
│  [2 strawman alineas — wat de studio is, hoe ze werkt, wat een     │
│   dag met de studio er ongeveer uitziet]                           │
├────────────────────────────────────────────────────────────────────┤
│  Technische fiche                                                  │ §4 TECH FICHE
│                                                                    │   (HTML <dl>;
│  Afmetingen          [strawman: ~6 × 6 m vloeroppervlak,           │    6 term/desc
│                       3 m hoog · op een vlakke ondergrond]         │    rijen — see
│                                                                    │    BG-3/4)
│  Op- en afbouw       [strawman: ±2 uur opzetten, ±1 uur afbouwen,  │
│                       door 2 mensen van Leon]                      │
│                                                                    │
│  Stroom              [strawman: 1 × 230 V stopcontact volstaat]    │
│                                                                    │
│  Vloer & ondergrond  [strawman: vlakke, droge ondergrond — beton,  │
│                       asfalt, hout, vaste grond]                   │
│                                                                    │
│  Wat we meebrengen   [strawman: dansvloer · geluid · 2 begeleiders]│
│                                                                    │
│  Wat we vragen       [strawman: water · schaduw of overkapping bij │
│  van de locatie       hitte · een kleedruimte in de buurt]         │
├────────────────────────────────────────────────────────────────────┤
│  Zomerformule                                                      │ §5 ZOMERFORMULE
│                                                                    │
│  [1 alinea: in de zomer trekt Leon met de studio naar pleinen en   │
│   parken, met pannenkoeken en een open uitnodiging om mee te       │
│   dansen — gratis voor het publiek. Aan te vragen door buurthuizen,│
│   stadsdiensten, festivals.]                                       │
├────────────────────────────────────────────────────────────────────┤
│  Waar de studio al stond                                           │ §6 TRACK RECORD
│                                                                    │
│  • [Plaats · context] · [jaar]                                     │   (text-list ·
│  • [Plaats · context] · [jaar]                                     │    5–7 strawman
│  • [Plaats · context] · [jaar]                                     │    entries)
│  • [Plaats · context] · [jaar]                                     │
│  • [Plaats · context] · [jaar]                                     │
├────────────────────────────────────────────────────────────────────┤
│  Mobiele dansstudio uitnodigen?                                    │ §7 HOOK
│                                                                    │   (samenwerken
│  Programmer je een plein, een festival of een buurtmoment? Plan    │    deeplink)
│  een gesprek — dan kijken we samen wat past.                       │
│                                                                    │
│  [ Plan een uitnodiging ]                                          │ CTA primary
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                  [funder wall renders here via     │   (default,
│                                   default — NOT suppressed on P-07]│    NOT on home
│                                                                    │    only)
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ DANSATELIERS & PERFORMANCES │ §1 SUBPAGE TOP
│                             │
│ Mobiele dansstudio          │
│                             │
│ [lede wraps to 3–4 lines]   │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │   studio-on-loc photo   │ │ §2 PHOTO (collapses)
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ Wat het is                  │ §3 FORMAT-DOC
│ [2 alineas in 1-col]        │
├─────────────────────────────┤
│ Technische fiche            │ §4 TECH FICHE
│                             │   (dl reflows:
│ Afmetingen                  │    term boven,
│ [waarde — wraps onder term] │    desc onder)
│                             │
│ Op- en afbouw               │
│ [waarde]                    │
│                             │
│ Stroom                      │
│ [waarde]                    │
│                             │
│ … (6 rijen totaal)          │
├─────────────────────────────┤
│ Zomerformule                │ §5 ZOMERFORMULE
│ [1 alinea]                  │
├─────────────────────────────┤
│ Waar de studio al stond     │ §6 TRACK RECORD
│ • Plaats · context · jaar   │
│ • Plaats · context · jaar   │
│ • … (5–7 entries)           │
├─────────────────────────────┤
│ Mobiele dansstudio          │ §7 HOOK
│ uitnodigen?                 │
│                             │
│ [korte zin]                 │
│                             │
│ ┌─────────────────────────┐ │
│ │ Plan een uitnodiging    │ │ CTA full-width
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ ⤓ SP-09 default funder      │ ← footer wall
│   wall (4 tiers) renders    │
│   here in footer            │
│                             │
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- §7 CTA full-width on mobile, intrinsic-width on desktop — `flex flex-wrap` (no
  layout switch).
- §4 `<dl>` reflows: desktop = 2-col grid (`dt` left, `dd` right) via
  `md:grid md:grid-cols-[12rem_1fr]`; mobile = stacked (term boven, desc onder).
- §6 list is 1-col stacked on both viewports — no need to reflow.
- §2 photo block uses SP-13 variant A — collapses cleanly if no asset arrives.
- No section disappears between viewports; no mobile-only or desktop-only content.

## Section specs

### §1 — Subpage top (SP-04 variant B)

- **User question:** *"Wat is de mobiele dansstudio en is dit relevant voor wat ik
  programmer / organiseer?"*
- **Pattern:** [SP-04 variant B](../41-patterns.md#sp-04--subpage-top) (text header + SP-13 photo as next sibling section).
- **Composition:** eyebrow · h1 · lede.
- **Eyebrow:** `DANSATELIERS & PERFORMANCES` → `/dansateliers-performances` (link to parent index, visually static `.meta`).
- **h1:** `Mobiele dansstudio` (3 words; short; safe overflow-wise).
- **Lede:** 2 sentences — *wat het is + wat een booking inhoudt qua tijdspanne*.
  Strawman: *"Een verplaatsbare dansruimte die we naar je plek brengen — een plein,
  een school, een festival, een binnenkoer. Te boeken voor een dag, een week of een
  hele zomer."*
- **BG-2:** **No hero CTA.** CTAs land in §7. Hybride-leunend-institutional dial =
  geen sales-blok bovenaan.

### §2 — Photo (SP-13)

- **User question:** *"Hoe ziet die studio eruit in het echt?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant A (full-width).
- **Composition:** single editorial photo, `.container-wide`, credit below.
- **Strawman caption template:** `© [Fotograaf] · de studio op locatie, [plaats], [jaar]`
- **Missing-asset state:** section collapses entirely (SP-13 contract; per Dn-20 guard —
  never an empty grey block). Status = section omitted at v0.1 since no asset has been
  chosen for the studio yet (gap #3).

### §3 — Wat het is (format-doc)

- **User question:** *"Wat ís het, concreet?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP.
- **Composition:** h2 + 2 paragraphs. Concrete, plain, geen abstracte claims.
- **Strawman opener:** *"De mobiele dansstudio is een dansvloer die op een fiets-aanhangwagen past. We rijden ze naar de plek waar je ze nodig hebt, bouwen ze op, en blijven om mee te dansen — of laten ze staan voor wie zelf wil bewegen."*
- **Strawman 2e alinea:** *"De studio werkt voor een schoolspeelplaats tijdens de pauze, voor een plein in de zomer, voor een festival, voor een open repetitie in de straat. Wat er gebeurt rond de studio — open atelier, korte voorstelling, gewoon dansen — kiezen we samen vooraf."*
- **Open content (gap #1):** team verifieert beschrijving + voeg eventueel een derde
  alinea toe over typische gebruikssituaties.

### §4 — Technische fiche (`<dl>`)

- **User question:** *"Past dit op mijn plek? Wat moet ik regelen?"*
- **Pattern:** plain `.section` + `.container-text` + HTML `<dl>` (6 term/description rijen).
- **Composition:** h2 + 6 `<dt>`/`<dd>` paren per BG-4. Desktop: 2-col grid (`md:grid-cols-[12rem_1fr]`). Mobile: stacked.
- **Strawman items (alle 6 placeholder voor team-bevestiging — gap #2):**
  | Term | Description |
  |---|---|
  | Afmetingen | ~6 × 6 m vloeroppervlak, 3 m hoog, op een vlakke ondergrond |
  | Op- en afbouw | ±2 uur opzetten, ±1 uur afbouwen, door 2 mensen van Leon |
  | Stroom | 1 × 230 V stopcontact volstaat |
  | Vloer & ondergrond | vlakke, droge ondergrond — beton, asfalt, hout, vaste grond |
  | Wat we meebrengen | dansvloer · geluid · 2 begeleiders |
  | Wat we vragen van de locatie | water · schaduw of overkapping bij hitte · een kleedruimte in de buurt |
- **Future:** downloadable PDF-fiche (v0.2 — flagged in [40-skeleton P-10 gaps](../40-skeleton.md): "technische fiche (gedeeld met P-07?)").

### §5 — Zomerformule

- **User question:** *"Doen jullie iets speciaals in de zomer?"*
- **Pattern:** plain `.section` + `.container-text`, h2 + 1 alinea + (optioneel) korte bullet.
- **Composition:** h2 (`Zomerformule`) + 1 alinea over de publieke-ruimte-activatie.
- **Strawman:** *"In de zomer trekt Leon met de studio naar pleinen en parken. We bakken pannenkoeken op twee gasbranders, zetten de muziek aan en nodigen iedereen die langskomt uit om mee te dansen. Gratis voor het publiek. Aan te vragen door buurthuizen, stadsdiensten en festivals."*
- **Rationale:** desk-research [research/desk-research-strategy-enrichment-2026-05-19](../../../raw/research/desk-research-strategy-enrichment-2026-05-19.md)
  flags this expliciet: *"summer public-space activations (2 gas burners, pancakes)"*.
  Te concreet om weg te laten; te distinctief om in §3 te begraven.

### §6 — Waar de studio al stond (track record)

- **User question:** *"Wie heeft dit al gedaan? Werkt dit echt?"*
- **Pattern:** plain `.section` + `.container-text`, h2 + `<ul>` van plaats/context/jaar regels.
- **Composition:** h2 (`Waar de studio al stond`) + 5–7 strawman entries.
- **Strawman entries (allemaal placeholder — gap #4):**
  - `Pianofabriek · binnenkoer · 2024`
  - `MolenFest · plein voor de Maison des Cultures · 2024`
  - `Park Rouge · zomeractivatie · 2025`
  - `Cardijnschool · speelplaats · 2025`
  - `Open Vld zomerfestival Anderlecht · 2025`
- **Discipline:** geen SP-05 cards (per BG-6). Geen "lees meer"-link per regel — er bestaan
  geen per-locatie pagina's en dat zou depth claimen die er niet is.
- **Track-record-als-proof:** doet hetzelfde werk als de §6 partner-wand op de home —
  laat zien, claimt niet.

### §7 — Mobiele dansstudio uitnodigen? (Samenwerken hook)

- **User question:** *"Hoe nodig ik dit uit?"* (P3 programmator / P4 partner)
- **Pattern:** plain `.section` (h2 + 1 zin + CTA). No SP yet (could lift to SP-15 if reused).
- **Hook copy** (strawman): *"Programmer je een plein, een festival of een buurtmoment? Plan een gesprek — dan kijken we samen wat past."*
- **CTA primary:** `Plan een uitnodiging` → `/samenwerken/uitnodigen` (P-10 — bookable intake page being drafted in parallel). Verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas).
- **No secondary CTA** — single hook keeps de §7 read clean. Page is informatief; één
  duidelijke volgende stap is voldoende.
- **No inline SP-09** per BG-8 — site-wide footer carries de partner-wand.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL h1 — *Mobiele dansstudio* is short, safe) |
| §2 SP-13 photo | Default · **Missing-asset → section collapses** (current state at v0.1) |
| §3 format-doc | Default only |
| §4 Technische fiche | Default · Long term/desc wraps (term may need 2 lines on mobile — accepted) · Per-row optional state if future fields zijn nog niet beslist (omit row, geen empty dt/dd) |
| §5 Zomerformule | Default only (jaar-onafhankelijk — geen seizoens-conditionele UI in v1) |
| §6 Track record | Default · Empty (no entries — page should still render, list omitted; theoretical in v0.1 since strawman populates) · Overflow (long plaats/context — wraps; geen truncation) |
| §7 Hook | Default only |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · No-photo → page is gewoon korter, geen visueel gat |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant B) | 🟠 | 🟠 (unchanged) |
| SP-13 Photo block | 🟠 | 🟠 (unchanged) |

**No new patterns introduced by P-07.** All structural needs are met by §3/§4/§5/§6/§7
as plain prose + HTML `<dl>` + `<ul>` + button — bespoke to this page's content shape.
If a second "technische fiche"-shaped page emerges (likely P-10 Mobiele dansstudio
uitnodigen sharing the same fiche), lift `<dl>` to **SP-14 — Tech-fiche / spec-list**;
not justified by a single occurrence.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| What the studio is + 1-line summary | §3 this page | Home P-01 §3 carries only de 1-line card |
| Technische fiche details | §4 this page | P-10 Mobiele dansstudio uitnodigen — **link here, do not duplicate** (open question — see [40-skeleton P-10 gaps](../40-skeleton.md): "technische fiche (gedeeld met P-07?)" — answer: shared, this page is canonical) |
| Zomerformule | §5 this page | OK to mirror as 1-line on P-10 if booking-shape needs it |
| Track record | §6 this page | OK to mirror selectief op /agenda als de events daar tags krijgen |
| Booking intake (form/contact) | P-10 `/samenwerken/uitnodigen` | This page hooks via §7; does NOT carry intake itself |
| Per-event "mobiele studio was here" dates | `/agenda` (P-12) als events getagd worden | Track-record §6 is samenvatting; agenda is bron |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (§7 — only CTA on the page; BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 + 1 hook ≤ 7 ceiling)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (4 listed; no new patterns)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Brief is gate-ready for review → 🟡 reviewed → 🟢 final.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §3 *Wat het is* — team verifies 2 strawman alineas + voeg eventueel 3e alinea over typische gebruikssituaties | `[content]` | Sam / Kristin | Content stage |
| 2 | §4 Technische fiche — alle 6 cijfers/regels bevestigen (afmetingen, stroom, op-/afbouwtijden, vloer, wat-mee, wat-vraag). Brochure die naar partners gaat = bron. | `[content]` | Sam / Kristin (bestaande brochure-by-email) | §4 → final |
| 3 | §2 Foto van de studio op locatie | `[asset]` | Frederik + Surface | Content stage · SP-13 final |
| 4 | §6 Track record — 5–7 echte plekken + jaartallen + (optioneel) korte context. Brochure + Kristin's archief. | `[content]` | Sam / Kristin | §6 → final |
| 5 | §5 Zomerformule — bevestig dat dit een echte aparte formule is en geen "gewoon een booking, maar in juli". Strawman aanname: ja. | `[client]` | Sam | §5 framing |
| 6 | §7 CTA target — `/samenwerken/uitnodigen` (P-10) zoals nu, of dedicated `/contact` route? Match met P-05 §6 BG-7. | `[client]` | Sam | §7 CTA href |
| 7 | §4 Downloadable PDF-fiche — wel/niet in v1? (Brief stelt: v0.2.) | `[client]` | Sam | §4 v0.2 feature |
| 8 | Cross-page fiche-deling met P-10 — bevestigen dat P-10 *naar hier linkt* in plaats van de fiche te dupliceren | `[strategy]` | Frederik (bij P-10 brief) | P-10 brief |

## Confidence rationale

- **Was 3 / 5** ([40-skeleton P-07](../40-skeleton.md): "could write strawman; would need team review for accuracy").
- **Now 3 / 5** — held. Section list, order, patterns, CTAs all decided (BG-1 … BG-8);
  remaining gaps are content/asset/client-verify, not structural. Confidence does not
  rise to 4 until gap #2 (fiche-cijfers) and gap #4 (track-record echte plaatsen) sluiten
  — die zijn beide *facts the team holds in the existing brochure*, dus relatief
  goedkoop te closen.
- **→ 4 / 5** when gaps #1, #2, #4 close (team verifies fiche + provides real track-record).
- **→ 5 / 5** when all 8 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure](../30-structure.md) — Mobiele dansstudio = Page entity ·
  *what it is · technische fiche · zomerformule · track record · "uitnodigen" CTA* (canonical content row)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen) — hybride dial, leunend institutional, geen verkoop-toon
- Glossary: [`mobiele dansstudio`](../../glossary.md#de-shared-vocabulary-use-these--code-admin-site) — public name; *"de fiets"* informal in-house, not a label
- Strategy: [P3 profile](../../strategy/40-value-proposition.md) (programmator · institutional register · low-risk to programme)
- Raw evidence: [client-meeting-2026-05-19](../../../raw/research/client-meeting-2026-05-19.md):619-639 · [desk-research-strategy-enrichment](../../../raw/research/desk-research-strategy-enrichment-2026-05-19.md) (bike + zomerformule)
- Content: [07-mobiele-dansstudio-content](07-mobiele-dansstudio-content.md)
- Code stub: [`dansateliers/mobiele-dansstudio.blade.php`](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php)
- Sibling intake page (in parallel): P-10 Mobiele dansstudio uitnodigen — should link here for fiche, not duplicate (gap #8)
