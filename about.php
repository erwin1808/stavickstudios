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
      
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<!-- VIDEOGRAPHY & PHOTOGRAPHY SECTION -->
<section style="background-color: #ebebeb; color: #2d2c2a; padding: 80px 20px; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 50px; ">
  
  <!-- Photo of the Couple -->
  <div style="flex: 1 1 300px; max-width: 400px; text-align: center;">
    <img src="images/EJSarahNR-2-1-683x1024.jpg" alt="Sarah & Ej" style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
  </div>
  
  <!-- Text Content -->
  <div style="flex: 2 1 500px; max-width: 700px;">
    <!-- Header -->
     <h4>   UNIQUE. CAPTIVATING. EMOTIONAL.<br></h4>
    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; line-height: 1.2; margin-bottom: 40px;">
   
      ONE-OF-A-KIND MEMORIES. ONE-OF-A-KIND LOVE.
    </h1>
    
    <!-- Description -->
    <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
      Our love story began ten years ago before we ever dated. Although we always had a crush on each other, it wasn’t until Sarah rejected Ej. A year later another attempt, and asked her on a date to their favorite place at CHIPOTLE! We both love to travel and spend time together as a family.
    </p>
    
    <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
      Our journey as wedding creatives didn’t just happen and we want to let you into the backstory of how that came about. Ej was a FedEx driver for nine years before quitting his full-time job to follow his passion for filming. Sarah was in the medical field until we both decided to team up together. Sarah loves to take pictures and capture authentic moments to create a story.
    </p>
    
    <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; text-align: justify;">
      Today, we’re engaged and planning a wedding of our own. So, we know a thing or two about finding one-of-a-kind love. And we understand how much your film and photos mean to you. We welcome and embrace this honor and responsibility, and promise to approach it with LOVE, PASSION, AND PURPOSE.
    </p>
  </div>
  
</section>

<!-- A BIT MORE ABOUT US SECTION WITH SWIPE AND SAME LAYOUT -->
<section class="about-couple" style="background-color: #ebebeb; color: #2d2c2a; padding: 100px 20px; text-align: center;">
  <div style="max-width: 1000px; margin: 0 auto;">

    <!-- Section Header -->
    <h2 class="section-title" style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; margin-bottom: 60px;">
      A BIT MORE ABOUT US<br>
      HERE’S TO MY BETTER HALF
    </h2>

    <!-- Carousel Container -->
    <div id="aboutCarousel" style="position: relative; overflow: hidden;">

      <!-- Slides Wrapper -->
      <div class="slides-wrapper" style="display: flex; transition: transform 0.5s ease;">

        <!-- Ej Slide -->
        <div class="slide" style="min-width: 100%; display: flex; flex-wrap: wrap; align-items: center; gap: 40px; margin-bottom: 80px;">
          <div style="flex: 1 1 300px; text-align: center;">
            <img src="images/Mask-Group-1-898x1024.jpg" alt="Ej" style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
          </div>
          <div style="flex: 2 1 500px; text-align: left;">
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; margin-bottom: 20px;">EJ ACCORDING TO SARAH</h3>
            <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
              My husband is my rock, my protector, and my constant support system. As a family of four, he works tirelessly to make sure we have everything we need and more. He is the hardest-working person I know, and I am in awe of his dedication and determination.
            </p>
            <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; text-align: justify;">
              Through thick and thin, my husband has always been there for me, accepting my faults and loving me unconditionally. He takes care of me in every possible way, and I feel so lucky to have him as my partner.
            </p>
          </div>
        </div>

        <!-- Sarah Slide -->
        <div class="slide" style="min-width: 100%; display: flex; flex-wrap: wrap; align-items: center; gap: 40px; margin-bottom: 80px; flex-direction: row-reverse;">
          <div style="flex: 1 1 300px; text-align: center;">
            <img src="images/Mask-Group-2-898x1024.jpg" alt="Sarah" style="width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
          </div>
          <div style="flex: 2 1 500px; text-align: left;">
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; margin-bottom: 20px;">SARAH ACCORDING TO EJ</h3>
            <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; margin-bottom: 20px;text-align: justify;">
              My beloved wife is a true gem, a kind and mindful person who loves nothing more than helping people. She is the one who always goes the extra mile to make sure everyone is happy and taken care of.
            </p>
            <p style="font-family: 'DM Sans', sans-serif; font-size: 1.125rem; line-height: 1.8; text-align: justify;">
              Her love for food and travel is contagious, and I am always amazed at her ability to find the best local food truck and places wherever we go. She takes the most amazing photos, capturing memories that we will cherish forever. But what I love most about my wife is how much she values spending time with family.
            </p>
          </div>
        </div>

      </div>

    

    </div>
      <!-- Right Arrow -->
    <button id="nextBtn" 
        style="position: absolute; 
               right: 300px; 
               transform: translateY(-350px); /* arrow pointing right */
               background: #2d2c2a; 
               color: #ebebeb; 
               border: none; 
               width: 60px; 
               height: 60px; 
               border-radius: 50%; /* perfect circle */
               cursor: pointer; 
               font-size: 1.5rem; 
               display: flex; 
               align-items: center; 
               justify-content: center;">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg>
</button>


      <!-- Left Arrow -->
<!-- Left Arrow -->
<button id="prevBtn" 
        style="position: absolute; 
               left: 300px; 
               transform: translateY(-350px); 
               background: #2d2c2a; 
               color: #ebebeb; 
               border: none; 
               width: 60px; 
               height: 60px; 
               border-radius: 50%; 
               cursor: pointer; 
               font-size: 1.5rem; 
               display: none; /* start hidden */
               align-items: center; 
               justify-content: center;">
   <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
     <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
   </svg>
</button>



  </div>
</section>
<style>/* Mobile Optimization Only */
@media (max-width: 992px) {
  /* Stack slide content vertically on tablets/small desktops */
  #aboutCarousel .slide {
    flex-direction: column !important;
    gap: 20px !important;
    margin-bottom: 60px !important;
  }
  .section-title {
    font-size: 2rem !important;
  }
  .about-couple{
    margin-top: -120px !important;
  }
  #aboutCarousel .slide div {
    text-align: center !important;
  }

  #aboutCarousel .slide-content {
    flex: unset !important;
    width: 100% !important;
  }

  #aboutCarousel .slide-image {
    flex: unset !important;
    width: 80% !important;
    margin: 0 auto !important;
  }

  /* Adjust arrows for smaller screens */
  #nextBtn, #prevBtn {
    right: 175px !important;
    left: 175px !important;
    transform: translateY(-50%) !important;
    width: 45px !important;
    height: 45px !important;
    font-size: 1.2rem !important;
  }

  #prevBtn { left: 175px !important; }
  #nextBtn { right: 175px !important; }
}

@media (max-width: 576px) {
  /* Stack content fully for mobile phones */
  #aboutCarousel .slide-content p {
    font-size: 1rem !important;
    line-height: 1.6 !important;
    text-align: justify !important;
  }

  #aboutCarousel .slide-content h3 {
    font-size: 1.5rem !important;
    margin-bottom: 15px !important;
  }

  #aboutCarousel .slide-image {
    width: 100% !important;
  }

  #aboutCarousel .slide {
    margin-bottom: 40px !important;
  }
}
</style>
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
      <button>LET'S CHAT</button>
    </div>
  </div>
</div>

<style>
.section-wrapper {
  background-color: #ebebeb;
  display: flex;
  justify-content: center;
  padding: 50px 20px; /* more space around */
}

.connection-card {
  position: relative;
  width: 100%;
  max-width: 1700px; /* wider card */
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
  background-color: rgba(0,0,0,0.3); /* charcoal overlay */
  z-index: 1;
}

.content {
  position: relative;
  z-index: 2;
  padding: 0 40px;
}

.content h2 {
  font-size: 42px;
  margin-bottom: 10px;
}

.content h3 {
  font-size: 32px;
  margin-bottom: 20px;
}

.content p {
  font-family: 'DM Sans', sans-serif;
  font-size: 24px;
  margin-bottom: 30px;
  line-height: 1.5;
}
.content button {
  padding: 15px 40px;
  font-size: 18px;
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

</style>
 

<?php include 'footer.php'; ?>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>