# Tailwind Blank Theme

A clean, minimal WordPress theme built with Tailwind CSS.

## Features

- ✨ Built with Tailwind CSS v3
- 📱 Fully responsive design
- 🎨 Easy to customize
- ⚡ Lightweight and performant
- 🔧 Includes template tags and functions for common tasks
- 🎯 WordPress best practices

## Installation

1. Extract the theme folder to `/wp-content/themes/`
2. Activate the theme in WordPress admin panel

## Setup & Development

### Requirements

- Node.js (v14 or higher)
- npm or yarn

### Installation Steps

1. Navigate to the theme directory:
```bash
cd wp-content/themes/tailwind-blank
```

2. Install dependencies:
```bash
npm install
```

3. Start development mode (watches for changes):
```bash
npm run dev
```

4. Build for production (minified):
```bash
npm run build
```

## File Structure

```
tailwind-blank/
├── src/
│   └── style.css          # Tailwind CSS source file
├── dist/
│   └── style.css          # Compiled CSS (generated)
├── inc/
│   ├── template-tags.php  # Custom template tags
│   └── template-functions.php # Template functions
├── index.php              # Main template file
├── header.php             # Header template
├── footer.php             # Footer template
├── sidebar.php            # Sidebar template
├── functions.php          # Theme functions
├── style.css              # Theme header & styles
├── tailwind.config.js     # Tailwind configuration
├── postcss.config.js      # PostCSS configuration
└── package.json           # Dependencies
```

## Customization

### Adding Custom Colors

Edit `tailwind.config.js`:

```javascript
theme: {
  extend: {
    colors: {
      primary: '#3B82F6',
      secondary: '#1E293B',
    },
  },
}
```

### Adding Custom Fonts

Edit `tailwind.config.js`:

```javascript
theme: {
  extend: {
    fontFamily: {
      sans: ['Your Font', 'sans-serif'],
    },
  },
}
```

## Browser Support

This theme supports all modern browsers and requires CSS Grid and Flexbox support.

## License

GPL v2 or later - see LICENSE file for details

## Support

For issues or questions, please create an issue in the theme repository.
# Portfolio-2026
