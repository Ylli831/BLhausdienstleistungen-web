<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BL Hausdienstleistungen</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body style="background-color:  #F5F5DC;">
<?php include('../components/header.php'); ?>
<header class="header-background relative bg-cover bg-center h-screen"
        style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)), 
        url('../assets/images/background-land.jpg');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center">
        <div class="aligner">
            <p class="slogan-over text-white">Renovierung mit Leidenschaft.</p>
            <!-- Default slogan for larger screens -->
            <h1 class="slogan text-white large-screen-slogan">„Ihr Zuhause, unser Handwerk – Perfektion bis ins Detail.“</h1>
            <!-- New slogan for mobile screens -->
            <h1 class="slogan text-white mobile-slogan">„Ihre Idee, unser Handwerk.“</h1>
            <div class="button-container">
                <a href="services.php" class="btn btn-primary shadow-md">Dienstleistungen</a>
                <a href="contact.php" class="btn btn-secondary shadow-md">Kontakt</a>
            </div>
            <div class="side-gradient"></div>
        </div>
    </div>
</header>


<!-- Feature Section -->
<section id="features" class="section py-16 px-4 text-center" style="max-width: 1200px; margin: auto;">
    <h2 class="text-3xl font-bold mb-8 text-custom-color">Unsere Hauptservices</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i>
            <h3 class="text-xl font-semibold text-white">Spachtel Technik</h3>
            <p class="text-white">Glättung von Wänden und Decken für eine perfekte Oberfläche vor dem Anstrich.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
        <i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i>
            <h3 class="text-xl font-semibold text-white">Modernisierung</h3>
            <p class="text-white">Erneuerung und Anpassung von Gebäuden an moderne Standards und Komfort.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
        <i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i>
            <h3 class="text-xl font-semibold text-white">Trockenbau Design</h3>
            <p class="text-white">Flexible Raumgestaltung mit Gipskartonplatten für schnelle und präzise Ergebnisse.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i><i class="fa fa-star text-white" style="margin-right: 4px;margin-left:4px;"></i>
            <h3 class="text-xl font-semibold text-white">Kreative Lebens-Raumgestaltung</h3>
            <p class="text-white">Individuelle und funktionale Gestaltung von Wohnräumen für ein einzigartiges Zuhause.</p>
        </div>
    </div>
</section>

<!-- Tesimonials -->
<section id="testimonials" class="section py-16 px-4 text-center" style="max-width: 1200px; margin: auto;">
    <h2 class="text-3xl font-bold mb-8 text-custom-color">Unsere Kunden Sagen</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-quote-left text-white text-3xl mb-4"></i>
            <p class="text-white">"Großartiger Service und erstaunliche Ergebnisse!"</p>
            <p class="italic text-white">- Max Mustermann</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-quote-left text-white text-3xl mb-4"></i>
            <p class="text-white">"Ausgezeichnete Kommunikation und hervorragende Arbeit!"</p>
            <p class="italic text-white">- Anna Müller</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-quote-left text-white text-3xl mb-4"></i>
            <p class="text-white">"Ich empfehle sie jedem, der Qualität schätzt!"</p>
            <p class="italic text-white">- Peter Schmidt</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-quote-left text-white text-3xl mb-4"></i>
            <p class="text-white">"Schneller und effizienter Service!"</p>
            <p class="italic text-white">- Lisa Weber</p>
        </div>
    </div>
</section>

    <!-- Testimonial Section -->
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

    <!-- Features List Section -->
<section class="section py-16 px-4 text-center" id="features" style="max-width: 1200px; margin: auto;">
  <h2 class="text-3xl font-bold text-center mb-8 text-custom-color">Unsere Werte</h2>
  <div class="flex flex-wrap justify-center gap-8 max-w-6xl mx-auto">
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-star fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Qualität</h3>
      <p class="text-white">Wir setzen auf hochwertige Materialien und präzise Ausführung.</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-check-circle fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Zuverlässigkeit</h3>
      <p class="text-white">Pünktlichkeit und Einhaltung von Zusagen sind für uns selbstverständlich.</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-thumbs-up fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Kundenzufriedenheit</h3>
      <p class="text-white">Ihre Zufriedenheit steht für uns an oberster Stelle.</p>
    </div>
  </div>
</section>

<!-- Team Section -->
<section id="team" class="section py-16 px-4 text-center" style="max-width: 1200px; margin: auto;">
    <h2 class="text-3xl font-bold mb-8 text-custom-color">Unsere Renovierungsexperten</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-hard-hat text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-hard-hat text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-hard-hat text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-hard-hat text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-hard-hat text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Experte für Innenrenovierung</h3>
            <p class="text-white">Spezialist für die Modernisierung und Sanierung von Innenräumen – von Böden bis zu Decken.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-paint-roller text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-paint-roller text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-paint-roller text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-paint-roller text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-paint-roller text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Maler- und Lackiertechniker</h3>
            <p class="text-white">Meisterhafte Techniken für exakte Wandanstriche, Lackierungen und kreative Wandgestaltungen.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-hammer text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-hammer text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-hammer text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-hammer text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-hammer text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Bau- und Sanierungsspezialist</h3>
            <p class="text-white">Erfahren im Umbau und in der Sanierung von alten Gebäuden und modernen Häusern.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-brush text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-brush text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-brush text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-brush text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-brush text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Experte für kreative Gestaltung</h3>
            <p class="text-white">Verleiht jedem Raum eine einzigartige Atmosphäre durch innovative Design- und Dekorationsideen.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-toolbox text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-toolbox text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-toolbox text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-toolbox text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-toolbox text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Experte für Außensanierung</h3>
            <p class="text-white">Profis für die Sanierung und Modernisierung von Fassaden und Außenbereichen von Gebäuden.</p>
        </div>
        <div class="card p-6 rounded shadow-md">
            <i class="fa fa-leaf text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <i class="fa fa-leaf text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-leaf text-white" style="margin-right: 4px;margin-left:4px; font-size: 50px;"></i>
            <i class="fa fa-leaf text-white" style="margin-right: 4px;margin-left:4px; font-size: 35px; opacity: 0.8;"></i>
            <i class="fa fa-leaf text-white" style="margin-right: 4px;margin-left:4px; font-size: 20px; opacity: 0.4;"></i>
            <h3 class="text-xl font-semibold text-white mt-4">Experte für nachhaltige Renovierung</h3>
            <p class="text-white">Spezialisiert auf umweltfreundliche Renovierungsmethoden und nachhaltige Materialwahl.</p>
        </div>
    </div>
    <div class="view-more py-16">
        <a href="services.php" class="text-custom-color px-6 py-3 rounded shadow-md gap-8" style="background-color: #F5F5DC;border: 3px solid #c9aa77">Zeige mehr</a>
    </div>
</section>




    <!-- Contact Section -->

    <!-- CTA Section -->
    <section class="section py-16 px-4 text-center text-white" style="background-color: #c9aa77;">
        <h2 class="text-3xl font-bold mb-4">Bereit für Ihre nächste Projekt?</h2>
        <p class="mb-4" style="margin-bottom: 24px;">Planen Sie eine Beratung oder fordern Sie ein Angebot an.</p>
        <a href="#contact" class="text-white px-6 py-3 rounded shadow-md" style="background-color: #c9aa77;border: 3px solid #F5F5DC">Jetzt Kontaktieren</a>
    </section>

<?php include('../components/footer.php') ?>

</body>
</html>
