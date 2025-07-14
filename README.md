# Gutenberg Block Theme Demo

This is a fully working **WordPress block theme demo** built to showcase modern block development using:

- 🔧 Native Gutenberg blocks and Template Parts
- 🧱 Custom block built with `@wordpress/scripts`
- 🧩 ACF-powered custom block (ACF Pro required)
- 🎨 Full Site Editing (FSE) compatible structure

---

## 🌐 Structure Overview

```plaintext
your-theme/
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