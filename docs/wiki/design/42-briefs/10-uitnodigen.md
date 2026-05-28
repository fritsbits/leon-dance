---
title: P-10 Mobiele dansstudio uitnodigen — Skeleton brief
tags: [design, skeleton, brief, samenwerken, uitnodigen, page-level, conversion]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; strategy/40-value-proposition (P3 programmer profile); 42-briefs/01-home; 42-briefs/05-mariage; existing samenwerken/uitnodigen.blade.php; dansateliers/mobiele-dansstudio.blade.php (P-07 canonical); best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-10
slug: /samenwerken/uitnodigen
type: Conversion 6–8
updated: 2026-05-28
---

# P-10 Mobiele dansstudio uitnodigen — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft · Code 🟠 first draft
> (this commit — see [`samenwerken/uitnodigen.blade.php`](../../../../resources/views/samenwerken/uitnodigen.blade.php)) ·
> Approved —
> **Confidence:** **2 → 3 / 5** (was 2 — raised by section lock-in + intake-pattern
> first-draft + canonical-split discipline; remaining gaps are content + client +
> Dn-03 GDPR blocker on the real form).
> **Section budget:** **6 sections + 1 CTA** (Conversion tier 6–8 ceiling — staying
> low: this is intake, not marketing; the canonical "wat is het"-story lives on P-07).
> **Authored autonomously per task instruction; all open calls documented inline as
> best-guess decisions (BG-1 … BG-7) + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Audience framing** | **Single reader: P3 professional programmator / organisator** ([TOV §6 één lezer per pagina](../../identity/10-tone-of-voice.md#6-één-lezer-per-pagina)). Institutional dial. Eén CTA, geen P1-pad op deze pagina. | Yes — could add a softer P4-secondary if "publieke ruimte / buurthuizen" feedback says so |
| BG-2 | **Canonical split with P-07** | This page = **uitnodigen-intake**. The *what is the studio* canonical lives on P-07 ([`/dansateliers-performances/mobiele-dansstudio`](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php)). §2 here = **1-line + deeplink to P-07**, not a duplicate description. | No — IA principle 4 ([30-structure](../30-structure.md)): one canonical page per offer; audience pages link in |
| BG-3 | **Section count** | **6 sections + 1 CTA** (Conversion 6–8 ceiling). Order: subpage top → wat het is (1-line + link) → wanneer (use-cases) → praktisch (technische fiche short-form + cost-model) → hoe verloopt een boeking (3 steps) → contact CTA. | Yes — could collapse §3+§4 into one "Past het bij jou?" if reads too long |
| BG-4 | **No price, no booking engine** | Per [Dn-05 Closed](../01-concerns.md) (no ticketing/payments) + [Dn-18 Closed](../01-concerns.md) ("just a contact request is fine"). Cost framed as *"in overleg, afhankelijk van duur + locatie"*. No date-picker, no inschrijving widget. | No — these are Closed concerns |
| BG-5 | **Contact = mailto + light form-stub** | Dn-03 GDPR is **Open [BLOCKER]** on the real form (SP-10 inschrijving form blocked too). v0.1 = primary CTA is `mailto:` link with subject pre-fill; **placeholder form-stub** with annotation `[Form lands after Dn-03 lawful-basis decision]` — no real `<form action>` until GDPR resolves. | Yes — when Dn-03 resolves, swap mailto + stub for the live SP-11/SP-10 form |
| BG-6 | **Technische fiche = short-form here, full on P-07** | Per BG-2 canonical split. Here: 4-bullet quick read (afmetingen · stroom · op-/afbouw · vloer). Full PDF + dieper spec on P-07. Avoids duplication; gives a P3 enough to qualify the offer in 5 seconds. | Yes — could move full fiche here if P-07 turns out to be more newcomer-shaped |
| BG-7 | **Use-cases (§3)** | 4 named contexts per task hints: *festivals · publieke ruimte · zomerprogrammatie · projectweken*. Plain prose list, no card chrome (keep §3 quieter than the §4 fiche which IS list-shaped). | Yes — content drop could re-shuffle to 3 contexts or add a 5th |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **One canonical page per offer** ([30-structure IA principle 4](../30-structure.md)).
   *Wat de mobiele dansstudio is* lives on **P-07** (`/dansateliers-performances/mobiele-dansstudio`).
   *Hoe je hem uitnodigt* lives here. The split is the whole point of the Samenwerken
   sub-tree existing — no duplication.
2. **Intake, not marketing** ([20-scope F11](../20-scope.md) trajectory-not-product +
   [Dn-18 Closed](../01-concerns.md) contact-request-only). Page is a **qualification +
   contact funnel**, not a sales page. No price-claim, no urgency-band, no testimonial-
   wall.
3. **Single reader = P3 programmator** ([TOV §6 één lezer per pagina](../../identity/10-tone-of-voice.md#6-één-lezer-per-pagina)).
   Institutional dial throughout — *rustiger, feitelijker, Leon als onderwerp, methode-
   en-bewijs* per [TOV §3](../../identity/10-tone-of-voice.md#eén-stem-twee-registers).
   Geen *"kom een keer langs"*-warmte; wel concrete duur, opbouwtijd, kost-frame.
4. **GDPR blocks the real form (Dn-03 Open)** — so v0.1 ships a `mailto:` primary CTA +
   annotated form-stub. The page architecture is already SP-11-shaped; only the
   `<form action>` wiring waits.
5. **Use-cases drive qualification.** A P3 scanning this page wants 5-second answers
   to *"is this for my context?"* — §3 names the 4 known fit-contexts so the wrong P3
   bounces (saving Leon's intake time) and the right P3 keeps reading.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  SAMENWERKEN                                                       │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  De mobiele dansstudio uitnodigen                                  │
│                                                                    │
│  Voor programmatoren, organisatoren en gemeentediensten die de     │
│  mobiele dansstudio een week of een seizoen op hun plek willen.    │
├────────────────────────────────────────────────────────────────────┤
│  Wat is de mobiele dansstudio?                                     │ §2 1-LINE + LINK
│                                                                    │   (canonical to P-07)
│  Een verplaatsbare dansvloer op een fietsaanhangwagen — naar       │
│  pleinen, scholen, festivals. Volledige beschrijving + zomer-      │
│  formule + beeldarchief op de canonical pagina.                    │
│                                                                    │
│  → Lees meer op /dansateliers-performances/mobiele-dansstudio      │
├────────────────────────────────────────────────────────────────────┤
│  Wanneer past het?                                                 │ §3 USE-CASES
│                                                                    │
│  De mobiele dansstudio werkt het best op plekken waar mensen al    │
│  langs komen — niet in een afgesloten zaal. Vier contexten waar    │
│  we het al deden:                                                  │
│                                                                    │
│  · Festivals — als zichtbare dansplek tussen het programma.        │
│  · Publieke ruimte — pleinen, parken, woonwijken.                  │
│  · Zomerprogrammatie — een week of meer op één locatie.            │
│  · Projectweken — scholen, jeugdwerk, buurthuizen.                 │
├────────────────────────────────────────────────────────────────────┤
│  Praktisch                                                         │ §4 PRAKTISCH
│                                                                    │   (technische fiche
│  Technische fiche                                                  │    short-form +
│  · Afmetingen: [LxBxH] uitgeklapt · transport op fietsaanhanger    │    cost-model)
│  · Stroom: standaard 230V · opbouw door één of twee mensen         │
│  · Op-/afbouw: ±[30 min] · weersbestendig binnen redelijke marge   │
│  · Vloer: [type] · geschikt voor blote voeten + dansschoenen       │
│                                                                    │
│  → Volledige technische fiche (PDF) op de canonical pagina         │
│                                                                    │
│  Wat het kost                                                      │
│                                                                    │
│  Een vergoeding in overleg, afhankelijk van duur, locatie en       │
│  context (festival, school, publieke ruimte). Geen vaste prijs-    │
│  lijst — we bekijken het per aanvraag.                             │
├────────────────────────────────────────────────────────────────────┤
│  Hoe verloopt een boeking                                          │ §5 PROCESS
│                                                                    │   (3 steps)
│  1. Kennismaking — je stuurt een mail met je context (waar,        │
│     wanneer, voor wie). We reageren binnen een week.               │
│                                                                    │
│  2. Fiche en afspraken — we sturen de volledige technische fiche   │
│     en maken een voorstel voor duur, prijs en op-/afbouw.          │
│                                                                    │
│  3. Datum vastleggen — eens akkoord, blokkeren we de datum en      │
│     starten we de praktische voorbereiding.                        │
├────────────────────────────────────────────────────────────────────┤
│  Plan een boeking                                                  │ §6 CONTACT CTA
│                                                                    │   (SP-11 first-draft)
│  Stuur ons een mail met je context — locatie, datum, doelpubliek   │
│  — en we nemen binnen een week contact op.                         │
│                                                                    │
│  [ Stuur een aanvraag ]    of mail rechtstreeks: hallo@leon.dance  │
│                                                                    │
│  [Form lands hier zodra Dn-03 GDPR-grondslag beslist is.]          │
├────────────────────────────────────────────────────────────────────┤
│  Met steun van  [VL] [VGC] [BXL] [PB]                              │ ← SP-02 footer
│  Co-producenten [KANAL] [KVS]   …                                  │   (default funder
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │    wall renders)
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
│                             │
│ De mobiele dansstudio       │
│ uitnodigen                  │
│                             │
│ [lede wraps to ~3 lines]    │
├─────────────────────────────┤
│ Wat is de mobiele dansstudio?│ §2 1-LINE + LINK
│ [3-line description]        │
│ → Lees meer (canonical)     │
├─────────────────────────────┤
│ Wanneer past het?           │ §3 USE-CASES
│ [intro · 2 lines]           │
│ · Festivals — …             │
│ · Publieke ruimte — …       │
│ · Zomerprogrammatie — …     │
│ · Projectweken — …          │
├─────────────────────────────┤
│ Praktisch                   │ §4 PRAKTISCH
│ Technische fiche            │
│ · Afmetingen: …             │
│ · Stroom: …                 │
│ · Op-/afbouw: …             │
│ · Vloer: …                  │
│ → Volledige fiche (PDF)     │
│                             │
│ Wat het kost                │
│ [3-line cost-frame]         │
├─────────────────────────────┤
│ Hoe verloopt een boeking    │ §5 PROCESS
│ 1. Kennismaking — …         │
│ 2. Fiche en afspraken — …   │
│ 3. Datum vastleggen — …     │
├─────────────────────────────┤
│ Plan een boeking            │ §6 CONTACT CTA
│ [intro · 2 lines]           │
│ ┌─Stuur een aanvraag──────┐ │ ← btn-primary
│ └─────────────────────────┘ │   full-width on mobile
│ of mail: hallo@leon.dance   │
│ [Form lands na Dn-03.]      │
├─────────────────────────────┤
│ ⤓ SP-09 default funder wall │ ← footer wall
│   (4 tiers) renders here    │   (not suppressed
│                             │    on non-home)
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- CTA in §6 is full-width on mobile, intrinsic-width on desktop — flex wrap, no markup
  switch (same pattern as P-01 home).
- §3 use-cases and §4 fiche use plain `<ul>` bullets — reflow trivially.
- §5 process steps stack identically across viewports (numbered `<ol>`).
- No section disappears between viewports.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Wat is deze pagina en is het voor mij?"*
- **Pattern:** [SP-04 variant A](../41-patterns.md#sp-04--subpage-top) (eyebrow + h1 + lede; no photo).
- **Eyebrow:** `SAMENWERKEN` (links to `/samenwerken`).
- **h1:** *"De mobiele dansstudio uitnodigen"* — verb-led title per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas).
- **Lede:** P3-framed in one sentence — names *programmatoren · organisatoren · gemeente-
  diensten* + the unit they think in (*week of seizoen*).
- **BG-1:** No hero CTA — CTA discipline lands at §6 only, keeps the page intake-shaped.

### §2 — Wat is de mobiele dansstudio? (1-line + canonical deeplink)

- **User question:** *"Wat is dat ding eigenlijk?"* — for the P3 who skipped P-07.
- **Pattern:** plain `.section` + `.container-text` (prose), no SP.
- **Composition:** h2 + 3-line description + arrow-link to P-07 canonical.
- **Canonical discipline (BG-2):** This section is **deliberately thin**. The full
  *wat is het · zomerformule · track record · beeldarchief* lives on
  [P-07](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php). Per
  [30-structure IA principle 4](../30-structure.md), audience pages link to the
  canonical, never duplicate.
- **No banned words:** geen *uniek · innovatief · vernieuwend* — beschrijving = wat het
  fysiek is, niet wat het belooft.

### §3 — Wanneer past het? (use-cases)

- **User question:** *"Past dit bij mijn context?"* — the qualification beat.
- **Pattern:** plain `.section` + `.container-text` with intro paragraph + 4-item list.
  No card chrome (cards would over-equate the contexts).
- **Composition:** h2 + 2-sentence framing line + `<ul>` with 4 named contexts (BG-7):
  *Festivals · Publieke ruimte · Zomerprogrammatie · Projectweken*. Each = `<strong>label</strong>
  — short rationale (≤12 words)`.
- **Framing line discipline:** the bridge sentence ("werkt het best op plekken waar
  mensen al langs komen — niet in een afgesloten zaal") quietly disqualifies the
  *"kan jij die in mijn theaterzaal zetten?"* P3 — saves a back-and-forth.

### §4 — Praktisch (technische fiche short-form + cost-model)

- **User question:** *"Kan ik dit praktisch organiseren — en wat kost het?"*
- **Pattern:** plain `.section` + `.container-text` with two sub-blocks (h3 each).
- **Sub-block A — Technische fiche (short-form, 4 bullets):**
  - Afmetingen · stroom · op-/afbouw · vloer. One line each. Concrete values strawman'd
    (`[LxBxH]`, `[30 min]`, etc.) — real numbers per content gap #1.
  - Footer link: *"→ Volledige technische fiche (PDF) op de canonical pagina"* →
    [P-07](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php).
- **Sub-block B — Wat het kost (BG-4):**
  - No price-list. Frame: *"vergoeding in overleg, afhankelijk van duur, locatie en
    context"*. Explicit because P3 will look for it; explicit-because-absent saves a
    bounce.
  - Per [Dn-05 Closed](../01-concerns.md) (no ticketing/payments — free / partner-
    ticketed) + [20-scope F11](../20-scope.md) trajectory-not-product.

### §5 — Hoe verloopt een boeking (3 steps)

- **User question:** *"Wat gebeurt er nadat ik op de knop druk?"*
- **Pattern:** plain `.section` + `.container-text` with numbered `<ol>` (3 steps).
- **Steps (order locked):**
  1. **Kennismaking** — mail met je context (waar, wanneer, voor wie) · reactie binnen
     een week.
  2. **Fiche en afspraken** — Leon stuurt volledige fiche + voorstel voor duur, prijs,
     op-/afbouw.
  3. **Datum vastleggen** — eens akkoord, datum geblokkeerd · praktische voorbereiding
     start.
- **Why 3 not 5:** the playbook tendency is to over-itemise process. 3 steps = the
  minimum honest read; collapses any "vrijblijvend gesprek of niet"-ambiguity.
- **Time-promise (1 week response) discipline:** committed in copy so the P3 doesn't
  ping twice. If team can't hold a 1-week SLA, drop the line and tighten to *"we reageren
  zo snel mogelijk"* (gap #4 client confirm).

### §6 — Plan een boeking (contact CTA · SP-11 first-draft)

- **User question:** *"Hoe stuur ik die aanvraag?"*
- **Pattern:** **SP-11 Contact** — first-draft lands with this brief (was 🔴 stub).
  Composition: h2 + 1-paragraph framing + primary CTA + secondary plain-text mailto + GDPR-
  block annotation.
- **Composition:**
  - h2: *"Plan een boeking"* (verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas)).
  - Intro: 2 sentences asking for *locatie · datum · doelpubliek* + restating the
    1-week response promise.
  - Primary CTA (`btn-primary`): *"Stuur een aanvraag"* — links to `mailto:hallo@leon.dance?subject=Mobiele%20dansstudio%20uitnodigen`
    in v0.1 (BG-5).
  - Secondary line (`.meta`): *"of mail rechtstreeks: hallo@leon.dance"* — same address,
    plain-text fallback for users who block `mailto:`.
  - Form-stub annotation: *"[Form lands hier zodra Dn-03 GDPR-grondslag beslist is.]"* —
    visible in the wireframe phase as an honest placeholder, not invisible HTML.
- **GDPR discipline (BG-5):** no `<form action>`, no field collection, no third-party
  newsletter widget. The `mailto:` is the only data-touching path until [Dn-03](../01-concerns.md)
  resolves.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL h1 — *"De mobiele dansstudio uitnodigen"* fits comfortably) |
| §2 1-line + link | Default · Canonical link broken → no fallback (link target is an internal v1 route, won't break) |
| §3 use-cases | Default · Reduce-to-3 (theoretical — list can shrink) |
| §4 praktisch | Default · Strawman bullets (current) · Real-fiche (after content drop) · Cost-line empty → §4 sub-block B collapses, sub-block A still renders |
| §5 process | Default · 1-week SLA pulled → step 1 copy switches to *"zo snel mogelijk"* |
| §6 contact CTA | Default (mailto + stub) · **GDPR-resolved → real form** (Dn-03 → SP-10/SP-11 live) · Submitting / Validating / Success / Error — all deferred until form lands · Mailto-blocked → secondary plain-text line carries |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Empty content drop → §3+§4 strawman holds the shape |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-09 Footer wall (variant A default) | 🟠 | 🟠 (unchanged — footer carries) |
| **SP-11 Contact pattern** | 🔴 stub | **🟠 first draft** (first use; spec convention lands in 41-patterns on next pattern-pass) |
| SP-10 Inschrijving form | 🔴 stub | 🔴 (still stub — Dn-03 BLOCKER; this page **does not** lift it) |

**Pattern delta:** SP-11 promoted 🔴 → 🟠. SP-10 stays 🔴 (no form fires until Dn-03
clears; the §6 stub is mailto-shaped, not form-shaped, so SP-10 isn't engaged). After
this brief: **11 / 13 patterns at 🟠**, 2 still 🔴 (SP-08 redundancy-flagged · SP-10
Dn-03 blocked).

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| What the mobiele dansstudio physically is | [P-07](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php) | §2 here = 1-line digest + link only |
| Full technische fiche (afmetingen, stroom, etc.) | P-07 (+ PDF download on termijn) | §4 here = 4-bullet short-form + link |
| Zomerformule + track record | P-07 | Not on P-10 (would re-pitch what P-07 already does) |
| Beeldarchief | P-07 | Not on P-10 |
| Cost framing ("in overleg, geen prijslijst") | §4B here | OK to mirror on P-07 if P-07 ever fields a price question |
| Booking process (3 steps) | §5 here | Not on P-07 — P-07 routes here via "Uitnodigen" link |
| Contact (`hallo@leon.dance` + SLA) | §6 here | Global Contact page (P-18) carries general contact; per-Samenwerken-child paths inline per [30-structure](../30-structure.md) |
| Site-wide funder wall | SP-02 footer | NOT inline on P-10 (this is intake, not proof) |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (§6 — only CTA on the page; BG-1)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 6–8)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (6 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Real technische-fiche cijfers (afmetingen, opbouwtijd, vloer-type, stroom-detail) | `[content]` | Sam / Kristin (team) | §4 → final · also feeds P-07 canonical |
| 2 | Cost-framing accuracy — is *"in overleg"* the right framing, of komt er ooit een richtbedrag? | `[client]` | Sam | §4B → final |
| 3 | 1-week response SLA — kan het team dit publiekelijk dragen? Zo niet → switch naar *"zo snel mogelijk"* | `[client]` | Sam / Kristin | §5 + §6 copy |
| 4 | **Dn-03 GDPR grondslag** — opent de echte SP-10/SP-11 form-flow (validation · submitting · success · error · spam-handling) | `[strategy]` | Frederik + client | §6 → real form (currently mailto + stub) |
| 5 | Professional contact owner — komt aanvraag bij Sam, Kristin, of een shared mailbox? Bepaalt of *"hallo@leon.dance"* het juiste adres is of dat er een dedicated *"boekingen@…"* moet komen | `[client]` | Sam | §6 mailto-target |
| 6 | Use-case lijst — zijn de 4 contexten (festivals · publieke ruimte · zomerprogrammatie · projectweken) compleet en accuraat? Track record op P-07 zou hier evidence-side moeten geven | `[content]` | Sam / Kristin | §3 → final |
| 7 | P-07 canonical fiche + PDF — § "Volledige technische fiche (PDF)" link veronderstelt dat P-07 die heeft. Als P-07 ook stub blijft, breekt de canonical-discipline tijdelijk | `[content]` | Sam / Kristin (feeds P-07) | §2 + §4A links read as broken promises tot P-07 vult |
| 8 | Cross-link audit — staat er op P-07 een "Uitnodigen → /samenwerken/uitnodigen" link? Ja (geverifieerd 2026-05-28). Niets te doen, alleen blijvend bewaken bij P-07 herschrijving | `[research]` | Frederik | ✓ CLOSED (geverifieerd) |

## Confidence rationale

- **Was 2 / 5** (vague brief; key facts — fiche, cost-frame, response-SLA, contact-owner —
  all missing or unverified).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); page architecture stands; the
  Dn-03 form-stub is honestly placeholdered, not silently hidden. Remaining gaps are
  content (fiche numbers, use-case completeness) + client decisions (cost-frame, SLA,
  contact-owner) + the Dn-03 BLOCKER for the live form.
- **→ 4 / 5** when gaps #1 + #2 + #3 + #5 close (team fills strawman + Sam confirms cost
  and contact-owner).
- **→ 5 / 5** when all gaps close + Dn-03 resolves + the real form ships.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Strategy: [VP P3 programmer profile](../../strategy/40-value-proposition.md) · [User journey](../../strategy/50-user-journey.md)
- Structure: [30-structure §Samenwerken — children](../30-structure.md) (P3 booking register · canonical-content rule)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)
- Vocabulary: [glossary §mobiele dansstudio](../../glossary.md)
- Sibling briefs: [01-home](01-home.md) · [05-mariage](05-mariage.md)
- Canonical sister page: P-07 [`/dansateliers-performances/mobiele-dansstudio`](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php)

- Code stub (rewritten this commit): [`resources/views/samenwerken/uitnodigen.blade.php`](../../../../resources/views/samenwerken/uitnodigen.blade.php)
- Closed concerns governing this page: [Dn-05](../01-concerns.md) (no ticketing) · [Dn-18](../01-concerns.md) (contact request only)
- Open concern blocking the live form: [Dn-03](../01-concerns.md) GDPR (BLOCKER for SP-10/SP-11)
