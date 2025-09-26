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
        
       .hero {
            position: relative;
            width: 95vw;
            height: 50vw;
            max-width: 2000px;
            max-height: 800px;
            margin: 40px auto;
            overflow: hidden;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero video {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }
        .hero-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transform: translate(-50%, -50%);
            background: transparent;
            border-radius: 10px;
            padding: 20px 30px;
        }
        .hero-logo img {
            max-width: 320px;
            height: auto;
            display: block;
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
            font-weight: 400;
            text-align: right;
            text-shadow: 0 2px 8px rgba(0,0,0,0.5);
            max-width: 350px;
        }
        @media (max-width: 768px) {
            .hero-logo img { max-width: 140px; }
            .hero-caption-left, .hero-caption-right {
                font-size: 1.1rem;
                max-width: 180px;
                left: 10px;
                right: 10px;
                bottom: 10px;
            }
           .hero-logo, .hero-caption-left, .hero-caption-right {
              display: none;
           } 
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

    <section class="hero">
        <video autoplay muted loop playsinline>
            <source src="videos\Stavick Studios - Website background video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-logo">
            <img src="https://stavickstudios.com/wp-content/uploads/2023/05/banner-logo.png" alt="Logo">
        </div>
        <div class="hero-caption-left">
            Awe-Inspiring Images That Move You
        </div>
        <div class="hero-caption-right">
            Based in California | Available Worldwide
        </div>
    </section>
    <section class="lux-section text-center">
  <div class="container">
    <!-- 1st Row: Logo -->
    <div class="row mb-4">
      <div class="col">
        <div class="lux-logo">
          <img src="https://stavickstudios.com/wp-content/uploads/2023/05/header-logo.png" alt="Logo" class="img-fluid">
        </div>
      </div>
    </div>

    <!-- 2nd Row: Title -->
    <div class="row mb-4">
      <div class="col">
        <h1 class="lux-title">Eternal Moments Photography</h1>
      </div>
    </div>

    <!-- 3rd Row: Vimeo Video Cover with Badge -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
<div class="lux-video position-relative" style="width:1000px; height:450px; overflow:hidden; border-radius:8px;">
  <iframe 
    src="https://player.vimeo.com/video/848916194?h=e5fae21f19&background=1&autoplay=1&muted=1&loop=1" 
    frameborder="0"
    allow="autoplay; fullscreen; picture-in-picture"
    allowfullscreen
    class="lux-iframe">
  </iframe>
  <!--span class="badge text-dark position-absolute bottom-0 start-0 m-3 fs-5 px-3 py-2">
    John & Maria
  </span-->
</div>

      </div>
    </div>

    <!-- 4th Row: Description -->
<div class="row mb-4">
  <div class="col-lg-8 mx-auto">
    <div class="lux-desc p-4">
      <p class="fs-6 mb-0">
        Stavick Studios is dedicated to creating exceptional wedding films for couples who want to celebrate their love with elegance and style, while also inspiring and guiding aspiring filmmakers on their own creative paths. Whether it’s capturing a romantic escape in Venice or sharing knowledge through hands-on workshops, 
        Stavick Studios serves sophisticated, adventurous couples and wedding professionals across the globe.
      </p>
    </div>
  </div>
</div>


    <!-- 5th Row: Button -->
    <div class="row">
      <div class="col">
        <a href="#contact" class="btn btn-dark btn-lg px-5 rounded-pill shadow">
    Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<style>/* === Section Wrapper === */
.lux-section {
  padding: 60px 20px; /* desktop spacing */
}

@media (max-width: 576px) {
  .lux-section {
    padding: 20px 10px; /* tighter spacing on phones */
  }

  .lux-section .row {
    margin-bottom: 0.75rem !important; /* rows closer together */
  }

  .lux-section .row:last-child {
    margin-bottom: 0 !important; /* remove last gap */
  }
}

/* === Title === */
.lux-title {
  font-size: 3rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
}

@media (max-width: 768px) {
  .lux-title {
    font-size: 2rem;
    letter-spacing: 1px;
    margin-bottom: -200px;
  }
}

@media (max-width: 576px) {
  .lux-title {
    font-size: 1.6rem;
  }
}

/* === Description Box === */
.lux-desc {
  border: 1px solid #2d2c2a;
  font-family: 'DM Sans', sans-serif;
  text-align: center;
  padding: 1.5rem;
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  font-weight: 400;
  box-sizing: border-box;
}

@media (max-width: 576px) {
  .lux-desc {
    padding: 1rem;
    font-size: 0.95rem;
  }
}

/* === Badge === */
.badge {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 45px;
  background: #ebebeb;
  font-family: 'Cormorant Garamond', sans-serif;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  border-radius: 0;
  transform: translate(84px, 30px);
  text-align: center;
}

@media (max-width: 576px) {
  .badge {
    transform: translate(85px, -75px);
    font-size: 1rem;
    height: auto;
    padding: 0.5rem 1rem;
  }
}

/* === Video Wrapper === */
.lux-video {
  position: relative;
  width: 100%;
  max-width: 1000px; /* desktop max */
  height: auto;
  aspect-ratio: 16/9; /* keeps ratio */
  border-radius: 8px;
  overflow: hidden;
}

.lux-iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media (max-width: 768px) {
.lux-video {
margin-top: -150px;
transform: translateY(100px);

}
.lux-iframe {
margin-bottom: -50px;
}

}
@media (max-width: 576px) {
  .lux-title {
    font-size: 1.6rem;
  }
}
</style>
<section class="about-section d-flex align-items-stretch">
    <div class="row w-100 g-0">
        <!-- Left: Full Image -->
        <div class="col-md-6 about-image" style="background: url('https://stavickstudios.com/wp-content/uploads/2023/07/Untitled-1-1-822x1024.jpg') center center/cover no-repeat;"></div>

        <!-- Right: Infos -->
        <div class="col-md-6 d-flex flex-column justify-content-center py-5 px-4 text-white">
            <h2 class="about-names mb-4">EJ &sect; SARAH</h2>
            <h3 class="about-title mb-4 text-left">Meet the Filmmakers</h3>
            <p class="about-desc mb-3">
               We capture the big and small moments, personal details, and people that create the complete story.<br><br>
               With us, you’ll not only get images that help you remember your wedding day— you’ll get photos and films that take your breath away. And allow you to see, relive, and fully cherish the whole, beautiful story. Over and over again.
            </p>
            <a href="#" class="about-btn">Learn More</a>
        </div>
    </div>
</section>

<style>
.about-section {
    width: 100%;
    min-height: 100vh;
    background: #7c806f;
    overflow: hidden;
}

.about-image {
    min-height: 100vh;
}

.about-names {
    transform: none;
    font-family: 'Cormorant Garamond', sans-serif;
    font-size: 2rem;
    font-weight: 700;
    letter-spacing: 2px;
    color: #2d2c2a;
    transform: translateY(-100px);
}

.about-title {
    color: #ebebeb;
    font-family: 'Cormorant Garamond', sans-serif;
    font-size: 3rem;
    line-height: 1.3;
    letter-spacing: 2px;
    padding-top: 20px;
    margin-left: 0;
}

.about-desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 1.12rem;
    line-height: 1.7;
    margin-left: 0;
    width: 100%;
    max-width: 600px;
    text-align: justify;
    font-weight: 200;
}

.about-btn {
    display: inline-block;
    font-family: 'Cormorant Garamond', sans-serif;
    font-size: 1.5rem;
    color: #fff;
    border: none;
    background: transparent;
    padding: 2px 6px;
    cursor: pointer;
    width: 200px;
    text-align: center;
    position: relative;
    transition: color 0.2s;
    text-decoration: none;
}

.about-btn::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 1px;
    background-color: #fff;
    transition: background 0.2s;
}

.about-btn:hover::after {
    background-color: #c7c2bc;
}

.about-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
}

@media (max-width: 768px) {
    .about-image {
        min-height: 500px;
    }
.about-title {
    font-size: 3rem;
    text-align: left;
    line-height: 1; /* or 1 for tighter lines */
    padding-top: 10px; /* keeps spacing above the first line */
}

    .about-names {
          transform: translateY(0);
        font-size: 1.5rem;
        text-align: left;
    }
    .about-desc {
        font-size: 1rem;
        margin: 0 auto 20px auto;
        text-align: left;
    }
    .about-btn {
        margin: 0 auto;
    }
}
</style>

<!-- Font Awesome CDN (add in <head> if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<section class="experience-section">
  <div class="container">
    <div class="row">
      
      <!-- Left Column (30%) -->
      <div class="experience-section-left col-lg-4 col-md-12">
        <p class="experience-section-pretitle">EXPECT MORE</p>
        <h2 class="experience-section-title">PICTURE-PERFECT EXPERIENCE</h2>
        <p class="experience-section-desc">
          We're dedicated and passionate about our craft.
        </p>
        <p class="experience-section-desc">
          But, we’re equally committed to providing you with an effortless and enjoyable experience.
        </p>
        <a href="#experience-section-right" class="experience-section-btn">MORE OF WHAT YOU'LL EXPERIENCE</a>
      </div>

      <!-- Right Column (70%) -->
      <div class="experience-section-right col-lg-8 col-md-12" id="experience-section-right">
        
        <!-- Item 1 -->
        <div class="experience-section-item">
          <div class="experience-section-number">1</div>
          <div class="experience-section-content">
            <h3 class="experience-section-title-item" data-toggle="exp-desc-1">
              Devoted Connection <i class="fas fa-arrow-down experience-section-arrow"></i>
            </h3>
            <p class="experience-section-desc-item" id="exp-desc-1">
              We’ll start by personally connecting with you, to gain a deeper understanding of you and your story.
              The bond we create allows you to trust us. And it allows us to fully capture you.
            </p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="experience-section-item">
          <div class="experience-section-number">2</div>
          <div class="experience-section-content">
            <h3 class="experience-section-title-item" data-toggle="exp-desc-2">
              Thoughtful Moments <i class="fas fa-arrow-down experience-section-arrow"></i>
            </h3>
            <p class="experience-section-desc-item" id="exp-desc-2">
              By discovering and honoring your wants, needs, and priorities, we’ll thoughtfully capture and edit the
              moments and people that matter most to you.
            </p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="experience-section-item">
          <div class="experience-section-number">3</div>
          <div class="experience-section-content">
            <h3 class="experience-section-title-item" data-toggle="exp-desc-3">
              Positive Presence <i class="fas fa-arrow-down experience-section-arrow"></i>
            </h3>
            <p class="experience-section-desc-item" id="exp-desc-3">
              We bring a positive, calming presence. And maintain a helpful and friendly demeanor from start to finish.
            </p>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="experience-section-item">
          <div class="experience-section-number">4</div>
          <div class="experience-section-content">
            <h3 class="experience-section-title-item" data-toggle="exp-desc-4">
              Personal Touch <i class="fas fa-arrow-down experience-section-arrow"></i>
            </h3>
            <p class="experience-section-desc-item" id="exp-desc-4">
              We personally edit your photos and film in-house—using carefully-selected music and audio, natural light,
              and a touch of personal creativity.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<style>
/* Section Background */
.experience-section {
  background-color: #ebebeb;
  padding: 60px 20px;
  color: #111;
  font-family: 'DM Sans', sans-serif;
}

/* Left Column */
.experience-section-pretitle {
  font-size: 1rem;
  font-weight: 600;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.experience-section-title {
  font-size: 2.8rem;
  font-weight: 700;
  margin-bottom: 20px;
  font-family: 'Cormorant Garamond', serif;
  color: #111;
}

.experience-section-desc {
  font-size: 1rem;
  margin-bottom: 15px;
  line-height: 1.6;
  color: #333;
}

.experience-section-btn {
  display: inline-block;
  text-decoration: none;
  font-size: 1rem;
  font-weight: 600;
  padding: 12px 24px;
  border: 1px solid #111;
  border-radius: 40px;
  color: #111;
  background: transparent;
  transition: all 0.3s ease;
}

.experience-section-btn:hover {
  background: #111;
  color: #fff;
}

/* Right Column Items */
.experience-section-item {
  display: flex;
  align-items: flex-start; /* change to center vertically with title */
  margin-bottom: 25px;
}

.experience-section-number {
  font-size: 1.5rem;
  font-weight: 700;
  margin-right: 20px;
  font-family: 'Cormorant Garamond', serif;
  color: #111;
  line-height: 1; /* make sure number aligns with title */
  display: flex;
  align-items: center; /* vertically center with title */
  margin-top: 5px;
}
.experience-section-content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.experience-section-title-item {
  font-size: 2rem;
  font-weight: 700;
  margin: 0;
  cursor: pointer;
  font-family: 'Cormorant Garamond', serif;
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: color 0.3s ease;
  color: #111;
}

.experience-section-title-item:hover {
  color: #555;
}

.experience-section-arrow {
  font-size: 1rem;
  margin-left: 10px;
  transition: transform 0.3s ease;
}

/* Smooth slide-down description */
.experience-section-desc-item {
  max-height: 0;
  overflow: hidden;
  margin-top: 10px;
  font-size: 1rem;
  line-height: 1.6;
  font-family: 'DM Sans', sans-serif;
  color: #333;
  transition: max-height 0.5s ease, padding 0.5s ease;
}

.experience-section-desc-item.open {
  max-height: 500px; /* enough to show content */
  padding-top: 10px;
}

/* Open state arrow rotates */
.experience-section-title-item.active .experience-section-arrow {
  transform: rotate(180deg);
}

/* Responsive */
@media (max-width: 768px) {
  .experience-section-title {
    font-size: 2rem;
  }
  .experience-section-title-item {
    transform: translateY(7px);
  }
  .experience-section-btn {
    font-size: 0.9rem;
    padding: 5px 10px;
    margin-bottom: 20px;
    margin-left: 30px;
  }
}

@media (max-width: 576px) {
  .experience-section {
    padding: 40px 15px;
  }

  .experience-section-title {
    font-size: 1.6rem;
  }

  .experience-section-title-item {
    font-size: 1.1rem;
  }

  .experience-section-number {
    font-size: 1.4rem;
    margin-right: 12px;
  }
}
</style>

<script>
// Toggle accordion with smooth slide
document.querySelectorAll('.experience-section-title-item').forEach(title => {
  title.addEventListener('click', () => {
    const targetId = title.getAttribute('data-toggle');
    const desc = document.getElementById(targetId);

    const isOpen = desc.classList.contains('open');

    document.querySelectorAll('.experience-section-desc-item').forEach(el => el.classList.remove('open'));
    document.querySelectorAll('.experience-section-title-item').forEach(el => el.classList.remove('active'));

    if (!isOpen) {
      desc.classList.add('open');
      title.classList.add('active');
    }
  });
});
</script>


<section class="lux-story text-center">
  <div class="lux-overlay"></div>
  <div class="container position-relative">
    <!-- Title -->
    <h2 class="lux-heading mb-3">
      A VISION OF MEANINGFUL MOMENTS
    </h2>
    <p class="lux-subtitle mb-4">
      TIMELESS. CAPTIVATING. EMOTIONAL.<br>
      UNIQUE. CAPTIVATING. EMOTIONAL.
    </p>

    <!-- Description -->
    <div class="lux-desc-story mx-auto mb-5">
      <p>
        When it comes to creating your film and photos, we don’t focus on the latest trends or our own artistic style. <br><br>
        Instead, we use what we learn about your relationship, your love story, your day, and we focus on what these images will mean to you.
      </p>
    </div>

    <!-- Call-to-action -->
    <p class="lux-cta mb-4">CLICK ANY GALLERY TO SEE MORE OF THE STORY</p>

    <!-- Buttons -->
    <div class="d-flex justify-content-center gap-4 flex-wrap">
      <a href="#films" class="lux-btn">FILMS</a>
      <a href="#photos" class="lux-btn">PHOTOS</a>
    </div>
  </div>
</section>

<style>
/* === Story Section with Parallax === */
.lux-story {
  position: relative;
  padding: 50px 20px;
  background: url('images/story-bg.jpg') center center / cover no-repeat fixed;
  color: #fff;
  font-family: 'DM Sans', sans-serif;
  overflow: hidden;
}

/* Overlay */
.lux-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(15, 14, 14, 0.4);
  z-index: 1;
}

/* Content sits above overlay */
.lux-story .container {
  position: relative;
  z-index: 2;
}

/* Headings */
.lux-heading {
  font-size: 2.8rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #fff;
}

.lux-subtitle {
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #f8f8f8;
  line-height: 1.6;
}

/* Description */
.lux-desc-story {
  font-size: 1.12rem !important;
  max-width: 800px;
  line-height: 1.8;
  color: #fff;
  border-left: 2px solid #fff;
  border-right: 2px solid #fff;
  padding: 1.5rem;
  background: rgba(124, 128, 111, 0.5);
  border-radius: 4px;
}

/* Call-to-action */
.lux-cta {
  font-weight: 600;
  font-size: 0.95rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #fff;
}

/* Buttons */
.lux-btn {
  text-decoration: none;
  font-size: 1.1rem;
  font-weight: 600;
  letter-spacing: 1px;
  padding: 12px 28px;
  border: 1px solid #fff;
  border-radius: 50px;
  transition: all 0.3s ease;
  color: #fff;
  background: rgba(124, 128, 111, 0.4);
}

.lux-btn:hover {
  background: #fff;
  color: #111;
}

/* === Tablet Responsive === */
@media (max-width: 768px) {
  .lux-heading {
    font-size: 2rem;
  }
  .lux-subtitle {
    font-size: 1rem;
  }
  .lux-desc-story {
    font-size: 0.95rem;
  }
}

/* === Mobile Responsive (Compact) === */
@media (max-width: 576px) {
  .lux-story {
    padding: 30px 15px; /* less padding */
  }

  .lux-heading {
    font-size: 1.4rem;
    line-height: 1.3;
    margin-bottom: 0.75rem;
  }

  .lux-subtitle {
    font-size: 0.85rem;
    line-height: 1.4;
    margin-bottom: 1rem;
  }

  .lux-desc-story {
    padding: 0.75rem 1rem;
    font-size: 0.85rem !important;
    line-height: 1.5;
    border-left: 1px solid #fff;
    border-right: 1px solid #fff;
  }

  .lux-cta {
    font-size: 0.8rem;
    margin-bottom: 1rem;
  }

  .lux-btn {
    width: 100%;
    max-width: 200px;
    padding: 10px 20px;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
  }
}
</style>

<?php include 'footer.php'; ?>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>