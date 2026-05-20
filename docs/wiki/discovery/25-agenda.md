---
title: Agenda — Extracted Text (Mar–May 2026)
tags: [agenda, events, evidence, accessibility]
sources: [current-site/pages/agenda.md, "leon.dance/agenda", agenda-image-1..6, client-meeting-2026-05-19]
phase: discovery
updated: 2026-05-19
---

# Agenda — Extracted Text (Mar–May 2026)

The live `/agenda` page (heading **"Maart - Mei 2026"**) has **no text**: the entire
schedule is delivered as **7 flat image files** (6 unique + 1 duplicated in markup),
each a wide screenshot of a table. This page is the **machine-readable transcription**
of those images, captured 2026-05-19, so the agenda can be queried, cross-checked and
reasoned about. See [Site Audit](20-site-audit.md) (row 7) and
[Technical Context](24-technical-context.md) for why this is a redesign driver.

**65 dated entries**, 3 Mar → 30 May 2026. Columns transcribed verbatim; venue text
is normalised in the table and given verbatim under [Venues](#venues).

## Headline observations

- **⚠️ Of 65 entries, only ~2 are public performances.** `Show Mariage` on
  **10/04 19u00 (Cultureghem)** and **26/04 15u00 (BRONKS)** are the only clearly
  public-facing shows. `Leon on tour x Opening De Loods` (15/03) and
  `Atelier Leon x FIESTA` (30/05) read as semi-public events. The remaining ~61 are
  **internal workshop / in-school logistics** (`Atelier …`, `… in de klas`). The
  public website's only "agenda" is overwhelmingly an internal rota — consistent with
  [What Is the Website Actually For?](11-website-purpose.md).
- **⚠️ The images are out of chronological order on the page.** Visual order is
  img1 (3–14 Mar) → img2 (**26 Mar–7 Apr**) → img3 (**15–25 Mar**) → img4 (8–19 Apr)
  → img5 (22–30 Apr) → img6 (6–30 May). A reader scanning top-to-bottom hits April
  before mid-March.
- **⚠️ The last image (`f8466cd3…`, itself captured 2026-04-27) is duplicated** in the
  page markup (`agenda.md` lines 29 & 31) — same image rendered twice.
- **⚠️ Addresses are NL/FR hybrids** ("Rue du Fortstraat", "Rue Mommaertsstraat",
  "Nijverheidskaai 170 Quai de l'Industrie"). "De Loods" street is spelled
  *Opzichterstraat* in img3 and *Opzichtersstraat* in img6 — source inconsistency.
- Image-only ⇒ **not crawlable, not screen-reader accessible, not translatable, no
  per-event links/booking, no calendar feed.**

## Schedule (chronological)

Times verbatim (Dutch "u" = `:`). Source time spacing is inconsistent
(e.g. `10u00 -12u00`, `16u00 - 18u00`); normalised here to `HHuMM–HHuMM`.

### March 2026

| Date  | Time        | Activity                        | Lead            | Venue                 |
| ----- | ----------- | ------------------------------- | --------------- | --------------------- |
| 03/03 | 13u30–15u00 | Mariage in de klas              | Kristin, Adnane | BRONKS                |
| 03/03 | 15u30–17u00 | Atelier Mariage x MUS-E         | Adnane          | GBS Kameleon          |
| 04/03 | 14u00–16u00 | Atelier Mariage x Ketmet        | Seppe           | Cultureghem           |
| 04/03 | 16u00–18u00 | Atelier Leon                    | Lena            | Pianofabriek          |
| 05/03 | 09u30–11u30 | Leon in de klas                 | Stef            | Maison des Cultures   |
| 07/03 | 10u00–12u00 | Atelier Leon x Mariage          | Seppe           | Maison des Cultures   |
| 10/03 | 13u30–15u00 | Mariage in de klas              | Kristin, Adnane | BRONKS                |
| 10/03 | 15u30–17u00 | Atelier Mariage x MUS-E         | Adnane          | GBS Kameleon          |
| 11/03 | 14u00–16u00 | Atelier Mariage x Ketmet        | Adnane          | Cultureghem           |
| 11/03 | 16u00–18u00 | Atelier Leon                    | Lena            | Pianofabriek          |
| 12/03 | 09u30–11u30 | Leon in de klas                 | Stef            | Maison des Cultures   |
| 14/03 | 10u00–12u00 | Atelier Leon x Mariage          | Fanny           | Maison des Cultures   |
| 15/03 | 13u00–17u00 | Leon on tour x Opening De Loods | Team Leon       | De Loods ('t Zinneke) |
| 16/03 | 10u30–12u00 | Mariage in de klas              | Seppe           | RITCS                 |
| 17/03 | 13u30–15u00 | Mariage in de klas              | Kristin, Adnane | BRONKS                |
| 17/03 | 15u30–17u00 | Atelier Mariage x MUS-E         | Kristin, Adnane | GBS Kameleon          |
| 18/03 | 14u00–16u00 | Atelier Mariage x Ketmet        | Seppe           | Cultureghem           |
| 18/03 | 16u00–18u00 | Atelier Leon                    | Lena            | Pianofabriek          |
| 19/03 | 09u30–11u30 | Leon in de klas                 | Stef            | Maison des Cultures   |
| 21/03 | 10u00–12u00 | Atelier Leon x Mariage          | Seppe           | Maison des Cultures   |
| 23/03 | 10u30–12u00 | Mariage in de klas              | Seppe           | RITCS                 |
| 24/03 | 13u30–15u00 | Mariage in de klas              | Kristin, Adnane | BRONKS                |
| 24/03 | 15u30–17u00 | Atelier Mariage x MUS-E         | Adnane          | GBS Kameleon          |
| 25/03 | 14u00–16u00 | Atelier Mariage x Ketmet        | Adnane          | Cultureghem           |
| 25/03 | 16u00–18u00 | Atelier Leon                    | Lena            | Pianofabriek          |
| 26/03 | 09u30–11u30 | Leon in de klas                 | Seppe           | Maison des Cultures   |
| 28/03 | 10u00–12u00 | Atelier Leon x Mariage          | Fanny           | Maison des Cultures   |
| 30/03 | 10u30–12u00 | Mariage in de klas              | Seppe           | RITCS                 |
| 31/03 | 13u30–15u00 | Mariage in de klas              | Kristin, Adnane | BRONKS                |
| 31/03 | 15u30–17u00 | Atelier Mariage x MUS-E         | Kristin, Adnane | GBS Kameleon          |

### April 2026

| Date | Time | Activity | Lead | Venue |
|------|------|----------|------|-------|
| 01/04 | 14u00–16u00 | Atelier Mariage x Ketmet | Seppe | Cultureghem |
| 01/04 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 02/04 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |
| 07/04 | 14u00–16u00 | Atelier Mariage | Seppe, Lena | Cultureghem |
| 08/04 | 14u00–16u00 | Atelier Mariage | Team Leon | Cultureghem |
| 09/04 | 14u00–16u00 | Atelier Mariage | Team Leon | Cultureghem |
| 10/04 | 17u00–18u45 | Atelier Mariage | Team Leon | Cultureghem |
| **10/04** | **19u00–20u15** | **Show Mariage** *(public)* | Team Leon | Cultureghem |
| 11/04 | 10u00–12u00 | Atelier Leon x Mariage | Seppe | Maison des Cultures |
| 15/04 | 12u30–16u30 | Atelier Mariage | Team Leon | BRONKS |
| 16/04 | 12u30–16u30 | Atelier Mariage | Team Leon | BRONKS |
| 17/04 | 12u30–16u30 | Atelier Mariage | Team Leon | BRONKS |
| 18/04 | 10u00–12u00 | Atelier Leon x Mariage | Adnane | Maison des Cultures |
| 19/04 | 12u30–16u30 | Atelier Mariage | Team Leon | BRONKS |
| 22/04 | 12u30–16u30 | Atelier Mariage | Team Leon | BRONKS |
| 22/04 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 23/04 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |
| 25/04 | 10u00–12u00 | Atelier Leon x Mariage | Seppe | Maison des Cultures |
| 26/04 | 13u00–14u45 | Atelier Mariage | Team Leon | BRONKS |
| **26/04** | **15u00–16u15** | **Show Mariage** *(public)* | Team Leon | BRONKS |
| 29/04 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 30/04 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |

### May 2026

| Date | Time | Activity | Lead | Venue |
|------|------|----------|------|-------|
| 06/05 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 07/05 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |
| 07/05 | 12u30–14u30 | Leon in de klas | Seppe | De Loods |
| 13/05 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 16/05 | 10u00–12u00 | Atelier Leon | Seppe | Maison des Cultures |
| 20/05 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 21/05 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |
| 21/05 | 12u30–14u30 | Leon in de klas | Seppe | De Loods |
| 23/05 | 10u00–12u00 | Atelier Leon | Fanny | Maison des Cultures |
| 27/05 | 16u00–18u00 | Atelier Leon | Lena | Pianofabriek |
| 28/05 | 09u30–11u30 | Leon in de klas | Stef | Maison des Cultures |
| 28/05 | 12u30–14u30 | Leon in de klas | Seppe | De Loods |
| 30/05 | 15u00–17u00 | Atelier Leon x FIESTA | Team Leon | Maison des Cultures |

## Venues

Verbatim source strings (NL/FR hybrids preserved):

| Short name | Verbatim source address |
|------------|-------------------------|
| BRONKS | BRONKS - Varkensmarkt 15 Rue du Marché aux Porcs, 1000 Brussel |
| GBS Kameleon | GBS Kameleon - Rue Ropsy Chaudronstraat 7, 1070 Anderlecht |
| Cultureghem | Cultureghem - Rue Ropsy Chaudronstraat 24, 1070 Anderlecht |
| Pianofabriek | Pianofabriek - Rue du Fortstraat 35, 1060 St-Gillis |
| Maison des Cultures | Maison des Cultures - Rue Mommaertsstraat 4, 1080 Molenbeek |
| RITCS | RITCS - Nijverheidskaai 170 Quai de l'Industrie, 1070 Anderlecht |
| De Loods | De Loods, 't Zinneke - Opzichterstraat 225, 1080 Molenbeek *(also "Opzichtersstraat 225" in img6)* |

## Source provenance

`/agenda` is image-only. Files captured 2026-05-19 (Squarespace CDN), order = on-page order:

1. `…/6d9e8182-…/Scherm­afbeelding 2026-02-12 om 01.24.20.png` — 3–14 Mar (12 rows)
2. `…/5cf6d09f-…/Scherm­afbeelding 2026-02-12 om 01.46.59.png` — 26 Mar–7 Apr (9 rows)
3. `…/2b8b9bfd-…/Scherm­afbeelding 2026-02-12 om 01.25.49.png` — 15–25 Mar (13 rows)
4. `…/717938a1-…/Scherm­afbeelding 2026-02-12 om 01.26.34.png` — 8–19 Apr (10 rows)
5. `…/af341218-…/Scherm­afbeelding 2026-02-12 om 01.26.50.png` — 22–30 Apr (8 rows)
6. `…/f8466cd3-…/Scherm­afbeelding 2026-04-27 om 11.06.50.png` — 6–30 May (13 rows; rendered twice)

Files are WebP served with a `.png` URL. Each was downloaded, converted, and read
left-half + right-half at full resolution to transcribe accurately (text is too small
to read reliably from the downscaled full image).

**Resolved (client, 2026-05-19):** the image files are literal **screenshots** (filenames
*"Schermafbeelding …"* corroborate it) — the agenda is built in **Excel**, screenshotted, and
pasted into Squarespace, **maintained by Kristin** (comms), updated against a separate
planning Excel. It is kept current period-to-period but its shape changes (e.g. summer
stages). See [Client Kickoff §5](12-client-kickoff-2026-05-19.md#5-the-agenda--confirmed-mechanics-and-purpose).
**Still open:** are `Show Mariage` (10/04, 26/04) ticketed or free walk-in? (*Mariage* is
"gratis, geen reservatie" per the offer pages — ⚠️ presumed free, not explicitly confirmed.)
