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

        /* General Section Styling */
        section {
            padding: 80px 20px;
            text-align: center;
        }
 /* Featured Services Section */
        .featured-services {
            padding: 80px 20px;
            text-align: center;
        }
        
        .section-title {
            font-size: 3rem;
            
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
            background: linear-gradient(90deg, #d4af37, #b8941f);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: #d4af37;
            margin-bottom: 25px;
        }
        
        .service-card h4 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            
            color: #2d2c2a;
        }
        
        .service-card p {
            font-size: 1.1rem;
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
            color: #d4af37;
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
            background: #d4af37;
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

<!-- QUALITY | VALUE | TRUST SECTION -->
<section>
    <h4>QUALITY | VALUE | TRUST​​​​​</h4>
    <h1 style="  font-size: 3rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a;">A TREASURED LOVE STORY IN THE MAKING</h1>
    <p>Capturing your memories well requires thoughtful intention and preparation. And a team that's committed to top-notch service and quality. We provide all of the above and so much more.</p>
</section>

<!-- HOW IT WORKS SECTION -->
<section style="background-color: #ebebeb; color: #2d2c2a; padding: 60px 15px;">
  <div style="max-width: 1200px; margin: 0 auto;">

    <h2 style="font-size: 3rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a; text-align: center; margin-bottom: 100px; margin-top: -50px;">
      HOW IT WORKS
    </h2>

    <!-- VISION ROW -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px;">
      <div style="flex: 1 1 300px; text-align: center;">
        <img src="images/vision.jpg" alt="Vision" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 2.5rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a; margin-bottom: 10px; text-align: left;">VISION</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 1.1rem; line-height: 1.6; text-align: justify;">
          The best way to meet and exceed your expectations is to have a clear picture of what those expectations are. So, we'll start with a video call to get to know more about you, your needs, and what you envision for your photos and films.
        </p>
      </div>
    </div>

    <!-- APPROACH ROW (REVERSED) -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px; flex-direction: row-reverse;">
      <div style="flex: 1 1 300px; text-align: center;">
        <img src="images/approach.jpeg" alt="Approach" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 2.5rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a; margin-bottom: 10px; text-align: right;">APPROACH</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 1.1rem; line-height: 1.6; text-align: justify;">
          Whether you choose photos, videos, or both, we'll send you a detailed questionnaire to confirm the details and dynamics of your day. By understanding your priorities—and the plan—we can prepare a solid approach to preserve your day.
        </p>
      </div>
    </div>

    <!-- CRAFT ROW -->
    <div class="how-row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 30px; margin-bottom: 30px;">
      <div style="flex: 1 1 300px; text-align: center;">
        <img src="images/craft.jpg" alt="Craft" style="width: 100%; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
      </div>
      <div style="flex: 2 1 500px;">
        <h3 style="font-size: 2.5rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1rem;
  color: #2d2c2a; margin-bottom: 10px; text-align: left;">CRAFT</h3>
        <p style="font-family: 'DM Sans', sans-serif; font-size: 1.1rem; line-height: 1.6; text-align: justify;">
          We'll focus on the real moments and unique details that enhance your photos and film and encompass the full story of your day. Maintaining natural light, real colors, and true beauty ensures nothing short of an exceptional final result.
        </p>
      </div>
    </div>

  </div>
</section>
<style>
@media screen and (max-width: 768px){
  .how-row p:last-child {
    margin-bottom: -100px;
  }
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
  .how-row p:last-child {
    margin-bottom: -100px;
  }
}

</style>

<!-- MEDIA FEATURES SECTION -->
<section class="media-features">
  <h2>Media Features</h2>
  <div class="media-wrapper">
    <a href="https://www.weddingwire.com/reviews/stavick-studios/ccf3c49204b1a46b.html" target="_blank">
      <img src="images/wedding-wire.png" alt="Wedding Wire" class="media-logo">
    </a>
    <a href="https://www.google.com/search?q=stavick+studio&rlz=1C1ONGR_enPH1056PH1056&sxsrf=APwXEdcjRTrDNNFfJLgGvdWJ-qwMsLh_SA%3A1685072436838&ei=NCpwZLfoMpnfseMPp-S_2A4&ved=0ahUKEwi30pKAiJL_AhWZb2wGHSfyD-sQ4dUDCA8&uact=5&oq=stavick+studio&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIECCMQJzIHCCMQigUQJ0oECEEYAFAAWABg7QFoAHAAeACAAXuIAXuSAQMwLjGYAQCgAQHAAQE&sclient=gws-wiz-serp#rlimm=17970166578315231020" target="_blank">
      <img src="images/google-reviews.png" alt="Google Reviews" class="media-logo">
    </a>
    <a href="https://www.theknot.com/marketplace/stavick-studios-antioch-ca-2059950" target="_blank">
      <img src="images/the-knot.png" alt="The Knot" class="media-logo">
    </a>
    <!-- Add more logos as needed -->
  </div>
</section>

<style>
.media-features { 
  background-color: transparent; /* transparent background */
  padding: 50px 20px;
  border-top: 1px solid #2d2c2a;   /* top border */
  border-bottom: 1px solid #2d2c2a; /* bottom border */
}


.media-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 40px; /* space between logos */
}

.media-wrapper a {
  display: inline-block;
}
.media-features h2 {
    font-size: 3rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: 'Cormorant Garamond', serif;
    margin-bottom: 1rem;
    color: #2d2c2a; 
    margin-bottom: 50px;
}
.media-logo {
  max-width: 250px;
  height: auto;
  object-fit: contain;
  filter: brightness(0%) saturate(100%); /* makes logos black */
  opacity: 0.8;
  transition: all 0.3s ease;
}

.media-logo:hover {
  opacity: 1;
  transform: scale(1.05);
}

/* Responsive */
@media screen and (max-width: 1024px) {
  .media-logo {
    max-width: 120px;
    margin: 10px;
  }
}

@media screen and (max-width: 768px) {
  .media-wrapper {
    gap: 25px;
  }

  .media-logo {
    max-width: 100px;
    margin: 8px;
  }
}

@media screen and (max-width: 480px) {
  .media-wrapper {
    gap: 15px;
  }

  .media-logo {
    max-width: 80px;
    margin: 5px;
  }
}
</style>



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
                <div class="service-badge">POPULAR</div>
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

<!-- FAQ SECTION -->
<section class="faq-wrapper">
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
  background: none; /* Transparent section */
  padding: 80px 20px;
  text-align: center;
  font-family: 'DM Sans', sans-serif;
  color: #2d2c2a;
}

.faq-heading {
  font-size: 1.5rem;
  
  margin-bottom: 10px;
  letter-spacing: 1px;
    color: #555;
        font-family: 'Cormorant Garamond', sans-serif;
}

.faq-subheading {
 font-size: 3rem;
  
  margin-bottom: 40px;
    color: #2d2c2a;
  text-align: center;
  text-transform: uppercase;
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
  font-size: 1.3rem;
  font-weight: 500;
  color: #2d2c2a;
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
    margin-top: -100px;
    margin-bottom: -50px;
  }
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
 .faq-wrapper {
    margin-top: -100px;
    margin-bottom: -50px;
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
  background-color: #ebebeb;
  display: flex;
  justify-content: center;
  padding: 50px 20px;
}

.connection-card {
  position: relative;
  width: 100%;
  max-width: 1700px;
  height: 600px;
  border-radius: 10px;
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
  max-width: 900px;
}

.content h5 {
  font-family: 'DM Sans', sans-serif;
  font-size: 1.2rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #d4af37;
  margin-bottom: 0.5rem;
}

.content h1 {
  font-size: 3rem;
  
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: 'Cormorant Garamond', serif;
  margin-bottom: 1.5rem;
  color: #fff;
}

.content p {
  font-family: 'DM Sans', sans-serif;
  font-size: 1.2rem;
  margin-bottom: 2rem;
  line-height: 1.6;
  color: #f1f1f1;
}

.content button {
  padding: 15px 40px;
  font-size: 18px;
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>