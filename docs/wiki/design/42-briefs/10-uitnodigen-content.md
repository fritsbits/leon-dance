---
title: P-10 Mobiele dansstudio uitnodigen — NL content strawman
tags: [design, skeleton, content, samenwerken, uitnodigen, page-level, nl]
sources: [42-briefs/10-uitnodigen; identity/10-tone-of-voice §Samenwerken; glossary; 30-structure §Samenwerken — children; strategy/40-value-proposition (P3 institutional dial)]
phase: design
page-id: P-10
slug: /samenwerken/uitnodigen
language: nl
updated: 2026-05-28
---

# P-10 Mobiele dansstudio uitnodigen — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Sam/Kristin review for
> accuracy (technische fiche, SLA, contact-owner) + Dn-03 GDPR resolution for the live
> form.
> Lifts gaps **#1** (fiche numbers — placeholders only) · **#3** (1-week SLA — committed
> in copy, te bevestigen) · **#6** (4 use-cases — strawman list) from
> [10-uitnodigen brief](10-uitnodigen.md) to strawman level.
> **Open against final:** gap #2 (cost-frame) · #4 (Dn-03 form) · #5 (contact-owner) ·
> #7 (P-07 canonical must catch up to carry the deep-fiche + PDF this page links to).
> **Sister:** [10-uitnodigen.md](10-uitnodigen.md) (structure brief — patterns, sections,
> states, BG-decisions).

## Tone discipline applied

Per [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen):
**hybride dial, leunend institutional.** Voor het programmator-pad: feiten, dossier,
contact. Geen marketing-toon. Eén lezer (P3) — geen P1-warmte op deze pagina.

Verboden in publieke copy nageleefd: geen *duurzaam · laagdrempelig · inclusief ·
diversiteit · creatie · werking · traject · uniek · bekroond · vernieuwend · empoweren ·
bruggen bouwen · passie*. *Werking* en *traject* zouden hier extra gauw insluipen — vermeden.

Glossary-trouw: *mobiele dansstudio* (publiek; geen *"de fiets"*), *voorstelling*,
*publiek* (niet *toeschouwer*), *aanvraag* (niet *inschrijven* — voor programmatoren is
het een boeking, geen inschrijving per [glossary copy notes](../../glossary.md#copy-notes-page-level-when-writing-the-content-complete-draft)).

---

## SEO / `<head>` strawman

**`<title>`:**

> De mobiele dansstudio uitnodigen — Leon

**`<meta name="description">`:**

> Voor programmatoren en organisatoren die Leon's mobiele dansstudio een week of een
> seizoen op hun plek willen. Technische fiche, kostenkader, en hoe een boeking verloopt.

> *Layout-partial overrijdt via `@extends('layouts.app', ['title' => '…', 'description' => '…'])`.*

---

## §1 — Subpage top (SP-04 variant A)

**Eyebrow** (`.meta uppercase tracking-wide`, links naar `/samenwerken`):

> SAMENWERKEN

**h1** (verb-led per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas)):

> De mobiele dansstudio uitnodigen

**Lede** (1 zin, P3-framed):

> Voor programmatoren, organisatoren en gemeentediensten die de mobiele dansstudio een
> week of een seizoen op hun plek willen.

---

## §2 — Wat is de mobiele dansstudio?

**h2:**

> Wat is de mobiele dansstudio?

**Body** (3 zinnen — beschrijving + verwijzing naar P-07 canonical):

> Een verplaatsbare dansvloer op een fietsaanhangwagen. We brengen hem naar pleinen,
> scholen en festivals — een dansplek die naar de mensen toe komt, niet andersom. De
> volledige beschrijving, de zomerformule en het beeldarchief vind je op de pagina van
> de mobiele dansstudio zelf.

**Link** (`btn-text`):

> → Lees meer over de mobiele dansstudio  →  `/dansateliers-performances/mobiele-dansstudio`

> ⚠️ **Canonical-discipline (gap #7):** als P-07 zelf nog stub is, leest deze link
> voorlopig als een belofte die de overkant niet inlost. Zodra P-07 zijn eigen content
> brief krijgt, vult deze link automatisch.

---

## §3 — Wanneer past het?

**h2:**

> Wanneer past het?

**Intro** (2 zinnen — disqualificeert *"theater-zaal"*-aanvraag rustig):

> De mobiele dansstudio werkt het best op plekken waar mensen al langs komen — pleinen,
> festivals, schoolpoorten, parken. Niet in een afgesloten zaal: het ding is gebouwd
> voor de open ruimte.

**Vier contexten** (lijst, label-vooraan, ≤12 woorden per item):

> · **Festivals** — als zichtbare dansplek tussen het programma door.
> · **Publieke ruimte** — pleinen, parken, woonwijken, marktdagen.
> · **Zomerprogrammatie** — een week of meer op één locatie, met dagelijkse momenten.
> · **Projectweken** — scholen, jeugdwerk, buurthuizen, vakantiekampen.

> ⚠️ **Te bevestigen (gap #6):** zijn dit de vier contexten waar de mobiele dansstudio
> al gestaan heeft? Aanvullen of bijsturen met de track record op P-07 als referentie.

---

## §4 — Praktisch

**h2:**

> Praktisch

### Technische fiche

**h3:**

> Technische fiche

**Bullets** (4 lijnen, placeholder-getallen — gap #1):

> · **Afmetingen:** [L × B × H] uitgeklapt · transport op een fietsaanhanger.
> · **Stroom:** standaard 230 V · opbouw door één of twee mensen.
> · **Op- en afbouw:** ongeveer [30 minuten] · binnen redelijke marge weersbestendig.
> · **Vloer:** [type] · geschikt voor blote voeten én dansschoenen.

**Link** (`btn-text`):

> → Volledige technische fiche (PDF) op de pagina van de mobiele dansstudio  →
> `/dansateliers-performances/mobiele-dansstudio`

> ⚠️ **Te invullen (gap #1):** vier concrete waarden uit Sam/Kristin halen — afmetingen
> in cm, opbouwtijd in minuten, vloer-type (linoleum / hout / …), stroom-detail
> (verbruik · stopcontact-type · verlengkabel-eis). PDF op P-07 nog niet bestaand —
> als referentie naar PDF moet, eerst PDF maken.

### Wat het kost

**h3:**

> Wat het kost

**Body** (3 zinnen — frame, geen prijs):

> Een vergoeding in overleg, afhankelijk van duur, locatie en context. We hanteren
> geen vaste prijslijst — een week op een festival is iets anders dan een namiddag op
> een schoolplein. We bekijken het per aanvraag en sturen je een voorstel.

> ⚠️ **Te bevestigen (gap #2):** is *"in overleg"* het juiste frame, of komt er ooit
> een richtbedrag of dagprijs op deze pagina? Per [Dn-05 Closed](../01-concerns.md):
> geen ticketing/payments-systeem. Per [Dn-18 Closed](../01-concerns.md): contact-
> request only, geen booking-engine. *In overleg* respecteert beide.

---

## §5 — Hoe verloopt een boeking

**h2:**

> Hoe verloopt een boeking

**Drie stappen** (`<ol>` — order locked):

> 1. **Kennismaking.** Stuur ons een mail met je context: waar, wanneer en voor welk
>    publiek. We reageren binnen een week.
> 2. **Fiche en afspraken.** We sturen de volledige technische fiche en maken een
>    voorstel voor duur, kost en op- en afbouw.
> 3. **Datum vastleggen.** Eens we akkoord zijn, blokkeren we de datum en starten we
>    de praktische voorbereiding samen.

> ⚠️ **Te bevestigen (gap #3):** *"binnen een week"* is een belofte. Als het team dat
> niet kan dragen, vervang door *"zo snel mogelijk"* — minder scherp maar eerlijker.
> Beslissing van Sam/Kristin.

---

## §6 — Plan een boeking (contact CTA)

**h2:**

> Plan een boeking

**Body** (2 zinnen — vraagt om concrete info + herhaalt SLA):

> Stuur ons een mail met je context — locatie, datum en doelpubliek — en we nemen
> binnen een week contact op met een eerste reactie.

**Primary CTA** (`btn-primary`, `mailto:` met onderwerp-prefill in v0.1 — gap #4):

> Stuur een aanvraag  →  `mailto:hallo@leon.dance?subject=Mobiele%20dansstudio%20uitnodigen`

**Secondary** (plain text, `.meta` style — fallback voor users die `mailto:` blokkeren):

> of mail rechtstreeks: hallo@leon.dance

**Form-stub annotatie** (zichtbaar in wireframe-fase als eerlijke placeholder):

> [Een direct formulier komt zodra we de GDPR-grondslag voor contactaanvragen vastleggen
> ([Dn-03](../01-concerns.md)). Tot dan is de mail-link de werkende weg.]

> ⚠️ **Open gaps:**
> - **Gap #4 (Dn-03):** het echte formulier (naam · organisatie · context · datum-
>   range · message) wacht op GDPR-grondslag-beslissing. SP-10 (inschrijving form) blijft
>   🔴 tot Dn-03 sluit. SP-11 (contact pattern) is wel 🟠 first-draft per deze pagina.
> - **Gap #5:** is *hallo@leon.dance* het juiste adres voor professionele aanvragen, of
>   moet er een *boekingen@…* shared mailbox komen? Bepaalt de mailto-target.

---

## TOV-checklist (per [identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Eén lezer.** P3 programmator throughout — geen P1-warmte, geen P4-coach-toon, geen
      P2-jury-bewijslast.
- [x] **Werkwoord vroeg, actief.** *"Stuur ons een mail"* · *"We brengen hem naar pleinen"*
      · *"We bekijken het per aanvraag"*. Geen ambtelijke woordvolgorde.
- [x] **Concreet vroeg.** Eerste concrete feiten in lede en §2 (fietsaanhangwagen,
      pleinen/scholen/festivals). §3 use-cases + §4 fiche bullets bouwen verder.
- [x] **Tonen, niet claimen.** Geen *uniek · vernieuwend · innovatief · revolutionair*.
      De fiche en de track record tonen wat de studio kan — geen claim erover.
- [x] **Verboden woorden eruit.** Geen *duurzaam · laagdrempelig · inclusief · diversiteit
      · creatie · werking · traject · empoweren · bruggen bouwen · passie*. *Traject*
      wordt vermeden ondanks dat het P3-pad er een is — *"hoe verloopt een boeking"*
      doet dezelfde job zonder dossier-toon.
- [x] **Eén CTA.** Eén heldere CTA in §6 (`Stuur een aanvraag`), werkwoord vooraan,
      lage drempel. Secondary plain-text mailto = fallback, geen tweede call-to-action.
- [x] **Twee-publiektest** (aangepast voor P3-only pagina): zou een programmator van een
      stadsfestival deze pagina lezen en in 5 zinnen weten of dit bij hun context past,
      hoe duur het ongeveer zal zijn, en hoe ze contact opnemen? — Ja (bedoeld). Zou
      een jurylid (P2) zich niet aangepraat voelen? — Ja, geen claim-taal aanwezig.

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 Fiche cijfers | open | **🟠 strawman** | placeholders in copy (`[L × B × H]`, `[30 min]`, `[type]`); structuur staat |
| #2 Cost-frame | open | **🟠 strawman** | *"in overleg"* gedocumenteerd + verantwoord (Dn-05/Dn-18 anchors) |
| #3 1-week SLA | open | **🟠 strawman** | committed in copy; client kan terugschalen naar *"zo snel mogelijk"* |
| #4 Dn-03 GDPR form | open | unchanged | mailto + zichtbare stub-annotatie; SP-10 blijft 🔴 |
| #5 Contact-owner | open | unchanged | strawman gebruikt `hallo@leon.dance`; Sam beslist |
| #6 Use-cases | open | **🟠 strawman** | 4 contexten ingevuld, te valideren tegen P-07 track record |
| #7 P-07 canonical | open | unchanged | dit kan deze pagina niet zelf oplossen — wacht op P-07 brief |
| ~~#8~~ P-07 cross-link | closed | closed | geverifieerd in [P-07 stub](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php) |

**Gaps closed/strawmanned: 4 of 8.** Pages-to-final wacht op team review (#1, #6) +
team beslissingen (#2, #3, #5) + Dn-03 BLOCKER (#4) + P-07 canonical (#7).

---

## Cross-links

- Brief (structure): [10-uitnodigen.md](10-uitnodigen.md)
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md) (§Samenwerken)
- Vocabulary: [glossary](../../glossary.md) (§mobiele dansstudio)
- Structure: [30-structure §Samenwerken — children](../30-structure.md)
- Patterns: [41-patterns](../41-patterns.md) (SP-04, SP-11 first-draft)
- Closed concerns: [Dn-05](../01-concerns.md) (no ticketing) · [Dn-18](../01-concerns.md) (contact request only)
- Open blocker: [Dn-03](../01-concerns.md) GDPR — blocks live form
- Canonical sister: P-07 [`/dansateliers-performances/mobiele-dansstudio`](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php)
- Code: [`resources/views/samenwerken/uitnodigen.blade.php`](../../../../resources/views/samenwerken/uitnodigen.blade.php)
