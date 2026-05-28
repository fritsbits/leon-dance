---
title: P-16 Team — Skeleton brief
tags: [design, skeleton, brief, team, page-level]
sources: [40-skeleton; 41-patterns; 30-structure; identity/10-tone-of-voice; glossary; discovery/21-organisation; existing over-leon/team.blade.php; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-16
slug: /over-leon/team
type: Utility 3–5
updated: 2026-05-28
---

# P-16 Team — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft · Code 🟠 first draft (rendered) ·
> Approved —
> **Confidence:** **3 / 5** (was 3; structural lock-in + content extraction from
> [21-organisation](../../discovery/21-organisation.md) raised certainty on names + roles
> but per-persoon uitgebreide profielen still pending SharePoint).
> **Section budget:** **4 sections** (Utility tier 3–5 ceiling — staying low; team page
> is a Wie-is-wie reference surface, not a marketing pitch).
> **Authored autonomously per user instruction "best-guess autonomous"; all open calls
> documented inline as BG-N + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant A (eyebrow + h1 + lede only — no photo block). Team-portraits gap (BG-3) makes variant B premature. | Yes — variant B kicks in when a fitting team/groepsfoto lands |
| BG-2 | **No CTAs in hero or page** | Team page is a reference, not a conversion surface. Contact paths live on P-18 Contact + per-Samenwerken-child inline contacts. Single afsluitend "Contact opnemen?" → `/over-leon/contact` text-link at the bottom. | Yes — could surface "Sam · sam@leon.dance" inline if team prefers |
| BG-3 | **No portraits in v1** | Asset-rights overhead (Dn-15) + photo-discipline risk (Dn-20) — strawman aspect-squares would read as fragile-empty-holes. Text-only cards / rows in v0.1; portraits land when Surface has rights-cleared set. | Yes — entire SP-NEW-1 card gets `$image` slot when assets arrive |
| BG-4 | **Three sections by team-tier**: §2 Kerngroep (named with role + 1-line context) · §3 Geassocieerde artiesten (~14 names from [who-we-are-1](../../../raw/current-site/pages/who-we-are-1.md)) · §4 Bestuur (6 statutory directors from [discovery/21-organisation](../../discovery/21-organisation.md) KBO data) | Cleanest reading order: who-runs-it-daily → wider-artistic-pool → governance. Honest tiering, no flattening of all 25 names into one grid. | Yes — could merge §3 + §4 if reads too org-chart; could split §2 into "artistiek" vs. "coördinatie" |
| BG-5 | **§2 Kerngroep = 4 named cards** | Seppe Baeyens (choreograaf · artistiek leider) · Sam De Wit (coördinator + bestuurder) · Kristin Rogghe (communicatie + dramaturg) · Isabelle Azaïs (productie + scenografie). Emma Ducheyne stays in §3 (production-specific Mariage 2025 comms — not standing kerngroep per [21-organisation](../../discovery/21-organisation.md)). | Yes — team may want Emma in §2 if 2026-cyclus repeated her role |
| BG-6 | **§3 Geassocieerde artiesten = plain compact list** (`<ul>` of 14 names, no individual rows / cards) | Per [TOV §Toonbaar i.p.v. prijzend](../../identity/10-tone-of-voice.md#4-toonbaar-in-plaats-van-prijzend) — naming the pool is the proof; rendering 14 individual portrait-cards would over-claim. One paragraph + a clean list = institutional dial, low ceremony. | Yes — could turn into compact rows with role-tag per person once team adds roles |
| BG-7 | **§4 Bestuur = list with KBO date** | 6 names + role chip ("bestuurder, sinds YYYY-MM-DD"). KBO is public, no consent needed. Order: alphabetical, Sam De Wit last (since he doubles as kerngroep — avoid double-prominence). | Yes — chair/secretary roles can be added when client confirms (D-08 governance Open) |
| BG-8 | **Honest "uitgebreide profielen volgen"-line** | Per TOV §Empty states discipline — name what's not there yet rather than fake-padding. One `.meta` line at the foot of §2: *"Uitgebreide profielen volgen zodra het team ze schrijft."* | Yes — line removed when SharePoint material lands |

If any BG-1 … BG-8 should flip, say so; otherwise these stand.

## Kern

1. **Wie is wie, niets meer.** Team page is a reference surface (Utility tier) — not a
   manifesto, not a hiring pitch, not a partner-trust pitch. Those jobs live on Missie &
   visie (P-14), Impact (P-15), and the Samenwerken paths.
2. **Three tiers, named honestly.** Kerngroep · geassocieerde artiesten · bestuur. Each
   tier is a different *kind* of belonging to Leon; flattening them into one "team grid"
   would lie about how Leon actually works (per [21-organisation](../../discovery/21-organisation.md):
   small core + ~14 freelance pool + 6 statutory directors).
3. **Belonging dial steady on institutional** (per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)).
   Rustig, feitelijk, je-vorm waar het kan. Geen marketing-warmte, geen subsidiedossier-
   afstand. Names + roles + minimum context.
4. **No portraits in v1 (Dn-15 + Dn-20 guard).** Rather than render 25 grey aspect-squares
   that read as missing-asset failure, ship text-only and let SP-13 spec photos in when
   the rights-cleared set arrives.
5. **Canonical home for team facts.** Names + roles live here. Funder/board financial
   info → P-15 Impact "in cijfers" or Historiek. Per-project comms credits → on the
   project page (P-05 Mariage credits Emma Ducheyne; this page lists her in §3 once,
   role-tagged).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVER LEON                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  Team                                                              │
│                                                                    │
│  Een kleine kerngroep, een ruimere pool van geassocieerde          │
│  artiesten en een statutair bestuur. Wie doet wat — en sinds       │
│  wanneer.                                                          │
├────────────────────────────────────────────────────────────────────┤
│  Kerngroep                                                         │ §2 KERNGROEP
│                                                                    │   (4 × SP-NEW-1
│  ┌──Seppe Baeyens───────────┐  ┌──Sam De Wit─────────────────┐    │   person-card)
│  │ choreograaf · artistiek  │  │ coördinator · bestuurder    │    │
│  │ leider                   │  │ (sinds 2025)                 │    │
│  │ Maakt het werk; de       │  │ Productie, dagelijkse        │    │
│  │ stem van Leon op de      │  │ leiding, eerste              │    │
│  │ vloer en in de zaal.     │  │ contactpersoon.              │    │
│  └──────────────────────────┘  └──────────────────────────────┘   │
│  ┌──Kristin Rogghe──────────┐  ┌──Isabelle Azaïs─────────────┐    │
│  │ communicatie ·           │  │ productie · scenografie     │    │
│  │ dramaturg                │  │                             │    │
│  │ Onderhoudt het verhaal   │  │ Productieleiding (samen     │    │
│  │ en de site; ook          │  │ met Sam) en vormgeving      │    │
│  │ stadsdramaturg KVS.      │  │ op Mariage.                 │    │
│  └──────────────────────────┘  └──────────────────────────────┘   │
│                                                                    │
│  Uitgebreide profielen volgen zodra het team ze schrijft.          │ ← honest meta-line
├────────────────────────────────────────────────────────────────────┤
│  Geassocieerde artiesten                                           │ §3 GEASSOCIEERD
│                                                                    │
│  Leon werkt met een vaste pool van veertien artiesten — dansers,   │   (1 paragraph
│  muzikanten en performers die op verschillende projecten           │    + compact
│  meebouwen.                                                        │    name list)
│                                                                    │
│  Lena Michel van Drie · Hussein Rassim Al Baldawi · Fanny          │
│  Vandesande · Karen Willems · Stef Heeren · Saif Al-Qaissy ·       │
│  Martha Balthazar · Adnane Lamarti · Aude Uytterhoeven · Brend     │
│  Van Dijck · Evy Van Hoydonck · Emma Ducheyne                      │
│                                                                    │
│  (Seppe, Sam, Kristin en Isabelle hierboven werken hier ook        │
│  binnen.)                                                          │
├────────────────────────────────────────────────────────────────────┤
│  Bestuur                                                           │ §4 BESTUUR
│                                                                    │
│  Leon vzw is opgericht in 2021. Het statutaire bestuur — zes       │   (intro + 6 rows)
│  bestuurders — vergadert los van het artistieke team.              │
│                                                                    │
│  Patricia Balletti       bestuurder · sinds 2023                   │
│  Nadine De Brouwer       bestuurder · sinds 2023                   │
│  Heleen Schepens         bestuurder · sinds 2023                   │
│  Dries Merckx            bestuurder · sinds 2023                   │
│  Nadia Verbeeck          bestuurder · sinds 2023                   │
│  Sam De Wit              bestuurder · sinds 2025                   │
│                                                                    │
│  → Contact opnemen                                                 │ ← afsluitende
├────────────────────────────────────────────────────────────────────┤    text-link
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
│ OVER LEON                   │ §1 SUBPAGE TOP
│ Team                        │
│ [lede wraps 3-4 lines]      │
├─────────────────────────────┤
│ Kerngroep                   │ §2 KERNGROEP
│                             │   (1-col stack
│ ┌─Seppe Baeyens──────────┐  │    4 cards)
│ │ choreograaf · …        │  │
│ │ Maakt het werk; …      │  │
│ └────────────────────────┘  │
│ ┌─Sam De Wit─────────────┐  │
│ └────────────────────────┘  │
│ ┌─Kristin Rogghe─────────┐  │
│ └────────────────────────┘  │
│ ┌─Isabelle Azaïs─────────┐  │
│ └────────────────────────┘  │
│                             │
│ Uitgebreide profielen …     │ meta-line
├─────────────────────────────┤
│ Geassocieerde artiesten     │ §3
│ [intro paragraph]           │
│ [namen lopen in 1 kolom]    │
├─────────────────────────────┤
│ Bestuur                     │ §4
│ [intro 1 zin]               │
│                             │
│ Patricia Balletti           │
│ bestuurder · sinds 2023     │
│                             │
│ … (6 rows in 1-col stack)   │
│                             │
│ → Contact opnemen           │
├─────────────────────────────┤
│ [SP-09 footer wall]         │ ← footer (default
│ [SP-02 footer bottom row]   │   wall NOT suppressed)
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- §2 Kerngroep cards: `grid-template-columns: 1fr` mobile, `repeat(2, 1fr)` ≥ 768 px.
- §3 names render as inline middot-separated list desktop, 1-col `<ul>` mobile.
- §4 Bestuur: 2-col row (name + role-meta) on desktop, stacks vertically on mobile.
- No section disappears between viewports; no mobile-only content.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Wie zit er achter Leon?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (no photo sibling).
- **Eyebrow link:** `OVER LEON` → `/over-leon`.
- **h1:** `Team`.
- **Lede:** 2 sentences naming the 3-tier structure (kerngroep · geassocieerd · bestuur)
  so the reader knows what to expect below. Per [TOV §Concreet](../../identity/10-tone-of-voice.md#2-concreet-niet-abstract).
- **BG-2:** **No hero CTA.**

### §2 — Kerngroep (4 person-cards, SP-NEW-1)

- **User question:** *"Wie loopt het dagelijks?"*
- **Pattern:** **NEW — SP-NEW-1 Person card** (drafted with this brief, see "NEW patterns
  needed" below). Cousin of SP-05 Project card; person-forward rather than work-forward.
- **Composition per card:** `name (font-medium)` · `role-tag (.meta)` · `1-2 sentences
  context (.meta or body)`. Bordered card, same `--radius`, same `--color-hover` on group.
- **No image slot in v0.1** (BG-3); slot added to spec when assets arrive.
- **4 cards (order locked, artistic → ops → comms → production):**
  1. **Seppe Baeyens** — choreograaf · artistiek leider
  2. **Sam De Wit** — coördinator · bestuurder (sinds 2025)
  3. **Kristin Rogghe** — communicatie · dramaturg
  4. **Isabelle Azaïs** — productie · scenografie
- **Whole card NOT a link in v0.1** — no per-person page (yet). When uitgebreide profielen
  arrive: lift to whole-card `<a href="/over-leon/team/{slug}">`. For now, plain `<li>`.
- **Honest meta-line under the grid:** *"Uitgebreide profielen volgen zodra het team ze
  schrijft."* (BG-8).

### §3 — Geassocieerde artiesten

- **User question:** *"Met wie maakt Leon het werk?"*
- **Pattern:** plain `.section` + `.container-text` (intro paragraph + name list).
- **Composition:** h2 + 1-sentence intro (institutional dial) + middot-separated name
  list of ~12 (the 14 minus the 4 already in §2 to avoid double-listing).
- **Source:** [who-we-are-1 current-site mirror](../../../raw/current-site/pages/who-we-are-1.md)
  + [21-organisation Team and roles](../../discovery/21-organisation.md).
- **Disclosure line below:** *"(Seppe, Sam, Kristin en Isabelle hierboven werken hier ook
  binnen.)"* — keeps the 14-pool accurate without re-listing the kerngroep.
- **No per-person role-tag in v0.1** (gap #2): the agenda-corroboration in
  [21-organisation §Team](../../discovery/21-organisation.md) gives partial role info
  (Lena → Atelier Leon, Stef → Leon in de klas) — but not all 14 are role-tagged. Wait
  for team-confirmed list before rendering roles inline (anti-bloat: half-known is worse
  than not-named).

### §4 — Bestuur

- **User question:** *"Wie tekent voor wat?"*
- **Pattern:** plain `.section` + `.container-text` (intro + 6 rows).
- **Composition:** h2 + 1-sentence intro contextualising governance ("vergadert los van
  het artistieke team" — per [21-organisation governance](../../discovery/21-organisation.md))
  + 6 name+role rows.
- **Source:** [21-organisation §Legal and governance](../../discovery/21-organisation.md)
  — KBO public registry, 5 directors since 2023-12-04 + Sam De Wit since 2025-03-25.
- **Row template:** `{Name (font-medium)} · bestuurder · sinds {YYYY}` — year only, not
  full date (the day-precision is registry-correct but reads bureaucratic on a public
  page).
- **No chair/secretary annotation** until D-08 governance closes ([21-organisation Open
  Q2](../../discovery/21-organisation.md#open-questions-organisation)).
- **Afsluitende text-link:** `→ Contact opnemen` → `/over-leon/contact`. Single quiet
  text-link, not a CTA (BG-2). Per [TOV §Afsluiters](../../identity/10-tone-of-voice.md#afsluiters)
  — "een contactlijn, geen verkoopzin."

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (h1 is "Team" — safe; lede is 2 zinnen) |
| §2 Kerngroep | Default (4 cards) · Long-name overflow (Hussein Rassim Al Baldawi precedent — Kristin/Isabelle/Seppe/Sam are all short here) · Long-context-line wraps to 3 lines |
| §3 Geassocieerd | Default (list of 12) · Empty (no names — theoretical; would collapse §3 + disclosure line) |
| §4 Bestuur | Default (6 rows) · Empty (theoretical) · Director added/removed (manual update until CMS) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Long German/Polish/Arabic name handling — names render in native form (Isabelle Azaïs apostrophe, Saif Al-Qaissy hyphen) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-NEW-1 Person card | — | **NEW · 🟠 first draft** (drafted in this brief, awaiting promotion to 41-patterns on a second use) |

## NEW patterns needed (1)

**SP-NEW-1 — Person card.** Person-forward cousin of SP-05 Project card. Slots:
`$name` (font-medium) · `$role` (.meta) · `$context` (body, 1-2 sentences) · optional
`$href` · optional `$image`. Visual treatment identical to SP-05 (bordered, `--radius`,
`--color-hover`) for site-wide consistency. **Not promoted to 41-patterns in v0.1** per
the "draft on first use, promote on second use" library discipline — second use would be
P-09/P-10 Samenwerken contact-paths or P-18 Contact if those want named-person rows. If
they don't, this stays a P-16-local component.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| Names of kerngroep + roles | §2 this page | Project-pages may credit per-project role (Emma Ducheyne on P-05 Mariage credits) |
| ~14 geassocieerde artiesten | §3 this page | Per-project credits may list a subset |
| Statutair bestuur (6 directors + start dates) | §4 this page | Could be referenced from P-15 Impact "in cijfers" as a count, never relisted |
| Kunstendecreet bid governance | NOT here — P-14 Missie & visie or P-15 Impact | Team page stays organisational, not strategic |
| Lineage (Ultima Vez → Leon) | P-17 Historiek | Names here don't repeat lineage context |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (none — single quiet text-link in
      §4 afsluiter per BG-2; Utility-tier page, no conversion job)
- [x] State inventory explicit
- [x] Section budget declared and respected (4 of 3–5)
- [x] No either/or notes survive (BG-1 … BG-8 are decisions)
- [x] Patterns referenced by SP-id (3 existing + 1 new)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Per-persoon 1-2 zin context (4 kerngroep) — team to refine strawman wording | `[content]` | Sam / Kristin | Content stage |
| 2 | Geassocieerde artiesten role-tags (welke artiest doet wat) — partial agenda evidence in [21-organisation §Team](../../discovery/21-organisation.md), team-confirmed needed | `[content]` | Sam / Kristin | §3 → final |
| 3 | Team-portretten (rights-cleared set) — Dn-15 + Dn-20 | `[asset]` | Surface plane | §2 visual final (SP-NEW-1 gains `$image` slot) |
| 4 | Board chair + secretary annotations — D-08 governance Open ([21-organisation Q2](../../discovery/21-organisation.md#open-questions-organisation)) | `[client]` | Sam | §4 → final |
| 5 | Uitgebreide profielen (per-persoon pagina's `/over-leon/team/{slug}`) — vraag of dit nodig is | `[client]` | Sam / Kristin | post-v1 |
| 6 | Emma Ducheyne status — production-cycle only (Mariage 2025) of standing? Bepaalt of §2 of §3 | `[client]` | Sam | §2/§3 sort |

## Confidence rationale

- **Was 3 / 5** (page-registry entry — "per-persoon SharePoint-materiaal" + "team-
  portretten" as top gaps).
- **Still 3 / 5** — playbook level-3 *"could write strawman; would need team review for
  accuracy."* Names + roles + governance dates are all sourced + sourced-citable
  ([21-organisation](../../discovery/21-organisation.md) is `[REG]` + `[SRC]` confidence).
  What blocks 4/5: gap #1 (team-refined per-persoon context lines) + gap #6 (Emma
  placement).
- **→ 4 / 5** when gaps #1 + #6 close (Sam/Kristin review the 4 context lines, decide
  Emma).
- **→ 5 / 5** when all 6 gaps close, including assets (#3).

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Discovery source: [discovery/21-organisation](../../discovery/21-organisation.md) — KBO + ~14 artists list + comms-attribution + governance
- Source mirror: [raw/current-site/pages/who-we-are-1](../../../raw/current-site/pages/who-we-are-1.md) — verbatim 14-artist list
- Structure: [30-structure §Over Leon](../30-structure.md) — Team: "Wie is wie · SharePoint material"
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact) — institutional dial mag hier hoger
- Code stub: [`resources/views/over-leon/team.blade.php`](../../../../resources/views/over-leon/team.blade.php)
- Sister briefs: [P-01 Home](01-home.md) (exemplar) · [P-05 Mariage](05-mariage.md) (BG-decision exemplar)
