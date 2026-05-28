---
title: Glossary — Leon terminology (one shared vocabulary)
tags: [glossary, terminology, cross-cutting]
sources: [leon.dance current pages; client kickoff 2026-05-19; strategy/20-personas; strategy/40-value-proposition; design/20-scope]
phase: cross-cutting
updated: 2026-05-28
---

# Glossary — Leon terminology

A **wiki-wide, cross-cutting** reference (sits beside [`index.md`](index.md) /
[`log.md`](log.md)). It locks **one shared vocabulary** used **everywhere** — the code, the
admin/backstage, and the public site — so Frederik and the team never translate between two
sets of words.

> **The rule.** Don't take a word just because "Leon already says it" — the current site's
> voice is the thing being rebalanced. Prefer the **plainest general word** that works for
> the hardest public audience (P1 newcomer, P4 partner) *and* reads fine in a CMS field
> and in code.

## The shared vocabulary (use these — code, admin, site)

| Word (NL) | What it is — one meaning, everywhere | Notes |
|---|---|---|
| **project** (pl. *projecten*) | A distinct participatory dance work Leon makes with people (e.g. *Mariage*). The content-type in the CMS, the section on the site, the thing in the code. | **Replaces "creatie"** (the team's art-register word — keep it only as informal in-house speech, never in code/admin/site). General, understood by a newcomer, a partner, an admin and a developer alike. A simple project = one page; a recurring one carries *edities*. |
| **editie** (pl. *edities*) · model `Edition` | One dated **staging/run** of a project — its own page, own *groep*, own dates (e.g. *Mariage @ Cultureghem, 10 apr*). | The unit P6 plans against and the live site already shows publicly ("Previous editions"). One word; the *page* it sits on changes what's emphasised (see copy notes). |
| ***Mariage*** | The flagship **project**; each dated staging is an **editie**. | Settles the Scope F4 modelling question. *Mariage* is the proper name — lead public copy with the **name**, not the word "project". |
| **groep** | The people who join one *editie* and build toward its *voorstelling*. | On partner pages always qualify **"jouw groep"** (their class/residents) vs. the project's *groep* — different things. Internally we may say *cohort*; the word everywhere is **groep**. |
| **deelnemer** | Someone taking part. | Plain *and* the funder/decree's own word — the rare term that needs no softening. (At the very first newcomer touch, *"mensen die meedoen"* is warmer; *deelnemer* once in.) |
| **publiek** | The people who come to watch a *voorstelling*. | Use *publiek*, not *toeschouwer* (stiff). |
| **voorstelling** | The public moment a project/editie builds toward. | The single best cross-audience word — keep it everywhere. A public dated show is a *voorstelling* with date/place — never surfaced to the public as "an editie of a project". |
| **inschrijven / inschrijving** | Signing up to take part. | The system field/verb. **Copy varies by page, not the word:** pair with *"of kom gewoon langs"* for newcomers; on partner paths use *kennismaken / vrijblijvend contact* instead (Leon-initiated, relationship-led); programmers get a *Boekingen/contact* path, not "inschrijven". |
| date types: **open atelier · repetitie · try-out · voorstelling** | The kinds of dated session on a project/editie (working dates → the show). | The cleanest, most genuinely shared part — keep verbatim. On partner pages, frame the working dates as *wekelijkse sessies*. |
| **atelier** / **Atelier Leon** | The free, drop-in, **no-registration** weekly practice. | Keep. The closed school-hours work (*Leon op school*) is a **distinct offer** — don't fold it into the drop-in atelier. **Data model (2026-05-28):** the in-house entity is `Atelier` (`type: open\|school`) — *open* = Atelier Leon, *school* = Leon op school; one canonical page per type. Public copy still lists by name; no "atelier" umbrella over the school work. |
| recurring practices — name them | **Atelier Leon · Leon op school · Leons White Page · Leon rond de tafel** | **Do not use "werking"** (subsidie-register, the canonical newcomer bounce). No umbrella noun — list the practices by name. **"Leon on tour" is *not* a peer practice** — verified at Structure 2026-05-20 vs. current `/what-we-do` mirror, it's the umbrella term the current site uses for participatieve performances ("…a large-scale performance like *Mariage*"); under [Structure](design/30-structure.md), **Participatieve performances** replaces it as the public category. The IA root that holds *projecten* + these is resolved at [Structure](design/30-structure.md): no overview root; 4 top-level items. **Apartheid Free Zones** lives under Over Leon → Missie & visie (Strategy [S-03](strategy/01-concerns.md)). |
| **mobiele dansstudio** | The bookable bike-based mobile studio. | Public name = *mobiele dansstudio*; *"de fiets"* is informal in-house nickname (fine in speech, not a label). Needs a **bookable framing** (what a booking includes / technische fiche) — a content gap, see notes. |
| **locatie** (model `Venue`) | A place where activities happen — `name · area · address`. | Data-model entity (built 2026-05-28). Each *Atelier* has a standing *locatie*; each *Event* carries one. EN class name `Venue`; Filament/site label *Locatie*. |

## Never user-facing (in-house jargon — code/admin/talk only)

Small, normal list — *not* a parallel vocabulary, just words a visitor must never meet:

- **cohort** — the modelling word for a *groep*; the word everywhere is **groep**.
- **frontstage / backstage** — our service-design lens (not Leon's word). If the admin ever
  needs a user-facing label, the client's word is **"beheer"**.
- **antenne** — Leon/Strategy's word for a cross-sector partner cluster; a partner does
  **not** recognise themselves in it. Public/partner word = *samenwerking / vaste partner*.
  The concept is owned by **→ Strategy** ([S-04](strategy/01-concerns.md)/[Dn-08](design/01-concerns.md)).
- **"Nope" (non-audience)** · **application pipeline** — planning words; the surface verb
  is *inschrijven*; nothing with these words reaches a user.

## Copy notes (page-level, when writing the content-complete draft)

Not new names — guidance for *how the shared words are framed* on a given page/audience:

- **Newcomer (P1) pages:** don't open with heavy words; lead with the project's **name** +
  a plain invite (*"een groot dansfeest dat we samen maken — jij kan meedoen"*); always
  pair *inschrijven* with *"of kom gewoon langs"*.
- **Partner/welfare (P4) pages:** frame a project as *samenwerking op maat met je groep*;
  use *begeleiding · op maat · vrijblijvend · kennismaking*; voorstelling = *optioneel
  sluitstuk, geen doel*; *"jouw groep"* not the cast.
- **Funder/jury (P2) proof content:** here the decree-register words are *content*, not
  system terms — the proof page legitimately uses *traject · proces · toeleiding ·
  co-creatie · nazorg · omkadering · continuïteit · duurzaam partnerschap*. (These are
  things to *write about*, not entities to name in code.)
- **Programmer (P3) booking content:** *Mariage* presented as a bookable **format/productie**
  (core+local cast, ~10 repetities → voorstelling); the bike with a **technische fiche**;
  *coproductie / tournee* for *Kosmos* 2027 / *Birds*; a professional **Boekingen/contact**
  path.
- **Public/press (P5):** a public show = a **free dated voorstelling**; lock the verbatim
  practical line **"gratis · zonder reservatie · datum · plaats · uur"** (NL/FR/EN); keep
  **"agenda"** as the public anchor word; give *Mariage* a quotable genre line
  (*participatieve dansvoorstelling in de publieke ruimte*).

## Status of the concern

- **[Dn-14](design/01-concerns.md)** stays **Partly**: the **vocabulary is decided** (the
  one shared set above; `creatie→project`, `werking` dropped, `traject` demoted to
  funder-page copy). The remainder is **ordinary content-draft work** — writing each page
  in its register using the copy notes — carried into the content-complete draft (and the
  IA root label into Structure). Not a parallel naming system, not a separate client
  workshop.
- **[Dn-12](design/01-concerns.md)** date-type vocabulary is settled (the typed-date set);
  its open half remains the *editie flow* question.
- **Scope F4** content model = **project (+ optional edities)**; "creatie/werking/traject"
  are no longer system terms.

## Cross-links

- Verbatim sources: [`/mariage`](https://leon.dance/mariage) ·
  [`/mariage-doemee`](https://leon.dance/mariage-doemee) ·
  [`/what-we-do`](https://leon.dance/what-we-do) ·
  [`/missie-visie-nl`](https://leon.dance/missie-visie-nl)
- [Strategy Personas](strategy/20-personas.md) · [Value proposition](strategy/40-value-proposition.md) ·
  [Design Scope](design/20-scope.md) · [Design Concerns Dn-12/Dn-14](design/01-concerns.md)
