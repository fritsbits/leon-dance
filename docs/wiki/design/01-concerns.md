---
title: Design — Concerns Register
tags: [design, concerns, status, phase-management]
sources: [client kickoff 2026-05-19; client interview 2026-05-19; strategy/00-strategy-brief; strategy/90-research-evidence-2026-05-19; 90-image-map; glossary; 20-scope; 30-structure; structure-workshop 2026-05-20]
phase: design
updated: 2026-05-28
---

# Design — Concerns Register

The **single authoritative status index** for the Design phase (see
[`CLAUDE.md`](../../../CLAUDE.md) → "Concerns register (per phase)"). Every open question,
unverified assumption (⚠️), risk, or decision-needed that bears on the design outcome is one
**deduplicated** concern with a stable ID (`Dn-nn`). Per-plane "Open questions" sections are
*local detail*; **this page owns the status**. Reconciled on every ingest/lint.

**Status legend:** `Open` = unresolved · `Partly` = partially resolved, remainder named ·
`Closed` = answered/decided/deferred (always with a resolution + pointer).

**Boundary with the STRATEGY thread.** The Strategy plane is owned by a separate thread.
Strategic concerns (audience ranking, North Star, value proposition, antenne strategy, AFZ
placement, donor/membership *as an audience*) are **not re-litigated here** — flagged
`→ Strategy thread` and consumed as inputs. This register owns only concerns whose
resolution changes the **design**.

## Phase-conclusion readiness

| Status | Count |
|--------|------:|
| Closed | 11 |
| Partly | 4 |
| Open | 11 |
| **Total** | **26** |

Updated after **2026-05-28 open-call / inschrijving flow** (8-task build wave on `feat/open-call-inschrijving`):
Hard-coded editie slug→metadata map graduates to **`App\Models\Editie`** Eloquent model + **Filament `EditieResource`** — the first Build-phase data model. ⚠️ Build-phase concerns use prefix `B-` in `docs/wiki/build/01-concerns.md` (that register does not exist yet — create it when the Build phase formally opens).
**Dn-12**: inschrijving sub-flow now modelled (`Editie.inschrijving_open` bool + `inschrijving_closes_at` auto-close) and surfaced site-wide (home SP-16 band · Mariage §4 model cards · work-grid chip · editie §5 state logic). Remains **Partly** — team verification + SP-10 form still pending.
**Dn-03**: open-call *flow* built (editie §5 CTA → `mailto:` when `inschrijving_open`); inschrijving *form* (minors consent) and newsletter remain **Open [BLOCKER]** — unchanged.
**Dn-22**: **SP-16 Open-call band** added 🟠 first draft (`partials/open-call-band.blade.php`; variants `home` / `project`; conditional self-removing). **12 / 14 patterns** at 🟠 first draft. SP-10 still 🔴 (Dn-03 minors slice).

Updated after **2026-05-28 contact form build** ([spec](../../superpowers/specs/2026-05-28-contact-form-design.md)):
**Dn-03** Open [BLOCKER] → **Partly** — contact-request slice resolved (legitimate-interest,
no stored data); inschrijving (minors) + newsletter/ESP slices remain Open [BLOCKER].
**Dn-22**: SP-11 promoted to a real partial (`partials/contact-form.blade.php`); SP-10 still 🔴 (Dn-03 minors slice).

Updated after **2026-05-27 P-01 Home brief v0.1** ([42-briefs/01-home.md](42-briefs/01-home.md)):
**Dn-22** patterns library Partly → still Partly but **8 / 13 drafted** — P-01
brief surfaced SP-03 · SP-05 · SP-07 · SP-13. **Dn-23** content-confidence baseline
Open → **Partly** (P-01 lifted 2 → 3; first page to advance beyond Brief stub).

Earlier today: **Skeleton patterns library v0.1** ([41-patterns.md](41-patterns.md))
— **Dn-22** Open → **Partly** (4/13 patterns at 🟠 first draft: SP-01 nav · SP-02 footer
· SP-04 subpage top · SP-09 funder wall — the structural shell). 9 patterns remained 🔴 stub.

Earlier same day: the **Skeleton-plane opening** ([40-skeleton](40-skeleton.md))
surfaced **Dn-22** patterns library still stub; **Dn-23** content-confidence baseline =
avg 2.5/5; **Dn-24** NL/FR/EN routing model deferred. All three are tracked-not-blocking;
Skeleton runs NL-only v1.

Earlier baseline: the **2026-05-20 Structure-plane crystallisation** ([30-structure](30-structure.md))
on top of the prior 2026-05-19 series (interview + Strategy-v1 reconciliation → Scope v0.2;
image-map ingest = Dn-15; glossary v3 = Dn-14 Partly; Strategy-v1.x review + 2nd interview →
Scope v0.3 = Dn-16/17/18). **Structure-2026-05-20 moves:** **Dn-16** Open → **Closed**
(standalone Pers page = Won't-Have v1; recognition folds into Over Leon → Historiek);
**Dn-12** Open → **Partly** (editie *flow* resolved structurally — inschrijving + deelnemer
practical-info on editie page; publiek via Agenda; team verification still pending);
**Dn-19** added · Open (vrijwilligers/stagiairs new audience surface — Strategy persona work
+ team email corpus pending). **Closed 6** (Dn-01/05/06/16/17/18) · **Partly 4**
(Dn-07/09/12/14) · **Open 9** (research/material Dn-02/03/04/10/11/15, team/client next
session Dn-13, Strategy-owned Dn-08, new Dn-19). **None silently Open.** ⚠️ **Design cannot
conclude**: Scope still DRAFT v0.3 (gate = content-complete NL draft **+ Kristin's P1/P4
survey** — no second clarification meeting); Structure DRAFT v0.2 (2026-05-20 — 4-item nav
restructure: Dansateliers + Voorstellingen & projecten merged into *Dansateliers &
performances*; Birds → Historiek; terse rewrite for downstream LLM use).

## A. Strategy dependency

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-01 | Scope rested on an *interim* strategy basis. | **Closed** | [00](00-design-plan.md), [20](20-scope.md) | **Strategy v1 landed**; Scope **v0.2 reconciled**, **v0.3** folds Strategy-v1.x (rubric, S-11/S-12). Strategy 2026-05-19. |
| Dn-08 | Antenne **concentrate-vs-spread** — undecided org strategy; shapes the location/impact surface. | Open | [20](20-scope.md) | Owner: **Strategy thread** ([S-04](../strategy/01-concerns.md)). Design cannot finalise that surface until decided. |

## B. Scope decisions (resolved by the 2026-05-19 interviews)

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-05 | **Ticketing / payments** in scope? | **Closed** | [20](20-scope.md) §5 | **Hard Won't-Have** — free / partner-ticketed. client 2026-05-19. |
| Dn-06 | **Media / recap feed with participant contributions**? | **Closed** | [20](20-scope.md) F3 | **No feed, no uploads.** Archive reused **site-wide as social proof** (D-iii). client 2026-05-19. |
| Dn-17 | **Individual-donor / membership** path in v1? | **Closed** | [20](20-scope.md) §5 | **Won't-Have v1** (client: "wont have"). Re-opens only if the client later raises it → then a new audience + goal, owned by **Strategy [S-10](../strategy/01-concerns.md)** (the *audience* question stays Open there). interview 2026-05-19. |
| Dn-18 | **Booking depth** — contact request vs. a dedicated booking section / paid-offers system (← [S-05](../strategy/01-concerns.md)). | **Closed** | [20](20-scope.md) F11 | **Contact request only** (client: "just a contact request is fine"). No booking engine. Resolves S-05 *for Design*. interview 2026-05-19. |
| Dn-07 | **Internal freelance-artist backstage** (mentor-form) — in/out? | **Partly** | [20](20-scope.md) F13 | **Out of this phase, deep** ([S-06](../strategy/01-concerns.md)); P6 light/named. **Remainder:** attendance self-management → [Dn-13]. |
| Dn-09 | No hard launch date; phasing model? | **Closed** | [20](20-scope.md) §7 | **Single all-in launch + trim order** decided — the only design-relevant question. The literal calendar date is client scheduling (de-facto G1 anchor), not a design decision; nothing left for Design. Closed 2026-05-29. |
| Dn-25 | **Samenwerken hub collapses to a single page.** P-02 UX redesign (2026-05-28) surfaces *opzetten* + *uitnodigen* as the org-spoor on the Dansateliers & performances hub. Decided in principle: **fold the Samenwerken page content into the two relevant pages under this hub** — *uitnodigen* → **Mobiele dansstudio** (P-07), *opzetten* → the relevant project/traject context — leaving Samenwerken as a **single** page (*Vrijwilligerswerk of stage doen*) that then needs a compacter, non-hub titel. | **Partly** | [30](30-structure.md) · [42-briefs/02](42-briefs/02-dansateliers-performances.md) | **Decision made; execution deferred to its own etappe.** P-02 is built as a *router* (org-spoor links to *opzetten*/*uitnodigen* at current URLs), so it survives the move unchanged — re-point links when the fold happens. Touches Structure (nav) + P-07 + P-08/09/10. New 2026-05-28 (live UX session). |

## C. Build / technical — research & client material

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-02 | **Notion ↔ website coupling** feasibility. | Open | [20](20-scope.md) §8 | Owner: **Frederik research**; *later/light*, **not** a Scope requirement. |
| Dn-03 | **GDPR / consent for v1 form flows** (contact-request + inschrijving-*interesse*). Contact-request slice **resolved** (legitimate-interest / pre-contractual basis, no personal data stored — emailed only; [spec 2026-05-28](../../superpowers/specs/2026-05-28-contact-form-design.md)). **Inschrijving-*interesse* slice resolved 2026-05-28** — same basis: editie-signup form takes naam + e-mail + optioneel bericht, emails the team, **stores nothing** (no special-category data; actual enrollment + parental consent for minors stays offline). **Still blocked (Dn-03 itself):** an **internal, *stored* participant database** (deelnemers held by Leon, incl. **minors → consent capture**). The **external newsletter / ESP** is a *separate* concern — see [Dn-11] — not part of this row. | **Closed** *(for Design)* | [20](20-scope.md) F5/F6 | Contact form built 2026-05-28; **inschrijving-interesse form (SP-10) built 2026-05-28** (POST /inschrijving → InschrijvingController → InschrijvingRequestMail; email-only, no store; live on Mariage editie §5). Privacy page populated 2026-05-28 (real AVG Art. 13 copy for the contact flow; mail provider = Resend → US transfer disclosed under EU-VS DPF + SCC's; internal Art. 30 register created). **Closed for Design 2026-05-29:** every v1 form flow stores nothing → no design-phase GDPR decision left. The one remainder — an internal **stored participant DB (incl. minors → consent capture)** — is **not in v1** (v1 stores nothing) and is a data-model decision: it **graduates to the Build register (`B-`)** when that phase opens, to be resolved before any *stored* inschrijving is built. External newsletter ESP stays separate at [Dn-11]. |
| Dn-04 | **Which evidence/figures** are safe, and how. | Open | [20](20-scope.md) F2 | Client material (SharePoint), jointly [S-08](../strategy/01-concerns.md). **Now rubric-anchored** (method-meerwaarde · process/*nazorg*/continuity · quality-evolution) — but selected **loosely** ([S-12]: 28–32 aandachtspunten not public; only the *structure* is durable) and surfaced **invisibly** (never visible jury-checklist language — Scope v0.3 guardrail). |
| Dn-10 | **Accessibility target & brand assets** (vector logo/type/colour, WCAG). | Open | [20](20-scope.md) §4, [90](90-image-map.md) | Client material. Needed by Skeleton/Surface; not blocking Scope. Evidenced: only low-res raster logos exist. |
| Dn-15 | **Photo-archive reuse rights / credit obligations uncatalogued** (~10 photographers, filenames only). | Open *(deferred, non-blocking)* | [90](90-image-map.md), [20](20-scope.md) §8 | **Client decision: "figure that out later, where needed"** — handled **per-asset at Skeleton/Surface** as specific assets are placed; **not a Scope blocker** (revises the earlier "gates the photographic surface" framing). Coverage skew (≈63/70 = Atelier Leon + *Mariage*) = a non-blocking SharePoint content-ask. interview 2026-05-19. |
| Dn-11 | **Newsletter ESP**: provider choice, **migrate Squarespace contacts**, embed form, **recurring-cost sign-off**. | Open **[BLOCKER]** | [20](20-scope.md) F6 | Frederik investigates; **flag the cost to the team** + get sign-off before committing. |

## D. Verify with the team / client (next session)

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-12 | **Editie page flow** — does it also serve the *publiek* who want to watch (*inschrijving* / *deelnemer* practical-info / *toeschouwer* attend = up to 3 flows)? | **Closed** | [20](20-scope.md) F4, §7 · [30](30-structure.md) | **Date-type vocabulary settled** ([Glossary](../glossary.md): *open atelier · repetitie · try-out · voorstelling*). **Flow resolved by Structure 2026-05-20:** editie page carries *inschrijving + deelnemer practical-info*; *publiek* arrives via the **Agenda** (each *voorstelling* entry deep-links to its editie). Inschrijving sub-flow modelled: `Editie.inschrijving_open` (team toggle) + `inschrijving_closes_at` (auto-close); §5 copy driven by `isInschrijvingOpen()` (3 reading-modes: open / gesloten-niet-afgelopen / afgelopen); site-wide surfacing via SP-16 band on home + Mariage and work-grid chip on P-02/P-01. **Closed 2026-05-29:** all three flows decided + built (interest-only). The remainders are non-design: team-verification is QA, and the deeper minors-consent form is the *stored-DB* slice tracked at [Dn-03] (→ Build register). |
| Dn-13 | **Backstage attendance** — Kristin's attendance form; could it join the light admin? Self-managed attendance under debate. | Open | [20](20-scope.md) F13 | **Not in v1** provisionally. See Kristin's form; verify with the team. (Split from Dn-07.) |
| Dn-16 | **Is press/recognition substantial enough for a standalone "Pers" page?** *Mariage* has **zero published critic reviews**; recognition = lineage-proxy + juried *selection* (no won prizes). | **Closed** | [20](20-scope.md) F10, §4 · [30](30-structure.md) | **Won't-Have v1** (Structure workshop 2026-05-20 → user: "Pers gone for now"). No standalone page; recognition folds into **Over Leon → Historiek** (lineage-proxy + juried selection — never "award-winning"). Re-opens only if substantial *Mariage* press surfaces later. **Scope F10 demotes DECISION → Won't-Have** on next reconciliation. |
| Dn-14 | **Terminology — one shared vocabulary** used in code, admin and site (project / editie / groep / deelnemer / publiek / voorstelling / inschrijving / atelier / typed dates / mobiele dansstudio). | **Closed** | [Glossary](../glossary.md) · [30](30-structure.md) | **Vocabulary settled** (Glossary v3, user-steer 2026-05-19: no two-layer split — Frederik & team work in both surfaces, so one set of words): `creatie`→`project`; `werking` dropped (recurring practices named individually); `traject` is funder-page copy only; `voortraject/cohort/antenne/"Nope"` = in-house jargon, never user-facing. The persona-debate substance (P1–P6) survives as **page-level copy notes** in the Glossary — not a parallel naming system. **Resolves** the Scope F4 modelling (*Mariage* = project, dated staging = editie) + Dn-12 date-types. **IA root label resolved at Structure 2026-05-20**: no overview root; top-level = *Voorstellingen & projecten* + recurring practices distribute by audience. **Closed 2026-05-29:** the vocabulary itself is settled and in active use across code, admin (Filament) and site. Writing each page's copy is ordinary content work, owned by [Dn-23] (content-confidence), not a terminology question. |
| Dn-26 | **"Sinds 2010 / 16 jaar" longevity claim — entity vs. practice.** Leon **vzw is opgericht in 2021** ([16-team](42-briefs/16-team.md)); the site-wide *"sinds 2010 / 16 jaar bezig"* frame (P-01 Home, P-15 Impact, P-17 Historiek) describes the **practice lineage** — which ran under a prior structure, not the vzw. Stating "16 jaar" baldly conflates the choreographer's lineage with the organisation → contestable, and undercuts the trust the page is built to earn (flagged by Frederik 2026-05-29). **Decision needed:** what longevity claim is honest, and how to frame the 2010-lineage-vs-2021-vzw split (canonical home = **Historiek**). | **Closed** | [42-briefs/16-team](42-briefs/16-team.md) · [42-briefs/15-impact](42-briefs/15-impact.md) · P-01/P-13/P-15/P-17 | **Resolved 2026-05-29 (Frederik ruling): canonical phrasing = *"16 jaar bezig, 5 jaar (als) vzw"*** — never a bald "16 jaar" for the organisation. Applied everywhere: **Home** hero + meta (*"16 jaar bezig in Brussel, 5 jaar als vzw"*), **Impact** description + cijfers (split into two stats: `{{ yearsActive }}` jaar samen dansen sinds 2010, binnen Ultima Vez · `{{ vzwYears }}` jaar als eigen vzw sinds 2021), and already-honest **Historiek** + **Over-index**. P-02 hero number stays pulled. ⚠️ Underlying *factual* longevity (is 2010 the right lineage start?) stays a content detail for Kristin/Sam to confirm, but the **framing decision is made** → Design-closed. |
| Dn-19 | **Vrijwilligers / stagiairs as a site audience.** New surface (*Samenwerken → Vrijwilligerswerk of stage doen*). Surfaced at the team Structure workshop 2026-05-20: team gets recurring email enquiries for both; they confirmed it deserves a section. | Open | [30](30-structure.md) | Needs **persona + JTBD + user-journey** from the **Strategy thread** (new S- concern to open on next Strategy sync). **Input pending:** team to share the email corpus → file under `docs/raw/research/` when received. Page placeholder stands in the IA; content waits on the persona work. Not a Structure blocker. New 2026-05-20. |

## E. Surface (visual direction)

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-20 | **Visual direction not yet chosen.** Surface plane (Garrett 5) is **research-collecting**, not opened. Inspiration library of 18 references assembled ([50-visual-inspiration.md](50-visual-inspiration.md)) with 8 elevated as **north-stars** — primary takeaways: *photo selection IS positioning* (Boris Charmatz · Liz Lerman · ImPulsTanz · Walker); *multilingual surface as identity not chrome* (Pro Helvetia · KW · Avignon); *calm wordmark + hot content*; *time-anchored content keeps site alive*; *maintainability is a Surface concern, not just a Scope concern*. Plus a Plain-NL question (KW's *Einfache Sprache*) to take to client + editor (Kristin). Surface decisions await Skeleton landing — but the **anti-patterns list** (autoplay-video hero · empty void hero · hidden hamburger · transactional CTA register) is already a guardrail for Skeleton work. | Open | [50](50-visual-inspiration.md), [00](00-design-plan.md), [90](90-image-map.md) | Plane formally opens after [Skeleton 40](40-skeleton.md) lands. **Cross-check pending:** screen Leon's [image map](90-image-map.md) against the Boris Charmatz / ImPulsTanz photo-discipline benchmark; flag any home-candidate photo that fails the *visitekaartje-AND-participant* test. New 2026-05-26. |
| Dn-22 | **Shared patterns library — 15 / 15 at WF 🟠; UI (Surface) pending.** Now staged like the pages pipeline: **WF** (wireframe-partial) + **UI** (Surface) columns + shared legend in [40-skeleton](40-skeleton.md) (2026-05-29). Site-level Skeleton prerequisite. **v0.1:** SP-01/02/04/09. **v0.2 (P-01 brief):** + SP-03/05/07/13. **v0.3 (P-05 Mariage brief):** + SP-06/SP-12 + SP-09 variant C. **v0.4 (2026-05-28 autonomous 15-page wave):** + **SP-11** Contact pattern **promoted to a real server-handled partial** (`partials/contact-form.blade.php`, 2026-05-28; live on P-10 uitnodigen + P-18 contact). **SP-08 DEPRECATED** (superseded by direct SP-07 ×N in P-01 §4 + P-15). **SP-12** now has a Blade partial (`partials/quote.blade.php`, created by P-15). **v0.5 (2026-05-28 open-call build):** + **SP-16 Open-call band** 🟠 first draft (`partials/open-call-band.blade.php`; variants `home` / `project`; conditional/self-removing; eyebrow `NIEUWE EDITIE` + CTA `Ontdek deze editie` + optional closing-date line). **v0.6 (2026-05-28):** **SP-08 Agenda list revived** — un-deprecated and built as a list-only `@include` partial (`partials/agenda-list.blade.php`; props events / href-closure / emptyText / linkLabel? / linkHref?) once the SP-07 ×N skeleton duplication hit 4 pages (P-01 §4, P-03 §4, P-18 §3, mariage-editie §6). | **Partly** | [40-skeleton](40-skeleton.md) · [41-patterns.md](41-patterns.md) | **6 / 15 patterns at WF 🟢** (SP-01 nav · SP-02 footer · SP-04 subpage-top · SP-07 date-row · SP-08 agenda-list · SP-09 funder-wall — **Frederik-promoted 2026-05-29**); the other 9 at WF 🟠; **UI 🔴 everywhere** (Surface plane not opened — Dn-20/21). SP-10's deeper slice (participant DB + minors) stays deferred to Dn-03. **Not-yet-promoted candidates:** SP-14 text-link rows (3 uses — ready), Person card (await 2nd use), SP-15 map placeholder (now superseded by SP-17). |
| Dn-23 | **Avg page content-confidence = 2.9 / 5** (median 3, was 2.6). **2026-05-28 autonomous 15-page wave:** 14 pages lifted from 🔴 stub across all 5 stages → 🟠 first draft, with strawman content + rendered code (live at https://leon.test). Confidence distribution: **P-18 Contact 4** (snapshot data verified verbatim); 15 pages at 3; **P-06 Mariage editie 2** (per-editie facts gap × 5 instances); **P-11 Doen 1** (hard blocker). Largest cross-page gap is still SharePoint content extraction (photos, partner lists, quotes, team material). Per-page review by Kristin/Sam will lift most to 4. | **Partly** | [40-skeleton §Page registry](40-skeleton.md) · [42-briefs/](42-briefs/) | Resolves page-by-page as client review + assets arrive. Tracked in the page registry's `Conf` column + `Top gaps`. Tagged: `[content]` / `[strategy]` / `[asset]` / `[client]` / `[research]`. |
| Dn-24 | **NL/FR/EN URL & switcher routing model deferred.** Carried over from Structure ([30-structure §Site-wide components](30-structure.md)); v1 ships NL-only (per [`CLAUDE.md`](../../../CLAUDE.md) Build phase: "NL is the v1 language. FR/EN URL & routing model is deferred to Skeleton"). Options: path-prefix (`/fr/…`) vs. domain (`fr.leon.dance`) vs. parameter; hreflang strategy; context preservation on language switch. | Open | [40-skeleton](40-skeleton.md), [30-structure](30-structure.md) | Decide after NL v1 pages reach 🟢 Final — by then the content shape is stable enough to evaluate routing trade-offs. Not a NL v1 blocker. New 2026-05-27. |
| Dn-21 | **Motion / kinetic register not yet chosen.** Client pushback on the static-only library prompted a kinetic-references pivot: 17 URLs curated under two registers — 🌬 *Breathing · slow · cinematic* (Mubi · A24 · Ableton Learning Music · Pentagram · Apple AirPods Max · ICA · Studio Dumbar · Wayne McGregor) and 👆 *Cursor-as-choreographer · scroll-as-phrasing* (Locomotive · Hello Monday · Anti · Active Theory · Rauno · Linear · Klim · Studio Feixen · Bruno Simon). Two other registers (playful-bouncy, physics-WebGL) explicitly excluded as off-brand. Client will do live discovery; selection feedback pending. ⚠️ **Scope implication:** motion-as-substance means it must be **systematic** (component-level, design-system-resident — Kristin can't author timing curves); the [photo brief](90-image-map.md) may need to expand to *moving-image* assets; performance/battery cost rises. **Surfaces a future Scope-amendment** if a kinetic direction is chosen. | Open | [50 §Kinetic](50-visual-inspiration.md#kinetic-references--sites-that-move), [20](20-scope.md), [90](90-image-map.md) | Awaits client live-browsing feedback on the 17 URLs → register pick → then formalise the Scope-amendment (motion-as-systematic + photo-brief expansion + perf budget). New 2026-05-26. |

## Carry-forward note

Discovery's strategic carry-forwards stay with the Strategy thread; only design-changing
concerns are lifted into `Dn-` IDs. Trace-back: Dn-02/03/04/08 → discovery/kickoff;
Dn-11/12/13/14 → 2026-05-19 interview; Dn-15 → Phase-1 image-map; **Dn-16 ← S-11
(decided Won't-Have v1 at Structure 2026-05-20); Dn-17 ← S-10 (decided Won't-Have here,
audience question stays Strategy); Dn-18 ← S-05 (decided contact-request here); Dn-19 →
new Strategy concern (vrijwilligers/stagiairs persona work)**. Reconciled on lint.

## Scope reconciliations pending (Structure-surfaced, 2026-05-20)

Not new `Dn-` concerns — items where Structure decisions amend Scope; the Scope doc itself
will be touched on next ingest (see [30-structure §"Reconciliation with Scope"](30-structure.md#reconciliation-with-scope)):

- **Scope Kern 3** ("overview root holds practices + projecten") → Structure decides
  **no overview root**; recurring practices distribute by audience-fit; *Voorstellingen &
  projecten* is its own top-level branch.
- **Scope F10** Pers DECISION → **Won't-Have v1** (per Dn-16 closure).
- **Scope F11** "Bookable dossier" → partly **amended** by the *trajectory-not-product* IA
  principle: Leon's bookable offers are (i) commission a participatory project via
  *Participatief dansproject opzetten*, (ii) book the mobile studio via *Mobiele dansstudio
  uitnodigen*. There is no "tour a finished work" path. F11's contact-request component
  stands.
- **Scope F2/F3** proof ladder → **distributed** under Structure (Impact slim + V&P
  trajectory documentation + Historiek + Agenda density signal + site-wide funder wall);
  no standalone "for funders" page.
