---
title: P-18 Contact — NL content strawman
tags: [design, skeleton, content, contact, page-level, over-leon, nl]
sources: [42-briefs/18-contact; identity/10-tone-of-voice; glossary; raw/current-site/pages/contact.md (verified 2026-05-19 capture)]
phase: design
page-id: P-18
slug: /over-leon/contact
language: nl
updated: 2026-05-28
---

# P-18 Contact — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Kristin tone pass + Sam
> data-confirm. Contact details lifted **verbatim** from the [current-site mirror](../../../raw/current-site/pages/contact.md)
> (snapshot 2026-05-19) — these are real, not invented, but need a *"still correct?"*
> sign-off.
> **Sister:** [18-contact.md](18-contact.md) (structure brief — patterns, sections, states).

## Tone discipline applied

Per [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact):
**institutional dial mag hier hoger.** Rustig, niet apologetisch, niet schreeuwerig.
Per [§empty states & 404](../../identity/10-tone-of-voice.md#empty-states--404): een
mens reageert, geen systeem — daarom geen formulier-CTA in v1, geen *"We horen graag
van u!"*-marketing. De e-mail staat vooraan en is letterlijk het contract.
Verboden in publieke copy nageleefd: geen *uniek · bekroond · duurzaam · laagdrempelig
· inclusief · empoweren*; geen uitroeptekens.

---

## §1 — Subpage top

**Eyebrow** (`.meta uppercase tracking-wide`, links to `/over-leon`):

> OVER LEON

**h1:**

> Contact

**Lede** (2 zinnen, registert-routes naar §3):

> Mail, bel of kom langs. Heb je een specifieke vraag — een project opzetten, de
> mobiele dansstudio boeken, meedoen — kies dan hieronder de juiste ingang.

> ⚠️ **Te bevestigen door Kristin (gap #4):**
> *"Mail, bel of kom langs"* leest warm-en-kort, maar misschien iets te informeel voor
> de Over Leon-context. Alternatief: *"Schrijf, bel of kom langs."* (formeler) of
> *"Stuur ons een mailtje, bel of kom langs."* (warmer). De huidige voorkeur volgt de
> TOV-regel *werkwoord vroeg, actief, kort* — *"Mail, bel of kom langs"* doet alle
> drie.

---

## §2 — Algemeen

**h2:**

> Algemeen

**Blok 1 — Stuur een mail** (`h3 label`):

> **Stuur een mail**
> [hello@leon.dance](mailto:hello@leon.dance)

**Blok 2 — Of bel ons** (`h3 label`):

> **Of bel ons**
> [+32 456 91 26 41](tel:+32456912641)

**Blok 3 — Of stuur een kaartje** (`h3 label`):

> **Of stuur een kaartje**
> Leon vzw
> Weilandstraat 46
> 1082 Bruxelles
>
> BTW 0769.579.192

> ⚠️ **Te bevestigen door Sam (gap #1):** snapshot dateert van 2026-05-19. E-mailadres,
> telefoonnummer, postadres, BTW — allemaal vandaag nog correct? Indien ja: lock.
> Indien iets verschuift: één plek waar het verandert (deze pagina §2 + footer-link).

---

## §3 — Met een specifieke vraag

**h2:**

> Met een specifieke vraag

**Rijen (4 × text-link, werkwoord vooraan per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas)):**

| # | Label (werkwoord vooraan) | Sub-line (`.meta`) | Link |
|---|---|---|---|
| 1 | **→ Werk samen aan een project** | Een participatief dansproject opzetten met je groep, school, organisatie of stad. | `/samenwerken/opzetten` |
| 2 | **→ Boek de mobiele dansstudio** | Een verplaatsbare dansruimte boeken voor een week, een festival of een zomerformule. | `/samenwerken/uitnodigen` |
| 3 | **→ Doe mee als deelnemer** | Kom langs in Atelier Leon, schrijf je in voor een editie, of bekijk wat eraan komt in de agenda. | `/agenda` |
| 4 | **→ Word vrijwilliger of stagiair** | Meewerken aan repetities, voorstellingen of dagelijkse werking. **`[in voorbereiding]`** | `/samenwerken/doen` |

> ⚠️ **`[in voorbereiding]` tag (gap #3):** dezelfde wording als [P-08 BG-4](08-samenwerken.md);
> alternatieven blijven `[binnenkort]` / `[in opbouw]` / `[komt eraan]`. Voor consistentie
> tussen de twee pagina's één keer kiezen en op beide tegelijk toepassen.

> ✓ Per-row href verifieerd tegen huidige routes (`routes/web.php`): `samenwerken.opzetten`,
> `samenwerken.uitnodigen`, `agenda`, `samenwerken.doen` — allemaal benoemd en routeerbaar.

---

## §4 — Bezoekadres

**h2:**

> Kom langs op het bureau

**Adresblok:**

> **Lion City**
> Ossegemstraat 53
> 1080 Sint-Jans-Molenbeek

**Map placeholder** (per [brief BG-5](18-contact.md)):

```
┌──────────────────────────────────────────────────────────────┐
│                                                              │
│   Kaartje (OpenStreetMap, Leaflet) — landt in Surface        │
│                                                              │
│   Bekijk op OpenStreetMap →                                  │
│                                                              │
└──────────────────────────────────────────────────────────────┘
```

- Link: `https://www.openstreetmap.org/?mlat=50.8616&mlon=4.3300&zoom=17` (Sint-Jans-
  Molenbeek approx — gap #2: refine coords als Sam de exacte locatie van Lion City
  bevestigt).
- Per CLAUDE.md *"Maps when needed: OpenStreetMap + Leaflet.js only — never Google
  Maps/Mapbox."* Leaflet integratie wacht op Surface plane (gap #6).

**h3 — Of vind ons in een open atelier:**

> **Woensdag** · Pianofabriek, rue du Fortstraat 35, 1060 Sint-Gillis
> **Zaterdag** · Maison des Cultures, 1080 Sint-Jans-Molenbeek

> ✓ Drop-in spots verifieerd tegen de [current-site contact mirror](../../../raw/current-site/pages/contact.md):
> *"Every Wednesday from 16:00 > 18:00 at GC Pianofabriek rue du Fortstraat 35, 1060 St
> Gillis"* + *"Every Saturday from 10:00 > 12:00 at Maison des Cultures in 1080 Sint-
> Jans-Molenbeek."* Tijden zijn weggelaten in §4 — die staan op P-03 Atelier Leon (één
> canonieke plek per feit); §4 toont alleen de *fysieke aanwezigheid* als "waar vind je
> Leon vandaag".

---

## SEO / `<head>` strawman

**`<title>`:**

> Contact — Leon

**`<meta name="description">`:**

> Mail ons op hello@leon.dance, bel +32 456 91 26 41, of kom langs op het bureau in
> Sint-Jans-Molenbeek. Drie ingangen voor specifieke vragen: een project opzetten, de
> mobiele dansstudio boeken, of meedoen.

> *Layout-partial gebruikt `$title ?? 'Leon'` + `$description ?? '...'`; deze pagina
> overrijdt beide via `@extends('layouts.app', ['title' => '...', 'description' => '...'])`.*

---

## TOV-checklist (per [§Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Eén lezer per pagina** — de pagina richt zich op *iedereen die Leon wil bereiken*;
      register-routing gebeurt expliciet in §3 (geen iedereen-tegelijk-bedienen op één regel).
- [x] **Werkwoord vroeg, actief** — *"Stuur een mail"*, *"Of bel ons"*, *"Of stuur een
      kaartje"*, *"Kom langs op het bureau"*; geen passieve zinnen.
- [x] **Concreet vroeg** — E-mail, telefoonnummer, postadres staan letterlijk op de pagina
      vóór de visitor twee zinnen ver is.
- [x] **Tonen, niet claimen** — Geen *"We horen graag van u"*, geen *"Wij staan altijd
      voor u klaar"*. De e-mail toont de openheid; geen claim nodig.
- [x] **Verboden woorden eruit** — Geen *uniek · bekroond · duurzaam · laagdrempelig ·
      inclusief · creatie · werking · empoweren · passioneel*. Geen uitroeptekens.
- [x] **Eén CTA** — N/A op contact-pagina; e-mail-blok is de impliciete primaire actie
      (per [brief BG-1](18-contact.md) — geen formulier in v1).
- [x] **Twee-publiektest** — Een buurtbewoner (P1) snapt *"Stuur een mail naar
      hello@leon.dance"*. Een jurylid (P2) leest een rustige, feitelijke kontaktpagina
      zonder marketing-vernis. Beide bediend.

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 Confirm contact details | open | **🟠 strawman** | data verbatim uit current-site mirror; awaiting Sam confirm |
| #2 Lion City OSM coords | open | **🟠 strawman** | Sint-Jans-Molenbeek-approx ingevuld; refine on Sam confirm |
| #3 `[in voorbereiding]` tag | open | **🟠 strawman** | aligned with P-08 BG-4; one-time decision across both pages |
| #4 Lede tone pass | open | **🟠 strawman** | three TOV-aligned alternatives noted in §1 |
| #5 Form arrival | open | unchanged | Future v1.x — Dn-03 GDPR dependency |
| #6 Leaflet bootstrap | open | unchanged | Surface plane — placeholder ships v1 |
| #7 Social handles | open | unchanged | optional polish; not v1 blocker |
| #8 Per-row href review | open | **🟠 strawman** | routes verifieerd; BG-7 decision documented |

**Gaps closed to strawman: 5 of 8 remaining.** Page-to-final depends on Sam confirm
(#1, #2) + Kristin tone pass (#3, #4). #5–#7 are deliberate post-v1 items.

## Cross-links

- Brief (structure): [18-contact.md](18-contact.md)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md) (§Over Leon · §empty states & 404 · §CTA's · §Checklist)
- Vocabulary: [glossary](../../glossary.md)
- Verified source: [`docs/raw/current-site/pages/contact.md`](../../../raw/current-site/pages/contact.md) (2026-05-19 capture)
- Sibling content: [01-home-content](01-home-content.md) · (P-08 content sibling pending)
- Patterns: [41-patterns.md](../41-patterns.md) (SP-04 subpage top; routing list still local pattern across P-01 / P-08 / P-18)
