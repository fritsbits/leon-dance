---
title: Discovery Plan
tags: [discovery, desk-research]
sources: [leon-initial-desk-research-2026-05-18, leon.dance, client-meeting-2026-05-19]
phase: discovery
updated: 2026-05-19
---

# Discovery Plan — Leon

The learning agenda for the Discovery phase. Discovery is run as a **structured desk-research
dossier** (8 phases, 5 principles — see [`CLAUDE.md`](../../../CLAUDE.md) → "Discovery = desk
research"). This page is the entry point: a separate research thread should read `CLAUDE.md`
and this page first, then run the phases.

## Goal

Form a sharp, evidenced picture of Leon's situation from everything publicly available —
*before* the first client conversation — so that conversation is led by knowledge, not
assumptions. Output: enough understanding of Leon (org, mission, how they work), their current
digital presence, and what a new website + possible backend services must do, to enter a
strategy/design phase with confidence.

## How discovery runs

Eight sequential phases, each producing its own page under `docs/wiki/discovery/`, with
`discovery/desk-research.md` as the executive-summary landing page:

1. **Site audit** — full `leon.dance` crawl → `discovery/site-audit.md`
2. **SEO & findability** *(optional — skip if low value)*
3. **Audience & personas**
4. **Customer journeys**
5. **Competitive & comparison analysis**
6. **Best practices & inspiration**
7. **Platform & ecosystem**
8. **Synthesis & recommendations** → folds into `discovery/desk-research.md`

Five principles apply to every phase: observation ≠ interpretation (mark ⚠️); no unverifiable
superlatives; always cite the source; name what we *don't* know; write for someone who doesn't
know the project. Run autonomously through the phases — note blockers, keep going.

## What we know so far

*Synthesised from initial public web search, 2026-05-18. Source:
`docs/raw/research/leon-initial-desk-research-2026-05-18.md`.
Unverified / inferred items marked ⚠️ — none of this is client-confirmed.*

- **`leon.dance` = Leon vzw**, the work structure / "dance community" around choreographer
  **Seppe Baeyens** (b. 1981). A "Brussels-based and nomadic workspace with dance as its
  binding element" — the processes preceding productions matter as much as the productions;
  participation and "the power of meeting" are central. Umbrella concept: **"White Page"**
  (connection, equality, social cohesion; "everyone feels welcome and can move freely").
- **Approach:** participation + co-authorship; intergenerationality and diversity as essential
  conditions; deliberately works with people who don't feel addressed by / lack access to art
  and culture.
- **Activities:** *Atelier Leon* — weekly participatory open workshops for children, youth,
  adults (reported: Sat 10:00–12:00 Maison des Cultures Molenbeek; Wed 16:00–18:00 GC
  Pianofabriek St-Gilles); large participatory productions (*Birds*, *INVITED*) with
  intergenerational ultra-diverse casts. Site sections seen: Agenda, Who We Are, What We Do,
  Apartheid Free Zone, Gallery, Mariage, Contact.
- **Audience ⚠️:** children / youth / adults, esp. people excluded from art & culture;
  intergenerational, "ultra-diverse" — inferred from offer + partners, not client-confirmed.
- **Funding/structure:** Leon vzw is supported by the **Flemish government + VGC**. ⚠️ Likely
  Kunstendecreet (2023–2027) structural funding given profile — *not confirmed*; no
  Leon-specific subsidy record or jaarverslag found yet.
- **Ecosystem:** co-presenting / partner mentions incl. KVS, KANAL, STUK, NTGent, Circuit,
  SuperVliegSuperMouche, Brede School Molenbeek, Maison des Cultures, GC Pianofabriek,
  Openstreets Brussels. Operates **EN / FR / NL** — "all activities take place in three languages".

## What we need to learn

Refined buckets — drive the phases and the eventual client conversation:

- **Organisation** — mission/vision in their own words; legal & funding structure (subsidy
  stream(s), amounts, period; any public jaarverslag); team; decision-makers; how they actually
  work day-to-day.
- **Offerings & audiences** — performances vs. workshops vs. community projects; what exactly
  **"Mariage"** and **"Apartheid Free Zone"** are; who each offer serves and through which channels.
- **Current digital presence** — `leon.dance` platform/stack; full content inventory;
  what works / what's broken or empty; how EN/FR/NL is implemented; socials and external listings.
- **Technical context** — who maintains the site today; existing integrations; which backend
  services are actually needed (events/agenda, workshop signup, contact, gallery, anything for
  "Mariage").
- **Ecosystem** — comparable dance/arts collectives; how peers handle web presence and funding;
  transferable patterns.
- **Constraints & success** — budget, timeline, accessibility, available brand assets; what
  "good" looks like for Leon.

## Who to talk to

**Confirmed contacts (client side, per user 2026-05-18):**

- **Sam De Wit — coordinator.** Primary contact for the engagement.
- **Kristin Rogghe — communications.** Sam's colleague; he invited her to the client
  meeting. Note: a "Kristin Rogghe" is also listed among the ~14 associated artists on
  `/who-we-are-1` (see [Site Audit](20-site-audit.md)) — ⚠️ if the same person, the comms
  lead is part of the artistic core rather than a separate marketing function; worth
  confirming.

A client meeting is being arranged (Sam + Kristin). ⚠️ Date TBC.

Still likely relevant, not yet confirmed: artistic direction (Seppe Baeyens), the current
`leon.dance` owner/maintainer, key partner venues. ⚠️ inferred.

## Discovery deliverables

Created as the phases run (not pre-stubbed): `discovery/desk-research.md` (overview /
executive summary), `discovery/site-audit.md`, plus per-phase pages for audience, journeys,
competitors, best practices, ecosystem, and the synthesis. The index and log are updated as
each lands.

## Open questions / ask-the-client

> **The authoritative status index is the [Discovery Concerns register](01-concerns.md)**
> (deduplicated, IDs D-01–D-46). The list below is the original learning-agenda framing,
> kept for provenance; do not read status from here.

Running list. **Status updated after the [Client Kickoff](12-client-kickoff-2026-05-19.md)
(2026-05-19)** — most are now closed; see that page for detail.

1. Exact legal & funding structure / jaarverslag? — **Closed** (registries, pre-client) +
   **kickoff**: Leon is bidding for **Kunstendecreet structural funding 2028–32** (dossier
   1 Dec 2026, jury ≈ Jan–Jul 2027). Residual: governance/board sign-off, reserves.
2. Team & decision-makers; who owns/maintains `leon.dance`? — **Closed**: engagement leads =
   **Sam De Wit (coordinator) + Kristin Rogghe (comms)**; site built by "Jeroen"/partner,
   content/agenda maintained by **Kristin**.
3. What are **AFZ** and **Mariage**? — **Closed**: Mariage = first/flagship **creatie** in a
   repeatable type; AFZ = de-emphasise on the new site (placement TBD).
4. Site platform/CMS and EN/FR/NL handling? — **Closed**: Squarespace; mixed-language was a
   **resource shortcut**; new site = proper localisation (NL build → AI → client proof).
5. Backend services in scope? — **Closed/sharpened**: structured agenda, owned sign-up
   (retire MS Forms), **participant DB/CRM**, possible team backstage; **Notion-as-source**
   hypothesis to research.
6. Budget, timeline, accessibility, brand assets? — **Partly**: design+build **free**
   (Frederik); recurring ≈ current; timeline anchored to **beleidsplan Dec 2026 / jury
   2027**. **Still open:** accessibility requirements, brand kit.
7. What does success look like? — **Closed**: support the **Kunstendecreet jury**
   (legitimacy/impact) **and** convert **potential new participants** into the existing work.
8. Who is the **agenda** for? — **Closed**: a mix — impact (subsidisers) + participant
   practical info + internal/freelance reference.
9. Agenda hand-made / automate the backstage? — **Closed**: Excel → screenshot → paste (by
   Kristin); automation **wanted**.
10. Trilingual = values, shortcut, or both? — **Closed**: primarily a **resource shortcut**;
    new site does proper localisation, trilingual retained.

**Newly raised (still open):** antenne concentration vs. spread; Notion↔site feasibility;
GDPR/minors for the participant DB; passive social presence; which impact figures are safe
given per-funder dossier framing. Full status:
[Client Kickoff → Open questions](12-client-kickoff-2026-05-19.md#open-questions--status-after-this-meeting).

Questions 8–10 were surfaced by the pre-phase
[First-Impression Review](90-first-impression-review.md) (a cold single-reviewer walkthrough
of `leon.dance`); see that page's resolution map for which of its other points the
structured phases have already confirmed or answered.
