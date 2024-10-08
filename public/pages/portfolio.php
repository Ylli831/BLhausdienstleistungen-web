<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BL Hausdienstleistungen - About Us</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body style="background-color: #F5F5DC;">
    <?php include('../components/header.php'); ?>
    <header class="header-background relative bg-cover bg-center h-screen"
        style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)), 
        url('../assets/images/background-land.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
        <div class="aligner">
            <p class="slogan-over text-white">Unsere Arbeiten im Fokus.</p>
            <!-- Default slogan for larger screens -->
            <h1 class="slogan text-white large-screen-slogan">„Kreativität, die begeistert – Entdecken Sie unsere vielfältigen Projekte.“</h1>
            <!-- New slogan for mobile screens -->
            <h1 class="slogan text-white mobile-slogan">„Ihre Vision, unsere Umsetzung.“</h1>
            <div class="button-container">
                <a href="testimonials.php" class="btn btn-primary shadow-md">Kundenbewertungen</a>
                <a href="contact.php" class="btn btn-secondary shadow-md">Kontakt</a>
            </div>
            <div class="side-gradient"></div>
        </div>
    </div>
</header>

<div class="swiper-section py-16 relative" >
    <h2 class="text-3xl font-bold text-center mb-8 text-custom-color">Unsere Projekte</h2>
    <div class="swiper-container shadow-md">
        <div class="swiper-wrapper">
            <!-- First Before-After Slide -->
            <div class="swiper-slide">
                <div class="before-after-container">
                    <img src="../assets/images/before1.jpg" alt="Before" class="before-image">
                    <img src="../assets/images/after1.jpg" alt="After" class="after-image">
                    <div class="slider-handle"></div>
                    <div class="line-divider"></div>
                </div>
            </div>

            <!-- Second Before-After Slide -->
            <div class="swiper-slide">
                <div class="before-after-container">
                    <img src="../assets/images/before2.jpg" alt="Before" class="before-image">
                    <img src="../assets/images/after2.jpg" alt="After" class="after-image">
                    <div class="slider-handle"></div>
                    <div class="line-divider"></div>
                </div>
            </div>

            <!-- Third Before-After Slide -->
            <div class="swiper-slide">
                <div class="before-after-container">
                    <img src="../assets/images/before3.jpg" alt="Before" class="before-image">
                    <img src="../assets/images/after3.jpg" alt="After" class="after-image">
                    <div class="slider-handle"></div>
                    <div class="line-divider"></div>
                </div>
            </div>

            <!-- Fourth Before-After Slide -->
            <div class="swiper-slide">
                <div class="before-after-container">
                    <img src="../assets/images/before4.jpg" alt="Before" class="before-image">
                    <img src="../assets/images/after4.jpg" alt="After" class="after-image">
                    <div class="slider-handle"></div>
                    <div class="line-divider"></div>
                </div>
            </div>
            
            <!-- Fifth Before-After Slide -->
            <div class="swiper-slide">
                <div class="before-after-container">
                    <img src="../assets/images/before5.jpg" alt="Before" class="before-image">
                    <img src="../assets/images/after5.jpg" alt="After" class="after-image">
                    <div class="slider-handle"></div>
                    <div class="line-divider"></div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="portfolio-grid mx-auto p-6" style="max-width: 1200px;display: flex; flex-direction: column; padding: 24px;">
    <h2 class="text-3xl font-bold text-custom-color mb-8">Drywall</h2>
    <div class="category drywall flex flex-wrap justify-center mb-8" style="padding: 12px;">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <a href="../assets/images/BL/img<?= $i; ?>.jpg" data-lightbox="portfolio">
                <img src="../assets/images/BL/img<?= $i; ?>.jpg" alt="Drywall Project <?= $i; ?>" class="portfolio-image w-1/4 p-2"> <!-- Adjusted class for width -->
            </a>
        <?php endfor; ?>
    </div>

    <h2 class="text-3xl font-bold text-custom-color mb-8">Remodeling</h2>
    <div class="category remodeling flex flex-wrap justify-center mb-8">
        <?php for ($i = 9; $i <= 18; $i++): ?>
            <a href="../assets/images/BL/img<?= $i; ?>.jpg" data-lightbox="portfolio">
                <img src="../assets/images/BL/img<?= $i; ?>.jpg" alt="Remodeling Project <?= $i; ?>" class="portfolio-image w-1/4 p-2"> <!-- Adjusted class for width -->
            </a>
        <?php endfor; ?>
    </div>

    <h2 class="text-3xl font-bold text-custom-color mb-8">Rooms</h2>
    <div class="category rooms flex flex-wrap justify-center mb-8">
        <?php for ($i = 19; $i <= 28; $i++): ?>
            <a href="../assets/images/BL/img<?= $i; ?>.jpg" data-lightbox="portfolio">
                <img src="../assets/images/BL/img<?= $i; ?>.jpg" alt="Room Project <?= $i; ?>" class="portfolio-image w-1/4 p-2"> <!-- Adjusted class for width -->
            </a>
        <?php endfor; ?>
    </div>

    <h2 class="text-3xl font-bold text-custom-color mb-8">Outdoor Renovations</h2>
    <div class="category outdoor-renovations flex flex-wrap justify-center mb-8">
        <?php for ($i = 29; $i <= 34; $i++): ?>
            <a href="../assets/images/BL/img<?= $i; ?>.jpg" data-lightbox="portfolio">
                <img src="../assets/images/BL/img<?= $i; ?>.jpg" alt="Outdoor Renovation Project <?= $i; ?>" class="portfolio-image w-1/4 p-2"> <!-- Adjusted class for width -->
            </a>
        <?php endfor; ?>
    </div>
</div>



<!-- Include Lightbox JS and CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>

<style>
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
    gap: 16px; /* Space between grid items */
}

.portfolio-image {
    width: 100%; /* Make image take full width of grid cell */
    height: 200px; /* Set a fixed height */
    object-fit: cover; /* Maintain aspect ratio and cover the area */
    border-radius: 8px; /* Optional for rounded corners */
    transition: transform 0.3s; /* Animation on hover */
}

.portfolio-image:hover {
    transform: scale(1.05); /* Zoom effect on hover */
}
</style>
