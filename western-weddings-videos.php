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
  width: 95vw;
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

    @media (max-width: 768px) {
      .hero-logo img { max-width: 150px; }
      .hero-caption-left, .hero-caption-right { display: none; }
    }

    /* === PORTFOLIO GRID === */
    .portfolio-section {
      padding: 80px 20px;
      background: #ebebeb;
      text-align: center;
    }

    .portfolio-section h2 {
      font-size: 3rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 60px;
      position: relative;
      margin-top: -40px;
    }


        .portfolio-card {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        width: 100%;           /* full width of column */
        height: 350px;         /* fixed height */
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
      font-size: 1.8rem;
      font-weight: 700;
      padding: 15px 10px;
      text-align: center;
      opacity: 0;
      transition: opacity 0.4s ease;
      z-index: 3;
    }

    .video-thumbnail:hover .video-title {
      opacity: 1;
    }

    /* === VIDEO LIGHTBOX === */
    .video-lightbox {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.9);
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .video-lightbox.active {
      display: flex;
    }

    .video-lightbox iframe {
      width: 80%;
      height: 80vh;
      border: none;
      border-radius: 8px;
    }

    .close-lightbox {
      position: absolute;
      top: 30px;
      right: 40px;
      color: #fff;
      font-size: 2rem;
      cursor: pointer;
      z-index: 10000;
    }

    @media (max-width: 768px) {
      .portfolio-section h2 { font-size: 2rem; }
      .video-thumbnail img { height: 250px; }
      .video-title { font-size: 1.3rem; }
      .video-lightbox iframe { width: 90%; height: 60vh; }
        .portfolio-card {
    height: 250px;
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


<!-- === PORTFOLIO GRID SECTION === -->
<section class="portfolio-section">
  <div class="container">
    <h2>Western Weddings</h2>
    <div class="row g-4 justify-content-center">

      <!-- Video Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube-nocookie.com/embed/7UoP9ABJXGE?si=qnyE9lc2sLtMB1rp&amp;controls=0">
            <img src="https://img.youtube.com/vi/7UoP9ABJXGE/maxresdefault.jpg" alt="Ava & Liam Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Ava & Liam</div>
          </div>
        </div>
      </div>

      <!-- Video Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube.com/embed/RdtOyzda-e4?si=9cTDlS6uqXVYzs-h">
            <img src="https://img.youtube.com/vi/RdtOyzda-e4/maxresdefault.jpg" alt="Maya & Arjun Wedding">
             <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Maya & Arjun</div>
          </div>
        </div>
      </div>

      <!-- Video Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube.com/embed/fXN-m49MHO0?si=3wh3t6NPSO_COOt-">
            <img src="https://img.youtube.com/vi/fXN-m49MHO0/maxresdefault.jpg" alt="Isabella & Noah Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Isabella & Noah</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- === LIGHTBOX POPUP === -->
<div class="video-lightbox" id="videoLightbox">
  <span class="close-lightbox">&times;</span>
  <iframe id="lightboxVideo" src="" allowfullscreen></iframe>
</div>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- === VIDEO LIGHTBOX SCRIPT === -->
<script>
  const videoThumbnails = document.querySelectorAll('.video-thumbnail');
  const lightbox = document.getElementById('videoLightbox');
  const iframe = document.getElementById('lightboxVideo');
  const closeBtn = document.querySelector('.close-lightbox');

  videoThumbnails.forEach(thumb => {
    thumb.addEventListener('click', () => {
      const videoUrl = thumb.getAttribute('data-video') + '?autoplay=1';
      iframe.src = videoUrl;
      lightbox.classList.add('active');
    });
  });

  closeBtn.addEventListener('click', () => {
    lightbox.classList.remove('active');
    iframe.src = '';
  });

  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove('active');
      iframe.src = '';
    }
  });
</script>
</body>
</html>
