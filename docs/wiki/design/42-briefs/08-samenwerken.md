---
title: P-08 Samenwerken (index) — Skeleton brief
tags: [design, skeleton, brief, samenwerken, page-level, index]
sources: [40-skeleton; 41-patterns; 30-structure; identity/10-tone-of-voice §Samenwerken; glossary; existing samenwerken/index.blade.php; 42-briefs/01-home (§5 sibling); 42-briefs/05-mariage (§6 sibling); best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-08
slug: /samenwerken
type: Utility 3–5
updated: 2026-05-28
---

# P-08 Samenwerken (index) — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft (sibling [08-samenwerken-content](08-samenwerken-content.md)) · Code 🟠
> first draft (rewrite shipped 2026-05-28) · Approved —
> **Confidence:** **3 / 5** (was 3; structural simple, content gaps are P-09/P-10/P-11
> downstream not this index).
> **Section budget:** **3 sections** (Utility tier 3–5 ceiling — staying minimal; the
> page is a signpost, not a destination).
> **Authored autonomously per task instruction "Best-guess autonomous; document as BG-N;
> no user questions"; all open calls documented inline as best-guess decisions.**

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Page shape** | SP-04 variant C (index-shape) header + 1 utility section with 3 link rows. **No card-grid** — sub-pages are *actions*, not *projects*. Text-link rows keep it quieter than P-01 §5's sibling, and lets the institutional dial land per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen). | Yes — flip to SP-05 card-grid if user-testing shows visitors skim past text links |
| BG-2 | **Header eyebrow** | `OVERZICHT` — locates the page inside the Samenwerken section (the top-nav item already names *Samenwerken*; eyebrow says "this is the entry"). Avoids inventing a parent category that doesn't exist (Samenwerken is top-level). | Yes — could drop eyebrow entirely (SP-04 variant A no-eyebrow) if it reads redundant |
| BG-3 | **CTA discipline** | **No primary CTA on this index.** Three peer doors, each its own row → user picks. Picking-on-behalf-of-the-user would mis-route at least one of P3/P4/vrijwilliger. Per Utility-page playbook: index = signpost. | Yes — could elevate `opzetten` as primary if commissioning is the load-bearing job (it isn't here — uitnodigen + doen are real peers) |
| BG-4 | **Doen row honesty** | Honest sub-line that names *what it is* (vrijwilligerswerk of stage) + a `[in voorbereiding]` tag in `.meta` style — link still active so the placeholder page stays reachable. Don't oversell what isn't there (Dn-19 Open). | Yes — could disable the link until Dn-19 closes, but breaking a real route surfaces a worse 404-shaped failure |
| BG-5 | **Section spacing** | 2 visible `.section` blocks (SP-04 header + 1 link-list); a 3rd "lichte uitleg waar je terechtkomt" intro line lives inside the header lede (no extra section) to honour Utility 3–5 budget while keeping the page airy. | Yes — could split intro into its own section if lede balloons past 2 sentences |
| BG-6 | **Order** | 1. **Opzetten** (commissioning — most-load-bearing for P3+P4) · 2. **Uitnodigen** (mobile studio — P3 booking) · 3. **Doen** (vrijwilliger/stage — placeholder). Heaviest-first matches the *Samenwerken*-name's gravity. | Yes — could lead with Uitnodigen if mobile-studio bookings outweigh commissioning in real traffic; revisit post-launch |
| BG-7 | **Contact bypass** | **No global Samenwerken contact line on this index.** Per-child pages (P-09, P-10, P-11) own their own register-shaped contact path (SP-11 pattern when it lands). Index stays a signpost. | Yes — could surface a fall-back `Andere vraag? → /over-leon/contact` link if user-testing shows confusion |

If any of BG-1 … BG-7 should flip, the brief re-rolls; otherwise these stand.

## Kern

1. **Index = signpost, not destination** (per [40-skeleton §Section budgets](../40-skeleton.md)
   Utility tier). Three doors, named by *what you'd do*, each with one explanatory line.
   Decision happens on this page; substance happens on the child page.
2. **Hybride dial, leunend institutional** (per [TOV §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)).
   Beheerd, rustig, geen verkoop-toon. Geen "let's collaborate!"-energie. Een coördinator
   die wéét waar te klikken landt hier, niet een gefopt door marketing-pad.
3. **Action-shaped IA** (per [30-structure §Samenwerken — children](../30-structure.md)):
   `opzetten` · `uitnodigen` · `doen`. Werkwoorden — geen statische zelfstandige
   naamwoorden ("partners", "collaboraties").
4. **Honest about Doen** (per Dn-19 Open). De rij is er omdat het pad in de IA bestaat;
   de sub-line is eerlijk over het placeholder-statuut. Niets verkopen wat niet bestaat.
5. **One canonical home per fact**. *Mobiele dansstudio*-uitleg leeft op P-07 (canonical
   page in Dansateliers & performances) + intake-framing op P-10 (Samenwerken/uitnodigen).
   Deze index herhaalt geen technische fiche, geen booking-info, geen partner-lijsten.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVERZICHT                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant C)
│  Samenwerken                                                       │
│                                                                    │
│  Drie manieren om met Leon in zee te gaan. Kies de ingang die bij  │
│  jouw vraag past — elk pad heeft zijn eigen contactlijn.           │
├────────────────────────────────────────────────────────────────────┤
│                                                                    │ §2 LINK-LIST
│  → Een participatief dansproject opzetten                          │
│    Kennismaking → vrijblijvend gesprek → traject op maat met       │
│    je groep, school, organisatie of stad.                          │
│  ─────────────────────────────────────────────────────────────     │
│  → De mobiele dansstudio uitnodigen                                │
│    Een verplaatsbare dansruimte boeken voor een week, een          │
│    festival, of een zomerformule op locatie.                       │
│  ─────────────────────────────────────────────────────────────     │
│  → Vrijwilligerswerk of stage doen                                 │
│    Meewerken aan repetities, voorstellingen of dagelijkse          │
│    werking. [in voorbereiding]                                     │
│                                                                    │
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                          [funder wall renders here │
│                                           via default partial]     │
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ OVERZICHT                   │
│                             │ §1 SUBPAGE TOP
│ Samenwerken                 │
│                             │
│ [lede wraps to 3 lines]     │
├─────────────────────────────┤
│ → Een participatief         │ §2 LINK-LIST
│   dansproject opzetten      │   (1-col stack;
│   [sub-line, .meta]         │    rows separated
│                             │    by hairlines)
│ ─────────────────────────── │
│ → De mobiele dansstudio     │
│   uitnodigen                │
│   [sub-line, .meta]         │
│                             │
│ ─────────────────────────── │
│ → Vrijwilligerswerk of      │
│   stage doen                │
│   [sub-line, .meta]         │
│   [in voorbereiding]        │
├─────────────────────────────┤
│ ⤓ SP-09 funder wall         │ ← footer wall
│   (4 tiers) renders here    │
│                             │
│ © Leon vzw · Brussel        │ footer bottom row
│ Contact · Over Leon · NL·…  │
└─────────────────────────────┘
```

## Section specs

### §1 — Subpage top (SP-04 variant C, index-shape)

- **User question:** *"Welke ingang past bij mijn vraag?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant C (index-shape:
  eyebrow + h1 + 1-line intro that flows into the children list — no separate hero
  band, no photo).
- **Composition:** eyebrow `OVERZICHT` (BG-2) · h1 *Samenwerken* · 2-zin lede dat
  uitlegt *waarom drie doors* en hint dat elk pad een eigen contactlijn heeft.
- **No photo (variant B not used):** index page is text-led; the photographic register
  belongs to the project pages, not the intake landing.
- **No hero CTA (BG-3):** three peers below = the CTA grid in disguise.

### §2 — Link-list (3 text-link rows)

- **User question:** *"Welke is de mijne?"*
- **Pattern:** no SP yet — inline `text-link list` (same pattern as P-01 §5
  Samenwerken band; lift to SP-14 if a third surface uses it). Rows separated by
  hairline `--color-border-subtle`, generous padding, whole-row clickable.
- **Composition per row:** `→ {action label}` (medium weight) + 1-line sub
  description (`.meta`). No icons, no card chrome — keeps quieter than §3 on home
  (which IS card-shaped for `Dansateliers & performances`-cards).
- **Rows (BG-6 order):**
  1. **→ Een participatief dansproject opzetten** (`/samenwerken/opzetten`) —
     *Kennismaking → vrijblijvend gesprek → traject op maat met je groep, school,
     organisatie of stad.*
  2. **→ De mobiele dansstudio uitnodigen** (`/samenwerken/uitnodigen`) —
     *Een verplaatsbare dansruimte boeken voor een week, een festival, of een
     zomerformule op locatie.*
  3. **→ Vrijwilligerswerk of stage doen** (`/samenwerken/doen`) —
     *Meewerken aan repetities, voorstellingen of dagelijkse werking.*
     **`[in voorbereiding]`** tag in `.meta` (BG-4 — honest about Dn-19 Open).
- **Link discipline:** whole row is the link target (no separate "lees meer"); arrow
  is decorative. Hover via `--color-hover` background; focus-visible via global rule.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · Overflow (long NL lede — *Samenwerken* lede stays ≤ 2 sentences) |
| §2 Link-list | Default (3 rows) · `Doen`-row carries `[in voorbereiding]` tag · Hover (row tint) · Focus-visible (global) · Overflow (long sub-line wraps within row) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Print: list collapses to plain anchor list |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant C) | 🟠 (variant A drafted; C named) | 🟠 (variant C first concrete use — no spec change needed) |
| *(no SP-05/06/07/09/12/13 invoked — page is text-led signpost)* | — | — |

**No new patterns spawned.** The text-link list is shared with P-01 §5; both stay
*local pattern* until a third surface justifies promoting to SP-14 (deferred).

## Canonical home for facts (anti-bloat)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| What *Samenwerken* means (three doors) | This page §1 lede + §2 list | Mirrored on P-01 §5 as a band, points back here |
| Process: kennismaking → gesprek → traject | P-09 Opzetten | This page only summarises in 1 line |
| Mobile-studio technische fiche | P-07 Mobiele dansstudio (canonical) | P-10 Uitnodigen carries booking framing; this page only summarises |
| Vrijwilliger/stage substance | P-11 Doen (when Dn-19 closes) | Until then, this page row carries the `[in voorbereiding]` tag |
| Contact paths per door | Per-child page (P-09, P-10, P-11) inline | This page does NOT carry a global Samenwerken contact (BG-7) |
| Partner lists | SP-09 (footer) | Not on this index |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary — **N/A on index** (BG-3): three
      peer doors substitute for a single CTA. Justified inline.
- [x] State inventory explicit
- [x] Section budget declared and respected (2 sections of 3–5 — under budget; index
      doesn't need padding to hit the floor)
- [x] No either/or notes survive (BG-1 … BG-7 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (3 listed; no new SP spawned)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.**

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | Lede final wording — confirm "elk pad heeft zijn eigen contactlijn" reads honest (it's true today via per-child contact framing, but per-child contact is not yet implemented; SP-11 pattern is 🔴 stub) | `[content]` | Sam / Kristin | Content stage |
| 2 | Sub-lines per row — Kristin tone pass (1 line each, no clichés, action-verb-first) | `[content]` | Kristin | Content stage |
| 3 | `[in voorbereiding]` tag wording — alternatives: `[binnenkort]`, `[in opbouw]`, `[komt eraan]`. Per TOV: prefer concrete, but until Dn-19 closes there is *no* date. `[in voorbereiding]` is the most honest fallback. | `[content]` | Kristin | Doen row final |
| 4 | Row order — confirm BG-6 (opzetten first) matches team's read of "which door carries most weight" | `[client]` | Sam | §2 → final |
| 5 | Per-child contact line landing — Dn-19 unblocks P-11; SP-11 contact pattern (🔴 stub) drafts on first use (likely P-09) | `[strategy]` + `[design]` | Frederik | Per-child pages → final, then this index can confirm BG-7 |

## Confidence rationale

- **Was 3 / 5** (per [40-skeleton](../40-skeleton.md) page registry: `[content]` 1-zin
  intro per child + `[content]` intake-toon-richtlijn).
- **Now 3 / 5** — playbook level-3: *"could write strawman; would need team review for
  accuracy."* All structural decisions made (BG-1 … BG-7); page is a signpost, so most
  substance lives downstream — gaps are tone-pass + Dn-19-blocked-Doen-copy, not
  structural.
- **→ 4 / 5** when gaps #1 + #2 + #3 close (Kristin tone pass).
- **→ 5 / 5** when all 5 gaps close (incl. per-child contact lines landing → BG-7
  can be confirmed or revisited).

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Structure: [30-structure §Samenwerken — children](../30-structure.md)
- Tone: [identity/10-tone-of-voice §Samenwerken](../../identity/10-tone-of-voice.md#samenwerken-opzetten--uitnodigen--doen)
- Glossary: [glossary](../../glossary.md)
- Sibling content: [08-samenwerken-content.md](08-samenwerken-content.md)
- Sibling briefs touching same vocab: [01-home §5 band](01-home.md) · [05-mariage §6 hook](05-mariage.md)
- Children (downstream): P-09 Opzetten · P-10 Uitnodigen · P-11 Doen (blocked by Dn-19)
- Code stub: [`resources/views/samenwerken/index.blade.php`](../../../../resources/views/samenwerken/index.blade.php)
