---
title: Image Map — Slot Map onto the New Site (Phase 2)
tags: [design, assets, images, media, slot-map]
sources: [image-mapping-playbook (Notion), 90-image-map.md, 42-briefs, resources/views]
phase: design
updated: 2026-05-29
---

# Image Map — Slot Map onto the New Site (Phase 2)

Phase 2 of the [Image-mapping playbook](https://www.notion.so/frederik-vincx/Playbook-Image-mapping-341d3ecc475c81b49ea6e63cfba488fe)
(**assign catalogued assets to per-page image slots, identify the gaps**). Phase 1
catalogued the library ([90-image-map.md](90-image-map.md)); this page maps those assets
onto the slots the Skeleton briefs and built views actually expose. The mapping is **wired**:
the assets named below are copied into `public/img/` and referenced from the page views (and
from `App\Support\SiteSections::work()` for the shared cards), so this document records the
as-built state, not a proposal.

**Slot types in the views:** a commented-out / live `partials/photo-block.blade.php` include
(SP-13), a wireframe placeholder `DIV` with a `[Beeld — …]` span, or a `partials/project-card`
include with an optional `image`. The project-card and placeholder-div slot types render **no
credit field**, so catalogue credits are recorded in the Note column but not shown on those
surfaces. Credits only surface where the photo-block carries them.

**Status legend:** ✅ Have it (asset wired) · ⚠️ Candidate (best-but-unconfirmed, needs a
Surface decision) · ❌ Missing (no honest match in the library, left as a gap).

## Home

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 hero photo (SP-13) | ✅ | `car-free-street-intergen-play-ivanput.webp` | Brusselaars dansen samen in een autovrije straat, een man in een grijze hoodie gaat voorop, een kind in het rood danst mee. | Photo-block uncommented, full-width default, credit © Ivan Put. Landscape street frame answers the hero promise (wekelijks samen dansen, intergenerationeel, open lucht). |

## Dansateliers & performances (hub)

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §1 hero | ✅ | `square-elder-red-trousers-clap-circle.webp` | Een oudere vrouw in een rode broek danst mee in een klapcirkel op een plein, mensen van verschillende leeftijden rondom. | Placeholder-div wired (aspect-[4/3] wrapper kept, object-cover img). Distinct frame from the home §2 photo, which keeps `car-free-street-intergen-play-ivanput.webp`. |
| §2 doe-zelf-mee beeld | ✅ | `leon-studio-intergen-walk-cruzz9220.webp` | Intergenerationele wandeloefening in de studio: een oudere man en kinderen bewegen samen door de ruimte. | Placeholder-div; existing deelnemer-quote figure kept as caption (© Cruzz Taylor). |
| §3 op-locatie beeld | ✅ | `leon-in-de-klas-chair-balance-mvg1.webp` | Tieners en een vrouw balanceren op stoelen in een studio tijdens een traject op locatie, een man in het oranje begeleidt. | Placeholder-div, aspect-[3/2] + md:col-span-2 wrapper kept (© Matthias Van Gysel). |
| card: Atelier Leon | ✅ | `atelier-leon-square-laugh-sing-2021.webp` | Een lachende man en een zingende jongeman op een geplaveid plein tijdens Atelier Leon. | project-card image+imageAlt; placeholder removed (© Rozenn Quere). |
| card: Mariage | ✅ | `mariage-procession-white-dancer-mvg3.webp` | Mariage-processie op een plein: een danser in het wit en vrouwen arm in arm. | project-card; open-call badge logic kept (© Matthias Van Gysel). |
| card: Leon op school | ✅ | `leon-in-de-klas-bench-leader-mvg3.webp` | Een man staat op een bank met de armen omhoog en leidt een groep tieners in een ruimte op school. | project-card image+imageAlt (© Matthias Van Gysel). |
| card: Mobiele dansstudio | ❌ | — | | No photo of the mobiele dansstudio as a movable space; placeholder `[Beeld — de studio op locatie]` left intact. |

## Atelier Leon

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 hero photo (SP-13) | ✅ | `leon-studio-intergen-walk-cruzz9220.webp` | Deelnemers van verschillende leeftijden lopen samen door de studio tijdens een open atelier, een oudere man en kinderen bewegen mee. | Photo-block uncommented, full-width, credit © Cruzz Taylor. Indoor intergenerational walking exercise reads as the open-atelier format. |

## Leon op school

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 photo (SP-13) | ✅ | `leon-in-de-klas-bench-leader-mvg3.webp` | Een man staat op een bank met de armen omhoog en gaat voor met een groep tieners in een atelier op school. | Photo-block uncommented, full-width, credit © Matthias Van Gysel. Klas-in-beweging frame, not a portrait. |

## Mariage

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 hero media | ⚠️ | — | Optocht van Mariage: een danser in het wit en vrouwen arm in arm op een plein. | The §2 figure is a live Vimeo trailer embed, not a photo placeholder. Nothing to wire minimally. If the team swaps the trailer for a still, `mariage-procession-white-dancer-mvg3.webp` (© Matthias Van Gysel) is the strongest fit. |

## Mariage editie

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 per-editie hero (SP-13) | ❌ | — | | Dynamic per-record hero (one view renders every editie: Brussel 2024, Antwerpen 2024, …). Catalogue has no asset tied to a specific city/year, so a single generic Mariage frame would falsely stamp every editie. Correct fix is per-editie photography stored per record. Section collapses until then. |

## Mobiele dansstudio

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 photo (SP-13, full-width) | ❌ | — | | No photo of the physical mobiele dansstudio on location. Catalogue is action, not place. Commented-out photo-block left collapsed per SP-13 contract. |

## Samenwerken — Opzetten

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §4 card: Mariage | ✅ | `mariage-procession-white-dancer-mvg3.webp` | Mariage-processie op een plein: een danser in het wit, vrouwen arm in arm. | project-card image+imageAlt; SP-05 16/9 cover. No credit slot (© Matthias Van Gysel). |
| §4 card: Leon op school | ✅ | `leon-in-de-klas-chair-balance-mvg1.webp` | Jongeren en een vrouw balanceren op stoelen in een studio, een man in oranje danst mee. | project-card image+imageAlt; no credit slot (© Matthias Van Gysel). |

## Over Leon — Impact

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §6 closing photo (SP-13, contained) | ✅ | `leon-studio-intergen-walk-cruzz9220.webp` | Intergenerationele wandeloefening in de studio: een oudere man danst samen met kinderen. | Photo-block uncommented, variant contained (container-text width), credit © Cruzz Taylor, caption "Atelier Leon, Pianofabriek". |

## Over Leon — Team

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 Kerngroep person cards (Seppe, Sam, Kristin, Isabelle) | ❌ | — | | Cards are intentionally text-only in v1 (BG-3 "No portraits in v1"). Catalogue has no clean named-people portraits. Structure left unchanged. |

## Over Leon — Historiek

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §6 editorial photo (SP-13, contained) | ⚠️ | `mariage-facade-musicians-procession-mvg2.webp` | Optocht met muzikanten voor een monumentale gevel, kinderen op de trappen, tijdens Mariage. | Photo-block uncommented, contained, credit © Matthias Van Gysel, caption "Mariage, première op MolenFest in Molenbeek, 2024." Catalogue has no Atelier Quartier 2017 or Birds-tour frame, so this is the only honestly matching lineage subject. Surface should confirm a Mariage frame is the right anchor versus collapsing §6. |

## Over Leon — Contact

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §3 Kom langs — OSM map | ❌ | — | | A live Leaflet/OpenStreetMap embed (Ossegemstraat 53), not a photo slot. Catalogue lacks venue/wayfinding photography. Left untouched. |

## Atelier Leon — detail (per venue)

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| §2 photo (SP-13) | ❌ | — | Mensen van verschillende leeftijden dansen samen in een binnenzaal, een vrouw in het rood en spijkerbroek, een rolstoelgebruiker mee in de groep. | Dynamic per-record slot (path keyed on `$atelier->slug`), renders for every venue. Candidate `leon-hall-intergen-dance-red-skirt.webp` is action, not the specific zaal as a place. Catalogue has no venue/place asset. Left collapsed until one place-photo per venue arrives. |
| §5 De eerste keer hier | ✅ | `atelier-leon-seppe-circle-2023.webp` | Iemand vangt een nieuwe deelnemer op in een zittende kring in de studio, mensen van verschillende leeftijden rondom. | Section made two-column (text left, image right). A welcoming studio frame, not venue-specific, so it works for every venue and echoes "er is altijd iemand die je opvangt". |

## Shared project-cards — `SiteSections::work()`

| Slot | Status | Asset (img/…) | Alt | Note |
|------|--------|---------------|-----|------|
| Atelier Leon | ✅ | `atelier-leon-pink-trousers-joy-dkeyzer1.webp` | Man in roze broek danst tussen een groep buiten in het atelier. | Landscape, high. Credit Bernard de Keyzer (no card credit slot). |
| Leon op school | ✅ | `leon-in-de-klas-hakimi-shirt-2023.webp` | Kinderen en volwassenen dansen samen in een studio tijdens een schooltraject. | Landscape, high. Credit Sofie De Backere. |
| Mariage | ✅ | `mariage-procession-white-dancer-mvg3.webp` | Stoet van Mariage op een plein, met een danser in het wit en vrouwen arm in arm. | Landscape, high. Credit Matthias Van Gysel. |
| Mobiele dansstudio | ❌ | — | | No honest portable-studio/venue photo; library is action, not place. Left without an image. |

## Gap priority

Every ❌ (and the dynamic/team-blocked slots) pulled into one prioritised list. 🔴 high
(home / dansateliers hub / atelier-leon / mariage and flagship slots) · 🟡 medium · 🟢 low.

| Priority | Page · Slot | What's needed |
|----------|-------------|---------------|
| 🔴 | Mariage · §2 hero media | A decision (and asset) for the hero: keep the Vimeo trailer or swap in an SP-13 still. `mariage-procession-white-dancer-mvg3.webp` is the standby if a still is chosen. |
| 🔴 | Mariage editie · §2 per-editie hero | Per-editie photography stored per record (e.g. an `editie->hero_image` field), one frame per city/year, so the section can stop collapsing. |
| 🟡 | Dansateliers hub · card: Mobiele dansstudio | A landscape photo of the mobiele dansstudio as a movable space on a square/school/festival. |
| 🟡 | Mobiele dansstudio · §2 photo | Same: an editorial frame of the physical movable studio on location. |
| 🟡 | Shared cards · Mobiele dansstudio | Same portable-studio cover; until then the card runs without an image. |
| 🟡 | Atelier Leon detail · §2 photo (per venue) | One place-photo per venue (Pianofabriek-zaal, Maison-des-Cultures-zaal, …) to make each plek herkenbaar. |
| 🟢 | Team · Kerngroep person cards | Rights-cleared portrait set for Seppe / Sam / Kristin / Isabelle (BG-3 keeps v1 text-only by design). |
| 🟢 | Contact · §3 Kom langs | Not a photo gap: a Leaflet/OSM map widget (already wired); no catalogue asset belongs here. |

## Cross-links

- Phase 1 catalogue: [90-image-map.md](90-image-map.md) (assets, dimensions, credits, gaps).
- Method: [Image-mapping playbook](https://www.notion.so/frederik-vincx/Playbook-Image-mapping-341d3ecc475c81b49ea6e63cfba488fe) (Notion, Phase 2).
- Slot sources: page briefs under [42-briefs/](42-briefs/) and the built `resources/views/`.
- Decision served: media-as-social-proof = [Dn-06](01-concerns.md); rights/credit = [Dn-15](01-concerns.md).
