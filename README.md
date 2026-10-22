# Standard Exports Website

A PHP website for Standard Exports, manufacturer and exporter of bolts, nuts, washers, and cast and forged items. The company information reflects Standard Exports' Nut Bolt Division, established in 1989, ISO 9001:2015 certification, and listed material range of Mild Steel, EN-Series, CI, SGI, and stainless steel.

## Features

- **Component-Based Architecture**: Separate header and footer components for easy maintenance
- **Smooth Animations**: AOS (Animate On Scroll) library for elegant scroll animations
- **Interactive Slider**: Swiper.js for hero section carousel
- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Clean, professional design inspired by industrial aesthetics
- **Sticky Header**: Navigation that stays visible while scrolling
- **Smooth Scrolling**: Enhanced user experience with smooth page transitions
- **Counter Animations**: Engaging statistics section with animated counters
- **Mobile Menu**: Fully functional mobile navigation

## Technologies Used

- **PHP**: Server-side scripting
- **HTML5**: Modern semantic markup
- **CSS3**: Advanced styling with flexbox and grid
- **JavaScript**: Interactive functionality
- **AOS**: Animate On Scroll library
- **Swiper.js**: Modern slider library
- **Font Awesome**: Icon library
- **Google Fonts**: Roboto and Montserrat fonts

## Project Structure

```
├── assets/
│   ├── css/
│   │   └── style.css          # Main stylesheet
│   ├── js/
│   │   └── main.js            # JavaScript functionality
│   └── images/                # Image assets
│       ├── hero-bg-1.jpg
│       ├── hero-bg-2.jpg
│       ├── hot-work-steel.jpg
│       ├── cold-work-steel.jpg
│       ├── high-speed-steel.jpg
│       ├── welding-work.jpg
│       ├── work-culture-bg.jpg
│       └── favicon.png
├── includes/
│   ├── header.php             # Header component
│   └── footer.php             # Footer component
├── index.php                  # Homepage
├── fasteners.php              # Legacy URL redirects to the bolts page
├── product-category.php       # Shared product-category page template
├── bolts.php                  # Bolts
├── nuts.php                   # Nuts
├── washers.php                # Washers
├── cast-forged.php            # Cast and forged items
└── README.md
```

## Installation

1. Clone or download this repository
2. Place the files in your web server directory (htdocs for XAMPP, www for WAMP)
3. Add your images to the `assets/images/` folder:
   - `hero-bg-1.jpg` - Main hero background (steel plant interior)
   - `hero-bg-2.jpg` - Secondary hero background
   - `hot-work-steel.jpg` - Hot work steel product image
   - `cold-work-steel.jpg` - Cold work steel product image
   - `high-speed-steel.jpg` - High speed steel product image
   - `welding-work.jpg` - Welding/manufacturing image
   - `work-culture-bg.jpg` - Work culture section background
   - `favicon.png` - Website favicon
4. Start your web server
5. Access the site through your browser (e.g., `http://localhost/your-project-name`)

## Customization

### Colors
Edit the CSS variables in `assets/css/style.css`:
```css
:root {
    --primary-color: #0a4d68;
    --secondary-color: #088395;
    --accent-color: #05bfdb;
    /* ... more variables */
}
```

### Content
- Edit `index.php` to modify homepage content
- Edit `includes/header.php` to change navigation or header
- Edit `includes/footer.php` to update footer information

### Images
Replace placeholder images in the `assets/images/` folder with your own high-quality images (recommended size: 1920x1080 for hero images)

## Main Pages

- `index.php` - Company overview and product categories
- `about.php` - Company details
- `bolts.php`, `nuts.php`, `washers.php`, `cast-forged.php` - Separate product category pages
- `gallery.php` - Product image gallery
- `contact.php` - Contact details and enquiry form

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Libraries Used

- **AOS**: https://michalsnik.github.io/aos/
- **Swiper**: https://swiperjs.com/
- **Font Awesome**: https://fontawesome.com/

## License

Free to use for personal and commercial projects.

## Credits

Design inspired by modern industrial manufacturing websites with a focus on professionalism and user experience.
