---
title: P-02 Dansateliers & performances — NL content strawman
tags: [design, skeleton, content, dansateliers, page-level, nl, index]
sources: [42-briefs/02-dansateliers-performances; identity/10-tone-of-voice; glossary; 30-structure; 42-briefs/01-home-content]
phase: design
page-id: P-02
slug: /dansateliers-performances
language: nl
updated: 2026-05-28
---

# P-02 Dansateliers & performances — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Kristin review for
> accuracy + tone-finalisation.
> Lifts brief gaps **#1** (per-card desc) + **#3** (lede wording) from
> [02-dansateliers-performances brief](02-dansateliers-performances.md) to strawman level.
> **Open against final:** gap #2 (per-child cover photos × 4 — Surface plane).
> **Sister:** [02-dansateliers-performances.md](02-dansateliers-performances.md) (structure brief).

## Tone discipline applied

Per [identity/10-tone-of-voice §Dansateliers & performances](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie):
**belonging dial.** Leid met de mens of het beeld. Praktische info hoog op de pagina.
Geen sales-blok, geen jury-band — index-pagina blijft een doorgang. Vermeden uit
[TOV §Verboden in publieke copy](../../identity/10-tone-of-voice.md#verboden-in-publieke-copy):
*duurzaam · laagdrempelig · inclusief · diversiteit · creatie · werking · traject*
(behalve waar concreet ingebed in *"danstraject van zes maanden"*) *· uniek · bekroond ·
empoweren · bruggen bouwen*.

---

## §1 — Subpage top

**Eyebrow** (`.meta uppercase tracking-wide`, BG-1 — static, not a link):

> WAT LEON MAAKT

**h1** (verbatim nav-label per [30-structure](../30-structure.md)):

> Dansateliers & performances

**Lede** (1 zin · noemt alle 4 kinderen in hun elevator-woorden, zet §2 op):

> Vier ingangen op één plek — een wekelijks open atelier, begeleide trajecten op
> school en in zorg, een participatieve voorstelling in zes edities, en een mobiele
> dansstudio die je kan uitnodigen.

> ⚠️ **Te bevestigen door Kristin (gap #3):**
> - "Begeleide trajecten op school en in zorg" omvat *Leon op school* (scholen,
>   welzijn, zorg). Reads dat warm of catalogus-achtig? Alternatief: "begeleide
>   trajecten in klaslokalen en zorgcentra" (concreter) of "begeleide groepen op
>   school en in de zorg" (mensen-eerst).
> - "In zes edities" — kan ook *"meerdere edities"* worden als Mariage een 7e
>   krijgt voor v1 live gaat. Concrete getallen verkozen per TOV.

---

## §2 — Vier ingangen (cards)

**Cards (4 × SP-05 · titel + 2-line desc · whole card = link):**

| # | Title | Description (NL strawman, ~12–18 woorden) | Link |
|---|---|---|---|
| 1 | **Atelier Leon** | Open dansatelier — woensdagavond in de Pianofabriek, zaterdagmiddag in de Maison des Cultures. Gratis, geen inschrijving. | `/dansateliers-performances/atelier-leon` |
| 2 | **Leon op school** | Een begeleid danstraject van zes maanden, samen met scholen, welzijnsorganisaties en zorgcentra. | `/dansateliers-performances/leon-op-school` |
| 3 | **Mariage** | Een participatieve voorstelling in zes edities — telkens met een vaste kerngroep en een lokale groep uit de stad. | `/dansateliers-performances/mariage` |
| 4 | **Mobiele dansstudio** | Een verplaatsbare dansruimte die je kan uitnodigen op je eigen plek — een school, een plein, een buurtfeest. | `/dansateliers-performances/mobiele-dansstudio` |

> ⚠️ **Te bevestigen door Sam/Kristin (gap #1):**
> - **Atelier Leon dagen/locaties** — *woensdagavond / zaterdagmiddag* + Pianofabriek /
>   Maison des Cultures verifiëren tegen actuele kalender. (Verschilt eventueel per
>   seizoen — als instabiel: terugvallen op *"wekelijks in de Pianofabriek en de Maison
>   des Cultures"* zonder dagen.)
> - **"Zes maanden"** voor Leon op school — verifieer of cadens varieert per partner;
>   alternatief *"een begeleid danstraject van enkele maanden"* (vaag-bewust) of
>   *"begeleid traject — gemiddeld zes maanden"* (eerlijker bij variatie).
> - **"Zes edities"** voor Mariage — zelfde caveat als lede.
> - **Mobiele dansstudio voorbeelden** — *school / plein / buurtfeest* gekozen om
>   P1 + P4 lezers de breedte te tonen; bevestigen of dat de bedoelde range is, of dat
>   we hier alleen B2B-publieke ruimte willen tonen.

**Card covers (gap #2):** Surface-plane beslissing per [Dn-20](../01-concerns.md).
v0.1 rendert text-only (SP-05 variant B); mixed grids geaccepteerd zodra eerste asset
landt (per [02-brief BG-6](02-dansateliers-performances.md#best-guess-decisions-read-first)).

---

## §3 — Agenda hook

**h2** (vragende kop, belonging dial):

> Wil je weten wat er deze week loopt?

**Paragraph** (1 zin, plain):

> De agenda verzamelt alle ateliers, repetities, try-outs en voorstellingen in één lijst.

**Link** (afsluiter, `btn-text`, werkwoord weggelaten — bestemming-eerst is hier OK
omdat de volledige zin erboven al een werkwoord-gestuurde uitnodiging is):

> → Volledige agenda

> ✓ Geen empty-state nodig — §3 verwijst, populariteit van data zit op `/agenda` zelf.
>   Als de agenda leeg is, lost de copy op `/agenda` dat op (per [01-home-content §4](01-home-content.md)).

---

## SEO / `<head>` strawman

**`<title>`:**

> Dansateliers & performances — Leon

**`<meta name="description">`:**

> Vier ingangen bij Leon — een wekelijks open atelier, een begeleid danstraject op
> school, de participatieve voorstelling Mariage en een mobiele dansstudio.

> *Layout-partial gebruikt `$title ?? 'Leon'` + `$description ?? '...'`; deze pagina
> overrijdt beide via `@extends('layouts.app', ['title' => '…', 'description' => '…'])`.*

---

## TOV-checklist (per [identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Uitnodigend, niet missionerend** — lede vat aanbod samen zonder mission-statement;
      cards openen met *wat het is*, niet met *wat Leon vindt*.
- [x] **Concreet** — Pianofabriek · Maison des Cultures · zes maanden · zes edities ·
      gratis · zonder inschrijving. Datum, plaats, naam, getal aanwezig.
- [x] **Warm zonder zoetsappig** — je-vorm in card-tekst (*"die je kan uitnodigen"*);
      geen uitroeptekens, geen *iedereen-welkom*-clichés.
- [x] **Toonbaar in plaats van prijzend** — geen *uniek · bekroond · vernieuwend ·
      vooruitstrevend* in deze copy. Cards beschrijven, claimen niet.
- [x] **Plain, niet schools** — *traject* alleen ingebed in concreet *"danstraject van
      zes maanden"* (gangbaar NL); geen *werking · creatie · empoweren · co-creatie ·
      multidisciplinair · intergenerationeel*.
- [x] **Eén lezer per pagina** — index leest P1 (nieuwsgierige) als hoofdpubliek; P4
      partner-coördinator routes via Samenwerken (nav, niet hier).

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 Per-card 2-line desc | open | **🟠 strawman** | 4 NL elevator-lines geschreven; verifiëren met Sam/Kristin (dagen, "zes maanden", "zes edities") |
| #2 Cover photo × 4 | open | unchanged | asset/Surface plane decision |
| #3 Lede wording | open | **🟠 strawman** | 1-zin samenvatting; tone-check Kristin |

**Gaps closed to strawman: 2 of 3.** Page-to-final wacht op team verify (#1, #3) +
Surface plane assets (#2).

---

## Cross-links

- Brief (structure): [02-dansateliers-performances.md](02-dansateliers-performances.md)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md)
- Vocabulary: [glossary](../../glossary.md)
- Patterns: [41-patterns.md](../41-patterns.md) (SP-04 header variant C, SP-05 card)
- Sibling content: [01-home-content](01-home-content.md) (home §3 carries 1-line versie van dezelfde 4 cards)
