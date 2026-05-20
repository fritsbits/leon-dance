---
title: Design — Concerns Register
tags: [design, concerns, status, phase-management]
sources: [12-client-kickoff-2026-05-19, client-interview-2026-05-19, strategy/00-strategy-brief, strategy/90-research-evidence-2026-05-19, 90-image-map, glossary, discovery/01-concerns, 20-scope, 30-structure, structure-workshop-2026-05-20 (Frederik, in this thread)]
phase: design
updated: 2026-05-20
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
| Closed | 6 |
| Partly | 4 |
| Open | 9 |
| **Total** | **19** |

Updated after the **2026-05-20 Structure-plane crystallisation** ([30-structure](30-structure.md))
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
| Dn-01 | Scope rested on an *interim* strategy basis (discovery 11+12). | **Closed** | [00](00-design-plan.md), [20](20-scope.md) | **Strategy v1 landed**; Scope **v0.2 reconciled**, **v0.3** folds Strategy-v1.x (rubric, S-11/S-12). strategy 2026-05-19 → [20-scope §"What changed"](20-scope.md). |
| Dn-08 | Antenne **concentrate-vs-spread** — undecided org strategy; shapes the location/impact surface. | Open | [20](20-scope.md) | Owner: **Strategy thread** ([S-04](../strategy/01-concerns.md)). Design cannot finalise that surface until decided. |

## B. Scope decisions (resolved by the 2026-05-19 interviews)

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-05 | **Ticketing / payments** in scope? | **Closed** | [20](20-scope.md) §5 | **Hard Won't-Have** — free / partner-ticketed. client 2026-05-19. |
| Dn-06 | **Media / recap feed with participant contributions**? | **Closed** | [20](20-scope.md) F3 | **No feed, no uploads.** Archive reused **site-wide as social proof** (D-iii). client 2026-05-19. |
| Dn-17 | **Individual-donor / membership** path in v1? | **Closed** | [20](20-scope.md) §5 | **Won't-Have v1** (client: "wont have"). Re-opens only if the client later raises it → then a new audience + goal, owned by **Strategy [S-10](../strategy/01-concerns.md)** (the *audience* question stays Open there). interview 2026-05-19. |
| Dn-18 | **Booking depth** — contact request vs. a dedicated booking section / paid-offers system (← [S-05](../strategy/01-concerns.md)). | **Closed** | [20](20-scope.md) F11 | **Contact request only** (client: "just a contact request is fine"). No booking engine. Resolves S-05 *for Design*. interview 2026-05-19. |
| Dn-07 | **Internal freelance-artist backstage** (mentor-form) — in/out? | **Partly** | [20](20-scope.md) F13 | **Out of this phase, deep** ([S-06](../strategy/01-concerns.md)); P6 light/named. **Remainder:** attendance self-management → [Dn-13]. |
| Dn-09 | No hard launch date; phasing model? | **Partly** | [20](20-scope.md) §7 | **Single all-in launch** + **trim order** decided. **Remainder:** the calendar date is only the *de-facto* G1 anchor, not pinned. |

## C. Build / technical — research & client material

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-02 | **Notion ↔ website coupling** feasibility. | Open | [20](20-scope.md) §8 | Owner: **Frederik research**; *later/light*, **not** a Scope requirement. |
| Dn-03 | **GDPR / consent** — minors; lawful *inschrijving* capture; Squarespace→ESP migration. | Open **[BLOCKER]** | [20](20-scope.md) F5/F6 | Research + client. Resolve **before the inschrijving/newsletter build**. |
| Dn-04 | **Which evidence/figures** are safe, and how. | Open | [20](20-scope.md) F2 | Client material (SharePoint), jointly [S-08](../strategy/01-concerns.md). **Now rubric-anchored** (method-meerwaarde · process/*nazorg*/continuity · quality-evolution) — but selected **loosely** ([S-12]: 28–32 aandachtspunten not public; only the *structure* is durable) and surfaced **invisibly** (never visible jury-checklist language — Scope v0.3 guardrail). |
| Dn-10 | **Accessibility target & brand assets** (vector logo/type/colour, WCAG). | Open | [20](20-scope.md) §4, [90](90-image-map.md) | Client material. Needed by Skeleton/Surface; not blocking Scope. Evidenced: only low-res raster logos exist. |
| Dn-15 | **Photo-archive reuse rights / credit obligations uncatalogued** (~10 photographers, filenames only). | Open *(deferred, non-blocking)* | [90](90-image-map.md), [20](20-scope.md) §8 | **Client decision: "figure that out later, where needed"** — handled **per-asset at Skeleton/Surface** as specific assets are placed; **not a Scope blocker** (revises the earlier "gates the photographic surface" framing). Coverage skew (≈63/70 = Atelier Leon + *Mariage*) = a non-blocking SharePoint content-ask. interview 2026-05-19. |
| Dn-11 | **Newsletter ESP**: provider choice, **migrate Squarespace contacts**, embed form, **recurring-cost sign-off**. | Open **[BLOCKER]** | [20](20-scope.md) F6 | Frederik investigates; **flag the cost to the team** + get sign-off before committing. |

## D. Verify with the team / client (next session)

| ID | Concern | Status | Detail | Resolution / pointer |
|----|---------|--------|--------|----------------------|
| Dn-12 | **Editie page flow** — does it also serve the *publiek* who want to watch (*inschrijving* / *deelnemer* practical-info / *toeschouwer* attend = up to 3 flows)? | **Partly** | [20](20-scope.md) F4, §7 · [30](30-structure.md) | **Date-type vocabulary settled** ([Glossary](../glossary.md): *open atelier · repetitie · try-out · voorstelling*). **Flow resolved by Structure 2026-05-20:** editie page carries *inschrijving + deelnemer practical-info*; *publiek* arrives via the **Agenda** (each *voorstelling* entry deep-links to its editie). **Remainder:** team-verify the flow assumption (possible visit). |
| Dn-13 | **Backstage attendance** — Kristin's attendance form; could it join the light admin? Self-managed attendance under debate. | Open | [20](20-scope.md) F13 | **Not in v1** provisionally. See Kristin's form; verify with the team. (Split from Dn-07.) |
| Dn-16 | **Is press/recognition substantial enough for a standalone "Pers" page?** *Mariage* has **zero published critic reviews**; recognition = lineage-proxy + juried *selection* (no won prizes). | **Closed** | [20](20-scope.md) F10, §4 · [30](30-structure.md) | **Won't-Have v1** (Structure workshop 2026-05-20 → user: "Pers gone for now"). No standalone page; recognition folds into **Over Leon → Historiek** (lineage-proxy + juried selection — never "award-winning"). Re-opens only if substantial *Mariage* press surfaces later. **Scope F10 demotes DECISION → Won't-Have** on next reconciliation. |
| Dn-14 | **Terminology — one shared vocabulary** used in code, admin and site (project / editie / groep / deelnemer / publiek / voorstelling / inschrijving / atelier / typed dates / mobiele dansstudio). | **Partly** | [Glossary](../glossary.md) · [30](30-structure.md) | **Vocabulary settled** (Glossary v3, user-steer 2026-05-19: no two-layer split — Frederik & team work in both surfaces, so one set of words): `creatie`→`project`; `werking` dropped (recurring practices named individually); `traject` is funder-page copy only; `voortraject/cohort/antenne/"Nope"` = in-house jargon, never user-facing. The persona-debate substance (P1–P6) survives as **page-level copy notes** in the Glossary — not a parallel naming system. **Resolves** the Scope F4 modelling (*Mariage* = project, dated staging = editie) + Dn-12 date-types. **IA root label resolved at Structure 2026-05-20**: no overview root; top-level = *Voorstellingen & projecten* + recurring practices distribute by audience. **Remainder:** ordinary **content-complete-draft work** — write each page in its register using the copy notes. |
| Dn-19 | **Vrijwilligers / stagiairs as a site audience.** New surface (*Samenwerken → Vrijwilligerswerk of stage doen*). Surfaced at the team Structure workshop 2026-05-20: team gets recurring email enquiries for both; they confirmed it deserves a section. | Open | [30](30-structure.md) | Needs **persona + JTBD + user-journey** from the **Strategy thread** (new S- concern to open on next Strategy sync). **Input pending:** team to share the email corpus → file under `docs/raw/research/` when received. Page placeholder stands in the IA; content waits on the persona work. Not a Structure blocker. New 2026-05-20. |

## Carry-forward note

Discovery's strategic carry-forwards stay with the Strategy thread; only design-changing
concerns are lifted into `Dn-` IDs. Trace-back: Dn-02/03/04/08 → discovery/kickoff;
Dn-11/12/13/14 → 2026-05-19 interview; Dn-15 → Phase-1 image-map; **Dn-16 ← [S-11]
(decided Won't-Have v1 at Structure 2026-05-20); Dn-17 ← [S-10] (decided Won't-Have here,
audience question stays Strategy); Dn-18 ← [S-05] (decided contact-request here); Dn-19 →
new Strategy concern (vrijwilligers/stagiairs persona work) — to open in next Strategy sync**.
Reconciled on lint.

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
