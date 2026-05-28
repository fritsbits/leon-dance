---
title: P-08 Samenwerken (index) — NL content strawman
tags: [design, skeleton, content, samenwerken, page-level, nl, index]
sources: [42-briefs/08-samenwerken; identity/10-tone-of-voice §Samenwerken; glossary; 30-structure §Samenwerken — children]
phase: design
page-id: P-08
slug: /samenwerken
language: nl
updated: 2026-05-28
---

# P-08 Samenwerken (index) — NL content strawman

> **Status:** Content **🟠 first draft (strawman)** · awaiting Kristin tone pass for
> finalisation.
> Lifts gaps **#1** (lede), **#2** (sub-lines), **#3** (`[in voorbereiding]` tag) from
> [08-samenwerken brief](08-samenwerken.md) to strawman level.
> **Open against final:** gap #4 (row order confirm by Sam) · gap #5 (per-child contact
> landing — downstream of P-09/P-10/P-11).
> **Sister:** [08-samenwerken.md](08-samenwerken.md) (structure brief — patterns,
> sections, states).

## Tone discipline applied

Per [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen):
**hybride dial, leunend institutional.** Beheerd, rustig, geen verkoop-toon. Geen
*"let's collaborate!"*-energie, geen marketing-pad. Een coördinator die wéét waar te
klikken landt hier. Verboden in publieke copy nageleefd: geen *duurzaam · laagdrempelig
· inclusief · diversiteit · creatie · uniek · bekroond · empoweren · bruggen bouwen ·
samenbrengen · passioneel*.

Ook gerespecteerd:
- **Glossary** — geen *creatie* (we gebruiken *project*); geen *werking* (interne term);
  *traject* alleen waar het écht over een dansproject-traject gaat, niet als
  subsidie-vulwoord.
- **TOV §6 — Eén lezer per pagina** — *uitzondering bewust gemaakt:* dit is een index
  met drie deuren naar drie aparte personae (P3 + P4 voor opzetten · P3 voor uitnodigen
  · NEW vrijwilliger voor doen). De lede zegt expliciet *"kies de ingang die bij jouw
  vraag past"* — geen veinzing dat dit één persoon aanspreekt.

---

## §1 — Subpage top

**Eyebrow** (`.meta uppercase tracking-wide`):

> OVERZICHT

**h1:**

> Samenwerken

**Lede** (2 zinnen, kiest expliciet *niet* één lezer — index-uitzondering):

> Drie manieren om met Leon in zee te gaan. Kies de ingang die bij jouw vraag past —
> elk pad heeft zijn eigen contactlijn.

> ⚠️ **Te bevestigen door Kristin (gap #1):** "Elk pad heeft zijn eigen contactlijn"
> is **waar in intentie** (per [30-structure](../30-structure.md): "Per-Samenwerken-child
> contact paths handled inline on those pages"), maar nog **niet geïmplementeerd** — SP-11
> Contact pattern is 🔴 stub. Tot SP-11 op de child-pagina's landt, leest deze zin als
> een belofte zonder bewijs. Alternatief: *"Kies de ingang die bij jouw vraag past."*
> (één zin, geen belofte). Voorkeur Kristin?

---

## §2 — Link-list (3 rows)

Per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas): werkwoord aan het begin, lage
drempel, geen klikbevehl. Alle drie de rijen volgen dezelfde shape.

### Rij 1 — Een participatief dansproject opzetten

**Label** (medium weight):

> → Een participatief dansproject opzetten

**Sub-line** (`.meta`, 1 zin):

> Kennismaking → vrijblijvend gesprek → traject op maat met je groep, school,
> organisatie of stad.

**Link:** `/samenwerken/opzetten`

> ⚠️ **Tone notes:**
> - *traject* gebruikt — toegestaan hier want het is letterlijk een dansproject-traject
>   (niet de subsidie-vulwoord-betekenis); zie [glossary](../../glossary.md) copy notes
>   voor P4 partner-pages waar *traject op maat* exact het juiste register raakt.
> - *Kennismaking → vrijblijvend gesprek → traject* is het 3-stappen-proces uit
>   [30-structure §Samenwerken — children](../30-structure.md). Verifiëren met Sam.
> - "Je groep, school, organisatie of stad" dekt P3 (programmator → stad/festival) +
>   P4 (partner-coördinator → school/welzijn/zorg) in één zin — geen aparte register-knip
>   op de index, die zit op de child-pagina.

### Rij 2 — De mobiele dansstudio uitnodigen

**Label:**

> → De mobiele dansstudio uitnodigen

**Sub-line** (`.meta`):

> Een verplaatsbare dansruimte boeken voor een week, een festival, of een zomerformule
> op locatie.

**Link:** `/samenwerken/uitnodigen`

> ⚠️ **Tone notes:**
> - *Boeken* — TOV-toegelaten werkwoord voor P3 booking-pad (zie [glossary](../../glossary.md):
>   *"professionele Boekingen/contact-path"*); concreter dan *aanvragen*.
> - "Een week, een festival, een zomerformule" — drie concrete formats die de meeste
>   use-cases dekken (verifiëren met Sam tegen [P-07 Mobiele dansstudio](../../../../resources/views/dansateliers/mobiele-dansstudio.blade.php)
>   zodra die in brief landt).
> - "Op locatie" verwijst naar de mobiele aard zonder *mobiel* tweemaal te zeggen.

### Rij 3 — Vrijwilligerswerk of stage doen

**Label:**

> → Vrijwilligerswerk of stage doen

**Sub-line** (`.meta`):

> Meewerken aan repetities, voorstellingen of dagelijkse werking.

**Tag** (klein, `.meta`, naast of onder de sub-line):

> [in voorbereiding]

**Link:** `/samenwerken/doen` (actief — leidt naar placeholder-pagina)

> ⚠️ **Te bevestigen door Kristin (gap #3):**
> - **Sub-line: bewust generiek** — Dn-19 (persona + team-emailcorpus) is Open, dus de
>   substance van wat een vrijwilliger/stagiair concreet doet is nog niet gedefinieerd.
>   *Meewerken aan repetities, voorstellingen of dagelijkse werking* dekt de drie evidente
>   buckets zonder beloftes te doen die nog niet kunnen.
> - *Werking* hier intern-bedoeld (de dagelijkse organisatie-praktijk), per [glossary](../../glossary.md)
>   in publieke copy te vermijden. **Alternatief:** *"Meewerken aan repetities,
>   voorstellingen of het dagelijkse reilen en zeilen"* — langer maar zonder *werking*.
>   Of: *"Meedraaien aan repetities, voorstellingen en achter de schermen."* Voorkeur?
> - **Tag-wording (gap #3):** `[in voorbereiding]` gekozen boven `[binnenkort]`,
>   `[in opbouw]`, `[komt eraan]`. *Binnenkort* belooft een tijdslijn die er niet is
>   (TOV: *"Een datum is een belofte"*). *In voorbereiding* zegt eerlijk wat er gebeurt
>   zonder commitment. **Tag-weergave:** `.meta` style, geen kleur, gewoon tekstueel —
>   geen badge of pill (volgens [CLAUDE.md banned-patterns](../../../../CLAUDE.md):
>   geen *coloured drop shadows*, geen *border-left accent stripes*).

---

## TOV-checklist (per [identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Uitnodigend, niet missionerend** — drie deuren met werkwoorden; geen
      *"Leon gelooft in samenwerking"*.
- [x] **Concreet** — *groep, school, organisatie, stad · een week, een festival, een
      zomerformule · repetities, voorstellingen* — concrete dingen, geen abstractie.
- [x] **Warm zonder zoetsappig** — *Drie manieren om met Leon in zee te gaan*: warm
      maar zonder uitroepteken; *je-vorm*; geen *iedereen-welkom*-zoetheid.
- [x] **Toonbaar in plaats van prijzend** — geen *uniek · bekroond · vernieuwend ·
      duurzaam · laagdrempelig*. De drie rijen tonen *wat je kan doen*, claimen niet
      *hoe geweldig het is*.
- [x] **Plain, niet schools** — geen *werking* (publiek) · geen *creatie* · geen
      *empoweren* · geen *traject* als subsidie-vulwoord (wel in Rij 1 als correct
      dansproject-traject).
- [~] **Eén lezer per pagina** — **uitzondering bewust** (gedocumenteerd boven): index
      met drie peer-deuren naar drie personae; lede maakt expliciet dat de lezer kiest.
      Geen veinzing.
- [x] **Eén CTA** — **N/A op index** (BG-3): drie peer-doors vervangen de single CTA.
      Verantwoord in brief.
- [x] **Twee-publiektest** — P1 nieuwsgierige zou hier niet landen (P1-pad = home →
      Atelier Leon, niet via Samenwerken); P2 jurylid zou zich niet aangepraat voelen
      (geen marketing-toon, geen claims).

---

## SEO / `<head>` strawman

**`<title>`:**

> Samenwerken — Leon

**`<meta name="description">`:**

> Drie manieren om met Leon samen te werken: een participatief dansproject opzetten, de
> mobiele dansstudio uitnodigen, of vrijwilligerswerk of stage doen.

> *Layout-partial gebruikt `$title ?? 'Leon'` + `$description ?? '...'`; deze pagina
> overrijdt beide via `@extends('layouts.app', ['title' => '…', 'description' => '…'])`.*

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 Lede final wording | open | **🟠 strawman** | "Elk pad heeft zijn eigen contactlijn" — waar in intentie, te bevestigen vóór live |
| #2 Sub-lines per row | open | **🟠 strawman** | drie regels gedraft, één-zinnig, werkwoord-voor; Kristin tone pass |
| #3 `[in voorbereiding]` tag wording | open | **🟠 strawman** | *in voorbereiding* gekozen boven alternatieven met argumentatie |
| #4 Row order (BG-6) | open | unchanged | Sam confirm (opzetten heaviest? matches `Samenwerken`-name gravity) |
| #5 Per-child contact line landing | open | unchanged | downstream — SP-11 drafts on first per-child page brief |

**Gaps closed to strawman: 3 of 5.** Page-to-final depends on team review (#1, #2, #3)
+ client confirm (#4) + per-child SP-11 landing (#5 downstream).

## Cross-links

- Brief (structure): [08-samenwerken.md](08-samenwerken.md)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)
- Vocabulary: [glossary](../../glossary.md)
- Structure: [30-structure §Samenwerken — children](../30-structure.md)
- Sibling content: [01-home-content §5](01-home-content.md) (mirrors same three labels as a band)
- Children pages (downstream): P-09 Opzetten · P-10 Uitnodigen · P-11 Doen (Dn-19 blocked)
- Code: [`resources/views/samenwerken/index.blade.php`](../../../../resources/views/samenwerken/index.blade.php)
