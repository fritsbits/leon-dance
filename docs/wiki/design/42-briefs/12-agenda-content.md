---
title: P-12 Agenda — NL content strawman
tags: [design, skeleton, content, agenda, page-level, nl]
sources: [42-briefs/12-agenda; identity/10-tone-of-voice §Agenda + §Empty states; glossary; App\Enums\EventType]
phase: design
page-id: P-12
slug: /agenda
language: nl
updated: 2026-05-28
---

# P-12 Agenda — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Kristin review for
> accuracy + tone-finalisation.
> Closes [12-agenda brief](12-agenda.md) gaps for empty states + filter labels +
> internal-event explainers (to strawman level).
> **Open against final:** gap #2 (Sam/Kristin verify internal explainers) ·
> gap #3 (Kristin verify "Klas" filter label readability for P1).
> **Sister:** [12-agenda.md](12-agenda.md) (structure brief — patterns, sections, states).

## Tone discipline applied

Per [identity/10-tone-of-voice §Agenda](../../identity/10-tone-of-voice.md#agenda):
**neutraal, datum-eerst.** Wordt gescand — geen redactionele toon. Eén regel per
item: datum · tijd · type · plaats. Geen redactionele warmte; de warmte zit in de
pagina's waarheen de agenda linkt.

Verboden in publieke copy nageleefd: geen *duurzaam · laagdrempelig · inclusief ·
diversiteit · creatie · werking · traject · uniek · bekroond · empoweren*.

---

## §1 — Subpage top

**Eyebrow** (`.meta uppercase tracking-wide`):

> EÉN OVERZICHT

**h1:**

> Agenda

**Lede** (1 zin, utility-neutraal per BG-6):

> Alles wat Leon doet, op één plek. Filter op type of op project.

> ✓ Geen tweede zin nodig — de pagina IS zichzelf-uitleggend zodra de filters + lijst eronder staan. Anti-bloat per [40-skeleton §Section budgets](../40-skeleton.md#section-budgets-anti-bloat-ceiling-per-playbook).

---

## §2 — Filter labels

### Filter-axe-headers (visible labels boven elk `<select>`)

| Filter | NL label | Notes |
|---|---|---|
| Type | **Type** | Bondig; volgt enum-vocabulaire (per [Glossary](../../glossary.md)) |
| Praktijk | **Praktijk** | Recurring practice — *Atelier Leon / Leon op school*. Plain NL, matcht hoe Leon-team zelf ernaar verwijst |
| Project | **Project** | Per [Glossary](../../glossary.md): `project` vervangt `creatie`. Eén project tot nu toe (*Mariage*); *Kosmos 2027* volgt |

### Type-dropdown values (`EventType::label()`)

Reeds gedefinieerd in [`App\Enums\EventType::label()`](../../../../app/Enums/EventType.php) — herhaald hier voor referentie:

| Enum case | NL label | Intern? |
|---|---|---|
| `OpenAtelier` | Open atelier | nee |
| `Klas` | Klas | nee (zie open gap #3) |
| `Repetitie` | Repetitie | nee |
| `TryOut` | Try-out | nee |
| `Voorstelling` | Voorstelling | nee |
| `LeonsWhitePage` | Leons White Page | **ja** |
| `LeonRondDeTafel` | Leon rond de tafel | **ja** |

**Intern-suffix in dropdown** (rendering-detail, zichtbaar in `<option>`):

> Leons White Page (intern)
> Leon rond de tafel (intern)

> ⚠️ **Open (gap #3):** "Klas" als losse filter-label — voor de team helder ("klas-context: Leon in de klas"), maar P1-newcomer leest het mogelijk als school-vak. Alternatief: `Klas (in scholen)`. Te bevestigen door Kristin.

### Practice-dropdown values

| Slug | NL label |
|---|---|
| (alles) | — alle praktijken — |
| `atelier-leon` | Atelier Leon |
| `leon-op-school` | Leon op school |

### Project-dropdown values

| Slug | NL label |
|---|---|
| (alles) | — alle projecten — |
| `mariage` | Mariage |

### View toggle

| State | Label |
|---|---|
| upcoming (default) | **Eerstvolgende** |
| past (`?past=1`) | **Voorbij** |

### Clear-filters link

> Wis filters

(`btn-text`, rendert alleen wanneer ≥ 1 filter actief is.)

---

## §3 — Internal-event 1-line explainers

Per [30-structure IA principle 5](../30-structure.md): internal events appear
by default with a 1-line explainer (no landing page).

| EventType | NL explainer (max 1 zin · `.meta text-faint`) |
|---|---|
| `LeonsWhitePage` | Intern denkmoment — geen publiek programma. |
| `LeonRondDeTafel` | Intern overleg — geen publiek programma. |

> ✓ Beide zinnen volgen dezelfde vorm: **wat het is + waarom het hier staat zonder een uitnodiging**. Anti-vraag: "moet ik me inschrijven?" beantwoord vooraf.

> ⚠️ **Open (gap #2):** Te bevestigen door Sam — is *"intern denkmoment"* de juiste interne karakterisering van *Leons White Page*? Alternatieven: *"intern reflectie-moment"*, *"interne werkdag"*. Idem voor *Leon rond de tafel*: *"intern overleg"* vs. *"interne ronde-tafelgesprek"*.

---

## §3b — Per-row meta-line structure

Een rij toont op één meta-regel: `{type} · {lead}` met optioneel `· x {partners}`.
Geen extra punctuatie; bullet-separator (`·`) tussen velden.

**Voorbeelden** (op basis van [EventSeeder](../../../../database/seeders/EventSeeder.php)):

> Open atelier · Lena
> Open atelier · Seppe
> Klas · Stef
> Klas · Kristin, Adnane
> Repetitie · Adnane · x MUS-E
> Repetitie · Seppe · x Ketmet
> Voorstelling · Team Leon
> Leon rond de tafel · Team Leon
>
> *(internal-row gevolgd door 2e meta-regel:)*
> Intern overleg — geen publiek programma.

---

## §4 — Empty states

Per [TOV §Empty states & 404](../../identity/10-tone-of-voice.md#empty-states--404):
*"Een mens reageert, geen systeem."*

### Filtered-zero (≥ 1 filter actief, 0 resultaten)

> Geen activiteiten gevonden voor deze filters.

Gevolgd door, op nieuwe regel:

> [Wis filters]

### Agenda-zero (geen filters, geen events überhaupt)

> Nog niets gepland. Stuur ons een mailtje als je iets zoekt: [hallo@leon.dance](mailto:hallo@leon.dance).

> ✓ Twee aparte empty-states zodat de lezer weet of het probleem aan de filter ligt (verbreden) of aan de agenda zelf (contact opnemen).

### Past-view-zero (toggle staat op "Voorbij", maar er staan geen past events)

> Nog geen voorbije activiteiten in beeld.

(Edge case; zou alleen voorkomen op een verse install.)

---

## §5 — Group headings (per-month)

Format: `{maand} {jaar}` in volle NL-naam, kleine letter (zoals Carbon's NL locale levert).

**Voorbeeldweergave:**

> juni 2026
> juli 2026
> augustus 2026
> …

Implementatie: `$event->starts_at->isoFormat('MMMM YYYY')` met
`Carbon::setLocale('nl')`. Header rendert als `<h2>` met `border-t` erboven.

---

## SEO / `<head>` strawman

**`<title>`:**

> Agenda — Leon

**`<meta name="description">`:**

> Alles wat Leon doet: open ateliers, repetities, voorstellingen en interne momenten. Filter op type of op project.

> *Layout-partial gebruikt `$title ?? 'Leon'` + `$description ?? '...'`; agenda overrijdt beide via `@extends('layouts.app', ['title' => '…', 'description' => '…'])`.*

---

## TOV-checklist (per [identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Uitnodigend, niet missionerend** — n/a hier: agenda is utility, geen uitnodiging op pagina-niveau (warmte zit in de doel-pagina's per [TOV §Agenda](../../identity/10-tone-of-voice.md#agenda)).
- [x] **Concreet** — datums, uren, namen (lead), plaatsen, types — niets abstract.
- [x] **Warm zonder zoetsappig** — empty state spreekt menselijk (*"Stuur ons een mailtje"*), niet *"Error 404"*.
- [x] **Toonbaar in plaats van prijzend** — agenda is per definitie *tonen*: hier zijn de data. Geen claims.
- [x] **Plain, niet schools** — geen vaktaal. Eén twijfel: *"Klas"* als filter-label (gap #3) — kan verkeerd lezen door P1.
- [x] **Eén lezer per pagina** — agenda is bewust *dual* (P1 utility + P2 proof-density). Dat is een [30-structure IA principle 5](../30-structure.md) keuze; pagina dient beide door 1) datum-eerst neutraliteit (P1 leest direct), 2) volledigheid van alle types incl. intern (P2 ziet dichtheid).

---

## Per-gap status update (vs. [12-agenda brief](12-agenda.md))

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #2 Internal-event explainers | open | **🟠 strawman** | "Intern denkmoment / Intern overleg" — verifiëren met team |
| #3 "Klas" filter label | open | **🟠 strawman** | Hier behouden; alternatief aangeboden voor Kristin |
| #1 Project list | open | unchanged | Mariage v0.1; Kosmos 2027 volgt |
| #4 ICS export | deferred | deferred | Dn-03 GDPR pending |
| #5 Inschrijving column | deferred | deferred | Dn-03 GDPR + Dn-11 ESP pending |
| #6 Per-row editie routing | open | unchanged | Frederik research — voorstelling met `editie_slug` → P-06 editie page wenselijk |
| #7 Past-view scope | open | unchanged | Sam/Kristin |

**Gaps closed to strawman: 2 of 7 actionable** (de overige zijn deferred of `[research]`-blokken).

## Cross-links

- Brief (structure): [12-agenda.md](12-agenda.md)
- Tone: [identity/10-tone-of-voice §Agenda](../../identity/10-tone-of-voice.md#agenda) + [§Empty states](../../identity/10-tone-of-voice.md#empty-states--404)
- Vocabulary: [glossary](../../glossary.md)
- Patterns: [41-patterns.md](../41-patterns.md) (SP-04 subpage top, SP-07 date-row reference)
- Evidence: [discovery/26-agenda-analysis](../../discovery/26-agenda-analysis.md)
