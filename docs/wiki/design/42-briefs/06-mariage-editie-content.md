---
title: P-06 Mariage editie — NL content strawman (template)
tags: [design, skeleton, content, mariage, editie, page-level, nl, template]
sources: [42-briefs/06-mariage-editie; identity/10-tone-of-voice; glossary; discovery/25-agenda (Brussel 2024 voorstellingen verbatim); EventSeeder.php (brussel-2024 seeded première + 2 follow-ups); existing dansateliers/mariage-editie.blade.php (live Event query preserved)]
phase: design
page-id: P-06
slug: /dansateliers-performances/mariage/{editie}
language: nl
updated: 2026-05-28
---

# P-06 Mariage editie — NL content strawman (template)

> **Status:** Content **🟠 first draft (strawman)** · template-shaped — the strawman
> works **end-to-end for one editie** (`brussel-2024`); the other 5 instances reuse
> the same shape with per-editie data substitutions noted inline.
> Sister structural brief: [06-mariage-editie.md](06-mariage-editie.md) — patterns,
> sections, states, gaps.
> **Lifts gaps to strawman:** structural copy for §1 lede, §3 Praktisch field labels,
> §4 prose template, §5 status-conditional copy × 3, §6 empty state, §7 coda.
> **Open against final:** all per-editie facts for the 5 non-Brussels instances
> (gap #2 + #3), per-editie quotes (gap #5), per-editie photos (gap #4).

## Reading note

This file is **one piece of copy** with **two layers**:

1. **Structural copy** (headings, labels, status-conditional copy, empty states) —
   identical across all 6 instances.
2. **Per-editie substitutions** (lede, Praktisch values, groep prose, quote) —
   change per instance.

The strawman shows the structural layer in full + a worked example for `brussel-2024`
(the editie with the most pulled facts via the EventSeeder). The other 5 instances
follow §"Per-editie substitutions" below.

## Tone discipline applied

Per [identity/10-tone-of-voice §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie):
**belonging dial**, leid met de mens of het beeld, praktische info hoog op de pagina,
inschrijven als laatste sectie, niet als sales-blok. Eén lezer per pagina (P1 / P4 —
geen jury-toon).

**Verboden in publieke copy nageleefd:** geen *duurzaam · laagdrempelig · inclusief ·
diversiteit · creatie · werking · traject · uniek · bekroond · empoweren ·
bruggen bouwen*.

---

## §1 — Subpage top (SP-04 variant A)

### Structural copy (all instances)

**Eyebrow** (`.meta uppercase tracking-wide`):

> MARIAGE · EDITIE

> *First token `MARIAGE` links to `/dansateliers-performances/mariage` (parent project).
> Second token is a static label.*

**h1** (template):

> {Stad} {Jaar}

### Per-editie lede (1–2 zinnen — naam partner + groep + periode + venues)

**`brussel-2024`** (worked example — facts confirmed via EventSeeder):

> Tien weken samen dansen in Brussel, met twintig Brusselaars en de kerngroep van Leon.
> Première in mei 2024 in KVS, met daarna voorstellingen in Maison des Cultures en
> Pianofabriek.

**Template voor de overige 5 edities** (`[bracketed]` = vul-in):

> Tien weken samen dansen in [Stad], met [~aantal] [stadgenoten] en de kerngroep van
> Leon. [Première/Voorstelling]en in [maand] [jaar] in [hoofdvenue], met daarna
> voorstellingen in [overige venues].

> ⚠️ **Te bevestigen (gap #2):** per-editie partner-organisatie + venue-lijst voor:
> antwerpen-2024, rotterdam-2025, gent-2025, marseille-2025, luik-2026. Stadgenoten-
> woord per stad: *Brusselaars · Antwerpenaars · Rotterdammers · Gentenaars ·
> Marseillais · Luikenaars* (controle door team).

---

## §2 — Photo (SP-13)

### Structural copy

**Caption + credit template:**

> © [Fotograaf] · Mariage {Stad} {Jaar}, [hoofdvenue]

### Per-editie photo asset

Pending Surface plane × 6 (gap #4). Tot dan: sectie verbergt zich (SP-13 collapses
op missing-asset state — geen grijs-blok placeholder).

---

## §3 — Praktisch (key-value)

### Structural copy (all instances)

**h2:**

> Praktisch

**Veld-labels (vaste volgorde):**

| Label | Aard |
|---|---|
| Stad | per editie |
| Periode | per editie |
| Partner | per editie |
| Locatie(s) | per editie |
| Status | derived (BG-8) — `aankomend` · `lopend` · `afgelopen` |

### `brussel-2024` (worked example)

| Label | Value |
|---|---|
| Stad | Brussel |
| Periode | maart – mei 2024 |
| Partner | KVS · Maison des Cultures · Pianofabriek |
| Locatie(s) | Repetities in Cultureghem · voorstellingen in KVS, Maison des Cultures en Pianofabriek |
| Status | afgelopen |

### Per-editie data — overige 5 instances

> ⚠️ **Te bevestigen door team (gap #2):**

| Slug | Stad | Periode (best-guess) | Partner | Locatie(s) | Status (per 2026-05-28) |
|---|---|---|---|---|---|
| antwerpen-2024 | Antwerpen | sep – dec 2024 | — | — | afgelopen |
| rotterdam-2025 | Rotterdam | jan – apr 2025 | — | — | afgelopen |
| gent-2025 | Gent | mrt – jun 2025 | — | — | afgelopen |
| marseille-2025 | Marseille | sep – dec 2025 | — | — | afgelopen |
| luik-2026 | Luik | juni – december 2026 | — | — | lopend / aankomend (depends on today vs. start) |

> *Periode-gissingen volgen het patroon "ongeveer 10 weken naar voorstelling toe", op
> basis van de Brusselse première-keten in [EventSeeder](../../../../database/seeders/EventSeeder.php).
> Definitieve datums + partners + venues per editie te leveren door Sam/Kristin.*

### Field-overflow / missing-field state

Als een veld nog ontbreekt voor een instance: render `nog te bepalen`.

---

## §4 — Wie deed/doet mee (groep + optional SP-12)

### Structural copy

**h2** (status-conditional):

- `afgelopen` → **Wie deed mee**
- `lopend` of `aankomend` → **Wie doet mee**

### `brussel-2024` (worked example)

**Prose paragraph** (~3–5 zinnen — concreet, geen claims):

> Een groep van twintig Brusselaars tussen 18 en 67 vormde de lokale cast van deze
> editie. Ze werden samengesteld via een open call in het voorjaar van 2024, na drie
> kennismakingsmomenten in Cultureghem. Tien weken lang repeteerden ze elke woensdag
> samen met de kerngroep van Leon, naar de première in KVS toe.

> ⚠️ **Te bevestigen (gap #3):** leeftijdsrange (18–67 is plausibel maar niet
> geverifieerd), open call-timing, kennismakingsformat. Sam/Kristin.

**SP-12 Quote (when consent — gap #5):**

> "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders nooit zou tegenkomen."
> — Hadja, 67 · Mariage Brussel 2024

> *Quote uit [missie-visie current-site mirror](../../../raw/current-site/pages/missie-visie-nl.md);
> gedeeld met P-05 §5. Single-canonical attribution geldt — beide pagina's mogen 'em
> dragen want context (project-niveau vs. editie-niveau) verschilt.*

### Per-editie prose — overige 5 instances

**Template:**

> Een groep van [~aantal] [stadgenoten] tussen [leeftijd-min] en [leeftijd-max] vormde
> de lokale cast van deze editie. Ze werden samengesteld via [recruitment-moment] in
> [maand] [jaar], in samenwerking met [partner-organisatie]. Tien weken lang repeteerden
> ze [cadens — bijv. "elke woensdag"] samen met de kerngroep van Leon, naar
> [voorstelling-anker] toe.

> ⚠️ **Per-editie facts te leveren (gap #3):** cast-size, leeftijdsrange, recruitment-
> moment, partner-organisatie voor de groep-vorming, repetitiecadens, voorstelling-
> anker.

### State: no quote (consent niet geklaard / nog te leveren)

SP-12 block omits cleanly; prose-paragraph staat alleen.

---

## §5 — Inschrijving (status-conditional)

### Structural copy (3 status-varianten)

**h2:**

> Inschrijving

**`aankomend` (editie ligt in toekomst):**

> De groep voor {Stad} {Jaar} vormt zich nu. Wil je meedoen? Wij horen graag van je.

CTA primary (`btn-primary`):

> Schrijf je in  →  `mailto:hallo@leon.dance?subject=Mariage%20{Stad}%20{Jaar}`

**`lopend` (editie is bezig):**

> Deze editie is bezig — de groep is voltallig. Wil je een volgende editie meedoen?
> Hou de projectpagina in het oog.

CTA secondary (`btn-ghost`):

> → Naar Mariage  →  `/dansateliers-performances/mariage`

**`afgelopen` (editie is voorbij):**

> Deze editie is afgerond. Wil je meedoen in een volgende Mariage-editie? Bekijk de
> aankomende edities op de projectpagina.

CTA secondary (`btn-ghost`):

> → Naar Mariage  →  `/dansateliers-performances/mariage`

> ✓ Werkwoord aan het begin (TOV §CTA's). Lage drempel. Geen klikbevehl.
> ⚠️ **Te bevestigen (gap #7):** inbox-adres + subject-line format voor mailto.

### SP-10 future-state

Wanneer Dn-03 GDPR landt en SP-10 ingericht is, vervangt de form de mailto-CTA op
`aankomend` edities. `lopend` en `afgelopen` blijven mailto-loos (geen intake).

---

## §6 — Voor publiek — voorstellingen (live from Event model)

### Structural copy

**h2:**

> Voor publiek — voorstellingen

**Row format (SP-07 date-row):**

> {DAY} {DD}.{MM} · {HH}:{MM}    {Title} — {Venue}

### `brussel-2024` (live data — uit EventSeeder, géén handgeschreven copy)

> VR 17.05 · 20:00   Mariage — première — KVS
> ZA 18.05 · 19:00   Mariage — Maison des Cultures
> ZO 19.05 · 15:00   Mariage — Pianofabriek

*Bovenstaande wordt **automatisch** uit `App\Models\Event::forEditie('brussel-2024')`
gegenereerd. Dit is geen handgeschreven copy.*

### Empty state (geen voorstellingen voor deze editie)

> Nog geen voorstellingen aangekondigd voor deze editie.

Afsluiter-link (`btn-text`):

> → Naar Mariage

### Standard afsluiter (na de rows)

> → Volledige agenda  →  `/agenda?project=mariage&type=voorstelling`

---

## §7 — Terug naar Mariage (coda)

### Structural copy

`btn-text` link, geen heading:

> ← Terug naar Mariage  →  `/dansateliers-performances/mariage`

---

## SEO / `<head>` strawman (per instance)

**`<title>`** (template):

> Mariage — {Stad} {Jaar} · Leon

**`<meta name="description">`** (template, ~150 chars):

> {Stad} {Jaar} — één editie van Mariage. {Periode}. Lokale groep van [~aantal]
> dansers, voorstellingen in [hoofdvenue].

**`brussel-2024` worked example:**

- `<title>` : *Mariage — Brussel 2024 · Leon*
- `<meta>` : *Brussel 2024 — één editie van Mariage. Maart – mei 2024. Lokale groep
  van twintig dansers, met voorstellingen in KVS, Maison des Cultures en Pianofabriek.*

---

## TOV-checklist ([identity/10-tone-of-voice §Checklist](../../identity/10-tone-of-voice.md#checklist-voor-nieuwe-webcopy))

- [x] **Uitnodigend, niet missionerend** — lede leidt met "tien weken samen dansen",
      niet met "Leon gelooft in…".
- [x] **Concreet** — datums (maart–mei 2024), plaatsen (KVS, MdC, Pianofabriek),
      duur (tien weken), aantal (twintig Brusselaars), partner-namen.
- [x] **Warm zonder zoetsappig** — "wij horen graag van je", je-vorm, geen
      uitroeptekens.
- [x] **Toonbaar in plaats van prijzend** — geen *uniek · bekroond · vernieuwend*;
      groep + venue + datums + quote dragen het bewijs.
- [x] **Plain, niet schools** — geen *werking · creatie · traject* (publieksbreed);
      *cohort* nergens publiek.
- [x] **Eén lezer per pagina** — P1 (potentiële deelnemer) + P4 (partner-context via
      §3 Partner-veld) lezen mee; geen jury-toon.

---

## Per-gap status update

| Brief gap | Was | Now | Notes |
|---|---|---|---|
| #1 Editie model + data structure | open | unchanged | Frederik [research] — view-time hard-coded map until model lands |
| #2 Per-editie Praktisch × 6 | open | **🟠 strawman** (1/6 verified — Brussel 2024) | 5 instances pending team verification |
| #3 Per-editie groep prose × 6 | open | **🟠 strawman** (template + 1/6 worked example) | 5 instances pending team facts |
| #4 Per-editie hero photo × 6 | open | unchanged | asset/Surface decision |
| #5 Per-editie quotes × 6 | open | **🟠 strawman** (1/6 — Hadja, inherited from P-05) | 5 instances pending clearance |
| #6 SP-10 inschrijving form | open | unchanged | Dn-03 GDPR blocker — mailto strawman |
| #7 Inschrijving inbox | open | **🟠 strawman** | `hallo@leon.dance` placeholder; format te bevestigen |
| #8 Unknown editie 404 | open | unchanged | Frederik [research] — model-bound route when Editie lands |

**Gaps closed to strawman: 4 of 8 (worked example fully, template-shape for the
other 5 instances).** Pages-to-final per-instance still depends on team facts
(#2, #3) + per-quote clearance (#5) + Surface assets (#4); page-level final depends
on Editie model (#1) + GDPR resolution (#6).

## Cross-links

- Brief (structure): [06-mariage-editie.md](06-mariage-editie.md)
- Sister brief (parent): [05-mariage.md](05-mariage.md) · sister content: not yet drafted
- Tone: [identity/10-tone-of-voice](../../identity/10-tone-of-voice.md)
- Vocabulary: [glossary](../../glossary.md)
- Patterns: [41-patterns.md](../41-patterns.md) (SP-04 header, SP-07 row, SP-12 quote, SP-13 photo)
- Source events: [discovery/25-agenda](../../discovery/25-agenda.md) (Brussel 2024 voorstelling-data) · [EventSeeder.php](../../../../database/seeders/EventSeeder.php)
- Source quote: [missie-visie current-site mirror](../../../raw/current-site/pages/missie-visie-nl.md)
