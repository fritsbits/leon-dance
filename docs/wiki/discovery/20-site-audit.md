---
title: Site Audit — leon.dance
tags: [discovery, site-audit, phase-1]
sources: [leon.dance, client-meeting-2026-05-19]
phase: discovery
updated: 2026-05-19
---

# Phase 1 — Site Audit (leon.dance)

Full crawl of the live site, 2026-05-18. Observations are plain; interpretations are marked ⚠️.
All facts sourced to the page crawled (URL given per row/section).

## Platform & technical

- **Platform: Squarespace.** Confirmed via `robots.txt` ("Squarespace Robots.txt", Squarespace
  disallow patterns, `/api/`, `/config`, `/account`). Source: `leon.dance/robots.txt`.
  *(Note: kidicalmass was Wix; Leon is Squarespace — different migration constraints.)*
- `sitemap.xml` lists **12 URLs**. Source: `leon.dance/sitemap.xml`.
- Navigation (every page): Agenda · Who We Are · What We Do · Apartheid Free Zone · Gallery ·
  Mariage · Contact · **Cart (0)**. Source: all pages.
- **Multilingual model: "mixed-language", not localised.** The site states "This is a
  mixed-language website. Leon spreekt Engels, Frans en Nederlands." EN/FR/NL are mixed *inline
  on the same page* rather than switchable locales. Exception: mission/vision exists as three
  separate manual pages (`/missie-visie-nl`, `/missie-visie-fr`, `/missie-visie-eng`). There is
  **no language switcher / locale routing**. Source: home, who-we-are-1, sitemap.
- ⚠️ The mixed-language model is a significant UX and SEO weakness: no per-language URLs (except
  the 3 manual mission pages), no `hreflang`, content readable only if you understand all three
  languages. Interpretation — to validate.

## Page-by-page inventory

| # | URL | Title / purpose | Status | Notes |
|---|-----|-----------------|--------|-------|
| 1 | `/home` (`/`) | Homepage | Active | Hero: *"Leon shows dance at its most human, most vulnérable and most essentieel."* Secondary: *"Leon acts beyond existing boundaries and strives for equality between all partners."* Newsletter signup. ~35-logo supporter footer. |
| 2 | `/who-we-are-1` | About | Active | Org description, EN/FR/NL mission+vision, ~14 named associated artists, namesake **Leon Gyselinck (1923–2024)**. ⚠️ No funding/legal/partner detail on this page itself. |
| 3 | `/missie-visie-nl` | Mission/vision (NL) | Active | Manual language duplicate of mission/vision. |
| 4 | `/missie-visie-fr` | Mission/vision (FR) | Active | Manual language duplicate. |
| 5 | `/missie-visie-eng` | Mission/vision (EN) | Active | Fullest values+method content (see below). |
| 6 | `/what-we-do` | Activities | Active | Six programmes (see "Offer"). |
| 7 | `/agenda` | Agenda | **Active but degraded** | "Maart – Mei 2026", **7 image files (6 unique, 1 duplicated) holding 65 dated entries** — no text, no dates as data, no booking links, not crawlable/accessible. Full transcription + analysis: [Agenda — Extracted Text](25-agenda.md). ⚠️ Major redesign driver. |
| 8 | `/gallery` | Gallery | Active, well-populated | **58 photos**, grouped by project, photographer credits; **no video embeds** despite Leon being a performance org. |
| 9 | `/mariage` | Mariage (production) | Active | Participatory performance; "Free, without reservation"; past+upcoming editions listed. |
| 10 | `/mariage-doemee` | Mariage — join in | Active | Registration via **two external Microsoft Forms** links; bilingual NL/FR. |
| 11 | `/apartheid-free-zone` | Political/values statement | Active | Solidarity with Palestine & Lebanon; anti-apartheid partnership-review commitment; links `bdsmovement.net`. |
| 12 | `/contact` | Contact | Active | Email/phone/addresses only — **no contact form**, no socials, no names. |

No broken (404) pages found in the sitemap set. No blog/news, no team/people page, no
press, no membership/donation page, no proper language pages beyond the 3 manual mission ones.

## Organisation (from site)

- **Leon vzw**, VAT **BE 0769.579.192**. Office: *Lion City, Ossegemstraat 53, 1080
  Sint-Jans-Molenbeek*. Registered/mailing: *Leon vzw, Weilandstraat 46, 1082 Bruxelles*.
  Contact: **hello@leon.dance**, **+32 456 91 26 41**. Source: `/contact`.
- "Supported by the Flemish government and the Flemish Community Commission (VGC)." Source:
  `/contact`. (Funding stream/amount still not stated — see open questions.)
- Named after dancer **Leon Gyselinck (1923–2024)**. ~14 associated artists incl. Seppe
  Baeyens, Lena Michel van Drie, Hussein Rassim Al Baldawi, Fanny Vandesande, Karen Willems,
  Stef Heeren, Saif Al-Qaissy, Isabelle Azaïs, Martha Balthazar, Adnane Lamarti, Kristin
  Rogghe, Aude Uytterhoeven, Brend Van Dijck, Evy Van Hoydonck. Source: `/who-we-are-1`.
- ~35 supporters/partners in footer (Zonnelied, D'Broej Centrum-West, BUSO Cardijnschool, KVS,
  KANAL, Ultima Vez, KU Leuven, VUB, BOZAR, P.A.R.T.S., De Munt, Pianofabriek, Brussels2030,
  Demos, Lasso, Evens Foundation, Metx, FELD Theater Berlin, …). Source: home footer.

## Mission / vision / values / method (content asset)

`/missie-visie-eng` carries the strongest content: **Mission** ("Through dance and music, Leon
invites people of all ages, genders, bodies, and backgrounds…"), **Vision** (meeting space
against urban loneliness/polarisation), six **Values** (Horizontal, Free of Judgment,
Welcoming, Vulnerable, Experimental, Playful), and a **Method** grounded in academic research
by Profs **Maddy Janssens & Chris Steyaert** — four practices: *Inviter, Mixing, Reversing,
Affirming*. ⚠️ This is a distinctive, well-articulated content asset that is currently buried in
a manual EN-only page and not surfaced in the site's information architecture.

## The offer (from /what-we-do)

1. **Atelier Leon** — free weekly participatory workshops, no experience/registration: Sat
   10:00–12:00 Maison des Cultures, Molenbeek; Wed 16:00–18:00 Pianofabriek, St-Gilles.
2. **Leon à l'école** — dance workshops embedded in school curricula (socio-emotional skills,
   citizenship, language).
3. **Leons White Page** — open initiative for "new needs and desires"; social cohesion.
4. **Apartheid Free Zones** — inclusive-space programme *and* a political values commitment
   (see page 11).
5. **Leon rond de tafel** — monthly gatherings at Lion City; coordination + peer learning.
6. **Leon on Tour** — partnership interventions incl. the **Mariage** production.

## Mariage (flagship participatory production)

"A unique celebration of connection through dance and new traditions" — open public-space
workshops culminating in a performance; anyone can shape choreography/scenography/costumes.
**Free, no reservation.** Editions across 2024–2026 (BRONKS/Volt Festival, Cultureghem,
MolenFest, GC De Platoo Koekelberg, …). Participation sign-up via **external Microsoft Forms**
(one per event). Source: `/mariage`, `/mariage-doemee`.

## Apartheid Free Zone (political stance — flag for client)

A prominent top-level nav item: explicit solidarity with Palestine and Lebanon, a commitment to
"consciously avoid any collaborations with states, partners, or residencies complicit in
apartheid regimes," ongoing partnership review, link to `bdsmovement.net`. Source:
`/apartheid-free-zone`. ⚠️ Observation only — but its prominence and political content is a
deliberate identity choice with implications for partnerships/funding sensitivities; a neutral
discussion point for the client, not a recommendation.

## Cross-cutting problems (⚠️ interpretation, evidence cited)

1. **Agenda is image-only** (`/agenda`): no machine-readable dates, no booking links, not
   accessible, not SEO-able, can't be filtered or auto-sorted. The single biggest functional gap.
2. **No real multilingual system**: mixed-language inline + 3 hand-maintained mission pages; no
   switcher, no hreflang. High maintenance, poor for each monolingual audience and for SEO.
3. **Registration is off-platform** (Microsoft Forms for Mariage): disjointed, unbranded, no
   data ownership, no overview of who's coming.
4. **No structured content model**: events, programmes, gallery projects are hand-laid
   Squarespace sections, not data. Every update is manual; nothing reusable across pages.
5. **Strong content, weak IA**: the mission/values/method (a genuine differentiator) is buried;
   no team/people page despite ~14 named artists; no news/press despite an active org.
6. **Gallery has no video** though Leon is a performance organisation with documented work.
7. **No contact form / no clear conversion paths**: contact is passive (email/phone); the
   "Cart" implies a commerce capability that is unused.

## Social & external presence

- The site itself links **no social media** anywhere (no header/footer/contact icons). Source:
  all pages, esp. `/contact`.
- **Confirmed (client, 2026-05-19): Leon has *no* social media, by deliberate choice.** The
  website is the **only** owned online channel; other reach is flyers + word of mouth +
  physical presence (flyers carry the site URL + a QR code). Reasons: no capacity **and** a
  principled ethical stance (social-media mental-health concerns, esp. youth; "we creëren
  ontmoeting" / real-life connection). Openness only to a *passive* tag/point-back presence,
  unresolved. This closes the prior ⚠️ "inconclusive" note below and **sharpens** the site's
  discoverability-hub job ([What Is the Website Actually For?](11-website-purpose.md)). Source:
  [Client Kickoff §4](12-client-kickoff-2026-05-19.md#4-communications-model--no-social-media-principled).
- ⚠️ *(superseded — kept for provenance)* Leon's owned social handles could not be confirmed
  by search (many unrelated "Leon dance" accounts; an `atelier-leon` Facebook *event* and
  Seppe Baeyens' personal Facebook exist, but no clearly-official Leon vzw account was
  identified). Source: web search 2026-05-18 (inconclusive) — now answered by the client above.
- Newsletter capture exists on-site ("Blijf op de hoogte" / "Inscrivez-vous…"), ⚠️ presumed
  Squarespace-native. Source: home.
- External visibility is **partner-driven**: Leon is described/listed on KVS, KANAL, STUK,
  bredeschoolmolenbeek.be, openstreets.brussels, parkpoetik.be, BRUZZ, etc. — i.e. discovery
  happens via partners, not Leon's own channels. See [Ecosystem](23-ecosystem.md) and
  [Technical Context](24-technical-context.md).

## Unknowns / ask the client

> **Status is authoritative in the [Discovery Concerns register](01-concerns.md)** —
> IDs **D-08, D-16, D-20, D-21, D-31**. This section is local detail; read status there.

Status after the [Client Kickoff (2026-05-19)](12-client-kickoff-2026-05-19.md):

- Subsidy stream/amounts — **closed** (project-only confirmed; **Kunstendecreet 2028–32 bid
  now in scope**, dossier 1 Dec 2026).
- Who maintains the Squarespace site / appetite to leave it — **closed**: built by
  "Jeroen"/partner, content by **Kristin**; **open to leaving** (Frederik builds custom).
- Is the "Cart" ticketing/merch/donations or vestigial? — **still open** (not discussed).
- Three languages a hard requirement / primary language per audience? — **closed**:
  trilingual retained but **properly localised** (NL build → AI → client proof); mixed-
  language was a resource shortcut.
- Editorial capacity after redesign — **closed**: small, non-technical; Kristin maintains;
  the editorial-capacity risk is **client-confirmed real** — scope discipline is a shared
  concern, hence the editable-content-type approach.
