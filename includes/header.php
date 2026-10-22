<?php
// Include configuration
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Standard Exports manufactures and exports bolts, nuts, washers, cast and forged items in Mild Steel, EN-Series, CI, SGI and stainless steel. ISO 9001:2015 certified. Since 1989.">
    <title>
        <?php echo isset($page_title) ? $page_title : 'Standard Exports | Bolts, Nuts, Washers & Forgings'; ?>
    </title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo SITE_URL; ?>/assets/images/fav.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&family=Raleway:wght@700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS (for grid system) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css?v=<?php echo ASSETS_VERSION; ?>">
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><i class="fas fa-envelope"></i>
                        <?php echo CONTACT_EMAIL; ?></a>
                    <?php foreach (array_merge([CONTACT_PHONE], CONTACT_MOBILES) as $phone): ?>
                        <a href="tel:+91<?php echo ltrim(preg_replace('/\D+/', '', $phone), '0'); ?>">
                            <i class="fas fa-phone"></i> <?php echo $phone; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="top-bar-left right">
                    <a href="<?php echo COMPANY_WEBSITE; ?>" target="_blank" rel="noopener">
                        <i class="fas fa-globe"></i> www.standardexports.co.in
                    </a>
                    <a><i class="fas fa-map-marker-alt"></i> <?php echo CONTACT_ADDRESS; ?></a>
                    <!-- <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header" id="main-header">
        <div class="container-fluid">
            <nav class="navbar">
                <div class="logo">
                    <a href="<?php echo SITE_URL; ?>/">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo.png" alt="Standard Exports logo"
                            class="logo-img">
                    </a>
                </div>

                <ul class="nav-menu" id="nav-menu">
                    <li><a href="<?php echo SITE_URL; ?>/"
                            class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="<?= SITE_URL ?>/about"
                            class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">About Us</a></li>
                    <li class="nav-dropdown">
                        <a href="#" class="<?php echo ($current_page == 'products') ? 'active' : ''; ?>">
                            Products <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= SITE_URL ?>/bolts">Bolts</a></li>
                            <li><a href="<?= SITE_URL ?>/nuts">Nuts</a></li>
                            <li><a href="<?= SITE_URL ?>/washers">Washers</a></li>
                            <li><a href="<?= SITE_URL ?>/cast-forged">Cast &amp; Forged Items</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= SITE_URL ?>/gallery"
                            class="<?php echo ($current_page == 'gallery') ? 'active' : ''; ?>">Gallery</a></li>
                    <a href="<?= SITE_URL ?>/contact" class="btn btn-header">Get Quote</a>

                    <!-- <li><a href="<?= SITE_URL ?>/contact"
                            class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a></li> -->
                </ul>

                <!-- Mobile Sidebar Navigation -->
                <div class="mobile-sidebar" id="mobile-sidebar">
                    <div class="mobile-sidebar-header">
                        <img src="<?php echo SITE_URL; ?>/assets/images/logo-light.png" alt="Standard Exports"
                            class="mobile-logo">
                        <button class="mobile-close" id="mobile-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <ul class="mobile-nav-menu">
                        <li><a href="<?php echo SITE_URL; ?>/"
                                class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                                <i class="fas fa-home"></i> Home
                            </a></li>
                        <li><a href="<?= SITE_URL ?>/about"
                                class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                                <i class="fas fa-info-circle"></i> About Us
                            </a></li>
                        <li class="mobile-dropdown">
                            <a href="#"
                                class="mobile-dropdown-toggle <?php echo ($current_page == 'products') ? 'active' : ''; ?>">
                                <i class="fas fa-box"></i> Products <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="mobile-dropdown-menu">
                                <li><a href="<?= SITE_URL ?>/bolts">Bolts</a></li>
                                <li><a href="<?= SITE_URL ?>/nuts">Nuts</a></li>
                                <li><a href="<?= SITE_URL ?>/washers">Washers</a></li>
                                <li><a href="<?= SITE_URL ?>/cast-forged">Cast &amp; Forged
                                        Items</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= SITE_URL ?>/gallery"
                                class="<?php echo ($current_page == 'gallery') ? 'active' : ''; ?>">
                                <i class="fas fa-images"></i> Gallery
                            </a></li>
                        <li><a href="<?= SITE_URL ?>/contact"
                                class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">
                                <i class="fas fa-envelope"></i> Contact
                            </a></li>
                    </ul>
                    <div class="mobile-sidebar-footer">
                        <a href="<?= SITE_URL ?>/contact" class="btn btn-primary btn-block">Get Quote</a>
                        <div class="mobile-contact">
                            <p><i class="fas fa-phone"></i> <a href="tel:+911614506404"><?php echo CONTACT_PHONE; ?></a>
                            </p>
                            <?php foreach (CONTACT_MOBILES as $mobile): ?>
                                <p><i class="fas fa-mobile-alt"></i> <a
                                        href="tel:+91<?php echo preg_replace('/\D+/', '', $mobile); ?>"><?php echo $mobile; ?></a>
                                </p>
                            <?php endforeach; ?>
                            <p><i class="fas fa-envelope"></i> <a
                                    href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                        </div>
                    </div>
                </div>

                <!-- Mobile Overlay -->
                <div class="mobile-overlay" id="mobile-overlay"></div>

                <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <main>