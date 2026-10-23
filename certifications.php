<?php
$page_title = 'Certifications - Standard Exports';
$current_page = 'certifications';
include 'includes/header.php';

$certifications = [
    [
        'name' => 'ISO 9001:2015',
        'category' => 'Quality Management',
        'description' => 'An international standard for quality management systems and consistent quality processes.',
        'icon' => 'fa-award',
    ],
    [
        'name' => 'Lean Manufacturing',
        'category' => 'Manufacturing Excellence',
        'description' => 'Recognition of lean manufacturing practices focused on efficiency and continuous improvement.',
        'icon' => 'fa-gears',
    ],
    [
        'name' => 'ZED Certification',
        'category' => 'Zero Defect Zero Effect',
        'description' => 'A quality and sustainability-focused certification supporting responsible manufacturing.',
        'icon' => 'fa-leaf',
    ],
];
?>

<section class="page-header">
    <div class="container-fluid">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo SITE_URL; ?>/">Home</a>
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span aria-current="page">Certifications</span>
        </nav>
    </div>
</section>

<section class="certifications-section">
    <div class="container-fluid">
        <header class="certifications-heading">
            <span class="section-tag">Our Commitment</span>
            <h1>Certifications and Standards</h1>
            <p>Our certifications reflect a commitment to quality management, manufacturing excellence, and responsible
                production.</p>
        </header>

        <div class="certifications-grid">
            <?php foreach ($certifications as $certification): ?>
                <article class="certification-card">
                    <div class="certification-card-top">
                        <span class="certification-icon" aria-hidden="true">
                            <i class="fas <?php echo htmlspecialchars($certification['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                        </span>
                        <span class="certification-status">
                            <i class="fas fa-circle-check" aria-hidden="true"></i> Certified
                        </span>
                    </div>
                    <p class="certification-category">
                        <?php echo htmlspecialchars($certification['category'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <h2><?php echo htmlspecialchars($certification['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="certification-description">
                        <?php echo htmlspecialchars($certification['description'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <div class="certification-card-footer">
                        <span>Standard Exports</span>
                        <i class="fas fa-certificate" aria-hidden="true"></i>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="certifications-contact">
            <p>For certificate copies or further details, please contact our team.</p>
            <a href="<?= SITE_URL ?>/contact" class="btn btn-primary">Contact Us <i class="fas fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
