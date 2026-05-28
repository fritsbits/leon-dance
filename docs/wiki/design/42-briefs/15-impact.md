---
title: P-15 Impact — Skeleton brief
tags: [design, skeleton, brief, impact, page-level, over-leon]
sources: [40-skeleton; 41-patterns; 30-structure; 20-scope (v0.3 rubric-invisibility guardrail); strategy/30-jobs-to-be-done (D-iii proof ladder); strategy/40-value-proposition (P2 RTB — Janssens & Steyaert); identity/10-tone-of-voice; glossary; existing dansateliers/mariage brief 42-briefs/05-mariage; existing home brief 42-briefs/01-home; best-guess autonomous pass 2026-05-28]
phase: design
page-id: P-15
slug: /over-leon/impact
type: Marketing 5–7
updated: 2026-05-28
---

# P-15 Impact — Skeleton brief

> **Status:** Brief 🟠 first draft · Wireframe 🟠 first draft (this file) · Content 🟠
> first draft (sibling [15-impact-content](15-impact-content.md)) · Code 🟠 first draft
> (rewritten; §"In cijfers" auto-pulls from Event model) · Approved —
> **Confidence:** **2 / 5 → 3 / 5** (raised by section lock-in + 4-beat method spine
> + qualitative-quote primary; gaps remain on real participant-quote consent + nazorg
> body copy + photo).
> **Section budget:** **6 sections** (Marketing tier 5–7 ceiling — staying balanced).
> **Authored autonomously per user instruction "no user questions"; all open calls
> documented inline as best-guess decisions + flagged for review.**
>
> **Load-bearing for P2 jury (G1).** Per [Scope v0.3 guardrail](../20-scope.md): the
> rubric shapes the **spine** of this page (4-beat method · proces/nazorg/continuïteit ·
> qualitative evidence · honest counts) — it **never** shapes the **surface**. If a
> reader feels addressed as a juror, the page has failed.

## Best-guess decisions (read first)

| # | Decision | Best guess | Reversible? |
|---|---|---|---|
| BG-1 | **Hero treatment** | SP-04 variant A (text-only header) — *not* variant B with hero photo. Photo lands later as §5 SP-13 variant B *contained*, breaking up the long-form. Avoids competing visuals with the 4-beat method narrative. | Yes — could flip to variant B if Surface picks a definitive Impact-photo |
| BG-2 | **CTAs in hero** | **None.** This is a reading page, not conversion. Footer-level CTAs only via global nav/footer. Per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact): institutional dial mag hier hoger — *"Rustig, niet apologetisch, niet schreeuwerig."* No sales-band on an Impact page. | Yes — could add a single inline link to *Samenwerken → opzetten* in §6 closing line |
| BG-3 | **Spine = 4-beat method** | *Inviter · Mixing · Reversing · Affirming* (Janssens & Steyaert, per [VP P2 RTB](../../strategy/40-value-proposition.md#p2--jurysubsidiënt--serves-g1)). One short paragraph each, embodied — not abstract. **Concrete verb + concrete scene per beat**, not method-doc prose. Order locked per source. | No (theory order is fixed) — paragraph content is open |
| BG-4 | **Dominant proof rung** | **Qualitative voice first, numbers after.** §4 = SP-12 standalone quote (Hadja-style, P1 voice); §5 = "In cijfers". This sequence is the rubric-invisibility move — the page reads as Leon's voice, not as a metrics dashboard. | Yes — could swap order in v0.2 if team prefers; but the strawman keeps voice dominant |
| BG-5 | **Quote = Hadja (P1)** | Same participant voice used on [P-05 Mariage §5](05-mariage.md). Re-use is intentional (one canonical participant proof on the site; [05-mariage canonical home](05-mariage.md#canonical-home-for-facts-anti-bloat) flagged "could mirror on Impact (P-15) — decide there"). Variant B *standalone* here (vs. inline on Mariage) — larger type, own section, more breathing. | Yes — alternative: a partner-coordinator (P4) voice (Schoemaker/Dewin/Meynaerts per [VP P4](../../strategy/40-value-proposition.md#p4--groepsverantwoordelijke--serves-g1g3)). Decide on content review |
| BG-6 | **In cijfers = 3 numbers** | (1) years active (auto: `now()->year − 2010`); (2) distinct partner-orgs (auto: from `Event.partners` CSV `distinct()`); (3) public activities this year (auto: `whereYear('starts_at', now()->year)`). **Derived, not curated** — Per [30-structure](../30-structure.md): *"auto-pulled from Agenda data — no manual %-dashboard"*. Three numbers, three facts, no %, no ratios. | Yes — could add a fourth (e.g. # edities of *Mariage* once Editie model lands) or trim to 2 |
| BG-7 | **Photo placement** | §6 (last reading section before "Hoe het verder gaat" closer). SP-13 variant B *contained* — editorial photo at `.container-text` width, breaks up long-form near the end. Photo selection deferred to Surface (Dn-20 Charmatz benchmark). Section collapses if no asset. | Yes — could move to §1 hero (variant B) if a definitive Impact-photo arrives |
| BG-8 | **No "outcomes" listing** | Per task brief: *"Don't list 'outcomes' — show, don't tell."* No bulleted impact-claims, no "we hebben X bereikt" framing, no claim-and-back-up rhythm. The quote does the showing; the numbers do the counting; the method does the explaining. | No — guardrail decision |
| BG-9 | **No new partials beyond SP-12** | SP-12 *quote.blade.php* is new (drafted with this brief — first use of SP-12 in code). All other sections compose from existing partials (page-header, photo-block) or plain prose `.container-text`. | No — SP-12 was already 🟠 first-drafted in 41-patterns; this brief promotes it to code |

If any of BG-1 … BG-9 should flip, say so and the brief re-rolls; otherwise these stand.

## Kern

1. **Rubric-shaped spine, Leon-voiced surface** (per [Scope v0.3 guardrail](../20-scope.md)).
   The 4 sections that follow the lede each serve a rubric rung (*method-meerwaarde ·
   proces/nazorg/continuïteit · quality-evolution evidenced via voice · honest counts*) —
   none of them name the rubric, none use *traject · creatie · werking · duurzaam ·
   bekroond* in publieksregister.
2. **One voice carries the proof** (per [JTBD D-iii](../../strategy/30-jobs-to-be-done.md#the-cross-cutting-decision-the-shared-proof-job)).
   *"Mensen zoals jij"* qualitative evidence is the dominant rung. P2 jury reads the same
   substance from below, but the surface is P1-shaped. One ladder, three routed entries —
   on this page the entry is voice-first.
3. **In cijfers auto-pulls from Agenda data** (per [30-structure](../30-structure.md)).
   No `%`, no static counters that go stale, no manual dashboard. Three derived numbers
   from the Event model: years-since-2010, distinct partners from event-partners CSVs,
   public events this year. When the Event table grows, the numbers grow with it.
4. **Method = 4 named beats, embodied not abstract** (per [VP P2 RTB](../../strategy/40-value-proposition.md#p2--jurysubsidiënt--serves-g1)).
   Janssens & Steyaert's *Inviter · Mixing · Reversing · Affirming* is the academic
   anchor. On the page: a verb + a concrete scene per beat, not jargon definitions. The
   academic source is named (institutional dial OK on Over Leon per
   [TOV](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)),
   the beats themselves stay plain-NL.
5. **No outcomes list, no claim-list.** "We hebben X bereikt" framing is banned (BG-8).
   The page shows (quote + numbers + photo + method-beats); it never tells.

## Full-page wireframe (desktop)

```
┌────────────────────────────────────────────────────────────────────┐
│ Leon  Dansateliers & performances  Samenwerken  Agenda  Over Leon │ ← SP-01 nav
├────────────────────────────────────────────────────────────────────┤
│  OVER LEON                                                         │ §1 SUBPAGE TOP
│                                                                    │   (SP-04 variant A)
│  Impact                                                            │
│                                                                    │
│  Wat doet zestien jaar samen dansen met een stad? Hier vertellen   │
│  we hoe Leon werkt, en wie wat erover zegt.                        │
├────────────────────────────────────────────────────────────────────┤
│  Hoe Leon impact maakt                                             │ §2 METHODE (4 beats)
│                                                                    │
│  Uitnodigen                                                        │   Inviter
│  [paragraaf — Leon zoekt mensen op waar ze al zijn …]              │
│                                                                    │
│  Mengen                                                            │   Mixing
│  [paragraaf — een groep van twintig mensen die elkaar niet …]      │
│                                                                    │
│  Omkeren                                                           │   Reversing
│  [paragraaf — wie meedoet, danst — geen "publiek" rol …]           │
│                                                                    │
│  Bevestigen                                                        │   Affirming
│  [paragraaf — wat hier gemaakt is, telt — op de scène, in de stad] │
│                                                                    │
│  ── Op basis van het werk van Janssens & Steyaert. ──              │ academic credit
├────────────────────────────────────────────────────────────────────┤
│  Wat blijft hangen                                                 │ §3 PROCES /
│                                                                    │   NAZORG /
│  [3 alineas — proces, nazorg, continuïteit — verteld als wat       │   CONTINUÏTEIT
│   er gebeurt in een traject, niet als rubric-checklist]            │   (prose)
├────────────────────────────────────────────────────────────────────┤
│                                                                    │
│      "Ik kan er mezelf zijn en ik ontmoet mensen die ik anders     │ §4 QUOTE
│       nooit zou tegenkomen."                                       │   (SP-12 standalone)
│                                                                    │
│      — Hadja, 67 · Mariage Brussel 2024                            │
│                                                                    │
├────────────────────────────────────────────────────────────────────┤
│  In cijfers                                                        │ §5 IN CIJFERS
│                                                                    │   (auto from Event)
│  16   jaar bezig — sinds 2010 in Brussel                           │
│   8   partner-organisaties — in de huidige agenda                  │
│  12   activiteiten dit jaar — publiek                              │
│                                                                    │
│  ── Cijfers uit de [agenda](/agenda), live bijgehouden. ──         │
├────────────────────────────────────────────────────────────────────┤
│  ┌──────────────────────────────────────────────────────────────┐  │
│  │           editorial photo · contained width                  │  │ §6 PHOTO (SP-13 B)
│  └──────────────────────────────────────────────────────────────┘  │
│  © Photographer · context · year                                   │
├────────────────────────────────────────────────────────────────────┤
│  © Leon vzw · Brussel    Contact · Over Leon · NL·FR·EN · [legal]  │ SP-02 footer
│                                          [SP-09 funder wall full]  │
└────────────────────────────────────────────────────────────────────┘
```

## Full-page wireframe (mobile, < 768 px)

```
┌─────────────────────────────┐
│ Leon            NL · FR · EN│ ← SP-01 top row
│ Dansateliers & performances │ ← SP-01 wrap row
│ Samenwerken Agenda Over Leon│
├─────────────────────────────┤
│ OVER LEON                   │ §1 SUBPAGE TOP
│                             │
│ Impact                      │
│                             │
│ [lede wraps to ~3 lines]    │
├─────────────────────────────┤
│ Hoe Leon impact maakt       │ §2 METHODE
│                             │
│ Uitnodigen                  │
│ [alinea]                    │
│                             │
│ Mengen                      │
│ [alinea]                    │
│                             │
│ Omkeren                     │
│ [alinea]                    │
│                             │
│ Bevestigen                  │
│ [alinea]                    │
│                             │
│ Op basis van Janssens &     │ academic credit
│ Steyaert.                   │
├─────────────────────────────┤
│ Wat blijft hangen           │ §3 PROCES/NAZORG/
│                             │   CONTINUÏTEIT
│ [3 alineas]                 │
├─────────────────────────────┤
│ "Ik kan er mezelf zijn en   │ §4 QUOTE
│  ik ontmoet mensen die ik   │   (SP-12 standalone,
│  anders nooit zou           │    type drops to xl on
│  tegenkomen."               │    mobile)
│                             │
│ — Hadja, 67 ·               │
│   Mariage Brussel 2024      │
├─────────────────────────────┤
│ In cijfers                  │ §5 IN CIJFERS
│                             │
│ 16  jaar bezig              │
│  8  partner-organisaties    │
│ 12  activiteiten dit jaar   │
│                             │
│ Cijfers uit de agenda.      │
├─────────────────────────────┤
│ ┌─────────────────────────┐ │ §6 PHOTO
│ │  editorial photo        │ │
│ │  (contained width)      │ │
│ └─────────────────────────┘ │
│ © Photographer · context    │
├─────────────────────────────┤
│ © Leon vzw · Brussel        │ SP-02 footer
│ [funder wall · contact]     │
└─────────────────────────────┘
```

**Mobile-first observations:**
- §2 four beats stack as h3 + paragraph, no grid — reads as one continuous narrative.
- §4 SP-12 standalone variant: type drops from `text-3xl` to `text-2xl` on mobile (still
  larger than body text, still feels like the page's emotional centre).
- §5 In cijfers: number column + label column stays two-column even on mobile (the
  numbers are short — "16", "8", "12" — and the visual grid is part of the legibility).
- §6 SP-13 contained: image keeps `.container-text` width on all viewports — feels more
  editorial than full-width, which is right for the closing-photo job.

## Section specs

### §1 — Subpage top (SP-04 variant A)

- **User question:** *"Wat ga ik hier lezen?"*
- **Pattern:** [SP-04](../41-patterns.md#sp-04--subpage-top) variant A (text-only header).
- **Composition:** eyebrow `OVER LEON` · h1 `Impact` · lede (2 sentences).
- **Eyebrow link:** `OVER LEON` → `/over-leon` (parent index).
- **BG-2:** **No hero CTA.** This is a reading page.

### §2 — Hoe Leon impact maakt (4-beat method)

- **User question:** *"Hoe werkt Leon eigenlijk?"*
- **Pattern:** plain `.section` + `.container-text` with 4 named beats (h3 each).
- **Order locked** per [VP P2 RTB](../../strategy/40-value-proposition.md#p2--jurysubsidiënt--serves-g1):
  *Inviter · Mixing · Reversing · Affirming* (Janssens & Steyaert).
- **NL beat-labels (BG-3):** *Uitnodigen · Mengen · Omkeren · Bevestigen.*
  Verb-first per [TOV §Stijl](../../identity/10-tone-of-voice.md#stijl--ritme); plain NL,
  no jargon-imports.
- **Each beat:** short paragraph (3–4 sentences), **embodied** — concrete verb + concrete
  scene, never definitional. *"Leon zoekt mensen op waar ze al zijn"* > *"Inviter betreft
  het uitnodigingsproces…"*.
- **Academic credit:** one `.meta` line at the bottom: *"Op basis van het werk van
  Janssens & Steyaert."* Names the source once; doesn't quote the theory at length.

### §3 — Wat blijft hangen (proces · nazorg · continuïteit)

- **User question:** *"Wat blijft er over als de voorstelling voorbij is?"*
- **Pattern:** plain `.section` + `.container-text` (prose), 3 paragraphs flowing into
  each other; no sub-h3s (avoids the rubric-shaped checklist read).
- **Per [TOV §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact):**
  *"Rustig, niet apologetisch, niet schreeuwerig."* Institutional dial mag hier hoger.
- **No bullets** — bullets here = rubric checklist.
- **Strawman opener:** *"Een Mariage-editie duurt tien weken. Wat erna gebeurt, duurt
  vaak jaren."* (concrete · time-anchored · no claim).

### §4 — Quote (SP-12 standalone)

- **User question:** *"Wie zegt dit?"*
- **Pattern:** [SP-12](../41-patterns.md#sp-12--quote--testimony) variant B *standalone*
  (own section, larger type, more breathing — vs. inline on [P-05 Mariage §5](05-mariage.md)).
- **Composition:** single-quote, single-attribution. **One per surface** (per
  41-patterns SP-12 contract: *"Discipline: one quote per surface. Quote-walls /
  carousels are explicitly out."*).
- **Quote (BG-5):** Hadja, 67 · Mariage Brussel 2024 — *"Ik kan er mezelf zijn en ik
  ontmoet mensen die ik anders nooit zou tegenkomen."* Re-used from
  [P-05 Mariage §5](05-mariage.md) per the canonical-home note that flagged this re-use
  as legitimate.
- **State note:** if quote missing/withheld, section collapses entirely (per SP-12
  state inventory).

### §5 — In cijfers (auto-pulled)

- **User question:** *"Hoeveel ongeveer?"*
- **Pattern:** plain `.section` + `.container-text` with a 2-col grid (number · label).
- **Data source (BG-6):** Event model. Three derived counts via `@php` block:
  1. **Years active:** `now()->year − 2010` (hard-anchored — sinds 2010 is the
     "16 jaar bezig" frame per [home-content gap #3 strawman](01-home-content.md)).
  2. **Partner-organisaties:** distinct values from `Event.partners` CSV column —
     `flatMap(explode(','))->unique()->count()`. Currently seeds yield ≈2 (MUS-E,
     Ketmet); real data will grow this.
  3. **Activiteiten dit jaar:** `Event.where('is_public', true)->whereYear('starts_at',
     now()->year)->count()`. Live, grows as the agenda fills.
- **No percentages, no ratios, no "growth" claims.** Three numbers, three facts.
- **Footnote line** (`.meta`): *"Cijfers uit de [agenda](/agenda), live bijgehouden."*
  Names the source, gives the reader an action.
- **State note:** all-zero → section still renders ("0 activiteiten dit jaar" is itself
  honest; should rarely happen on a live site).

### §6 — Photo (SP-13 variant B contained)

- **User question:** *"Hoe ziet dat eruit?"*
- **Pattern:** [SP-13](../41-patterns.md#sp-13--photo-block) variant B *contained*
  (`.container-text` width, more editorial than full-width).
- **Asset:** open (gap #3). Strawman: an Atelier Leon or Mariage photo per
  [90-image-map](../90-image-map.md) — Surface decides against Charmatz benchmark
  ([Dn-20](../01-concerns.md)).
- **Missing-asset state:** section collapses (SP-13 contract).
- **Why at the end:** breaks up the long-form before footer; closing image, not opening.

## State inventory

| Section | States that matter |
|---|---|
| §1 SP-04 header | Default · "Impact" is short → no overflow concern |
| §2 Methode | Default · Per-beat-text-overflow handled by prose `.container-text` width |
| §3 Wat blijft hangen | Default only |
| §4 Quote (SP-12) | Default · Quote missing → section omitted entirely (SP-12 contract) · Long attribution → wraps |
| §5 In cijfers | Default · All-zero (theoretical: section still renders; "0" is honest) · Very-large-number overflow (theoretical: numbers stay legible up to 4 digits) |
| §6 Photo (SP-13) | Default · **Missing-asset → section collapses** (SP-13 contract) |
| Page-level | Reduced-motion (global) · Mobile reflow (above) · Event table empty → §5 shows zeroes, page still renders |

## Patterns invoked

| SP-id | Status before | Status after |
|---|---|---|
| SP-01 Primary nav | 🟠 | 🟠 (unchanged) |
| SP-02 Footer | 🟠 | 🟠 (unchanged) |
| SP-04 Subpage top (variant A) | 🟠 | 🟠 (unchanged) |
| SP-12 Quote / testimony (variant B standalone) | 🟠 spec only | **🟠 + code** (first use in code; new partial `partials/quote.blade.php` ships with this brief) |
| SP-13 Photo block (variant B contained) | 🟠 | 🟠 (unchanged; variant B first use in code) |

> **Note re SP-08 Agenda preview strip:** [40-skeleton](../40-skeleton.md) flagged SP-08
> as *"possibly redundant — re-evaluate before P-13 / P-15 Impact 'In cijfers'."*
> **Verdict: redundant for P-15.** This page's "In cijfers" is **counts**, not an event
> preview-strip — three derived numbers via plain prose + a `<dl>` grid, not a list of
> upcoming events. SP-08 stays 🔴 stub; recommend deprecating it from the patterns
> register at next lint (one-line note in 40-skeleton snapshot).

## Canonical home for facts (anti-bloat discipline)

| Fact | Canonical home | May appear elsewhere? |
|---|---|---|
| 4-beat method (Janssens & Steyaert) | §2 this page | Only here on the public surface. Strategy/VP cites the academic source separately. |
| Proces · nazorg · continuïteit narrative | §3 this page | Project pages (P-05 Mariage §5 "Hoe het traject loopt") use the same vocabulary but tell project-specific stories — not duplication |
| Hadja quote | §4 this page **AND** [P-05 Mariage §5 inline](05-mariage.md). | **Intentional re-use** — see BG-5 + [P-05 canonical-home note](05-mariage.md#canonical-home-for-facts-anti-bloat). Two surfaces, two roles: on Mariage = embedded in trajectory description; on Impact = standalone proof rung. If team objects to duplication at content stage, default = keep on Impact, link from Mariage. |
| Years-active count, partner count, activities-this-year count | §5 this page (derived live from Event) | Home jury-band has its own one-line variant ("Wekelijks samen sinds 2010") — overlap is fine, both pull from the same `2010` source-of-truth |
| Impact photo selection | §6 this page (SP-13 variant B) | Surface plane decides asset; same photo can appear elsewhere if it fits |

## Validation gate ([40-skeleton](../40-skeleton.md#validation-gate-playbook-checklist))

- [x] Sections answer a user question (named per §)
- [x] One visually-dominant primary CTA + 0 secondary (BG-2 — no CTA on this page by design)
- [x] State inventory explicit
- [x] Section budget declared and respected (6 of 5–7)
- [x] No either/or notes survive (BG-1 … BG-9 are decisions, not either/ors)
- [x] Patterns referenced by SP-id (5 listed)
- [x] Canonical home named for every load-bearing fact
- [x] Mobile-first sketch included

**Validation: 8 / 8 PASS.** Brief is gate-ready for review → 🟡 reviewed → 🟢 final.

**Rubric-invisibility self-check** (Scope v0.3 extra gate for this page):

- [x] No section heading names a rubric criterion (*"Methode-meerwaarde"*, *"Kwaliteitsevolutie"*) — beats use plain NL verbs.
- [x] No bulleted "outcomes" list — narrative + quote + numbers, never claim-and-back-up.
- [x] No banned words (*traject* outside funder-page, *creatie*, *werking*, *duurzaam*, *bekroond*, *uniek*) appear in publieks-copy. Strawman compliant; verify on real copy.
- [x] In cijfers stays factual counts, not percentages or growth narratives.
- [x] Quote (qualitative voice) is positioned **before** numbers (BG-4 sequence move).

## Open decisions (gaps to 🟢 Final / Conf 5)

| # | Gap | Tag | Owner | Blocks |
|---|---|---|---|---|
| 1 | §2 four beat paragraphs (3–4 sentences each, embodied) | `[content]` | Sam / Kristin | Content stage → final |
| 2 | §3 *proces · nazorg · continuïteit* 3-paragraph prose | `[content]` | Sam / Kristin | Content stage → final |
| 3 | §6 editorial photo choice | `[asset]` | Frederik + Surface | Section visual final (SP-13 collapses cleanly if absent) |
| 4 | Quote attribution clearance — confirm Hadja consent (shared with [P-05 gap #4](05-mariage.md)) | `[client]` | Sam / Kristin | §4 → final (block if denied; section collapses) |
| 5 | "Sinds 2010" jaartal — same anchor as [home-content gap #3](01-home-content.md). Confirm team voices "16 jaar bezig" publicly. | `[content]` | Sam / Kristin | §5 cijfer-1 framing |
| 6 | Partner-count derivation method — currently `distinct(Event.partners CSV)`. Reads honest at v1 (≈2 from seeds, will grow). At real-data scale, possibly under-counts (only event-time partners, not org-level funders). Acceptable for v1? | `[research]` | Frederik | §5 cijfer-2 accuracy |
| 7 | Closing copy / inline samenwerken link decision (BG-2 reversibility) | `[client]` | Sam | §6 or end-of-§3 |

## Confidence rationale

- **Was 2 / 5** (per [40-skeleton P-15 row](../40-skeleton.md#page-registry--single-source-of-status-truth):
  *"vague brief; no source material for the 4-beat NL-uitleg; rubric-invisibility
  guardrail unresolved"*).
- **Now 3 / 5** — playbook level-3 definition: *"could write strawman; would need team
  review for accuracy."* All structural decisions made (BG-1 … BG-9); §1 + §5 + §6 are
  effectively final-ready in code (lede + auto-pulls + photo-collapse); §2 + §3 strawman
  ready, awaiting real team prose; §4 awaiting quote clearance.
- **→ 4 / 5** when gaps #1 + #2 close (team writes §2 beat paragraphs + §3 prose) and
  #4 + #5 clear (consent + jaartal confirmation).
- **→ 5 / 5** when all 7 gaps close.

## Cross-links

- Plane: [40-skeleton](../40-skeleton.md) · Patterns: [41-patterns](../41-patterns.md) · Status: [01-concerns](../01-concerns.md)
- Scope: [20-scope §F2/F3 + v0.3 guardrail](../20-scope.md)
- Structure: [30-structure §Over Leon → Impact](../30-structure.md)
- Strategy: [JTBD D-iii proof ladder](../../strategy/30-jobs-to-be-done.md#the-cross-cutting-decision-the-shared-proof-job) · [VP P2 RTB](../../strategy/40-value-proposition.md#p2--jurysubsidiënt--serves-g1)
- Tone: [identity/10-tone-of-voice §Over Leon](../../identity/10-tone-of-voice.md#over-leon-missie--visie--impact--team--historiek--contact)
- Glossary: [glossary](../../glossary.md)
- Sister pages: [P-01 Home brief](01-home.md) (jury 1-line band; same "sinds 2010" anchor) · [P-05 Mariage brief](05-mariage.md) (same Hadja quote, inline variant)
- Sibling content: [15-impact-content](15-impact-content.md)
- Code: [`resources/views/over-leon/impact.blade.php`](../../../../resources/views/over-leon/impact.blade.php) · NEW partial [`resources/views/partials/quote.blade.php`](../../../../resources/views/partials/quote.blade.php)
