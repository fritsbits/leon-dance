---
title: Technical Context
tags: [discovery, technical, backend, integrations, cost, squarespace]
sources: [leon.dance, site-audit, squarespace-pricing, client-meeting-2026-05-19]
phase: discovery
updated: 2026-05-19
---

# Technical Context

Current stack, who maintains it, integrations, and what backend services are actually needed.
Builds on [Site Audit](20-site-audit.md). Factual where crawled; ⚠️ for inference and
recommendations (these feed the synthesis, not final scope).

## Current stack & integrations (observed)

- **CMS/host: Squarespace.** Confirmed via `robots.txt`. Implies: Squarespace-native pages,
  templating, image handling, Commerce module (the unused **Cart**), and Squarespace's
  newsletter/email capture (the "Blijf op de hoogte" form). Source: `leon.dance/robots.txt`,
  home.
- **Forms/registration: external Microsoft Forms** — Mariage participation uses two MS Forms
  links, off-brand, no data ownership, no participant overview. Source: `/mariage-doemee`.
- **Agenda: none (images).** Events are flat image files on `/agenda` — no calendar system,
  feed, or booking integration. Source: `/agenda`.
- **Media: Squarespace galleries**, 58 photos with photographer credits; **no video embeds**
  (no Vimeo/YouTube) despite a performance practice. Source: `/gallery`.
- **No CRM/booking/ticketing/donation integration** observed. Ticketing for toured work is
  effectively delegated to partner venues. Source: `/mariage`, `/agenda`.
- **Multilingual:** no i18n system; mixed-language inline + 3 hand-maintained mission pages.

## Who maintains it (resolved — client, 2026-05-19)

The Squarespace site was **built by "Jeroen" (or his partner)** for a previous comms
iteration; **content & the agenda are now maintained by Kristin Rogghe** (comms). Capacity is
**small and non-technical** — and the client raised the QC/maintenance load themselves, so the
editorial-capacity delivery risk is **confirmed real**, not just inferred. This directly
drives the build approach: structured **content-types Leon can edit** + **fixed pages**
Frederik writes, maximising Leon's autonomy
([Client Kickoff §6 & §8](12-client-kickoff-2026-05-19.md#6-backstage--internal-tooling)).

## What backend services are actually needed (⚠️ derived hypothesis)

Prioritised from the audit + [Offerings & Audiences](22-offerings-audiences.md). To validate with
the client — not committed scope:

1. **Structured events/agenda** *(highest value)* — data model: event (title, dates,
   venue+city, partner, type [atelier/workshop/Mariage/tour/school], languages, free/ticketed,
   external ticket URL, media). Drives an upcoming/past agenda, per-event pages, homepage strip,
   and SEO. Replaces image posters.
2. **Workshop / Mariage sign-up** — owned, branded registration replacing Microsoft Forms;
   per-edition forms, capacity, confirmation email, an exportable "who's coming" list.
3. **Structured work/production catalogue + archive** — production pages (credits, media,
   tour history); turns the Gallery into an identity asset like peers'.
4. **Proper multilingual (NL/FR/EN)** — locale routing + `hreflang`, per-language content,
   language switcher. Replaces mixed-language inline. ⚠️ Confirm whether all three are
   equally weighted or one is primary per audience.
5. **Contact & partner/programmer path** — real contact form (routed by topic: press,
   programming, schools, participate), pro/dossier section.
6. **Newsletter** — keep, but integrate cleanly (owned provider vs. Squarespace-native).
7. **Media** — video support (Vimeo/YouTube embeds or self-hosted) for documentation.
8. *(Possible, confirm)* donations/membership; partner-logo management; press clippings.

⚠️ This points toward a small custom or headless-CMS build (structured content + i18n +
forms) rather than another page-builder — but stack choice is a design-phase decision, gated
on editorial capacity and budget, not decided here.

> **Client-confirmed (2026-05-19) — what is now firm vs. newly opened:**
> - **(1)(2)(3)(4)(5) confirmed in scope:** structured agenda, **owned sign-up replacing MS
>   Forms**, structured work/creaties catalogue, proper NL/FR/EN localisation (NL build → AI
>   → client proof; trilingual retained), contact/programmer path.
> - **Promoted from "possible" to a firm want:** a **participant database / contact
>   management (CRM)** — Leon currently keeps **no participant records** and loses contact;
>   plus possibly a **freelance-team backstage** (shared session feedback).
> - **New hypothesis to research (Frederik):** **Notion as the source of truth coupled to
>   the site** (Debateville's model) — e.g. plan an event in Notion → it auto-feeds the site
>   agenda. Not yet a recommendation; no tooling to be prescribed before needs are mapped.
> - **Build/stack:** Frederik will build a **custom site replacing Squarespace** (free;
>   recurring cost ≈ current), with the editable-content-type / fixed-page split. Squarespace
>   is **not** a constraint. Detail:
>   [Client Kickoff §6 & §8](12-client-kickoff-2026-05-19.md#6-backstage--internal-tooling).

## Running cost (estimated)

What `leon.dance` plausibly costs Leon to run today, as a baseline for the migration
business case. Plan tier and billing cadence are **not** publicly observable — the estimate
is a ⚠️ range; the exact figure is an ask-the-client item.

### What is verified

- **Platform: Squarespace** — confirmed via `robots.txt` (see [Site Audit](20-site-audit.md)).
  Source: `leon.dance/robots.txt`.
- **The Cart is present but unused** (Squarespace Commerce module, no products). Source: home.
  ⇒ Leon does **not** need an ecommerce tier; the expensive plans are ruled out.
- Forms run on **free Microsoft Forms**, not a paid Squarespace add-on. Source: `/mariage-doemee`.
- Domain is **`leon.dance`** — a `.dance` premium TLD, not a generic `.com`.

### Squarespace pricing (2026)

Squarespace rolled out a new four-plan model in early 2026 (replacing
Personal / Business / Commerce). Prices below are per month at **annual** billing; monthly
billing adds ~30%. EUR billing for Belgium tracks the USD figures closely.

| Plan | ≈ /mo (annual) | ≈ /yr | Relevance to Leon |
|---|---|---|---|
| Basic (old "Personal") | ~€16 | ~€190 | Possible if the site uses no custom code |
| **Core (old "Business")** | **~€23** | **~€276** | **⚠️ Most likely** — needed for custom CSS / code injection, which the site's bespoke styling and multilingual hacks imply |
| Plus | ~€39 | ~€470 | Overkill (ecommerce) |
| Advanced | ~€99 | ~€1,190 | Overkill (ecommerce) |

Existing customers on legacy Personal/Business plans may be grandfathered at similar levels
(~€16 / ~€23 per month).

### ⚠️ Best estimate

- **Subscription: ~€190–€280 / year.** Core (~€276/yr) is the likelier end given the
  site's custom design and code injection; Basic (~€190/yr) only if the build is minimal.
  Monthly (not annual) billing would push this ~30% higher.
- **`.dance` domain: ~€40–€55 / year** — a premium TLD; renews well above the generic
  ~€20/yr a `.com` would cost. Easy to overlook in a like-for-like comparison.
- **All-in baseline: ≈ €230–€340 / year**, excluding any unidentified paid add-ons
  (newsletter provider unknown; forms are free MS Forms).

This is a *low* recurring number — the migration case for Leon is **not** cost saving on
hosting; it rests on the structural/editorial gaps above (image-poster agenda, no i18n system,
no data ownership on forms). Hosting a replacement (static/headless or a small app) is
typically a similar order of magnitude per year, so the decision is driven by capability and
editorial fit, not the subscription line.

Sources: [Squarespace Pricing (official)](https://www.squarespace.com/pricing),
[Tooltester — Squarespace Pricing 2026](https://www.tooltester.com/en/reviews/squarespace-review/pricing/),
[Website Builder Expert — Squarespace Pricing 2026](https://www.websitebuilderexpert.com/website-builders/squarespace-pricing/).

## Migration considerations

- Squarespace export is limited (pages/blog/products export cleanly; custom sections and the
  image-poster agenda do **not** carry structured data). Expect manual content re-modelling.
- Gallery photos are reusable assets (with credits); the agenda images are **not** reusable as
  data — content for past/upcoming events must be re-entered structured.
- VAT/registration, addresses, partner list, mission/values/method text are clean, portable
  content already written (in 3 languages for mission/vision).
- **Current running cost is low (≈ €230–€340/yr all-in, ⚠️ estimated)** — see
  [Running cost (estimated)](#running-cost-estimated). The migration case is *not* hosting
  savings; a replacement costs a similar order of magnitude. Decision is capability-driven.

## Open questions (technical)

> **Status is authoritative in the [Discovery Concerns register](01-concerns.md)** —
> IDs **D-31–D-43** (also D-34/D-36 backend scope). This section is local detail.

Status after the [Client Kickoff (2026-05-19)](12-client-kickoff-2026-05-19.md):

1. Who builds/maintains; editorial capacity? — **Closed** (Jeroen-built / Kristin-maintained;
   small, non-technical; risk confirmed — see "Who maintains it" above).
2. Budget / timeline / hard launch date? — **Mostly**: design+build **free** (Frederik);
   recurring ≈ current; no fixed launch date but de-facto anchored to **beleidsplan Dec 2026 /
   Kunstendecreet jury Jan–Jul 2027**; decisions by ~Sept/Oct 2026.
3. Stay on Squarespace or new stack? — **Closed**: new stack acceptable; **Frederik builds
   custom, replacing Squarespace**.
4. Ticketing via venues or own? — **Still open** (not discussed; the unused Cart also still
   unexplained).
5. Data/privacy for participant sign-up (GDPR; minors)? — **Sharpened, still open**: a
   participant DB is now a firm want, so GDPR + consent + minors-in-schools must be designed
   in — but was **not** discussed in data-protection terms.
6. Accessibility requirements? — **Still open** (not discussed; relevant given disability-
   inclusive audiences).
7. Assets to keep (newsletter, analytics, domain/DNS, brand kit)? — **Partly**: newsletter
   exists (3–4×/yr, Squarespace-side), to be reconsidered; **brand kit & analytics still
   open**.
8. Which Squarespace plan, billed annually/monthly? — **Largely moot** (migrating off
   Squarespace); cost order-of-magnitude **confirmed** (≈ €20–25/mo + hosting + domain).
9. Where is the `.dance` domain registered + renewal price? — **Still open** (mentioned as a
   cost line, registrar not confirmed; matters for migration/DNS).
10. Any paid third-party add-ons? — **Still open** (forms = free MS Forms; newsletter
    provider/analytics/fonts unconfirmed).
