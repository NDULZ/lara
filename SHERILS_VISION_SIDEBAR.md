# Sidebar Menu Implementation for sherils_vision Template

## Summary

The LMS course menu in the **sherils_vision template only** has been converted from a horizontal dropdown selector to a **persistent vertical sidebar** on the left side of the page.

## What Was Changed

### Files Created (sherils_vision template only)

1. **`templates/sherils_vision/layout/partials/sidebar.html.twig`**
   - New sidebar navigation component
   - Renders menu groups and submenu items
   - Fully accessible with ARIA attributes

2. **`templates/sherils_vision/style/lms-sidebar.css`**
   - Complete sidebar styling
   - Responsive design (desktop, tablet, mobile)
   - Clean gray theme matching sherils_vision design
   - Smooth animations and transitions

3. **`templates/sherils_vision/script/lms-sidebar.js`**
   - Sidebar toggle functionality
   - Menu group collapse/expand handling
   - Mobile responsiveness (slide-in/out)
   - Automatic close when clicking outside

### Files Modified (sherils_vision template only)

1. **`templates/sherils_vision/layout/lms.html.twig`**
   - Added sidebar CSS include
   - Added sidebar JavaScript include
   - Changed main content layout to two-column
   - Included sidebar partial
   - Wrapped content with flex container

## Layout Changes

### Before
```
┌─────────────────────────────────────────────┐
│ [LOGO] [DROPDOWN MENU] [CART] [PROFILE]    │ (Header)
├─────────────────────────────────────────────┤
│                                             │
│  [Course Title with Dropdown Selector]      │
│  [Horizontal Menu Bar]                      │
│  [Progress Bar]                             │
│                                             │
│  [Main Content Area - Full Width]           │
│                                             │
├─────────────────────────────────────────────┤
│ Footer                                      │
└─────────────────────────────────────────────┘
```

### After
```
┌──────────────┬─────────────────────────────┐
│ LOGO | MENU  │ CART | PROFILE              │ (Header)
├──────────────┼─────────────────────────────┤
│ Navigation   │ Course Header               │
│ ───────────  │ [Course Title]              │
│ Group 1 ▼    │ [Progress Bar]              │
│  └─ Item 1   │                             │
│  └─ Item 2   │ [Main Content - 75% width] │
│              │                             │
│ Group 2 ▼    │                             │
│  └─ Item 3   │                             │
│  └─ Item 4   │                             │
│              │                             │
│ Group 3 ▼    │                             │
│  └─ Item 5   │                             │
│              │                             │
├──────────────┴─────────────────────────────┤
│ Footer                                      │
└─────────────────────────────────────────────┘
```

## Features

### Desktop (≥769px)
- Sidebar always visible on the left
- Takes 25% width, content takes 75%
- Menu groups can be collapsed/expanded
- Active items highlighted
- Scrollable when menu exceeds viewport height

### Tablet (769px - 1024px)
- Sidebar still visible but slightly narrower
- Same functionality as desktop

### Mobile (<769px)
- Sidebar hidden by default
- Toggle button appears in sidebar header
- Sidebar slides in from left when toggled
- Automatically closes when:
  - A menu item is clicked
  - User clicks outside the sidebar
  - Window is resized back to desktop size

## Design Details

### Color Scheme
- Background: Light gray (#f5f5f5)
- Menu items: Dark gray text (#333)
- Hover: Light gray background (#f0f0f0)
- Active: Slightly darker background (#e8e8e8) with left border
- Submenu: Lighter background (#fafafa)
- Border: Light gray (#ddd)

### Typography
- Title: 1.1rem, 600 weight
- Menu group: 0.95rem, 500 weight
- Submenu: 0.9rem, normal weight
- Responsive: Smaller on mobile devices

### Spacing
- Padding: 1.5rem for header, 0.875rem for menu items
- Submenu indent: 2.75rem (extra indentation for hierarchy)
- Border: 4px left border for active states

## No Impact on Standard Template

The **standard template** (used by default) remains **unchanged**. The sidebar is only implemented in the sherils_vision template.

- Standard template continues to use the original horizontal dropdown menu
- Both templates share the same `appLms/menu/menu_lat.php` backend
- Template selection is configured per domain/instance

## Browser Support

- Chrome/Edge (latest versions)
- Firefox (latest versions)
- Safari (latest versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Testing Checklist

- [x] Desktop view (>1024px) - sidebar visible, proper layout
- [x] Tablet view (768-1024px) - sidebar visible, responsive
- [x] Mobile view (<768px) - sidebar collapsible, toggle works
- [x] Menu collapse/expand - works on all menu items
- [x] Click outside - closes sidebar on mobile
- [x] Window resize - sidebar adapts when resizing
- [x] Active states - correct highlighting
- [x] All links navigate correctly
- [x] Responsive font sizes
- [x] Scrolling in sidebar

## Developer Notes

### Data Source
The sidebar receives data from the `dropdown` template variable, which comes from the LMS menu system (`appLms/menu/menu_lat.php`). No changes to the backend menu system are required.

### Menu Data Structure
```twig
dropdown = [
    {
        id_menu: 1,
        name: "Menu Group Name",
        selected: true/false,
        slider_menu: [
            { name: "Item Name", link: "url", selected: true/false },
            ...
        ]
    },
    ...
]
```

### Customization
To customize the sidebar appearance:
1. Edit `templates/sherils_vision/style/lms-sidebar.css` for styles
2. Edit `templates/sherils_vision/layout/partials/sidebar.html.twig` for structure
3. Edit `templates/sherils_vision/script/lms-sidebar.js` for behavior

### Bootstrap Dependency
The sidebar uses Bootstrap's collapse component (`data-toggle="collapse"`). Ensure Bootstrap JS is loaded (it is by default in the base template).

## Known Limitations

1. Menu items are displayed from the same `dropdown` data as before - no additional menu items are available
2. Sidebar width is fixed at 25% on desktop - can be changed in CSS
3. No smooth scroll to active item on page load (can be added in JS)
4. Sidebar header is sticky but not scrollable independently

## Future Enhancements

- Add icons to menu items
- Implement search/filter functionality
- Add smooth scroll to active section
- Sidebar collapse toggle (expand/collapse all)
- Custom color themes per domain
- Sidebar position toggle (left/right)
