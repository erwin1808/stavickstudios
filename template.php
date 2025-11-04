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



<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
