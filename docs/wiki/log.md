# Wiki Log

Append-only. `grep "^## \[" docs/wiki/log.md` for the timeline.

## [2026-05-18] scaffold | LLM wiki initialised + Discovery phase set up

Created the standalone LLM-wiki repo for the Leon engagement (frontend + possible backend
services), modelled on the kidicalmass `docs/` instantiation. Decisions: standalone git repo
(no Leon codebase yet); Discovery-only phase structure for now (later phases YAGNI); live
`CLAUDE.md` schema at repo root (fixes the gap kidicalmass had where wiki rules were
spec-only). Discovery is run as a structured desk-research dossier — the user's "Desk research
voor website redesign" playbook (8 phases, 5 principles) was read from Notion and adapted into
the schema. Created: `CLAUDE.md`, `docs/raw/` (+ `research/`, `assets/`), `docs/wiki/index.md`,
this log, `docs/wiki/discovery/discovery-plan.md`, and the design spec under
`docs/superpowers/specs/`.

## [2026-05-18] discovery | Desk research run — site audit + 5 buckets + synthesis

Ran the Discovery desk-research playbook autonomously, pre-client. Crawled all 12 `leon.dance`
pages (Phase 1 → `site-audit.md`): platform is **Squarespace** (not Wix), key problems =
image-only agenda, no multilingual system, off-platform MS-Forms sign-up, no structured
content, thin IA, no owned socials. Per user redirect mid-run, de-scoped SEO (Phase 2) and
Best-practices (Phase 6) and reorganised output around the 5 "what we need to learn" buckets:
`organisation.md` (Leon vzw not found in Kunstendecreet 2023–27 werkingssubsidies ⚠️ → likely
project/VGC funded; Tornar/INVITED/Birds were Ultima Vez productions; governance unknown),
`offerings-audiences.md` (6 offers; Mariage = participatory production; Apartheid Free Zone =
Palestine/Lebanon solidarity + BDS-aligned partnership review; 6 inferred audience segments),
`ecosystem.md` (peers: Ultima Vez/les ballets C de la B/kabinet k/fABULEUS; peers use
structured agenda+archive, real localisation, custom CMS), `technical-context.md` (needed
backend services, maintenance-capacity risk). Synthesised `desk-research.md` (overview: SWOT,
priorities, recommended structure, consolidated client questions). Updated index. All
interpretations ⚠️-marked; internal figures explicitly named as unknowable from desk research.

## [2026-05-18] discovery | Initial Leon desk research (web, pre-client)

Ran an initial public web search on Leon before the structured discovery run. Key signal:
`leon.dance` = **Leon vzw**, the work structure around choreographer **Seppe Baeyens** —
nomadic participatory dance in Brussels (Atelier Leon weekly workshops; large intergenerational
works *Birds* / *INVITED*), funded by the Flemish government + VGC, operating EN/FR/NL. Raw
findings with citations saved to `docs/raw/research/leon-initial-desk-research-2026-05-18.md`;
synthesised into `discovery/discovery-plan.md` ("What we know so far"). Open: legal/funding
detail and jaarverslag, team/decision-makers, what "Apartheid Free Zone" and "Mariage" are,
current site stack, needed backend services.

## [2026-05-18] ingest | Quick first-impression review of leon.dance

Ingested the user's "Quick first impression review" Notion page (a cold, single-reviewer
walkthrough of `leon.dance`, written pre-client). Reclassified on read: it is a **first-party
qualitative research source**, not a method playbook. Raw saved verbatim to
`docs/raw/research/quick-first-impression-review-2026-05-18.md` (immutable). Synthesised into
`discovery/first-impression-review.md` with observation/⚠️-interpretation split. Because the
structured desk-research run had since landed, the synthesis was written as a **resolution
map**: nearly every cold-read hypothesis is independently confirmed/answered by
`site-audit.md` / `offerings-audiences.md` / `technical-context.md` (Squarespace, image-only
agenda, weak audience-framing IA, no socials, trilingual = mixed-language weakness), with the
audience-framing gap being a notable independent corroboration. Net-new client questions
surfaced (who is the agenda for; is it hand-maintained / automate the backstage system;
trilingual = values vs. maintenance) folded into `discovery-plan.md` open questions (8–10).
Updated `index.md`. Still open: agenda audience.

## [2026-05-18] ingest | Client contacts — Sam De Wit (coordinator) + Kristin Rogghe (comms)

User provided the client-side contacts: **Sam De Wit** (coordinator) is the primary
contact; he invited colleague **Kristin Rogghe** (communications) to the client meeting,
which is being arranged (date TBC). Filed into `discovery-plan.md` → "Who to talk to"
(was a TBD placeholder). Cross-link noted: a "Kristin Rogghe" already appears among the
~14 associated artists on `/who-we-are-1` in `site-audit.md` — ⚠️ flagged to confirm
whether the comms lead is the same person / part of the artistic core. Resolves part of
discovery-plan open Q2 (team & decision-makers).

## [2026-05-18] discovery | Organisation operating-model deep-dive

Deeper desk research on how Leon is governed/staffed/funded/produced (user asked for more
elaborate methods). **KBO Public Search** on enterprise 0769.579.192 gave hard facts: Leon
vzw incorporated **10 Jun 2021**; **6-person board** (5 since 2023-12-04 + Sam De Wit since
2025-03-25); **Seppe Baeyens not a statutory director**; **employer with social security only
since 1 Jan 2025** (freelance/project-based before). Demos field piece confirmed the
Ultima Vez → Leon lineage (Atelier Quartier 2017 = Atelier Leon template; Sam De Wit ex-Ultima
Vez community worker) and a deliberative/"searching", resource-tense working culture (⚠️
Ultima-Vez-era). Venues credit *Birds* to "Leon" (La Monnaie/De Munt, CAMPO) — repertoire
migrating from Ultima Vez. Kristin Rogghe = dramaturg/choreographer **and** comms → the
artistic-core-as-comms cross-link flag is resolved. Subsidy instrument/amount, statute purpose
text, and annual accounts are **[GAP]** — subsidy registers (Vlaams subsidieregister, CJM
projectsubsidies, VGC) and KBO aggregators (opencorporates, web.archive.org) were
app/PDF-gated or blocked; routed to manual lookup + client. Wrote
`discovery/organisation-operating-model.md` (confidence-marked: [REG]/[SRC]/⚠️/[GAP]),
tightened `organisation.md` (resolved prior team/governance ⚠️s), updated `index.md`.

## [2026-05-18] ingest | Vlaams Subsidieregister export (LEON, KBO 0769579192)

User browser-downloaded the Vlaams Subsidieregister CSV — closes the funding [GAP]. Filed
verbatim to `docs/raw/research/subsidieregister-vlaanderen-leon-2026-05-18.md` (immutable).
Confirmed: Leon's Flemish funding is **project-based** via **Decreet Bovenlokale
Cultuurwerking 2018** (€84,250 awarded 2023; paid 75,825 + 8,425) and **Polsslag Brussel**
(€88,000 awarded 2023; €78,000 awarded 2025) — **no Kunstendecreet line** (corrects the
earlier ⚠️ "Kunstendecreet project" guess; Leon is funded as supra-local cultural /
Brussels-cohesion work, not as a structurally-funded kunsten company). Scale ≈ €172k Flemish
project funding awarded 2023. Updated `organisation-operating-model.md` (Funding [GAP]→[REG] +
⚠️ positioning interpretation + snapshot row), tightened `organisation.md`, updated `index.md`.
Still open: site-claimed **VGC** support (not in Flemish register — VGC separate); city/EU;
whether a Kunstendecreet/structural application is planned; annual accounts (NBB/griffie-gated).

## [2026-05-18] query | Why does Leon need a website / whom does it serve

User asked the foundational question: *why would Leon have a website, what purpose does it
serve?* Answered from the wiki and, on the user's go-ahead, filed the synthesis back as
`discovery/website-purpose.md`. Core framing (⚠️ interpretation on cited facts): the site is
**not** for Leon's core mission audience (neighbourhood atelier participants + special-ed
pupils are reached **offline**); it serves the sustaining ecosystem it can't reach in person —
**programmers/venues** (bookability dossier, currently absent), **funders/policy**
(legitimacy, given young+project-only+no-Kunstendecreet vs Ultima Vez ≈ €1.04M), **press &
public** (multilingual what/when/where), **co-creators** (frictionless owned sign-up vs MS
Forms). Jobs: credibility, bookability, discoverability hub (owned channel — discovery is
partner-driven), proof/archive, conversion. Surfaces open Q #1 (which audience is the site
primarily for) as a brief-defining client question. Cross-linked from
`offerings-audiences.md` (Implications) and `desk-research.md` (Framing); added to `index.md`.
No new facts — pure synthesis of existing pages.

## [2026-05-18] discovery | Triangulating the "website-purpose" claim (incl. peer-site research)

User flagged the website-purpose claim as counterintuitive and asked to solidify it. Stress-
tested it four independent ways and wrote them into `website-purpose.md` as "How we know" +
"What would change our mind": (1) **falsification** — if the site were the participant funnel
we'd see X; site shows the opposite (image agenda, no atelier reg by design); (2) **revealed
preference** — Leon maintains legitimacy/proof artefacts, lets participant tooling rot;
(3) **per-segment funnel map** — site is decisive only for the non-core audiences;
(4) **peer-site triangulation** — new live web research on Ultima Vez / les ballets C de la B
/ kabinet k / fABULEUS. Key new finding: even **Ultima Vez's Atelier Quartier** (Leon's direct
analogue) is "free, weekly, no registration, just come" — a showcase page, not a sign-up
funnel; all four peers build **production+calendar+archive showcases**, participation never
enrolled via site. Honest refinement: peers don't run press-kit/funder *portals* either → a
Leon programmer/funder section is a *differentiator*, not catch-up. Core claim **strengthened,
not overturned**; named the disconfirming client questions. Cross-linked into `ecosystem.md`
(participation-section bullet refined) and `index.md` summary updated. Sources: the four peer
sites (live, 2026-05-18).

## [2026-05-18] ingest | Browser desk-research dossier (VGC, CJM, productions, team)

User supplied a structured browser-session dossier; filed verbatim to
`docs/raw/research/leon-vzw-desk-research-browser-2026-05-18.md` (immutable). Closes/strengthens
several items. **Funding now confirmed:** + **VGC meerjarige werkingssubsidie 2023–2025 =
€14,840/yr** (VGC PDF retrieved; site's VGC claim verified) on top of the subsidieregister
Bovenlokale Cultuurwerking + Polsslag Brussel; **verified-negative on Kunstendecreet** (full
werkingssubsidies 2023–27 table + projectsubsidies 2026 r1 scanned; Leon absent; 2022–25
project PDFs not opened line-by-line — strong not absolute). Scale benchmark added to
`ecosystem.md` (Ultima Vez €1,040,387/yr structural vs Leon project-only ≈ low six figures).
**Production split clarified:** *Birds* production stays Ultima Vez, **Leon tour-direction from
2023**; *Mariage* = Leon's own production (premiere 21.09.2024 MolenFest); *Kosmos* 2027 = Leon
co-produces with KANAL & KVS; Leon joined Circuit network 2022. **Team correction:** Emma
Ducheyne = comms (Mariage 2025), Isabelle Azaïs = production+scenography, Kristin Rogghe =
dramaturg (INVITED/Birds) + KVS city dramaturg — ⚠️ flagged who actually owns website/comms
(Kristin strategic vs Emma operational), correcting the earlier "Kristin = comms" resolution.
Namesake dancer **Leon Gyselynck** performed in INVITED (2018); ⚠️ spelling variant
Gyselinck/Gyselynck. Updated `organisation-operating-model.md` (funding [GAP]→[REG], people,
lineage/pipeline, snapshot, open Qs), `organisation.md`, `ecosystem.md`, `offerings-audiences.md`,
`index.md`. Board/governance already covered via KBO (this dossier still lists it as a gap).

## [2026-05-18] capture | current-site mirror of leon.dance
Ran the website content-capture playbook. Built `scripts/capture-site.mjs`
(+ unit-tested `scripts/capture/lib.mjs`) and wrote a verbatim corpus to
`docs/raw/current-site/` (pages, sitemap, images index, crawl-log, hand-curated
notes). Spec: `docs/superpowers/specs/2026-05-18-current-site-content-capture-design.md`.
Plan: `docs/superpowers/plans/2026-05-18-current-site-content-capture.md`.

## [2026-05-19] query | Current site running cost

Client question: what does the current Squarespace site cost Leon? Plan tier/billing are
not publicly observable (already an open client Q in `site-audit.md`). Filed a costed
estimate as new page `discovery/current-site-cost.md`: verified Squarespace + unused Cart
(no ecommerce tier needed) + `.dance` premium TLD; 2026 Squarespace pricing pulled (web,
official + Tooltester + Website Builder Expert). ⚠️ Estimate: subscription ~€190–€280/yr
(Core ~€276 likeliest given custom CSS/code), `.dance` domain ~€40–55/yr, all-in
≈ €230–€340/yr. Key takeaway recorded: migration case is capability-driven, **not** hosting
cost-saving. Cross-linked from + bumped `technical-context.md` (migration considerations,
sources, `updated` 2026-05-19); added index row.

## [2026-05-19] lint | discovery folder restructure

Reorganised `docs/wiki/discovery/` for navigability: 11 flat files → 9 tier-coded
numerically-prefixed files. Scheme: `0x` method · `1x` synthesis/front-door · `2x`
evidence · `9x` raw input.

- Renamed: discovery-plan→`00-discovery-plan`, desk-research→`10-desk-research`,
  website-purpose→`11-website-purpose`, site-audit→`20-site-audit`,
  offerings-audiences→`22-offerings-audiences`, ecosystem→`23-ecosystem`,
  first-impression-review→`90-first-impression-review`.
- Merged `organisation` + `organisation-operating-model` → `21-organisation.md`
  (layered: summary spine + confidence-marked deep-dive; markers preserved).
- Merged `technical-context` + `current-site-cost` → `24-technical-context.md`
  (cost folded in as "Running cost (estimated)" + 3 ask-client items into open questions).
- Relinked all cross-references, rebuilt `index.md`, updated `CLAUDE.md` path examples
  and added the tier-numbering convention to "Page conventions".
- Earlier log entries intentionally still reference pre-restructure filenames (append-only).

## [2026-05-19] ingest | Agenda image OCR → 25-agenda.md

Transcribed the image-only `/agenda` (7 Squarespace screenshots, 6 unique + 1 dup) into
a new evidence page `discovery/25-agenda.md`: **65 dated entries** Mar–May 2026 as a
chronological table + venues key + source provenance. Method: downloaded the WebP files
(served as `.png`), converted, and read each as left/right half-crops at full resolution
(downscaled full image is unreadable).

- Findings (⚠️): only ~2 public shows (`Show Mariage` 10/04 & 26/04) among ~61 internal
  workshop/in-school entries — reinforces `11-website-purpose.md`; on-page image order is
  non-chronological; last image duplicated in markup; addresses are NL/FR hybrids with a
  De Loods street-name spelling inconsistency.
- Corrected `20-site-audit.md` row 7 (was "7 events" → 7 image files / 65 dated entries)
  and cross-linked it to the new page; added `index.md` row.
- Open questions (ticketed vs free shows; who keeps the agenda current) flagged for
  `10-desk-research.md`.

## [2026-05-19] query | What the agenda reveals → 26-agenda-analysis.md

Answered "what can we infer about Leon's offer/work from the agenda" and filed it as a
new synthesis page `discovery/26-agenda-analysis.md` (per query workflow — valuable
analysis compounded back into the wiki).

- Activity mix from 65 entries: Mariage family ≈57% (37), recurring Atelier/à-l'école
  ≈43% (28), only 2/65 public (`Show Mariage`). Confirms 4 of 6 offers with dated
  evidence; White Page / AFZ / rond de tafel absent in window.
- Independently corroborates the weekly cadence (Wed Pianofabriek / Sat Maison des
  Cultures) and the partnership/co-production model; surfaces named partners
  (MUS-E, Ketmet, BRONKS, RITCS) and a delivery-team division of labour mapping every
  agenda lead to the associated-artist pool.
- Cross-linked per user request: added agenda-corroboration notes into
  `22-offerings-audiences.md` (Implications) and `21-organisation.md` (Team and roles),
  plus links to `11-website-purpose.md`, `24-technical-context.md`, `20-site-audit.md`.
  Added `index.md` row; 6 open questions routed to `10-desk-research.md`.

## [2026-05-19] discovery | Cross-sector comparator — Debateville → 27-comparator-debateville.md

User pointed at **debateville.org** (Brussels youth-debate vzw) as a reference: a well-made,
impact/traction-led site for an org with a similar funding stream. Ran a competitive/comparison
desk-research pass (live site + Open Collective + LinkedIn + Donors&partners page) and filed a
new evidence-tier page `discovery/27-comparator-debateville.md`.

- **Key framing:** Debateville is a *funding-ecology + site-strategy* comparator, **not** an
  artistic peer — near-identical money structure to Leon (project/foundation/public portfolio:
  King Baudouin Foundation, VGC, Flanders, Brussels City; no single structural line),
  beneficiary reached **offline**. So it is **independent cross-sector corroboration of
  [11-website-purpose]** — and, unlike the four dance peers, it *does* run the funder/press/
  impact **portal** → upgrades that page's "honest refinement" from speculative differentiator
  to a proven move for a project-funded org.
- **7 transferable site patterns** documented (homepage metric band, 3-tier evidence ladder,
  audience-first "Voor wie…" IA, annual impact-report hub, tiered/captioned funder wall,
  press+awards nav, owned mentor/co-creator funnels) + **6 scope ideas** for Leon each mapped
  to an existing finding. ⚠️ Steer (confirmed with user): adopt the *structure*, lead the
  proof **qualitatively** (artistic/relational), not a metrics dashboard — Leon's value
  doesn't reduce to survey %s the way a skills programme's does.
- Cross-linked: `23-ecosystem.md` (new cross-sector-comparator section + open Q1 sharpened),
  `11-website-purpose.md` (new triangulation angle #5; "four"→"five"; sources/updated bumped),
  `10-desk-research.md` (detail-pages list + audience-first-IA sharpening of the recommended
  structure; sources/updated bumped). Added `index.md` row. 4 open client questions surfaced
  (metrics-vs-qualitative; individual-donor audience?; report editorial capacity; funder
  overlap to confirm). Sources cited inline (no raw file — `docs/raw/` is read-only); site
  live 2026-05-19.

## [2026-05-19] discovery | First client conversation — Sam & Kristin → 12-client-kickoff-2026-05-19.md

The pivotal discovery milestone: the **first client meeting** (Sam De Wit, coordinator;
Kristin Rogghe, comms). User supplied the transcript + 2 workshop-board photos in conversation
(not filed to `docs/raw/` — that is the human's curation step; flagged to the user). Frederik
ran the covert actor-card + page-card workshop (per the agreed don't-present-findings style).
Synthesised into a new 1x-tier front-door page `discovery/12-client-kickoff-2026-05-19.md`
(client truth supersedes ⚠️ desk-research inference where they diverge).

- **Headline new fact:** Leon is bidding for **Kunstendecreet *structural* funding 2028–2032**
  — dossier deadline **1 Dec 2026**, jury **≈ Jan–Jul 2027**; the website is its
  *visitekaartje* for that jury. Dates and hardens the previously-inferred legitimacy job;
  de-facto plan anchor = beleidsplan Dec 2026 / decisions ~Sept–Oct 2026.
- **[11-website-purpose] confirmed + materially refined:** hardest groups offline ("Nope")
  and funders/programmers/press confirmed; **but** the site must *also* convert **potential
  *new* participants** (post-offline-trigger moment-of-truth) and the client **refuses a
  single primary audience** (arts/funder + mission audience "evenwaardig"; rebalance away
  from *subsidiedossiertaal*). Added an internal **(freelance) artists & staff** audience.
- **Closed across the wiki:** no social media (principled — ethical + capacity); agenda =
  Excel→screenshot→paste by Kristin, audience = impact+participant+internal mix; trilingual =
  resource shortcut (new site → proper localisation); who built/maintains (Jeroen-built /
  Kristin-maintained, editorial-capacity risk **confirmed real**); Squarespace not a
  constraint (Frederik builds custom, free, ≈ current recurring cost); Mariage = first
  flagship **"creatie"** in a repeatable type; qualitative-led proof confirmed.
- **Newly opened:** participant **DB/CRM** + possible team backstage now firm wants;
  **Notion-as-source-of-truth coupled to the site** hypothesis to research; antenne
  concentration-vs-spread (undecided); GDPR/minors for the DB; passive social presence;
  which impact figures are safe given per-funder dossier framing; accessibility/brand still
  open.
- **Open-question review (deliverable 2):** swept every page's open-questions + ⚠️
  assumptions and updated with client status — `00-discovery-plan` (Qs 1–10 mostly closed),
  `10-desk-research` (banner + consolidated-Qs map), `11-website-purpose` (validation banner
  + "what would change our mind" resolved), `20-site-audit` (social closed, unknowns),
  `21-organisation` (Kunstendecreet bid confirmed; Kristin-comms resolved; open Qs 1/7/8),
  `22-offerings-audiences` (Qs 1–5; segments validated), `23-ecosystem` (Qs 1–2),
  `24-technical-context` (who-maintains resolved; backend scope firmed + Notion; Qs 1–10),
  `25-agenda`/`26-agenda-analysis` (provenance + cadence Qs), `27-comparator-debateville`
  (qualitative-led + capacity confirmed). Each touched page got the
  `client-meeting-2026-05-19` source + `updated: 2026-05-19`. Added `index.md` row.

## [2026-05-19] ingest | Client-meeting transcript filed to docs/raw/

Per the user's explicit instruction (overriding the general `docs/raw/` read-only schema
rule — the user is the curator and delegated the ingest step), filed the **verbatim
auto-transcription** of the 2026-05-19 client meeting to
`docs/raw/research/client-meeting-2026-05-19.md` (immutable, with the standard RAW-SOURCE
header; ASR errors/typos preserved). This makes the `client-meeting-2026-05-19` source
shorthand cited across all 13 discovery pages resolve to a real raw file. The two
workshop-board photos were not filed (binary; described in `12-client-kickoff`'s §10).
Updated `12-client-kickoff-2026-05-19.md`'s source note (was "not filed" → now points at the
raw file; quotes flagged as lightly normalised vs. the authoritative raw ASR).

## [2026-05-19] scaffold | Per-phase Concerns register (new schema rule) + Discovery register

User asked for a **central, per-phase Concerns register** with explicit open/closed status,
replacing scattered per-doc open-question lists as the place to read status. Two design
choices confirmed via AskUserQuestion: (a) a **dedicated `0x`-tier file per phase**; (b)
**register rolls up, per-doc lists keep local detail**, cross-referenced by concern ID.

- **CLAUDE.md:** added a new "## Concerns register (per phase)" section (one register per
  phase = `docs/wiki/<phase>/0x-concerns.md`; deduplicated concerns; stable phase-letter IDs
  `D-`/`S-`/`Dn-`/`B-`, never renumbered; status `Open`/`Partly`/`Closed` with mandatory
  resolution+pointer; **conclusion gate**: no silent `Open`). Wired into directory layout,
  Phased-approach, Filename-numbering (`0x` now "method/agenda + Concerns register"),
  Running-discovery, Ingest workflow (new step 6), Lint workflow (reconcile register vs.
  per-doc detail).
- **New page `discovery/01-concerns.md`:** consolidated every open question/⚠️/gap across
  all discovery pages into **46 deduplicated concerns (D-01–D-46)**, grouped A–F, each with
  status + detail page + resolution/pointer, plus a phase-conclusion-readiness band
  (19 Closed · 6 Partly · 21 Open). Verdict: **Discovery can be concluded** — remaining
  Open/Partly are client-input/Strategy items, none silently open; they become the seed of
  the Strategy register.
- **Cross-refs:** added a "status is authoritative in the register (IDs …)" pointer to the
  per-doc "Open questions" sections on `00`, `10`, `11`, `12`, `20`, `21`, `22`, `23`,
  `24`, `26`, `27` (sections kept as local detail). Added `index.md` row.

## [2026-05-19] scaffold | Design phase opened — UX Planning, Scope draft v0.1

Opened the **Design phase** on the user's instruction, run via the user's **UX Planning
playbook** (Notion — Garrett's five planes, bottom-up, Socratic). Read the full playbook
(3 paginated block fetches) + the strategic basis (`11-website-purpose`,
`12-client-kickoff`). Created `docs/wiki/design/`:

- **`00-design-plan.md`** — phase front-door. Engagement = site-level custom rebuild
  replacing Squarespace. **Strategy plane is owned by a separate STRATEGY thread** (out of
  this thread); Scope traces to the *interim strategy basis* (discovery 11 + 12) until it
  lands. Defines a **plane-aligned filename scheme** for the design phase (00 plan · 01
  concerns · 10 strategy[ext] · 20 scope · 30 structure · 40 skeleton · 50 surface — distinct
  from the discovery tier scheme, which is discovery-scoped). Parks a **provisional
  principles-tuning** (content/functionality = hybrid; maintainability gate + Won't-Have
  elevated; no-social = hard constraint) to reconcile with the Strategy thread.
- **`01-concerns.md`** — the Design Concerns register (schema-required; IDs `Dn-`). Seeded
  **10 Open** concerns from the Scope draft, grouped A (strategy dependency — `→ Strategy
  thread`), B (scope decisions for the interview), C (build/technical to research). Boundary
  rule: strategic concerns are consumed, not re-litigated here.
- **`20-scope.md`** — **Scope (Plane 2) draft v0.1**. Per-section **confidence table** (user
  request). Hybrid product-type framing (content-led public surface + functionality-led
  backstage); 14 functional requirements Kano-classified with phase + traceability; content
  + lifecycle table (ROT-audited); first-class **Won't-Have** list; 6 critical user flows;
  the playbook's 4 project-type checkpoints (form backend = custom server; agenda = the
  mixed-flow split into participant + impact surfaces; partner logo-band required); cut-pass
  applied (F10 reduced, F10–F12/F14 → Phase 2); Scope validation checklist (2 Partial on
  Strategy-traceability + content owners). **Status: DRAFT — client interview pending.**

Added 3 `index.md` rows (Phase = Design). Next: interview the user on the Open/`[BLOCKER]`
items, then finalise Scope and move up to Structure.

## [2026-05-19] lint | Concerns register reworked open-first (scannability)

User flagged `01-concerns.md` as hard to scan — the core job ("what still needs resolving")
was buried: 46 rows grouped by topic with Open/Closed interleaved and long resolution text
on closed items dominating. Reworked the page **open-first**:

- **Centrepiece = the Unresolved list** (27: 🔴 21 Open · 🟡 6 Partly), grouped by area with
  a terse "Needs (next step)" column (ask-client / design decision / Frederik-to-research).
- **`Closed` (19) demoted to an "audit trail"** table at the bottom (kept for provenance/why).
- **Status markers** 🔴/🟡/✅ for one-pass eye-filtering; tightened "At a glance" to a single
  verdict line (Discovery concludable; all unresolved = Strategy carry-forward = its seed).
- IDs unchanged (D-01–D-46) → per-doc pointers and the `index.md` row still hold.
- **CLAUDE.md:** added a durable **"Layout = open-first"** bullet to the Concerns-register
  rule so every future phase's register follows the same scannable shape.

## [2026-05-19] strategy | Strategy phase — first version (brief + 5 artifacts + register)

Started the **Strategy phase** (Garrett Strategy plane) in `docs/wiki/strategy/`, mirroring
the discovery structure. Produced step-by-step with Frederik (analyse research → first
versions w/ confidence + rationale → Socratic interview → write-up).

- **Pages:** `00-strategy-brief` (front door + locked decisions + confidence scheme),
  `10-organisation-goals`, `20-personas`, `30-jobs-to-be-done`, `40-value-proposition`,
  `50-user-journey`, `01-concerns` (Strategy register, IDs `S-`).
- **5 locked strategic decisions** (taken in-session): **D-i** G1/G2 resolved on the
  *time axis* (Kunstendecreet keystone = dated bar; newcomer = everyday front door;
  evenwaardig in tone+image kept as governing principle); **D-ii** one participant persona
  across journey stages (not 3); **D-iii** one qualitative proof ladder, three routed
  entries; **D-iv** invitation-forward positioning posture (G1 rigor below the line +
  deep proof-route as safeguard); **D-v** map 3 journeys (one per goal), note the rest.
- **Confidence scheme:** every element C: High/Med/Low + Basis + To-validate; the only
  validation gate is the client's reaction to the content-complete NL draft (no second
  meeting) + the incoming SharePoint material.
- **Concerns register** seeded: 10 strategy-bearing concerns (`S-01…S-10`), 4 new
  in-session decisions (Partly, await gate) + 6 re-homed discovery carry-forwards
  (with `D-` pointers); Scope/Design carry-forwards deliberately left in the Discovery
  register, not dragged in.
- **Wiring:** `index.md` +7 rows (phase order: Discovery → Strategy → Design);
  `CLAUDE.md` Phased-approach refreshed (Discovery concluded; Strategy & Design active),
  directory layout + strategy/design numbering + log-op enumeration added; forward link
  from `12-client-kickoff`. The separate **Design thread** (at Scope, blocked on `Dn-01`
  / `Dn-08` awaiting Strategy) now has its input — Design must reconcile its Scope draft
  against this brief.

## [2026-05-19] discovery | Design Scope v0.2 — client interview + Strategy reconciliation

Ran the client interview (Frederik, in-thread) on the v0.1 Scope draft, then **reconciled
Scope to the now-landed Strategy v1** (`strategy/00–50`, written by the separate thread).
Socratic per the UX Planning playbook (Claude proposes → user reacts → finalise).

- **Interview decisions (locked):** CRM / contact-management **hard out** — replaced by a
  *light* per-project **application → screen → list → export → newsletter** pipeline (no
  relational store, no follow-up, no on-the-spot artist entry). Ticketing/payments **hard
  out**. Media **not a feed** — existing photo/film archive + extra material reused
  **site-wide as social proof** (= the proof-ladder qualitative rung, D-iii); no participant
  uploads. **Single all-in launch** (no phased launch); the **custom backstage tools are the
  first trim** if time runs short (protected core = public legitimacy surface +
  application→newsletter). New **project → edition** content-model (overview *aanbod* →
  project page → participatory *traject* with named **editions**; each edition own page /
  name / cohort / typed dates rehearsal-class→show; simple creatie = single page).
  Application ≠ regular "in" participant; participant self-managed attendance under debate
  (not v1). Newsletter must **leave Squarespace** → select an ESP + **migrate Squarespace
  contacts** + embed its form; **recurring-cost flag to the team**.
- **`20-scope.md` → v0.2 (rewrite).** Every functional/content item now **traces to
  Strategy v1** — G1–G5 · personas P1–P6,N · journeys J1/J2/J3 · proof-ladder **D-iii** ·
  invitation-forward **D-iv**. 14 functional reqs Kano-classified with an explicit *trim
  order*; F7+F10 (quotes+media) **merged into F3** (one proof ladder, capacity-safe);
  CRM/ticketing removed; content+lifecycle table; Won't-Have rewritten; flows = J1/J2/J3 +
  P4/P5/P6/N noted; project-type checkpoints updated (custom server form backend; agenda
  split; funder/partner logo-wall; edition mixed-flow to verify). Validation checklist:
  traceability **Pass** (was Partial); cut-pass **Pass**.
- **`glossary.md` (new, cross-cutting, wiki-root).** Provisional terminology index (aanbod /
  project / creatie / traject / editie / cohort / rehearsal / show / application vs.
  deelnemer / backstage / antenne …) with working labels + candidates + status; framed as a
  **terminology card-sort for the next client session** (suits the printed-card method).
- **`design/01-concerns.md` reconciled.** 10 → **14** concerns: **Closed** Dn-01 (Strategy
  landed → Scope traces to it), Dn-05 (ticketing), Dn-06 (media); **Partly** Dn-07
  (P6 light; attendance split out), Dn-09 (single-launch decided, date not pinned); **Open**
  Dn-02/03/04/08/10 + new **Dn-11** (ESP choice/migration/cost, BLOCKER), **Dn-12** (edition
  date-types & public flow — verify w/ team), **Dn-13** (backstage attendance — verify),
  **Dn-14** (terminology → glossary workshop). None silently Open; Design cannot conclude
  (Scope still DRAFT; gate = content-complete NL draft; Structure not started).
- **Wiring:** `index.md` — Design Plan / Concerns / Scope rows refreshed + new Glossary row
  (Cross-cutting). No git commit / no `git add` (shared multi-thread tree).

## [2026-05-19] lint | Reframe "client refuses a single primary audience" (too hard)

User review of the Strategy brief flagged *"the client **refuses** to subordinate / refuses
a single primary audience"* as **stated too hard — it was dialogue, not a refusal**, and
noted a site legitimately carries several goals/audiences ("it doesn't, and probably can't,
be that simple"). Wording-only pass, **substance unchanged**, applied for wiki consistency:

- **Strategy:** `00-strategy-brief` (the spine reframed — multiplicity of goals/audiences
  is normal, two *considerations* shape it, the dated one is load-bearing by *deadline* not
  rank; D-i row), `10-organisation-goals` (G2 row, "how G1/G2 cohere", the resolution note).
- **Discovery (consistency — the strategy derived from these):** `11-website-purpose`
  (banner), `12-client-kickoff` (TL;DR §2, the §2 sub-heading, open-Q status line),
  `01-concerns` D-01, `10-desk-research` (banner + closed-by-kickoff line),
  `22-offerings-audiences` (open-Q1), and the `index.md` kickoff summary row.
- **Not touched:** append-only `log.md` history (earlier entries keep their original
  wording by the append-only rule — this entry records the correction instead).
- New behaviour-memory saved (`feedback-framing-restraint`): don't dramatise client stances
  as hard refusals/binaries; attribute to the dialogue; multiplicity is fine.
- The separate **Design thread** had already reconciled Scope v0.2 to Strategy v1; this is
  a label softening only — its `D-i`/`D-iv` traces still hold.

## [2026-05-19] lint | Discovery Concerns register — Frederik review pass (27 → 10 unresolved)

Frederik walked the unresolved list and gave per-concern direction (voice notes) through the
website-engagement lens. Reconciled the register accordingly — **no IDs renumbered**, all
moves recorded with resolution + pointer (`Frederik review 2026-05-19`, with
`→ 12-client-kickoff` where the meeting was the substantive basis).

- **17 Closed:** answered — D-11 (Sam = de-facto *zakelijk leider*), D-23 (free walk-in),
  D-37 (ticketing always via partner venues), D-26 (no donor/membership audience —
  grant/subsidy + project/consortium only), D-39 (accessibility = high/strict, all-ages,
  Frederik's call); out-of-website-scope — D-09 / D-12 / D-28 (won't-resolve), D-10
  (small-team working model: Sam + Kristin, Seppe internal, not board-run), D-17 / D-21 /
  D-22 (no social feed / cart / dynamic media-recap), D-41 (domain price immaterial here);
  directional answer — D-05 (no booking automation → light "how the collaborative-funding
  constellation works" explainer; email entry kept), D-03 (de-emphasis agreed; folds into
  Vision/About, placement → design), D-36 (no full participant DB/CRM; lightweight backstage
  only; scoped in Strategy/Design), D-42 (newsletter+analytics free *within* Squarespace
  today → become separately-costed add-ons on the custom stack — recurring-cost watch-item).
- **8 refined (stay unresolved, now explicit Strategy/Design carry-forwards):** D-13
  (Ultima Vez — site *heritage* framing agreed: 16-yr history within UV → spun out, "their
  history, not went rogue"; remainder = *Birds* rights wording to clear with Ultima Vez),
  D-14 (funders-vs-partners classifiable from desk research, no client input; placement →
  skeleton), D-29 (network memberships — defer to design/skeleton), D-35 (Notion-as-source
  too vague to assess — needs an on-site co-working day; possible in-site admin alternative),
  D-33 (no fixed launch but expected during/just after summer 2026), D-38 (GDPR/minors only
  bites if the site has forms — design-in then), D-44 (antenne concentration vs spread =
  Leon's own decision, client-confirmed), D-45 (publishable impact figures — design/skeleton
  with client). D-24 / D-40 unchanged.
- **Counts:** 27 → **10 unresolved** (🔴 2 Open · 🟡 8 Partly) · ✅ 19 → **36 Closed** ·
  46 total. Discovery still concludable; the 10 remain the seed for the Strategy/Design
  registers. Added the review banner; rebuilt the Unresolved list + audit trail; fixed the
  in-page anchor (`…-27` → `…-10`). `index.md` row still accurate (no count in it). No git
  commit / no `git add` (shared multi-thread tree).

## [2026-05-19] strategy | Personas enriched + 4-page anti-overlap ownership contract

User flagged the personas page as lightweight and asked to strengthen it *without* causing
overlap with JTBD / value-prop / journey. Investigated all four + the raw sources; agreed
two decisions with the user (ownership contract; labelled-field profile format).

- **Anti-overlap ownership contract** added as a one-line header on all four strategy
  pages: **20** owns the *person* · **30** the *job* · **40** the *promise* · **50** the
  *sequence over time*. Cross-link by stable ID (P1–P6, N); never restate. `"Needs from
  the site"` deleted from personas (it was JTBD's job, duplicated).
- **`20-personas` rewritten** to evidence-graded **labelled-field profiles** (context /
  trigger / motivation / anxiety / behaviour / representativeness / voice / evidence).
  Enriched **now** from the 793-line client transcript (line-cited) — confidently, since
  most personas don't need the survey: **P2/P3/P5 are desk-ceiling** (the survey can't
  reach a jury/programmer/press — stated, accepted); **P1/P4** marked **⟶ survey will
  firm**. Grading separates **verbatim** vs ⚠️-inference vs workshop-articulated (per
  [[feedback-framing-restraint]]).
- **Real participant/teacher voice folded in** from the captured immutable mirror
  `docs/raw/current-site/pages/missie-visie-nl.md` (the page the user pointed to):
  P1 gets real participant verbatim ("…I can be myself there and I meet people I would
  never have otherwise encountered."; FR "…être différent ensemble."); P4 gets a real
  *leerkracht-deelnemer* quote. Closes P1's voice gap; residual = the *unfiltered* voice
  + drop-off reasons (Leon-curation bias) — the survey's specific job.
- **30/40/50:** ownership header only (they already cross-ref by ID — no persona-context
  to trim). **`S-07`** refined (personas now enriched; survey scoped to the unfiltered
  P1/P4 voice). **`index.md`** personas row refreshed.
- No git commit / no `git add` (shared multi-thread tree — user commits).

## [2026-05-19] strategy | Desk-research enrichment run — 4 streams, saved raw + wiki

To strengthen the thin Strategy artifacts, agreed (with the user) a prioritised desk-research
bundle and ran **4 parallel research agents** (research-only, isolated context): **B1**
Kunstendecreet structural-funding assessment framework + jury-advice landscape; **B2**
partner-org corpus + welfare/education gatekeeper decision-logic (P4); **B3** press /
recognition corpus (P5 + proof); **A** mining of already-held sources (current-site mirror,
browser dossier, transcript 2nd pass).

- **Saved per user instruction (raw + wiki):**
  - **Raw (immutable):** `docs/raw/research/desk-research-strategy-enrichment-2026-05-19.md`
    — the 4 agent reports verbatim with all URLs/line-refs + a provenance header (created
    at user instruction; now read-only like other raw notes).
  - **Wiki (synthesised):** `docs/wiki/strategy/90-research-evidence-2026-05-19.md` —
    evidence-graded distillation by persona/section + "how this feeds the artifacts" map +
    open follow-ups. Establishes the **`90` = research-input tier** for the Strategy phase
    (mirrors discovery's `90`); noted in `00-strategy-brief` (the numbering source-of-truth)
    and `index.md` (+1 row).
- **Headline findings:** the Kunstendecreet **participatie functie is *defined* and scored
  on 3 things** (method-meerwaarde · process/aftercare/continuity · quality-evolution) and
  the **decree itself names an org's own communication channels as proof** — turns G1/P2
  from inferred to rubric-grounded. Net-new: the **mobiele dansstudio/bike** = a bookable
  P3 offer with no digital surface; **"antenne" = a constrained cross-sector cluster**;
  citeable **partner-voice** quotes for P4; net-new EN/FR participant quotes for P1;
  **Mariage has zero critic reviews** (proof-ladder press-rung risk).
- **Caveats recorded:** 23–27 rubric ≠ 28–32 (Visienota not yet public — don't hard-wire
  aandachtspunten); analogue ≠ Leon (P4 single-trajectory depth); re-verify dynamoPROJECT.
- **Next:** synthesise into 20/30/40/50 (+ G1) and refine S-07/S-08 + add the Mariage-press
  concern (task in progress). No git commit / no `git add` (shared multi-thread tree).

## [2026-05-19] strategy | Synthesised the desk-research into the artifacts

Folded [`90-research-evidence-2026-05-19`](strategy/90-research-evidence-2026-05-19.md) into
the Strategy artifacts (ownership contract preserved; evidence-graded; cite the `90` page
which carries granular sources).

- **20-personas:** P2 **rubric-grounded** (Kunstendecreet *participatie* functie scored on
  method-meerwaarde · process/aftercare/continuity · quality-evolution; decree counts an
  org's own channels as proof; "16 not 5 years"); P3 +the **bike** (bookable, no digital
  surface) + Mariage-as-replicable-format + Kosmos/Birds; P4 **antenne = constrained
  cross-sector cluster** + institutional-not-artistic fear + **partner-coordinator voice**
  (Schoemaker/Dewin); P5 +press-angle + the **open Mariage-press gap**.
- **30-JTBD:** P2 job = the rubric; P3 job +bike; new **Forces** section
  (push/pull/anxiety/habit incl. principled no-social → site absorbs the channel job);
  proof-job rungs now rubric-anchored + the Mariage-press caveat.
- **40-VP:** RTBs hardened (P2 rubric-mapped; P3 bike/format; P4 partner-voice +
  institutional reassurance; P5 lineage-proxy + S-11).
- **50-journey:** J2 future = deep proof-ladder **read against the rubric**; J3 +replicable
  format + bike-no-surface. **10-goals:** G1 rubric-grounded.
- **Concerns:** S-07 (personas further enriched) + S-08 (rubric-anchored) refined; **+S-11**
  (Mariage has no critic reviews → lineage-proxy; ask the team) **+S-12** (research-
  freshness: 23–27≠28–32, re-verify dynamoPROJECT). Counts 10→**12** (7 Open · 5 Partly).
- **Mariage-press handling per the user:** treated as **open / ask-the-team (possible
  missed press)**, *not* a baked-in proxy stance. **index.md** rows refreshed. No git
  commit / no `git add` (shared multi-thread tree — user commits).

## [2026-05-19] strategy | JTBD / VP / journey deepened to match the personas

Final enrichment pass: gave 30/40/50 the same structural depth the personas got, **inside
the ownership contract** (each page deepens only what it owns; cross-ref by ID; no
overlap), evidence-graded, citing the `90` research page.

- **30-JTBD → job profiles** per persona: *functional / emotional / social* job ·
  **hired over what** (the alternative/non-consumption) · **done when** (success signal —
  for P2 *= the Kunstendecreet rubric*) · **dominant force**. The global Forces section
  reframed as the **system-level** view (per-persona force now in each profile).
- **40-VP → promise profiles** per persona: *unique value* · **only-here** differentiator
  (vs Ultima Vez/peers + Debateville; the decree-counts-the-site-as-proof lever) ·
  **RTB → concrete owned asset** · **register pair** (same promise in institutional vs
  belonging words — the two-registers idea made concrete; linked from the rebalance
  section) · **not promising** (honest anti-scope).
- **50-journey → bounded staged arcs**: J1/J2/J3 as *Trigger→Land→Orient→★Decisive→Act→
  After* with **what-happens&feels · current-friction · future-move(→VP link)**, plus the
  single **make-or-break moment** + **entry/exit**. Kept bounded (no service-blueprint);
  P4/P5 upgraded to a one-line "shape", still not arc-mapped (D-v / scope mandate).
- Concerns unchanged (structural deepening of the same evidence — S-07 already covers it);
  **index.md** 30/40/50 rows refreshed. No git commit / no `git add` (shared multi-thread
  tree — user commits).

## [2026-05-19] design | Image Map — Asset Catalogue (Phase 1)

Ran **Phase 1 of the Notion image-mapping playbook** ("catalogue what exists"). Leon has no
separate photo dump, so (per the user) the source set = the **current-site mirror** — the 85
image URLs in `docs/raw/current-site/images.json`. The
mirror only *indexes* URLs, so each was fetched from the Squarespace CDN at its largest
render (`?format=2500w` → WebP, long edge ≤ 2500 px), measured (`sips`), and viewed.

Applied the playbook exclusion criteria (no taste calls): **9 excluded** — 6 `/agenda`
calendar screenshots + 3 third-party "Apartheid Free Zones" campaign banners (NL/FR/EN).
**2 dropped** as byte-identical duplicate downloads (`074≡081`, `063≡075`). **74 accepted**,
copied with kebab-case names into `docs/raw/assets/`: **70 `photography/`** (participatory
intergenerational dance — Atelier Leon, Mariage, à l'école, on Tour; ~10 photographers named
in filenames), **2 `logos/`** (low-res raster only ⚠️), **2 `posters/events/`** (Mariage).

Per the user's two convention decisions: assets → `docs/raw/assets/` (the layout's designated
bucket; the read-only rule binds the hand-curated `research/`, not this machine-organised
bucket); page filed the **Leon way**, not the playbook's flat `image-map.md` — as
[`design/90-image-map.md`](design/90-image-map.md) (a media-asset evidence appendix in the
`90` research-input tier, mirroring `strategy/90-…`; plane files 20/30/40/50 stay clean).
The page carries the catalogue + excluded/dup tables + a gaps/"ask-the-client" list (no
brand kit, no team portraits, no venue/illustration, ~63/70 photos skew to `/gallery`+Mariage).

Concerns reconciled: **Dn-10** (brand assets) gains an evidence pointer (current site has
only low-res raster, no vector); **Dn-15 added** (photo-archive reuse rights / credit
obligations uncatalogued — gates the photographic surface the Dn-06 social-proof decision
assumes). Register count 14→15 (Open 9→10). **Phase 2** (per-slot map) **deferred** — it
needs Skeleton (`40`) image slots, which has not started; lands later as
`design/91-image-map-new-site.md`. Updated `index.md` (+image-map row, refreshed concerns
row). No git commit / no `git add` (shared multi-thread tree — user commits).

## [2026-05-19] strategy | Strategy phase CONCLUDED

Concluded the Strategy phase (user-confirmed). The five artifacts + brief +
`90-research-evidence` + register are a complete, coherent, evidence-graded first version;
the Design thread is already consuming it.

- **Conclusion gate (CLAUDE.md) satisfied:** 12 unresolved (🔴 7 Open · 🟡 5 Partly), **0
  silently Open** — every S-01…S-12 carries an explicit disposition (validation-gate /
  ask-client / Scope-phase). Same pattern as Discovery's conclusion (carry-forwards, not
  unfinished work).
- **Reconciled** the register's "At a glance" from *"not yet concludable"* → **✅
  concluded**, with the explicit distinction *"concluded" ≠ "client-validated"* (the
  content-complete-draft review + Kristin's P1/P4 survey are post-conclusion checkpoints,
  not unfinished strategy work). Fixed the stale `…-10` anchor → `…-12`.
- **Carry-forwards seed Scope:** the unresolved S- rows + the Scope/Design Discovery
  carry-forwards feed the Scope phase (run in the **Design thread**, already at Scope and
  reconciled to Strategy v1).
- **Wiring:** `00-strategy-brief` (+phase-status banner), `index.md` (concerns row),
  `CLAUDE.md` (Phased approach: Strategy → concluded). Open downstream item of record:
  **S-11** (ask the team re possibly-missed *Mariage* press). No git commit / no `git add`
  (shared multi-thread tree — user commits).

## [2026-05-19] lint | Glossary → opinionated proposed lexicon from verbatim

User asked for a decisive stab at the glossary: it was a list of too many candidate labels
with an open card-sort (a `Dn-14` blocker). It shouldn't have been — the verbatim research
(live-site capture + kickoff) already contains Leon's own words for almost everything.

- **`glossary.md` rewritten** from "candidates + workshop card-sort" to an **opinionated,
  evidence-cited lexicon**. Every term carries Leon's own quote + source. New status scheme:
  `proposed-strong` (Leon's exact live word — e.g. **"Previous editions:"** on `/mariage` ⇒
  *editie*; *creatie* from kickoff §9; *deelnemer/voorstelling/inschrijven/atelier* from
  site verbatim) · `proposed` · `internal-only` (frontstage/backstage, *cohort*, "Nope",
  application-pipeline — **never site copy**) · `→ Structure`/`→ Strategy`.
- **Decisions made (no longer open):** *Mariage* = the **creatie** (parent), each dated
  staging = an **editie** (closes the Scope F4 naming Q); the typed-date vocabulary =
  *open atelier · repetitie · try-out · voorstelling* (supplies Dn-12's naming half);
  group label = **groep** (site), *cohort* demoted to internal-only; the invented
  "rehearsal-class" umbrella dropped; "aanbod" rejected as a designer's word — the
  overview/root label is an **IA/Structure** decision, *removed as a vocabulary blocker*.
- **`design/01-concerns.md`:** **Dn-14 Open → Partly** (proposed lexicon exists; only
  confirm-or-correct remains; not a blocker on the content-complete draft). Counts: Partly
  2→3, Open 10→9. Dn-12 detail split (date-types settled · public-watch *flow* still Open).
  Prose + readiness table reconciled. Still **none silently Open**.
- **Wiring:** `20-scope.md` (framing line, Kern 3, F4 row, §4 line, Open-questions bullet —
  *(gloss.)* hedging dropped, lexicon adopted, F4 naming marked resolved); `index.md`
  glossary row rewritten. No git commit / no `git add` (shared multi-thread tree — user
  commits).

## [2026-05-19] discovery | Scope v0.3 — Strategy-v1.x review + 2nd client interview

Reviewed the **concluded + enriched Strategy** (brief now ✅-concluded; `10` G1
rubric-grounded; `90-research-evidence` appendix; +S-11/S-12) and the parallel
`90-image-map` ingest, then ran a second client interview and applied **Scope v0.3**.

- **Impact assessment delivered first** (talk-through before building): the enrichment
  changes Scope as *content-spec sharpening + caveats*, not a structural rework — the 14
  F-items / creatie→editie model / no-CRM / single-launch spine all stand.
- **Interview decisions (locked):** (1) follow the Kunstendecreet *participatie* rubric
  **loosely** (S-12: 28–32 aandachtspunten not public — only the criteria *structure* is
  durable) **and invisibly** — the site reads as Leon's own story, **never** a jury
  checklist (new **rubric-invisibility guardrail** principle; the invisibility *is* the
  rebalance). (2) **Press page → DECISION/conditional** — *Mariage* has zero published
  critic reviews (S-11); a standalone "Pers" page only **if substantial enough — check with
  the client**; recognition (lineage-proxy + juried *selection*, no won prizes) folds into
  the proof ladder F3 regardless. (3) **Photo credits/rights → deferred, per-asset where
  needed, not a Scope blocker** (revises Dn-15's "gates the photographic surface"). (4)
  **Donor/membership → Won't-Have v1** (audience question stays Strategy S-10). (5)
  **Bookable surface = a contact request only** — no booking section/paid-offers system
  (resolves S-05 for Design). (6) Validation gate now **+ Kristin's P1/P4 survey**; F12 P4
  path = Leon-initiated, partner-coordinator-framed, **not an application/lead-gen**;
  *Mariage* = replicable format corroborates F4.
- **`20-scope.md` → v0.3 (rewrite).** New "what changed v0.2→v0.3"; F2/F3 restructured to
  the rubric *substance* (method-meerwaarde · process/*nazorg*/continuity · quality+evolution)
  with the invisibility guardrail; F10 → **DECISION**; F11 = contact-request, S-05 resolved;
  donor Won't-Have; settled **glossary lexicon** adopted throughout (*werking* + *creaties*
  → *traject*/*voortraject* → *editie*/*groep*/*deelnemer*/*toeschouwer*/*inschrijven*;
  date-types *open atelier·repetitie·try-out·voorstelling*; "aanbod" is **not** a label →
  Structure); confidence summary + validation checklist + Open-questions refreshed.
- **`design/01-concerns.md` reconciled.** 15 → **18** (5 Closed · 3 Partly · 10 Open):
  +**Dn-16** (press substantial-enough → check client, ← S-11), +**Dn-17** (donor/membership
  Won't-Have decided; audience Q stays Strategy S-10), +**Dn-18** (booking=contact-request,
  ← S-05); **Dn-04** rubric-anchored-but-loose-and-invisible; **Dn-15** annotated
  *deferred/non-blocking*. None silently Open; Design still cannot conclude (gate =
  content-complete draft + Kristin survey).
- **Wiring:** `index.md` Concerns + Scope rows → v0.3 / 18-concern counts. No git commit /
  no `git add` (shared multi-thread tree — user commits).

## [2026-05-19] design | Glossary → two-layer model (6-persona debate corrects over-claim)

User pushed back: the "opinionated proposed lexicon" leaned too much on the team's internal
words and under-weighted the target audiences ("'creatie' isn't something they'd feel they
can participate in"). Dispatched **six parallel persona agents** (P1 newcomer · P2 jury ·
P3 programmer · P4 partner-coordinator · P5 press/public · P6 internal) to debate every
term. **Unanimous, independent convergence:**

- **The method was circular.** Grading a term `proposed-strong` because "Leon already says
  it" sampled the **current site — which is written in the *subsidiedossiertaal* the
  redesign exists to remove**. Provenance ≠ audience fit. The earlier "not-a-blocker /
  confirm-or-correct" framing was an over-claim.
- **Fix = two layers.** **Layer A** the internal content model (`creatie→editie→groep→
  typed-dates`) is *correct and kept* (CMS/backstage/IA; P6 disambiguation; P2 continuity
  evidence). **Layer B** the **public surface label** is chosen **per register**, not
  inherited — restoring Strategy's *one substance, two registers* that the old page
  silently collapsed.
- **Sharpest conflict — `editie`:** P3's "Previous editions" list is a *speellijst* (his
  single best booking signal); P1 reads "I missed it"; P5 "just a free show"; P6 the
  essential internal unit. Register-split, decided deliberately.
- **`creatie/traject/werking`** fail P1/P4/P5 publicly (art-world / dossier register);
  **`voorstelling·deelnemer·publiek·atelier·typed-dates`** are the durable shared spine;
  internal-only fence (cohort/backstage/Nope/antenne) was correct.
- **Four `gap` clusters the source-method could not surface** (it never asked these
  audiences): process/decree (*proces·toeleiding·nazorg·omkadering·continuïteit·duurzaam
  partnerschap*), welfare (*begeleid traject op maat·vrijblijvend·kennismaking*), booking
  (*productie/format·boekbare formule·technische fiche·coproductie·professional contact
  path*), public-practical (the verbatim *"gratis·zonder reservatie·datum·plaats·uur"*
  triplet; "agenda" locked as anchor; a quotable press genre noun).
- **`glossary.md` rewritten** to the two-layer model + per-register table + gaps. **Dn-14**
  stays **Partly** but the remainder is **substantial open design work** (Layer B + gaps),
  carried into the content-complete draft & Structure — **not** a client formality
  (earlier over-claim corrected). **Wiring:** `design/01-concerns.md` (Dn-14 row + prose),
  `index.md` glossary row, `20-scope.md` (framing line, Kern bullet, F4 conf, §4 line,
  Open-questions bullet, validation checklist — "lexicon settled" → "internal model
  settled, public labels per-register open"). No git commit / no `git add` (shared
  multi-thread tree — user commits).

## [2026-05-19] design | Glossary collapsed to one shared vocabulary (drop A/B layers)

User feedback: the **A/B (internal-model vs per-register public label) split is confusing
in practice** — *"both of us in the frontend (the public site) and both of us in the
backstage (the admin, and me in the code). Let's try to use the general terminology as
much as possible."* Frederik and the team work across both surfaces; a deliberately
divergent vocabulary taxes the two people doing all the work. The persona debate's
*substance* was right, but the *structural remedy* (two layers) was the wrong shape.

- **User-steered tiebreaker (AskUserQuestion):** **"Plainest general word everywhere."**
  One shared vocabulary, biased to the public, used identically in code, admin and site.
- **`glossary.md` v3 — one shared vocabulary:** *project · editie · groep · deelnemer ·
  publiek · voorstelling · inschrijving · open atelier · repetitie · try-out · atelier /
  Atelier Leon · mobiele dansstudio*. `creatie`→**`project`** (the one consequential
  rename — general, understood by newcomer/partner/dev/admin; was the most P1/P4/P5-
  alienating word in the debate). **`werking` dropped** as a label (recurring practices
  named individually: *Atelier Leon · Leon op school · Leons White Page · Leon rond de
  tafel · Leon on tour*). **`traject` demoted** to funder-page copy (not a system noun).
  `toeschouwer`→`publiek`. **In-house jargon, never user-facing** (small list, normal):
  *cohort · frontstage/backstage · antenne · "Nope" · application pipeline · voortraject*.
- **Debate substance preserved as page-level copy notes** (P1 plain invite · P4 welfare
  framing · P2 proof content w/ *traject/proces/nazorg/omkadering/continuïteit/duurzaam
  partnerschap* · P3 booking content w/ *productie/format/technische fiche/coproductie* ·
  P5 public-practical *"gratis · zonder reservatie · datum · plaats · uur"* + agenda
  anchor + a quotable press genre noun) — *not* a parallel naming system.
- **Dn-14** stays **Partly**: vocabulary settled; remainder = ordinary content-complete-
  draft work + the IA root label at Structure. Over-claim of "Layer A settled / Layer B
  substantial-open" replaced with the simpler honest framing.
- **Wiring:** `20-scope.md` ~15 edits — framing line, Kern §3+§5, F4/F5/F7/F11 rows, P3
  persona row, §4 row, content-types row, ROT row, technical line, journeys, open-
  questions bullet, validation checklist, link-to-next-plane — *creatie→project*,
  *werking* dropped, two-layer language removed; `design/01-concerns.md` (Dn-14 row +
  prose); `index.md` Glossary + Scope rows. Memory note refined (the two-layer remedy
  itself was a misstep — prefer one ubiquitous vocab biased to the hardest public
  audience). No git commit / no `git add` (shared multi-thread tree — user commits).

## [2026-05-20] lint | Strategy register — Discovery reconciliation (3 close)

Cross-checked the Strategy register against the up-to-date Discovery register.
Three Strategy concerns close because their Discovery anchor was already closed at the
2026-05-19 Frederik review:

- **S-05** (paid offers / dedicated booking section appetite) → resolved via **D-05**:
  no booking automation, stays email-led; instead a light "how this collaborative-funding
  constellation works" explainer; no pricing detail. G3/J3 shape accordingly.
- **S-06** (P6 / backstage scope boundary) → resolved via **D-36**: boundary holds;
  lightweight backstage only, no participant DB/CRM; re-examine only in Scope/Design if
  a *site* treatment genuinely depends on it.
- **S-10** (individual-donor / membership audience) → resolved via **D-26**: none;
  funding is grant/subsidy + project-based; strategy stays grant + commission framed.

Counts: **12 → 9 unresolved** (🔴 7 → 5 Open · 🟡 5 → 4 Partly) · **✅ 0 → 3 Closed**.
Also fixed a stale anchor link (`#unresolved--what-still-needs-resolving-27` →
`-10`) and lightly refreshed the parenthetical examples list of Scope/Design/Build
discovery carry-forwards (dropped items already closed in Discovery: governance,
staffing, accessibility, ticketing, AFZ placement, dynamic gallery; kept: Notion
feasibility, GDPR, network memberships, *Birds* rights wording, footer-partners
classification). No git commit / no `git add` (shared multi-thread tree — user commits).

## [2026-05-20] design | Structure plane crystallised (Garrett Plane 3) — Variant 1B

Crystallised the **Design Structure plane** ([30-structure.md](design/30-structure.md))
after a Socratic in-thread workshop with Frederik. The plane was run UX-Planning style:
summarise what Scope/Strategy/Glossary already lock for IA, surface the genuinely-open
forks, settle them iteratively, then produce the sitemap. Page-level layout (the home, the
project-page) is deliberately deferred to Skeleton.

- **Variant choice (audit trail).** Three variants weighed: V1 full audience-first nav
  (Debateville pattern) → discarded (forces self-identification, rubric-visibility risk,
  fragments the work); V2 pure routed spine (content-first, all in-page routing) → discarded
  (cannot honour Glossary register-split for P3/P4/P2 on a shared page); **V1B adopted** —
  content-first primary nav + single audience-bridge (Samenwerken) whose children are
  intentional-action labels. Closest to Belgian art-org grammar, respects register-split
  where it matters, honours Kern 2 (invitation-forward home).
- **The five top-level items**: *Dansateliers · Voorstellingen & projecten · Samenwerken ·
  Agenda · Over Leon*. **Modal nav grammar** named as a principle (some items by *what*,
  some by *relation* — each frame the one its audience naturally uses).
- **Two load-bearing IA insights from the workshop:**
  - **Trajectory, not product.** Leon's offer is process, not catalogue. The bookable
    surfaces all use trajectory verbs (*opzetten · uitnodigen · doen*). There is no "book a
    finished show" path because Leon's economic model doesn't include one. *Mariage* is
    commissioned, not booked — so it routes through **Participatief dansproject opzetten**,
    not a separate "Een voorstelling programmeren" child (considered and dropped). This is
    a real **Scope F11 amendment** noted as a pending Scope reconciliation.
  - **Agenda has a dual job.** With the team-confirmed "LWP + Leon rond de tafel are
    internal" combined with the user's "show everything by default + simple filters,"
    the unfiltered Agenda becomes a visible **proof-density signal** for funders/jury (the
    rubric's *continuïteit · process · evolution* criteria visibly evidenced) while filters
    do the utility job for participants/freelancers. Same surface, two jobs, no
    rubric-language.
- **Samenwerken's children = intentional-action labels** (user direction): *Participatief
  dansproject opzetten · Mobiele dansstudio uitnodigen · Vrijwilligerswerk of stage doen*.
  Three trajectory verbs, register-clear children. P4 + P3 commissioners both land on
  *opzetten* (Mariage-shape, Kosmos-shape, Leon-op-school instances); the bike has its own
  child; vrijwilligers/stagiairs as a **new audience surface** the team flagged at the
  workshop (deserves a section — they receive recurring email enquiries).
- **Recurring practices distribute by audience-fit** (team-confirmed: LWP + Leon rond de
  tafel are internal). No "werking" umbrella, no overview root: Atelier Leon → Dansateliers;
  Leon op school → Samenwerken (as a concrete instance under *opzetten*); LWP + Leon rond
  de tafel → **Agenda only** (no dedicated landing page; event-label is the entire public
  surface — small content task to add a 1-line public explainer); Leon on tour → Agenda
  dates + Boekingen track-record. Resolves the IA root-label question Scope/Glossary
  deferred.
- **Over Leon → slim** (user direction: "what the team can pull off"). Sub-pages: Missie &
  visie · Impact · Team · Historiek · Contact. **Jaarverslag dropped** (team doesn't
  produce one). **Standalone Pers page dropped** (Dn-16 closes Won't-Have v1 — user: "Pers
  gone for now"; recognition folds into Historiek). The **deep proof rung (Scope F2/F3)
  becomes distributed**: a slim Impact page (method + proces/nazorg + qualitative evidence
  + "In cijfers" auto-pulled from Agenda data — no manual %-dashboard) + per-project
  trajectory documentation on V&P pages + lineage on Historiek + the funder/partner wall
  in the site-wide footer + the Agenda's density signal. No standalone "for funders" page;
  rubric-invisibility strengthens.
- **The label settled at Structure (was deferred by Scope):** *Voorstellingen & projecten*
  (user choice; rejected *Creaties* because Glossary v3 makes "creatie" P1-bouncing — kept
  only as informal in-house speech).
- **Persona/journey routing checked**: J1 (P1) → Dansateliers ✓; J2 (P2) → Over Leon →
  Impact ✓ (load-bearing journey to test at validation); J3 (P3) → Samenwerken → opzetten /
  uitnodigen ✓; P4 → Samenwerken → opzetten ✓; P5 → Agenda + Historiek ✓; N → no path ✓;
  vrijwilliger/stagiair (new) → Samenwerken → doen (surface in place, persona pending).
- **Concerns register reconciled (18 → 19):**
  - **Closed:** Dn-16 (Pers Won't-Have v1).
  - **Open → Partly:** Dn-12 (editie flow shape resolved structurally — inschrijving +
    deelnemer practical-info on editie page; publiek via Agenda; team-verify remainder).
  - **NEW Open:** **Dn-19** vrijwilligers/stagiairs as a site audience — needs persona +
    JTBD + journey from Strategy thread; team to share email corpus as raw research input;
    a new S- concern to open on next Strategy sync.
  - **Pending Scope reconciliations recorded (not new Dn- IDs):** Scope Kern 3 (no overview
    root; practices distribute), F10 (Pers → Won't-Have), F11 (trajectory-not-product
    amendment), F2/F3 (distributed proof). Touched on next Scope ingest.
  - Counts: ✅ 5 → 6 · 🟡 3 → 4 · 🔴 10 → 9 · total 18 → 19. None silently Open.
- **Wiring:** `docs/wiki/design/30-structure.md` (new); `design/01-concerns.md` (counts +
  Dn-12/14/16 rows + Dn-19 added + carry-forward note + new "Scope reconciliations pending"
  section); `design/00-design-plan.md` (plane status DRAFT 2026-05-20 + Skeleton-priority
  note); `index.md` (+1 row for 30-structure; Scope row unchanged). No git commit /
  no `git add` (shared multi-thread tree — user commits).
- **Next:** Skeleton (Plane 4). Highest-priority skeletons = the home (the 5-tension
  interaction-design piece Structure deferred) and the *Voorstellingen & projecten*
  project page (using *Mariage* as the test case).

## [2026-05-20] design | Structure v0.2 — 4-item nav restructure + terse rewrite for downstream LLM use

Iterated Structure v0.1 → **v0.2** ([30-structure.md](design/30-structure.md)) after a
follow-on workshop and verification against the current `/what-we-do` mirror. The IA
restructure resolves a v0.1 gap (Leon op school + Leon on tour buried) and gives the file a
*spec* shape for downstream LLM consumption (Laravel scaffolding · Skeleton wireframes ·
per-section UX planning).

- **Top-level merged**: Dansateliers + Voorstellingen & projecten → **Dansateliers &
  performances**. **5 → 4 top-level items** (Dansateliers & performances · Samenwerken ·
  Agenda · Over Leon).
- **Naming pattern named as an IA rule**: **Generic-first, brand-second** —
  `<category>: <Leon's brand name>`. Children: *Open dansateliers: Atelier Leon · Ateliers
  op school: Leon op school · Participatieve performances: Mariage · Mobiele dansstudio*.
  Visitor reads what it *is* + what Leon *calls it* in one scan.
- **Verified vs. /what-we-do mirror**: the current site describes "Leon on tour" as the
  umbrella for participatieve performances ("…a large-scale performance like *Mariage*"),
  **not** as a peer recurring practice. Glossary v3 listed it as a peer — that was wrong.
  Lint applied: "Leon on tour" dropped from the recurring-practices line; *Participatieve
  performances* is the public category. Apartheid Free Zones placement clarified in the
  same glossary entry (→ Over Leon → Missie & visie, per Strategy S-03).
- ***Birds* → Historiek** (lineage). It's an Ultima Vez production Leon tour-directs since
  2023 — best surfaced as the "16 not 5 years" trust signal (G1/P2), not on the same shelf
  as Mariage. ***Kosmos 2027*** added under Participatieve performances **only when ready**
  (no advance placeholder).
- **Mobiele dansstudio** has its canonical page under *Dansateliers & performances*;
  *Samenwerken → uitnodigen* becomes an intake/routing page that links to it (same pattern
  as *opzetten* linking to Mariage / Leon op school / Kosmos in the container).
- **Content model added to the doc** (entities for Laravel scaffolding): *Project (hasMany
  Editie) · Editie · RecurringPractice · Event · Page · Partner/Funder · Inschrijving*.
  Public-vs-internal recurring-practice distinction made explicit (LWP + Leon rond de tafel
  = internal-only, no landing page, events only on Agenda).
- **Terse rewrite** (per user request — *"less verbose, less reasoning, file used for
  downstream decisions"*): file dropped from ~440 → ~190 lines. Cut: variant audit-trail
  (V1 / V2 / V1B history — now in this log entry), trade-off prose, "honest cost"
  framing, long IA-principle explanations. Kept: sitemap, IA principles as one-line rules,
  content model, per-section content tables, persona routing, Scope reconciliations, open
  Skeleton items, concerns moves, validation gate.
- **Concerns unchanged at v0.2** (still 19; Dn-12 Partly, Dn-16 Closed, Dn-19 Open carried
  from v0.1).
- **Wiring:** `30-structure.md` (rewrite); `glossary.md` (lint: recurring-practices row +
  AFZ placement note); `01-concerns.md` (status prose: Structure v0.1 → v0.2);
  `00-design-plan.md` (plane row → v0.2 + new summary); `index.md` (Structure row
  refreshed with v0.2 spec summary). No git commit / no `git add` (shared multi-thread tree
  — user commits).
- **Next:** Skeleton (Plane 4). The doc is now in shape for parallel-dispatch per-section
  Skeleton work (the home + each top-level branch can be picked up independently).
