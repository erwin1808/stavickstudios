<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stavick Studios</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Font Awesome for Play Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      font-family: 'Cormorant Garamond', serif;
      color: #2d2c2a;
      background-color: #ebebeb;
      overflow-x: hidden;
    }

    /* === HERO SECTION === */
  .hero {
  position: relative;
  width: 100vw;
  height: 35vw;
  max-width: 2000px;
  max-height: 800px;
  margin: 40px auto;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-video {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform: translate(-50%, -50%);
  z-index: 1;
}


.hero-logo,
.hero-caption-left,
.hero-caption-right {
  position: relative;
  z-index: 3;
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
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
      max-width: 490px;
    }

    .hero-caption-right {
      position: absolute;
      bottom: 30px;
      right: 30px;
      z-index: 3;
      color: #fff;
      font-size: 1.2rem;
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

/* === HERO SECTION MOBILE LANDSCAPE === */
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


    /* === PORTFOLIO GRID === */
    .portfolio-section {
      padding: 80px 20px;
      background: #ebebeb;
      text-align: center;
    }

    .portfolio-section h2 {
      font-size: 34px;  
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 60px;
      position: relative;
      margin-top: -40px;
    }


.portfolio-card {
    background: #fff;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    width: 75%;      /* 75% width */
    height: 550px;   /* fixed height */
    margin: 0 auto;  /* center horizontally */
}


    .portfolio-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .video-thumbnail {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    width: 100%;
    height: 100%;
    }

    .video-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
    }

    .video-thumbnail:hover img {
      transform: scale(1.05);
    }

    /* White play button */
    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 3rem;
      opacity: 0.9;
      transition: opacity 0.3s ease;
      z-index: 2;
      font-weight: 100;
    }

    .video-thumbnail:hover .play-button {
      opacity: 1;
    }

    /* Hover Title Overlay */
    .video-title {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      font-size: 24px;     
      padding: 15px 10px;
      text-align: center;
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: 3;
    }

    .video-thumbnail:hover .video-title {
      opacity: 1;
    }

/* --- MOBILE RESPONSIVE --- */
@media (max-width: 992px) {
    .portfolio-card {
        width: 100% !important;     /* increase width on tablets */
        height: 200px !important; /* reduce height */
    }
}

@media (max-width: 768px) {
    .portfolio-card {
         width: 100% !important;     /* increase width on tablets */
        height: 200px !important; /* reduce height */
    }
    .video-title {
        font-size: 1.2rem;
        padding: 10px 5px;
    }
    .play-button {
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .portfolio-card {
   width: 100% !important;     /* increase width on tablets */
        height: 200px !important; /* reduce height */
    }
    .video-title {
        font-size: 1rem;
        padding: 8px 5px;
    }
    .play-button {
        font-size: 2rem;
    }
}
    .portfolio-card-link {
    display: block;
    width: 100%;
    text-decoration: none;
    color: inherit;
}

.portfolio-card {
    background: #fff;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    width: 75%;      /* 75% width */
    height: 550px;   /* fixed height */
    margin: 0 auto;  /* center horizontally */
}

  </style>
</head>

<body>

<?php include 'navbar.php'; ?>


<!-- === HERO SECTION === -->
<section class="hero">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="videos/Stavick Studios - Website background video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>


<!-- === PORTFOLIO GRID SECTION === -->
<section class="portfolio-section">
  <div class="container">
    <h2>South Asian Weddings</h2>
<div class="row g-4 justify-content-center">

  <!-- Video Card 1 -->
<!-- Video Card 1 -->
<div class="col-12">
  <a href="south-asian-weddings-videos-details.php?id=1" class="portfolio-card-link">
    <div class="portfolio-card">
      <div class="video-thumbnail">
        <img src="https://img.youtube.com/vi/MsULQ6lfh-g/maxresdefault.jpg" alt="Video Thumbnail">
        <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
        <div class="video-title">Simran + Kevin</div>
      </div>
    </div>
  </a>
</div>

  <!-- Video Card 2 -->
  <div class="col-12">
    <a href="south-asian-weddings-videos-details.php" class="portfolio-card-link">
      <div class="portfolio-card">
        <div class="video-thumbnail">
          <img src="https://img.youtube.com/vi/RdtOyzda-e4/maxresdefault.jpg" alt="Maya & Arjun Wedding">
          <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
          <div class="video-title">Maya & Arjun</div>
        </div>
      </div>
    </a>
  </div>

  <!-- Video Card 3 -->
  <div class="col-12">
    <a href="south-asian-weddings-videos-details.php" class="portfolio-card-link">
      <div class="portfolio-card">
        <div class="video-thumbnail">
          <img src="https://img.youtube.com/vi/fXN-m49MHO0/maxresdefault.jpg" alt="Isabella & Noah Wedding">
          <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
          <div class="video-title">Isabella & Noah</div>
        </div>
      </div>
    </a>
  </div>

</div>


  </div>
</section>



<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
