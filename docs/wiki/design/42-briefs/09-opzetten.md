---
title: P-09 Participatief dansproject opzetten — Skeleton brief
tags: [design, skeleton, brief, samenwerken, opzetten, page-level, conversion]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; strategy/40-value-proposition (P3 + P4 profiles); strategy/20-personas (P3 + P4); existing samenwerken/opzetten.blade.php (placeholder); 42-briefs/01-home; 42-briefs/05-mariage; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-09
slug: /samenwerken/opzetten
type: Conversion 6–8
updated: 2026-05-28
---

# P-09 Participatief dansproject opzetten — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft · Content 🟠 first draft
> · Code 🟠 first draft
> (strawman rendered, mailto CTA) · Approved —
> **Confidence:** **3 / 5** (was 2 — raised by 7 BG decisions + 3-pattern lock-in).
> **Section budget:** **6 sections** (Conversion tier 6–8 ceiling — staying balanced;
> not a funnel, so no progressive form on the page).
> **Authored autonomously per task instruction "no user questions";
> all open calls documented inline as best-guess decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant A (text-only — eyebrow + h1 + lede). No SP-13 hero photo: an intake page reads stronger as quiet/serious; photos belong on the project pages this links to. | Yes — could add SP-13 sibling in v0.2 if too dry |
| BG-2 | **CTAs in hero** | **None.** This is a relationship-led page, not a funnel ([VP P4](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3) — *"not an application funnel"*). CTA lives in §6 contact band. | Yes — could add a single ghost CTA (`Plan een gesprek`) to hero if data shows users scroll past §6 |
| BG-3 | **Both registers, one page** | Per [Glossary copy notes](../../glossary.md) + [30-structure Samenwerken-children](../30-structure.md#samenwerken--children) + [Dn-12 conditional UI](../01-concerns.md): **P3 commissioner + P4 partner both land here; same page, two registers in the copy** (hybride dial leaning institutional, per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)). §4 *Voor wie* surfaces the breadth via organisation-type list. | Yes — could split into 2 pages if the dual-register copy becomes muddled (would re-open IA) |
| BG-4 | **§3 process = 3 steps named, not numbered as a form** | Per [30-structure Samenwerken-children table](../30-structure.md): *kennismaking → vrijblijvend gesprek → traject*. Render as 3 short text blocks (h3 each), not a stepper component — keeps the relationship-led tone. No timeline-bar UI. | Yes — could lift to numbered "01 / 02 / 03" labels in Surface phase if scan-density needs it |
| BG-5 | **§5 partner-stem quote** | Use SP-12 with a P4 partner-coordinator voice (per [TOV §Samenwerken](../../identity/10-tone-of-voice.md): *"Partner-stem inzetbaar — de coördinator die het al deed (Schoemaker, Dewin, Meynaerts) zegt het beter dan Leon"*). Strawman: Els Schoemaker (BUSO Cardijnschool) verbatim from [Personas P4](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3--job--30-p4). | Yes — could swap for Dewin or Meynaerts if Sam prefers; or omit if no consent |
| BG-6 | **§6 contact = mailto + plain contact line, no form** | Per [Dn-05 + Dn-18 + Dn-03 GDPR](../01-concerns.md): no form on the site in v1. Static `mailto:` + named contact person ("Sam Schoetters") + alternative `/over-leon/contact` link for general. CTA copy `Plan een gesprek` (verb-first per [TOV](../../identity/10-tone-of-voice.md#ctas)). | Yes — replaceable with Tally/Formspree when GDPR call lands |
| BG-7 | **Reuse existing `partials/quote.blade.php` (SP-12)** | SP-12 partial already exists in `resources/views/partials/quote.blade.php` (accepts `$quote`, `$attribution`, optional `$context` + `$variant` per [SP-12 spec](../41-patterns.md#sp-12--quote--testimony)). First on-site use lands here with `$variant = 'inline'` (default). | No — reusing existing pattern partial |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Relationship-led, not application-led** ([VP P4](../../strategy/40-value-proposition.md)).
   The page qualifies & explains a deliberately limited model; it does **not** generate
   volume. No form, no funnel, no "apply now" CTA. The verb is *plan een gesprek*.
2. **Both registers, one page** (BG-3). P3 (programmer · *institutional dial*) and P4
   (partner · *hybride dial*) land here. §4 *Voor wie* makes the cross-sector breadth
   explicit (cultuur · welzijn · zorg · onderwijs · gemeentes) — neither register
   is hidden, neither owns the page.
3. **Process is the spine** (§3). The three steps *kennismaking → vrijblijvend gesprek
   → traject* are the page's load-bearing structure — they answer *"hoe begint dit?"*
   for both P3 and P4 without forcing them to pick a path first.
4. **Voorbeeldcases deep-link, don't summarise.** §3.5 surfaces 2 SP-05 cards for
   *Mariage* + *Leon op school* — the canonical homes own their own narrative; this
   page just routes there. Kosmos surfaced as 1-line meta when ready (not in v1).
5. **Partner-stem above Leon-stem.** §5 quote (P4 partner-coordinator voice) carries
   more weight than any sentence Leon could write about itself ([TOV §4 toonbaar i.p.v.
   prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend)).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  SAMENWERKEN                                                       │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 var A)
│  Een participatief dansproject opzetten                            │
│                                                                    │
│  Wil je samen met Leon iets opzetten in jouw stad, school of       │
│  organisatie? Dat begint met een gesprek — vrijblijvend, en met    │
│  ruimte om uit te zoeken of het past.                              │
├────────────────────────────────────────────────────────────────────┤
│  Hoe het werkt                                                     │ §3 PROCES
│                                                                    │   (3 named steps)
│  Kennismaking                                                      │
│  We zoeken eerst uit wie jullie zijn en wat jullie willen.         │
│  Een telefoon, een mail of een koffie — wat voor jullie past.      │
│                                                                    │
│  Vrijblijvend gesprek                                              │
│  Daarna spreken we langer af. Geen offerte, geen voorstel: een     │
│  open verkenning van wat een traject met Leon zou kunnen worden.   │
│                                                                    │
│  Traject                                                           │
│  Als het klikt, bouwen we samen iets op maat. Cadens, partners,    │
│  financiering, voorstelling: alles wordt samen vastgelegd.         │
├────────────────────────────────────────────────────────────────────┤
│  Wat we al maakten                                                 │ §4 VOORBEELDCASES
│                                                                    │   (SP-05 × 2)
│  ┌──Mariage────────────────┐  ┌──Leon op school────────┐           │
│  │ project · 6 edities ·   │  │ begeleid traject ·     │           │
│  │ participatieve voorst…  │  │ scholen / welzijn /…   │           │
│  └─────────────────────────┘  └────────────────────────┘           │
│                                                                    │
│  Kosmos 2027 (KANAL — Centre Pompidou / KVS) is in voorbereiding.  │ (1-line meta)
├────────────────────────────────────────────────────────────────────┤
│  Voor wie                                                          │ §5 VOOR WIE
│                                                                    │   (org-type list)
│  We werken graag samen met:                                        │
│  • Cultuurhuizen, kunstencentra en festivals                       │
│  • Scholen (basis · secundair · BuSO · DKO)                        │
│  • Welzijns- en zorgorganisaties                                   │
│  • Buurthuizen en gemeenschapscentra                               │
│  • Gemeentes en stadsdiensten                                      │
├────────────────────────────────────────────────────────────────────┤
│  Een partner aan het woord                                         │ §6 BEWIJS
│                                                                    │   (SP-12 quote)
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │  "Het atelier is een plek waar je anders kan communiceren:   │  │
│  │   met je handen, voeten en hoofd."                           │  │
│  │  — Els Schoemaker · BUSO Cardijnschool                       │  │
│  └──────────────────────────────────────────────────────────────┘  │
├────────────────────────────────────────────────────────────────────┤
│  Wat we van jullie verwachten                                      │ §7 WEDERZIJDS
│                                                                    │
│  Een traject werkt als jullie tijd en vertrouwen kunnen vrijmaken: │
│  • één vast contactpersoon                                         │
│  • een groep die wekelijks samen kan zijn (cadens in overleg)      │
│  • ruimte om mee te denken over financiering                       │
│                                                                    │
│  Leon brengt: de artistieke leiding, de begeleiders, de logistiek  │
│  en de ervaring van zes jaar samen-bouwen.                         │
├────────────────────────────────────────────────────────────────────┤
│  Plan een gesprek                                                  │ §8 CONTACT
│                                                                    │   (SP-11 first use)
│  Stuur een mail naar Sam Schoetters of vraag een algemene          │
│  contactopname aan.                                                │
│                                                                    │
│  [ Mail Sam ]   [ Algemeen contact ]                               │ CTA primary + ghost
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                          [funder wall renders here │   (footer wall
│                                           via default — NOT        │    NOT suppressed
│                                           suppressed on this page] │    on non-home)
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ SAMENWERKEN                 │ §1 SUBPAGE TOP
│ Een participatief           │
│ dansproject opzetten        │
│                             │
│ [lede wraps to 4–5 lines]   │
├─────────────────────────────┤
│ Hoe het werkt               │ §3 PROCES
│                             │
│ Kennismaking                │
│ [paragraph]                 │
│                             │
│ Vrijblijvend gesprek        │
│ [paragraph]                 │
│                             │
│ Traject                     │
│ [paragraph]                 │
├─────────────────────────────┤
│ Wat we al maakten           │ §4 CASES
│ ┌─Mariage───────────────┐   │   (1-col stack)
│ └───────────────────────┘   │
│ ┌─Leon op school────────┐   │
│ └───────────────────────┘   │
│ Kosmos 2027 in voorber.     │
├─────────────────────────────┤
│ Voor wie                    │ §5
│ [bulleted list]             │
├─────────────────────────────┤
│ Een partner aan het woord   │ §6 QUOTE
│ ┌─────────────────────────┐ │
│ │ "Het atelier is …"      │ │
│ │ — Els Schoemaker · …    │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Wat we van jullie verwachten│ §7
│ [paragraph + bullets]       │
├─────────────────────────────┤
│ Plan een gesprek            │ §8 CONTACT
│ [korte intro]               │
│ ┌─Mail Sam──────────────┐   │
│ └───────────────────────┘   │
│ ┌─Algemeen contact──────┐   │
│ └───────────────────────┘   │
├─────────────────────────────┤
│ ⤓ SP-09 footer wall         │ (NOT suppressed)
│   © Leon vzw · Brussel      │ footer bottom row
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- CTAs full-width on mobile; intrinsic width side-by-side on desktop (flex wrap).
- §4 cards: `grid-template-columns: 1fr` mobile, `repeat(2, 1fr)` ≥ 768 px.
- §5 bulleted list stays in `.container-text` width on both viewports.
- SP-12 quote uses `.container-text` width — narrower than `.container-wide` to
  preserve legibility per [SP-12 spec](../41-patterns.md#sp-12--quote--testimony).
- No section disappears between viewports.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Past dit bij wat ik zoek?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Eyebrow:** `SAMENWERKEN` → `/samenwerken` (parent index).
- **h1:** `Een participatief dansproject opzetten` — full page name (matches IA slug
  label per [30-structure](../30-structure.md)). Verbose vs. shorter labels (e.g.
  "Opzetten") — keep verbose because the page title IS its job description.
- **Lede:** 2 sentences. Opens the door (P1/P4 belonging) + names the threshold
  (P3 institutional). Per [TOV §Samenwerken](../../identity/10-tone-of-voice.md): hybride dial,
  geen verkoop-toon.
- **BG-2:** No hero CTA — page is relationship-led, CTA lands in §8.

### §3 — Hoe het werkt (3 named steps)

- **User question:** *"Wat gebeurt er als ik contact opneem?"*
- **Pattern:** plain `.section` + `.container-text`, 3 × `<h3>` + paragraph.
- **Order locked:** *Kennismaking → Vrijblijvend gesprek → Traject* (per [30-structure
  Samenwerken table](../30-structure.md#samenwerken--children)).
- **Tone:** belonging-leaning hybride. Concrete verbs (*we zoeken uit · spreken af ·
  bouwen op*), not abstract (*we faciliteren een verkenningsfase*).
- **No stepper / progress-bar UI** (BG-4) — relational, not transactional.

### §4 — Wat we al maakten (voorbeeldcases)

- **User question:** *"Hoe ziet dat er in praktijk uit?"*
- **Pattern:** [SP-05 Project card](../41-patterns.md#sp-05--project-card) × 2 (text-only variant B).
- **Cards (order locked):**
  1. **Mariage** → `/dansateliers-performances/mariage` — *project · 6 edities · participatieve voorstelling*
  2. **Leon op school** → `/dansateliers-performances/leon-op-school` — *begeleid traject · scholen / welzijn / zorg*
- **Why these two:** they are the two existing project formats that arrive *via*
  opzetten (Mariage = co-pro/programmer route P3; Leon op school = partner route P4).
  Atelier Leon explicitly *not* listed — it's the drop-in P1 path, not an opzetten outcome.
  Mobiele dansstudio not listed — that lives under `/samenwerken/uitnodigen`.
- **Below the cards:** 1-line `.meta` paragraph naming *Kosmos 2027 (KANAL — Centre
  Pompidou / KVS) is in voorbereiding.* — surfaces the institutional-scale upcoming
  work without giving it a card (no canonical page yet per [30-structure](../30-structure.md)).
- **Grid:** 2-col desktop · 1-col mobile.

### §5 — Voor wie (organisation types)

- **User question:** *"Is dit voor mijn soort organisatie?"*
- **Pattern:** plain `.section` + `.container-text`, intro line + `<ul>`.
- **List items (order intentional — culture-first, gemeentes last):**
  - Cultuurhuizen, kunstencentra en festivals (P3 programmer register)
  - Scholen (basis · secundair · BuSO · DKO)
  - Welzijns- en zorgorganisaties
  - Buurthuizen en gemeenschapscentra
  - Gemeentes en stadsdiensten
- **Why explicit list:** [30-structure persona routing](../30-structure.md#persona--journey-routing)
  routes *both* P3 (cultuurhuizen) and P4 (welzijn/zorg/onderwijs) here. A flat
  bulleted list shows breadth without forcing the visitor to self-classify
  (per [Glossary copy notes](../../glossary.md) — same page, two registers).

### §6 — Een partner aan het woord (quote)

- **User question:** *"Wat zeggen anderen die het al gedaan hebben?"*
- **Pattern:** [SP-12 Quote / testimony](../41-patterns.md#sp-12--quote--testimony) variant A (inline frame).
- **Quote (BG-5 strawman):** Els Schoemaker · BUSO Cardijnschool — verbatim from
  [Personas P4 voice](../../strategy/20-personas.md#p4--de-groepsverantwoordelijke--secondary-serves-g2g3--job--30-p4):
  > *"Het atelier is een plek waar je anders kan communiceren: met je handen,
  > voeten en hoofd."*
- **Why this quote:** partner-coordinator voice, exactly what [TOV §Samenwerken](../../identity/10-tone-of-voice.md)
  prescribes (*"de coördinator die het al deed zegt het beter dan Leon"*).
- **Width:** `.container-text` per SP-12 contract.
- **Empty state:** entire SP-12 block omits if quote pulled; §6 collapses.

### §7 — Wat we van jullie verwachten (wederzijds)

- **User question:** *"Wat moet ik bijdragen?"*
- **Pattern:** plain `.section` + `.container-text`, paragraph + 3-item bullet + closing paragraph.
- **Tone:** concrete + reciprocal. Lists what the partner brings (vast contactpersoon ·
  wekelijkse groep · openheid over financiering) then names what Leon brings back
  (artistieke leiding · begeleiders · logistiek · ervaring) — keeps it a partnership
  framing, not a "leverancier vs. klant" framing.
- **Why this section:** prevents the page from reading as marketing — sets honest
  expectations before contact. Per [VP P4](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g2g3):
  *"qualifying a deliberately limited model, not a self-serve funnel."*

### §8 — Plan een gesprek (contact band) · SP-11 first use

- **User question:** *"Hoe neem ik contact op?"*
- **Pattern:** **SP-11 Contact pattern** (first on-site use — promotes SP-11 from 🔴 stub).
  Convention drafted here: h2 + 1-sentence intro + 1 primary CTA (mailto, named person)
  + 1 ghost CTA (general contact route).
- **Composition:**
  - **h2:** `Plan een gesprek` — verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas).
  - **Intro:** 1 sentence naming the contact + alternative.
  - **CTA primary:** `Mail Sam` → `mailto:hallo@leon.dance?subject=...` (placeholder
    address; real address `[content]` gap).
  - **CTA secondary (ghost):** `Algemeen contact` → `/over-leon/contact`.
- **No form** (BG-6) — Dn-03 GDPR + Dn-05/Dn-18 form-policy.
- **No phone number** in v1 — owner-by-name only (lighter, escalates only when needed).

## State inventory (full)

| Section | States covered |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL h1 — actual title ~40 chars, safe) |
| §3 Proces | Default only |
| §4 Cases | Default (2 cards) · Card without cover photo (text-only variant — current default) · Overflow (long card title — Mariage/Leon op school both short, safe) |
| §5 Voor wie | Default only |
| §6 Quote | Default · **Quote-missing → SP-12 block omits, §6 collapses** · Overflow (long attribution wraps under quote) |
| §7 Wederzijds | Default only |
| §8 Contact (SP-11) | Default · Mailto unsupported (browser falls back to OS handler — accepted) · Secondary CTA always renders |
| Page-level | Reduced-motion (global) · Mobile breakpoint reflow (above) · No conditional UI per persona — same page, same copy, two registers baked in |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-05 Project card (text-only variant B) | 🟠 | 🟠 (unchanged) |
| SP-11 Contact pattern | 🔴 | **🟠 first draft** (first use; convention specified §8) |
| SP-12 Quote / testimony | 🟠 (drafted with P-05 brief; partial already shipped as `partials/quote.blade.php`) | 🟠 (unchanged — first on-site use here; reuses existing partial per BG-7) |

## Canonical home for facts (anti-bloat discipline)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Process steps (kennismaking → gesprek → traject) | §3 this page | OK to mirror as 1-line on §5 of P-05 Mariage or P-08 index |
| Mariage format details | P-05 Mariage page | §4 card here carries 1-line desc ONLY |
| Leon op school format details | P-04 Leon op school page | §4 card here carries 1-line desc ONLY |
| Schoemaker quote (BG-5) | §6 this page (until P-15 Impact also uses it; split or pick one then) | Could mirror on Impact; decide there |
| Sam Schoetters as contact owner | §8 this page (per Samenwerken-child contact routing per [30-structure](../30-structure.md)) | Could also appear on P-18 Contact as "Voor projecten: Sam" |
| Organisation-type list (cultuur / welzijn / zorg / onderwijs / gemeentes) | §5 this page | Don't repeat on P-08 index — index uses 1-line per child |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 1 secondary (§8 — only CTAs on the page; BG-2)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 6–8) — counting §1/§3/§4/§5/§6/§7/§8
      as 7 numbered sections; §8 contact band is the CTA-bearing close, often counted
      under the "+CTA" allowance per [40-skeleton budget table](../40-skeleton.md#section-budgets-anti-bloat-ceiling-per-playbook).
      Effective content sections: **6 + CTA band**. Within budget.
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (6 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §3 process paragraphs final wording (current = strawman) | `[content]` | Sam / Kristin | Content stage |
| 2 | §5 organisation-type list — confirm 5 categories cover the real partner spread (any missing? overshooting?) | `[content]` | Sam | Content stage |
| 3 | §6 quote — Schoemaker consent for re-use in this context (already public on [missie-visie-nl](https://leon.dance/missie-visie-nl), but confirm explicit re-use on opzetten page) | `[client]` | Sam | §6 → final |
| 4 | §7 expectations — confirm bullets match what the team actually asks of partners (currently best-guess from VP P4 + Personas P4) | `[content]` | Sam / Kristin | §7 → final |
| 5 | §8 contact owner — Sam Schoetters confirmed as the named contact? Or a shared `hallo@leon.dance`? Or both? | `[client]` | Sam | §8 CTA href |
| 6 | §8 mailto subject pre-fill — `?subject=Participatief%20dansproject%20opzetten` proposed; team approval needed | `[content]` | Kristin | §8 final |
| 7 | Card-cover photos × 2 (Mariage + Leon op school) — currently text-only | `[asset]` | Surface plane | §4 visual final |

## Confidence rationale

- **Was 2 / 5** ([40-skeleton registry P-09](../40-skeleton.md#page-registry--single-source-of-status-truth):
  vague brief, key facts missing, strategy concerns open).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); remaining gaps are
  content/asset/client-confirm, not structural. Both registers handled by the page's
  shape (§3 process + §4 cases + §5 voor-wie) rather than by parallel content blocks —
  this resolves the [Dn-12 conditional-UI register-shape](../01-concerns.md) concern
  for this page (closes the page-level expression; the register-dial principle itself
  stays cross-cutting).
- **→ 4 / 5** when gaps #1 + #5 close (Kristin §3 + Sam contact-owner).
- **→ 5 / 5** when all 7 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure §Samenwerken-children](../30-structure.md#samenwerken--children) · [Persona routing](../30-structure.md#persona--journey-routing)
- Strategy: [VP P3 + P4](../../strategy/40-value-proposition.md) · [Personas P3 + P4](../../strategy/20-personas.md) · [User journey](../../strategy/50-user-journey.md)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)
- Vocabulary: [Glossary §Samenwerken copy notes](../../glossary.md)

- Code stub: [`resources/views/samenwerken/opzetten.blade.php`](../../../../resources/views/samenwerken/opzetten.blade.php)
- Sibling Samenwerken-children: P-10 uitnodigen (Conv 6–8) · P-11 doen (Util — Dn-19 blocked)
