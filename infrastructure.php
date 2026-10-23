<?php
$page_title = 'Infrastructure - Standard Exports';
$current_page = "infrastructure";
include 'includes/header.php';

// Load infrastructure images from external file
$infrastructure_images = include 'infrastructure-data.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container-fluid">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo SITE_URL; ?>/">Home</a>
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span aria-current="page">Infrastructure</span>
        </nav>
    </div>
</section>

<!-- Infrastructure Section -->
<section class="infrastructure-page">
    <div class="container-fluid">

        <div class="contact-intro">
            <h1>Infrastructure</h1>
            <p>Explore Standard Exports' facilities and product range, including bolts, nuts, washers, and cast and
                forged items.</p>
        </div>



        <!-- Infrastructure Image Grid -->
        <div class="infrastructure-grid">
            <?php foreach ($infrastructure_images as $index => $image): ?>
                <div class="infrastructure-item" data-image="<?php echo $image['full']; ?>"
                    data-title="<?php echo htmlspecialchars($image['title']); ?>" data-index="<?php echo $index; ?>">
                    <img src="<?php echo $image['thumb']; ?>" alt="<?php echo htmlspecialchars($image['title']); ?>">
                    <div class="infrastructure-overlay">
                        <span class="infrastructure-caption"><?php echo htmlspecialchars($image['title']); ?></span>
                    </div>
                    <div class="infrastructure-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Custom Lightbox Modal -->
<div class="lightbox-modal" id="lightbox">
    <button class="lightbox-close" id="lightbox-close">
        <i class="fas fa-times"></i>
    </button>

    <div class="lightbox-counter" id="lightbox-counter"></div>

    <button class="lightbox-nav lightbox-prev" id="lightbox-prev">
        <i class="fas fa-chevron-left"></i>
    </button>

    <div class="lightbox-content">
        <img src="" alt="" class="lightbox-image" id="lightbox-img">
    </div>

    <button class="lightbox-nav lightbox-next" id="lightbox-next">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>

<script>
    // Infrastructure image data from PHP
    const infrastructureData = <?php echo json_encode($infrastructure_images); ?>;
    let currentIndex = 0;

    // Get elements
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    const infrastructureItems = document.querySelectorAll('.infrastructure-item');

    // Open lightbox
    infrastructureItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            currentIndex = index;
            openLightbox();
        });
    });

    function openLightbox() {
        const data = infrastructureData[currentIndex];
        lightboxImg.src = data.full;
        lightboxCounter.textContent = `${currentIndex + 1} / ${infrastructureData.length}`;
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    // Close lightbox
    closeBtn.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // Navigation
    prevBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + infrastructureData.length) % infrastructureData.length;
        openLightbox();
    });

    nextBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % infrastructureData.length;
        openLightbox();
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            currentIndex = (currentIndex - 1 + infrastructureData.length) % infrastructureData.length;
            openLightbox();
        } else if (e.key === 'ArrowRight') {
            currentIndex = (currentIndex + 1) % infrastructureData.length;
            openLightbox();
        }
    });
</script>

<?php include 'includes/footer.php'; ?>