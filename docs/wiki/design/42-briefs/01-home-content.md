---
title: P-01 Home — NL content strawman
tags: [design, skeleton, content, home, page-level, nl]
sources: [42-briefs/01-home; identity/10-tone-of-voice; glossary; strategy/40-value-proposition; discovery/26-agenda-analysis (weekly cadence)]
phase: design
page-id: P-01
slug: /
language: nl
updated: 2026-05-27
---

# P-01 Home — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Kristin review for accuracy
> + tone-finalisation.
> Lifts gaps **#1** (NL h1 + lede), **#3** (jury band wording), **#7** (filter recommendation
> documented) from [01-home brief](01-home.md) to strawman level.
> **Open against final:** gap #4 (real partner data) · #2/#5 (asset choices) · #6 (Agenda
> backend feed for §4 to be real, not seeded).
> **Sister:** [01-home.md](01-home.md) (structure brief — patterns, sections, states).

## Tone discipline applied

Per [identity/10-tone-of-voice §Home](../../identity/10-tone-of-voice.md#home): **belonging
dial hoog, institutional dial direct daaronder.** Eén regel uitnodigend; één rustige
regel gewicht ophaalt zonder te claimen. Geen mission-statement-blok bovenaan.
Verboden in publieke copy nageleefd: geen *duurzaam · laagdrempelig · inclusief ·
diversiteit · creatie · werking · traject · uniek · bekroond · empoweren*.

---

## §1 — Hero

**Eyebrow** (`.meta uppercase tracking-wide`):

> LEON · BRUSSEL

**h1** (~10 woorden, *invitation-forward* per [D-iv](../../strategy/40-value-proposition.md#positioning-posture-decision-d-iv); TOV-voorbeeld):

> Een open uitnodiging om mee te dansen — met de mensen die het al doen.

**Lede** (2 zinnen, concreet, zet §3 op):

> Een wekelijks open atelier, en grotere voorstellingen waarin Brusselaars samen op de
> scène staan. Geen ervaring nodig om mee te doen.

**CTA primary** (`btn-primary`):

> Kom langs in Atelier Leon  →  `/dansateliers-performances/atelier-leon`

**CTA secondary** (`btn-ghost`):

> Bekijk de agenda  →  `/agenda`

**Jury 1-line band** (`.meta`, *tweede regel* die gewicht ophaalt zonder te claimen):

> In Brussel sinds 2010. Wekelijks samen, gratis en zonder inschrijving.

> ⚠️ **Te bevestigen door Sam / Kristin (gap #3):**
> - "Sinds 2010" gebruikt het "16 jaar bezig"-frame ([Over Leon historiek](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)).
>   Alternatief: "Sinds 2017" (Atelier Quartier-template) of "Sinds 2021" (Leon vzw
>   incorporatie). Welk jaartal wil het team publiekelijk dragen?
> - "Gratis en zonder inschrijving" verwijst expliciet naar het Atelier-pad (P1).
>   Vier projecten lopend / drie / "meerdere projecten lopend" — voorkeur?

---

## §2 — Photo

**Caption + credit** (template — vult zich met gekozen foto, gap #2):

> © [Fotograaf] · [Atelier Leon / Mariage / project], [locatie], [jaar]

> ⚠️ **Foto-keuze open (gap #2):** Surface-plane beslissing tegen de Boris Charmatz
> photo-discipline benchmark ([Dn-20](../01-concerns.md)). Strawman-pad: een Atelier
> Leon-foto uit de Pianofabriek-set (hoogste coverage in [90-image-map](../90-image-map.md)).

---

## §3 — Het werk van Leon

**h2:**

> Het werk van Leon

**Cards (4 × SP-05 — title + 1-line desc):**

| # | Title | Description (1 zin) | Link |
|---|---|---|---|
| 1 | **Atelier Leon** | Wekelijks gratis open atelier — woensdag in de Pianofabriek, zaterdag in de Maison des Cultures. | `/dansateliers-performances/atelier-leon` |
| 2 | **Leon op school** | Een begeleid danstraject van zes maanden, in scholen, welzijnsorganisaties en zorgcentra. | `/dansateliers-performances/leon-op-school` |
| 3 | **Mariage** | Een participatieve voorstelling in zes edities — telkens met een lokale groep. | `/dansateliers-performances/mariage` |
| 4 | **Mobiele dansstudio** | Een verplaatsbare dansruimte die je kan uitnodigen op je eigen plek. | `/dansateliers-performances/mobiele-dansstudio` |

> ⚠️ **Te bevestigen (gap #1 partial):**
> - "Zes maanden" voor Leon op school — TOV-verboden woord *traject* vermeden, vervangen
>   door "danstraject van zes maanden" (concreet > "begeleid traject"); verifiëren of
>   "zes maanden" altijd klopt of cadens varieert per partner.
> - Card-covers zijn aparte gap #5 (asset).

---

## §4 — Eerstvolgende (Agenda preview)

**h2:**

> Eerstvolgende

**Rijen (3 × SP-07 — template; data uit Event entity):**

```
{DAY} {DD}.{MM} · {HH}:{MM}    {Type} — {Locatie}
```

**Voorbeeldweergave (strawman, op basis van [26-agenda-analysis.md](../../discovery/26-agenda-analysis.md)):**

> WO 04.06 · 19:00   Open atelier — Pianofabriek
> ZA 07.06 · 14:00   Open atelier — Maison des Cultures
> DO 12.06 · 20:00   Try-out Mariage — CAMPO

**Empty state** (geen aankomende publieke events):

> Geen aankomende publieke events. Kijk gerust op de [volledige agenda](/agenda).

**Link** (afsluiter, `btn-text`):

> → Volledige agenda

> **Gap #7 (filter) — strawman aanbevolen:** Op de home **alleen publieke types tonen**
> (*open atelier · repetitie · try-out · voorstelling*). Interne types (*Leons White
> Page · Leon rond de tafel*) blijven zichtbaar op `/agenda` zelf maar niet in deze
> preview — houdt de "kom langs"-leesrichting van de home schoon. Te bevestigen.

---

## §5 — Werk je samen met Leon?

**h2:**

> Werk je samen met Leon?

**Intro** (1 zin):

> Drie manieren om met Leon in zee te gaan:

**Links (3 × text-link rij, werkwoord vooraan per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas)):**

> → Een participatief dansproject opzetten
> → De mobiele dansstudio uitnodigen
> → Vrijwilligerswerk of stage doen

> ✓ "Vrijwilligerswerk of stage doen" wordt vermeld op de home; P-11 zelf blijft
> placeholder tot Dn-19 (persona + team-emailcorpus) landt.

---

## §6 — Onze partners

**h2:**

> Onze partners

**Tier captions** (uit [SP-09 spec](../41-patterns.md#sp-09--funder--partner-wall)):

> Met steun van
> Co-producenten
> Speelplekken
> In samenwerking met

> ⚠️ **Echte partner-data (gap #4):** Sam/Kristin SharePoint-extractie pending. Strawman
> in de [01-home brief](01-home.md) ASCII-wireframe is illustratief — Vl.overheid · VGC
> · Stad Brussel · Polsslag Brussel · KANAL · KVS · Pianofabriek · Maison des Cultures
> · La Monnaie · CAMPO · MUS-E · Ketmet · RITCS — verifiëren + completeren.

---

## SEO / `<head>` strawman

**`<title>`:**

> Leon — participatieve dans in Brussel

**`<meta name="description">`:**

> Een open uitnodiging om mee te dansen, in een wekelijks open atelier of in grotere
> participatieve voorstellingen. In Brussel sinds 2010.

> *Layout-partial gebruikt `$title ?? 'Leon'` + `$description ?? '...'`; home overrijdt
> beide via `@extends('layouts.app', ['title' => '…', 'description' => '…'])`.*

---

## TOV-checklist (per [identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Uitnodigend, niet missionerend** — h1 is een uitnodiging, geen mission statement.
- [x] **Concreet** — datums (sinds 2010), plaatsen (Pianofabriek · Maison des Cultures),
      duur (zes maanden), aantal (zes edities), gratis.
- [x] **Warm zonder zoetsappig** — *"kom langs"*, je-vorm, geen uitroeptekens, geen
      *iedereen-welkom*-clichés.
- [x] **Toonbaar in plaats van prijzend** — geen *uniek · bekroond · vernieuwend* in
      deze copy. Partner-wand + edities = bewijs door tonen.
- [x] **Plain, niet schools** — geen *werking · creatie · traject* (publieksbreed) ·
      *empoweren* · *bruggen bouwen*.
- [x] **Eén lezer per pagina** — home leest P1 (belonging dial) met P2 als gewicht in
      één regel (jury band) — niet twee aparte blokken.

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 NL h1 + lede | open | **🟠 strawman** | TOV-voorbeeld voor h1; lede zet §3 op |
| #2 Hero photo | open | unchanged | asset/Surface decision |
| #3 Jury band wording | open | **🟠 strawman** | "Sinds 2010" framing + activity-zin; jaartal te bevestigen |
| #4 Partner data | open | unchanged | wacht op SharePoint |
| #5 Card-cover photos | open | unchanged | asset/Surface |
| #6 Agenda backend feed | open | unchanged | Frederik-research |
| #7 Public-only filter | open | **🟠 strawman** | aanbevolen + gedocumenteerd; te bevestigen |
| ~~#8~~ Mobile sketch | closed | closed | added to brief in second pass |

**Gaps closed to strawman: 3 of 7 remaining.** Pages-to-final still depends on
team review (#1, #3) + team data extraction (#4) + Surface decisions (#2, #5) +
Frederik research (#6).

## Cross-links

- Brief (structure): [01-home.md](01-home.md)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md)
- Vocabulary: [glossary](../../glossary.md)
- Patterns: [41-patterns.md](../41-patterns.md) (SP-05 card, SP-07 row, SP-09 wall, SP-13 photo)
- Agenda cadence reference: [discovery/26-agenda-analysis](../../discovery/26-agenda-analysis.md)
