---
title: Design Phase — Plan (UX Planning / Garrett 5 Planes)
tags: [design, plan, ux, garrett, method]
sources: [ux-planning-playbook (Notion), 11-website-purpose, 12-client-kickoff-2026-05-19]
phase: design
updated: 2026-05-19
---

# Design Phase — Plan

The **Design phase** is now ACTIVE (started 2026-05-19, on the user's instruction). It runs
the [UX Planning playbook](https://www.notion.so/frederik-vincx/Playbook-UX-planning-Elements-of-User-Experience-332d3ecc475c8168b2d6ce7ad4144d32)
— Jesse James Garrett's **five planes of user experience** (Strategy → Scope → Structure →
Skeleton → Surface), worked **bottom-up**, one plane at a time, Socratic ("Claude proposes a
draft, the user reacts, then it is finalised"). Discovery is the input; this phase turns it
into an actionable design.

## Engagement level

**Site-level full redesign** of `leon.dance` — a **custom build replacing Squarespace**,
programmed and hosted by Frederik, free, on a similar recurring budget
([Client Kickoff §8](12-client-kickoff-2026-05-19.md#8-build-approach-platform-cost-maintenance)).
Page-level UX planning (per-page deep-dives) comes *after* the site-level planes settle.

## Strategy plane is owned **outside this thread**

Per the user: the **Strategy plane is being run in a separate STRATEGY thread** and is
therefore **out of scope for this thread**. This thread starts at **Scope (Plane 2)**.

⚠️ Garrett forbids skipping a lower plane — Scope must rest on Strategy. The mitigation:
until the Strategy thread's document lands, Scope traces to the **interim strategy basis** —
the two client-validated discovery pages that already carry the strategic substance:

- [What Is the Website Actually For?](../discovery/11-website-purpose.md) — audiences,
  the legitimacy job, the participant moment-of-truth refinement (client-validated).
- [Client Kickoff (2026-05-19)](../discovery/12-client-kickoff-2026-05-19.md) — client
  ground truth: the Kunstendecreet driver, the two evenwaardige publics, no-social,
  backstage, build approach.

When the Strategy document arrives, Scope **must be reconciled** against it (audience
ranking, North Star metric, value proposition, phased roadmap). Tracked as concern
**[Dn-01](01-concerns.md)**.

## Plane order & status

| Plane | File | Status | Notes |
|---|---|---|---|
| 1 — Strategy | — (external) | OWNED ELSEWHERE | Separate STRATEGY thread; interim basis = discovery 11 + 12 |
| 2 — Scope | [20-scope.md](20-scope.md) | **DRAFT (2026-05-19)** | First version + per-section confidence; interview pending |
| 3 — Structure | [30-structure.md](30-structure.md) | **DRAFT v0.2 (2026-05-20)** | 4-item primary nav (Dansateliers & performances · Samenwerken · Agenda · Over Leon); generic-first/brand-second naming pattern; trajectory-not-product; Agenda dual-job; proof distributed; terse spec for downstream LLM use (Laravel/Skeleton/per-section UX) |
| 4 — Skeleton | `40-skeleton.md` | not started | Wireframe briefs + state inventory; when reached. Highest-priority skeleton = the home (5 tensions) and the *Voorstellingen & projecten* project page (using *Mariage*) |
| 5 — Surface | — | not started | Hands off to Visual Design Guidelines; not in this thread unless asked |

## Design-phase filename numbering

The discovery tier scheme (`0x` method · `1x` synthesis · `2x` evidence · `9x` raw) is
**discovery-scoped**. The Design phase uses a **plane-aligned** scheme instead, documented
here:

- `00` phase plan (this file) · `01` Concerns register (phase-management, `0x` tier per
  schema).
- `10` Strategy · `20` Scope · `30` Structure · `40` Skeleton · `50` Surface — second digit
  = Garrett plane × 10, so the alphabetical file order is the dependency order.
- Only files for planes actually reached are created (YAGNI). Strategy (`10`) is intentionally
  absent here — it lives in the external thread.

## Principles tuning (provisional — reconcile with Strategy thread)

The playbook asks for a "Principles tuning" section in the **Strategy** document (Kept /
Tuned / Added / Suspended). Strategy is external, so the **provisional** tuning is parked
here and must be reconciled when the Strategy doc lands (concern [Dn-01](01-concerns.md)):

- **Tuned — "Content vs functionality":** the playbook says pick one. Leon is a **hybrid**:
  the *public surface* is content-/legitimacy-led (a *visitekaartje* for a funding jury and
  a moment-of-truth for potential participants); the *backstage* is functionality-led (owned
  sign-up → participant DB, structured editable content-types, localisation). Stated
  explicitly in [Scope](20-scope.md) rather than defaulted.
- **Elevated — "Maintainability gate" + "Won't-Have list":** load-bearing here, not
  routine. Editorial capacity is a **confirmed real risk** and **autonomy is an explicit
  client requirement** ([Kickoff §6, §8](12-client-kickoff-2026-05-19.md#6-backstage--internal-tooling));
  the client named scope-creep as a shared concern. Every scope item passes the
  maintainability gate; the Won't-Have list is a first-class deliverable.
- **Added — "No-social is a hard constraint, not a channel gap":** the site is the **only**
  owned channel by principled client choice
  ([Kickoff §4](12-client-kickoff-2026-05-19.md#4-communications-model--no-social-media-principled)).
  Scope may not assume social funnels/embeds as a fallback.
- **Kept** — all other Scope defaults (cut generously first; Kano classification;
  traceability; content lifecycle / ROT audit; Occam's razor tiebreaker).

## Output location

Recorded in this **LLM wiki** per the project `CLAUDE.md` (not Notion). The playbook's
"save each plane to Notion" step is **deferred** — offer a Notion push only if the user
asks.

## Cross-links

- Method source: UX Planning playbook (Notion, link above).
- Strategic basis: [11-website-purpose](../discovery/11-website-purpose.md),
  [12-client-kickoff](../discovery/12-client-kickoff-2026-05-19.md).
- Status index: [Design Concerns register](01-concerns.md).
- Current plane: [Scope](20-scope.md).
