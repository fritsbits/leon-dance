---
title: P-19 Atelier Leon — losse atelierpagina (detail) — Skeleton brief
tags: [design, skeleton, brief, dansateliers, atelier-leon, page-level, detail, child-of-P-03]
sources: [40-skeleton; 41-patterns; 30-structure; glossary; identity/10-tone-of-voice; strategy/20-personas; strategy/30-jobs-to-be-done; 42-briefs/03-atelier-leon; 42-briefs/06-mariage-editie; live UX-planning session w/ Frederik 2026-05-29]
phase: design
page-id: P-19
parent: P-03
slug: /dansateliers-performances/atelier-leon/{venue}
type: Marketing detail (Mkt-register, belonging dial)
updated: 2026-05-29
---

# P-19 Atelier Leon — losse atelierpagina (detail)

> **Status:** Brief 🟠 · **Wireframe 🟠 built** (render + agent /critique pass; awaits
> Frederik-critique voor 🟢) · Content 🟠 strawman + annotated gaps · **Back 🟢** (route +
> `Atelier.slug` + OSM-kaart live from Atelier/Venue/Event models, test-covered).
> **Confidence:** **2 / 5** — structure now proven, but the page stays **beeld-dependent**
> (one photo per locatie), the begeleider + transit copy are annotated placeholders, and the
> venue lat/lng are approximate pending team confirmation.
> **Section budget:** **4–5 bands** (header + photo + praktisch/kaart + eerstvolgende +
> eerste-keer) + footer.
> **Parent:** child-detail of [P-03 Atelier Leon](03-atelier-leon.md), same relationship as
> [P-06 mariage-editie](06-mariage-editie.md) ↔ P-05.

## Why this page exists (Strategy)

P-03 answers *"what is an open atelier, is it for me?"* — it flattens both locaties into one
list because the **practice** is what's being sold. P-19 serves a **more committed** visitor:
they've already decided "ja, misschien" and clicked a specific dag/plek. Their state shifts
from *nieuwsgierig* → *ga-ik-echt-langs*.

Jobs-to-be-done here, all **locatie-specific**:

- **"Geraak ik er woensdag?"** — concrete logistiek voor *deze* zaal: adres, metro/tram,
  hoe de ingang eruitziet, waar je binnen moet zijn.
- **"Val ik *hier* uit de toon?"** — Pianofabriek-woensdag en Maison-des-Cultures-zaterdag
  hebben een eigen sfeer, eigen vaste dansers, een eigen begeleider. P-03 kan dat niet tonen;
  deze pagina wel.
- **"Wanneer is de eerstvolgende *hier*?"** — niet de samengevoegde agenda, enkel de dates
  van déze groep.
- **First-timer-drempel**, nu plek-specifiek: *"waar sta ik om 16u als ik niemand ken?"*

⚠️ Strategic bet: this page only earns its keep if the twee open ateliers **echt
verschillen** in karakter. If they're functionally identical it becomes thin — then keep it
as a routing target with logistiek + kaart + eerstvolgende only, and drop the sfeer claims.

The non-obvious value: it's the page a vaste danser **deelt** met een vriend ("kom woensdag
naar de Pianofabriek, hier → link") en de pagina die een terugkerende danser **bookmarkt**.
It turns a diffuse practice into *een plek met een staande uitnodiging*.

## Scope (resolved in session)

| In scope (v1) | Bron | Noot |
|---|---|---|
| Dag · uur-bereik | `Atelier::dayLabel()`, `timeRange()` | het hero-feit |
| Venue naam + area + volledig adres | `venue->name/area/address` | |
| Kaart | `venue->lat/lng` → **Leaflet/OSM** (SP-17) | eerste kaart in het project; CLAUDE.md: enkel OSM+Leaflet |
| Routebeschrijving | OSM `directions` deep-link uit `lat/lng` | taalneutraal, geen tekst te schrijven/vertalen |
| Foto van de buitenkant | `venue->photo` (admin-upload, publieke disk) | per locatie, taalneutraal; klapt dicht zonder |
| Begeleider | `atelier->lead` (admin) | enkel een naam; conditioneel — blok verdwijnt als leeg |
| Eerstvolgende *op deze locatie* | `Event` gefilterd op dit atelier | inline venue-scoped lijst (geen redundante venue/titel) |
| Eerste-keer-geruststelling | **gedeelde** copy in de Blade | identiek voor elke instance → 1× per taal, niet per atelier |
| "Wat breng je mee" | gedeelde copy (cf. P-03) | idem |
| Terug-link naar P-03 | — | eyebrow boven + retour onderaan |

**Out of scope (v1):** inschrijving (open ateliers vergen er geen — dat ís de pitch),
per-locatie sfeer-prose (zie content-model hieronder — beeld draagt de sfeer i.p.v. tekst),
vrije-tekst routebeschrijving (vervangen door OSM-deeplink), deelnemer-testimonials.

## Content-model & overhead (resolved 2026-05-29)

Driver: elke instance moet door het team onderhouden worden, **later × 3 talen**. De
kostbare as is *per-instance vrije tekst × talen × ateliers*. Beslissing: de pagina draagt
**geen per-instance prose**. Alles wat leesbaar is, is óf gedeelde copy (1× per taal,
ongeacht aantal ateliers) óf gestructureerde, taalneutrale data.

- **Taalneutrale data (gratis te vertalen):** schema (dag/uur), venue (naam/area/adres),
  coördinaten, de dates-lijst (komt uit de agenda die het team toch al bijhoudt), de
  begeleider-naam, de buitenkant-foto. Per nieuwe atelier: kies venue, zet dag/uur,
  optioneel een naam + foto. **Geen prose, geen vertaling.**
- **Gedeelde prose (write-once per taal):** lede-template, "Wat breng je mee", de hele
  §5 "De eerste keer". Leeft in de Blade, niet op de instance.
- **Geschrapt als overhead:** de vrije-tekst "hoe geraak je er" (was 2 zinnen × venue ×
  taal) → vervangen door een **OSM-routebeschrijving-deeplink** (nul auteurswerk). De
  ⚠️ sfeer-bet hierboven is hiermee beslist: **geen** per-venue sfeer-tekst; de
  **buitenkant-foto** draagt het plek-eigen karakter zonder vertaalkost.

Beheer: **`AtelierResource`** (lead, slug, dag/uur, actief) + **`VenueResource`**
(adres, coördinaten, foto-upload + credit) in Filament.

## Structure (resolved in session)

- **Eén pagina per `Atelier`-rij** (de terugkerende instantie) — niet per venue, niet per
  losse Event-occurrence. Pianofabriek-wo en Maison-za = twee pagina's.
- **URL genest onder de overzichtspagina:**
  `/dansateliers-performances/atelier-leon/{venue-slug}` → `…/atelier-leon/pianofabriek`.
- **Scope page-type:** enkel **open ateliers** (v1). School-ateliers zijn besloten
  trajecten → geen publieke detailpagina.
- **Inbound links** (de twee plekken uit Frederiks screenshots):
  1. P-03 §4 "Waar en wanneer" — wikkel elk `$atelier`-blok (dag/uur/venue/adres) in een
     link naar zijn detailpagina.
  2. Agenda `date-row` met titel *"Atelier Leon · Pianofabriek"* (`$event->title`) — richt
     de `href` op de detailpagina i.p.v. de samengevoegde agenda.

## Skeleton

```
┌───────────────────────────────────────────────┐
│ NAV                                            │
├───────────────────────────────────────────────┤
│ ‹ Atelier Leon            (breadcrumb up, P-03)│
│                                                │
│ Atelier Leon · Pianofabriek      (page-header) │
│ Woensdag · 16:00–18:00 · Sint-Gillis  (lede)   │
├───────────────────────────────────────────────┤
│ [foto van DEZE zaal — SP-13, klapt dicht zonder]│
├──────────────────────────┬────────────────────┤
│ PRAKTISCH                │  KAART (OSM/Leaflet) │
│ Fortstraat 35, 1060      │  pin op de venue     │
│ Hoe geraak je er (metro) │                      │
│ Begeleider: [lead]       │                      │
│ Wat breng je mee         │                      │
├──────────────────────────┴────────────────────┤
│ EERSTVOLGENDE — hier        (SP-08 agenda-list, │
│   wo 4.06 · 16:00             enkel deze venue) │
│   wo 11.06 · 16:00                              │
│   → volledige agenda                            │
├───────────────────────────────────────────────┤
│ EERSTE KEER?  (plek-specifieke geruststelling,  │
│   Q-shaped beats — "waar sta ik om 16u?")       │
├───────────────────────────────────────────────┤
│ ← Terug naar Atelier Leon   (retour naar parent)│
├───────────────────────────────────────────────┤
│ FOOTER                                         │
└───────────────────────────────────────────────┘
```

> De ASCII hierboven is de eerste opzet. Gebouwde afwijkingen: "hoe geraak je er"-tekst
> vervangen door een OSM-route-deeplink; begeleider-blok verdwijnt als `lead` leeg is; de
> "foto van DEZE zaal" is een **buitenkant-foto per venue** (`venue->photo`, admin), niet
> per atelier-slug. **Eén thuis voor dates:** §"Waar en wanneer" toont enkel de wekelijkse
> cadans, de concrete eerstvolgende dates leven enkel in de "Eerstvolgende keren hier"-sectie
> (geen dubbele "eerstvolgende keer" — /critique 2026-05-29). **Foto = wayfinding, geen hero**
> (/arrange 2026-05-29): de buitenkant-foto staat klein (3/2, `object-cover`) **in de
> linkerkolom bij het adres**; de **kaart vult de rechterkolom** (`items-stretch`) zodat de
> kolommen even hoog zijn (geen witgat). Het enige sfeerbeeld staat in "De eerste keer hier":
> bewust een **collectief, vrolijk dansbeeld** (`pink-trousers-joy`, iedereen beweegt op zijn
> eigen manier) — het eerdere `seppe-circle`-beeld (iemand in het midden, groep eromheen)
> ondermijnde net de geruststelling en is geschrapt. "Schoenen mogen uit"-claim geschrapt (niet geverifieerd; foto toont dansers mét
> schoenen) — staat nog wel op P-03.
> **Consistente breedte** (/critique 2026-05-29): álle secties cappen op `--max-content`
> (56rem), links uitgelijnd — de twee 2-koloms secties zijn nu even breed (was: §4 op 80rem).
> §4-beeld vult de tekstkolom (`items-stretch` + `md:h-full`). Sub-zin "De dates van deze
> {dag}groep. Je hoeft niet te reserveren." **geschrapt** — kost vertaling, voegt niets toe
> boven de kop + de dates; geen teamwerk nodig.

Hergebruikte patterns: `page-header` (SP-04), `photo-block` (SP-13), `agenda-list` (SP-08).
**Nieuw pattern:** **SP-17 Map block** (`partials/map.blade.php`, eerste kaart in het project).

## Implementation notes (Build — gebouwd 2026-05-29)

1. **Slug op `Atelier`** — `slug`-kolom (migratie + unieke index) + in `AtelierFactory`.
2. **Route** — `Route::get('/atelier-leon/{atelier:slug}', …)->name('dansateliers.atelier-leon.detail')`
   binnen de `dansateliers.` group; **slug-binding alleen hier** (geen globale
   `getRouteKeyName` — anders breekt Filament's record-binding op de school-atelier zonder slug).
   `abort_unless(open && actief, 404)`.
3. **View** — `resources/views/dansateliers/atelier-detail.blade.php`.
4. **Eerstvolgende** — `Atelier::upcomingEvents()` (publiek, `upcoming()`), inline venue-scoped lijst.
5. **Kaart** — `partials/map.blade.php` (SP-17), `lat/lng` uit venue; OSM-route-deeplink ernaast.
6. **Buitenkant-foto** — `venue->photo` op de publieke disk (`storage:link`), upload via `VenueResource`.
7. **Admin** — `AtelierResource` (lead/slug/dag/uur) + `VenueResource` (adres/coördinaten/foto).
8. **Link-edits** — P-03 §4-blokken + P-03 §4 eerstvolgende-rijen + agenda open-atelier-rijen → detailpagina.
9. **Tests** — `AtelierDetailPageTest` (7) + `AdminResourcesSmokeTest` (2, Livewire form-build).

## Open vragen (→ client / data)

- **[data]** Begeleider-naam per atelier (`atelier->lead`, admin) — optioneel, blok verdwijnt als leeg.
- **[asset]** Buitenkant-foto per venue (admin-upload, publieke disk — **niet in git**, want
  publieke repo + foto's zijn © derden; team upload per omgeving via *Locaties*).
  **Maison des Cultures:** geplaatst (dev) vanaf lamaison1080hethuis.be, credit "© La Maison
  des Cultures et de la Cohésion Sociale" — team bevestigt licentie/fotograaf.
  **Pianofabriek:** geplaatst (dev) vanaf Wikimedia Commons *File:Pianofabriek_wiki.jpg*
  (CC BY-SA 4.0, © Adacoco 2021; staand beeld → banner-crop) — of vervang door team-eigen foto.
- **[data]** Venue `lat/lng` nu approximatief (geocodeerd) → team bevestigt de pin.
- ~~per-locatie sfeer-copy / vrije-tekst route~~ — **beslist tegen** (zie content-model).
