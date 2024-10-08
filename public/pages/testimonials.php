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
            <p class="slogan-over text-white">Zufriedene Kunden sprechen für uns</p>
            <!-- Default slogan for larger screens -->
            <h1 class="slogan text-white large-screen-slogan">„Vertrauen, das überzeugt – Lassen Sie unsere Kunden sprechen.“</h1>
            <!-- New slogan for mobile screens -->
            <h1 class="slogan text-white mobile-slogan">„Ihr Vertrauen, unser Erfolg“</h1>
            <div class="button-container">
                <a href="about.php" class="btn btn-primary shadow-md">Über uns</a>
                <a href="contact.php" class="btn btn-secondary shadow-md">Kontakt</a>
            </div>
            <div class="side-gradient"></div>
        </div>
    </div>
</header>

<section class="section py-16 px-4 text-center" id="testimonials" style="max-width: 1200px; margin: auto;">
  <h2 class="text-3xl font-bold text-center mb-8 text-custom-color">Kundenstimmen & Erfolge</h2>
  
  <!-- Statistics Section -->
  <div class="flex flex-wrap justify-center gap-8 mb-8 max-w-6xl mx-auto">
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <h3 class="text-xl font-semibold mb-2 text-white">500+ Projekte</h3>
      <p class="text-white">Erfolgreich abgeschlossene Renovierungsprojekte.</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <h3 class="text-xl font-semibold mb-2 text-white">98% Zufriedenheit</h3>
      <p class="text-white">Unser Erfolgsquote bei Kundenzufriedenheit.</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <h3 class="text-xl font-semibold mb-2 text-white">10+ Jahre Erfahrung</h3>
      <p class="text-white">In der Bau- und Renovierungsbranche tätig.</p>
    </div>
  </div>

    <h1 class="text-3xl font-bold mb-8 text-custom-color">Testimonials</h1>
  <!-- Testimonials Section -->
  <div class="flex flex-wrap justify-center gap-8 max-w-6xl mx-auto">
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-user fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Anna Müller</h3>
      <p class="text-white">"Die Renovierung unseres Wohnzimmers war ein voller Erfolg. Die Handwerker waren pünktlich und sehr professionell. Absolut empfehlenswert!"</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-user fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Markus Schmidt</h3>
      <p class="text-white">"Von der Planung bis zur Ausführung lief alles reibungslos. Die neue Küche sieht fantastisch aus. Vielen Dank für die großartige Arbeit!"</p>
    </div>
    <div class="card2 p-6 rounded shadow-md text-center w-full md:w-1/3 lg:w-1/4">
      <div class="icon-wrapper mb-4">
        <i class="fas fa-user fa-3x text-white"></i>
      </div>
      <h3 class="text-xl font-semibold mb-2 text-white">Sabine Fischer</h3>
      <p class="text-white">"Unsere komplette Hausrenovierung wurde schneller als geplant abgeschlossen, und das Ergebnis hat unsere Erwartungen übertroffen. Super Team!"</p>
    </div>
  </div>
</section>

<?php include('../components/footer.php'); ?>