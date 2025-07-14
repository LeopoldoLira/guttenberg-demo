# Gutenberg Block Theme Demo

This is a fully working **WordPress block theme demo** built to showcase modern block development using:

- 🔧 Native Gutenberg blocks and Template Parts
- 🧱 Custom block built with `@wordpress/scripts`
- 🧩 ACF-powered custom block (ACF Pro required)
- 🎨 Full Site Editing (FSE) compatible structure

---

## 🌐 Structure Overview

```plaintext
Gutenberg-Theme-Demo/
├── functions.php
├── index.php
├── style.css
├── theme.json
├── templates/
│   └── page-home.html
├── parts/
│   ├── header.html
│   └── footer.html
├── patterns/
│   └── hero-section.php
├── template-parts/
│   └── blocks/
│       └── pricing-table.php

wp-content/plugins/
└── feature-card-block/
    ├── block.json
    ├── index.php
    └── src/
        ├── edit.js
        ├── save.js
        ├── index.js

--- 

## 🔨 Blocks Included

### 1. **Static Blocks (Template Parts)**

- **Header** (`parts/header.html`)
- **Footer** (`parts/footer.html`)

### 2. **Block Pattern**

- **Hero Section** (`patterns/hero-section.php`)
  - Registered as a reusable block pattern

### 3. **Custom Block with JavaScript**

- **Feature Card Block**
  - Built using `@wordpress/scripts` and React-based JSX
  - Located in `plugins/feature-card-block`

### 4. **Custom Block with ACF**

- **Pricing Table Block**
  - Uses `acf_register_block_type()`
  - Template rendered from `template-parts/blocks/pricing-table.php`

---

## 🚀 How to Run This Demo

1. **Clone or Copy** the theme and plugin files into your Local WordPress site.
2. **Activate the theme and plugin** from the WP Admin dashboard.
3. Ensure you have **ACF Pro installed** to use the Pricing Table block.
4. Set up a page using the `page-home.html` template.
5. Add blocks and patterns using the editor.

---

## 📚 Requirements

- WordPress 6.5+
- Node.js + NPM (for building the JS block)
- ACF Pro 5.8+ (for ACF block rendering)

---

## 🤝 Credits

Built as a personal demo project to showcase modern Gutenberg development with:

- Full Site Editing
- Custom block creation via both JS and PHP
- Component-based architecture for better reusability
