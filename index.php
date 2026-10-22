<?php
$page_title = "Standard Exports - Bolts, Nuts, Washers & Forged Items";
$current_page = "home";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide-1">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                            <p class="hero-subtitle">Standard Exports · Since 1989</p>
                            <h1 class="hero-title">Engineering Strength, Fastening Excellence.</h1>
                            <p class="hero-description">Manufacturer and exporter of bolts, nuts, washers, and cast and
                                forged items in Mild Steel, EN-Series, CI, SGI, and stainless steel.</p>
                            <div class="hero-buttons">
                                <a href="<?= SITE_URL ?>/bolts" class="btn btn-primary">Explore Bolts</a>
                                <a href="<?= SITE_URL ?>/contact" class="btn btn-secondary">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide hero-slide-2">
                <div class="hero-content">
                    <div class="container-fluid">
                        <div class="hero-text" data-aos="fade-up" data-aos-duration="1000">
                            <p class="hero-subtitle">Standard Exports' Nut Bolt Division</p>
                            <h1 class="hero-title">ISO 9001:2015 Certified Company</h1>
                            <p class="hero-description">A product range covering bolts, nuts, washers, and cast and
                                forged items, made in a selection of ferrous materials.</p>
                            <div class="hero-buttons">
                                <a href="<?= SITE_URL ?>/about" class="btn btn-primary">About Standard Exports</a>
                                <a href="<?= SITE_URL ?>/contact" class="btn btn-secondary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- About Standard Exports -->
<section class="about-profile home-about-profile">
    <div class="container-fluid">
        <div class="about-profile-grid">
            <div class="about-profile-copy">
                <span class="section-tag">Our Story · Since 1989</span>
                <h2>Engineering strength.<br><span>Built on experience.</span></h2>
                <p class="about-profile-lead">
                    Standard Exports is a Ludhiana-based manufacturer and exporter of bolts, nuts, washers, and cast and
                    forged items.
                </p>
                <p>
                    Through Standard Exports' Nut Bolt Division, we supply products in Mild Steel, EN-Series, CI, SGI,
                    and
                    stainless steel. Standard Exports is an ISO 9001:2015 certified company.
                </p>
                <a href="<?= SITE_URL ?>/about" class="btn btn-primary">Discover Our Company <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="about-profile-visual">
                <div class="about-profile-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/about.webp"
                        alt="Bolts, nuts and fasteners from Standard Exports">
                </div>
                <div class="about-certification">
                    <span class="about-certification-icon"><i class="fas fa-certificate"></i></span>
                    <span><strong>ISO 9001:2015</strong><small>Certified Company</small></span>
                </div>
                <div class="about-founded"><strong>1989</strong><span>Established</span></div>
            </div>
        </div>

        <div class="about-facts" aria-label="Standard Exports at a glance">
            <div class="about-fact">
                <span class="about-fact-icon"><i class="fas fa-industry"></i></span>
                <span><strong>Since 1989</strong><small>Standard Exports</small></span>
            </div>
            <div class="about-fact">
                <span class="about-fact-icon"><i class="fas fa-award"></i></span>
                <span><strong>ISO 9001:2015</strong><small>Certified Company</small></span>
            </div>
            <div class="about-fact">
                <span class="about-fact-icon"><i class="fas fa-cubes"></i></span>
                <span><strong>Five Material Options</strong><small>Mild Steel · EN-Series · CI · SGI · Stainless
                        Steel</small></span>
            </div>
        </div>
    </div>
</section>


<!-- Product Categories -->
<section class="product-categories">
    <div class="container-fluid">
        <div class="section-header">
            <span class="section-tag">Standard Exports' Nut Bolt Division</span>
            <h2>Bolts, Nuts, Washers &amp; Forged Items</h2>
            <p>Standard Exports manufactures and exports the products and materials listed below.</p>
        </div>

        <div class="category-grid">
            <div class="category-item-img">
                <div class="category-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/bolts.jpg"
                        alt="Bolts manufactured by Standard Exports">

                </div>
                <div class="category-content">
                    <h3>Bolts</h3>
                    <p>Bolts supplied by Standard Exports in the listed material options.</p>
                    <a href="<?= SITE_URL ?>/bolts" class="category-link"><span>Explore bolts</span><i
                            class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="category-item-img">
                <div class="category-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/nuts.jpg"
                        alt="Nuts manufactured by Standard Exports">

                </div>
                <div class="category-content">
                    <h3>Nuts</h3>
                    <p>Nuts manufactured and exported as part of Standard Exports' Nut Bolt Division.</p>
                    <a href="<?= SITE_URL ?>/nuts" class="category-link"><span>Explore nuts</span><i
                            class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="category-item-img">
                <div class="category-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/washers.webp"
                        alt="Washers manufactured by Standard Exports">
                </div>
                <div class="category-content">
                    <h3>Washers</h3>
                    <p>Washers for industrial fastening requirements, available in the listed material range.</p>
                    <a href="<?= SITE_URL ?>/washers" class="category-link"><span>Explore washers</span><i
                            class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="category-item-img">
                <div class="category-image">
                    <img src="<?php echo SITE_URL; ?>/assets/images/forged.jpeg"
                        alt="Cast and forged items from Standard Exports">

                </div>
                <div class="category-content">
                    <h3>Cast &amp; Forged Items</h3>
                    <p>Cast and forged items manufactured and exported by Standard Exports.</p>
                    <a href="<?= SITE_URL ?>/cast-forged" class="category-link"><span>Explore cast &amp; forged</span><i
                            class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Statistics -->
<section class="stats-compact">
    <div class="container-fluid">
        <div class="stats-heading">
            <span>Standard Exports</span>
            <h2>Experience, quality and product range</h2>
        </div>
        <div class="stats-grid-compact">
            <div class="stat-item-compact">
                <h3>1989</h3>
                <p>Established</p>
            </div>
            <div class="stat-item-compact">
                <h3>ISO 9001:2015</h3>
                <p>Quality certification</p>
            </div>
            <div class="stat-item-compact">
                <h3>05</h3>
                <p>Material options</p>
            </div>
            <div class="stat-item-compact">
                <h3>04</h3>
                <p>Product categories</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-compact">
    <div class="container-fluid">
        <div class="cta-content-compact">
            <h2>Request a Quote</h2>
            <p>Contact Standard Exports for enquiries about bolts, nuts, washers, and cast and forged items.</p>
            <div class="cta-buttons-compact">
                <a href="<?= SITE_URL ?>/contact" class="btn btn-primary">Contact Us</a>
                <a href="tel:+91<?php echo preg_replace('/\D+/', '', CONTACT_MOBILES[0]); ?>"
                    class="btn btn-outline-cta"><i class="fas fa-phone"></i> <?php echo CONTACT_MOBILES[0]; ?></a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>