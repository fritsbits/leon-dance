---
title: Scope — leon.dance redesign (Garrett Plane 2)
tags: [design, scope, garrett, requirements, kano]
sources: [ux-planning-playbook (Notion), strategy/00-strategy-brief, strategy/10-organisation-goals, strategy/20-personas, strategy/30-jobs-to-be-done, strategy/40-value-proposition, strategy/50-user-journey, strategy/90-research-evidence-2026-05-19, 90-image-map, glossary, 12-client-kickoff-2026-05-19, client-interview-2026-05-19 (Frederik, in this thread)]
phase: design
updated: 2026-05-19
---

# Scope — leon.dance redesign

> **Plane** 2 (Scope) · **Level** site-level full redesign (custom build replacing
> Squarespace) · **Date** 2026-05-19 · **Status** DRAFT **v0.3** — Strategy-v1.x
> reconciliation (rubric-grounding, S-11/S-12) + the second client interview. Open items
> narrow and named (§ Open questions).

Scope = *what we are building, exactly* — functional + content requirements + the explicit
trade-offs and exclusions. Not IA/layout (Structure/Skeleton). Every item **traces to a
Strategy goal + persona + job/journey** ([Strategy Brief](../strategy/00-strategy-brief.md)).
Term labels follow the [Glossary](../glossary.md) — **one shared vocabulary** used in
code, admin and site (*project · editie · groep · deelnemer · voorstelling · open atelier ·
repetitie · try-out · atelier/Atelier Leon · mobiele dansstudio*). `creatie` is dropped
(→ `project`); `werking` is not a label (the recurring practices are listed by name);
`traject` is funder-page *copy*, not a system noun. Persona-specific framing lives in the
content-complete draft as **page copy notes**, not as a parallel naming system.

## What changed v0.2 → v0.3

- **Rubric-grounded, applied *loosely + invisibly*.** Strategy's `90`-research showed the
  Kunstendecreet *participatie* functie is scored on **(a) method + *meerwaarde voor het
  veld* · (b) process — co-creation, involvement, *nazorg*, continuity · (c) artistic
  quality + its evolution over the years**, and the decree counts an org's own channels as
  *proof*. F2/F3 are restructured to that **substance** — but **loosely** (28–32
  aandachtspunten not yet public; only the criteria *structure* is durable — [S-12]) and
  **invisibly**: the site must read as **Leon's own story, never a jury checklist**. The
  rubric shapes the *spine*, never the *surface* — that invisibility *is* the rebalance out
  of subsidiedossiertaal (client: "we don't want it super clear we built this to the
  rubric").
- **Press page → DECISION (conditional), not a Must-Have.** *Mariage* has **zero published
  critic reviews**; recognition rests on **lineage-proxy** (INVITED/Tornar = *juried
  selection* for het TheaterFestival; **no won prizes**). A standalone "Pers" page is in
  scope **only if it can be made substantial enough — to check with the client**. The
  recognition material still folds into the **proof ladder (F3)** regardless ([S-11], Dn-16).
- **Donor / membership → Won't-Have v1** (S-10) — no donor/member section, no recurring
  giving; re-opens only if the client raises it (then a new audience + goal, Strategy-owned).
- **Bookable surface = a contact request only** — no dedicated booking section / no
  paid-offers booking system (resolves S-05 for Design; Dn-18).
- **Photo credits/rights → deferred, handled per-asset where needed; *not* a Scope
  blocker** (client). Dn-15 stays Open but non-blocking.
- **One shared vocabulary** — *project · editie · groep · deelnemer · voorstelling · open
  atelier · repetitie · try-out · atelier/Atelier Leon · mobiele dansstudio* — used
  identically in code, admin and site (6-persona debate → user steer: no two-layer split,
  Frederik and the team work in both surfaces). `creatie`→`project`; `werking` not a label
  (the recurring practices are named individually); `traject` = funder-page copy only.
  "aanbod" → IA decision at Structure. Validation gate now also includes **Kristin's P1/P4
  survey**.

*(v0.1 → v0.2, retained: reconciled to Strategy v1; CRM/contact-management hard out;
ticketing hard out; media = site-wide social proof not a feed; single all-in launch with
the custom backstage as first trim; the project→editie content-model.)*

## Confidence summary (per section)

| § | Section | Confidence | Basis |
|---|---------|:---:|-------|
| 1 | Product type & framing | **High** | Strategy spine + G4/G5 |
| 2 | Audiences (= Strategy personas) | **High** | Reconciled to [Personas](../strategy/20-personas.md) |
| 3 | Functional requirements | **High** named items · **Med** backstage ceiling/ESP · F10 = DECISION | Interview-locked; [Dn-11](01-concerns.md)/[Dn-13](01-concerns.md)/[Dn-16](01-concerns.md) residual |
| 4 | Content requirements & lifecycle | **Med–High** | Pages firm; one shared vocabulary settled (Glossary); per-page copy decided at the content-complete draft; some owners ⚠️ inferred |
| 5 | Won't-Have | **High** | Client-explicit (CRM, ticketing, media, social, donor) |
| 6 | User flows | **High** (J1/J2/J3) · note P4/P5/P6/N | Mirrors [User journey](../strategy/50-user-journey.md) |
| 7 | Project-type checkpoints | **High** (form backend, partners, mixed-flow) · **Med** (editie public flow [Dn-12](01-concerns.md)) | Build approach + agenda split explicit |
| 8 | Technical / system | **Medium** | Notion [Dn-02], GDPR [Dn-03] open |

## Active principles (tuned — [00-design-plan](00-design-plan.md))

Content-vs-functionality = **hybrid, stated**; **maintainability gate elevated** (G5 + thin
editorial capacity); **Won't-Have = first-class**; **traceability to Strategy v1**; **Kano**
on every item; **content ROT audit**; **Occam's razor**. **+ Rubric-invisibility guardrail
(v0.3):** the participatie rubric may shape *what evidence exists and in what order* (the
spine); it may **never** surface as jury-checklist language. If a section reads like it is
addressing a funding criterion, it has failed the rebalance.

## Kern (the essential scope decisions)

1. **One site, two registers, one proof ladder.** The public surface delivers Strategy's
   *one substance / two registers* ([VP](../strategy/40-value-proposition.md)): the **same**
   method + qualitative evidence (quotes + photo/film archive as social proof) + honest,
   rubric-shaped evidence + report shell — built **once**, routed three ways (newcomer =
   "mensen zoals jij" up front · jury = deep · programmer = track record). D-iii.
2. **Invitation-forward, rubric-invisible front door.** The home/default path optimises for
   **P1's moment of truth** (G2); the rigor/durability signal sits *immediately below the
   line*; the **jury enters the proof ladder deep** (G1) — but nowhere does the site name or
   mirror the jury's criteria. D-iv + the v0.3 invisibility guardrail.
3. **The content model: *projecten* + the recurring practices.** An overview root holds
   the **recurring practices** (*Atelier Leon · Leon op school · Leons White Page · Leon
   rond de tafel · Leon on tour* — named individually, no "werking" umbrella) **and** the
   **projecten**. A **project** is a distinct participatory work with its own page (e.g.
   *Mariage*); a simple project = one page; a recurring participatory project carries
   **edities**. Each *editie* = own page, own name, own **groep**, own **typed dates**
   (*open atelier · repetitie · try-out → voorstelling*); edities link from the parent.
   ***Mariage* = the flagship project; each dated staging = an *editie*** (it is a
   replicable format: fixed core cast + a local cast per venue, ~10 repetities →
   voorstelling, 6 edities 2024–26). Vocabulary: [Glossary](../glossary.md).
4. **Sign-up is a light *inschrijving* pipeline, not a CRM.** Per project/editie:
   **inschrijving form → the team screens → backstage list (the *groep*) → export →
   automated push to the new newsletter tool**. No relational contact store. (G4.)
5. **Single all-in launch, capacity-bounded.** Everything ships together; the **custom
   backstage tools are the first trim**; structured editable content-types keep Leon
   self-sufficient (G5).

## 1. Product type & framing

- **Public surface → content leads.** Jobs: **G1** (the jury's dated *visitekaartje* —
  content credible ~Sept/Oct 2026, jury Jan–Jul 2027; the site itself counts as decree
  *proof*) and **G2** (convert P1 at the moment of truth), held *evenwaardig* and
  **rebalanced out of subsidiedossiertaal** in tone **and** image
  ([governing principle](../strategy/10-organisation-goals.md#governing-principle-sits-above-all-goals--not-itself-a-goal)).
  The rubric raises the *bar* and shapes the *spine*; the **surface stays Leon's own voice**
  (v0.3 guardrail).
- **Backstage → functionality leads, kept light.** Owned *inschrijving* pipeline, structured
  editable content-types, real NL/FR/EN localisation (**G4/G5**) — genuine but deliberately
  *light*, and the first trim under time pressure.

Confidence: **High**.

## 2. Audiences this scope serves (= Strategy personas)

Reconciled to [Personas](../strategy/20-personas.md) — *primary* = site decisive ·
*secondary* = lighter/relationship-led · *internal* = light · *non-audience* = named. The
client wants the funder and mission publics **held together, not collapsed to one** (D-i).

| Persona | Tier | Serves | What Scope owes them |
|---|---|---|---|
| **P1 · de nieuwsgierige** (curious → schrijft in → returning) | primary | G2 | Invitation-forward landing, "mensen zoals jij" social proof, plain *wat/voor-mij/praktisch*, owned *inschrijving* |
| **P2 · jury / subsidiënt** | primary | G1 | Deep entry into the proof ladder (rubric-shaped, invisibly), funder/partner wall, recognition, durability |
| **P3 · programmator** | primary | G3 | Bookable dossier: structured projecten, tour history, the bike, *Kosmos* 2027, **contact request** |
| **P4 · groepsverantwoordelijke** | secondary | G2/G3 | "What a traject does for *my group*"; Leon-initiated, partner-coordinator-framed reassurance + contact — **not an application, not lead-gen** |
| **P5 · pers & breed publiek** | secondary | G3 | Multilingual what/when/where (participant agenda) + press basics |
| **P6 · freelance artiest/medewerker** | internal, **light** | G4/G5 | *rode draad* + a reliable planning reference — not built deep ([S-06](../strategy/01-concerns.md), [Dn-07](01-concerns.md)) |
| **N · moeilijkst bereikbare kerngroep** | **non-audience** | — | **Nothing — by design.** Reached offline. No funnel, no registration wall. |

Confidence: **High** (segment level; per-need detail firms at the content-draft review +
**Kristin's P1/P4 survey**, Strategy [S-07](../strategy/01-concerns.md)).

## 3. Functional requirements

Kano: **M** Must-Have · **P** Performance · **D** Delighter · **DECISION** = conditional,
client to confirm. *Trim* = order of removal if the single launch runs short (lower = cut
first).

| # | Capability | Kano | Trim | Traces to | Conf. |
|---|---|:--:|:--:|---|:--:|
| **F1** | **Structured participant agenda** — dates-as-data, filterable (open vs. closed), per-entry detail; replaces Excel→screenshot | M | 6 | G2/G5 · P5,P1-returning · J1 | High |
| **F2** | **Legitimacy surface** — the proof ladder's **deep** entry: method (*Inviter/Mixing/Reversing/Affirming*) → process/involvement/*nazorg*/continuity → quality **+ its evolution over the years** → report shell; **tiered funder/partner logo wall**. Rubric-shaped **spine**, Leon's-own-voice **surface** (guardrail). | M | 7 | **G1** · P2 · J2 · D-iii | High (figures [Dn-04](01-concerns.md); rubric loose [S-12]) |
| **F3** | **Proof system — one ladder, three routed entries.** Method + qualitative evidence (participant/partner quotes + photo/film archive as site-wide social proof) + honest rubric-shaped evidence + report shell. Newcomer = "mensen zoals jij" · jury = deep (F2) · programmer = track record (F11). Recognition = **lineage-proxy + "juried selection," never "award-winning"/implied *Mariage* acclaim** ([S-11]). No participant uploads, no feed. | M | 8 | **G1/G2/G3** · P1/P2/P3 · J1/J2/J3 · **D-iii/D-iv** | High |
| **F4** | **Content model: *projecten* + recurring practices** — overview root → the 5 recurring practices (named individually) **and** *projecten*; a recurring participatory project carries **edities** (each: own page, name, *groep*, typed dates *open atelier·repetitie·try-out→voorstelling*); simple project = single page. *Mariage* = flagship project; each dated staging = an *editie* (replicable format). | M | 9 | G2/G3 · P1-schrijft-in,P3,P4 · J1/J3 | High (one shared vocabulary — [Glossary](../glossary.md)) |
| **F5** | **Owned *inschrijving* pipeline (light, not a CRM)** — per project/editie *inschrijving* form → **team screens** → backstage list (the *groep*) → **export** → automated push to the newsletter tool. Distinct from *deelnemers* already "in". | M | 9 | **G4** · P1-schrijft-in · J1 | High (data = lists+export only) |
| **F6** | **Newsletter migration off Squarespace** — select a new ESP, **migrate the Squarespace contacts**, embed *its* subscribe form, auto-push *inschrijvingen*. ⚠️ **recurring-cost** to flag to the team. | M | 8 | G4 · all · J1 | Med ([Dn-11](01-concerns.md)) |
| **F7** | **Structured editable content-types + fixed pages** — Leon edits projecten/edities/agenda (all languages); Frederik writes fixed pages (missie/visie). | M | 10 | **G5** · P6 · — | High |
| **F8** | **Proper NL/FR/EN localisation** — routing, switcher, hreflang; build NL → AI-translate → client proof. | M | 10 | G5 · all · rebalance | High |
| **F9** | **Team / "wie is wie"** page | M | 5 | G1/G3 · P2,P3,P6 · J2/J3 | High |
| **F10** | **Standalone "Pers & in de prijzen" page** | **DECISION** | 4 | G1/G3 · P2,P3 · J2/J3 | **Conditional** — only **if substantial enough**; *Mariage* has no critic reviews → recognition is lineage-proxy/juried-selection. **Check with the client** (SharePoint may surface *Mariage* press). If thin: **no standalone page**, recognition folds into F3. ([S-11]/[Dn-16](01-concerns.md)) |
| **F11** | **Bookable dossier** — structured projecten + tour history + **the bike (*mobiele dansstudio*, currently no digital surface)** + *Kosmos* 2027 + **a simple contact request**. **No dedicated booking section / no paid-offers system** (S-05 resolved). | M | 4 | **G3** · P3 · J3 | High ([Dn-18](01-concerns.md) resolved) |
| **F12** | **Contact + P4 first-contact mini-path** — Leon-initiated, partner-coordinator-framed: *qualify/explain a deliberately constrained model* + low-threshold contact. **Not an application, not lead-gen, not a funnel.** | M | 3 | G2/G3 · P4 · (noted) | Med |
| **F13** | **Backstage admin (LIGHT)** — manage the calendar/agenda for all events; view *groepen*; view incoming *inschrijvingen*. ⚠️ Attendance **unverified** ([Dn-13](01-concerns.md)). **First trim**: degrades to *inschrijvingen email the team + content-editing only*. | M (calendar) / P (groep/inschrijving views) | **1–2** | G4/G5 · P6 · — | Med ([Dn-13](01-concerns.md)) |
| **F14** | **Historiek** ("where we come from": ~16-yr practice / ~5-yr vzw — durability without overstating) | D | 3 | G1 · P2 · J2 | Med |

⚠️ **Cut pass applied:** old F7+F10 (quotes+media-feed) → **merged into F3**; CRM &
ticketing **removed**; **donor/membership Won't-Have** (§5); F10 **demoted to DECISION**;
F14 the lone Delighter; F13 custom parts the explicit first trim.

## 4. Content requirements (per section/page) + lifecycle

ROT audit first. Owner/lifecycle ⚠️ partly inferred — confirm at the content-draft review.
Labels follow the [Glossary](../glossary.md) — one shared vocabulary; per-page copy
register decided at the content-complete draft.

| Section/Page | Direction | Source / ROT | Owner | Lifecycle | Conf. |
|---|---|---|---|---|:--:|
| Home (invitation-forward) | New: invitation line + rigor signal below + routed proof; **no rubric language** | New (Strategy VP/D-iv) | Frederik (fixed) · client voices final NL | Stable | High |
| Missie/visie & **AFZ** | Keep but **de-emphasise/"park"**; out of subsidiedossiertaal; AFZ placement → Strategy [S-03] | Exists NL/FR/EN (reuse) | Frederik · Leon proofs | Stable | Med |
| "Wat we doen" | **Reduce** — overlaps the recurring-practices overview | ROT redundant → fold | Frederik | One-off | High |
| Overview root + recurring practices + *project* + *editie* pages | New content model (F4); label of the root → Structure | `/mariage` exists (migrate: project + its 6 edities) | Leon (editable, all langs) | Per *editie*: aangekondigd → *inschrijving* open → *groep* werkt → *open atelier/repetitie/try-out* → *voorstelling* → gearchiveerd | High |
| Agenda (participant view) | Structured, filterable | Replace image agenda | Kristin — **must be low-effort** (G5) | Continuous | High |
| Proof system (method · quotes · archive · evidence · report shell) | Ladder once, routed 3×; rubric shapes spine, **not** surface | Quotes buried in PDF/missie (**reuse**); photo/film archive | Leon + Frederik | Append; evidence per reporting cycle | High |
| Funder/partner wall | Tiered logo wall | ~35-logo footer exists | Leon | Low-change | High |
| Team / wie is wie | New | Client material (SharePoint) | Leon | With staffing | Med |
| Pers & in de prijzen | **Conditional page** (F10/Dn-16) — else folds into proof | Lineage-proxy + juried selection; SharePoint may add *Mariage* press | Leon | Append | Med |
| Bookable dossier + bike | New; contact request only | Bike brochure/deck (SharePoint) | Leon | Seasonal/low | Med |
| Historiek | Optional (Delighter) | Org lineage (Ultima Vez) | Frederik | Static | Med |
| Contact / newsletter | Owned; new ESP embed | New | Leon | Static / continuous | Med |

## 5. Won't-Have (out of scope — with the strategic reason)

- **CRM / contact-management system — hard out** (client): no relational store, no
  follow-up workflows, no cross-project contact graph, no on-the-spot artist entry. Only
  per-project/editie *inschrijving* lists + export + newsletter push (F5/F6).
- **Ticketing / payments — hard out** (client): public *voorstellingen* free / partner-ticketed.
- **Participant-contributed media, recap feed, social embeds, active social — out**
  (principled no-social). Media exists only as curated site-wide social proof (F3).
- **Individual-donor / membership audience & path — Won't-Have v1** (S-10): no donor/member
  section, no recurring giving. Re-opens *only* if the client raises it → then a new
  audience + goal, owned by Strategy ([S-10](../strategy/01-concerns.md) / [Dn-17](01-concerns.md)).
- **Dedicated booking section / paid-offers booking system — out** (S-05 resolved): F11 is
  a contact request, not a booking engine.
- **No registration wall on the free drop-in ateliers** — N is non-audience; the site is
  **not** the participant *discovery* funnel.
- **No ever-growing "browse all programmes" catalogue IA** — *deepen, don't multiply* (G2).
- **No verbatim subsidy-dossier numbers** and **no visible jury-rubric language** —
  per-funder framing + the rubric-invisibility guardrail ([Dn-04](01-concerns.md) /
  [S-08](../strategy/01-concerns.md)).
- **No bespoke maatwerk that makes Frederik a routine-edit dependency**, **not another
  page-builder** — G5.
- **Participant self-managed attendance — not in v1** ([Dn-13](01-concerns.md)).
- **Deep P6 internal backstage / mentor-form — out of this phase**
  ([S-06](../strategy/01-concerns.md) / [Dn-07](01-concerns.md)).

## 6. Key user flows (the critical path)

Mirrors [Strategy User Journey](../strategy/50-user-journey.md) — J1/J2/J3 mapped, rest noted.

1. **J1 · Newcomer (P1 → G2):** offline trigger → invitation-forward landing → "mensen
   zoals jij" social proof → clear practical info / **owned *inschrijving*** (if a
   project/editie) → team screens → into the *groep* → follow-up via newsletter → shows up →
   returns (thin practical mode). **High.**
2. **J2 · Jury (P2 → G1):** clicks from dossier → invitation line + **immediate
   rigor/durability signal** → **deep proof ladder** (method → process/*nazorg*/continuity →
   quality + evolution → report shell) → funder/partner wall → recognition (lineage-proxy) →
   convinced — **without ever seeing rubric language**. **High.**
3. **J3 · Programmer (P3 → G3):** sector/sees work → structured projecten + tour history +
   **bike** + *Kosmos* + proof-as-track-record → **contact request**. **High.**
4. *Noted, not mapped:* **P4** Leon-initiated reassurance + contact (not an application) ·
   **P5** agenda + press basics · **P6** light backstage · **N** no path.
5. ***Inschrijving* sub-flow (within J1/J3):** schrijft in → team screens → into the *groep*
   → export → newsletter. *Distinct* from a *deelnemer* already "in" who needs only
   practical info.

## 7. Project-type decision checkpoints

- **Lifecycle phases?** **Single all-in launch — no site phases.** De-facto deadline = G1
  (content ~Sept/Oct 2026; jury Jan–Jul 2027 — [Dn-09](01-concerns.md)). Trim order decided
  (F13 first). Each *editie* has a content lifecycle → Skeleton state inventory.
- **Form backend?** **Custom server handler** + a *light* per-project/editie *inschrijving*
  store (list + export) + ESP push. Not Forms/Typeform. GDPR [Dn-03](01-concerns.md).
- **Sponsors / partners?** **Yes** — tiered **funder/partner logo wall** (F2/F3) →
  **logo-band requirement → Structure**; per-funder figure sensitivity ([Dn-04](01-concerns.md)).
- **Mixed-flow diagnostic?** **Agenda split** (participant agenda F1 vs. legitimacy/proof
  F2/F3). **Editie page** date-type vocabulary **settled** (*open atelier · repetitie ·
  try-out · voorstelling*, Glossary); the **remaining** question is *flow* — does an editie
  page also serve the *publiek* who want to watch (schrijft-in / *deelnemer* practical-info
  / *toeschouwer* attend = up to 3 flows)? Provisionally *inschrijving + practical-info*,
  *toeschouwer* via the Agenda — **verify with the team** ([Dn-12](01-concerns.md)).
  Missie/visie rebalanced (institutional vs. belonging registers).

## 8. Technical / system capabilities

- **Light** per-project/editie *inschrijving* store (list + export) — **not** a CRM.
- **ESP**: select provider + **migrate Squarespace contacts** + embedded subscribe + auto
  *inschrijving*→ESP push; **recurring-cost flag** to the team ([Dn-11](01-concerns.md)).
- Structured editable content-types (recurring practices + *projecten* w/ optional *edities* + typed dates) +
  fixed pages; trilingual editing of editable content.
- i18n (routing / switcher / hreflang).
- Custom build replacing Squarespace, Frederik-hosted; single launch.
- ⚠️ **Notion-as-source coupling** — OPEN, *later/light*, research before recommending
  ([Dn-02](01-concerns.md)); not a Scope requirement.
- GDPR/minors + *inschrijving* data + the Squarespace→ESP migration ([Dn-03](01-concerns.md)).
- **Photo credits/rights — deferred, handled per-asset where needed; not a Scope blocker**
  ([Dn-15](01-concerns.md)). Coverage skew (≈63/70 archive photos = Atelier Leon + *Mariage*)
  is a SharePoint content-ask, non-blocking.

## Open questions / to validate

Status owned by the [Design Concerns register](01-concerns.md). **[BLOCKER]** = blocks
downstream design/build.

- **Closed:** Strategy traceability ([Dn-01]) · ticketing ([Dn-05]) · media/feed ([Dn-06]) ·
  booking depth = contact-request ([Dn-18]) · donor/membership = Won't-Have ([Dn-17]).
- **Open — research/material:** Notion coupling ([Dn-02]) · **[BLOCKER]** GDPR/minors +
  migration ([Dn-03]) · safe **rubric-shaped** figures, never visible ([Dn-04]) ·
  accessibility + brand kit ([Dn-10]) · **[BLOCKER]** ESP choice + migration + cost
  sign-off ([Dn-11]) · photo rights *(deferred, non-blocking)* ([Dn-15]).
- **Open — verify with the team (next session):** the *publiek-vs-deelnemer editie flow*
  half of [Dn-12] (date-type vocab settled) · backstage attendance ([Dn-13]) · **press
  substantial enough for a standalone page?** ([Dn-16]).
- **Open content work (normal draft, not a parallel naming system):** the **per-page copy
  register** (P1 plain invite · P4 welfare framing · P2 proof content · P3 booking content
  · P5 public-practical) — written into the content-complete draft using the
  [Glossary](../glossary.md) copy notes ([Dn-14] Partly; one shared vocabulary settled).
- **Owned by Strategy (consumed, not decided here):** antenne ([Dn-08]/[S-04]); AFZ
  placement ([S-03]); donor/membership *as an audience question* ([S-10]).

## Scope validation checklist (playbook)

| Check | Result |
|---|---|
| Every scope item traces to a named Strategy user need | **Pass** — §3 trace column → G/P/J/D-iii/D-iv |
| Explicit Won't-Have list with reasons | **Pass** — §5 |
| Features classified Must/Performance/Delighter (+DECISION) | **Pass** — §3 |
| Every content requirement has an owner + lifecycle | **Partial** — §4; one shared vocabulary settled (Glossary); per-page copy decided at the content-complete draft; owners confirm at the draft review |
| Scope went through a cut pass, not just sequencing | **Pass** — F7+F10→F3; CRM/ticketing/donor removed; F10→DECISION; F13 first-trim |

## Link to next plane

Feeds **Structure (Plane 3)**: personas + J1/J2/J3 → an **audience-first IA**; load-bearing
IA decisions = the **agenda split** (F1 vs F2/F3), the **overview → recurring practices /
*project* → *editie*** model (F4, incl. the root label Structure must name), and the **one proof ladder
routed three ways, rubric-invisible** (F3). The **funder/partner logo wall** is a required
Structure component; the Won't-Have list bounds the sitemap. Do not start Structure until
this draft is client-validated — the gate is the **content-complete NL draft + Kristin's
P1/P4 survey** (no second clarification meeting).

## Cross-links

- Phase plan & principles: [00-design-plan](00-design-plan.md) · Status:
  [Design Concerns](01-concerns.md) · Terms: [Glossary](../glossary.md) · Assets:
  [90-image-map](90-image-map.md)
- **Strategy v1 (basis):** [Brief](../strategy/00-strategy-brief.md) ·
  [Goals](../strategy/10-organisation-goals.md) · [Personas](../strategy/20-personas.md) ·
  [JTBD](../strategy/30-jobs-to-be-done.md) ·
  [Value proposition](../strategy/40-value-proposition.md) ·
  [User journey](../strategy/50-user-journey.md) ·
  [Research Evidence](../strategy/90-research-evidence-2026-05-19.md)
- Discovery evidence: [12-client-kickoff](../discovery/12-client-kickoff-2026-05-19.md) ·
  [22-offerings-audiences](../discovery/22-offerings-audiences.md) ·
  [24-technical-context](../discovery/24-technical-context.md)
