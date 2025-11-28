<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stavick Studios</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Cormorant Garamond', serif;
            color: #2d2c2a;
            background: #ebebeb;
        }
        h1, h2, h3, h4, h5 {
            font-family: 'Cormorant Garamond', serif;
        }
        p {
            font-family: 'DM Sans', sans-serif;
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
          margin-bottom: -50px;
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
        /* General Section Styling */
        section {
            padding: 80px 20px;
            text-align: center;
        }
 /* Featured Services Section */
        .featured-services {
            padding: 100px 20px 0 0;
            text-align: center;
        }
        
        .section-title {
            font-size: 34px;
            
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 1rem;
            color: #2d2c2a;
        }
        
        .section-subtitle {
            font-family: 'DM Sans', sans-serif;
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #5a5a5a;
        }
        
        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
        }

     .service-card {
          padding: 40px 30px;
          border-radius: 12px;
          max-width: 400px;
          border: 1px solid #ddd; /* Added border */
          text-align: center;
          transition: all 0.4s ease;
          position: relative;
          overflow: hidden;
          flex: 1;
          min-width: 350px;
          /* box-shadow removed */
      }

        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .service-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #7c806f, #595c51ff);
        }
        
        .service-icon {
            font-size: 26px;
            color: #7c806f;
            margin-bottom: 25px;
        }
        
        .service-card h4 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            
            color: #2d2c2a;
        }
        
        .service-card p {
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 25px;
            color: #5a5a5a;
        }
        
        .service-features {
            text-align: left;
            margin-bottom: 30px;
        }
        
        .service-features li {
            font-family: 'DM Sans', sans-serif;
            margin-bottom: 12px;
            padding-left: 30px;
            position: relative;
            color: #5a5a5a;
        }
        
        .service-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #7c806f;
            font-weight: bold;
        }
        
       .service-cta {
    display: inline-block;
    padding: 12px 30px;
    background-color: #212529; /* same as .btn-dark background */
    color: #fff;
    border: 1px solid #212529; /* border same as background */
    border-radius: 6px;
    text-decoration: none;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    transition: all 0.3s ease;
    cursor: pointer;
}

/* Hover state (matches .btn-dark:hover) */
.service-cta:hover {
    background-color: #424649;
    border-color: #373b3e;
    color: #fff;
}

/* Active state (when clicked) */
.service-cta:active {
    background-color: #4d5154;
    border-color: #373b3e;
    color: #fff;
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

/* Focus state (for accessibility) */
.service-cta:focus {
    outline: none;
    box-shadow: 0 0 0 0.25rem rgba(66, 70, 73, 0.5);
}

/* Disabled state */
.service-cta:disabled,
.service-cta.disabled {
    background-color: #212529;
    border-color: #212529;
    color: #fff;
    opacity: 0.65;
    cursor: not-allowed;
    pointer-events: none;
}

        .service-badge {
            position: absolute;
            top: 20px;
            right: -30px;
            background: #7c806f;
            color: #2d2c2a;
            padding: 5px 30px;
            transform: rotate(45deg);
            font-size: 0.8rem;
            
            font-family: 'DM Sans', sans-serif;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .services-container {
                flex-direction: column;
                align-items: center;
            }
            
            .service-card {
                min-width: 100%;
                max-width: 500px;
            }
            .featured-services {
                padding: 150px 20px 0 0;
                margin-bottom: -200px;
            }
        }
        
        @media (max-width: 576px) {
            .section-title {
                font-size: 2.2rem;
            }
            
            .service-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>
<section class="hero">
  <img src="images/blackandwhite.jpg" alt="Hero Image" class="hero-image">
</section>
<!-- QUALITY | VALUE | TRUST SECTION -->
<section>
    <h4 style="font-size: 22px;">QUALITY | VALUE | TRUST​​​​​</h4>
    <h1 style="  font-size: 34px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a;">A TREASURED LOVE STORY IN THE MAKING</h1>
   <p style="font-size: 16px;">
  Capturing your memories well requires thoughtful intention and preparation. And a team that's committed to top-notch service and quality. <br>
  We provide all of the above and so much more.
</p>

</section>
<section style="background-color: #ebebeb; color: #2d2c2a; padding: 60px 15px;">
  <div style="max-width: 1200px; margin: 0 auto;">

    <h2 style="font-size: 34px;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-family: 'Cormorant Garamond', serif;
      margin-bottom: 100px;
      margin-top: -50px;
      text-align: center;
      color: #2d2c2a;">
      HOW IT WORKS
    </h2>

    <!-- VISION ROW -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px;">
      <div style="flex: 1 1 300px; text-align: center;">
        <div class="fixed-img">
          <img src="images/vision.jpg" alt="Vision">
        </div>
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 26px; letter-spacing: 1px; text-transform: uppercase; font-family: 'Cormorant Garamond', serif; margin-bottom: 10px; color: #2d2c2a; text-align:left;">VISION</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.6; text-align: justify;">
          The best way to meet and exceed your expectations is to have a clear picture of what those expectations are. So, we'll start with a video call to get to know more about you, your needs, and what you envision for your photos and films.
        </p>
      </div>
    </div>

    <!-- APPROACH ROW (REVERSED) -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px; flex-direction: row-reverse;">
      <div style="flex: 1 1 300px; text-align: center;">
        <div class="fixed-img">
          <img src="images/approach.jpeg" alt="Approach">
        </div>
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 26px; letter-spacing: 1px; text-transform: uppercase; font-family: 'Cormorant Garamond', serif; margin-bottom: 10px; color: #2d2c2a; text-align: right;">APPROACH</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.6; text-align: justify;">
          Whether you choose photos, videos, or both, we'll send you a detailed questionnaire to confirm the details and dynamics of your day. By understanding your priorities—and the plan—we can prepare a solid approach to preserve your day.
        </p>
      </div>
    </div>

    <!-- CRAFT ROW -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px; text-align:left;">
      <div style="flex: 1 1 300px; text-align: center;">
        <div class="fixed-img">
          <img src="images/craft.jpg" alt="Craft">
        </div>
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 26px; letter-spacing: 1px; text-transform: uppercase; font-family: 'Cormorant Garamond', serif; margin-bottom: 10px; color: #2d2c2a;">CRAFT</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 16px; line-height: 1.6; text-align: justify;">
          We'll focus on the real moments and unique details that enhance your photos and film and encompass the full story of your day. Maintaining natural light, real colors, and true beauty ensures nothing short of an exceptional final result.
        </p>
      </div>
    </div>

  </div>
</section>

<style>
.fixed-img {
  width: 400px;
  height: 500px;
  overflow: hidden;
  margin: 0 auto;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.fixed-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media screen and (max-width: 768px){
  .how-row p:last-child { margin-bottom: 0;
   flex-direction: column !important;
    text-align: center !important;
    margin-left: 15px;
    margin-right: 15px; }
  .fixed-img {
  width: 300px;
  height: 400px;
  overflow: hidden;
  margin: 0 auto;
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}
  .how-row h3,
  .how-row p {
    text-align: center !important;
  }
    h2 {
  margin-top: -120px !important;   /* smaller top margin */
    margin-bottom: 30px !important; /* smaller bottom margin */
  }
}

@media screen and (min-width: 768px) and (max-width: 1024px){
  .how-row p:last-child { margin-bottom: 0; }
    h2 {
    margin-top: -40px !important;   /* smaller top margin */
    margin-bottom: 40px !important; /* smaller bottom margin */
  }
}

</style>



<!-- MEDIA FEATURES SECTION -->
<section class="media-features">
  <h2>Media Features</h2>
  <div class="carousel">
    <div class="carousel-track">
      <!-- First set of logos -->
      <a href="https://www.weddingwire.com/reviews/stavick-studios/ccf3c49204b1a46b.html" target="_blank">
        <img src="images/wedding_wire.png" alt="Wedding Wire" class="media-logo">
      </a>
      <a href="https://www.google.com/search?q=stavick+studio" target="_blank">
        <img src="images/google-reviews.png" alt="Google Reviews" class="media-logo">
      </a>
      <a href="https://www.theknot.com/marketplace/stavick-studios-antioch-ca-2059950" target="_blank">
        <img src="images/the-knot.png" alt="The Knot" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/vogue.png" alt="Vogue" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/azb-logo.png" alt="Arizona Bride" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/wedding_sutra_featured_charcoal_1.png" alt="Wedding Sutra" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/sab.webp" alt="South Asian Magazine" class="media-logo">
      </a>

      <!-- Duplicate logos for seamless infinite scroll -->
      <a href="https://www.weddingwire.com/reviews/stavick-studios/ccf3c49204b1a46b.html" target="_blank">
        <img src="images/wedding_wire.png" alt="Wedding Wire" class="media-logo">
      </a>
      <a href="https://www.google.com/search?q=stavick+studio" target="_blank">
        <img src="images/google-reviews.png" alt="Google Reviews" class="media-logo">
      </a>
      <a href="https://www.theknot.com/marketplace/stavick-studios-antioch-ca-2059950" target="_blank">
        <img src="images/the-knot.png" alt="The Knot" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/vogue.png" alt="Vogue" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/azb-logo.png" alt="Arizona Bride" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/wedding_sutra_featured_charcoal_1.png" alt="Wedding Sutra" class="media-logo">
      </a>
      <a href="#" target="_blank">
        <img src="images/sab.webp" alt="South Asian Magazine" class="media-logo">
      </a>
    </div>
  </div>
</section>

<style>
.media-features { 
  background-color: #7c806f;
  padding: 50px 20px;
  text-align: center;
}


.media-features h2 {
  font-size: 34px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 50px;
  color: #ebebeb;
}

.carousel {
  width: 100%;
  overflow: hidden;
  position: relative;
  cursor: grab;
}

.carousel-track {
  display: flex;
  width: max-content;
  animation: scroll 20s linear infinite;
  user-select: none;
}

.carousel-track a {
  display: flex;
  align-items: center;
  justify-content: center;
}

.media-logo {
  max-width: 250px;
  height: auto;
  object-fit: contain;
  filter: brightness(0%) saturate(100%);
  opacity: 0.8;
  margin: 0 40px;
  transition: all 0.3s ease;
}

.media-logo:hover {
  opacity: 1;
  transform: scale(1.05);
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* Responsive */
@media screen and (max-width: 1024px) {
  .media-logo {
    max-width: 170px;
    margin: 0 20px;
  }
}

@media screen and (max-width: 768px) {
  .media-logo {
    max-width: 150px;
    margin: 0 15px;
  }
}

@media screen and (max-width: 480px) {
  .media-logo {
    max-width: 100px;
    margin: 0 10px;
  }
}
</style>

<script>
// Swipe support
const track = document.querySelector('.carousel-track');
let isDown = false;
let startX;
let scrollLeft;

track.addEventListener('mousedown', (e) => {
  isDown = true;
  track.style.animationPlayState = 'paused';
  startX = e.pageX - track.offsetLeft;
  scrollLeft = track.scrollLeft;
  track.style.cursor = 'grabbing';
});
track.addEventListener('mouseleave', () => {
  isDown = false;
  track.style.cursor = 'grab';
  track.style.animationPlayState = 'running';
});
track.addEventListener('mouseup', () => {
  isDown = false;
  track.style.cursor = 'grab';
  track.style.animationPlayState = 'running';
});
track.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - track.offsetLeft;
  const walk = (x - startX) * 2;
  track.scrollLeft = scrollLeft - walk;
});
track.addEventListener('touchstart', (e) => {
  isDown = true;
  track.style.animationPlayState = 'paused';
  startX = e.touches[0].pageX - track.offsetLeft;
  scrollLeft = track.scrollLeft;
});
track.addEventListener('touchend', () => {
  isDown = false;
  track.style.animationPlayState = 'running';
});
track.addEventListener('touchmove', (e) => {
  if(!isDown) return;
  const x = e.touches[0].pageX - track.offsetLeft;
  const walk = (x - startX) * 2;
  track.scrollLeft = scrollLeft - walk;
});
</script>




<!-- FEATURED SERVICES SECTION -->
  <section class="featured-services">
        <h2 class="section-title">Featured Services</h2>
        
        <div class="services-container">
            <!-- Films Card -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-film"></i>
                </div>
                <h4>FILMS</h4>
                <p>As a photo and video team, we obviously believe both are important. But, if we had to choose, film is the best way to capture a wedding day.</p>
                <p>Why? Because there's something irreplaceable about seeing and hearing your loved ones and moments again. And that's something you'll always treasure.</p>
                
                <ul class="service-features">
                    <li>WEDDING DAY COVERAGE</li>
                    <li>DOCUMENTARY FILM</li>
                    <li>HIGHLIGHT FILM</li>
                    <li>TRAILER FILM</li>
                    <li>FULL CEREMONY FILM</li>
                    <li>FULL TOASTS FILM</li>
                    <li>FULL DANCE FILM</li>
                    <li>PRE-WEDDING FILM</li>
                    <li>ADVENTURE SESSION</li>
                </ul>
                
                <a href="stavick-films.php" class="service-cta">Explore Films</a>
                
            </div>

            <!-- Photos Card -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h4>PHOTOS</h4>
                <p>Wedding photos are still moments of the past that become moments you treasure for a lifetime.</p>
                <p>A small river named Duden flows by their place.</p>
                
                <ul class="service-features">
                    <li>WEDDING DAY COVERAGE</li>
                    <li>ENGAGEMENT SESSION</li>
                    <li>PRIVATE ONLINE GALLERY</li>
                    <li>ALBUM GALLERY</li>
                </ul>
                
                <a href="stavick-photography.php" class="service-cta">Explore Photos</a>
            </div>
        </div>
    </section>


<div class="section-wrapper">
  <div class="connection-card">
    <img class="background-img" src="images/captured.jpeg" alt="Wedding background">
    <div class="overlay"></div>
    <div class="content">
      <h5>CAPTURE THE MAGIC OF YOUR SPECIAL DAY</h5>
      <h1>PRESERVE EVERY MOMENT FOREVER</h1>
      <p>With our expert wedding photography and videography services, you can relive your wedding day whenever you want. From the intimate glances to the exuberant celebrations, our team will be there to document every precious moment — creating a timeless collection of images and films that tell your love story.</p>
      <button onclick="window.location.href='contact.php'" >RESERVE YOUR DATE</button>
    </div>
  </div>
</div>

<style>
.section-wrapper {
  width: 100vw;              /* Full viewport width */
  min-height: 100vh;         /* Full viewport height */
  background-color: #ebebeb;
  display: flex;
  justify-content: center;
  align-items: center;       /* Vertically center the card */
  padding: 0;                /* Remove extra padding to allow full width */
  box-sizing: border-box;
  overflow-x: hidden;
}

.connection-card {
  position: relative;
  width: 100%;               /* Full width */
  height: 600px;
  border-radius: 0;          /* Optional: remove rounded corners for full-width look */
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
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
  background-color: rgba(0,0,0,0.35);
  z-index: 1;
}

.content {
  position: relative;
  z-index: 2;
  padding: 0 40px;
  max-width: 900px; /* Keep content centered and readable */
}

.content h5 {
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #c7c2bc;
  margin-bottom: 0.5rem;
}

.content h1 {
  font-size: 34px;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1.5rem;
  color: #fff;
}

.content p {
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  margin-bottom: 2rem;
  line-height: 1.6;
  color: #f1f1f1;
}

.content button {
  padding: 15px 40px;
  font-size: 16px;
  font-family: 'Cormorant Garamond', serif;
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
  .section-wrapper {
    margin-bottom: -120px;
  }
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
    .section-wrapper {
    margin-bottom: -120px;
  }
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>