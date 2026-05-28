---
title: P-14 Missie & visie — Skeleton brief
tags: [design, skeleton, brief, missie-visie, over-leon, page-level]
sources: [40-skeleton; 41-patterns; 30-structure; strategy/01-concerns (S-03); identity/10-tone-of-voice; glossary; raw/current-site/pages/missie-visie-nl.md; raw/current-site/pages/apartheid-free-zone.md; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-14
slug: /over-leon/missie-visie
type: Marketing 5–7
updated: 2026-05-28
---

# P-14 Missie & visie — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft (sibling [14-missie-visie-content](14-missie-visie-content.md)) · Code 🟠
> first draft (strawman rendered) · Approved —
> **Confidence:** **3 / 5** (was 2; raised by structural lock-in + TOV-discipline applied
> to a page the current site ships in *subsidiedossier-stijl*).
> **Section budget:** **5 sections** (Marketing tier 5–7 floor — staying minimal:
> *"missie/visie kort en concreet"* per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)).
> **Authored autonomously per user instruction "best-guess autonomous; no user questions";
> all open calls documented inline as BG-N decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant A (eyebrow + h1 + lede). No photo on this page — the page is propositional, not photographic; *Impact* and *Historiek* carry the photographic weight in this Over Leon cluster. | Yes — could add SP-13 sibling in v0.2 if a great photo lands |
| BG-2 | **Missie + Visie as separate beats, both short** | Two ≤3-sentence blocks under one h2 *"Missie & visie"*, missie first (one sentence per current site), visie second (compressed from 4 paragraphs → 2). Rejects current-site's 4-paragraph wall + bullet-list of 6 values. | Yes — could merge to one paragraph if even shorter reads better |
| BG-3 | **Drop the 6-value bullet list** (*Horizontaal · Vrij van oordeel · Gastvrij · Kwetsbaar · Experimenteel · Speels*) | The values are *toonbaar*, not declaratief — they belong in *Impact* (deelnemer-quotes show *kwetsbaar*; partner-stem shows *gastvrij*). Listing them here = subsidiedossiertaal per [TOV verboden](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy). | Yes — could re-introduce as a "Waarden" sub-section if client insists. Flag for review. |
| BG-4 | **Drop the 4-method block** (*Uitnodigen · Mixen · Omkeren · Bevestigen*) | Method = Janssens & Steyaert framework, **canonical home is [P-15 Impact](../40-skeleton.md)** (per [30-structure Over Leon table](../30-structure.md)). Mentioning here = duplication. Single-line cross-link instead. | Yes — could keep a 1-line nod here if Impact takes too long to land |
| BG-5 | **"Hoe we werken" as §3** | One paragraph naming the participative premise + the *evenwaardig* word (the client's own word per [discovery/12-client-kickoff](../../discovery/12-client-kickoff-2026-05-19.md)) — the everyday concrete shape of how Leon works, not the value-list version. | Yes — could fold into §1 Visie if the page reads too thin |
| BG-6 | **Apartheid Free Zones as §4** — own section, before the closing quote | Per [30-structure](../30-structure.md) + [glossary](../../glossary.md): AFZ lives here. Section gives it visible status (not buried as a footnote), but short: 2 paragraphs + link to bdsmovement.net. Leon-as-AFZ-member framing, lifted + tightened from current `/apartheid-free-zone` page. | Yes — could become a sub-block of §3 if AFZ should read as part of *how we work* rather than a standalone stance |
| BG-7 | **Quote as §5** | SP-12 variant A (inline frame). Re-uses the Hadja quote from current `/missie-visie-nl` ("Ik kan er mezelf zijn…"). **NOTE:** same quote currently planned for [P-05 Mariage §5](05-mariage.md). Decision: keep here too — different framing (Mariage = trajectory proof; Missie & visie = visie made flesh). If client wants exclusivity, this page gets a partner-coordinator (P4) voice instead. | Yes — easy swap |
| BG-8 | **No page-bottom CTA** | Per [TOV §Afsluiters](../../identity/10-tone-of-voice.md#afsluiters): *"een rustige laatste regel — geen verkoopzin"*. The quote IS the closing register. Contact lives in footer + dedicated /contact page. | Yes — could add a quiet "→ Over Leon" or "→ Contact" text-link if review requests it |

If any of BG-1 … BG-8 should flip, the brief re-rolls.

## Kern

1. **Toonbaar in plaats van prijzend** ([TOV §4](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend)).
   The current site's missie-visie page is the cleanest example in the corpus of what we're
   rebalancing **out of**: claims of *horizontaal · gastvrij · kwetsbaar · experimenteel*
   without the things that prove them. The redesign keeps the missie + visie statements
   (short, concrete) and **moves the proof to [P-15 Impact](../40-skeleton.md) and the
   project pages**, where it belongs.
2. **De-emphasised** (per [30-structure Over Leon table](../30-structure.md)):
   *"the why · de-emphasised · rebalanced out of subsidiedossiertaal"*. Five sections —
   the minimum for Marketing tier. No overflow.
3. **Institutional dial mag hier hoger** (per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact))
   — but **niet** subsidiedossier-stijl. Rustig, niet apologetisch, niet schreeuwerig.
4. **Apartheid Free Zones is visible, not buried** (per [Strategy S-03](../../strategy/01-concerns.md)).
   Own h2, own section, short — but on the page, not as a footnote. Leon-as-AFZ-member
   framing (the link to bdsmovement.net carries the global context); the page itself
   says *what Leon will/will not do*.
5. **One canonical home for AFZ** (anti-bloat). This page IS the AFZ home in the new site
   (the standalone `/apartheid-free-zone` URL is retired per [30-structure sitemap](../30-structure.md)).
   No other page repeats it; project pages and Over Leon → Missie & visie link here.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVER LEON                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  Missie & visie                                                    │
│                                                                    │
│  Wat Leon wil zijn, en waarom — in het kort.                       │
├────────────────────────────────────────────────────────────────────┤
│  Missie                                                            │ §2 MISSIE + VISIE
│                                                                    │
│  Via dans en muziek nodigt Leon mensen van alle leeftijden,        │
│  genders, lichamen en achtergronden uit om elkaar te ontmoeten     │
│  in een open, speelse en respectvolle gemeenschap.                 │
│                                                                    │
│  Visie                                                             │
│                                                                    │
│  Een mix van mensen is voor Leon geen doel op zich, maar de        │
│  voorwaarde voor het werk. We werken in de publieke ruimte —       │
│  daar waar mensen al zijn — en we draaien rollen om: wie meestal   │
│  kijkt, danst; wie meestal leidt, volgt.                           │
│                                                                    │
│  Zo ontstaat ruimte voor iets nieuws — verrassing, vertrouwen,     │
│  vrijheid om zelf in te brengen.                                   │
├────────────────────────────────────────────────────────────────────┤
│  Hoe we werken                                                     │ §3 HOE WE WERKEN
│                                                                    │
│  Leon werkt evenwaardig: een deelnemer van 67 staat op gelijke     │
│  hoogte met een professionele danser. Geen niveaus, geen           │
│  audities. Een wekelijks atelier is gratis en zonder inschrijving; │
│  een grotere voorstelling bouw je samen op in tien weken           │
│  repetitie.                                                        │
│                                                                    │
│  → Hoe Leon werkt in praktijk en cijfers: Impact                   │ → P-15 link
├────────────────────────────────────────────────────────────────────┤
│  Apartheid Free Zone                                               │ §4 AFZ
│                                                                    │
│  Leon is sinds 2024 een Apartheid Free Zone. We werken bewust      │
│  niet samen met staten, partners of residenties die medeplichtig   │
│  zijn aan apartheidsregimes of mensenrechten-schendingen. We       │
│  herevalueren onze bestaande samenwerkingen volgens diezelfde      │
│  criteria. Het is een blijvende keuze, geen verklaring.            │
│                                                                    │
│  Apartheid Free Zone is een wereldwijd initiatief — meer op        │
│  bdsmovement.net.                                                  │ → external link
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │ §5 QUOTE
│  │  "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders   │  │   (SP-12 var. A)
│  │   nooit zou tegenkomen."                                     │  │
│  │                                                              │  │
│  │  — Hadja, 67 · deelnemer                                     │  │
│  │                                                              │  │
│  └──────────────────────────────────────────────────────────────┘  │
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│  [funder wall renders in footer — NOT suppressed on non-home]      │
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ OVER LEON                   │ §1 SUBPAGE TOP
│ Missie & visie              │
│ [lede wraps to 2 lines]     │
├─────────────────────────────┤
│ Missie                      │ §2
│ [missie zin, 3 regels]      │
│                             │
│ Visie                       │
│ [visie alinea 1, 4 regels]  │
│ [visie alinea 2, 2 regels]  │
├─────────────────────────────┤
│ Hoe we werken               │ §3
│ [alinea, 5 regels]          │
│ → Impact                    │
├─────────────────────────────┤
│ Apartheid Free Zone         │ §4
│ [alinea 1, 5 regels]        │
│ [alinea 2 + link]           │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │ "Ik kan er mezelf zijn…"│ │ §5 SP-12
│ │ — Hadja, 67 · deelnemer │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ ⤓ SP-09 default funder wall │ ← footer
│ © Leon vzw · Brussel        │
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Waar ben ik beland en wat staat hier?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Eyebrow:** `OVER LEON` → `/over-leon` (parent index link).
- **h1:** *Missie & visie* (lock).
- **Lede:** one short sentence. Per BG-1, no SP-13 sibling.

### §2 — Missie + Visie

- **User question:** *"Wat wil Leon zijn?"*
- **Pattern:** plain `.section` + `.container-text` (prose). Two h3 headings under one h2 wrapper.
- **Composition:** h2 *"Missie & visie"* (visually compact — both blocks live under it).
  - h3 *Missie* + one sentence (compressed from current-site, kept verbatim where possible).
  - h3 *Visie* + 2 short paragraphs (compressed from current-site's 4 → 2; TOV-rebalanced).
- **TOV discipline:** geen *duurzaam · laagdrempelig · inclusief · diversiteit · empoweren ·
  bruggen bouwen · verbinden*. *Mix* mag, want concreet ("alle leeftijden, genders,
  lichamen, achtergronden").

### §3 — Hoe we werken

- **User question:** *"Hoe doet Leon dit dan?"*
- **Pattern:** plain `.section` + `.container-text` (prose). One paragraph + text-link.
- **Composition:** ~4–6 sentences naming the participative premise + the *evenwaardig*
  word + the everyday concrete shape (atelier gratis · 10 weken repetitie).
- **Cross-link:** `→ Impact` text-link to `/over-leon/impact` — that page carries the
  method (Uitnodigen · Mixen · Omkeren · Bevestigen) + the proof.

### §4 — Apartheid Free Zone

- **User question:** *"Wat is dit en waarom staat het hier?"*
- **Pattern:** plain `.section` + `.container-text`. h2 + 2 paragraphs + external link.
- **Composition:**
  - Paragraph 1 (~4 sentences): *what Leon does as an AFZ* — concrete actions, not
    declarations. *"We werken bewust niet samen met … We herevalueren …"*
  - Paragraph 2 (~2 sentences): *what AFZ is* — global initiative, link to bdsmovement.net.
- **Tone:** rustig, feitelijk, "het is een blijvende keuze, geen verklaring" — refuses
  the moralising register. Per [Strategy S-03 / S-09](../../strategy/01-concerns.md): proof
  ladder placement, not a separate page.
- **External link:** `bdsmovement.net` (per current site). `rel="noopener"`.

### §5 — Quote (SP-12)

- **User question:** *"Hoe klinkt dit in de praktijk?"*
- **Pattern:** [SP-12 Quote / testimony](../41-patterns.md#sp-12--quote--testimony) variant A
  (inline frame, `--color-surface-muted` background, `.container-text` width).
- **Composition:** quote + attribution. Verbatim from current `/missie-visie-nl`.
- **Why close on a quote:** the page is *toonbaar*, not *prijzend* — the participant
  voice IS the missie made flesh. Better than a Leon-stem closing claim.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (h1 is short — *Missie & visie*, safe) |
| §2 Missie + Visie | Default only (static prose) |
| §3 Hoe we werken | Default only |
| §4 AFZ | Default · External link unreachable → text still readable, link still rendered |
| §5 SP-12 quote | Default · Quote consent withdrawn → section omits, page still ends cleanly on §4 |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · No JS state |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-12 Quote / testimony (variant A) | 🟠 | 🟠 (first render — spec exists in 41-patterns; **no Blade partial created in this brief** — implemented inline; see "New partials" below) |

**No new partials created** in this brief. SP-12 first render is **inline Blade**
(small, single-use on this page; promote to `partials/quote.blade.php` when the second
caller arrives — almost certainly [P-05 Mariage §5](05-mariage.md) — to avoid premature
abstraction). Flagged for tracking.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Missie + visie statements | §2 this page | Footer-tagline could quote one line ("evenwaardig") in future |
| *Hoe we werken* premise (participatie + evenwaardig) | §3 this page | Project pages (Mariage §3) show the format-specific version |
| Method (Janssens & Steyaert: *Uitnodigen · Mixen · Omkeren · Bevestigen*) | [P-15 Impact](../40-skeleton.md) | Cross-linked from §3 here, **not duplicated** |
| Six values (*Horizontaal · Vrij van oordeel · Gastvrij · Kwetsbaar · Experimenteel · Speels*) | **Retired** as a list (BG-3). Lived informally in Impact via quotes/proofs | If client reverses BG-3, lives here as §5 |
| Apartheid Free Zone | §4 this page | All other references link here (replaces standalone `/apartheid-free-zone` URL) |
| Hadja quote | §5 this page **AND** [P-05 Mariage §5](05-mariage.md) | BG-7 acknowledges duplication — decide at content review whether to split (one quote each) or accept |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] **No CTA** on this page (BG-8 — quiet closer; CTA-budget = 0 is valid for a "why" page per [TOV §Afsluiters](../../identity/10-tone-of-voice.md#afsluiters))
- [x] State inventory explicit
- [x] Section budget declared and respected (5 of 5–7 — staying minimal per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact))
- [x] No either/or notes survive (BG-1 … BG-8 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (4 listed; SP-12 inline-rendered, partial deferred)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.**

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §2 Missie line — keep current-site verbatim, or tighten? Current site uses "*Via dans en muziek nodigt Leon mensen van alle leeftijden…*" — clean, concrete, TOV-aligned. Recommend keep. | `[content]` | Sam / Kristin | Content stage |
| 2 | §2 Visie compression — current 4 paragraphs → 2 in strawman. Sam/Kristin approve compression? | `[content]` | Sam / Kristin | Content stage |
| 3 | §3 *evenwaardig* — the client used the word in [discovery/12-client-kickoff](../../discovery/12-client-kickoff-2026-05-19.md). Confirm it stays in public copy (it does in strawman). | `[client]` | Sam / Kristin | Content stage |
| 4 | §4 AFZ — Sam/Kristin approve framing ("blijvende keuze, geen verklaring") + retirement of standalone `/apartheid-free-zone` URL? Per [Strategy S-03](../../strategy/01-concerns.md): partnership/funding sensitivity flagged in discovery. | `[client]` | Sam / Kristin | §4 → final · Site IA |
| 5 | §4 AFZ — "Sinds 2024" jaartal correct? Inferred from current-site capture date 2026-05-19 + page reading as relatively recent. | `[content]` | Sam | §4 → final |
| 6 | §5 Hadja quote consent + attribution format. Same dependency as [P-05 Mariage gap #4](05-mariage.md). If denied: swap for partner-coordinator (P4) voice. | `[client]` | Sam / Kristin | §5 → final (block if denied) |
| 7 | BG-3 (drop 6-value list) + BG-4 (drop 4-method block) — major editorial cuts from current site. Need explicit client OK. | `[client]` | Sam / Kristin | Confidence → 4 |
| 8 | BG-7 quote duplication with Mariage — accept or split? | `[content]` | Sam / Kristin | §5 → final |

## Confidence rationale

- **Was 2 / 5** (Skeleton registry: *`[strategy]` AFZ placering + framing; `[content]`
  rebalanced uit subsidiedossiertaal — Leon-stem niet jury-toon*). Both were structural
  open calls.
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* AFZ placering decided (BG-6); subsidiedossier rebalance done (BG-3 / BG-4
  cuts + §2/§3 TOV pass). Remaining gaps are content sign-off + AFZ legal/PR clearance,
  not structural.
- **→ 4 / 5** when gaps #1 + #2 + #3 close (Sam/Kristin approve compressed missie + visie
  + *evenwaardig* word) and #7 clears (cuts approved).
- **→ 5 / 5** when all 8 gaps close (incl. #4 AFZ framing + #6 quote consent).

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [01-concerns S-03](../../strategy/01-concerns.md) · [Brief](../../strategy/00-strategy-brief.md)
- Structure: [30-structure Over Leon table](../30-structure.md)
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact) · [§4 Toonbaar in plaats van prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend)
- Source material: [raw/current-site/pages/missie-visie-nl](../../../raw/current-site/pages/missie-visie-nl.md) · [raw/current-site/pages/apartheid-free-zone](../../../raw/current-site/pages/apartheid-free-zone.md)
- Sibling content file: [14-missie-visie-content](14-missie-visie-content.md)
- Code: [`resources/views/over-leon/missie-visie.blade.php`](../../../../resources/views/over-leon/missie-visie.blade.php)
- Sister page (cross-ref): [P-15 Impact](../40-skeleton.md) — canonical home of method + proof
