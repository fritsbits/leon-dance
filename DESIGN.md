# Leon — design tokens

Wireframe phase. Grayscale only, system fonts, no brand decisions yet.
When huisstijl arrives, the designer edits `:root` in `resources/css/app.css` —
no markup changes required.

Source of truth at runtime: `:root` in `resources/css/app.css`.

## Colour (grayscale)

| Token | Wireframe | Use |
|---|---|---|
| `--color-text` | `#111827` | Body text, primary button background, logo |
| `--color-text-muted` | `#4b5563` | Secondary copy, lead paragraphs |
| `--color-text-faint` | `#9ca3af` | Meta, captions, timestamps |
| `--color-border` | `#e5e7eb` | Section dividers, card edges |
| `--color-border-subtle` | `#f3f4f6` | Internal dividers, hairlines |
| `--color-surface` | `#ffffff` | Default background |
| `--color-surface-muted` | `#f9fafb` | Alternate section background |
| `--color-hover` | `#f3f4f6` | Ghost-button hover, row hover |

Destructive (rare): `#dc2626`. Success (rare): `#16a34a`. Nothing else coloured in v1.

## Radius

One value, everywhere.

| Token | Value |
|---|---|
| `--radius` | `0.375rem` |

## Spacing scale (approved only)

`1, 2, 3, 4, 6, 8, 12, 16, 24` (Tailwind units → 4px-base, all 8px-compatible at common steps).
Never `5, 7, 9, 11, …`.

## Vertical rhythm

| Token | Value | Breakpoint |
|---|---|---|
| `--section-y-sm` | `3rem`  | `< 768px` |
| `--section-y-md` | `4rem`  | `768–1024` |
| `--section-y-lg` | `6rem`  | `> 1024` |

Apply via `.section` class; never inline `py-N`.

## Containers

| Token | Value | Use |
|---|---|---|
| `--max-content` | `56rem` | Text-heavy sections |
| `--max-wide`    | `80rem` | Full-width sections |
| `--max-prose`   | `65ch`  | Long-form reading |

## Typography

- Family: `system-ui, -apple-system, sans-serif`. **No Google Fonts.**
- Banned wireframe-phase fonts: Inter, Roboto, Poppins, Montserrat, Space Grotesk, Geist Sans, Instrument Sans.
- Weights: `400` body · `500` labels / wireframe headings · `600` reserved for Surface phase.
- h1 fluid: `clamp(2rem, 5.5vw, 3.5rem)`, line-height `1.1`.
- Body `1rem`, labels `0.875rem`, caption `0.75rem` (accessibility floor).

## Buttons (three tiers)

`.btn-primary` — solid dark · primary CTA.
`.btn-ghost`   — outlined · secondary.
`.btn-text`    — text-only · tertiary, underline on hover.

All three: `h-9 px-4 text-sm font-medium`, `--radius`. Never hand-rolled.

## Focus ring

`:focus-visible { outline: 2px solid var(--color-text); outline-offset: 2px; }`.
Never `box-shadow`, never `focus:ring-blue-*`.

## Borders over shadows

Borders for layout structure. `shadow-sm` only for dropdowns/popovers; `shadow-lg` only for modals.
No coloured drop shadows. No glassmorphism / backdrop-blur.

## Banned (encoded in CLAUDE.md)

Purple/indigo/blue gradients · gradient text · glassmorphism · `border-left` accent stripes ·
nested cards · hero-metric + sparkline templates · emoji in UI labels · multiple radii ·
coloured drop shadows · Google Fonts.
