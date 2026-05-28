---
title: P-06 Mariage editie — Skeleton brief (template, 6 instances)
tags: [design, skeleton, brief, mariage, editie, page-level, template]
sources: [40-skeleton; 41-patterns; 30-structure; 42-briefs/05-mariage; identity/10-tone-of-voice; glossary; existing dansateliers/mariage-editie.blade.php (already wires Event.forEditie); EventSeeder.php (6 editie slugs); App\Models\Event scopes; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-06
slug: /dansateliers-performances/mariage/{editie}
type: Marketing 5–7
template: yes
instances: [brussel-2024, antwerpen-2024, rotterdam-2025, gent-2025, marseille-2025, luik-2026]
updated: 2026-05-28
---

# P-06 Mariage editie — Skeleton brief

> **Status:** Brief 🟠 first draft (this file) · Wireframe 🟠 first draft (below) ·
> Content 🟠 first draft strawman ([06-mariage-editie-content](06-mariage-editie-content.md))
> · Code 🟠 first draft (template renders all 6 edities; §6 Voor publiek already live
> from Event model — preserved + integrated) · Approved —
> **Confidence:** **2 / 5** (template is structurally sound; per-editie data — groep,
> typed dates, location, partner, photo — is the biggest content/asset gap, blocking
> instances from leaving strawman until team pulls per-editie facts).
> **Section budget:** **6 sections** (Marketing tier 5–7 ceiling — sits at the same
> sectional weight as parent P-05 Mariage; the page is a *deep-info* surface for one
> editie, not a sales-funnel).
> **Template page** — one Blade view, six instances driven by `{editie}` route
> parameter. The brief documents what's shared across all instances + which slots are
> per-editie data substitutions.
> **Authored autonomously per user instruction "ask as little questions as possible";
> all open calls documented inline as best-guess decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Page identity** | Eyebrow `MARIAGE · EDITIE`; eyebrow's first token links back to `/dansateliers-performances/mariage` (parent project page). Title = `{Stad} {Jaar}` (e.g. `Brussel 2024`), derived from editie slug. Lede = 1–2 sentences naming local partner + groep + period in plain NL. | Yes — could collapse eyebrow to single token, or use `{Project} — {Editie}` title format |
| BG-2 | **Hero treatment** | SP-04 variant A (text-only header) for v0.1; per-editie hero photo (SP-13) follows as next sibling **when asset arrives** (asset gap #4 — until then §2 photo collapses per SP-13 contract). Same discipline as parent P-05. | Yes — could lead with SP-04 variant B always, accepting that some edities render an empty photo slot (worse failure mode) |
| BG-3 | **§3 Praktisch composition** | Single `.section` with named beats: *Stad · Periode · Partner · Locatie(s)*. Plain dl-style key/value pairs (label-left, value-right on desktop; stacked on mobile). No card chrome — practical info reads as facts, not cards. | Yes — could become a SP-pattern (SP-14 editie-praktisch) if pattern repeats outside Mariage edities; for now inline |
| BG-4 | **§4 Wie doet mee composition** | Plain prose paragraph naming the local *groep* (size, character, partner-context) — no portrait grid, no name-list (consent overhead + voyeurism risk per SP-12 reasoning). Per [TOV §toonbaar in plaats van prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend), a participant **quote** (SP-12) lands here when consent exists. | Yes — could add cast-count chip in §3 instead and drop §4 entirely; but the *who* deserves a section, not a stat |
| BG-5 | **§5 Inschrijving (deelnemer-intake)** | ~~Strawman mailto driven by date-status.~~ **UPDATED 2026-05-28:** §5 copy now driven by `Editie.isInschrijvingOpen()` — a **team toggle** (`inschrijving_open` bool), NOT by computed date-status. Three reading-modes: (1) open → invite + `mailto:` "Schrijf je in"; (2) gesloten-maar-niet-afgelopen → "groep is voltallig, hou de projectpagina in het oog"; (3) afgelopen → "editie is afgerond, bekijk aankomende edities". SP-10 form still blocked by Dn-03 GDPR. | Yes — state-machine could be simplified once SP-10 form lands |
| BG-6 | **§6 Voor publiek (voorstellingen)** | **Preserve existing live code.** Already queries `Event::ofType(Voorstelling)->forEditie($editie)`. Refine: use SP-07 date-row partial (consistent with home §4) instead of bespoke `<li>` grid; keep "Naar de agenda" deeplink. Empty state: 1-sentence + link to project page. | Yes — could keep bespoke layout if SP-07's condensed shape feels too thin for voorstelling-detail; but consistency wins |
| BG-7 | **§7 Terug naar Mariage** | A page-bottom `btn-text` link back to `/dansateliers-performances/mariage` ("← Terug naar Mariage"). Not a full section — sits below §6 as a navigational coda. Helps deep-linked visitors (from Agenda voorstelling) climb back up to project context. | Yes — could promote to SP-04 sibling at top (breadcrumb-like) instead; but eyebrow already does the locating job |
| BG-8 | **Editie status (aankomend / lopend / afgelopen)** | ~~Hard-coded per-editie map in Blade view, pending Editie Eloquent model.~~ **RESOLVED 2026-05-28:** `App\Models\Editie` Eloquent model landed. Status is now derived from `$editie->status()` (method on the model using `starts_at` / `ends_at`). Route uses model-binding by slug; unknown slug → 404 (gap #8 also resolved). | N/A — model in place |

If any of BG-1 … BG-8 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **One template, six instances.** The Blade view is the page; the `{editie}` route
   parameter selects the dataset. Until an `Editie` Eloquent model lands, per-editie
   data lives in a typed in-view PHP array (BG-8). Aanstaande model: `Editie` belongsTo
   `Project`, hasMany `Event` (per [30-structure content model](../30-structure.md)).
2. **Editie page = practical-info home + groep + voorstellingen.** Per [30-structure
   IA principle 4](../30-structure.md): per-editie *groep*, typed dates, inschrijving,
   and voor-publiek info live here — never on the parent project page (P-05). The
   parent owns format-doc + the spine of 6 edities; this page owns the deep dive into
   *one* of them.
3. **Status-aware page.** A `lopend` editie reads as a live invitation (inschrijving
   open, upcoming voorstellingen). An `afgelopen` editie reads as documented evidence
   (groep named, voorstellingen archived, intake replaced by gentle redirect). The
   `aankomend` state reads as anticipation (inschrijving open, voorstellingen TBA). One
   template, three reading-modes — status chip + conditional copy carry the difference.
4. **Belonging dial, P1-led — same posture as parent P-05.** Lead with what the editie
   *was/is/becomes* + name the local groep. Inschrijving comes last on `aankomend`
   edities (per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie):
   *"Inschrijven als laatste sectie, niet als sales-blok"*).
5. **Voorstellingsdata stays canonical here** for the editie. The parent project page
   sends voorstelling-curious visitors to `/agenda?project=mariage&type=voorstelling`;
   from there each voorstelling deep-links back into this page's §6 by editie slug.

## Full-page wireframe (desktop) — illustrative instance: `brussel-2024` (afgelopen)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  MARIAGE · EDITIE                                                  │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A
│  Brussel 2024                                                      │    — variant B
│                                                                    │    when per-editie
│  Tien weken samen dansen in Brussel, met twintig Brusselaars en    │    photo arrives)
│  de kerngroep van Leon. Première in mei 2024 in KVS, met daarna    │
│  voorstellingen in Maison des Cultures en Pianofabriek.            │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │     [per-editie editorial photo · full-width · OR collapses] │  │ §2 PHOTO (SP-13)
│  └──────────────────────────────────────────────────────────────┘  │   variant A — only
│  © Photographer · Mariage Brussel 2024, KVS                        │   if asset present
├────────────────────────────────────────────────────────────────────┤
│  Praktisch                                                         │ §3 PRAKTISCH
│                                                                    │   (key-value pairs,
│  Stad           Brussel                                            │    no card chrome ·
│  Periode        maart – mei 2024                                   │    BG-3)
│  Partner        KVS · Maison des Cultures · Pianofabriek           │
│  Locatie(s)     repetities in Cultureghem,                         │
│                 voorstellingen in KVS, Maison des Cultures,        │
│                 Pianofabriek                                       │
│  Status         afgelopen                                          │   ← status chip
├────────────────────────────────────────────────────────────────────┤
│  Wie deed mee                                                      │ §4 GROEP
│                                                                    │   (prose · BG-4 ·
│  Een groep van twintig Brusselaars tussen 18 en 67, samengesteld   │    embedded SP-12
│  via een open call in het voorjaar van 2024. Ze repeteerden tien   │    when consent
│  weken lang elke woensdag in Cultureghem, naar de première in      │    exists)
│  KVS toe.                                                          │
│                                                                    │
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │  "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders   │  │ SP-12 QUOTE
│  │   nooit zou tegenkomen."                                     │  │ (embedded in §4
│  │  — Hadja, 67 · Mariage Brussel 2024                          │  │  when consent)
│  └──────────────────────────────────────────────────────────────┘  │
├────────────────────────────────────────────────────────────────────┤
│  Inschrijving                                                      │ §5 INSCHRIJVING
│                                                                    │   (afgelopen state
│  Deze editie is afgerond. Wil je meedoen in een volgende           │    — BG-5)
│  Mariage-editie? Bekijk de aankomende edities op de projectpagina. │
│                                                                    │
│  [ → Naar Mariage ]                                                │ btn-ghost
├────────────────────────────────────────────────────────────────────┤
│  Voor publiek — voorstellingen                                     │ §6 VOORSTELLINGEN
│                                                                    │   (live from Event
│  VR 17.05 · 20:00   Mariage — première — KVS                       │    model · SP-07 ×
│  ZA 18.05 · 19:00   Mariage — Maison des Cultures                  │    n · BG-6)
│  ZO 19.05 · 15:00   Mariage — Pianofabriek                         │
│  → Volledige agenda                                                │
├────────────────────────────────────────────────────────────────────┤
│  ← Terug naar Mariage                                              │ §7 CODA (BG-7)
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                          [funder wall above row]   │
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px) — same instance

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ MARIAGE · EDITIE            │ §1 SUBPAGE TOP
│                             │
│ Brussel 2024                │
│                             │
│ [lede wraps to 4 lines]     │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │
│ │  editie hero photo      │ │ §2 PHOTO (only
│ │  (or section collapses) │ │  if asset present)
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Praktisch                   │ §3 PRAKTISCH
│                             │
│ Stad                        │   (key + value
│ Brussel                     │    stack on mobile)
│                             │
│ Periode                     │
│ maart – mei 2024            │
│                             │
│ Partner                     │
│ KVS · MdC · Pianofabriek    │
│                             │
│ Locatie(s)                  │
│ Cultureghem (repetities) +  │
│ KVS, MdC, Pianofabriek      │
│                             │
│ Status                      │
│ afgelopen                   │
├─────────────────────────────┤
│ Wie deed mee                │ §4 GROEP
│                             │
│ [prose paragraph]           │
│                             │
│ ┌─────────────────────────┐ │
│ │ "Ik kan er mezelf zijn…"│ │ SP-12
│ │ — Hadja, 67 · …         │ │ (when consent)
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Inschrijving                │ §5 INSCHRIJVING
│                             │
│ [status-conditional copy]   │
│                             │
│ [ → Naar Mariage ]          │
├─────────────────────────────┤
│ Voor publiek                │ §6 VOORSTELLINGEN
│                             │
│ VR 17.05 · 20:00            │
│ Mariage — première — KVS    │
│                             │
│ ZA 18.05 · 19:00            │
│ Mariage — MdC               │
│                             │
│ ZO 19.05 · 15:00            │
│ Mariage — Pianofabriek      │
│                             │
│ → Volledige agenda          │
├─────────────────────────────┤
│ ← Terug naar Mariage        │ §7 CODA
├─────────────────────────────┤
│ ⤓ SP-09 default funder      │ footer wall
│   wall (4 tiers) renders    │
│   here in footer            │
│                             │
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant A, → variant B when photo lands)

- **User question:** *"Welke editie van Mariage is dit, en wat moet ik erover weten in één oogopslag?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A by default;
  promotes to variant B (header + SP-13 sibling) when a per-editie photo exists.
- **Eyebrow:** `MARIAGE · EDITIE`. First token links to `/dansateliers-performances/mariage`
  (parent project page); second token is a static category label (no own URL).
- **Title:** `{Stad} {Jaar}` — derived from editie slug (`brussel-2024` → `Brussel 2024`,
  `luik-2026` → `Luik 2026`). Capitalisation handled in the slug→label map.
- **Lede (1–2 sentences):** names partner + groep-size + period + key venues. Concrete,
  per [TOV §kenmerk 2](../../identity/10-tone-of-voice.md#2-concreet-niet-abstract).
  Strawman copy per instance lives in [06-mariage-editie-content](06-mariage-editie-content.md).
- **No hero CTA** (same posture as parent P-05); CTA action lives in §5.

### §2 — Photo (SP-13)

- **User question:** *"Hoe zag/ziet deze editie eruit?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant A (full-width).
- **Asset gap:** per-editie photo × 6 (gap #4). Until assets arrive, section collapses
  per SP-13 contract — no empty placeholder rendered.
- **Caption template:** `© [Fotograaf] · Mariage {Stad} {Jaar}, [locatie]`.

### §3 — Praktisch (key-value pairs)

- **User question:** *"Wanneer, waar, met wie?"*
- **Pattern:** plain `.section` + `.container-wide` (BG-3) — no SP, since it's
  literal-facts presentation, not a reusable visual unit (yet).
- **Composition:** h2 + a flat `<dl>`-style 2-column grid (label-left/value-right on
  desktop, stacked on mobile). Five rows: *Stad · Periode · Partner · Locatie(s) ·
  Status*. Status renders as a meta-style chip (one of: `aankomend` · `lopend` ·
  `afgelopen`, derived per BG-8).
- **Why no card chrome:** practical info should read as facts directly, not as a
  decorative card. Saves visual weight for §4 groep + §6 voorstellingen.
- **Per-editie substitutions:** all 5 rows. Content file lists each per editie slug.

### §4 — Wie doet mee / Wie deed mee (prose + optional SP-12)

- **User question:** *"Wie zijn de mensen achter deze editie?"*
- **Pattern:** plain `.section` + `.container-text` prose paragraph (~3–5 sentences) +
  optional embedded [SP-12 Quote / testimony](../41-patterns.md#sp-12--quote--testimony)
  when participant consent exists.
- **Heading verb-tense:** *Wie doet mee* (aankomend / lopend) → *Wie deed mee*
  (afgelopen). Same section, status-conditional copy.
- **Prose content:** names the local groep (size, character, age range, partner
  context, recruitment moment). No name-list, no portrait grid — consent overhead +
  voyeurism risk (per [SP-12 spec "No portrait photo"](../41-patterns.md#sp-12--quote--testimony)).
- **Quote (when consent):** participant voice, attribution `{Name}, {age} · Mariage
  {Stad} {Jaar}`. Same pattern + clearance discipline as P-05 §5.
- **Per-editie substitution:** prose paragraph + optional quote per editie.

### §5 — Inschrijving (status-conditional)

- **User question:** *"Hoe doe ik mee?"* (aankomend / lopend) OR *"Kan ik nog meedoen?"* (afgelopen)
- **Pattern:** plain `.section` + `.container-text` + 1 CTA. SP-10 form is blocked by
  Dn-03 GDPR — until it lands, the CTA is a `mailto:` strawman ("Schrijf je in").
- **State logic** (BG-5):
  - **`aankomend`** — copy: *"De groep voor [Stad] [Jaar] vormt zich nu. Wil je meedoen?
    Wij horen graag van je."* + CTA `Schrijf je in` → `mailto:hallo@leon.dance?subject=Mariage%20{Stad}%20{Jaar}`.
  - **`lopend`** — copy: *"Deze editie is bezig — de groep is voltallig. Wil je een
    volgende editie meedoen? Hou de projectpagina in het oog."* + CTA `→ Naar Mariage`.
  - **`afgelopen`** — copy: *"Deze editie is afgerond. Wil je meedoen in een volgende
    Mariage-editie? Bekijk de aankomende edities op de projectpagina."* + CTA `→ Naar Mariage`.
- **TOV check** (per [§CTA's](../../identity/10-tone-of-voice.md#ctas)): werkwoord aan
  het begin, geen klikbevehl, lage drempel. ✓
- **SP-10 future state:** when GDPR lands, replace mailto CTA with form pattern;
  section composition unchanged.

### §6 — Voor publiek — voorstellingen (live from Event model)

- **User question:** *"Wanneer kan ik komen kijken?"*
- **Pattern:** [SP-07 Date-row](../41-patterns.md#sp-07--date-row) × n (n = number of
  voorstellingen for this editie) + `→ Volledige agenda` link.
- **Data source:** **PRESERVE existing live query** —
  `Event::query()->where('is_public', true)->ofType(Voorstelling)->forEditie($editie)->orderBy('starts_at')->get()`.
  No changes to the query itself; only the row rendering refactors from bespoke `<li>`
  grid to SP-07 partial (BG-6).
- **Row format:** `{DAY} {DD}.{MM} · {HH}:{MM}   {Title} — {Venue}`. Same render as
  home §4 — consistent voorstelling-row shape across the site.
- **Empty state:** *"Nog geen voorstellingen aangekondigd voor deze editie."* +
  `→ Naar Mariage` link. (Different from home §4's "Geen aankomende activiteiten" —
  editie-context, not site-context.)
- **Heading verb-tense:** *Voor publiek — voorstellingen* (neutral; works across all
  three statuses).
- **Agenda deeplink:** `→ Volledige agenda` →
  `/agenda?project=mariage&type=voorstelling` (filters Mariage voorstellingen across
  all edities — opposite direction of the editie's own scope).

### §7 — Terug naar Mariage (coda, BG-7)

- **User question:** *"Hoe kom ik terug bij het overzicht?"*
- **Pattern:** plain `.section` (light padding) + 1 `btn-text` link.
- **Composition:** `← Terug naar Mariage` → `/dansateliers-performances/mariage`.
- **Why a coda, not breadcrumbs:** the eyebrow already does the locating job at the
  top of the page; this coda is a *climb-back* affordance for deep-linked visitors
  (came in from /agenda voorstelling). One pattern serves both directions.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long city name — none of the 6 current edities triggers this) |
| §2 SP-13 photo | Default · **Missing-asset → section collapses** (current default for all 6) |
| §3 Praktisch | Default · **Status chip variants** (`aankomend` / `lopend` / `afgelopen`) · Missing field (e.g. partner TBC) → row reads `nog te bepalen` |
| §4 Groep | Default · Verb-tense flip per status (`Wie doet mee` / `Wie deed mee`) · Quote missing → SP-12 block omitted, section still renders |
| §5 Inschrijving | **Status-conditional copy × 3** (aankomend / lopend / afgelopen) · SP-10 form: not yet (Dn-03 GDPR) |
| §6 Voorstellingen | Default (n rows) · **Empty** (no voorstellingen yet — editie-specific copy) · Loading (skeleton — same as home §4) · Past voorstellingen visible (no filter — past voorstellingen of `afgelopen` edities = historical record, must remain visible) |
| §7 Coda | Default only |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Unknown editie slug → 404 (handled by route — TBA when Editie model lands; current code accepts any string) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A; B when photo lands) | 🟠 | 🟠 (unchanged) |
| SP-06 Editie card | 🟠 | 🟠 (unchanged; this page is the *target* of the card, not a renderer of it) |
| SP-07 Date-row | 🟠 | 🟠 (now used on home §4, P-06 §6 — consistent) |
| SP-12 Quote / testimony | 🟠 | 🟠 (unchanged; reused per-editie) |
| SP-13 Photo block | 🟠 | 🟠 (unchanged; collapses pending per-editie assets) |
| SP-10 Inschrijving form | 🔴 | 🔴 (still blocked by Dn-03 GDPR; §5 ships mailto strawman) |

**No new patterns surfaced by this brief.** All slots are served by existing SP-04 /
SP-07 / SP-12 / SP-13 + plain prose. SP-06 Editie card is a *sibling* pattern (used on
P-05 to link *into* this page) — not used *on* this page.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Editie title (`{Stad} {Jaar}`) | this page §1 + SP-06 card on P-05 §4 (derived from same source) | Agenda voorstelling-row may carry editie suffix in title — accepted; one source via map |
| Per-editie groep details | §4 this page | Don't repeat on P-05 (which carries project-level format only) |
| Per-editie typed dates (repetities, voorstellingen) | Event model · §6 this page renders voorstellingen subset · /agenda renders all subsets | P-05 carries no dates; "see editie page" |
| Inschrijving-flow | §5 this page (per-editie · status-conditional) | Footer / global Contact may mention "wil je meedoen?" → links here |
| Voorstellingsdata (publieke shows) | Event model · §6 here for editie-scope · /agenda for project-scope | Home §4 may surface a single voorstelling if it's in the top-3 upcoming |
| Per-editie partners + venues | §3 Praktisch (this page) | SP-09 footer wall carries org-level; never repeated here |
| Hadja quote (Brussel 2024) | §4 this page (when Brussel 2024 instance) — primary use | P-05 §5 may also embed if useful; P-15 Impact may also use → resolved per use, single canonical attribution |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary action (§5 CTA, status-conditional)
- [x] State inventory explicit (incl. 3 status states × per-section variants)
- [x] Section budget declared and respected (6 of 5–7 — §7 coda is a navigational sliver, not a 7th section)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions)
- [x] Patterns referenced by SP-id (8 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| ~~1~~ | ~~**Editie Eloquent model + per-editie data structure**~~ | ~~`[research]`~~ | **RESOLVED 2026-05-28** | `App\Models\Editie` model landed (`database/migrations/2026_05_28_000000_create_edities_table.php`); `EditieSeeder` seeds 6 Mariage edities; route-model binding by slug; Filament `EditieResource` for team toggle. Status, inschrijving control, events relation — all in model. |
| 2 | **Per-editie practical-info × 6** — Stad / Periode / Partner / Locaties / Status — needs verification for: brussel-2024 ✓ (KVS première confirmed via EventSeeder), antwerpen-2024, rotterdam-2025, gent-2025, marseille-2025, luik-2026 | `[content]` | Sam / Kristin | §3 → final for instances |
| 3 | **Per-editie groep prose × 6** — size, character, age range, partner-context, recruitment-moment per editie | `[content]` | Sam / Kristin | §4 → final for instances |
| 4 | **Per-editie hero photo × 6** | `[asset]` | Surface | §2 SP-13 final per instance |
| 5 | **Per-editie quote × 6** — clearance + attribution format. Brussel 2024: Hadja quote inherited from P-05; other 5 edities pending. | `[client]` | Sam / Kristin | §4 SP-12 final per instance |
| 6 | **Inschrijving form (SP-10)** — Dn-03 GDPR open. v0.1 ships mailto strawman; pattern when GDPR lands. | `[strategy]` | client + Dn-03 | §5 form vs. mailto |
| 7 | **Inschrijving inbox** — `hallo@leon.dance` mailto strawman; correct destination + subject-line format to confirm | `[client]` | Sam | §5 CTA href |
| ~~8~~ | ~~**Unknown editie slug** → 404 vs. fallback.~~ | ~~`[research]`~~ | **RESOLVED 2026-05-28** | Route-model binding by slug — unknown slug now returns 404 automatically. |

## Confidence rationale

- **Was 2 / 5** (vague, per-editie data missing, no per-editie photo, no Editie model).
- **Stays 2 / 5 at brief level** — structural decisions all made (BG-1 … BG-8); but
  per-editie content gaps (#2, #3, #5) and asset gap (#4) span 6 instances ×
  ~5 facts/each = ~30 content items pending. The template is at *3 / 5* (could write
  strawman for one instance); the page's average lands at 2 because most instances
  haven't had their facts pulled.
- **→ 3 / 5** when per-editie data for at least 2 instances (most-recent + most-imminent)
  is verified — enough to validate the template doesn't bend under real content.
- **→ 4 / 5** when all 6 instances have practical-info + groep prose verified + Editie
  model lands.
- **→ 5 / 5** when assets (#4) + quotes (#5) + SP-10 form (#6) close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Sister brief (parent): [42-briefs/05-mariage](05-mariage.md)
- Content strawman: [06-mariage-editie-content](06-mariage-editie-content.md)
- Structure: [30-structure](../30-structure.md) — editie carries inschrijving + deelnemer practical-info; publiek via Agenda
- Tone: [identity/10-tone-of-voice §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie)
- Glossary: [glossary](../../glossary.md) — *editie · groep · deelnemer · publiek · voorstelling · inschrijving*
- Code: [`resources/views/dansateliers/mariage-editie.blade.php`](../../../../resources/views/dansateliers/mariage-editie.blade.php) (template) · [`routes/web.php`](../../../../routes/web.php) line 24-26 (`{editie}` param) · [`App\Models\Event`](../../../../app/Models/Event.php) (`forEditie` scope) · [`database/seeders/EventSeeder.php`](../../../../database/seeders/EventSeeder.php) (brussel-2024 + luik-2026 voorstellingen seeded)
