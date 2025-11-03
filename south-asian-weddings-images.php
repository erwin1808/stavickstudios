<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stavick Studios</title>

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">

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
      font-size: 2rem;
      font-weight: 600;
      text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
      max-width: 490px;
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
/* Landscape view for mobile */
@media (max-width: 768px) {
  .hero {
    height: 75vw; /* shorter height for landscape orientation */
    background-size: cover;
  }

  .hero-logo img {
    max-width: 180px;
  }

  .hero-caption-left,
  .hero-caption-right {
    font-size: 1rem;
    bottom: 10px;
    max-width: 180px;
  }
}

/* Extra small mobile devices */
@media (max-width: 480px) {
  .hero {
    height: 60vw; /* maintain a wide landscape look */
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


    /* === PORTFOLIO SECTION === */
    .portfolio-section {
      padding: 80px 20px;
      text-align: center;
      background: #ebebeb;
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
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .portfolio-card {
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .portfolio-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
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
      margin-bottom: 10px;
      font-family: 'Cormorant Garamond', serif;
    }

    .portfolio-desc {
      font-family: 'DM Sans', sans-serif;
      font-size: 1rem;
      color: #444;
      line-height: 1.6;
    }

    @media (max-width: 576px) {
      .portfolio-title {
        font-size: 2rem;
      }
      .portfolio-card img {
        height: 220px;
      }
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- === HERO SECTION === -->
<section class="hero">

</section>

<!-- === PORTFOLIO GRID SECTION === -->
<section class="portfolio-section">
  <h2 class="portfolio-title">South Asian Weddings</h2>
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

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
