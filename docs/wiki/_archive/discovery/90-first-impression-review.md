---
title: First-Impression Review — leon.dance
tags: [discovery, desk-research, ux, site-audit]
sources: [quick-first-impression-review-2026-05-18, client-meeting-2026-05-19]
phase: discovery
updated: 2026-05-19
---

# First-Impression Review — leon.dance

An early, **informal** heuristic walkthrough of `leon.dance` by a single reviewer
(Frederik), captured **before** the structured desk-research phases ran. It is
**subjective first-party input, not verified fact**. Source:
`docs/raw/research/quick-first-impression-review-2026-05-18.md`.

> **Status:** largely **superseded** by the structured phases. Its lasting value is
> twofold: (a) it independently surfaced the **audience-framing gap** that the audit
> later confirmed as a core problem — a useful corroboration from a cold first read; and
> (b) it is the documented *origin* of several discovery threads. Every point below is
> mapped to where it was resolved in the table at the end. For current truth, prefer
> [Site Audit](20-site-audit.md), [Offerings & Audiences](22-offerings-audiences.md),
> [Technical Context](24-technical-context.md).

Per the research principles, interpretations are marked **⚠️**; only what the reviewer
directly saw is left unmarked.

## What the reviewer saw and thought

### Strengths
- Look and feel works well; typography good; bold contrasting colours + large type
  **feel modern**. ⚠️ Impression of one reviewer — the audit does not contradict it but
  also does not measure it; treat as a design hypothesis, not a finding.

### By area
- **Home** — couldn't tell *what is expected of me / what I can do*; "What is Leon / what
  does Leon do" but **not who it's for or what it offers a visitor**. ⚠️ Org-centric, weak
  CTA. → **Confirmed** as the central IA/audience problem (see table).
- **Agenda / calendar** — looks like **pasted-in images / screenshots**; ⚠️ inferred
  **Squarespace**; open: *who is the agenda for* (members vs. team?). → Agenda-as-images
  and Squarespace both **confirmed**; audience of the agenda **still open**.
- **Backstage glimpse** — the agenda hints at an internal calendar/tracking system; ⚠️
  is automation wanted, what else is in it? → Folded into the **backend-services**
  hypothesis (Technical Context).
- **Who we are** — "inside-out", director's / funding-dossier voice; what do they do, why
  go there, why funded? ⚠️ Audience-framing gap again. → **Confirmed** (weak IA, strong
  buried content).
- **Atelier Leon** — "You don't need to be able to dance… just need to come": addressee
  ambiguous (participant vs. Leon?). → Clarified: it is participant-facing messaging for
  the free weekly workshop (Offerings & Audiences).
- **What we do** — hard to grasp *what Leon does*; "third point" / "Leon on tour" /
  "Mariage?"; mission line + partner list but unclear meaning. → **Answered**: six offers
  incl. Leon on Tour & Mariage clarified (Offerings & Audiences).
- **Apartheid Free Zone** — read as another inward mission/vision block. → Clarified: a
  deliberate political identity statement; neutral client discussion point.
- **Gallery** — "not very practical"; many pictures (Mariage again) with no explanation
  of what it is / why it's here. ⚠️ Disconnected from explanatory pages. → Corroborated:
  58 photos by project, **no video**, weak IA.
- **Mariage** — specific project, trilingual again, own calendar, **Vimeo trailer** you
  must click out to; ⚠️ idea: put that video on the home page. → Aligns with the
  recommendation to add video support (no video embeds anywhere today).
- **Contact** — "We would love to meet you. Join us" ⚠️ → site goal seems to be *attract
  attention*; **no social links seen**, must check if accounts exist. → **Confirmed**:
  no social links anywhere; owned social presence inconclusive.

### Cross-cutting (reviewer's strongest signal)
- **Audience-framing gap** ⚠️ — Home, Who We Are, Apartheid Free Zone all speak from the
  org's/funder's view, not the visitor's. This cold-read hypothesis is **independently
  confirmed** by the audit's "strong content, weak IA" finding and the unresolved
  "which audience is the site even for" question.
- **Trilingual EN/FR/NL** — intentional, but is it also a **maintenance shortcut**?
  → Confirmed as **mixed-language inline (not localised)** + 3 hand-maintained mission
  pages: a real maintenance/SEO weakness. The *why* remains a client question.

## Resolution map

| First-impression point | Status now | Resolved in |
|------------------------|------------|-------------|
| Site is Squarespace | **Confirmed** (robots.txt) | [Site Audit](20-site-audit.md), [Technical Context](24-technical-context.md) |
| Agenda is pasted images, not a real calendar | **Confirmed** — single biggest functional gap | [Site Audit](20-site-audit.md) §cross-cutting, [Technical Context](24-technical-context.md) |
| Who is the agenda for? | **Closed (client 2026-05-19)** — a mix: impact (subsidisers) + participant practical info + internal/freelance reference | [Client Kickoff §5](12-client-kickoff-2026-05-19.md#5-the-agenda--confirmed-mechanics-and-purpose) |
| Backstage/calendar system; automate it? | Reframed as backend-services scope | [Technical Context](24-technical-context.md) |
| Home/Who-we-are are org-centric, weak CTA | **Confirmed** as core IA/audience problem | [Site Audit](20-site-audit.md) §cross-cutting #5, [Offerings & Audiences](22-offerings-audiences.md) §implications |
| What does Leon actually do? (Mariage, Leon on tour, "3rd point") | **Answered** — 6 offers clarified | [Offerings & Audiences](22-offerings-audiences.md) |
| Apartheid Free Zone = inward mission block | Clarified — political identity statement | [Offerings & Audiences](22-offerings-audiences.md), [Site Audit](20-site-audit.md) |
| Gallery confusing, no explanation | Corroborated — 58 photos, **no video**, weak IA | [Site Audit](20-site-audit.md) |
| Mariage video should be more prominent | Aligns with "add video support" recommendation | [Technical Context](24-technical-context.md) |
| Trilingual = values or maintenance shortcut? | **Closed (client 2026-05-19)** — primarily a **resource shortcut** ("Jeroen": 3 languages ≈ 3 sites), rationalised as values; excludes people. New site = proper localisation, trilingual retained | [Client Kickoff §7](12-client-kickoff-2026-05-19.md#7-multilingual--practical-shortcut-rationalised-as-values) |
| Site goal = attract attention; no social links | **Confirmed** no social links; owned socials inconclusive | [Site Audit](20-site-audit.md) §social |

## Net-new questions this pass added to the client list — all closed (2026-05-19)
- Who is the **agenda** for? → mix: impact (subsidisers) + participant practical info +
  internal/freelance reference.
- Hand-maintained / automate it? → **yes**, Excel → screenshot → paste (Kristin); automating
  it (and the wider backstage) is **wanted**.
- Trilingual = values or shortcut? → primarily a **resource shortcut**; new site does proper
  localisation, trilingual retained.

All three were resolved in the [Client Kickoff](12-client-kickoff-2026-05-19.md) (§5, §7);
status also reflected in [Discovery Plan](00-discovery-plan.md) → open questions.
