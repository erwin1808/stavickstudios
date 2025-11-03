<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stavick Studios</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'Cormorant Garamond', serif;
      color: #2d2c2a;
      background: #ebebeb;
      margin: 0;
      padding: 0;
    }

    /* === HERO SECTION (IMAGE) === */
    .hero {
   margin-top: 40px;
       margin-bottom: -20px;
      position: relative;
      width: 100%;
      height: 75vh;
      background: url('images/story-bg.jpg') center center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
    }

    .hero-logo {
      position: relative;
      z-index: 2;
      text-align: center;
    }

    .hero-logo img {
      max-width: 320px;
      height: auto;
    }

 .hero-caption-left {
  position: absolute;
  bottom: 25px;
  left: 30px;
  z-index: 3;
  color: #fff;
  font-size: 3rem;
  font-weight: 700;
  text-shadow: 0 2px 8px rgba(0,0,0,0.5);
  max-width: 490px;
  text-transform: uppercase;

  /* Prevent line breaks without ellipsis */
  white-space: nowrap;
  overflow: visible; /* allow overflow instead of hiding */
}

    .hero-caption-right {
      position: absolute;
      bottom: 30px;
      right: 30px;
      z-index: 3;
      color: #fff;
      font-size: 1.2rem;
      font-weight: 400;
      text-align: right;
      text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
      max-width: 350px;
    }
    /* === HERO SECTION MOBILE LANDSCAPE === */
    @media (max-width: 768px) {
      .hero {
        height: 75vw;
        background-size: cover;
      }
      .hero-caption-left {
        font-size: 1.5rem !important;
        bottom: 100px;
        max-width: 180px;
        left: 50px;
      }
      
      .hero-caption-right{display: none;}
    }

    @media (max-width: 480px) {
      .hero {
        height: 60vw;
      }
      .hero-logo img {
        max-width: 150px;
      }
      .hero-caption-left,
      .hero-caption-right {
        font-size: 0.9rem;
        max-width: 150px;
      }
    }

    /* === PORTFOLIO GRID === */
    .portfolio-section {
      padding: 80px 20px;
      text-align: center;
    }

    .portfolio-title {
      font-size: 2.8rem;
      font-weight: 700;
      margin-bottom: 50px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
    }

    .portfolio-card {
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .portfolio-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    }

    .portfolio-card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .portfolio-card-body {
      padding: 20px;
      text-align: left;
    }

    .portfolio-couple {
      font-size: 1.5rem;
      font-weight: 700;
    }

    .portfolio-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 1rem;
      color: #444;
      line-height: 1.6;
    }

    @media (max-width: 576px) {
      .portfolio-card img { height: 220px; }
      .portfolio-title { font-size: 2rem; }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- === HERO SECTION === -->
<section class="hero">
<div class="hero-caption-left">STAVICK PHOTOGRAPHY</div>
</section>


<!-- === PORTFOLIO GRID SECTION === -->
<section class="portfolio-section">
  <h2 class="portfolio-title">Western Weddings</h2>
  <div class="container">
    <div class="portfolio-grid">

      <!-- Card 1 -->
      <div class="portfolio-card">
        <img src="images/Jaclyn § Tyler.jpg" alt="Couple 1">
        <div class="portfolio-card-body">
          <div class="portfolio-couple">Jaclyn § Tyler</div>
          <p class="portfolio-desc">A romantic coastal celebration filled with laughter, elegance, and timeless moments.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=1000&q=80" alt="Couple 2">
        <div class="portfolio-card-body">
          <div class="portfolio-couple">Ethan & Sofia</div>
          <p class="portfolio-desc">An intimate vineyard wedding surrounded by nature’s golden hues and heartfelt joy.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?auto=format&fit=crop&w=1000&q=80" alt="Couple 3">
        <div class="portfolio-card-body">
          <div class="portfolio-couple">Liam & Noor</div>
          <p class="portfolio-desc">A breathtaking union that brought together two cultures in vibrant celebration.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=1000&q=80" alt="Couple 4">
        <div class="portfolio-card-body">
          <div class="portfolio-couple">Isabella & Raj</div>
          <p class="portfolio-desc">An unforgettable destination wedding with views that took everyone’s breath away.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- === PORTFOLIO GRID SECTION === -->
<section class="portfolio-section" style="background-color: #2d2c2a; color: #ebebeb; position: relative;">
  <h2 class="portfolio-title" >South Asian Weddings</h2>
  <div class="container">
    <div class="portfolio-grid">

      <!-- Card 1 -->
      <div class="portfolio-card">
        <img src="images/Jaclyn § Tyler.jpg" alt="Couple 1">
        <div class="portfolio-card-body">
          <div class="portfolio-couple" style="color: #2d2c2a;">Jaclyn § Tyler</div>
          <p class="portfolio-desc">A romantic coastal celebration filled with laughter, elegance, and timeless moments.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=1000&q=80" alt="Couple 2">
        <div class="portfolio-card-body">
          <div class="portfolio-couple" style="color: #2d2c2a;">Ethan & Sofia</div>
          <p class="portfolio-desc">An intimate vineyard wedding surrounded by nature’s golden hues and heartfelt joy.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1537633552985-df8429e8048b?auto=format&fit=crop&w=1000&q=80" alt="Couple 3">
        <div class="portfolio-card-body">
          <div class="portfolio-couple" style="color: #2d2c2a;">Liam & Noor</div>
          <p class="portfolio-desc">A breathtaking union that brought together two cultures in vibrant celebration.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="portfolio-card">
        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=1000&q=80" alt="Couple 4">
        <div class="portfolio-card-body">
          <div class="portfolio-couple" style="color: #2d2c2a;">Isabella & Raj</div>
          <p class="portfolio-desc">An unforgettable destination wedding with views that took everyone’s breath away.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
