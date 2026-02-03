# Hospital Management System – UI Design Doc

## Overall Feel

Clean, calm, and professional. The UI should instantly communicate *trust*, *clarity*, and *efficiency*—the kind of system a hospital staff can rely on during busy hours. Nothing loud, nothing playful. Subtle confidence.

The experience should feel:

* Quietly premium (not flashy)
* Low cognitive load
* Data-forward but human
* Fast and reassuring

Think **modern healthcare SaaS** rather than enterprise government software.

---

## Design Philosophy

* **Content-first**: Data is always easy to scan
* **Soft surfaces**: Cards over harsh borders
* **Hierarchy through spacing**, not heavy lines
* **Color as status**, not decoration

Flux UI will handle components — this doc defines the *vibe*, not the parts.

---

## Color System (Light Mode)

### Base

* **Background**: Soft off-white / light grey (never pure white)

  * Example: `#F6F8FA`, `#F9FAFB`
* **Surfaces (cards, panels)**: Clean white

  * Example: `#FFFFFF`

### Primary Accent

* **Medical Teal / Mint** (core brand color)

  * Used for: active states, charts, highlights, key metrics
  * Example range: `#2CB9B0`, `#6FDAD2`

### Secondary Accents (very controlled)

* **Soft Blue** → trends, charts
* **Soft Green** → available / success
* **Amber / Soft Red** → warnings, urgent, critical

> Rule: accents appear sparingly. Most UI is neutral.

### Text

* **Primary text**: Near-black, not pure black

  * `#111827`
* **Secondary text**: Muted grey

  * `#6B7280`
* **Disabled / hint text**: Light grey

  * `#9CA3AF`

---

## Status & Semantic Colors

Used consistently across the system:

* **Available / Normal** → Soft green
* **Urgent / Critical** → Muted red (never harsh)
* **Moderate / Pending** → Amber / yellow tint
* **Info / Neutral** → Blue or teal

Badges should feel *pill-like*, soft, and readable at a glance.

---

## Typography Feel

* Modern sans-serif
* High readability at small sizes
* Clear numeric alignment (important for stats)

Text hierarchy relies on:

* Size
* Weight
* Spacing

Not color.

---

## Layout & Spacing

* Generous padding (breathing room)
* Clear separation via spacing, not borders
* Cards float subtly above background
* Grid-based layout for dashboards

Dashboards should feel **scannable in 5 seconds**.

---

## Motion & Feedback

* Subtle transitions only
* Fast but soft (no sharp snaps)
* Hover states are minimal
* Loading states feel calm, not busy

No unnecessary animations.

---

## Dark Mode Philosophy

Dark mode is **not inverted light mode**.
It should feel like a *night-shift dashboard*.

### Dark Mode Feel

* Calm
* Focused
* Reduced eye strain
* Professional, not gamer-dark

---

## Color System (Dark Mode)

### Base

* **Background**: Deep blue-grey, not black

  * Example: `#0F172A`, `#111827`
* **Surfaces**: Slightly lighter than background

  * Example: `#1E293B`

### Primary Accent

* Same teal/mint, slightly desaturated

  * Example: `#5EDAD0`

### Text

* **Primary text**: Soft off-white

  * `#E5E7EB`
* **Secondary text**: Muted grey

  * `#9CA3AF`
* **Disabled text**: Dark muted grey

---

## Dark Mode Rules

* No pure black backgrounds
* No pure white text
* Reduce contrast slightly for comfort
* Status colors stay readable but softer

Charts should glow subtly, not scream.

---

## Accessibility & Usability Notes

* High contrast for critical data
* Status always readable without color alone
* Large tap targets
* Consistent placement of actions

Designed for:

* Long sessions
* Stressful environments
* Non-technical staff

---

## Final Tone Summary

If this UI had a personality, it would be:

> Calm. Reliable. Smart. Never panics.

This design should make staff feel **in control**, even on the worst day.
