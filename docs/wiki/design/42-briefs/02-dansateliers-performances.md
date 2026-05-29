---
title: P-02 Dansateliers & performances — Skeleton brief
tags: [design, skeleton, brief, dansateliers, page-level, hub, orientation]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; strategy/20-personas; strategy/30-jobs-to-be-done; 42-briefs/01-home; 42-briefs/05-mariage; live UX-planning session w/ Frederik 2026-05-28]
phase: design
page-id: P-02
slug: /dansateliers-performances
type: Orientation hub (Mkt-register)
updated: 2026-05-28
---

# P-02 Dansateliers & performances — Skeleton brief

> **Status:** Brief 🟠 **re-rolled** 2026-05-28 (live UX-planning session, not autonomous) ·
> Wireframe 🟠 (this file) · Content 🟠 strawman · Code 🔴 **redesign not yet built — the
> rendered v0.1 4-card index no longer matches this brief**.
> **Confidence:** **3 / 5** — *intent* is now high (client-steered, not best-guess), but the
> page became genuinely **beeld-dependent** (3 real photos minimum) and leans on two
> consent-pending quotes, so accuracy still needs assets + team review.
> **Section budget:** **3 bands** (hero + 2 sporen) + footer. Reclassified from the old
> *Utility 3–5 index* to an **orientation hub** — see §"Reclassification" below.

## What changed (this brief supersedes the autonomous v0.1)

The 2026-05-28 autonomous pass briefed this as a **lean utility index** — *"doorway, not
destination"*, 4 equal cards, **no top CTA** (old BG-2), **3 sections max** (old BG-5),
P3/P4 bookers sent away to Samenwerken. A live UX-planning session with Frederik
(2026-05-28, Garrett bottom-up) **overturned that premise**. The old BG-1…BG-7 are retired;
the decisions below (D-1…D-8) replace them.

**Why it flipped:** the real visitor is **P1 de nieuwsgierige post-trigger** — someone who
already met Leon offline (saw them work in public, heard about them), felt *"ah, dat is iets
tofs"*, and now arrives asking ***"hoe kan ik meedoen?"***. A flat catalog of four blocks
neither **confirms the feeling** they already had nor shows that **this is for someone like
them**. The page's job is **orientation first, then routing**.

## Strategy (resolved in session)

- **Page job:** orientation → routing. First *re-fire and confirm* the feeling (*"dit is
  tof, dit is voor mij, ik geloof in die aanpak, ik zie mensen zoals ik"*), **then** hand
  over concrete on-ramps.
- **Two equal sporen.** The page is a shared emotional front-door for **both** the
  individual (*"ik wil meedoen"* — P1) **and** the organisation/boeker (*"ik wil dit bij ons
  brengen"* — P3/P4). Not participant-only with a booking afterthought.
- **The feeling = four truths at once:** *samen, over verschil heen* · *iedereen kan mee
  (geen ervaring nodig)* · *in de echte wereld (niet in een zaal)* · *een echt traject (geen
  workshop)*. That **is** the "unieke aanpak" — shown, not claimed.
- **Social proof carries it:** echte-deelnemer-foto's + deelnemer/coördinator-quotes + one
  quiet cijfer-regel (numbers as support, never a dashboard). Video (Mariage Vimeo trailer)
  exists but is not load-bearing here.
- **Not salesy.** The hub *invites* and *shows that others did it*. Conversion CTAs
  (*"Boek nu"*, sign-up forms) live **one level down on the subpages**, never on this hub.

## Scope (resolved in session)

- **Aanpak-verhaal: "hier tonen, daar vertellen."** The full method (Inviter · Mixing ·
  Reversing · Affirming — Janssens & Steyaert) stays canonical on **Over Leon → Missie &
  visie / Impact**. Here it is *felt* via beeld + 1–2 zinnen + quotes, with a doorlink. No
  duplication.
- **Cijfers minimal.** At most one warm human line (e.g. *"al 16 jaar, wekelijks, op plekken
  door heel Brussel"*). Hard metrics stay canonical on Impact (auto-pulled from Agenda).
- **No "eigen project opzetten" invitation.** The hub does **not** ask visitors to invent or
  pitch a project (wrong altitude, salesy). The org-spoor nudges toward the two concrete,
  named routes only: the **school/zorg traject** and **booking the bike**.

## Best-guess → confirmed decisions (D-1 … D-8)

| # | Decision | Confirmed call |
|---|---|---|
| D-1 | **Hero treatment** | **Beeldgedragen hero** — one strong real photo + eyebrow (`DANSATELIERS & PERFORMANCES`, nav-label echo) + invitational h1 + short lede that names the *two ways in*. Replaces the old thin SP-04 variant C. (Still-image only — autoplay-video hero is a [Dn-20](../01-concerns.md) anti-pattern.) |
| D-2 | **CTA stance** | Hub is **invitation + social proof, not conversion**. On-ramp cards are *descriptive links into subpages*; the actual convert-CTAs live on those subpages. |
| D-3 | **Two-sporen spine** | The page reorganises around **two equal sporen**, replacing the flat 4-card grid. The four work-children map cleanly across them (table below). |
| D-4 | **Leon op school sits in the *org*-spoor** | Its decision-maker is a school/zorg-coördinator (P4) bringing Leon in for their group — not a walk-in. The group *member* doesn't arrive via this page; their coördinator does. |
| D-5 | **Aanpak + proof fused into each spoor** | No separate "feel it" sections up top. Each spoor is a **self-contained band** carrying its own slice of the aanpak-feeling + its own proof (photo + quote), without duplicating the hero. |
| D-6 | **Org-spoor = 2 named routes only** | **Leon op school** + **Mobiele dansstudio**. No generic "opzetten" card (per Scope). |
| D-7 | **Agenda hook lives inside spoor 1** | The *"wat loopt er deze week?"* text-link belongs to the *doe-zelf-mee* intent, not a standalone closing section. |
| D-8 | **h1 copy = invitational** | Strawman `Doe mee met Leon` (broader than "Dans mee" — covers kijken + boeken). Trades nav-label echo (now the eyebrow) for invitation. Final copy = Surface/Kristin. |

## Two-sporen mapping

| Spoor | Wie | Aanpak-waarheid (felt) | Proof | On-ramps → |
|---|---|---|---|---|
| **Doe zelf mee** | individu / P1 | samen over verschil heen · iedereen kan mee, geen ervaring nodig | deelnemer-foto + deelnemer-quote (*"ik voel me welkom en aanvaard, zonder oordeel"*) | **Atelier Leon** (open, kom langs) · **Mariage** (kom kijken / schrijf je in voor een reeks) · → agenda-haak |
| **Breng Leon naar jouw plek** | organisatie / P3·P4 | een echt traject (geen workshop) · in de echte wereld | foto traject op-locatie + coördinator-quote (Schoemaker: *"…anders communiceren: met handen, voeten en hoofd"*) | **Leon op school** (traject voor je groep) · **Mobiele dansstudio** (boek de fiets) |

## Full-page wireframe (desktop)

```
┌──────────────────────────────────────────────────────────────────┐
│ Leon   Dansateliers & performances  Samenwerken  Agenda  Over Leon│ SP-01 nav
├──────────────────────────────────────────────────────────────────┤
│        [ GROOT BEELD — deelnemers in actie, publieke ruimte ]      │ §1 HERO
│                                                                    │  beeldgedragen
│   DANSATELIERS & PERFORMANCES            (eyebrow = nav-label)      │  "bevestig
│   Doe mee met Leon                       (invitational h1)         │   het gevoel"
│   Eén plek, twee manieren: zelf meedansen, of Leon naar jouw       │
│   plek brengen. Geen ervaring nodig — je lijf volstaat.            │  (lede signalt
│   ┄┄┄ al 16 jaar, wekelijks, op plekken door heel Brussel ┄┄┄      │   2 sporen +
│                                                                    │   1 cijfer-regel)
├──────────────────────────────────────────────────────────────────┤
│  DOE ZELF MEE                                                      │ §2 SPOOR 1
│  ┌─────────────────┐   Samen dansen met mensen die je anders       │  (individu)
│  │    [ BEELD ]     │   nooit zou ontmoeten. Je hoeft geen          │  beeld links,
│  │   deelnemers     │   danser te zijn — kom gewoon langs.          │  tekst rechts
│  └─────────────────┘                                               │
│        "Ik voel me welkom en aanvaard, zonder oordeel."  — naam    │  deelnemer-quote
│                                                                    │
│   ┌── Atelier Leon ──────┐   ┌── Mariage ───────────────┐         │  on-ramps
│   │ Open · wekelijks ·   │   │ Kom kijken, of schrijf je │         │  (links naar
│   │ gratis · kom langs   │   │ in voor een volgende reeks│         │   subpagina's)
│   └──────────────────────┘   └───────────────────────────┘        │
│   → Bekijk wat er deze week loopt  (agenda)                        │  agenda-haak (D-7)
├──────────────────────────────────────────────────────────────────┤
│  BRENG LEON NAAR JOUW PLEK                                         │ §3 SPOOR 2
│   Een echt traject, opgebouwd op jouw plek — school,  ┌──────────┐ │  (organisatie)
│   zorg, plein, buurt. Geen losse workshop, maar een   │ [ BEELD ] │ │  tekst links,
│   weg samen, met nazorg.                              │op locatie │ │  beeld rechts
│                                                       └──────────┘ │  (gespiegeld)
│   "Het atelier is een plek waar je anders kan communiceren:        │  coördinator-
│    met je handen, voeten en hoofd."  — Els Schoemaker, Cardijn     │  quote
│                                                                    │
│   ┌── Leon op school ──┐  ┌── Mobiele dansstudio ──┐              │  on-ramps (2, D-6)
│   │ Begeleid traject   │  │ Boek de studio op       │              │
│   │ voor je groep      │  │ jouw plek               │              │
│   └────────────────────┘  └─────────────────────────┘             │
├──────────────────────────────────────────────────────────────────┤
│  [ SP-09 funder / partner wall — site-wide ]                      │ SP-02 footer
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · legal   │
└──────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN │ SP-01
│ Dansateliers & performances │
├─────────────────────────────┤
│   [ GROOT BEELD ]           │ §1 HERO (beeld boven,
│ DANSATELIERS & PERFORMANCES │   tekst eronder)
│ Doe mee met Leon            │
│ [lede · 2 sporen · cijfer]  │
├─────────────────────────────┤
│ DOE ZELF MEE                │ §2 SPOOR 1
│ [ BEELD ]                   │   (1-koloms gestapeld)
│ aanpak-zin · quote          │
│ ┌ Atelier Leon ┐            │
│ ┌ Mariage ┐                 │
│ → agenda                    │
├─────────────────────────────┤
│ BRENG LEON NAAR JOUW PLEK   │ §3 SPOOR 2
│ [ BEELD ]                   │
│ aanpak-zin · quote          │
│ ┌ Leon op school ┐          │
│ ┌ Mobiele dansstudio ┐      │
├─────────────────────────────┤
│ [ SP-09 funder wall ]       │ footer
└─────────────────────────────┘
```

**Mobile-first observations:** both sporen collapse to a single column — beeld on top,
aanpak-zin + quote, then the on-ramp cards stacked. The zigzag (beeld-links / beeld-rechts)
is a desktop-only rhythm; on mobile every band reads beeld-then-text. No content
appears/disappears between breakpoints.

## Section specs

### §1 — Hero (beeldgedragen)

- **User question:** *"Is dit dat toffe dat ik zag — en is dit voor mij?"*
- **Composition:** one strong real photo (deelnemers in actie, publieke ruimte) + eyebrow
  `DANSATELIERS & PERFORMANCES` + invitational h1 (`Doe mee met Leon`, strawman) + 1–2-zin
  lede that names the **two ways in** + one quiet cijfer-regel.
- **No transactional CTA** (D-2). The sporen below are the action.
- **Pattern need:** a **still-image hero** — *not* currently in the library as its own SP.
  Flagged as a new pattern candidate (see Patterns). Must respect [Dn-20](../01-concerns.md)
  anti-patterns (no autoplay-video, no empty-void hero).

### §2 — Spoor 1: Doe zelf mee

- **User question:** *"Hoe doe ik zelf mee — en voel ik me daar welkom?"*
- **Composition (D-5):** beeld-links + aanpak-zin (samen / geen ervaring nodig) +
  deelnemer-quote, then on-ramp cards: **Atelier Leon** · **Mariage** (kom kijken / schrijf
  je in), then the **agenda text-link** (D-7).
- **Cards = descriptive links** into the subpages (whole-card link, SP-05 grammar). No
  "Boek/Schrijf in"-knop here — that lives on the subpage.
- **Open-call awareness:** if `Editie::openInschrijving()->exists()`, the Mariage card may
  carry the `INSCHRIJVING OPEN` chip (SP-16 chip sibling), consistent with home + P-05.

### §3 — Spoor 2: Breng Leon naar jouw plek

- **User question:** *"Kan ik dit bij ons brengen — en deden anderen dat al?"*
- **Composition (D-5, gespiegeld):** tekst-links + aanpak-zin (echt traject / in de echte
  wereld) + coördinator-quote (Schoemaker), beeld-rechts, then on-ramp cards: **Leon op
  school** · **Mobiele dansstudio** (D-6 — two only).
- **Framing:** *"zie hoe scholen, zorginstellingen en buurten Leon naar hun plek brachten"*
  — show that others did it. Not "start your project."

## State inventory

| Section | States that matter |
|---|---|
| §1 Hero | Default · **No hero photo yet** (asset gap → fallback: text-only hero, but the page's premise weakens — see Confidence) · Long h1 (clamp + line-height-1.1) |
| §2 Spoor 1 | Default · **Mariage open-call chip** (SP-16 sibling, conditional) · Card hover (whole-card tint) · Photo-present vs. absent |
| §3 Spoor 2 | Default · Card hover · Photo-present vs. absent · Quote-consent-pending (placeholder until Schoemaker consent confirmed) |
| Page-level | Reduced-motion (global) · Mobile reflow (zigzag → stacked) |

## Patterns invoked

| SP-id | Role | Note |
|---|---|---|
| SP-01 Primary nav | shell | unchanged |
| SP-02 Footer (+ SP-09 wall) | shell | unchanged · NOT suppressed here |
| SP-05 Project card | on-ramp cards | reused for both sporen' on-ramps (variant A photo / B text-only) |
| SP-16 (chip sibling) | Mariage open-call chip | conditional, as on home/P-05 |
| SP-12 Quote | per-spoor proof quote | `partials/quote.blade.php` |

**New pattern candidates surfaced by this brief (→ [Dn-22](../01-concerns.md)):**
- **Still-image hero** (beeldgedragen §1) — recurs on other Mkt-register pages; promote when
  a 2nd use lands.
- **Alternating media + text band** (the zigzag spoor band: beeld + aanpak-zin + quote +
  on-ramp cards) — likely reused on Mariage / Leon op school / Mobiele dansstudio. Strong
  promotion candidate.

## Reclassification

The page registry currently types P-02 as **Utility 3–5** (lean index). This brief
reclassifies it as an **orientation hub (Mkt-register)**: still lean (3 bands), but
beeld-led and proof-bearing rather than a flat catalog. The registry row should follow on
the next `/pipeline` pass (Code drops to 🔴 — the redesign isn't built; Conf holds at 3).

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | On this page? |
|---|---|---|
| Full method (Inviter · Mixing · Reversing · Affirming) | Over Leon → Missie & visie / Impact | *Felt* via beeld + 1–2 zinnen + doorlink only (D-1 Scope) |
| Hard metrics ("In cijfers") | Impact (auto from Agenda) | One warm cijfer-regel only |
| 2-line elevator per child | child page hero | on-ramp cards carry a 1-line teaser |
| Agenda dates | `/agenda` | text-link in spoor 1 only |
| Conversion (sign-up / boeking) | subpages | **never on this hub** (D-2) |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] No transactional CTA in hero (D-2); on-ramps are descriptive links; convert lives on subpages
- [x] State inventory explicit (incl. asset-gap + consent-pending states)
- [x] Section budget declared (3 bands + footer) and respected
- [x] No either/or notes survive (D-1…D-8 are decisions)
- [x] Patterns referenced by SP-id (+ 2 new candidates flagged)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting Frederik's Wire-🟢 critique+refine pass after build.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | **3 real photos** (1 hero + 1 per spoor) — now a hard dependency, not optional cover | `[asset]` | Surface / SharePoint | §1–§3 visual premise |
| 2 | Deelnemer-quote + **Schoemaker-quote consent** | `[client]` | Kristin / Sam | proof bands → final |
| 3 | h1 + lede + aanpak-zinnen copy (TOV 9-point; no em-dash; toonbaar) | `[content]` | Kristin | content stage → final |
| 4 | cijfer-regel — confirm the safe, warm number(s) | `[content]` | Kristin / Sam | hero → final |
| 5 | **Samenwerken IA collapse** — downstream, tracked at [Dn-25](../01-concerns.md) | `[strategy]` | next etappe | not this page |

## Confidence rationale

- **3 / 5.** Intent is now client-steered (high), but the page is genuinely
  **asset-dependent**: with zero photos the beeldgedragen premise collapses to a text page
  that under-delivers on the whole "confirm the feeling / mensen zoals ik" job. Quotes are
  consent-pending. → **4** when assets + quote consent land; → **5** when copy is
  Kristin-approved and the build passes Frederik's Wire-🟢 pass.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md) (Dn-25)
- Structure: [30-structure](../30-structure.md) — Dansateliers & performances children table
- Strategy: [personas P1/P3/P4](../../strategy/20-personas.md) · [jobs-to-be-done](../../strategy/30-jobs-to-be-done.md)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md)
- Vocabulary: [glossary](../../glossary.md)
- Sibling briefs: [01-home](01-home.md) · [03-atelier-leon](03-atelier-leon.md) · [04-leon-op-school](04-leon-op-school.md) · [05-mariage](05-mariage.md) · [07-mobiele-dansstudio](07-mobiele-dansstudio.md)
- Code stub (pre-redesign): [`resources/views/dansateliers/index.blade.php`](../../../../resources/views/dansateliers/index.blade.php)
