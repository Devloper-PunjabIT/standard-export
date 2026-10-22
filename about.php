<?php
$page_title = 'About Standard Exports | Since 1989';
$current_page = 'about';
include 'includes/header.php';
?>

<section class="page-header">
    <div class="container-fluid">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo SITE_URL; ?>/">Home</a>
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span aria-current="page">About Us</span>
        </nav>
    </div>
</section>

<section class="about-profile">
    <div class="container-fluid">
        <div class="about-profile-grid">
            <div class="about-profile-copy">
                <span class="section-tag">Our Story · Since 1989</span>
                <h1>Engineering strength.<br><span>Built on experience.</span></h1>
                <p class="about-profile-lead">
                    Standard Exports is a Ludhiana-based manufacturer and exporter of bolts, nuts, washers, and cast and
                    forged items.
                </p>
                <p>
                    Operating through Standard Exports' Nut Bolt Division, the company supplies products in Mild Steel,
                    EN-Series,
                    CI, SGI, and stainless steel. Standard Exports is an ISO 9001:2015 certified company.
                </p>
                <a href="<?= SITE_URL ?>/bolts" class="btn btn-primary">Browse Bolts <i
                        class="fas fa-arrow-right"></i></a>
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
                <span><strong>Four Categories</strong><small>Bolts · Nuts · Washers · Cast &amp; Forged</small></span>
            </div>
        </div>
    </div>
</section>

<section class="about-details">
    <div class="container-fluid">
        <div class="about-details-heading">
            <span class="section-tag">Our Capabilities</span>
            <h2>Products made for industry</h2>
            <p>Explore the product categories and material options supplied by Standard Exports, alongside our company
                credentials.</p>
        </div>

        <div class="about-details-grid">
            <article class="about-detail-card about-products-card">
                <div class="about-detail-card-heading">
                    <span class="about-detail-icon"><i class="fas fa-screwdriver-wrench"></i></span>
                    <div>
                        <p class="about-detail-label">Product portfolio</p>
                        <h3>Products &amp; materials</h3>
                    </div>
                </div>
                <p>Manufactured and exported by Standard Exports' Nut Bolt Division.</p>

                <h4>Product categories</h4>
                <ul class="about-category-list">
                    <li><a href="<?= SITE_URL ?>/bolts"><span class="about-category-number">01</span><span>Bolts</span><i
                                class="fas fa-arrow-right" aria-hidden="true"></i></a></li>
                    <li><a href="<?= SITE_URL ?>/nuts"><span class="about-category-number">02</span><span>Nuts</span><i
                                class="fas fa-arrow-right" aria-hidden="true"></i></a></li>
                    <li><a href="<?= SITE_URL ?>/washers"><span class="about-category-number">03</span><span>Washers</span><i
                                class="fas fa-arrow-right" aria-hidden="true"></i></a></li>
                    <li><a href="<?= SITE_URL ?>/cast-forged"><span class="about-category-number">04</span><span>Cast &amp; Forged
                                Items</span><i class="fas fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>

                <h4>Available materials</h4>
                <ul class="about-material-list">
                    <li>Mild Steel</li>
                    <li>EN-Series</li>
                    <li>CI</li>
                    <li>SGI</li>
                    <li>Stainless Steel</li>
                </ul>
            </article>

            <article class="about-detail-card about-company-card">
                <div class="about-detail-card-heading">
                    <span class="about-detail-icon"><i class="fas fa-building"></i></span>
                    <div>
                        <p class="about-detail-label">Company profile</p>
                        <h3>Standard Exports</h3>
                    </div>
                </div>
                <p class="about-company-intro">An established manufacturing and export business based in Ludhiana,
                    Punjab, India.</p>

                <dl class="about-company-facts">
                    <div>
                        <dt>Division</dt>
                        <dd>Nut Bolt Division</dd>
                    </div>
                    <div>
                        <dt>Established</dt>
                        <dd>1989</dd>
                    </div>
                    <div>
                        <dt>Proprietor</dt>
                        <dd>Er. G.K. Arora</dd>
                    </div>
                    <div>
                        <dt>Quality certification</dt>
                        <dd>ISO 9001:2015</dd>
                    </div>
                </dl>

                <a href="<?= SITE_URL ?>/contact" class="about-contact-link">Contact our team <i class="fas fa-arrow-right"></i></a>
            </article>
        </div>
    </div>
</section>

<section class="cta-compact">
    <div class="container-fluid">
        <div class="cta-content-compact">
            <h2>Enquire with Standard Exports</h2>
            <p>Contact us about bolts, nuts, washers, and cast and forged items in our listed material range.</p>
            <div class="cta-buttons-compact">
                <a href="<?= SITE_URL ?>/contact" class="btn btn-primary">Get in Touch</a>
                <a href="<?= SITE_URL ?>/bolts" class="btn btn-outline-cta">View Bolts</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>