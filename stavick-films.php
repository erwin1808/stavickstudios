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
  font-size: 3rem;
  
  text-shadow: 0 2px 8px rgba(0,0,0,0.5);
  max-width: 490px;
  text-transform: uppercase;

  /* Prevent line breaks without ellipsis */
  white-space: nowrap;
  overflow: visible; /* allow overflow instead of hiding */
}


    .hero-caption-right {
      position: absolute;
      bottom: 40px;
      right: 30px;
      z-index: 3;
      color: #fff;
      font-size: 1.2rem;
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

    /* === HERO SECTION MOBILE LANDSCAPE === */
    @media (max-width: 768px) {
      .hero {
        height: 75vw;
        background-size: cover;
      }
      .hero-caption-left {
        font-size: 1.7rem !important;
        bottom: 100px;
        max-width: 180px;
         left: 90px;
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
      background: #ebebeb;
      text-align: center;
    }

    .portfolio-section h2 {
      font-size: 3rem;
      
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 20px;
      position: relative;
      margin-top: -40px;
    }

    .portfolio-subtitle {
      font-family: 'DM Sans', sans-serif;
      font-size: 1.2rem;
      margin-bottom: 40px;
      color: #2d2c2a;
    }

    .portfolio-card {
      background: #fff;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      width: 100%;
      height: 350px;
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

    .video-title {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      font-size: 1.8rem;
      
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
      .portfolio-card { height: 250px; }
    }

    @media (max-width: 480px) {
      .video-thumbnail img { height: 180px; }
      .video-title { font-size: 1rem; }
      .portfolio-card { height: 180px; }
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
  <div class="hero-caption-left">
    Stavick Films
  </div>
  <div class="hero-caption-right">
    Based in California | Available Worldwide
  </div>
</section>

<!-- === WESTERN WEDDINGS === -->
<section class="portfolio-section">
  <div class="container">
    <h2>Western Weddings</h2>
    <p class="portfolio-subtitle">Experience the timeless elegance of Western weddings captured beautifully.</p>
    <div class="row g-4 justify-content-center">

      <!-- Video Card 1 -->
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube-nocookie.com/embed/7UoP9ABJXGE?si=qnyE9lc2sLtMB1rp&amp;controls=0">
            <img src="https://img.youtube.com/vi/7UoP9ABJXGE/maxresdefault.jpg" alt="Ava & Liam Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Ava & Liam</div>
          </div>
        </div>
      </div>

      <!-- Video Card 2 -->
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube.com/embed/RdtOyzda-e4?si=9cTDlS6uqXVYzs-h">
            <img src="https://img.youtube.com/vi/RdtOyzda-e4/maxresdefault.jpg" alt="Maya & Arjun Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Maya & Arjun</div>
          </div>
        </div>
      </div>

      <!-- Add more Western videos here -->

    </div>
  </div>
</section>

<!-- === SOUTH ASIAN WEDDINGS === -->
<section class="portfolio-section" style="background-color: #2d2c2a; color: #ebebeb; position: relative;">
  <div class="container">
    <h2 style="color: #ebebeb;">South Asian Weddings</h2>
    <p class="portfolio-subtitle" style="color: #ebebeb;">
      Experience the vibrant, colorful celebrations of our South Asian clients.
    </p>
    <div class="row g-4 justify-content-center">

      <!-- Video Card 1 -->
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube.com/embed/QHhjaZsK1Jc?si=MYwASRHUs-XAHO07">
            <img src="https://img.youtube.com/vi/QHhjaZsK1Jc/maxresdefault.jpg" alt="Riya & Arjun Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Riya & Arjun</div>
          </div>
        </div>
      </div>

      <!-- Video Card 2 -->
      <div class="col-lg-6 col-md-6">
        <div class="portfolio-card">
          <div class="video-thumbnail" data-video="https://www.youtube.com/embed/558QCm6ZMRI?si=DA-PtZoA5ErfVQxz">
            <img src="https://img.youtube.com/vi/558QCm6ZMRI/maxresdefault.jpg" alt="Ananya & Karan Wedding">
            <div class="play-button"><i class="fa-regular fa-circle-play"></i></div>
            <div class="video-title">Ananya & Karan</div>
          </div>
        </div>
      </div>

      <!-- Add more South Asian videos here -->

    </div>
  </div>



</section>
<!-- === FLOATING BOOKMARKS === -->
<div class="unique-floating-bookmarks">
    <div class="unique-bookmark" id="scrollIcon2">South Asian Weddings</div>
  <div class="unique-bookmark" id="scrollIcon1">Western Weddings</div>
  
</div>

<style>
.unique-floating-bookmarks {
  position: fixed;
  top: 500px; /* distance from top of first bookmark */
  right: 0;
  display: flex;
  flex-direction: column;
  gap: 30px; /* space between bookmarks */
  z-index: 1000;
}

.unique-bookmark {
  background: #7c806f;
  color: #fff;
  font-family: 'DM Sans', sans-serif;
  padding: 10px 15px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  box-shadow: -3px 3px 15px rgba(0,0,0,0.3);
  cursor: pointer;
  transform: rotate(-90deg);
  transform-origin: right bottom;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s, transform 0.3s;
  font-weight: bold;
  letter-spacing: 1px;
  user-select: none;
  outline: none;
}

/* Adjust bookmarks for mobile devices */
@media (max-width: 768px) {  /* adjust max-width as needed for tablets/mobiles */
  .unique-floating-bookmarks {
    top: 360px; /* move all bookmarks near top on mobile */
    gap: 20px; /* optional: smaller spacing on mobile */
  }

  .unique-bookmark:last-child {
    margin-top: 0; /* remove negative margin for last bookmark */
  }
}


/* Adjust last bookmark position */
.unique-floating-bookmarks .unique-bookmark:last-child {
  transform-origin: right bottom;
  margin-top: -310px; /* move it upward */
}

.unique-bookmark.show {
  opacity: 1;
  pointer-events: auto;
}
</style>

<script>
// Show bookmarks when scrolling down
window.addEventListener('scroll', () => {
  const bookmarks = document.querySelectorAll('.unique-bookmark');
  if (window.scrollY > 10) {
    bookmarks.forEach(b => b.classList.add('show'));
  } else {
    bookmarks.forEach(b => b.classList.remove('show'));
  }
});

// Smooth scroll to sections
document.getElementById('scrollIcon1').addEventListener('click', () => {
  document.querySelector('.portfolio-section:nth-of-type(2)').scrollIntoView({ behavior: 'smooth' });
});
document.getElementById('scrollIcon2').addEventListener('click', () => {
  document.querySelector('.portfolio-section:nth-of-type(3)').scrollIntoView({ behavior: 'smooth' });
});
</script>







<?php include 'footer.php'; ?>

<!-- === VIDEO LIGHTBOX === -->
<div class="video-lightbox" id="video-lightbox">
  <span class="close-lightbox" id="close-lightbox">&times;</span>
  <iframe id="lightbox-video" src="" allowfullscreen></iframe>
</div>

<script>
  const thumbnails = document.querySelectorAll('.video-thumbnail');
  const lightbox = document.getElementById('video-lightbox');
  const lightboxVideo = document.getElementById('lightbox-video');
  const closeBtn = document.getElementById('close-lightbox');

  thumbnails.forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
      const videoSrc = thumbnail.getAttribute('data-video');
      lightboxVideo.src = videoSrc + "?autoplay=1";
      lightbox.classList.add('active');
    });
  });

  closeBtn.addEventListener('click', () => {
    lightbox.classList.remove('active');
    lightboxVideo.src = '';
  });

  // Close lightbox when clicking outside video
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove('active');
      lightboxVideo.src = '';
    }
  });
</script>
<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
