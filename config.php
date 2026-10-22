<?php
/**
 * Website Configuration File
 * Update these settings according to your needs
 */

// Site Information
define('SITE_NAME', 'Standard Exports');
define('SITE_URL', 'http://localhost/standard-export');

// Contact Information
define('CONTACT_EMAIL', 'info@standardexports.co.in');
define('CONTACT_PHONE', '0161-4506404');
define('CONTACT_MOBILES', ['94170-44404', '94172-06404']);
define('WHATSAPP_PHONE', '919417044404');
define('CONTACT_ADDRESS', 'E-208, Phase-IV, Focal Point, Ludhiana, Punjab - 141010');
define('COMPANY_PERSON', 'Er. G.K. Arora');
define('COMPANY_WEBSITE', 'https://www.standardexports.co.in');
define('COMPANY_NAME', 'Standard Exports');

// Asset Versioning (for cache busting - update this when you change CSS/JS files)
define('ASSETS_VERSION', '2.6.1'); // Change this version whenever you update CSS/JS files

// SMTP Email Configuration
define('SMTP_HOST', 'smtp.gmail.com');          // SMTP server (e.g., smtp.gmail.com for Gmail)
define('SMTP_PORT', 587);                        // SMTP port (587 for TLS, 465 for SSL)
define('SMTP_USERNAME', ''); // Your email address
define('SMTP_PASSWORD', '');    // Your email password or app-specific password
define('SMTP_FROM_EMAIL', ''); // From email address
define('SMTP_FROM_NAME', 'Standard Exports'); // From name

// Timezone
date_default_timezone_set('Asia/Kolkata');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>