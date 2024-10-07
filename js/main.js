document.addEventListener('DOMContentLoaded', function () {
    // Function to initialize before-after slider for each active slide
    function initializeBeforeAfter(slide) {
        const sliderHandle = slide.querySelector('.slider-handle');
        const afterImage = slide.querySelector('.after-image');
        const beforeAfterContainer = slide.querySelector('.before-after-container');
        const lineDivider = slide.querySelector('.line-divider');
        
        let isDragging = false;

        function updateClip(x) {
            const containerRect = beforeAfterContainer.getBoundingClientRect();
            const percentage = (x - containerRect.left) / containerRect.width;
            const clampedPercentage = Math.max(0, Math.min(1, percentage));
            afterImage.style.clipPath = `inset(0 ${100 - clampedPercentage * 100}% 0 0)`;
            sliderHandle.style.left = `${clampedPercentage * 100}%`;
            lineDivider.style.left = `${clampedPercentage * 100}%`; // Update line divider position
        }

        function onPointerMove(e) {
            if (isDragging) {
                const containerRect = beforeAfterContainer.getBoundingClientRect();
                const x = Math.max(containerRect.left, Math.min(e.clientX, containerRect.right));
                updateClip(x);
            }
        }

        function onPointerDown(e) {
            isDragging = true;
            // Remove transitions immediately
            afterImage.style.transition = 'none';
            sliderHandle.style.transition = 'none';
            lineDivider.style.transition = 'none';

            const x = e.clientX;
            updateClip(x); // Initialize position
            document.addEventListener('pointermove', onPointerMove);
            document.addEventListener('pointerup', onPointerUp, { once: true });
        }

        function onPointerUp() {
            isDragging = false;
            // Reapply smooth transition after dragging
            afterImage.style.transition = 'clip-path 0.3s';
            sliderHandle.style.transition = 'left 0.3s';
            lineDivider.style.transition = 'left 0.3s';
            document.removeEventListener('pointermove', onPointerMove);
        }

        sliderHandle.addEventListener('pointerdown', onPointerDown);

        // Touch support for mobile
        sliderHandle.addEventListener('touchstart', function(e) {
            e.preventDefault();
            isDragging = true;
            afterImage.style.transition = 'none'; // No transition during drag
            sliderHandle.style.transition = 'none';
            lineDivider.style.transition = 'none';

            const x = e.touches[0].clientX;
            updateClip(x);
            document.addEventListener('touchmove', onTouchMove);
            document.addEventListener('touchend', onTouchEnd, { once: true });
        });

        function onTouchMove(e) {
            if (isDragging) {
                const containerRect = beforeAfterContainer.getBoundingClientRect();
                const x = e.touches[0].clientX;
                const xClamped = Math.max(containerRect.left, Math.min(x, containerRect.right));
                updateClip(xClamped);
            }
        }

        function onTouchEnd() {
            isDragging = false;
            afterImage.style.transition = 'clip-path 0.3s'; // Reapply transition
            sliderHandle.style.transition = 'left 0.3s';
            lineDivider.style.transition = 'left 0.3s';
            document.removeEventListener('touchmove', onTouchMove);
        }
    }

    // Swiper initialization with disabled touch move
    var swiper = new Swiper('.swiper-container', {
        lazy: true,
        preloadImages: false,
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 30,
        centeredSlides: true,
        grabCursor: true,
        allowTouchMove: false, // Enable touch/swipe navigation for mobile
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 'auto',
                spaceBetween: 30
            }
        },
        on: {
            init: function () {
                this.slides.forEach(initializeBeforeAfter);
            },
            slideChangeTransitionEnd: function () {
                updateSwiperStyles(this);
            },
            resize: function () {
                this.update(); // Update Swiper on window resize
            }
        }
    });
    // Update slide opacity/scale based on active slide
    function updateSwiperStyles(swiper) {
        swiper.slides.forEach(function (slide, index) {
            if (slide.classList.contains('swiper-slide-active')) {
                slide.style.opacity = "1";
                slide.style.transform = "scale(1)";
            } else if (slide.classList.contains('swiper-slide-prev') || slide.classList.contains('swiper-slide-next')) {
                slide.style.opacity = "0.7";
                slide.style.transform = "scale(0.9)";
            } else {
                slide.style.opacity = "0.5";
                slide.style.transform = "scale(0.9)";
            }
        });
    }
});
window.onload = function() {
    document.querySelectorAll('.swiper-section, .animate-item').forEach(item => {
        item.style.opacity = "1"; // Ensure items are loaded before animation starts
    });
};

document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll('section');
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                const section = entry.target;
                if (index % 2 === 0) {
                    section.classList.add('animate-slide-right');
                } else {
                    section.classList.add('animate-slide-left');
                }
                observer.unobserve(section); // Stop observing after adding class
            }
        });
    }, options);

    sections.forEach(section => {
        observer.observe(section);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // ... (keep existing code for Swiper and mobile menu)

    // New code for scroll animations
    const animatedItems = document.querySelectorAll('.card, .card2, .section-item, .swiper-section');
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-item');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    animatedItems.forEach(item => {
        observer.observe(item);
    });
});

let lastScrollY = 0;
let isMobileMenuOpen = false;

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburger = document.querySelector('.icon');
    const navbarContainer = document.querySelector(".navbar-container");

    let lastScrollY = 0;
    let isMobileMenuOpen = false;

    function showNavbar() {
        navbarContainer.style.transform = "translateY(0)";
        navbarContainer.style.transition = "transform 0.3s ease-in-out";
    }

    function hideNavbar() {
        if (!isMobileMenuOpen && window.innerWidth <= 979) {
            navbarContainer.style.transform = "translateY(-100%)";
            navbarContainer.style.transition = "transform 0.3s ease-in-out";
        }
    }

    function toggleMobileMenu() {
        isMobileMenuOpen = !isMobileMenuOpen;

        if (isMobileMenuOpen) {
            mobileMenu.style.display = 'flex';
            const height = mobileMenu.scrollHeight + 'px'; // Get the full height
            mobileMenu.style.height = height; // Set height to enable transition
            mobileMenu.style.opacity = '1'; // Fade in
            mobileMenu.classList.add('open');
        } else {
            mobileMenu.style.height = '0'; // Collapse the menu
            mobileMenu.style.opacity = '0'; // Fade out
            mobileMenu.classList.remove('open');
            setTimeout(() => {
                if (!isMobileMenuOpen) {
                    mobileMenu.style.display = 'none'; // Hide completely after transition
                }
            }, 300); // Match the transition duration
        }

        hamburger.classList.toggle('open');
        document.body.style.overflow = isMobileMenuOpen ? 'hidden' : '';
    }

    mobileMenuButton.addEventListener('click', toggleMobileMenu);

    // Close mobile menu when a menu item is clicked
    mobileMenu.addEventListener('click', (event) => {
        if (event.target.tagName === 'A') {
            toggleMobileMenu();
        }
    });

    function handleScroll() {
        const currentScrollY = window.scrollY;

        if (window.innerWidth > 979) {
            showNavbar();
        } else {
            if (currentScrollY > lastScrollY) {
                hideNavbar();
            } else {
                showNavbar();
            }
        }

        lastScrollY = currentScrollY;
    }

    window.addEventListener("scroll", handleScroll);
    window.addEventListener("resize", function() {
        if (window.innerWidth > 979) {
            showNavbar();
            if (isMobileMenuOpen) {
                toggleMobileMenu();
            }
        }
        handleScroll();
    });

    // Initial setup
    handleScroll();
});
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-item');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 3 }); // Increasing the threshold reduces lag