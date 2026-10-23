</main>

<?php
$footer_map_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode(CONTACT_ADDRESS);
$footer_phone_numbers = array_merge([CONTACT_PHONE], CONTACT_MOBILES);
?>

<!-- Footer -->
<footer class="footer">
    <div class="footer-main">
        <div class="container-fluid">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="assets/images/logo-light.png" alt="Standard Exports logo" class="footer-logo-img">
                    </div>
                    <p class="footer-description">
                        Standard Exports manufactures and exports bolts, nuts, washers, cast and forged items, CNC
                        machine components, and sheet metal components.
                        Products are available in Mild Steel, EN-Series, CI, SGI and stainless steel. ISO 9001:2015
                        certified. Established in 1989.
                    </p>
                    <!-- <div class="footer-social">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div> -->
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="<?= SITE_URL ?>/">Home</a></li>
                        <li><a href="<?= SITE_URL ?>/about">About Us</a></li>
                        <li><a href="<?= SITE_URL ?>/infrastructure">Infrastructure</a></li>
                        <li><a href="<?= SITE_URL ?>/certifications">Certifications</a></li>
                        <li><a href="<?= SITE_URL ?>/contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div class="footer-col">
                    <h3 class="footer-title">Our Products</h3>
                    <ul class="footer-links">
                        <li><a href="<?= SITE_URL ?>/bolts">Bolts</a></li>
                        <li><a href="<?= SITE_URL ?>/nuts">Nuts</a></li>
                        <li><a href="<?= SITE_URL ?>/washers">Washers</a></li>
                        <li><a href="<?= SITE_URL ?>/cast-forged">Cast &amp; Forged Items</a></li>
                        <li><a href="<?= SITE_URL ?>/cnc-machine-components">CNC Machine Components</a></li>
                        <li><a href="<?= SITE_URL ?>/sheet-metal-components">Sheet Metal Components</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col">
                    <h3 class="footer-title"><a class="footer-title-link" href="<?= SITE_URL ?>/contact">Contact Us</a></h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="https://www.google.com/maps/place/STANDARD+EXPORTS/@30.894162,75.9005782,17z/data=!3m1!4b1!4m6!3m5!1s0x391a9d9baaaaaaab:0xc3befd9eeac3a2a7!8m2!3d30.894162!4d75.9005782!16s%2Fg%2F1td1btlp?entry=ttu&g_ep=EgoyMDI2MTAxOS4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank" rel="noopener noreferrer"
                                aria-label="View Standard Exports on Google Maps">
                                <?php echo htmlspecialchars(CONTACT_ADDRESS, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </li>
                        <?php foreach ($footer_phone_numbers as $phone): ?>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+91<?php echo ltrim(preg_replace('/\D+/', '', $phone), '0'); ?>">
                                    <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8'); ?>">
                                <?php echo htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </li>
                        <!-- <li>
                            <i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/<?php echo rawurlencode(WHATSAPP_PHONE); ?>?text=<?php echo rawurlencode('Hello Standard Exports, I would like to enquire about your products.'); ?>"
                                target="_blank" rel="noopener noreferrer">Chat on WhatsApp</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo date('Y'); ?> Standard Exports. All rights reserved.</p>
                <div class="footer-bottom-links">
                    <p> Designed and Developed by <a href="https://punjabit.co/" target='_blank'>Punjab IT</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/<?php echo rawurlencode(WHATSAPP_PHONE); ?>?text=<?php echo rawurlencode('Hello Standard Exports, I would like to enquire about your products.'); ?>"
    target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contact us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS -->
<script src="assets/js/main.js?v=<?php echo ASSETS_VERSION; ?>"></script>
</body>

</html>