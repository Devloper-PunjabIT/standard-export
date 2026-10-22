<?php
$page_title = 'Contact Standard Exports | Ludhiana';
$current_page = 'contact';
include 'includes/header.php';

// Check for success/error messages from URL
$success = isset($_GET['success']) && $_GET['success'] == '1';
$error = $_GET['error'] ?? '';
$map_query = rawurlencode(CONTACT_ADDRESS . ', India');
$map_url = 'https://www.google.com/maps/search/?api=1&query=' . $map_query;
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container-fluid">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo SITE_URL; ?>/">Home</a>
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span aria-current="page">Contact Us</span>
        </nav>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container-fluid">
        <div class="contact-intro">
            <span class="section-tag">We’re here to help</span>
            <h1>Let’s discuss your requirements</h1>
            <p>Reach our team by phone, email, or visit us at our Ludhiana office. For product enquiries, send us a message and we’ll get back to you.</p>
        </div>
        <div class="contact-info-grid">
            <div class="contact-info-card-new">
                <span class="contact-card-icon"><i class="fas fa-phone"></i></span>
                <p class="contact-card-label">Call our team</p>
                <h3>Speak with us</h3>
                <div class="contact-card-links contact-card-links-inline">
                    <a href="tel:+91<?php echo ltrim(preg_replace('/\D+/', '', CONTACT_PHONE), '0'); ?>"><?php echo htmlspecialchars(CONTACT_PHONE, ENT_QUOTES, 'UTF-8'); ?></a>
                    <?php foreach (CONTACT_MOBILES as $mobile): ?>
                        <a href="tel:+91<?php echo ltrim(preg_replace('/\D+/', '', $mobile), '0'); ?>"><?php echo htmlspecialchars($mobile, ENT_QUOTES, 'UTF-8'); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="contact-info-card-new">
                <span class="contact-card-icon"><i class="fas fa-envelope"></i></span>
                <p class="contact-card-label">Email enquiries</p>
                <h3>Send us an email</h3>
                <div class="contact-card-links">
                    <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL, ENT_QUOTES, 'UTF-8'); ?></a>
                </div>
            </div>
            <div class="contact-info-card-new">
                <span class="contact-card-icon"><i class="fas fa-location-dot"></i></span>
                <p class="contact-card-label">Visit us</p>
                <h3>Standard Exports</h3>
                <div class="contact-card-links">
                    <a href="https://www.google.com/maps/place/STANDARD+EXPORTS/@30.894162,75.9005782,17z/data=!3m1!4b1!4m6!3m5!1s0x391a9d9baaaaaaab:0xc3befd9eeac3a2a7!8m2!3d30.894162!4d75.9005782!16s%2Fg%2F1td1btlp?entry=ttu&g_ep=EgoyMDI2MTAxOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
                        <?php echo htmlspecialchars(CONTACT_ADDRESS, ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </div>

        <!-- Form and Map Section -->
        <div class="contact-form-map-wrapper">
            <!-- Contact Form -->
            <div class="contact-form-container">
                <div class="form-header">
                    <span class="contact-form-kicker">Product enquiry</span>
                    <h2>Product Enquiry</h2>
                    <p>Tell us what you’re looking for and our team will be in touch.</p>
                </div>

                <?php if ($success): ?>
                <div class="alert alert-success" role="status">
                    <i class="fas fa-check-circle"></i> Thank you for contacting us! Your message has been sent successfully. We'll get back to you soon.
                </div>
                <?php endif; ?>

                <?php if ($error): ?>
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-circle"></i> 
                    <?php
                    switch ($error) {
                        case 'missing_fields':
                            echo 'Please fill in all required fields.';
                            break;
                        case 'invalid_email':
                            echo 'Please enter a valid email address.';
                            break;
                        case 'sending_failed':
                            echo 'Sorry, there was an error sending your message. Please try again or contact us directly.';
                            break;
                        default:
                            echo 'An error occurred. Please try again.';
                    }
                    ?>
                </div>
                <?php endif; ?>

                <form action="<?= SITE_URL ?>/send-email" method="POST" class="contact-form-new" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Full Name <span class="required">*</span></label>
                            <input type="text" class="form-input" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email Address <span class="required">*</span></label>
                            <input type="email" class="form-input" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                            <input type="tel" class="form-input" id="phone" name="phone" placeholder="Enter your phone">
                        </div>
                        <div class="form-group">
                            <label for="subject"><i class="fas fa-tag"></i> Subject</label>
                            <input type="text" class="form-input" id="subject" name="subject" placeholder="Enter subject">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message"><i class="fas fa-comment-dots"></i> Message <span class="required">*</span></label>
                        <textarea class="form-input" id="message" name="message" rows="6" placeholder="Write your message here..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <div class="contact-location-card">
                <div class="contact-location-heading">
                    <div>
                        <span class="contact-form-kicker">Find us</span>
                        <h2>Visit Standard Exports</h2>
                        <p><?php echo htmlspecialchars(CONTACT_ADDRESS, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                    <a class="contact-map-link" href="<?php echo htmlspecialchars($map_url, ENT_QUOTES, 'UTF-8'); ?>"
                        target="_blank" rel="noopener noreferrer">
                        Open map <i class="fas fa-arrow-up-right-from-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="map-container-new">
                    <iframe
                        src="https://www.google.com/maps?q=<?php echo $map_query; ?>&amp;output=embed"
                        title="Map showing the Standard Exports office in Ludhiana"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
