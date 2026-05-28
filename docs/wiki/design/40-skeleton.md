---
title: Skeleton — leon.dance redesign (Garrett Plane 4)
tags: [design, skeleton, wireframe, ia, garrett, pipeline]
sources: [ux-planning-playbook (Notion, retrieved 2026-05-27); 20-scope; 30-structure; 90-image-map; glossary; strategy/00-strategy-brief; strategy/20-personas; strategy/50-user-journey]
phase: design
updated: 2026-05-28
---

# Skeleton — leon.dance redesign

> **Plane** 4 (Garrett) · **Site-level** · **DRAFT v0.1** (2026-05-27). Opens the Skeleton
> phase. Owns: section list + state inventory + CTA placement *per page*, plus a
> **shared patterns library** (site-level prerequisite). This file is the **plane plan +
> page registry**; per-page briefs land in `42-briefs/<slug>.md` once they leave stub.
> v1 = **NL only**; FR/EN URL & routing model deferred (see [Dn-24](01-concerns.md)).

## Kern

1. **NL v1.** One language, one URL tree, NL slugs (live in [`routes/web.php`](../../../routes/web.php)).
   FR/EN deferred until NL pages reach Final.
2. **Shared patterns first.** No per-page brief leaves stub until the matching pattern is
   declared in §"Shared patterns library" below. Skeleton playbook: "page-level skeleton has
   a hard prerequisite — the site-level shared patterns library must exist first."
3. **One brief, one canonical home per fact.** Every load-bearing fact (dag+uur, address,
   inschrijving form, funder list, agenda dates) lives on exactly one page; other pages
   link to it. Briefs declare ownership.
4. **Anti-bloat is enforced upstream.** Section budget declared at the top of every brief;
   no either/or notes survive into Final; sections named by *user question*, not content
   type.
5. **Confidence travels with the page.** Every page row in the registry carries a 1–5
   content-confidence score + ≤3 gap pointers, so the content-writing step downstream knows
   where it is safe to ship strawman vs. needs client/team input first.

## Pipeline (per page)

The pipeline mirrors the real build workflow — a personal/internal tracker (client sign-off
belongs at the end but is **not** the goal). **Conf** sits early because it gates whether the
content can be written at all.

```
  UX  →  Conf  →  Wire  →  Assets  →  UI  →  Back  →  OK
  │      │        │        │          │       │        │
  │      │        │        │          │       │        └ client-approved (secondary)
  │      │        │        │          │       └ backend/CMS wired — or decided not-needed
  │      │        │        │          └ visual style applied + checked
  │      │        │        └ all right images + downloads gathered
  │      │        └ wireframe good: right content, clear hierarchy, well-designed; no style yet
  │      └ content-readiness 1–5: can I write the real copy per the briefing? (see Confidence scoring)
  └ UX briefing done: strategy + scope + structure + skeleton worked out for this page
```

Maps to the playbook planes: **UX** = Strategy→Scope→Structure→Skeleton · **Wire** = the
skeleton rendered as a grayscale front-end wireframe · **UI** = the Surface plane, per page.

Each stage carries one status:

| Status | Meaning |
|---|---|
| 🔴 **niet begonnen** | no real work done yet |
| 🟠 **bezig** | in progress / first version |
| 🟢 **goed** | good by your own standard |
| ⚪ **n.v.t.** | not applicable (e.g. no assets needed; no backend needed) |
| ❓ **te beslissen** | open question — do we even need this? (mainly **Back** / **Assets**) |

**Conf** is the exception: a 1–5 number (see [Confidence scoring](#confidence-scoring-content)),
not a coloured dot. **OK** is binary (🔴 niet · 🟢 goedgekeurd).

Two columns are uniform-by-design for now: **UI** is 🔴 everywhere until the site visual
direction is chosen ([Dn-20](01-concerns.md) / Dn-21), and **OK** is 🔴 everywhere (nothing
client-approved yet). **Back** is ❓ for most pages (CMS strategy undecided) and 🟠 where a
backend already runs (Event-model pages + the contact form).

**Component partials** (under `resources/views/partials/`) are introduced as the patterns
they render leave 🔴 stub: `nav.blade.php` (SP-01) + `footer.blade.php` (SP-02) +
`page-header.blade.php` (SP-04) shipped with Build v0.1; **`project-card.blade.php`**
(SP-05) + **`date-row.blade.php`** (SP-07) + **`funder-wall.blade.php`** (SP-09 with
`$variant` prop) + **`photo-block.blade.php`** (SP-13) added with the P-01 Home
strawman render. Each partial is the canonical implementation of its pattern.

## Confidence scoring (content)

Per page, scored against the question:

> *"Could I write high-quality NL copy for this page **today**?"*

| Score | State |
|------:|---|
| **1** | Vague brief; no source material; fundamental decisions pending. |
| **2** | Brief drafted, but key facts missing or unverified. |
| **3** | Could write strawman; would need team review for accuracy. |
| **4** | Could write near-final NL; minor verification + tone pass needed. |
| **5** | Client-confirmed material in hand; could write final copy now. |

**Top gaps** name the ≤3 pointers that, if filled, would raise the score. Each is tagged:

- `[content]` — need text/data from the team (SharePoint, email corpus, write-up).
- `[strategy]` — a `Dn-` or `S-` concern is open and blocks copy direction.
- `[asset]` — photo, logo, vector, video, or other production asset.
- `[client]` — a single decision is owed by the client.
- `[research]` — Frederik to investigate (technical, comparator, legal/GDPR).

## Section budgets (anti-bloat ceiling, per playbook)

| Page type | Sections + 1 CTA |
|---|---|
| Utility / index / contact | **3–5** + CTA |
| Marketing / info / story | **5–7** + CTA |
| Conversion / intake / home | **6–8** + CTA |

Budget is **declared at the top of every brief**. Overflow forces a cut decision *while
authoring*, not while implementing.

## State inventory checklist (per page, per brief)

For each page, enumerate explicitly. *Not every state applies to every page* — that's the
discipline (no defaulting to happy-path-only):

- **Default** / happy path — populated, functional.
- **Empty** — no content yet (e.g. Agenda with zero upcoming).
- **Loading** — content that takes time to arrive (Agenda filter, inschrijving submit).
- **Error** — validation, system failure, network failure.
- **Success / confirmation** — after actions complete (inschrijving submitted).
- **Overflow** — long names, long titles, long lists, truncation.
- **Conditional UI** — register-shaped variants (e.g. Samenwerken/opzetten copy for P3
  vs. P4 — same page, two registers per [Glossary](../glossary.md) copy notes).

Forms additionally need: *validating* (per-field), *submitting*, *success-async vs.
success-native*, *error-network*, *error-spam* (no leak of detection reason).

## Shared patterns library (site-level prerequisite)

> **Index only.** Full specs live in [41-patterns.md](41-patterns.md) — a pattern enters
> that file the moment it leaves 🔴 stub. **No page brief may reference an undeclared
> pattern.** Patterns get a stable ID (`SP-nn`).
>
> **v0.6 (2026-05-28, SP-08 agenda-list revived):** **14 / 14
> patterns** at 🟠 first draft. New since v0.4: **SP-16 Open-call band** — conditional
> band that renders only when an editie has `inschrijving_open = true`; variants `home`
> (between §1 hero and §2 photo on P-01, does **not** consume a section-budget slot) and
> `project` (above §4 editie-grid on P-05 Mariage); chip sibling on work-grid Mariage
> card (P-01 §3 + P-02 §2). Implemented as
> `resources/views/partials/open-call-band.blade.php`. **Candidate patterns surfaced**
> (not yet promoted — wait for 3rd use):
> SP-14 text-link rows (P-01 §5 + P-08 §2 + P-18 §3 = 3 uses, ready to promote) · SP-15
> map placeholder (P-18 only — defer until Leaflet bootstraps) · Person card (P-16
> local SP-NEW-1 — defer until 2nd use). **SP-10 built 2026-05-28** (interest-only
> inschrijving form, email-only, no store). **SP-08 Agenda list revived 2026-05-28**
> (list-only partial; un-deprecated once the SP-07 ×N skeleton hit four pages). **No
> patterns remain 🔴.**

| ID | Pattern | Used on | Status | Notes / spec |
|---|---|---|---|---|
| SP-01 | **Primary nav** | all | 🟠 first draft | sticky top · no hamburger · [spec](41-patterns.md#sp-01--primary-nav) |
| SP-02 | **Footer** | all | 🟠 first draft | 2 zones: SP-09 wall + bottom row · [spec](41-patterns.md#sp-02--footer) |
| SP-03 | **Hero — home** | P-01 only | 🟠 first draft | thin entry (page-specific); spec lives in [42-briefs/01-home §1](42-briefs/01-home.md) · [spec](41-patterns.md#sp-03--hero--home) |
| SP-04 | **Subpage top** | P-02 … P-18 | 🟠 first draft | eyebrow + h1 + lede default; variant B = SP-13 sibling · [spec](41-patterns.md#sp-04--subpage-top) |
| SP-05 | **Project card** | P-01 §3, P-02, P-05, agenda | 🟠 first draft | cover (optional) + title + 1-line desc + whole-card link · variants A photo / B text-only · [spec](41-patterns.md#sp-05--project-card) |
| SP-06 | **Editie card** | P-05, P-06, agenda | 🟠 first draft | dated cousin of SP-05; typed dates per [Glossary](../glossary.md); spec in [41-patterns](41-patterns.md#sp-06--editie-card) |
| SP-07 | **Date-row** | P-01 §4, P-03, P-05, P-06, P-12 | 🟠 first draft | atomic agenda row · variants A condensed / B full · type enum from Glossary · [spec](41-patterns.md#sp-07--date-row) |
| SP-08 | **Agenda list** | P-01 §4, P-03 §4, P-18 §3, mariage-editie §6 | 🟠 first draft | [`partials/agenda-list.blade.php`](../../../resources/views/partials/agenda-list.blade.php) — list-only wrapper around SP-07 (empty-state + bordered rows + optional trailing link). Props: events, href closure, emptyText, linkLabel?, linkHref?. **Revived 2026-05-28** (was deprecated). [spec](41-patterns.md#sp-08--agenda-list) |
| SP-09 | **Funder / partner wall** | footer + home strip + P-05 §6 inline | 🟠 first draft | 4 tiers · 3 variants A Full / B Featured / C Inline (drafted with P-05) · [spec](41-patterns.md#sp-09--funder--partner-wall) |
| SP-10 | **Inschrijving form** | editie pages | 🟠 first draft | [`partials/inschrijving-form.blade.php`](../../../resources/views/partials/inschrijving-form.blade.php) — server-handled (POST /inschrijving). **Interest-only** slice of [Dn-03](01-concerns.md): emails team, stores nothing. Live on Mariage editie §5. Participant DB + minors + ESP deferred. |
| SP-11 | **Contact pattern** | P-09 §8, P-10 §6 (inline first uses) | 🟠 first draft | h2 + intro + mailto primary + ghost secondary + GDPR-blocked annotation; lift to `partials/contact.blade.php` on 3rd caller |
| SP-16 | **Open-call band** | P-01 (between §1+§2, no section slot) + P-05 (above §4) + work-grid chip P-01/P-02 | 🟠 first draft | conditional · self-removing · variants `home`/`project` · eyebrow `NIEUWE EDITIE` + CTA `Ontdek deze editie` + optional closing-date line · [spec](41-patterns.md#sp-16--open-call-band) |
| SP-12 | **Quote / testimony block** | P-04 §5, P-05 §5, P-06 (Hadja), P-09 §6, P-14 §5, P-15 §3 | 🟠 first draft | [`partials/quote.blade.php`](../../../resources/views/partials/quote.blade.php) (NEW 2026-05-28) — variant A inline / B standalone / C pull-quote · no portrait by default |
| SP-13 | **Photo block** | P-01 §2, many | 🟠 first draft | single editorial photo + credit · variants A full-width / B contained / C inline · missing-asset = collapse (Dn-20 guard) · [spec](41-patterns.md#sp-13--photo-block) |

## Page registry — single source of status truth

Slug = NL route from [`routes/web.php`](../../../routes/web.php).
Type = section-budget tier (Utility / Marketing / Conversion).

| ID | Page | Slug | Type | UX | Conf | Wire | Assets | UI | Back | OK | Top gaps |
|---|---|---|---|---|---|---|---|---|---|---|---|
| P-01 | **Home** | `/` | Conv 6–8 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[content]` Kristin review NL strawman + confirm "sinds 2010" jaartal; `[asset]` hero photo + 4 card covers (Surface); `[content]` real partner data (SharePoint). §4 live from Event model; renders desktop+mobile, em-dash-free copy + full-width mobile CTAs — **awaiting Frederik's critique+refine before 🟢**. Brief: [42-briefs/01-home](42-briefs/01-home.md) |
| P-02 | **Dansateliers & performances** (index) | `/dansateliers-performances` | Util 3–5 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[content]` 4 card descriptions tone-check (Kristin); `[asset]` cover photo per sub-item (Surface). Renders desktop+mobile; shared work-grid copy + lede em-dash/banned-word-free — **awaiting critique+refine before 🟢**. Brief: [02-dansateliers-performances](42-briefs/02-dansateliers-performances.md) |
| P-03 | **Atelier Leon** | `/dansateliers-performances/atelier-leon` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟢 | 🔴 | `[content]` §4 times + venue addresses confirm (Sam/Kristin); `[content]` leeftijd-claim (consent); `[asset]` hero photo (Pianofabriek set). §4 "Waar en wanneer" + eerstvolgende live from Atelier/Venue models (Phase-1 normalization). Brief: [03-atelier-leon](42-briefs/03-atelier-leon.md) |
| P-04 | **Leon op school** | `/dansateliers-performances/leon-op-school` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[client]` Schoemaker quote consent (§5); `[content]` welzijn + zorg sector partner-org names (SharePoint); `[content]` cadence verify across sectors. Brief: [04-leon-op-school](42-briefs/04-leon-op-school.md) |
| P-05 | **Mariage** (project) | `/dansateliers-performances/mariage` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🟠 | 🔴 | 🟠 | 🔴 | `[content]` §5 + §6 strawman te bevestigen (Sam/Kristin); `[client]` Hadja quote consent; `[asset]` hero + editie cover photos. Editie-grid + open-call band (SP-16) live from Editie model; 6 real editions from current-site mirror + 1 invented future editie for sign-up testing. **§5 traject + embedded SP-12 quote + §6 commission CTA (Plan een gesprek → opzetten, SP-09 C inline partners) + Vimeo trailer in §2 + new upcoming-performance band now built** (render-verified; awaits Frederik's Wire-🟢 pass). Brief: [05-mariage](42-briefs/05-mariage.md) |
| P-06 | **Mariage editie** (template, 7 edities) | `/dansateliers-performances/mariage/{editie}` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[content]` per-editie prose + quotes (team-supplied, all editions). Editie page + §5 inschrijving state live from Editie model; 7 editions sourced from current-site mirror (6 real festival editions + 1 invented future for sign-up testing; fictional cities replaced), Filament admin; §5 inschrijving form live (SP-10, interest-only, email-only — Dn-03 contact-style slice). Brief: [06-mariage-editie](42-briefs/06-mariage-editie.md) |
| P-07 | **Mobiele dansstudio** | `/dansateliers-performances/mobiele-dansstudio` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[content]` Technische fiche cijfers (6 rijen strawman); `[content]` track record echte plaatsen + jaartallen; `[asset]` foto van de studio op locatie. Brief: [07-mobiele-dansstudio](42-briefs/07-mobiele-dansstudio.md) |
| P-08 | **Samenwerken** (index) | `/samenwerken` | Util 3–5 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[content]` Kristin tone pass on lede + Doen sub-line; `[client]` Sam confirm row order; `[strategy]` Dn-19 unblocks Doen substance. Renders desktop+mobile; link-list subs em-dash/banned-word-free (traject/werking removed) — **awaiting critique+refine before 🟢**. Brief: [08-samenwerken](42-briefs/08-samenwerken.md) |
| P-09 | **Participatief dansproject opzetten** | `/samenwerken/opzetten` | Conv 6–8 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[client]` §8 contact owner (Sam Schoetters vs. hallo@leon.dance); `[content]` §3 cadence verify; `[client]` §6 Schoemaker quote re-use consent. Brief: [09-opzetten](42-briefs/09-opzetten.md) · **SP-11 first use** |
| P-10 | **Mobiele dansstudio uitnodigen** | `/samenwerken/uitnodigen` | Conv 6–8 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[research]` **Dn-03 GDPR blocks form** (mailto + visible stub); `[content]` technische-fiche cijfers (shared with P-07); `[client]` cost-frame + SLA + contact owner. Brief: [10-uitnodigen](42-briefs/10-uitnodigen.md) |
| P-11 | **Vrijwilligerswerk of stage doen** | `/samenwerken/doen` | Util 3–5 | 🔴 | **1** | 🔴 | 🔴 | 🔴 | 🔴 | 🔴 | `[strategy]` **Dn-19 OPEN** — Strategy persona + JTBD pending; `[content]` team-email-corpus pending; *page stays placeholder until both arrive* |
| P-12 | **Agenda** | `/agenda` | Util 3–5 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[content]` internal-event explainer copy (Kristin); `[content]` "Klas" filter label clarity for P1; `[research]` editie-routing precision (voorstelling with editie_slug → P-06). Brief: [12-agenda](42-briefs/12-agenda.md) · URL-state filters live |
| P-13 | **Over Leon** (index) | `/over-leon` | Util 3–5 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[strategy]` card order (nav-default vs. jury-arrival J2); `[content]` Sam jaartal-confirm "16/5 jaar"; `[content]` Kristin tone-pass on 5 card descriptions. Renders desktop+mobile; Historiek card em-dash-free — **awaiting critique+refine before 🟢**. Brief: [13-over-leon](42-briefs/13-over-leon.md) |
| P-14 | **Missie & visie** | `/over-leon/missie-visie` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[client]` Sam/Kristin sign-off on editorial cuts (drop 6-value list + drop 4-method block); `[client]` AFZ framing approval; `[client]` Hadja quote consent (shared with P-05). Brief: [14-missie-visie](42-briefs/14-missie-visie.md) |
| P-15 | **Impact** | `/over-leon/impact` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | 🟠 | 🔴 | `[content]` Sam/Kristin write final §2 four-beat + §3 nazorg prose; `[client]` Hadja consent (shared with P-05); `[content]` "Sinds 2010" jaartal confirm. Brief: [15-impact](42-briefs/15-impact.md) · `partials/quote.blade.php` NEW |
| P-16 | **Team** | `/over-leon/team` | Util 3–5 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[content]` per-persoon context lines for kerngroep; `[content]` per-artiest role-tags for ~12 geassocieerd pool; `[asset]` team-portretten rights-cleared. Brief: [16-team](42-briefs/16-team.md) · **SP-NEW-1 Person card** (P-16-local) |
| P-17 | **Historiek** | `/over-leon/historiek` | Mkt 5–7 | 🟢 | **3** | 🟠 | 🔴 | 🔴 | ❓ | 🔴 | `[content]` §5 juried-selection rijen (Sam/Kristin); `[content]` jaartallen verify (2010 UV start · Atelier Quartier datum · Birds tour-direction); `[asset]` §6 editorial photo. Brief: [17-historiek](42-briefs/17-historiek.md) |
| P-18 | **Contact** | `/over-leon/contact` | Util 3–5 | 🟢 | **4** | 🟢 | ⚪ | 🔴 | 🟢 | 🔴 | `[client]` Sam confirms snapshot data (email · phone · 2 addresses · BTW); `[content]` "in voorbereiding" tag wording (shared with P-08). OSM coords fixed (Osseghemstraat 53, zoom 15, permanent label) + open-atelier list live from Event model. Brief: [18-contact](42-briefs/18-contact.md) |

### Roll-up

- **Page count:** 18 (NL v1).
- **Pipeline model reworked 2026-05-28** to the build workflow: **UX · Conf · Wire ·
  Assets · UI · Back · OK** (was Brief · Wire · Content · Code · Approved). Content folds
  into Conf (readiness) + Wire (in-place); Assets + UI (Surface) split out; Code → Back
  (data/CMS, with ⚪ n.v.t. / ❓ te-beslissen states).
- **Pipeline state:** **UX 🟢** for 17/18 (briefings done; P-11 🔴 — Dn-19). **Wire-🟢 gate:**
  a page reaches **🟢 only after Frederik's own critique + refine pass** — Claude's render/tone
  check takes a page to 🟠, not 🟢. Currently **🟢 P-18** only · **🟠** for 16 (of which
  **P-01, P-02, P-05, P-08, P-13** have had a render + tone-sweep pass — em-dash / banned-word fixes,
  mobile-CTA — and are queued for that critique) · **🔴 P-11** (Dn-19).
  **UI 🔴** everywhere (Surface not opened); **Assets 🔴** except **P-18 ⚪** (no assets needed)
  and **P-05 🟠** (Vimeo trailer embedded in §2; hero + editie photos still pending).
  **Back 🟠** where a backend runs (P-01/05/06/09/10/12/15), **🟢 P-18 + P-03** (open-atelier
  lists live; P-03 §4 cadence + eerstvolgende from Atelier/Venue models), ❓ elsewhere. **OK 🔴** everywhere.
- **Avg content-confidence:** **2.9 / 5** (median 3, was 2.6). Only **1 page** at score
  ≤ 2: **P-11 Doen** (1 — hard blocker). **P-06 Mariage editie** raised **2 → 3** once the
  Editie model + seeded edities landed; editions are now the 6 real festival editions sourced
  from the current-site mirror (+ 1 invented future for sign-up testing), with per-editie
  prose/quotes still team-supplied (kept at 3). **P-18 Contact** highest at **4** (snapshot
  data verified verbatim from current-site mirror).
- **Hard blocker:** P-11 (Dn-19 Strategy work pending — only page still 🔴 across the board).
- **Soft blockers across many pages:** SharePoint content extraction (photos, partner
  lists, quotes, team material) is still the single biggest cross-page gap. Per-page
  content review by Kristin/Sam will lift most pages 3 → 4.

## Validation gate (playbook checklist)

A page row may reach **🟢 Final** only when its brief passes:

- [ ] **Sections** answer a user question (not a content type).
- [ ] **One** visually-dominant primary CTA + 1–2 secondary.
- [ ] **State inventory** explicit (not just happy path).
- [ ] **Section budget** declared and respected.
- [ ] **No either/or** notes survive.
- [ ] **Patterns** referenced by SP-id, or divergence justified inline.
- [ ] **Canonical home** named for every load-bearing fact on the page.
- [ ] **Mobile-first** sketch precedes desktop.

The plane reaches **DRAFT v0.2** when shared patterns library exits stub (all SP-rows
at least 🟠 first draft). The plane reaches **CONCLUDED** when every page is **✅
approved** *or* explicitly `Won't-Have v1`.

## Open going into Surface (Plane 5 — not yet opened)

Carries forward from Structure ([30-structure §"Open going into Skeleton"](30-structure.md))
+ Skeleton-specific:

- **NL/FR/EN URL & switcher model** ([Dn-24](01-concerns.md) NEW · path-prefix vs.
  domain vs. parameter · hreflang · context preservation).
- **Visual register & motion** ([Dn-20 + Dn-21](01-concerns.md)) — selection still owed
  by client.
- **5-tension home synthesis** — needs a working session, not just a brief.

## Cross-links

- Plane plan: [00-design-plan](00-design-plan.md) · Status: [01-concerns](01-concerns.md)
- Inputs: [20-scope](20-scope.md) · [30-structure](30-structure.md) · [Glossary](../glossary.md) · [90-image-map](90-image-map.md) · [50-visual-inspiration](50-visual-inspiration.md)
- Strategy: [Brief](../strategy/00-strategy-brief.md) · [Personas](../strategy/20-personas.md) · [Journeys](../strategy/50-user-journey.md)
- Code: [`routes/web.php`](../../../routes/web.php) · [`resources/views/`](../../../resources/views/) · [`DESIGN.md`](../../../DESIGN.md)
- Method: UX Planning playbook (Notion, retrieved 2026-05-27 — full digest summarised here)
