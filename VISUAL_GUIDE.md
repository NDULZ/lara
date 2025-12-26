# Visual Guide: Sidebar Menu Implementation

## Desktop View (1024px+)

```
┌──────────────────────────────────────────────────────────────────────┐
│  [Logo] ────────────────────────────────────────── [Cart] [Profile]  │
└──────────────────────────────────────────────────────────────────────┘

┌─────────────────┬───────────────────────────────────────────────────┐
│                 │                                                     │
│  Sidebar        │  Course Header                                     │
│  (25%)          │  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ │
│                 │  [Course Logo] Course Title                       │
│  ┌───────────┐  │                                                    │
│  │ Navigation │  │  [Progress Bar: 45%]                             │
│  └───────────┘  │                                                    │
│                 │  Main Content (75%)                               │
│  📚 Overview ▼  │  ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ │
│  ├─ Welcome    │                                                    │
│  ├─ Learning   │  Lorem ipsum dolor sit amet, consectetur adipisci  │
│  └─ FAQ        │  sed do eiusmod tempor incididunt ut labore et     │
│                 │  dolore magna aliqua. Ut enim ad minim veniam,    │
│  📁 Resources ▼ │                                                    │
│  ├─ Documents  │  [Content continues...]                           │
│  ├─ Videos     │                                                    │
│  └─ Links      │                                                    │
│                 │                                                    │
│  📊 Progress ▼  │                                                    │
│  ├─ Completed  │                                                    │
│  ├─ Pending    │                                                    │
│  └─ Failed     │                                                    │
│                 │                                                    │
│  🏆 Assessment ▼│                                                    │
│  ├─ Quiz       │                                                    │
│  ├─ Test       │                                                    │
│  └─ Survey     │                                                    │
│                 │                                                    │
│  📝 Support ▼   │                                                    │
│  ├─ Help       │                                                    │
│  ├─ Chat       │                                                    │
│  └─ Contact    │                                                    │
│                 │                                                    │
└─────────────────┴───────────────────────────────────────────────────┘

┌──────────────────────────────────────────────────────────────────────┐
│  Footer: © 2025 Learning Management System                            │
└──────────────────────────────────────────────────────────────────────┘
```

## Tablet View (768px - 1024px)

```
┌──────────────────────────────────────────────────────────────────────┐
│  [Logo] ────────────────────────────────────────── [Cart] [Profile]  │
└──────────────────────────────────────────────────────────────────────┘

┌──────────────┬─────────────────────────────────────────────────────┐
│ Sidebar      │ Course Header                                       │
│ (22%)        │ ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ │
│              │ [Course Logo] Course Title                         │
│ 📚 Ovrvw ▼  │ [Progress Bar]                                      │
│ 📁 Rsrcs ▼  │                                                      │
│ 📊 Prog ▼   │ Main Content (78%)                                  │
│ 🏆 Assmnt ▼  │ ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ │
│ 📝 Supp ▼    │ [Content with less padding...]                     │
│              │                                                      │
└──────────────┴─────────────────────────────────────────────────────┘

Footer
```

## Mobile View (<768px) - Default

```
┌────────────────────────────────────┐
│ [☰] [Logo] [Cart] [Profile]        │
└────────────────────────────────────┘

┌────────────────────────────────────┐
│ Course Header                      │
│ [Course Logo]                      │
│ Course Title                       │
│ [Progress Bar: 45%]                │
│                                    │
│ Main Content (Full Width)          │
│ Lorem ipsum dolor sit amet...      │
│                                    │
│ [Content continues...]             │
│                                    │
│ [More content...]                  │
└────────────────────────────────────┘

┌────────────────────────────────────┐
│ Footer                             │
└────────────────────────────────────┘
```

## Mobile View (<768px) - Menu Open

```
┌──────────────────┬────────────────┐
│ Navigation       │ Dim Content    │
│ (280px)          │ (Click to close)
│ ━━━━━━━━━━━━━━  │
│ 📚 Overview      │ Course Header  │
│  ├─ Welcome      │ [Dimmed...]    │
│  ├─ Learning     │                │
│  └─ FAQ          │ Main Content   │
│                  │ [Dimmed...]    │
│ 📁 Resources ▼   │                │
│  ├─ Documents    │ [Dimmed...]    │
│  ├─ Videos       │                │
│  └─ Links        │                │
│                  │                │
│ 📊 Progress ▼    │                │
│  ├─ Completed    │                │
│  ├─ Pending      │                │
│  └─ Failed       │                │
│                  │                │
│ 🏆 Assessment ▼  │                │
│  ├─ Quiz         │                │
│  ├─ Test         │                │
│  └─ Survey       │                │
│                  │                │
│ 📝 Support ▼     │                │
│  ├─ Help         │                │
│  ├─ Chat         │                │
│  └─ Contact      │                │
│                  │                │
│ [Scrollable]     │                │
└──────────────────┴────────────────┘
```

## Color States

### Normal State
```
┌─────────────────────────────────┐
│ Menu Item                       │ ← #f5f5f5 background
│ Text: #333 (Dark Gray)          │   #333 text
└─────────────────────────────────┘
```

### Hover State
```
┌─────────────────────────────────┐
│ Menu Item                       │ ← #f0f0f0 background
│ Text: #000 (Black)              │   #000 text
└─────────────────────────────────┘
```

### Active State
```
┌─────────────────────────────────┐
│ ████ Menu Item                  │ ← #e8e8e8 background
│ Text: #333                      │   #666 left border
└─────────────────────────────────┘
     ↑ 4px left border (active indicator)
```

### Submenu Item State
```
┌─────────────────────────────────┐
│                 Submenu Item    │ ← #fafafa background
│                 Text: #666      │   Slightly indented
└─────────────────────────────────┘
```

## Interaction States

### Collapsed Menu Group
```
📚 Overview ▼
```
Click → Opens submenu

### Expanded Menu Group
```
📚 Overview ▲
├─ Welcome
├─ Learning
└─ FAQ
```
Click → Collapses submenu

### Active Submenu Item
```
📚 Overview ▼
├─ ████ Welcome      ← Currently viewing
├─ Learning
└─ FAQ
```
Darker background + left border

## Animation Timeline

### Sidebar Slide-In (Mobile) - 300ms
```
0ms:     X████████████████████    (Hidden to left)
100ms:   ████████████████████     (Sliding in)
300ms:   ████████████████████     (Fully visible)
```

### Menu Group Collapse/Expand - 200ms
```
Expanding:
0ms:    📚 Overview ▼  (Hidden submenu)
100ms:  ├─ Welcome   (Expanding)
200ms:  ├─ Welcome
        ├─ Learning
        └─ FAQ       (Fully expanded)
```

## Responsive Breakpoint Transitions

### At 1024px → 768px (Desktop to Tablet)
```
Before (1024px):              After (768px):
┌──────────┬────────────┐    ┌──────┬──────────────┐
│ Sidebar  │ Content    │    │ Side │ Content      │
│ 25%      │ 75%        │ → │ 22%  │ 78%          │
└──────────┴────────────┘    └──────┴──────────────┘
  No changes in behavior
```

### At 768px → 767px (Tablet to Mobile)
```
Before (768px):                After (767px):
┌──────┬──────────────┐       ┌─────────────────┐
│ Side │ Content      │   →   │ [☰] Header      │
│ 22%  │ 78%          │       │                 │
└──────┴──────────────┘       │ Content (Full)  │
  Sidebar stays visible         │                 │
  Compact view                  │ [Tap ☰ to see] │
                                └─────────────────┘
  Sidebar hidden by default
```

## Focus States (Keyboard Navigation)

### Default Focus
```
📚 Overview ▼  ← Keyboard focused (outline)
├─ Welcome
└─ ...
```

### Submenu Item Focus
```
📚 Overview ▼
├─ Welcome     ← Keyboard focused (outline)
└─ FAQ
```

## Print View

```
(Sidebar hidden in print)

┌────────────────────────────────┐
│ Course Title                   │
│ Progress: 45%                  │
└────────────────────────────────┘

Main Content
[Full page width]
...
```

## Accessibility Features

### For Screen Readers
```
<aside>
  "Course Navigation sidebar"
  
  <a aria-expanded="false" aria-controls="group-1">
    "Overview, menu group, collapsed"
  
  <ul id="group-1" hidden>
    <li><a href="...">Welcome</a></li>
  </ul>
</aside>
```

### For Keyboard Users
```
Tab → Navigate through menu items
Space/Enter → Open/close menu groups
Escape → Could close sidebar (optional enhancement)
```

## Theme Colors Reference

```
Primary Colors:
- Sidebar Background: #f5f5f5
- Default Text: #333
- Secondary Text: #666
- Border: #ddd

Interactive Colors:
- Hover Background: #f0f0f0
- Active Background: #e8e8e8
- Active Border: #666
- Focus Outline: (Browser default)

Submenu Colors:
- Background: #fafafa
- Text: #666
- Active: #e8e8e8 with #666 border
```

## Size Specifications

### Sidebar Dimensions
```
Desktop: 25% of container (flexible)
Tablet:  22% of container (flexible)
Mobile:  280px (fixed, from left)
```

### Typography
```
Title:        1.1rem, font-weight: 600
Menu Group:   0.95rem, font-weight: 500
Submenu:      0.9rem, font-weight: normal
Mobile Small: Reduced by ~10%
```

### Spacing
```
Sidebar Header Padding: 1.5rem (1rem mobile)
Menu Item Padding:      0.875rem 1.5rem
Submenu Item Padding:   0.625rem 1.5rem 0.625rem 2.75rem
Border Left Width:      4px
```

---

This visual guide shows all states and layouts of the sidebar menu.
For interactive behavior, see the JavaScript documentation.
