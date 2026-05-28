---
title: P-02 Dansateliers & performances — Skeleton brief
tags: [design, skeleton, brief, dansateliers, page-level, index]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; 42-briefs/01-home; 42-briefs/05-mariage; existing dansateliers/index.blade.php; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-02
slug: /dansateliers-performances
type: Utility 3–5
updated: 2026-05-28
---

# P-02 Dansateliers & performances — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content
> 🟠 first draft ·
> Code 🟠 first draft (strawman rendered with SP-04 + SP-05 × 4) · Approved —
> **Confidence:** **3 / 5** (was 3; held — index-style page; structural calls clean,
> remaining gaps are cover-asset + 1-line copy verification with Sam/Kristin).
> **Section budget:** **3 sections** (Utility tier 3–5 ceiling — index pages stay lean;
> no top CTA — child cards ARE the action).
> **Authored autonomously per "best-guess" mode; all open calls documented inline as
> BG-N decisions + flagged for review.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Header treatment** | SP-04 variant C (eyebrow + h1 + thin lede, no opening photo). Index pages flow directly into their children; an editorial photo here would compete with the 4 child covers in §2 (when assets land). | Yes — could lift to variant B if Surface decides one signature photo carries the category |
| BG-2 | **No top CTA** | None. The 4 child cards in §2 *are* the page's action set — adding a single CTA above them would force a hierarchy that misrepresents the offer (all 4 are peers, no "best" entry). Per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie) — "leid met de mens of het beeld", not with sales-blok. | Yes — could add `Bekijk de agenda` ghost-CTA in header if reads too static |
| BG-3 | **Card pattern** | SP-05 Project card × 4 (same as P-01 §3) — but with a **slightly richer 2-line desc** (~12–18 woorden vs. home's ~10), because this page is the canonical surface for each child's elevator pitch. Home §3 carries the 1-liner; here we expand by one beat. | Yes — could keep 1-line desc identical to home for total consistency |
| BG-4 | **Card order locked** | Same as P-01 §3, same as [30-structure children table](../30-structure.md#dansateliers--performances--children): Atelier Leon → Leon op school → Mariage → Mobiele dansstudio. Reading: public-most-open (drop-in) → public-but-begeleid → flagship project → bookable studio. | No — order is IA; changing it means changing the structure decision |
| BG-5 | **Closing §3** | Single short paragraph + Agenda text-link, no CTA-band. "Alles op één plek" closer: *"Wil je weten wat er deze week loopt? → Volledige agenda"* — gives a utility exit without inviting a sales flow. | Yes — could drop §3 entirely (page concludes on §2 cards), but the agenda hook earns its keep for P1 newcomers |
| BG-6 | **Card covers (assets)** | **Render text-only (variant B) in v0.1**, photos arrive later via Surface plane per [Dn-20](../01-concerns.md). SP-05 collapses cover gracefully — mixed grids (some with photo, some without) accepted once first asset lands. | No — asset gap, not structural decision |
| BG-7 | **NO standalone "Participatieve performances" category page** | The category is a header above *Mariage* in the IA tree but **not** its own page (per [30-structure](../30-structure.md) — "Participatieve performances | category (no own page-entity)"). On this index we surface *Mariage* directly as a peer card alongside the three other children. Future *Kosmos 2027* slots in as a 5th card when ready. | No — Structure decision (IA principle, not a per-page call) |

If any of BG-1 … BG-7 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Index = doorway, not destination.** The page exists to route visitors to one of
   four canonical children. Discipline: no content that duplicates a child page; no
   facts that compete with the child for canonical-home status.
2. **4 peer children, no implied ranking.** All four are public-facing, all four are
   reachable from this surface in one scan. The order is IA (public-openness → flagship
   → bookable), not preference.
3. **Belonging dial** per [TOV §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie).
   The lede invites; the cards describe in plain language; no jury-band or proof-spine
   here (Footer SP-09 carries the org-level proof already on every page).
4. **One-paragraph elevator per card.** The Skeleton premise is that this is the
   *page where each child gets its 2-line introduction* — home §3 is 1-line ad-copy
   tighter, child pages carry the full story. This page sits in between.
5. **Anti-bloat: 3 sections max.** SP-04 header · 4 cards · single closing paragraph
   with Agenda link. No carousel, no quotes, no partner wall (footer handles it).

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  WAT LEON MAAKT                                                    │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant C)
│  Dansateliers & performances                                       │
│                                                                    │
│  Vier ingangen op één plek — een wekelijks open atelier,           │
│  begeleide trajecten op school en in zorg, een participatieve      │
│  voorstelling in zes edities, en een mobiele dansstudio die je     │
│  kan uitnodigen.                                                   │
├────────────────────────────────────────────────────────────────────┤
│  ┌──Atelier Leon────────────────┐  ┌──Leon op school──────────────┐│ §2 WORK CARDS
│  │ Open dansatelier — wekelijks │  │ Begeleid danstraject van zes ││ (SP-05 × 4)
│  │ in de Pianofabriek en de     │  │ maanden, in scholen, welzijn ││  · 2 cols
│  │ Maison des Cultures.         │  │ en zorg.                     ││    desktop
│  │ Gratis, geen inschrijving.   │  │                              ││  · 1 col mobile
│  └──────────────────────────────┘  └──────────────────────────────┘│
│  ┌──Mariage─────────────────────┐  ┌──Mobiele dansstudio──────────┐│
│  │ Een participatieve           │  │ Een verplaatsbare dansruimte ││
│  │ voorstelling in zes edities  │  │ die je kan uitnodigen op je  ││
│  │ — telkens met een lokale     │  │ eigen plek — school, plein,  ││
│  │ groep en een eigen voor-     │  │ buurtfeest.                  ││
│  │ stelling als sluitstuk.      │  │                              ││
│  └──────────────────────────────┘  └──────────────────────────────┘│
├────────────────────────────────────────────────────────────────────┤
│  Wil je weten wat er deze week loopt?                              │ §3 AGENDA HOOK
│                                                                    │   (plain prose +
│  De agenda verzamelt alle ateliers, repetities, try-outs en        │    text-link)
│  voorstellingen in één lijst.                                      │
│                                                                    │
│  → Volledige agenda                                                │
├────────────────────────────────────────────────────────────────────┤
│  [SP-09 funder wall — default variant via SP-02 footer]            │ SP-02 footer
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ WAT LEON MAAKT              │ §1 SUBPAGE TOP
│                             │
│ Dansateliers &              │
│ performances                │
│                             │
│ [lede wraps to 5 lines]     │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │ §2 WORK CARDS
│ │ Atelier Leon            │ │ (1-col stack,
│ │ Open dansatelier — …    │ │  4 cards)
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Leon op school          │ │
│ │ Begeleid danstraject…   │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Mariage                 │ │
│ │ Een participatieve…     │ │
│ └─────────────────────────┘ │
│ ┌─────────────────────────┐ │
│ │ Mobiele dansstudio      │ │
│ │ Een verplaatsbare…      │ │
│ └─────────────────────────┘ │
├─────────────────────────────┤
│ Wil je weten wat er deze    │ §3 AGENDA HOOK
│ week loopt?                 │
│                             │
│ De agenda verzamelt alle    │
│ ateliers, repetities, …     │
│                             │
│ → Volledige agenda          │
├─────────────────────────────┤
│ [SP-09 default funder wall] │ footer wall
│                             │ (NOT suppressed
│ © Leon vzw · Brussel        │  on non-home)
│ Contact · Over Leon · …     │
└─────────────────────────────┘
```

**Mobile-first observations baked into desktop:**
- 4 cards stack 1-col on mobile, 2×2 on `≥ md` (matches P-01 §3 grid behaviour).
- Lede max-width = `--max-content`; wraps naturally on narrow viewports.
- No layout switch needed — single flex/grid query.
- No content disappears or appears between breakpoints.

## Section specs

### §1 — Subpage top (SP-04 variant C)

- **User question:** *"Wat valt onder Dansateliers & performances — en is dit voor mij?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant C (index-only: eyebrow + h1 + 1-line intro).
- **Eyebrow:** `WAT LEON MAAKT` (`.meta uppercase tracking-wide`). Not a parent-link
  (this *is* the parent in IA — top of its branch). Static text per BG-1.
- **h1:** `Dansateliers & performances` — verbatim nav label per [30-structure](../30-structure.md).
- **Lede:** 1 long sentence naming all 4 children in their elevator-words. Sets up §2.
- **BG-2:** **No CTA.** Cards in §2 are the action set.

### §2 — Vier ingangen (SP-05 × 4)

- **User question:** *"Welke ingang past bij wat ik zoek?"*
- **Pattern:** [SP-05 Project card](../41-patterns.md#sp-05--project-card) × 4 (variant B
  text-only in v0.1; variant A with photo when covers land per BG-6).
- **Cards (order locked per BG-4):**
  1. **Atelier Leon** — Open dansatelier · wekelijks · gratis · geen inschrijving (RecurringPractice)
  2. **Leon op school** — Begeleid danstraject · ~6 maanden · scholen / welzijn / zorg (RecurringPractice)
  3. **Mariage** — Participatieve voorstelling · 6 edities · core+local cast → voorstelling (Project)
  4. **Mobiele dansstudio** — Verplaatsbare studio · op locatie · bookable (Page)
- **Grid:** 2×2 desktop · 1-col mobile.
- **Card CTA:** whole card = link (per SP-05 spec — no separate "lees meer").
- **Card desc length:** ~12–18 NL woorden per card (one sentence + one short fragment).
  Richer than home §3's ~10-word ad-copy, lighter than the child page's hero lede.
- **Omission:** *Kosmos 2027* not surfaced until ready ([30-structure](../30-structure.md)).
- **No "Participatieve performances" category page** (BG-7) — *Mariage* surfaces directly.

### §3 — Agenda hook

- **User question:** *"Waar zie ik wanneer ik kan komen?"*
- **Pattern:** plain `.section` + `.container-text` (prose), no SP — single utility
  exit, not a CTA band.
- **Composition:** h2 (vragende kop) + 1 zin uitleg + `btn-text` link naar `/agenda`.
- **Why not SP-07 preview here:** the home already carries top-3 upcoming dates (P-01 §4).
  Repeating that strip here would (a) duplicate canonical home and (b) misshape this
  page as a date-list when it's an IA index. A text-link is the right weight.
- **Closer logic:** P1 newcomers who arrived via Dansateliers & performances landing
  often want "OK, when's the next one?" — the agenda link answers without forcing them
  back to home. P3/P4 commissioners head to Samenwerken (via top nav, already visible).

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long h1 — `Dansateliers & performances` ≈ 28 chars; tested in SP-01 nav already, holds via clamp + line-height-1.1) |
| §2 Cards | Default (4 cards text-only) · Overflow (long title — none of the 4 is >20 chars) · **Cover photo present** (when assets land per BG-6) — mixed grids accepted · **Hover** (`--color-hover` whole-card tint per SP-05) · **Open-call chip on Mariage card** (SP-16 chip sibling — `INSCHRIJVING OPEN` in `.meta` style; appears when `Editie::openInschrijving()->exists()`; absent otherwise — 2026-05-28) |
| §3 Agenda hook | Default only |
| Page-level | Reduced-motion (global) · Mobile reflow (above) |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged · NOT suppressed on this page; default SP-09 full wall renders) |
| SP-04 Subpage top (variant C) | 🟠 | 🟠 (variant C named in spec; first use here) |
| SP-05 Project card | 🟠 | 🟠 (unchanged · second site-wide use after P-01 §3) |

No new patterns needed; no SP graduates from this brief.

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| 2-line elevator per child (Atelier Leon · Leon op school · Mariage · Mobiele dansstudio) | §2 this page (cards) | Home P-01 §3 carries the 1-line tighter version; child pages carry the full hero lede |
| Agenda dates | `/agenda` (P-12) | Home P-01 §4 carries top-3 preview; no agenda content on this page |
| Category-level partner / funder list | Footer SP-09 (site-wide) | Per-project subsets inline on Mariage (P-05 §6 variant C) |
| "Dansateliers & performances" category label | Nav (SP-01) + this page h1 | Eyebrow on child pages (SP-04 default eyebrow text) |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] Zero CTAs in hero (BG-2) + child cards are the action set + §3 has 1 text-link
- [x] State inventory explicit
- [x] Section budget declared and respected (3 of 3–5)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions)
- [x] Patterns referenced by SP-id (4 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Awaiting user review for 🟡 reviewed.

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Per-card 2-line desc — verify wording with Sam/Kristin (vooral *"begeleid danstraject van zes maanden"* — varieert cadens per partner?) | `[content]` | Sam / Kristin | Content stage → final |
| 2 | Cover photo per child × 4 | `[asset]` | Surface plane | §2 visual final |
| 3 | Lede — verify the 4-child summary holds and reads warm (not catalog-list) | `[content]` | Kristin | Content stage → final |

## Confidence rationale

- **Was 3 / 5** ([40-skeleton page registry](../40-skeleton.md#page-registry--single-source-of-status-truth)).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); cards reuse SP-05 (proven on
  home); 1-line copy strawman is ready. Remaining gaps are content-verify + assets.
- **→ 4 / 5** when gap #1 + #3 close (Kristin confirms the 4 elevator-lines).
- **→ 5 / 5** when all 3 gaps close + per-card covers land.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure](../30-structure.md) — Dansateliers & performances children table
- Tone: [identity/10-tone-of-voice §Dansateliers](../../identity/10-tone-of-voice.md#dansateliers--performances--overzicht--per-project--editie)
- Vocabulary: [glossary](../../glossary.md)
- Sibling briefs: [01-home](01-home.md) (cards pattern parent) · [05-mariage](05-mariage.md) (child P-05) · pending: P-03 Atelier Leon, P-04 Leon op school, P-07 Mobiele dansstudio

- Code stub: [`resources/views/dansateliers/index.blade.php`](../../../../resources/views/dansateliers/index.blade.php)
