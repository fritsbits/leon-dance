# Leon — LLM Wiki

This repository is an **LLM-maintained knowledge wiki** for the Leon website (frontend) and
possible backend-services engagement. It follows the LLM wiki pattern: immutable raw sources are
read once, synthesised into structured wiki pages, and kept current as new sources arrive. The
wiki is a compounding artifact — you (the LLM) own and maintain it; the human curates sources
and asks questions.

`leon.dance` = **Leon vzw**, the work structure around choreographer **Seppe Baeyens**: a
nomadic, participatory dance practice in Brussels (Atelier Leon, large intergenerational works
like *Birds* / *INVITED*), funded by the Flemish government and the VGC. Multilingual EN/FR/NL.

---

## Directory layout

```
CLAUDE.md                      # this file — the wiki schema (auto-loaded every session)
docs/
  raw/                         # IMMUTABLE sources — never edit these
    research/                  # desk-research source notes (web findings + citations)
    assets/                    # downloaded images/files referenced by sources
    current-site/                # MACHINE-GENERATED verbatim site mirror (npm run capture)
  wiki/                        # LLM-owned synthesised pages
    index.md                   # catalogue: Page | Summary | Category | Phase
    log.md                     # append-only timeline: ## [YYYY-MM-DD] <op> | <title>
    discovery/                 # Discovery phase pages
      00-discovery-plan.md     # discovery learning agenda + method + findings so far
      01-concerns.md           # the phase Concerns register (authoritative status index)
    strategy/                  # Strategy phase pages (Garrett Strategy plane)
      00-strategy-brief.md     # front door + the locked strategic decisions
      01-concerns.md           # the phase Concerns register
    design/                    # Design phase pages (UX-planning playbook)
      00-design-plan.md        # design phase plan + plane status
      01-concerns.md           # the phase Concerns register
  superpowers/
    specs/                     # design specs for the work itself (not knowledge pages)
```

**Public repo note.** `docs/raw/`, `docs/superpowers/`, and `scripts/` are gitignored from the
public `leon.dance` repository. The schema below describes the full method as used locally;
sources cited in the wiki point at material the public reader cannot see.

**Hard rule:** `docs/raw/` is read-only for you. You read from it, never modify it. All synthesis
lives in `docs/wiki/`.

**Carve-out — `docs/raw/current-site/`:** the single exception. It is a *machine-generated,
re-runnable* verbatim mirror of the live `leon.dance` site, produced by `npm run capture`
(see `docs/raw/current-site/README.md`). It is regenerated wholesale, never hand-edited.
Every other path under `docs/raw/` remains immutable and hand-curated as above.

---

## Phased approach

Work proceeds in **phases**. Only the active phase's structure is decided — later phases are
deliberately undecided (YAGNI) and will be designed when reached.

- **Discovery — concluded.** Pages in `docs/wiki/discovery/`; run as a structured
  desk-research dossier (see "Discovery = desk research" below). Its
  [Concerns register](docs/wiki/discovery/01-concerns.md) seeds the later phases.
- **Strategy — concluded 2026-05-19** (separate thread). Garrett's Strategy plane — org
  goals, personas, JTBD, value proposition, user journey — in `docs/wiki/strategy/`. Its
  [Concerns register](docs/wiki/strategy/01-concerns.md) (all unresolved = explicit
  carry-forwards) seeds **Scope**; validation gate = client reaction to the
  content-complete NL draft + Kristin's P1/P4 survey.
- **Design — ACTIVE** (separate thread). UX-planning playbook (Garrett planes, bottom-up)
  in `docs/wiki/design/`; **consumes** Strategy.
- **Later phases (build, …) — TBD.** Do not pre-create their structure.

Every wiki page carries a `phase:` frontmatter key so the index stays phase-aware. Every
phase carries exactly one **Concerns register** (next section).

---

## Concerns register (per phase)

Every phase has **exactly one Concerns register**: a dedicated `0x`-tier file
`docs/wiki/<phase>/0x-concerns.md` (phase-management, alongside the plan). It is the **single
authoritative status index** of everything unresolved/resolved in the phase — answering "can
we conclude this phase, and what's still open?" — so status is read in one place, not
reconstructed from scattered per-doc lists.

- **One register per phase.** Discovery → `discovery/01-concerns.md`. A later phase gets its
  own when it starts (its own `0x` tier; don't pre-create — YAGNI).
- **A concern** = any open question, unverified assumption (⚠️), risk, decision-needed, or
  gap that bears on the phase outcome. **Deduplicated**: one canonical concern even if
  several pages touch it.
- **ID** = phase letter + number, stable forever: Discovery `D-01`, `D-02`, … (Strategy
  `S-`, Design `Dn-`, Build `B-`). Never renumber; a new concern takes the next free number.
- **Status** = `Open` · `Partly` (partially resolved — name the remainder) · `Closed`. A
  `Closed`/`Partly` row **always** carries a one-line resolution + pointer (what closed it,
  e.g. `client 2026-05-19 → 12-client-kickoff`). Closure reasons: *answered*,
  *deferred to <phase>*, *won't-resolve*.
- **Register rolls up; docs keep detail.** Per-doc "Open questions" sections remain as local
  detail but are **not** the source of truth for status — each carries a pointer to the
  register and the relevant ID range; the register is reconciled against them on lint.
- **Conclusion gate:** a phase may only be concluded when **no concern is silently `Open`** —
  every concern is `Closed`, or explicitly `Partly`/`deferred` with the reason recorded.
- **Layout = open-first.** The register's job is "what's still unresolved" — so lead with an
  at-a-glance line then the **Unresolved** (`Open`+`Partly`) list as the centrepiece; put
  `Closed` rows last as an **audit trail**. Status markers (🔴 Open · 🟡 Partly · ✅ Closed)
  so a reader filters by eye in one pass. The Unresolved list doubles as the seed of the
  next phase's register.

Updated on every **ingest** (add/refresh concerns + status) and **lint** (reconcile the
register against per-doc detail; flag silent `Open`s).

---

## Discovery = desk research

The Discovery phase is executed as a **desk-research playbook**: form a sharp, evidenced picture
of the current situation from everything publicly available — *before* talking to the client — so
the first client conversation is led by knowledge, not assumptions.

### The eight research phases (sequential — each builds on the last)

1. **Site audit** — crawl the full `leon.dance` site. Every page: title, URL, status
   (active / empty / outdated / broken). Navigation structure. What exists, what's missing,
   what's broken. (Sources: the site, DevTools, sitemap.xml, robots.txt)
2. **SEO & findability** *(optional)* — meta descriptions, OG tags, alt text, structured data,
   indexation, search positions vs. peers.
3. **Audience & personas** — visible segments from the offer, platforms, and any review data.
   Motivations + channels per segment.
4. **Customer journeys** — walk the 3–4 highest-value paths literally. Steps, frictions,
   drop-off points.
5. **Competitive & comparison analysis** — direct peers (same region/offer) + comparable
   players (other model/region, transferable lessons). Compare offer, digital presence, UX,
   SEO, reviews. → positioning matrix.
6. **Best practices & inspiration** — reference sites (incl. international) that solve the same
   problem well. Extract transferable patterns.
7. **Platform & ecosystem** — where Leon is / should be visible externally; integration options
   (booking, ticketing, social embeds, payments) with feasibility.
8. **Synthesis & recommendations** — SWOT, redesign priorities, recommended site structure,
   technical considerations, open questions for the client conversation.

Each phase becomes its own page under `docs/wiki/discovery/` when run (e.g.
`discovery/20-site-audit.md`). `discovery/10-desk-research.md` is the overview / executive summary
landing page with progressive disclosure (scan → drill in). Phase 2 is optional; skip if low value.

### The five research principles (apply to every phase)

1. **Observation ≠ interpretation.** Both may appear, but every interpretation/hypothesis is
   marked with **⚠️** so the reader knows what is proven vs. assumed.
2. **No unverifiable superlatives.** Be specific and falsifiable. "EN/FR/NL toggle present on
   3 of 7 pages" not "great multilingual support".
3. **Always cite the source.** Every fact has a URL / screenshot / search result. No source ⇒
   it's an assumption ⇒ mark it ⚠️.
4. **Research is a starting point, not a conclusion.** Internal data (budget, headcount, traffic)
   is invisible. The dossier must explicitly name what it does *not* know and what to ask the client.
5. **Write for someone who doesn't know the project.** No unexplained jargon. Headings that say
   something; detail in the page body.

### Running discovery

Run autonomously through the phases — don't ask permission per phase; note blockers and continue.
After all phases, write/update `discovery/10-desk-research.md` as the executive summary, and keep
the **Concerns register** (`discovery/01-concerns.md`) current — it is the authoritative
open/closed status index (see "Concerns register (per phase)" above), replacing ad-hoc
open-question lists as the place to read status. This work can run in a separate thread; that
thread should read this CLAUDE.md and `docs/wiki/discovery/00-discovery-plan.md` first.

---

## Ingest workflow (manual, supervised)

1. Drop the source into `docs/raw/` (or `docs/raw/research/` for web-research notes).
2. Read it; discuss key takeaways with the human.
3. Write/update the relevant page(s) in `docs/wiki/`.
4. Update `docs/wiki/index.md`.
5. Update related pages (cross-refs, contradictions, new data).
6. Update the phase **Concerns register** — close/advance any concerns this source resolves
   (add the resolution + pointer); add any new concerns it raises.
7. Append an entry to `docs/wiki/log.md`.

No chunking/ingestion script — sources are hand-read at this scale.

---

## Page conventions

YAML frontmatter on every wiki page:

```yaml
---
title: <Page Title>
tags: []
sources: [<raw filename or url-shorthand>, ...]
phase: discovery        # or: strategy | design | build | cross-cutting
updated: YYYY-MM-DD
---
```

- One concept / entity / phase-output per page.
- Cross-link with standard markdown: `[Page Title](relative-path.md)`.
- Mark interpretations with **⚠️** (principle 1). Cite sources inline (principle 3).
- **Filename numbering (discovery).** Pages in `docs/wiki/discovery/` carry a tier-coded
  numeric prefix so the alphabetically-sorted file list reads in dependency order:
  `0x` method/agenda + the **Concerns register** · `1x` synthesis (front-door) · `2x`
  evidence · `9x` raw research input.
  Within a tier, increment by 1 (gaps allowed for later insertion). A new discovery page
  takes the next free number in its tier and links use the prefixed filename.
- **Filename numbering (strategy & design).** Later phases use a **plane/artifact-aligned**
  scheme (not the discovery tier scheme): `00` front-door plan/brief · `01` Concerns
  register · then one file per artifact/plane in dependency order (`10/20/30/40/50`). Each
  phase's `00-*` page is the source of truth for its own numbering.

### index.md format

A single table at `docs/wiki/index.md`, columns: `Page | Summary | Category | Phase`.
Updated on every ingest and lint.

### log.md format

Append-only. Each entry header: `## [YYYY-MM-DD] <operation> | <title>` where operation is one
of `scaffold`, `ingest`, `<phase>` (e.g. `discovery`, `strategy`, `design`), `query`, `lint`.
Greppable:
`grep "^## \[" docs/wiki/log.md`.

---

## Query workflow

1. Read `docs/wiki/index.md` to find relevant pages.
2. Drill into them.
3. Answer with citations.
4. If the answer is valuable (a comparison, analysis, new connection), file it back as a new
   wiki page so explorations compound.

## Lint workflow

Periodically health-check the wiki: contradictions between pages, stale claims superseded by
newer sources, orphan pages (no inbound links), concepts mentioned but lacking a page, missing
cross-references, data gaps fillable by a web search, and ⚠️ markers that have since been
verified. **Also reconcile each phase's Concerns register** against per-doc "Open questions"
detail: every per-doc item maps to a register ID; statuses agree; no concern is silently
`Open` if the phase is being concluded; resolved ⚠️/questions are reflected as `Closed`.
