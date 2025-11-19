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


/* Vertical Nav in Hero */
.hero-nav {
  position: absolute;
  display: flex;
  flex-direction: column; /* stack links vertically */
  gap: 20px; /* spacing between links */
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 5;
  text-align: center;
}

.hero-nav a {
  color: #fff;
  font-size: 2rem;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: color 0.3s;
}

.hero-nav a:hover {
  color: #7c806f;
}

/* Mobile adjustments */
@media (max-width: 768px) {
  .hero-nav a {
    font-size: 1rem;
  }
  .hero-nav {
    gap: 15px;
  }
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
  <img src="images/vision.jpg" alt="Hero Image" class="hero-image">

  <!-- Vertical Nav Links -->
  <div class="hero-nav">
    <a href="#section-feature">About</a>
    <a href="#pricing-section">Pricing</a>
    <a href="#faq-wrapper">FAQ</a>
  </div>
</section>





<!-- === NEW SECTION: Image Left, Text Right === -->
<section id="section-feature" class="section-feature py-5">
  <div class="container">
    <div class="row align-items-start gx-0"> <!-- remove horizontal spacing -->
      <!-- Left Column: Portrait Image -->
      <div class="col-md-6 text-center pe-2">
        <img src="images/EJSarahNR-2-1-683x1024.jpg" alt="Portrait" class="feature-portrait">
      </div>

      <!-- Right Column: Title, Description, Button -->
      <div class="col-md-6 right-column ps-2">
        <h1 class="feature-title mb-4">Welcome to <br> Stavick Studios</h1>
        <p class="feature-description mb-4">
          At Stavick Studios, we specialize in capturing timeless memories that tell your unique story. Every session is carefully crafted to reflect your personality and style, blending creativity with heartfelt storytelling. Our goal is to ensure that each moment is unforgettable and truly represents the essence of your journey.
        </p>
        <p class="feature-description mb-4">
          Our approach combines artistic vision with a relaxed and natural atmosphere. We focus on the details—the smiles, the glances, the small intimate moments—that transform every session into an emotional experience. From candid laughter to quiet, heartfelt moments, we capture memories you will treasure forever.
        </p>
        <a href="contact.php" class="btn btn-custom">Book Your Session</a>
      </div>
    </div>
  </div>
</section>

<style>
/* Tighten columns */
.right-column {
  margin-left: -50px; /* overlap text over image for tighter spacing */
}

.section-feature .feature-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 34px;
  color: #2d2c2a;
  text-transform: uppercase;
}

.section-feature .feature-description {
  font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  line-height: 1.8;
  color: #2d2c2a;
  text-align: justify;
}

/* Custom button style */
.btn-custom {
  background-color: #2d2c2a;
  color: #ebebeb;
  width: 450px;
  height: 40px;
  font-size: 18px;
  font-weight: 400;
  letter-spacing: 1px;
  border-radius: 4px;
  display: inline-block;
  text-align: center;
  line-height: 25px;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-custom:hover {
  background-color: #1f1e1c;
  color: #ebebeb;
}

/* Portrait image */
.feature-portrait {
  width: 400px;
  height: 500px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .section-feature .feature-title {
    font-size: 2rem;
  }

  .section-feature .feature-description {
    font-size: 1rem;
  }

  .section-feature .row {
    flex-direction: column-reverse;
  }

  .section-feature .col-md-6 {
    text-align: center;
    margin-bottom: 2rem;
    padding-left: 0;
    padding-right: 0;
  }

  .feature-portrait {
    width: 240px;
    height: 320px;
  }

  .btn-custom {
    width: 180px;
    height: 36px;
    line-height: 36px;
  }

  .right-column {
    margin-left: 0; /* reset negative margin on mobile */
  }
}
</style>





<!-- Pricing & Packages Section -->
<section id= "pricing-section"class="pricing-section">
  <!-- Parallax Background -->
  <div class="pricing-parallax" style="background-image: url('images/DJI_0292.jpg');"></div>

  
  <!-- Content Card -->
  <div class="pricing-card">
    <!-- Row 1: Title -->
    <div class="pricing-title">
      <h2>THE INVESTMENT</h2>
    </div>
    
    <!-- Row 2: Subtitle -->
    <div class="pricing-subtitle">
      <h3>Tailored Photography Experiences</h3>
    </div>
    
    <!-- Row 3: Description -->
    <div class="pricing-description">
      <p>Each package is carefully crafted to preserve your unique love story with the artistry and attention it deserves. From intimate elopements to grand celebrations, we offer options to suit every vision and budget.</p>
    </div>
    
    <!-- Row 4: Image/GIF -->
    <div class="pricing-image">
      <img src="images/story-bg.jpg" alt="Wedding Photography Package Example">
    </div>
        <!-- Row 5: Sub-Description -->
   <div class="pricing-sub-description">
<p>Our Package starts at <span style="font-style: italic; color: #74A12E; font-weight: 400">$5,000</span></p>

</div>

  </div>
</section>

<style>
/* Pricing Section Styles */
.pricing-section {
  position: relative;
  min-height: 100vh;
  padding: 6rem 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  margin: 4rem 0 0;
}

.pricing-parallax {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  z-index: -1;
  filter: brightness(0.7);
}


.pricing-parallax::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.4);
}

.pricing-card {
  background: #ebebeb;
  width: 100%;
  max-width: 1000px;
  padding: 4rem;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.pricing-title {
  text-align: center;
  margin-bottom: 2rem;
}

.pricing-title h2 {
  font-family: 'Cormorant Garamond', sans-serif;
  font-size: 34px;
  font-weight: 400;
  color: #2d2c2a;
  margin-bottom: 1rem;
}

.pricing-subtitle {
  text-align: center;
  margin-bottom: 2rem;
}

.pricing-subtitle h3 {
font-family: 'DM Sans', sans-serif;
  font-size: 1.2rem;
  font-weight: 300;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: #2d2c2a;
}

.pricing-description {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 3rem;
}

.pricing-description p {
 font-family: 'DM Sans', sans-serif;
  font-size: 16px;
  line-height: 1.7;
  color: #2d2c2a;
}

.pricing-sub-description {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 3rem;
}
.pricing-sub-description p {
  font-family: 'DM Sans', sans-serif;
   font-size: 16px;
  line-height: 1.7;
  color: #2d2c2a;
  text-transform: uppercase;
  margin-bottom: -50px;
}

.pricing-image {
  margin: 0 auto 3rem;
  max-width: 800px;
}

.pricing-image img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  object-position: center;
}

.pricing-packages {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
  margin-top: 3rem;
}

.package {
  flex: 1;
  min-width: 280px;
  padding: 2rem;
  border: 1px solid rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.package:hover {
  transform: translateY(-5px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.package h4 {
  font-family: 'NewYork', serif;
  font-size: 1.3rem;
  font-weight: 400;
  color: var(--tertiary);
  margin-bottom: 1rem;
  text-align: center;
}

.package-price {
 font-family: 'DM Sans', sans-serif;
  font-size: 1.8rem;
  font-weight: 300;
  color: var(--textcolor);
  text-align: center;
  margin-bottom: 1.5rem;
}

.package-features {
  list-style: none;
}

.package-features li {
 font-family: 'DM Sans', sans-serif;
  font-size: 0.9rem;
  color: #2d2c2a;
  margin-bottom: 0.8rem;
  position: relative;
  padding-left: 1.5rem;
}

.package-features li::before {
  content: '•';
  position: absolute;
  left: 0;
  color: #c7c2bc;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .pricing-section {
    padding: 4rem 1rem;
  }
  
  .pricing-card {
    padding: 2rem;
  }
  
  .pricing-title h2 {
    font-size: 2rem;
  }
  
  .pricing-packages {
    flex-direction: column;
  }
  
  .package {
    min-width: 100%;
  }
  
  .pricing-image img {
    height: 300px;
  }
}

@media (max-width: 480px) {
  .pricing-title h2 {
    font-size: 1.8rem;
  }
  
  .pricing-subtitle h3 {
    font-size: 1rem;
  }
  
  .pricing-description p {
    font-size: 0.9rem;
  }
}
</style>

<script>
// Add divider animation for pricing section
document.addEventListener("DOMContentLoaded", function() {
  const pricingDivider = document.querySelector('.pricing-title .divider');
  
  if (pricingDivider) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          pricingDivider.classList.add('animate');
        }
      });
    }, { threshold: 0.5 });
    
    observer.observe(pricingDivider);
  }
});
</script>

<!-- FAQ SECTION -->
<section id="faq-wrapper" class="faq-wrapper">
  <h2 class="faq-heading">NEED HELP?​​</h2>
  <div class="faq-section">
    <h3 class="faq-subheading">Frequently Asked Questions</h3>

    <div class="faq-item">
      <button class="faq-question">DO YOU TRAVEL FOR WEDDINGS?</button>
      <div class="faq-answer">
        <p>We are based out of California, but we serve clients all around the world. Over the past few years, we have had the privilege of documenting countless love stories, and each wedding has been a unique and precious experience.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">DO YOU OFFER DESTINATION WEDDING DISCOUNTS?</button>
      <div class="faq-answer">
        <p>Ej and Sarah have a Bucket List to travel to the following locations. If your wedding is in one of these places, you’re eligible for a DISCOUNT on all our packages:</p>
        <p><strong>Italy, Iceland, Greece, Turkey, Bali, London, Hawaii, Bora Bora, Bahamas, New York, Mexico, Spain, and Dubai.</strong></p>
        <p>Active military and veterans, firefighters, and law enforcement receive a <strong>15% discount</strong> on all our packages.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">HOW MANY VIDEOGRAPHERS/PHOTOGRAPHERS DO I NEED AT MY WEDDING?</button>
      <div class="faq-answer">
        <p>We recommend having at least two videographers and photographers at your wedding. While one can get the job done, having two shooters allows for more storytelling opportunities and dynamic coverage from multiple angles. Believe us — we’ve solo-shot many weddings before, and the difference is significant!</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">HOW MUCH IS THE DEPOSIT?</button>
      <div class="faq-answer">
        <p>We require a <strong>50% deposit</strong> to reserve your wedding date. The remaining balance is due one month before your wedding day.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">CAN I USE MY OWN MUSIC?</button>
      <div class="faq-answer">
        <p>We license all music through <strong>Musicbed</strong>. Due to copyright restrictions, we don’t take music requests. We promise to find songs that elevate your love and personality through the film. However, if there’s a song you absolutely need, let us know and we’ll see if we can acquire the licensing rights for your film.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHEN SHOULD I EXPECT MY FILM/PHOTOS?</button>
      <div class="faq-answer">
        <p>We don’t rush post-production — every story is crafted with care. Our delivery timelines are:</p>
        <ul>
          <li><strong>Photos:</strong> Within 8 weeks</li>
          <li><strong>Highlight Films / Ceremony / Speeches / Dancing:</strong> Within 8 weeks</li>
          <li><strong>Documentary Films:</strong> Within 3 months</li>
        </ul>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHAT IS AN ADVENTURE SESSION?</button>
      <div class="faq-answer">
        <p>An adventure session is a short film designed just for you, based on your love story. We’ll go to your favorite location — whether it’s skydiving, snorkeling, or horseback riding. This creative session takes storytelling to the next level. During your wedding reception, we’ll play your pre-wedding adventure film using a 4K laser projector for your guests to enjoy.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHAT IS A DOCUMENTARY FILM?</button>
      <div class="faq-answer">
        <p>A documentary film is a long-form, fully edited video (usually one hour or more) that covers your entire wedding day — from getting ready to the reception. It’s an emotional, comprehensive retelling of your day from start to finish.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHAT HAPPENS IF YOU CAN’T MAKE IT TO OUR WEDDING?</button>
      <div class="faq-answer">
        <p>This would only happen in extreme circumstances (act of God, illness, or death). In such a case, we would do everything possible to find a trusted replacement team with a similar style and level of quality to document your day.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHAT IF WE NEED TO CANCEL OR RESCHEDULE OUR WEDDING?</button>
      <div class="faq-answer">
        <p>The retainer (deposit) is a non-refundable payment made as part of your booking confirmation, in addition to a signed contract, to reserve our services for your specific date. If you cancel the contract, the retainer is forfeited and cannot be transferred to another date or client.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">HOW DO WE RECEIVE OUR PHOTOS?</button>
      <div class="faq-answer">
        <p>Once editing is complete, we upload your photos to a password-protected online gallery and send the link via email. You can share this with friends and family or download all images to your computer. The gallery remains available for one year, and we’ll also mail you a USB backup of your images.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">HOW DO WE RECEIVE OUR FILMS?</button>
      <div class="faq-answer">
        <p>When your films are complete, we upload your highlight and full films to a private, customized online gallery and send them via email. Like the photos, the videos are stored online for one year, and we’ll also provide a USB copy as a backup.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">WHAT RIGHTS DO WE HAVE?</button>
      <div class="faq-answer">
        <p>You have full rights to download, print, and share your images for personal use or on social media. For films, you may download and share them for personal or social media purposes as well.</p>
      </div>
    </div>

    <div class="faq-item">
      <button class="faq-question">DO YOU PHOTOSHOP YOUR CLIENTS?</button>
      <div class="faq-answer">
        <p>Our photography and videography celebrate love and authenticity. We promote self-love and body positivity, so we don’t alter appearances beyond removing temporary blemishes like bruises or acne. We won’t Photoshop you to change what’s real and true. However, if there’s something you’re self-conscious about, please let us know — we’ll be mindful during the shoot to ensure you feel confident and comfortable.</p>
      </div>
    </div>

  </div>
</section>

<style>
/* ===== FAQ SECTION STYLING ===== */
.faq-wrapper {
  background: #2d2c2a; /* Transparent section */
  padding: 80px 20px;
  text-align: center;
  font-family: 'DM Sans', sans-serif;
  color: #ebebeb;
}

.faq-heading {
  font-size: 24px;
  margin-bottom: 10px;
  letter-spacing: 1px;
    color: #ebebeb;
     font-weight: 100 !important; 
}

.faq-subheading {
  font-family: 'Cormorant Garamond', sans-serif;
 font-size: 34px;
  margin-bottom: 40px;
  color: #ebebeb;
  text-align: center;
  text-transform: uppercase;
  font-weight: 100;
}

.faq-section {
  max-width: 800px;
  margin: 0 auto;
  text-align: left;
}

/* FAQ ITEM */
.faq-item {
  border-bottom: 1px solid #ddd;
  padding: 15px 0;
}

/* QUESTION BUTTON */
.faq-question {
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  font-size: 18px;
  font-weight: 500;
  color: #ebebeb;
  cursor: pointer;
  padding: 10px 0;
  transition: color 0.3s ease;
  position: relative;
}

.faq-question::after {
  content: '+';
  position: absolute;
  right: 0;
  font-size: 1.5rem;
  transition: transform 0.3s ease;
}

.faq-item.active .faq-question::after {
  transform: rotate(45deg);
}

/* ANSWER AREA */
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: all 0.4s ease;
  opacity: 0;
  font-size: 16px;
  line-height: 1.6;
  color: #c7c2bc;
}

.faq-item.active .faq-answer {
  max-height: 300px; /* Enough for typical answer length */
  opacity: 1;
  margin-top: 8px;
}

/* Hover/active effects */
.faq-question:hover {
  color: #d4af37;
}

@media screen and (max-width: 768px){
  .faq-wrapper {
    margin-top: -50px;
    margin-bottom: -250px;
  }
    .faq-heading {
    font-size: 20px;
  }
  .faq-subheading {
    font-size: 28px;
  }
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
 .faq-wrapper {
    margin-top: -50px;
    margin-bottom: -250px;
  }
     .faq-heading {
    font-size: 20px;
  }
    .faq-subheading {
    font-size: 28px;
  }
}

</style>

<script>
  // FAQ toggle functionality
  document.querySelectorAll('.faq-question').forEach((btn) => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;
      item.classList.toggle('active');
    });
  });
</script>
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
        <a href="services.php" class="experience-section-btn">MORE OF WHAT YOU'LL EXPERIENCE</a>
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
  padding: 90px 20px;
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
  font-size: 34px;
  
  margin-bottom: 20px;
  font-family: 'Cormorant Garamond', serif;
  color: #111;
}

.experience-section-desc {
  font-size: 16px;
  margin-bottom: 15px;
  line-height: 1.6;
  color: #333;
}

.experience-section-btn {
  display: inline-block;
  text-decoration: none;
  font-size: 16px;
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
  font-size: 26px;
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
  .experience-section {
    padding: 60px 30px;
    margin-top: 200px;
  }
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
    font-size: 34px;
  }

  .experience-section-title-item {
    font-size: 24px;
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


<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
