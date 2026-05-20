---
title: Design Phase — Plan (UX Planning / Garrett 5 Planes)
tags: [design, plan, ux, garrett, method]
sources: [ux-planning-playbook (Notion); client kickoff 2026-05-19]
phase: design
updated: 2026-05-19
---

# Design Phase — Plan

The **Design phase** is now ACTIVE (started 2026-05-19). It runs the
[UX Planning playbook](https://www.notion.so/frederik-vincx/Playbook-UX-planning-Elements-of-User-Experience-332d3ecc475c8168b2d6ce7ad4144d32)
— Jesse James Garrett's **five planes of user experience** (Strategy → Scope → Structure →
Skeleton → Surface), worked **bottom-up**, one plane at a time, Socratic ("Claude proposes
a draft, the user reacts, then it is finalised"). Discovery + Strategy are the inputs;
this phase turns them into an actionable design.

## Engagement level

**Site-level full redesign** of `leon.dance` — a **custom build replacing Squarespace**,
programmed and hosted by Frederik, free, on a similar recurring budget. Page-level UX
planning (per-page deep-dives) comes *after* the site-level planes settle.

## Strategy plane — owned outside this thread

The **Strategy plane** was run in a separate STRATEGY thread and **concluded 2026-05-19**.
Scope rests on the [Strategy Brief](../strategy/00-strategy-brief.md) + the five
artifacts. Concern **[Dn-01](01-concerns.md)** (Scope reconciliation against Strategy) is
now closed.

## Plane order & status

| Plane | File | Status | Notes |
|---|---|---|---|
| 1 — Strategy | [strategy/](../strategy/) | **CONCLUDED** (separate thread, 2026-05-19) | Five artifacts + brief + research-evidence |
| 2 — Scope | [20-scope.md](20-scope.md) | **DRAFT v0.3** | Strategy-v1.x reconciliation + interview-locked; validation gate = content-complete NL draft + Kristin's P1/P4 survey |
| 3 — Structure | [30-structure.md](30-structure.md) | **DRAFT v0.2 (2026-05-20)** | 4-item primary nav (Dansateliers & performances · Samenwerken · Agenda · Over Leon); generic-first/brand-second naming; trajectory-not-product; Agenda dual-job; proof distributed |
| 4 — Skeleton | `40-skeleton.md` | not started | Wireframe briefs + state inventory. Highest-priority skeleton = the home (5 tensions) and the *Voorstellingen & projecten* project page (using *Mariage*) |
| 5 — Surface | — | not started | Hands off to Visual Design Guidelines; not in this thread unless asked |

## Design-phase filename numbering

The discovery tier scheme (`0x` method · `1x` synthesis · `2x` evidence · `9x` raw) is
**discovery-scoped**. The Design phase uses a **plane-aligned** scheme:

- `00` phase plan (this file) · `01` Concerns register (phase-management, `0x` tier per
  schema).
- `10` Strategy · `20` Scope · `30` Structure · `40` Skeleton · `50` Surface — second
  digit = Garrett plane × 10, so the alphabetical file order is the dependency order.
- Only files for planes actually reached are created (YAGNI). Strategy (`10`) is
  intentionally absent here — it lives in the external thread.

## Principles tuning

- **Tuned — "Content vs functionality":** the playbook says pick one. Leon is a
  **hybrid**: the *public surface* is content-/legitimacy-led (a *visitekaartje* for a
  funding jury and a moment-of-truth for potential participants); the *backstage* is
  functionality-led (owned sign-up → participant DB, structured editable content-types,
  localisation). Stated explicitly in [Scope](20-scope.md) rather than defaulted.
- **Elevated — "Maintainability gate" + "Won't-Have list":** load-bearing here, not
  routine. Editorial capacity is a **confirmed real risk** and **autonomy is an explicit
  client requirement**; the client named scope-creep as a shared concern. Every scope
  item passes the maintainability gate; the Won't-Have list is a first-class deliverable.
- **Added — "No-social is a hard constraint, not a channel gap":** the site is the
  **only** owned channel by principled client choice. Scope may not assume social
  funnels/embeds as a fallback.
- **Kept** — all other Scope defaults (cut generously first; Kano classification;
  traceability; content lifecycle / ROT audit; Occam's razor tiebreaker).

## Output location

Recorded in this **LLM wiki** per the project `CLAUDE.md` (not Notion). The playbook's
"save each plane to Notion" step is **deferred** — offer a Notion push only if the user
asks.

## Cross-links

- Method source: UX Planning playbook (Notion, link above).
- Strategic basis: [Strategy Brief](../strategy/00-strategy-brief.md) + the five
  artifacts in `../strategy/`.
- Status index: [Design Concerns register](01-concerns.md).
- Current plane: [Scope](20-scope.md) · [Structure](30-structure.md).
