const hidePageLoader = () => {
    document.documentElement.classList.remove('has-page-loader');
};

if (document.readyState === 'complete') {
    hidePageLoader();
} else {
    window.addEventListener('load', hidePageLoader, { once: true });
}

// ================================
// Initialize AOS (Animate On Scroll)
// ================================
AOS.init({
    duration: 600,
    once: false,
    offset: 100,
    easing: 'ease-in-out',
    mirror: true
});

// ================================
// Hero Swiper Slider
// ================================
const heroSwiper = new Swiper('.hero-swiper', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    speed: 1000,
    // effect: 'fade',
    // fadeEffect: {
    //     crossFade: true
    // },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    on: {
        slideChange: function () {
            // Reset animations for all slides
            const allSlides = document.querySelectorAll('.swiper-slide');
            allSlides.forEach(slide => {
                const elements = slide.querySelectorAll('.hero-subtitle, .hero-title, .hero-description, .btn');
                elements.forEach(el => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(40px)';
                });
            });
            
            // Trigger animations for active slide
            setTimeout(() => {
                const activeSlide = document.querySelector('.swiper-slide-active');
                if (activeSlide) {
                    const elements = activeSlide.querySelectorAll('.hero-subtitle, .hero-title, .hero-description, .btn');
                    elements.forEach((el, index) => {
                        setTimeout(() => {
                            el.style.opacity = '1';
                            el.style.transform = 'translateY(0)';
                        }, index * 200);
                    });
                }
            }, 100);
        },
        init: function() {
            // Initialize first slide animation
            setTimeout(() => {
                const activeSlide = document.querySelector('.swiper-slide-active');
                if (activeSlide) {
                    const elements = activeSlide.querySelectorAll('.hero-subtitle, .hero-title, .hero-description, .btn');
                    elements.forEach((el, index) => {
                        setTimeout(() => {
                            el.style.opacity = '1';
                            el.style.transform = 'translateY(0)';
                        }, index * 200 + 300);
                    });
                }
            }, 100);
        }
    }
});

const productCategorySwiperElement = document.querySelector('.product-category-swiper');
if (productCategorySwiperElement) {
    new Swiper(productCategorySwiperElement, {
        loop: true,
        speed: 700,
        spaceBetween: 22,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.product-category-next',
            prevEl: '.product-category-prev',
        },
        pagination: {
            el: '.product-category-pagination',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            1100: {
                slidesPerView: 4,
            },
        },
    });
}

// ================================
// Mobile Menu Toggle
// ================================
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileSidebar = document.getElementById('mobile-sidebar');
const mobileOverlay = document.getElementById('mobile-overlay');
const mobileClose = document.getElementById('mobile-close');

// Open mobile sidebar
mobileMenuToggle.addEventListener('click', () => {
    mobileSidebar.classList.add('active');
    mobileOverlay.classList.add('active');
    mobileMenuToggle.classList.add('active');
    document.body.style.overflow = 'hidden';
});

// Close mobile sidebar
const closeMobileSidebar = () => {
    mobileSidebar.classList.remove('active');
    mobileOverlay.classList.remove('active');
    mobileMenuToggle.classList.remove('active');
    document.body.style.overflow = '';
};

mobileClose.addEventListener('click', closeMobileSidebar);
mobileOverlay.addEventListener('click', closeMobileSidebar);

// Mobile dropdown toggle
const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
mobileDropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = toggle.parentElement;
        
        // If this is a nested dropdown, handle it separately
        if (parent.classList.contains('mobile-dropdown-nested')) {
            parent.classList.toggle('active');
        } else if (parent.classList.contains('mobile-dropdown')) {
            parent.classList.toggle('active');
        }
    });
});

// Close mobile sidebar when clicking on a non-dropdown link
const mobileNavLinks = document.querySelectorAll('.mobile-nav-menu > li > a:not(.mobile-dropdown-toggle), .mobile-dropdown-menu a:not(.mobile-dropdown-toggle), .mobile-dropdown-submenu a');
mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
        closeMobileSidebar();
    });
});


// ================================
// Back to Top Button
// ================================
const backToTopBtn = document.getElementById('back-to-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.add('show');
    } else {
        backToTopBtn.classList.remove('show');
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});


// ================================
// Counter Animation for Statistics
// ================================
const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
};

const animateCounter = (element) => {
    const target = parseInt(element.textContent.replace(/[^0-9]/g, ''));
    const suffix = element.textContent.replace(/[0-9]/g, '');
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    
    const updateCounter = () => {
        current += increment;
        if (current < target) {
            element.textContent = Math.floor(current) + suffix;
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target + suffix;
        }
    };
    
    updateCounter();
};

const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
            entry.target.classList.add('animated');
            animateCounter(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.stat-number').forEach(stat => {
    statsObserver.observe(stat);
});

// ================================
// Smooth Scroll with Header Offset
// ================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        
        // Skip if it's just '#' or empty
        if (href === '#' || href === '') {
            return;
        }
        
        const targetId = href.substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            e.preventDefault();
            
            // Get header height for offset
            const header = document.querySelector('.main-header');
            const headerHeight = header ? header.offsetHeight : 0;
            const topBar = document.querySelector('.top-bar');
            const topBarHeight = topBar ? topBar.offsetHeight : 0;
            const offset = headerHeight + topBarHeight + 20; // Add 20px extra padding
            
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});
