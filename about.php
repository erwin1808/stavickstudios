<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stavick Studios</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Cormorant Garamond -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');



        body {
            font-family: 'Cormorant Garamond', sans-serif;
            color: #2d2c2a;
            background: #ebebeb;
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
           margin-bottom: -40px;
        }

        .hero-image {
          position: absolute;
          top: 50%;
          left: 50%;
          width: 100%;
          height: 100%;
          object-fit: cover; /* ensures image covers the container */
          transform: translate(-50%, -50%); /* centers the image */
          z-index: 1;
        }

        /* Styles for the A BIT MORE ABOUT US section */
      .image-container {
        flex: 1 1 300px;
        max-width: 400px;         /* same width limit for both */
        text-align: center;
      }

      .image-container img {
        width: 100%;
        aspect-ratio: 2 / 3;      /* ensures consistent height proportion */
        object-fit: cover;        /* crops slightly to fit the ratio evenly */
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      }
      .section-divider {
        transform: translateY(-125px);
        width: 100vw;              /* full width of the viewport */
        height: 500px;             /* default height (desktop) */
        background-color: #7c806f; /* your divider color */
        margin-bottom: -125px;
        border: none;
      }

/* 🌿 Responsive sizing for smaller screens */
@media (max-width: 1024px) {
  .section-divider {
    transform: translateY(0);
    margin-bottom: -20px;
    height: 300px; 

  }
  .about-couple {
    margin-top: 15px !important;
    background-color: #7c806f !important;            /* tablet */
    color: #ebebeb !important;
  }
}

@media (max-width: 768px) {
  .about-couple {
     margin-top: 15px !important;
     background-color: #7c806f !important;           /* small tablet / large phone */
     color: #ebebeb !important;
  }
    .section-divider {
    transform: translateY(0);
    margin-bottom: -20px;
    height: 300px; 
  }
}

@media (max-width: 480px) {
  .about-couple {
     margin-top: 15px !important;
     background-color: #7c806f !important;            /* mobile phones */
     color: #ebebeb !important;
  }
    .section-divider {
    transform: translateY(0);
    margin-bottom: -20px;
    height: 300px;
  }
}
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
  <img src="images/blackandwhite.jpg" alt="Hero Image" class="hero-image">
</section>

<!-- ========================================================= -->
<!-- A BIT MORE ABOUT US — TWO COLUMN LAYOUT (ALTERNATING ROWS) -->
<!-- ========================================================= -->

<section class="about-couple-section">
  <div class="container">

    <!-- Section Heading -->
    <h2 class="about-couple-title">
      A BIT MORE ABOUT US<br>
      HERE’S TO MY BETTER HALF
    </h2>

    <!-- ROW 1 — Image Left / Text Right -->
    <div class="about-row">
      <div class="about-image">
        <img src="images/Mask-Group-1-898x1024.jpg" alt="Ej">
      </div>
      <div class="about-text">
        <h3>EJ ACCORDING TO SARAH</h3>
        <p>
          My husband is my rock, my protector, and my constant support system. As a family of four, he works tirelessly to make sure we have everything we need and more. He is the hardest-working person I know, and I am in awe of his dedication and determination.
        </p>
        <p>
          Through thick and thin, my husband has always been there for me, accepting my faults and loving me unconditionally. He takes care of me in every possible way, and I feel so lucky to have him as my partner.
        </p>
      </div>
    </div>

    <!-- ROW 2 — Image Right / Text Left -->
    <div class="about-row reverse">
      <div class="about-image">
        <img src="images/Mask-Group-2-898x1024.jpg" alt="Sarah">
      </div>
      <div class="about-text">
        <h3>SARAH ACCORDING TO EJ</h3>
        <p>
          My beloved wife is a true gem, a kind and mindful person who loves nothing more than helping people. She is the one who always goes the extra mile to make sure everyone is happy and taken care of.
        </p>
        <p>
          Her love for food and travel is contagious, and I am always amazed at her ability to find the best local food truck and places wherever we go. She takes the most amazing photos, capturing memories that we will cherish forever.
        </p>
      </div>
    </div>

  </div>
</section>
<style>
  .about-couple-section {
  background-color: #ebebeb;
  padding: 100px 20px;
  color: #2d2c2a;
  font-family: 'DM Sans', sans-serif;
}

.about-couple-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 34px;
  text-align: center;
  letter-spacing: 1px;
  margin-bottom: 70px;
}
.about-row {
  display: flex;
  align-items: center;
  gap: 50px;
  margin-bottom: 100px;
  justify-content: center; /* CENTER THE ENTIRE ROW */
  flex-wrap: wrap; /* allow wrapping on smaller screens */
}

.about-row.reverse {
  flex-direction: row-reverse;
  justify-content: center; /* also center reversed rows */
}

/* IMAGE SIDE */
.about-image img {
  width: 300px;  /* fixed width */
  height: 400px; /* fixed height */
  object-fit: cover;
  display: block;
}

/* TEXT SIDE */
.about-text {
  max-width: 500px; /* keeps text block consistent */
  text-align: left;
}

/* TEXT STYLING */
.about-text h3 {
  font-family: 'Cormorant Garamond', serif;
  font-size: 24px;
  margin-bottom: 20px;
  letter-spacing: 1px;
}

.about-text p {
  font-size: 16px;
  line-height: 1.8;
  margin-bottom: 20px;
  text-align: justify;
}

/* ========================== */
/* MOBILE RESPONSIVE STYLING */
/* ========================== */
@media (max-width: 992px) {
  .about-row {
    flex-direction: column !important;
    text-align: center;
    gap: 30px;
  }
  .about-text h3 {
    font-size: 20px;
    text-align: center;
  }
  .about-text p {
    font-size: 1rem;
    text-align: justify;
  }
    .about-image img {
  width: 200px;  /* fixed width */
  height: 300px; /* fixed height */
  object-fit: cover;
  display: block;
}
  .about-text p:last-child {
  margin-bottom: -50px; /* adjust as needed */
}
}

@media (max-width: 576px) {
  .about-couple-title {
    font-size: 26px;
  }
  .about-text h3 {
    font-size: 20px;
    text-align: center;
  }
  .about-text p {
    font-size: 1rem;
    text-align: justify;
  }
  .about-text p:last-child {
  margin-bottom: -50px; /* adjust as needed */
}
    .about-image img {
  width: 200px;  /* fixed width */
  height: 300px; /* fixed height */
  object-fit: cover;
  display: block;
}
.about-row.reverse .about-text {
  margin-bottom: -100px;
}
}

</style>



<section class="image-section" style="display: none;">
  <img src="images/1.jpg" alt="Cover Image">
</section>

<style>
.image-section {
  width: 100%;
  max-width: 2200px;   /* desktop max width */
  margin: 0 auto;      /* center on desktop */
  overflow: hidden;    /* prevents overflow */
}

.image-section img {
  width: 100%;
  height: auto;         /* keep aspect ratio */
  object-fit: cover;
  display: block;
  max-height: 600px;    /* desktop limit */
}

/* Add a container for hero content */
.hero-content-container {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 10;
}


</style>

<div class="section-divider"></div>

<section style="background-color: #ebebeb; color: #2d2c2a; padding: 80px 20px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 50px; ">
  
  <!-- Photo of the Couple -->
  <div style="flex: 1 1 300px; max-width: 400px; text-align: center;">
    <img src="images/EJSarahNR-2-1-683x1024.jpg" alt="Sarah & Ej" style="width: 100%; height: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
  </div>
  
  <!-- Text Content -->
  <div style="flex: 2 1 500px; max-width: 700px;">
    <!-- Header -->
     <h4 style="font-size: 24px;">   UNIQUE. CAPTIVATING. EMOTIONAL.<br></h4>
    <h1 style="font-family: 'Cormorant Garamond', serif;   font-size: 34px;
   line-height: 1.2; margin-bottom: 40px;">
   
      ONE-OF-A-KIND MEMORIES. ONE-OF-A-KIND LOVE.
    </h1>
    
    <!-- Description -->
    <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
      Our love story began ten years ago before we ever dated. Although we always had a crush on each other, it wasn’t until Sarah rejected Ej. A year later another attempt, and asked her on a date to their favorite place at CHIPOTLE! We both love to travel and spend time together as a family.
    </p>
    
    <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
      Our journey as wedding creatives didn’t just happen and we want to let you into the backstory of how that came about. Ej was a FedEx driver for nine years before quitting his full-time job to follow his passion for filming. Sarah was in the medical field until we both decided to team up together. Sarah loves to take pictures and capture authentic moments to create a story.
    </p>
    
    <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.8; text-align: justify; margin-bottom: -60px;">
      Today, we’re engaged and planning a wedding of our own. So, we know a thing or two about finding one-of-a-kind love. And we understand how much your film and photos mean to you. We welcome and embrace this honor and responsibility, and promise to approach it with LOVE, PASSION, AND PURPOSE.
    </p>
  </div>
  
</section>

<!-- JavaScript Carousel -->
<script>
  const slidesWrapper = document.querySelector('#aboutCarousel .slides-wrapper');
  const slides = document.querySelectorAll('#aboutCarousel .slide');
  const totalSlides = slides.length;
  const nextBtn = document.getElementById('nextBtn');
  const prevBtn = document.getElementById('prevBtn');
  let currentIndex = 0;

  function updateSlide() {
    // Move the slides
    slidesWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Show/hide arrows
    prevBtn.style.display = currentIndex === 0 ? 'none' : 'flex';
    nextBtn.style.display = currentIndex === totalSlides - 1 ? 'none' : 'flex';

    // Scroll to current slide's image only on mobile
    if (window.innerWidth <= 992) {
      const currentImage = slides[currentIndex].querySelector('img');
      if(currentImage) {
        currentImage.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    }
  }

  

  // Next button click
  nextBtn.addEventListener('click', () => {
    currentIndex = Math.min(currentIndex + 1, totalSlides - 1);
    updateSlide();
  });

  // Previous button click
  prevBtn.addEventListener('click', () => {
    currentIndex = Math.max(currentIndex - 1, 0);
    updateSlide();
  });

  // Optional: Swipe support for mobile
  let startX = 0;
  slidesWrapper.addEventListener('touchstart', e => startX = e.touches[0].clientX);
  slidesWrapper.addEventListener('touchend', e => {
    const endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) nextBtn.click();
    if (endX - startX > 50) prevBtn.click();
  });
</script>



<div class="section-wrapper">
  <div class="connection-card">
    <img class="background-img" src="images/EJSarahNR-10-1-1024x683.jpg" alt="Wedding background">
    <div class="overlay"></div>
    <div class="content">
      <h5>FEELING A CONNECTION?</h5>
      <h1>EXPLORE YOUR OPTIONS</h1>
      <p>We offer various options and create customized collections.<br>
         So you can relive your wedding day the way you see fit.</p>
      <button onclick="window.location.href='contact.php'">LET'S CHAT</button>
    </div>
  </div>
</div>

<style>
.section-wrapper {
  background-color: #ebebeb;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 0;          /* remove horizontal padding so it touches screen edges */
  width: 100vw;             /* take full viewport width */
  margin: 0;                /* prevent body margins from adding spacing */
  overflow: hidden;
}

.connection-card {
  position: relative;
  width: 100%;              /* full width of parent */
  height: 600px;
  border-radius: 10px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
  max-width: none;           /* remove the max-width limit */
}


.connection-card .background-img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
  z-index: 1;
}

.content {
  position: relative;
  z-index: 2;
  padding: 0 40px;
}

.content h5 {
  font-family: 'DM Sans', sans-serif;
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #d4af37;
  margin-bottom: 0.5rem;
}

.content h1 {
  font-size: 34px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #fff;
}

.content p {
  font-family: 'DM Sans', sans-serif;
  font-size: 17px;
  margin-bottom: 2rem;
  line-height: 1.6;
  color: #f1f1f1; 
}

.content button {
  padding: 15px 40px;
  font-size: 16px;
  font-family: 'Cormorant Garamond', sans-serif;
  background-color: #2d2c2a;
  color: #ebebeb;
  border: 1px solid #2d2c2a;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 500;
  transition: all 0.3s ease;
  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
  letter-spacing: 2px;
}

.content button:hover {
  background-color: #ebebeb;
  color: #2d2c2a;
  border-color: #2d2c2a;
  transform: translateY(-3px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.25);
}

/* MOBILE & TABLET RESPONSIVENESS */
@media screen and (max-width: 1024px) {
  .connection-card {
    height: 500px;
  }

  .content h1 {
    font-size: 2.2rem;
  }

  .content p {
    font-size: 1rem;
  }

  .content button {
    padding: 12px 30px;
    font-size: 16px;
  }
}

@media screen and (max-width: 768px) {
  .connection-card {
    height: 450px;
  }

  .content h5 {
    font-size: 1rem;
  }

  .content h1 {
    font-size: 1.8rem;
  }

  .content p {
    font-size: 0.95rem;
  }

  .content button {
    padding: 10px 25px;
    font-size: 14px;
  }

  .section-wrapper {
    padding: 30px 15px;
  }
}

@media screen and (max-width: 480px) {
  .connection-card {
    height: 400px;
  }

  .content h5 {
    font-size: 0.9rem;
  }

  .content h1 {
    font-size: 1.5rem;
  }

  .content p {
    font-size: 0.85rem;
  }

  .content button {
    padding: 8px 20px;
    font-size: 13px;
  }
}
</style>

 

<?php include 'footer.php'; ?>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>