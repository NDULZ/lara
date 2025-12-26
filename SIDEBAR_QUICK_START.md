# Quick Start: Sidebar Menu for sherils_vision

## What's New?

The sherils_vision template now has a **sidebar menu** instead of a horizontal dropdown. The standard template remains **unchanged**.

## Visual Overview

**Before (Original):**
- Horizontal menu dropdown at top of page
- Selected in coursemenu_lat.html.twig

**After (sherils_vision only):**
- Vertical sidebar on left (25% of width)
- Menu groups collapsible
- Mobile-responsive toggle

## Files Modified/Created

### sherils_vision Template Only:

✅ **Created (New):**
- `templates/sherils_vision/layout/partials/sidebar.html.twig` - Sidebar component
- `templates/sherils_vision/style/lms-sidebar.css` - Sidebar styling (300+ lines)
- `templates/sherils_vision/script/lms-sidebar.js` - Sidebar interactions

📝 **Modified:**
- `templates/sherils_vision/layout/lms.html.twig` - Added sidebar include and CSS/JS

❌ **Standard Template:**
- No changes - continues to use original menu system

## How It Works

### Desktop Layout
```
+────────────────────────────────────────────────+
│ Header with Logo and Top Navigation            │
+────────────────┬────────────────────────────────+
│                │                                 │
│ Sidebar Menu   │ Course Header                  │
│ (25% width)    │ + Main Content (75% width)     │
│ - Group 1 ▼    │                                 │
│   - Item A     │                                 │
│   - Item B     │                                 │
│ - Group 2 ▼    │                                 │
│   - Item C     │                                 │
│                │                                 │
+────────────────┴────────────────────────────────+
│ Footer                                          │
+────────────────────────────────────────────────+
```

### Mobile Layout
```
Mobile (< 768px):
┌─────────────────────────────────────┐
│ [☰] Header with Logo                │ ← Toggle button
├─────────────────────────────────────┤
│ [Course Header - Full Width]        │
├─────────────────────────────────────┤
│ [Main Content - Full Width]         │
├─────────────────────────────────────┤
│ Footer                              │
└─────────────────────────────────────┘

When toggled, sidebar slides in from left:
┌──────────────┬──────────────────────┐
│ Sidebar Menu │ Dimmed content       │
│ (280px)      │ (click to close)     │
└──────────────┴──────────────────────┘
```

## Configuration

### Menu Data (From PHP)
Menu comes from: `appLms/menu/menu_lat.php`
- No changes required to PHP
- Template automatically uses the `dropdown` variable
- Same menu items as before, new display

### CSS Customization

Edit `templates/sherils_vision/style/lms-sidebar.css`:

**Change sidebar width:**
```css
.lms-sidebar {
    flex: 0 0 25%;      /* Change this percentage */
    max-width: 25%;     /* Change this percentage */
}
```

**Change colors:**
```css
.lms-sidebar { background-color: #f5f5f5; }                    /* Sidebar BG */
.nav-item.nav-menu-group > .nav-link { color: #333; }         /* Text color */
.nav-item.nav-menu-group > .nav-link.active { color: #333; }  /* Active text */
```

**Change spacing:**
```css
.nav-item.nav-menu-group > .nav-link { padding: 0.875rem 1.5rem; }
.nav-sub-item > .nav-link { padding: 0.625rem 1.5rem 0.625rem 2.75rem; }
```

## Testing

### Desktop (1024px+)
1. Open sherils_vision template
2. Sidebar should be visible on left
3. Click menu items to expand/collapse
4. Click any submenu item to navigate

### Tablet (768px - 1024px)
1. Resize window to 800px
2. Sidebar should still be visible
3. All interactions should work

### Mobile (<768px)
1. Resize window to 400px or open on phone
2. Sidebar should be hidden
3. Click hamburger menu (☰) icon to toggle
4. Sidebar should slide in from left
5. Click any menu item to navigate
6. Sidebar should close automatically
7. Click outside sidebar to close it

## Files Overview

| File | Size | Purpose |
|------|------|---------|
| `sidebar.html.twig` | ~40 lines | Sidebar HTML structure |
| `lms-sidebar.css` | ~300 lines | All styling + responsive |
| `lms-sidebar.js` | ~90 lines | Toggle, collapse, responsive behavior |
| `lms.html.twig` | Modified | Added includes + layout changes |

## Key Features

✓ **Responsive Design**
  - Desktop: Fixed sidebar
  - Mobile: Collapsible toggle

✓ **Accessibility**
  - ARIA labels for screen readers
  - Keyboard navigable
  - Semantic HTML

✓ **Performance**
  - Minimal JavaScript
  - No jQuery required (uses vanilla JS)
  - Uses CSS transitions for smooth animations

✓ **Compatibility**
  - Works with existing menu system
  - No backend changes needed
  - Bootstrap collapse support

## Troubleshooting

**Sidebar not showing?**
- Check browser console for errors
- Verify CSS file loaded: `lms-sidebar.css`
- Confirm template is sherils_vision, not standard

**Toggle button not working?**
- Check JS file loaded: `lms-sidebar.js`
- Verify Bootstrap JS is loaded
- Check browser console for errors

**Layout broken?**
- Clear browser cache (Ctrl+Shift+Delete)
- Check CSS conflicts with existing stylesheets
- Verify responsive breakpoints in CSS

**Menu items not collapsing?**
- Bootstrap collapse requires JS
- Check that Bootstrap is properly loaded
- Verify `data-toggle="collapse"` in HTML

## Next Steps

1. **Test on different devices** - Desktop, tablet, phone
2. **Check in multiple browsers** - Chrome, Firefox, Safari
3. **Customize colors/spacing** if desired in CSS
4. **Get user feedback** on new layout
5. **Consider A/B testing** with sample users

## Support

Documentation files created:
- `SHERILS_VISION_SIDEBAR.md` - Detailed implementation guide
- This file - Quick reference

For detailed customization: See SHERILS_VISION_SIDEBAR.md

## Standard Template Note

The **standard template** remains unchanged. If you want the sidebar on the standard template too, those files would need to be created/modified separately.

To apply to standard template:
1. Copy `lms-sidebar.css` to `templates/standard/style/`
2. Copy `lms-sidebar.js` to `templates/standard/script/`
3. Create `templates/standard/layout/partials/sidebar.html.twig`
4. Update `templates/standard/layout/lms.html.twig`

But this is **not required** - standard template continues to work as-is.
