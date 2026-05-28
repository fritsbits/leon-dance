---
title: Structure — leon.dance redesign (Garrett Plane 3)
tags: [design, structure, ia, sitemap, garrett]
sources: [20-scope; glossary; strategy/00-strategy-brief; strategy/20-personas; strategy/50-user-journey; client kickoff 2026-05-19; comparator — Debateville; structure-workshop 2026-05-20; _archive/discovery/25-agenda (raw transcription cross-check 2026-05-27)]
phase: design
updated: 2026-05-28
---

# Structure — leon.dance redesign

> **Plane** 3 (Garrett) · **Site-level** · **DRAFT v0.2** (2026-05-20). Terse spec for
> downstream LLM use (Laravel scaffolding · Skeleton wireframes · per-section UX planning).
> This file is the result; reasoning lives in [log.md](../log.md).

## Sitemap

```
HOME
│
├── Dansateliers & performances                 — all the work Leon makes
│   ├── Open dansateliers: Atelier Leon         drop-in · weekly · free · no inschrijving
│   ├── Ateliers op school: Leon op school      begeleid traject · scholen / welzijn / zorg
│   ├── Participatieve performances             named bodies of work
│   │   └── Mariage (project)
│   │       └── edities/                        each: own page · own groep · own typed dates
│   └── Mobiele dansstudio                      canonical page (also reached via Samenwerken → uitnodigen)
│
├── Samenwerken                                 — action-shaped intake
│   ├── Participatief dansproject opzetten      → links into Participatieve performances + Ateliers op school
│   ├── Mobiele dansstudio uitnodigen           → intake; canonical content under Dansateliers & performances
│   └── Vrijwilligerswerk of stage doen         Dn-19 (Strategy persona work + team email corpus pending)
│
├── Agenda                                      — one unified surface · grouped by month
│   ├── filter: Onderdeel                       single chip-axis: Alles · Atelier Leon · Leon op school · Mariage
│   │                                           (merges practice+project — mutually exclusive, prevents empty AND)
│   ├── verleden/komend                         past↔upcoming toggle at foot of list
│   └── type via deep-link only                 ?type=open_atelier|klas|repetitie|try-out|voorstelling|… (not a visible axis); internal types shown with 1-line explainer
│
└── Over Leon
    ├── Missie & visie                          + Apartheid Free Zones (Strategy S-03 placement)
    ├── Impact                                  method · proces/nazorg/continuïteit · qualitative evidence · "In cijfers" (auto-pulled from Agenda)
    ├── Team
    ├── Historiek                               lineage (Ultima Vez → Leon) · Birds · recognition (lineage-proxy / juried selection)
    └── Contact

Site-wide footer:  Funder/partner wall (tiered) · Contact · NL/FR/EN · legal
Internal-only (never public IA):  werking · Leons White Page (no landing page) ·
                                   Leon rond de tafel (no landing page) · backstage ·
                                   cohort · antenne · "Nope"
Not in v1:  standalone Pers page (Dn-16 Won't-Have) · Jaarverslag ·
            "Een voorstelling programmeren" Samenwerken child
Future:  Kosmos 2027 → add under Participatieve performances when ready
```

## IA principles (rules for downstream decisions)

1. **One shared vocabulary** ([Glossary](../glossary.md)) — *project · editie · groep · deelnemer · publiek · voorstelling · inschrijving · atelier · typed dates · mobiele dansstudio*. `creatie→project`; `werking` is not a label.
2. **Trajectory, not product.** No "book a finished work" path. Commissioning routes via Samenwerken → opzetten; the mobile studio routes via Samenwerken → uitnodigen.
3. **Generic-first, brand-second** in nav: `<category>: <Leon's brand name>`. The visitor reads what it *is* + what Leon *calls it* in one scan.
4. **One canonical page per project / practice / offer.** Audience pages link in; per-register copy lives on the audience page, not duplicated on the canonical.
5. **Agenda is one surface · default shows everything · 2 filter axes** (type × project/practice). Dual job: utility for participants + proof-density signal for funders. Internal events (LWP · Leon rond de tafel) appear by default with a 1-line explainer on the entry; no landing page.
6. **Rubric-invisibility guardrail** ([Scope v0.3](20-scope.md)). No page reads as a jury checklist. Proof spine is distributed: Impact (slim) + per-project trajectory documentation + Historiek + Agenda density + site-wide funder wall. No "for funders" page.
7. **Modal nav grammar.** Items named by *what* (Dansateliers & performances · Agenda), by *relation* (Samenwerken · Over Leon). Coherence by audience-fit, not uniform grammar.

## Content model (entities · for CMS / Laravel scaffolding)

| Entity | Relations | Notes |
|---|---|---|
| **Project** | hasMany **Editie** · belongs to `Participatieve performances` category | Trajectory documentation fields: *proces · nazorg · continuïteit · evolutie*. *Mariage* now; *Kosmos 2027* when ready. NL/FR/EN. |
| **Editie** | belongsTo **Project** · hasMany **Event** | Own page · own *groep* · own typed dates. NL/FR/EN. **Inschrijving-control fields (2026-05-28):** `inschrijving_open` (bool toggle — team sets via Filament `EditieResource`) · `inschrijving_closes_at` (nullable date — auto-close). Methods: `status()` · `isInschrijvingOpen()` · `inschrijvingClosesSoon()`. Scope: `openInschrijving()`. Route uses model-binding by slug (unknown slug → 404). |
| **Atelier** | belongsTo **Venue** · hasMany **Event** | `type: open\|school` recurring workshop with a standing **Venue** + day/time (built 2026-05-28, Phase-1; supersedes the "RecurringPractice" slug concept). The **open** ateliers = *Atelier Leon*, **school** = *Leon op school* — grouped by `type`, one canonical page each. Internal types *Leons White Page · Leon rond de tafel* are **parentless Events** (no Atelier), shown in the Agenda with a 1-line explainer. NL/FR/EN. |
| **Venue** (NL *locatie*) | hasMany **Atelier** · hasMany **Event** | A place — `name · area · address` (+ nullable `lat`/`lng` for maps). Built 2026-05-28 (Phase-1). Drives the Atelier Leon "Waar en wanneer" block. |
| **Event** (Agenda) | belongsTo **Editie** OR **Atelier** · belongsTo **Venue** | `type` enum: *open atelier · **klas** · repetitie · try-out · voorstelling · Leons White Page · Leon rond de tafel*. Fields: *title · lead (named facilitator) · venue · partners (string of `x`-collaborators, e.g. `MUS-E, Ketmet`) · starts_at · ends_at · is_public · notes*. Drives Agenda filtering. **2026-05-28 (Phase-1):** nullable `atelier_id` + `venue_id` FKs added (additive — the legacy `venue` string + `practice_slug`/`project_slug`/`editie_slug` are retained pending the Phase-2 slug→FK cutover); `forAtelierType` scope. ⚠️ Cross-checked vs. raw [25-agenda](../_archive/discovery/25-agenda.md) 2026-05-27 — added `klas` (21/65 entries ≈ 32%) + `lead`/`partners` (every real entry carries them; "Activity · Lead · Venue" are the Excel columns Kristin maintains). |
| **Page** | — | Generic content page. Used for: Mobiele dansstudio, Samenwerken children, all Over Leon sub-pages, Dansateliers & performances landing, Samenwerken landing. NL/FR/EN. |
| **Partner / Funder** | belongs to `tier` | Tiers: *Funders · Co-producers · Venues · In-kind*. Drives site-wide footer wall + home strip. |
| **Inschrijving** | belongsTo **Editie** | Light per-editie list + export to ESP — **not** a relational CRM ([Scope F5](20-scope.md)). **Note:** the *flow* (open/gesloten/afgelopen state, SP-16 band, mailto CTA) is built (2026-05-28); the *form* (SP-10, minors consent) remains blocked by [Dn-03](01-concerns.md). |

I18n: every content-bearing entity has NL / FR / EN translations of editable fields. URL/routing model deferred to Skeleton.

> **Slug→FK normalization (in progress, 2026-05-28).** Models are being promoted from slug-strings to real FKs. **Phase-1 (done):** `Atelier` + `Venue` above; `events.atelier_id`/`venue_id`. **Phase-2 (planned):** promote *Project* to a model, rename `Editie` → `Edition`, move *repetitie/try-out/voorstelling* onto editions, then drop the `practice_slug`/`project_slug`/`editie_slug` strings. Model naming = English class, Dutch label (Project · Edition · Atelier · Venue · Event ↔ project · editie · atelier · locatie · activiteit). Spec: [event-model-normalization](../superpowers/specs/2026-05-28-event-model-normalization-design.md).

## Dansateliers & performances — children

| Sub-item | Type | Canonical content | Has edities? |
|---|---|---|---|
| Open dansateliers: **Atelier Leon** | RecurringPractice | drop-in · weekly · free · "kom gewoon langs" · dates on Agenda | No |
| Ateliers op school: **Leon op school** | RecurringPractice | begeleid traject · ~6 mnd · wekelijks · partner trajecten listed inline · dates on Agenda | No |
| Participatieve performances | category (no own page-entity) | container for Project entities | — |
| → **Mariage** | Project | format documentation (core+local cast · ~10 reps→voorstelling) · proces · nazorg · evolutie | Yes (6 real, from current-site mirror + 1 test future) |
| → *(Kosmos 2027 when ready)* | Project | co-productie · KANAL-Centre Pompidou / KVS | TBD |
| **Mobiele dansstudio** | Page | what it is · technische fiche · zomerformule · track record · "uitnodigen" CTA | No |

## Samenwerken — children

| Child | Type | Canonical content | Notes |
|---|---|---|---|
| **Participatief dansproject opzetten** | Page (intake) | Process: kennismaking → vrijblijvend gesprek → traject. Deep-links to *Mariage*, *Leon op school*, future *Kosmos*. | P3 + P4 commissioners both land here; both registers in page copy (per [Glossary](../glossary.md) copy notes). |
| **Mobiele dansstudio uitnodigen** | Page (intake) | Booking framing + technische fiche + professional contact CTA. Deep-links to **Mobiele dansstudio** canonical page. | P3 booking register. |
| **Vrijwilligerswerk of stage doen** | Page (placeholder) | — | **Dn-19 Open** — persona work + team email corpus pending. |

## Over Leon — sub-pages

| Sub-page | Content |
|---|---|
| **Missie & visie** | The why · de-emphasised · rebalanced out of subsidiedossiertaal · **Apartheid Free Zones** included here (Strategy [S-03](../strategy/01-concerns.md)). |
| **Impact** | **Method** (*Inviter · Mixing · Reversing · Affirming* — Janssens & Steyaert) · **proces / nazorg / continuïteit** · **qualitative evidence** (signature participant + partner quotes + selectie uit het beeld-archief) · **"In cijfers"** auto-pulled from Agenda data (years active · # partnerorgs · agenda-density per year) — no manual %-dashboard. Spine rubric-shaped, surface Leon-voice (guardrail). |
| **Team** | Wie is wie · SharePoint material. |
| **Historiek** | **Lineage** (Ultima Vez → Leon · the "16 not 5 years" point) · ***Birds*** (Ultima Vez production · Leon tour-direction since 2023 · *not* a Leon own work) · ***Tornar / INVITED*** (Ultima Vez roots) · **Recognition** (lineage-proxy + juried selection for het TheaterFestival · never "award-winning" · no implied *Mariage* critical acclaim). |
| **Contact** | Plain. Per-Samenwerken-child contact paths handled inline on those pages. |

## Site-wide components

- **Funder / partner wall** — tiered, captioned (*Funders · Co-producers · Venues · In-kind*). Site-wide footer + fuller version on home below the fold.
- **Contact** — global Contact page in footer; Samenwerken children carry their own register-shaped contact paths inline.
- **NL / FR / EN switcher** — placement + routing model **deferred to Skeleton** (path-prefix vs. domain vs. parameter · hreflang · context preservation).

## Persona / journey routing

| Persona | Path | Verdict |
|---|---|---|
| **P1** newcomer (J1) | Home → Dansateliers & performances → *Open dansateliers: Atelier Leon* | ✓ Home should also direct-link to Atelier Leon (Skeleton). |
| **P2** jury (J2) | Dossier → Home → Over Leon → Impact + Agenda density signal | ✓ Load-bearing journey to validate. Dossier can deep-link to `/over-leon/impact`. |
| **P3** programmer (J3) | Sector → Home → Samenwerken → *opzetten* OR *uitnodigen* | ✓ One umbrella hop. |
| **P4** partner-coordinator | Leon-initiated → Samenwerken → *opzetten* | ✓ Same child as P3 commissioning; register-routed by copy. |
| **P5** press / publiek | Agenda + Over Leon → Historiek | ✓ No standalone Pers page. |
| **P6** freelance | Agenda (filtered) + internal backstage | ✓ Light. |
| **N** kerngroep | No path. | ✓ Non-audience. |
| **NEW** vrijwilliger/stagiair | Samenwerken → *doen* | ⚠ Dn-19 — persona work owed by Strategy. |

## Scope reconciliations pending (next Scope ingest)

- **Kern 3** — no overview root; 4 top-level items.
- **F2/F3** — proof ladder distributed (Impact slim + per-project trajectory + Historiek + Agenda density + site-wide funder wall).
- **F10** — Pers DECISION → Won't-Have v1 (Dn-16 closed).
- **F11** — "Bookable dossier" framing dissolves under trajectory-not-product; bookable offers are (i) commission via *opzetten*, (ii) mobile studio via *uitnodigen*.

## Glossary lint pending

- Drop **Leon on tour** from the recurring-practices line — verified 2026-05-20 vs. current `/what-we-do` mirror: it's the umbrella term the current site uses for participatieve performances ("…a large-scale performance like *Mariage*"), not a peer practice. Under this Structure, **Participatieve performances** replaces it as the public category.
- Note **Apartheid Free Zones** placement: under Over Leon → Missie & visie (Strategy S-03).

## Concerns moves at v0.1 (carried into v0.2 — status [01-concerns](01-concerns.md))

- **Dn-19 · NEW Open** — vrijwilligers/stagiairs as site audience (Strategy persona + team email corpus pending).
- **Dn-16 · Closed** — Pers Won't-Have v1; recognition folds into Historiek.
- **Dn-12 · Open → Partly** — editie flow resolved structurally (inschrijving + deelnemer practical-info on editie page; publiek via Agenda); team verify remainder.

## Open going into Skeleton (Plane 4)

- **Home** — 5-tension interaction-design piece (invitation-forward · jury second-line signal · Agenda density preview · Samenwerken signposting · 4 top-level destinations findable in one scan).
- **NL/FR/EN URL & switcher** — path-prefix vs. domain vs. parameter · hreflang · context preservation.
- **Participatieve performances within-section shape** — chronological? grouped? archive-vs-upcoming?
- **Funder/partner wall placement** on non-home pages (footer vs. sticky strip).
- **Agenda density preview on home** — snapshot? count? mini-strip?
- **LWP + Leon rond de tafel public explainers** (1-line content task per Agenda entry-type).

## Validation gate

Inherited from Scope: **content-complete NL draft + Kristin's P1/P4 survey**. No second clarification meeting.

## Cross-links

- [00-design-plan](00-design-plan.md) · [01-concerns](01-concerns.md) · [20-scope](20-scope.md) · [Glossary](../glossary.md) · [90-image-map](90-image-map.md)
- Strategy: [Brief](../strategy/00-strategy-brief.md) · [Personas](../strategy/20-personas.md) · [Journeys](../strategy/50-user-journey.md) · [VP](../strategy/40-value-proposition.md)
