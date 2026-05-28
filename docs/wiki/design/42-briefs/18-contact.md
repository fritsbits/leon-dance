---
title: P-18 Contact — Skeleton brief
tags: [design, skeleton, brief, contact, page-level, over-leon]
sources: [40-skeleton; 41-patterns; 30-structure; identity/10-tone-of-voice §404/empty/forms; identity/10-tone-of-voice §Over Leon; glossary; raw/current-site/pages/contact.md (verified 2026-05-19 capture); 42-briefs/08-samenwerken (sibling BG-7); 42-briefs/01-home §5 (sibling band); CLAUDE.md (Maps rule, banned patterns, accessibility); best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-18
slug: /over-leon/contact
type: Utility 3–5
updated: 2026-05-28
---

# P-18 Contact — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft (sibling [18-contact-content](18-contact-content.md)) · Code 🟠 first
> draft (rewrite shipped 2026-05-28) · Approved —
> **Confidence:** **4 / 5** (was 3; raised by verified contact details from the
> current-site mirror — only gaps remaining are team-confirm + Leaflet integration).
> **Section budget:** **4 sections** (Utility tier 3–5 ceiling — header counts as §1).
> **Authored autonomously per task instruction "Best-guess autonomous; document as BG-N;
> no user questions"; all open calls documented inline as best-guess decisions.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **No contact form in v1** | Per [Dn-03 GDPR Open](../01-concerns.md) + task hint. Page surfaces email · phone · postal address directly. A form would owe a privacy-/cookies-clause that doesn't exist yet. *"Mail · bel · langskomen"* is the v1 contract; a form arrives when GDPR copy lands. | Yes — drop form in when Dn-03 closes |
| BG-2 | **Page = generic Contact only** | Per [30-structure §Over Leon](../30-structure.md): *"Plain. Per-Samenwerken-child contact paths handled inline on those pages."* Specifieke vragen (commissioning, mobile-studio, vrijwilliger) get **routing links**, not full intake forms. The substance lives on P-09/P-10/P-11. | Yes — could surface inline contact lines per door if user-testing shows routing-only is too thin |
| BG-3 | **Verified data, not strawman** | Email · phone · two addresses · drop-in spots all taken **verbatim** from the [current-site contact mirror](../../../raw/current-site/pages/contact.md) (captured 2026-05-19). One mirror = ground truth until team confirms. | Yes — team Q1 just confirms or corrects |
| BG-4 | **Two addresses (office + post)** | Per the mirror, Leon distinguishes *Bureau* (Lion City, Ossegemstraat 53, 1080 Sint-Jans-Molenbeek — the workplace) from postal (Leon vzw, Weilandstraat 46, 1082 Bruxelles — the vzw seat). Both shown, labelled. **Bureau is the "Bezoekadres" §4** since it's the one a visitor would walk to; postal sits in §2 with the BTW. | Yes — collapse to one if team uses only one |
| BG-5 | **Map = placeholder in v1** | Per CLAUDE.md *"Maps when needed: OpenStreetMap + Leaflet.js only — never Google Maps/Mapbox."* Leaflet not yet bootstrapped in `app.js`. V1 = bordered placeholder block with the address coordinates + a `"Bekijk op OpenStreetMap"` deep-link (`https://www.openstreetmap.org/?mlat=...&mlon=...`) so the page is useful **today** without a JS dependency. Leaflet integration lands when Surface plane opens or when first interactive map is needed. | Yes — swap in `<div id="map">` + Leaflet init when ready |
| BG-6 | **§3 routing labels** | Verb-first per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas). Match the labels used on [P-01 §5 home band](01-home.md) + [P-08 Samenwerken index](08-samenwerken.md) — *"Werk samen aan een project"* (rather than the action-verb-only label *"opzetten"*), *"Boek de mobiele dansstudio"* (rather than *"uitnodigen"*), *"Doe mee als deelnemer of vrijwilliger"* (broadest hint to Agenda + Samenwerken/doen). Slight rephrasing OK because this page asks **"is this the right door?"** — the labels here name the **outcome**, not just the door. | Yes — could tighten to mirror P-08 wording exactly if cross-site copy consistency dominates |
| BG-7 | **§3 *Doe mee als deelnemer* routes to /agenda** | Task hint suggested `/agenda` for the *Doe mee als deelnemer* row. Routing makes sense: a deelnemer's next step is *to show up* — and the agenda surfaces all upcoming dated sessions (open ateliers, voorstellingen). The Samenwerken/doen path is **stage/vrijwilliger**, which is a different audience; for symmetry, add a second row link *"Word vrijwilliger of stagiair → /samenwerken/doen"* (per Dn-19 placeholder honesty from P-08 BG-4). | Yes — could merge or drop the vrijwilliger row if team prefers leaner |
| BG-8 | **No social handles in v1** | Current site has Instagram/Facebook references in raster only; no canonical list verified. Surface plane adds social row when assets land. Avoids surfacing dead links. | Yes — add a `Volg Leon` row when handles confirmed |

If any of BG-1 … BG-8 should flip, the brief re-rolls; otherwise these stand.

## Kern

1. **Plain, by design** (per [30-structure §Over Leon](../30-structure.md)). The page
   answers *"hoe bereik ik Leon?"* in one scan. Email · telefoon · adres. No marketing,
   no form scaffolding, no "we'd love to hear from you"-warmte. The TOV §Over Leon
   guidance — *institutional dial mag hier hoger* — applies cleanly.
2. **One canonical home for contact data** (anti-bloat). General email + phone + postal
   live **only here**. Footer points back via the `Contact` link (already implemented).
   Per-Samenwerken-child pages own their own register-shaped intake; the generic page
   routes to them via §3.
3. **Routing-not-redirecting** (per [P-08 brief BG-7](08-samenwerken.md)). The generic
   Contact page deliberately does **not** carry a per-Samenwerken-child contact line;
   it links *to the door* so the visitor lands on the page that owns the right register.
4. **Map: placeholder over fragile** (BG-5 + CLAUDE.md Maps rule). A wireframe-quality
   placeholder block with a real OpenStreetMap deep-link beats a broken Leaflet embed.
   Visit-address remains *useful* without JS in v1.
5. **Human reacts, not system** (per [TOV §empty states](../../identity/10-tone-of-voice.md#empty-states--404)).
   Even in the absence of a form, the page tone says *"stuur ons gewoon een mailtje"* —
   the email is foregrounded, not buried below a form CTA. Belonging dial available
   when forms eventually arrive.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVER LEON                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  Contact                                                           │
│                                                                    │
│  Mail · bel · kom langs. Heb je een specifieke vraag (een project  │
│  opzetten, de mobiele dansstudio boeken, meedoen) — kies dan       │
│  hieronder de juiste ingang.                                       │
├────────────────────────────────────────────────────────────────────┤
│  Algemeen                                                          │ §2 ALGEMEEN
│                                                                    │
│  Stuur een mail                                                    │
│  hello@leon.dance                                                  │
│                                                                    │
│  Of bel ons                                                        │
│  +32 456 91 26 41                                                  │
│                                                                    │
│  Of stuur een kaartje                                              │
│  Leon vzw                                                          │
│  Weilandstraat 46                                                  │
│  1082 Bruxelles                                                    │
│  BTW 0769.579.192                                                  │
├────────────────────────────────────────────────────────────────────┤
│  Met een specifieke vraag                                          │ §3 SPECIFIEK
│                                                                    │   (routing list,
│  → Werk samen aan een project                                      │    same shape as
│    Een participatief dansproject opzetten met je groep, school,    │    P-08 §2)
│    organisatie of stad.                                            │
│  ─────────────────────────────────────────────────────────────     │
│  → Boek de mobiele dansstudio                                      │
│    Een verplaatsbare dansruimte boeken voor een week, een          │
│    festival of een zomerformule.                                   │
│  ─────────────────────────────────────────────────────────────     │
│  → Doe mee als deelnemer                                           │
│    Kom langs in Atelier Leon, schrijf je in voor een editie, of    │
│    bekijk wat eraan komt in de agenda.                             │
│  ─────────────────────────────────────────────────────────────     │
│  → Word vrijwilliger of stagiair                                   │
│    Meewerken aan repetities, voorstellingen of dagelijkse werking. │
│    [in voorbereiding]                                              │
├────────────────────────────────────────────────────────────────────┤
│  Kom langs op het bureau                                           │ §4 BEZOEKADRES
│                                                                    │
│  Lion City                                                         │
│  Ossegemstraat 53                                                  │
│  1080 Sint-Jans-Molenbeek                                          │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │                                                              │  │
│  │   [Kaartje (OpenStreetMap, Leaflet) — landt in Surface]      │  │ map placeholder
│  │                                                              │  │ (BG-5)
│  │   Bekijk op OpenStreetMap →                                  │  │
│  └──────────────────────────────────────────────────────────────┘  │
│                                                                    │
│  Of vind ons in een open atelier:                                  │
│  Woensdag · Pianofabriek, rue du Fortstraat 35, 1060 Sint-Gillis   │
│  Zaterdag · Maison des Cultures, 1080 Sint-Jans-Molenbeek          │
├────────────────────────────────────────────────────────────────────┤
│                              [funder wall renders via SP-02]       │
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ OVER LEON                   │
│                             │ §1 SUBPAGE TOP
│ Contact                     │
│                             │
│ [lede wraps to 4 lines]     │
├─────────────────────────────┤
│ Algemeen                    │ §2 ALGEMEEN
│                             │
│ Stuur een mail              │
│ hello@leon.dance            │   (each label
│                             │    is its own
│ Of bel ons                  │    stacked
│ +32 456 91 26 41            │    block — keeps
│                             │    readable on
│ Of stuur een kaartje        │    narrow widths)
│ Leon vzw                    │
│ Weilandstraat 46            │
│ 1082 Bruxelles              │
│ BTW 0769.579.192            │
├─────────────────────────────┤
│ Met een specifieke vraag    │ §3 SPECIFIEK
│                             │   (1-col stack,
│ → Werk samen aan een project│    same pattern
│   [sub-line, .meta]         │    as P-08 §2)
│ ─────────────────────────── │
│ → Boek de mobiele dansstudio│
│   [sub-line, .meta]         │
│ ─────────────────────────── │
│ → Doe mee als deelnemer     │
│   [sub-line, .meta]         │
│ ─────────────────────────── │
│ → Word vrijwilliger of      │
│   stagiair                  │
│   [sub-line, .meta]         │
│   [in voorbereiding]        │
├─────────────────────────────┤
│ Kom langs op het bureau     │ §4 BEZOEKADRES
│                             │
│ Lion City                   │
│ Ossegemstraat 53            │
│ 1080 Sint-Jans-Molenbeek    │
│                             │
│ ┌─────────────────────────┐ │
│ │ [Kaartje (OSM) — Surf.] │ │
│ │ Bekijk op OpenStreetMap │ │
│ └─────────────────────────┘ │
│                             │
│ Of vind ons in een          │
│ open atelier:               │
│ Woensdag · Pianofabriek …   │
│ Zaterdag · Maison des       │
│ Cultures …                  │
├─────────────────────────────┤
│ ⤓ SP-09 funder wall         │ ← footer wall
│   (4 tiers) renders here    │   (NOT suppressed
│                             │    on non-home)
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Hoe bereik ik Leon — en welke ingang is voor mij?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (eyebrow + h1 + lede).
- **Composition:** eyebrow `OVER LEON` (locates page in IA; links to `/over-leon`) ·
  h1 `Contact` · lede that names the dial of the page (general vs. specific) and points
  at §3 for register-shaped routing.
- **No hero CTA:** utility page; the page *is* the CTA grid (email · routing · address).

### §2 — Algemeen (general contact details)

- **User question:** *"Hoe stuur ik een bericht aan Leon?"*
- **Pattern:** plain `.section` + `.container-text` (prose); no SP needed.
- **Composition:** 3 labelled blocks (each = `h3 label` + 1–4 lines of detail).
  - **Stuur een mail** — `hello@leon.dance` as a `mailto:` link.
  - **Of bel ons** — `+32 456 91 26 41` as a `tel:` link.
  - **Of stuur een kaartje** — postal address (Leon vzw · Weilandstraat 46 · 1082 Bruxelles)
    + BTW number.
- **Why h3-labelled blocks not a `<dl>`:** screen-reader-friendly + each label reads as
  a verb-led invitation per [TOV §CTA's](../../identity/10-tone-of-voice.md#ctas).
- **mailto + tel:** must be real, not strawman — *the email IS the form in v1.* If the
  address ever changes, this single page is the canonical home.

### §3 — Met een specifieke vraag (routing list)

- **User question:** *"Mijn vraag is specifieker — waar moet ik zijn?"*
- **Pattern:** text-link list (same local pattern as [P-08 Samenwerken §2](08-samenwerken.md)
  and [P-01 §5 home band](01-home.md)). Lift to SP-14 if a 4th surface uses it.
- **Rows (BG-6 + BG-7):**
  1. **→ Werk samen aan een project** → `/samenwerken/opzetten` — *Een participatief
     dansproject opzetten met je groep, school, organisatie of stad.*
  2. **→ Boek de mobiele dansstudio** → `/samenwerken/uitnodigen` — *Een verplaatsbare
     dansruimte boeken voor een week, een festival of een zomerformule.*
  3. **→ Doe mee als deelnemer** → `/agenda` — *Kom langs in Atelier Leon, schrijf je in
     voor een editie, of bekijk wat eraan komt in de agenda.*
  4. **→ Word vrijwilliger of stagiair** → `/samenwerken/doen` — *Meewerken aan
     repetities, voorstellingen of dagelijkse werking.* **`[in voorbereiding]`** tag
     in `.meta` (per [P-08 brief BG-4](08-samenwerken.md) — Dn-19 honesty).
- **Link discipline:** whole row clickable; arrow decorative; rows separated by
  `--color-border-subtle` hairlines; hover `--color-hover` bg.

### §4 — Bezoekadres (visit address + map placeholder + open-atelier drop-ins)

- **User question:** *"Waar kan ik Leon fysiek treffen?"*
- **Pattern:** plain `.section` + map placeholder (per BG-5).
- **Composition:**
  - h2 *Kom langs op het bureau*
  - Address block: `Lion City · Ossegemstraat 53 · 1080 Sint-Jans-Molenbeek`
  - **Map placeholder block** — bordered `border-[var(--color-border)]` rectangle,
    `aspect-[16/9]`, neutral background, centered label *"Kaartje (OpenStreetMap,
    Leaflet) — landt in Surface"* + a `Bekijk op OpenStreetMap →` link to
    `https://www.openstreetmap.org/?mlat=50.8616&mlon=4.3300&zoom=17`
    (Sint-Jans-Molenbeek approx — refine when team confirms coords).
  - h3 *Of vind ons in een open atelier* + two lines (Woensdag · Pianofabriek;
    Zaterdag · Maison des Cultures) — these are the **predictable public moments**
    where Leon physically appears, per the mirror.
- **Why drop-in spots here, not in §3:** they're *places*, not *intake doors*. Living
  next to the office address keeps "where to find Leon physically" together.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (h1 = *Contact*, short, safe) |
| §2 Algemeen | Default · `mailto`/`tel` links · **No form states yet** (BG-1) |
| §3 Routing list | Default (4 rows) · `Doen` row carries `[in voorbereiding]` tag · Hover (row tint) · Focus-visible (global) · Overflow (long sub-line wraps within row) |
| §4 Bezoekadres | Default · **Map placeholder** (no Leaflet JS in v1; static block with OSM deep-link) · Overflow (long venue names wrap) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Print: prints cleanly; map placeholder text remains useful · No-JS: page fully functional (BG-5 deliberate) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-11 Contact pattern | 🔴 stub | 🔴 stub — **not invoked here** (per BG-2 + [P-08 BG-7](08-samenwerken.md)); SP-11 drafts on first Samenwerken-child brief (P-09), where per-register CTA inline lives. The **generic** Contact page deliberately does **not** use SP-11. |
| *(no SP-05/06/07/09/12/13 invoked — page is plain prose + routing list)* | — | — |

**No new patterns spawned.** The routing list shares the local pattern with P-08 §2
and P-01 §5; still *local* until 4th surface (now 3 surfaces — close to lift threshold,
flag for SP-14 promotion review on the next pattern-library pass).

**Implicit pattern note (NEW for site):** **map placeholder** is a one-off block here;
formalise as SP-15 (`map embed`) **only** when a second page needs a map (likely
P-03 Atelier Leon — drop-in locations) or when Leaflet integration ships.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| General email + phone | §2 this page | Footer **does NOT** repeat email/phone (link-only); link points back here |
| Postal address + BTW | §2 this page | Nowhere else (legal-only data) |
| Visit address (Lion City) | §4 this page | Nowhere else |
| Drop-in locations (Pianofabriek · MdC) | P-03 Atelier Leon (canonical) | This page mirrors as a **physical-presence** signal in §4; canonical *practice* substance lives on P-03 |
| Per-Samenwerken-door contact | Per-child page (P-09, P-10, P-11) | This page links **to** the door, does NOT carry the contact line itself |
| OpenStreetMap deep-link / coords | §4 this page | Could be shared with P-03 when it lists drop-in addresses |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary — **N/A on utility/contact**:
      the email block (§2) functions as the primary "action" without button chrome,
      and the page is intentionally form-free in v1 (BG-1). Justified inline.
- [x] State inventory explicit
- [x] Section budget declared and respected (4 sections of 3–5)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (4 listed; no new SP spawned; SP-11 explicitly NOT
      invoked + rationale; SP-15 map embed flagged as deferred)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.**

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Confirm contact details still current — email, phone, both addresses, BTW (snapshot from 2026-05-19 mirror) | `[client]` | Sam | §2 + §4 → final |
| 2 | Lion City coordinates for OpenStreetMap deep-link (currently ~estimate) | `[content]` | Sam / Frederik | §4 map link accuracy |
| 3 | `[in voorbereiding]` tag wording for §3 row 4 — same as [P-08 BG-4 gap #3](08-samenwerken.md) (alternatives: `[binnenkort]` / `[in opbouw]` / `[komt eraan]`); consistency across both pages required | `[content]` | Kristin | Cross-page consistency |
| 4 | Lede final wording — Kristin tone pass; confirm *"Mail · bel · kom langs"* reads warm-not-curt | `[content]` | Kristin | Content stage |
| 5 | Form arrival timing — when does Dn-03 GDPR close enough to ship a form? (and: which form? simple "andere vraag?" textarea, or per-register form?) | `[strategy]` | Sam + Frederik | Future v1.x — not a v1 blocker |
| 6 | Leaflet bootstrap in `app.js` — when first interactive map ships (likely P-03 drop-in locations or this page §4), promote map-placeholder to SP-15 | `[research]` + `[design]` | Frederik | §4 final visual; flag for Surface plane |
| 7 | Social handles (Instagram / Facebook) — when verified, add a `Volg Leon` row to §2 or below §4 | `[content]` | Sam | Optional polish, not v1 blocker |
| 8 | Per-row href review for §3 — confirm *"Doe mee als deelnemer"* belongs on `/agenda` (BG-7) vs. a future *"Doe mee"* hub-page | `[client]` | Sam | §3 routing accuracy |

## Confidence rationale

- **Was 3 / 5** (per [40-skeleton](../40-skeleton.md) page registry: `[content]` algemeen
  contact + bezoek-adres + doorverwijzing to per-Samenwerken-child inline contacts).
- **Now 4 / 5** — playbook level-4: *"could write near-final NL; minor verification +
  tone pass needed."* Contact details verified from the current-site mirror, structural
  decisions all made (BG-1 … BG-8), routing labels aligned with sibling pages.
  Remaining gaps are team-confirm-or-correct, not unknowns.
- **→ 5 / 5** when gaps #1 + #4 close (team confirms data + Kristin tone pass).
- Gaps #5 (form) + #6 (Leaflet) + #7 (social) are **future polish**, not v1 blockers.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure §Over Leon](../30-structure.md) — *"Plain. Per-Samenwerken-child contact paths handled inline on those pages."*
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact) · [§empty states & 404](../../identity/10-tone-of-voice.md#empty-states--404)
- Glossary: [glossary](../../glossary.md)
- Sibling content: [18-contact-content.md](18-contact-content.md)
- Sibling briefs sharing routing-list shape: [08-samenwerken](08-samenwerken.md) · [01-home §5 band](01-home.md)
- Verified source: [`docs/raw/current-site/pages/contact.md`](../../../raw/current-site/pages/contact.md) (2026-05-19 capture)
- Code stub: [`resources/views/over-leon/contact.blade.php`](../../../../resources/views/over-leon/contact.blade.php)
- Future siblings owing SP-11 (per-register contact pattern): P-09 Opzetten · P-10 Uitnodigen · P-11 Doen (blocked by Dn-19)
