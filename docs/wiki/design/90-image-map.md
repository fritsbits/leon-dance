---
title: Image Map — Asset Catalogue (Phase 1)
tags: [design, assets, images, media, catalogue]
sources: [image-mapping-playbook (Notion), current-site/images.json, current-site/README.md, raw/assets/]
phase: design
updated: 2026-05-19
---

# Image Map — Asset Catalogue (Phase 1)

Phase 1 of the [Image-mapping playbook](https://www.notion.so/frederik-vincx/Playbook-Image-mapping-341d3ecc475c81b49ea6e63cfba488fe)
("**catalogue what exists**"): every usable image in Leon's current visual footprint,
quality-rated, deduplicated, renamed, and organised into `docs/raw/assets/`. Phase 2 (the
per-slot map onto the new site) is **deferred** — see [Phase 2 status](#phase-2-status-deferred).

**Source of the dump.** Leon has no separate photo folder; the source set is the
**current-site mirror** (`docs/raw/current-site/images.json`),
the 85 distinct image URLs the live `leon.dance` site references. The mirror *indexes* URLs
but does not download files (see `docs/raw/current-site/README.md`),
so each image was fetched from the Squarespace CDN at its largest render and assessed here.

## Headline

- **85** source images → **74 catalogued** (9 excluded as agenda screenshots / third-party campaign banners, 2 dropped as exact duplicates).
- Catalogued: **70 photography**, **2 logos**, **2 posters/flyers**. **No illustrations**
  (the only non-photo graphics were a third-party campaign banner — excluded).
- **Every catalogued asset is currently in use** on `leon.dance` (it was scraped from the
  live site); the *On site* column records which page(s).
- The library is **entirely participatory-event / workshop documentary photography** —
  intergenerational dance in Brussels streets, squares, studios and a museum. It is strong,
  on-message social proof and **directly serves the Dn-06 decision** (reuse the existing
  photo/film archive site-wide as the qualitative proof rung). What it does **not** contain
  is listed under [Gaps](#gaps--what-this-library-does-not-have-ask-the-client).

### Reading the catalogue (caveats — principle 1 & 3)

- ⚠️ **Files are Squarespace CDN renders, not masters.** Each was fetched at
  `?format=2500w`, so the **long edge is capped at 2500 px** (smaller where the original is
  smaller). Stored as `.webp` (what the CDN returned) — the extension is honest about the
  bytes on disk. Dimensions/quality describe *the asset we hold*, not the photographer's
  original, which may be higher-res. Confirming masters is a client ask.
- **Quality** = `high` (sharp, well-exposed, usable at the delivered size) · `brand` (a
  logo — needs vector; current raster is low-res ⚠️) · `graphic` (a text/layout flyer, not
  a photograph).
- ⚠️ **Credits are inferred from the original filenames** (e.g. `…©Matthias Van Gysel…`,
  `…Photo Ivan Put…`). Treat as a lead, not a cleared rights record — see
  [Dn-15](01-concerns.md).
- **Orientation:** `land` landscape · `port` portrait · `wide` banner/lock-up.

## Catalogue — Photography (70)

| Asset (`docs/raw/assets/…`) | Px (rendered) | Orient | Quality | What it shows | Credit ⚠️ | On site |
|---|---|---|---|---|---|---|
| `photography/atelier-leon-blond-dancer-arms-dkeyzer3.webp` | 2048x1367 | land | high | Woman with blond hair dancing arms-out, brick building | Bernard de Keyzer | /gallery |
| `photography/atelier-leon-blue-print-street-ivanput4.webp` | 1280x854 | land | high | Woman in blue African-print top dancing in street with kids | Ivan Put | /gallery |
| `photography/atelier-leon-courtyard-mother-toddler-2024.webp` | 1500x1000 | land | high | Woman with toddler + woman dancing arms-raised, ivy brick courtyard | — | /gallery |
| `photography/atelier-leon-courtyard-two-men-arms-2024.webp` | 1500x1000 | land | high | Two men arms-raised dancing, brick industrial courtyard, totem | — | /gallery |
| `photography/atelier-leon-pink-trousers-joy-dkeyzer1.webp` | 2048x1367 | land | high | Man in pink trousers dancing joyfully in outdoor group | Bernard de Keyzer | /gallery |
| `photography/atelier-leon-reaching-hand-street-ivanput1.webp` | 1280x603 | land | high | Panoramic crop: reaching hand foreground, car-free street play | Ivan Put | /what-we-do |
| `photography/atelier-leon-seppe-circle-2023.webp` | 1500x1000 | land | high | Seppe crouching addressing teen inside seated participant circle, studio | Sofie De Backere | /gallery |
| `photography/atelier-leon-square-floorwork-rquere064.webp` | 1280x1043 | land | high | Teens floor/standing dance on square, grey sky, Brussels | Rozenn Quere | /gallery |
| `photography/atelier-leon-square-laugh-sing-2021.webp` | 2500x2081 | land | high | Man laughing + young man singing expressively, cobbled square | Rozenn Quere | /gallery |
| `photography/atelier-leon-standard-jersey-beret-ivanput5.webp` | 1280x854 | land | high | Man in Standard jersey + elder in beret dancing, residential street | Ivan Put | /gallery |
| `photography/atelier-leon-twine-line-courtyard-2024.webp` | 1500x1000 | land | high | Group holding long twine line, planters, brick courtyard | — | /gallery |
| `photography/atelier-leon-violinist-under-veil-2024.webp` | 1500x1000 | land | high | Man playing violin under held lace veil, brick wall, participants | — | /gallery |
| `photography/bozar-square-arm-raised-intergen.webp` | 2500x1667 | land | high | Woman arm-raised dancing among intergenerational square crowd | — | /gallery |
| `photography/bozar-warmup-arched-hall-hijab-walk.webp` | 1700x1139 | land | high | Group walking in arched-window hall, woman in beige hijab dress | C. Lessire | /gallery |
| `photography/bozar-warmup-head-cradle-care-duet.webp` | 1700x1133 | land | high | Intimate contact duet: man cradling woman's head, soft-lit studio | C. Lessire | /gallery |
| `photography/bozar-warmup-intergen-street-dance.webp` | 2048x1365 | land | high | Outdoor intergenerational street dance, classical facade (Bozar NGP WarmUp) | — | /gallery |
| `photography/bozar-warmup-red-trousers-arms-up.webp` | 1700x1133 | land | high | Man in red trousers dancing arms-up, parquet studio, musicians | C. Lessire | /gallery |
| `photography/bozar-warmup-yellow-reach-frescoed-room.webp` | 1700x1133 | land | high | Woman in yellow reaching out smiling, workshop in frescoed room | C. Lessire | /gallery |
| `photography/car-free-street-intergen-play-ivanput.webp` | 1280x854 | land | high | Car-free street intergenerational play, grey-hoodie lead, kid in red | Ivan Put | /home+/missie-visie-eng |
| `photography/dansateliers-binoculars-pose-festival-2022.webp` | 2500x1667 | land | high | Intergenerational "binoculars" hand-pose, festival posters backdrop | — | /missie-visie-fr |
| `photography/dansateliers-courtyard-aerial-cine-mots-2022.webp` | 1500x1000 | land | high | Aerial courtyard workshop, colourful chairs, ATELIER CINÉ facade | — | /gallery |
| `photography/dansateliers-kids-run-yellow-chairs-2022.webp` | 1500x1000 | land | high | Man + kids running/dancing past yellow chairs, grey wall | — | /gallery |
| `photography/dansateliers-playground-kids-elder-2022.webp` | 1500x1000 | land | high | Kids dancing with elderly man, green-triangle playground backdrop | — | /gallery |
| `photography/dansateliers-square-green-print-dress-2022.webp` | 1500x1000 | land | high | Woman in green African-print dress dancing in outdoor circle | — | /gallery |
| `photography/decemberdance-brugge-contact-duo-2022.webp` | 2500x1667 | land | high | Two adults contact-improv duet, wooden floor, museum (December Dance Brugge) | Tim Theo Deceuninck | /gallery |
| `photography/decemberdance-museum-painting-visitors-2022.webp` | 2500x1667 | land | high | Dancers among visitors before old-master painting, checker floor | Tim Theo Deceuninck | /gallery |
| `photography/fiesta-bozar-square-mass-pattern.webp` | 2500x1667 | land | high | Mass public-square dance, red FIESTA banners, classical columns | — | /gallery |
| `photography/het-uur-van-de-dans-lift-support-4284.webp` | 1280x854 | land | high | Seppe + man in red lifting/supporting, kids on floor, studio | — | /gallery |
| `photography/het-uur-van-de-dans-seppe-floorwork-4297.webp` | 1280x854 | land | high | Seppe leading dynamic floor work with kids/adults, glossy studio | — | /gallery |
| `photography/leon-hall-intergen-dance-red-skirt.webp` | 2500x1668 | land | high | Indoor hall intergenerational dance, woman in red + denim, wheelchair user | Cruzz Taylor | /gallery |
| `photography/leon-in-de-klas-bench-leader-mvg3.webp` | 2500x1667 | land | high | Man on bench arms-up leading teens, backstage storeroom | Matthias Van Gysel | /gallery |
| `photography/leon-in-de-klas-chair-balance-mvg1.webp` | 2500x1667 | land | high | Teens + woman balancing on chairs, man in orange, studio | Matthias Van Gysel | /gallery |
| `photography/leon-in-de-klas-hakimi-shirt-2023.webp` | 1500x1000 | land | high | Kids + adults in studio, girl in Morocco football shirt, elderly man | Sofie De Backere | /gallery |
| `photography/leon-in-de-klas-lift-striped-jumper-2022.webp` | 1500x1000 | land | high | Group lifting a girl in striped jumper (trust exercise), red wall | — | /gallery |
| `photography/leon-in-de-klas-nolimits-tee-mvg2.webp` | 2500x1667 | land | high | Teens dancing in studio, boy in "No Limits" tee | Matthias Van Gysel | /gallery |
| `photography/leon-in-de-klas-studio-group-dec2022.webp` | 1500x1000 | land | high | Studio group moving, woman in gold-calligraphy top foreground | — | /gallery |
| `photography/leon-intergen-duet-hand-shoulder-cruzz9152.webp` | 2500x1668 | land | high | Young man + elderly woman facing, hand on shoulder, bright hall | Cruzz Taylor | /gallery |
| `photography/leon-op-het-plein-hand-chain-2023.webp` | 1500x1000 | land | high | Woman dancing holding chain of kids' hands, sunny street | — | /gallery |
| `photography/leon-op-het-plein-kids-percussion-2023.webp` | 1500x1000 | land | high | Kids playing tambourine/percussion at outdoor square, musician, Brussels | — | /gallery |
| `photography/leon-studio-intergen-walk-cruzz9220.webp` | 2500x1668 | land | high | Intergenerational walking exercise, elderly man + kids, studio | Cruzz Taylor | /gallery |
| `photography/leonalecole-masked-circle-red-top-2021.webp` | 1352x1000 | land | high | Masked teens in circle, girl in red top arm-raised, studio | — | /gallery |
| `photography/leonalecole-masked-teens-lamps-2021.webp` | 1500x1000 | land | high | Teens dancing energetically under industrial lamps, COVID masks | — | /gallery |
| `photography/mariage-blue-tulle-dancer-tents.webp` | 2500x1667 | land | high | Woman draped in blue tulle dancing, white tents, festive outdoor (Mariage) | — | /gallery |
| `photography/mariage-facade-musicians-procession-mvg2.webp` | 2500x1667 | land | high | Procession + musicians before monumental facade, kids on steps | Matthias Van Gysel | /mariage |
| `photography/mariage-garden-veil-poles-2024.webp` | 1280x854 | land | high | Teens holding white veils on poles in garden (Mariage procession workshop) | — | /gallery |
| `photography/mariage-group-photo-facade-steps-mvg4.webp` | 2500x1667 | land | high | Celebratory group photo on facade steps, white/veils, umbrella | Matthias Van Gysel | /mariage |
| `photography/mariage-kids-veils-poles-henna-2024.webp` | 1280x854 | land | high | Kids in white with henna holding veils on poles, garden (Mariage) | — | /gallery |
| `photography/mariage-lace-canopy-procession-molenfest.webp` | 1920x1258 | land | high | Procession under lace canopy on poles, green-jacket lead, square | Veerle Vercauteren | /gallery |
| `photography/mariage-procession-stone-facade-molenfest.webp` | 1920x1198 | land | high | Procession with draped white fabric along monumental stone facade | Veerle Vercauteren | /gallery |
| `photography/mariage-procession-white-dancer-mvg3.webp` | 2500x1667 | land | high | Mariage procession: white-dressed dancer, women arm-in-arm, square | Matthias Van Gysel | /mariage+/gallery |
| `photography/mariage-street-red-dress-social-dance-mvg1.webp` | 2500x1667 | land | high | Street social dance, woman in red dress, partnered hand-holds | Matthias Van Gysel | /mariage |
| `photography/mariage-three-women-lace-headbands-molenfest.webp` | 1920x1228 | land | high | Three women dancing/singing with lace headbands, golden light | Veerle Vercauteren | /missie-visie-nl |
| `photography/mariage-tulle-decor-goldenhour-molenfest.webp` | 1920x1143 | land | high | Hanging tulle decor on tents at golden hour, market square | Veerle Vercauteren | /gallery |
| `photography/mariage-two-girls-white-dresses-molenfest.webp` | 1280x1920 | port | high | Two girls in white dresses holding arms, cobblestones (KANAL Molenfest) | Veerle Vercauteren | /gallery |
| `photography/mariage-wedding-cake-photo-strip-detail.webp` | 2500x1667 | land | high | Hands holding sepia photo strip across flowered wedding cake (Mariage) | — | /gallery |
| `photography/open-street-floral-dress-dance-ivanput.webp` | 1299x866 | land | high | Woman in floral dress dancing at street party, intergenerational | Ivan Put | /gallery |
| `photography/open-street-kids-mics-ivanput7.webp` | 1299x866 | land | high | Kids with microphones performing with facilitator, summer street | Ivan Put | /gallery |
| `photography/park-child-watching-rainbow-truck.webp` | 1979x1322 | land | high | Back of child's head watching others dance, sunny park | — | /gallery |
| `photography/park-poetik-circular-social-dance-aerial.webp` | 2048x1365 | land | high | Wide circular social dance on square, red-brick building, musicians | — | /gallery |
| `photography/park-white-chairs-circle-aerial.webp` | 1979x1322 | land | high | Aerial of white-chair circle in leafy park, dappled light | — | /gallery |
| `photography/rain-embrace-greeting-redbus.webp` | 2048x1365 | land | high | Two women embracing in the rain, red bus, gallery tote | — | /gallery |
| `photography/square-elder-red-trousers-clap-circle.webp` | 2500x1667 | land | high | Elderly woman in red trousers dancing in clapping circle, square | — | /gallery |
| `photography/street-large-circle-brussels-square.webp` | 1280x854 | land | high | Wide shot: large standing circle of people on a Brussels square | — | /gallery |
| `photography/street-musicians-trio-square-molenfest.webp` | 1920x1238 | land | high | Trio of street musicians (keys/oud/guitar) on Brussels square | Veerle Vercauteren | /gallery |
| `photography/street-running-line-pizzeria-la-fleur.webp` | 1280x854 | land | high | Line of people running/dancing past Brussels shopfronts | — | /gallery |
| `photography/vub-mindblowers-kvs-motion-blur-2021.webp` | 1291x1003 | land | high | Motion-blurred crowd dancing in dark theatre, man with child | — | /gallery |
| `photography/vub-mindblowers-kvs-stage-solo-2021.webp` | 2048x1350 | land | high | Young man dancing on dark stage, blurred foreground (KVS/VUB) | — | /gallery |
| `photography/who-we-are-elder-blue-tracksuit-red-car.webp` | 1280x1920 | port | high | Portrait: elderly man in blue tracksuit leaning on red vintage car | Seppe Baeyens | /who-we-are-1 |
| `photography/winter-singing-handhold-brickwall-bw.webp` | 2500x1664 | land | high | B&W winter intergenerational singing/hand-hold by musician | — | /gallery |
| `photography/winter-square-dj-crowd-bw.webp` | 2500x1664 | land | high | B&W winter crowd dancing around outdoor electronic musician | — | /gallery |

## Catalogue — Logos (2)

| Asset | Px (rendered) | Orient | Quality | What it shows | Credit ⚠️ | On site |
|---|---|---|---|---|---|---|
| `logos/funders-vlaanderen-vgc.webp` | 554x130 | wide | brand | Funder lock-up: Vlaanderen "verbeelding werkt" + VGC "n brussel" | Vlaanderen/VGC | /contact |
| `logos/leon-wordmark-white.webp` | 845x520 | land | brand | Leon wordmark, white (used site-wide, all 12 pages) | Leon | site-wide |

⚠️ Both are **small raster renders, not vector**. The white wordmark is ~4 KB at 845 px; the
funder lock-up is 554 px wide. Usable as placeholders only — a vector/brand kit is a client
deliverable, tracked under **[Dn-10](01-concerns.md)**.

## Catalogue — Posters / flyers (2)

| Asset | Px (rendered) | Orient | Quality | What it shows | Credit ⚠️ | On site |
|---|---|---|---|---|---|---|
| `posters/events/mariage-april-2026-info-flyer.webp` | 2000x1414 | land | graphic | Mariage April 2026 info flyer — where/when, purple bg, EN/NL/FR text | Leon | /mariage-doemee |
| `posters/events/mariage-ateliers-show-poster.webp` | 2000x1414 | land | high | Mariage promo poster — crowd in white veils, "ateliers / mariage / show" + leon wordmark | Matthias Van Gysel | /mariage-doemee |

The April-2026 flyer is a **text/layout graphic** (it carries the practical info baked into
an image — the same pattern as the agenda screenshots, and a content-model concern for
[Scope](20-scope.md)/[Structure], not a reusable photograph).

## Gaps — what this library does **not** have (ask the client)

Research is a starting point, not a conclusion (principle 4). The catalogue is rich in one
register and silent in others. Before the Skeleton/Surface planes commit image slots, the
team should be asked for:

- **Brand asset kit** — vector logo(s), wordmark variants, type, colour, any house graphic
  language. Current site has only low-res raster ([Dn-10](01-concerns.md)).
- **Named-people portraits** — no clean portraits of Seppe Baeyens or the team
  (Sam/Kristin/Emma) for an About/who-we-are surface; the one portrait-orientation frame is
  an anonymous participant on tour.
- **Venue / wayfinding / context** — Atelier Leon as a place, partner venues, "where to
  find us"; the archive is action, not place.
- **Illustration / brand characters / diagrams** — none exist; if the redesign wants a
  non-photographic register it must be commissioned.
- **Coverage skew** — ~63 of 70 photos trace to the `/gallery` page; subjects cluster on
  **Atelier Leon + Mariage**. Other offers (White Page, *à l'école* beyond a few,
  *rond de tafel*, on Tour) are thin or absent. ⚠️ A photographic surface built only on this
  set would over-represent two offers.
- **Master files & a rights/credit record** — see [Dn-15](01-concerns.md). The
  media-as-social-proof decision ([Dn-06](01-concerns.md)) assumes reuse rights that are
  not yet evidenced; ~10 external photographers are named in filenames only.

## Phase 2 status (deferred)

Phase 2 of the playbook — assign each catalogued asset to a **per-page image slot** and
produce the prioritised gap list — needs the slots to exist first. Those are defined by the
**Skeleton plane (`40-skeleton.md`)**, which has **not started** (see the
[Design Plan plane table](00-design-plan.md#plane-order--status)). Phase 2 lands as
`design/91-image-map-new-site.md` once Skeleton briefs the slots; running it now would
invent slots Garrett's order forbids assuming.

## Cross-links

- Method: [Image-mapping playbook](https://www.notion.so/frederik-vincx/Playbook-Image-mapping-341d3ecc475c81b49ea6e63cfba488fe) (Notion, Phase 1).
- Source dump: `docs/raw/current-site/images.json` · `docs/raw/current-site/README.md`.
- Organised assets: `docs/raw/assets/` (`photography/`, `logos/`, `posters/events/`).
- Decision served: media-as-social-proof = [Dn-06](01-concerns.md); brand-kit gap =
  [Dn-10](01-concerns.md); new rights/credit concern = [Dn-15](01-concerns.md).
- Phase context: [Design Plan](00-design-plan.md) · [Scope](20-scope.md).
