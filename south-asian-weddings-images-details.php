<?php
include 'db_connect.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT bride_name, groom_name, location, cover_photo, message FROM weddings WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $bride = htmlspecialchars($row['bride_name']);
    $groom = htmlspecialchars($row['groom_name']);
    $location = htmlspecialchars($row['location']);
    $cover_photo = htmlspecialchars($row['cover_photo']);
    $message = $row['message']; // keep raw for paragraph detection
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/modernline-personal-use" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Base Styles */
     :root {
            --primary: #ffffff;
            --secondary: #C3B8AC;
            --tertiary: #323538;
            --textcolor: #333333;
            --dusty-rose: #C7A8A3;
            --sage: #A3B8A7;
            
        }
  
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
       font-family: 'Cormorant Garamond', serif;
            color: var(--textcolor);
            background: var(--primary);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4 {
            font-weight: 400;
            letter-spacing: 0.03em;
            line-height: 1.2;
        }
        
        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        /* Navigation */
        .hero-text {
            top: 0;
            left: 0;
            width: 100%;
            height: 200px;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            padding: 2rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.5s ease;
        }
        
        .hero-text.scrolled {
            background-color: rgba(248, 245, 242, 0.9);
            padding: 1rem 3rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
                
        .logo-container {
            display: flex;
            align-items: flex-start;
        }

        .logotitle {
            transform: translateX(-8px);
            width: 400px;
            height: auto;
            object-fit: cover;
            object-position: center;
        }

    /* Hero Section */
    .hero {
        position: relative;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        padding: 0 50px;
        width: 100vw;       /* Full screen width */
        max-width: none;    /* Remove any max width constraint */
        margin: 0;          /* Remove all margins */
    }


        /* Hero Image */
        .hero-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
            display: block;
            z-index: -1;
        }

        /* Content on top of the image */
       .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-55%, -55%);
            text-align: center;
            color: white;
            padding: 0 2rem;
            max-width: 800px;
        }

            /* Style for the logo */
            .hero-logo {
                width: 350px; /* Adjust size as needed */
                height: auto;
                margin-bottom: 1rem; /* Optional spacing if you add text later */
            }


        .hero h1 {
            font-size: 3.5rem;
            font-weight: 300;
            margin-bottom: 1.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: 300;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            margin-bottom: 3rem;
            text-shadow: 0 1px 2px rgba(0,0,0,0.3);
        }
        
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .scroll-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            margin-bottom: 0.5rem;
            color: white;
        }
        
        .scroll-line {
            width: 1px;
            height: 50px;
            background: white;
            animation: scrollPulse 2s infinite;
        }
        
        @keyframes scrollPulse {
            0% { height: 50px; opacity: 1; }
            50% { height: 70px; opacity: 0.5; }
            100% { height: 50px; opacity: 1; }
        }
        
    

        /* Gallery Section */
        .gallery-section {
            padding: 3rem 3rem;
            background-color: var(--primary);
            
            color: var(--textcolor);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
        }
        
        .gallery-section::before,
        .gallery-section::after {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 100px;
            z-index: 1;
            pointer-events: none;
        }


        /* Bottom fade */
        .gallery-section::after {
            bottom: 0;
            background: linear-gradient(to top, white, transparent);
            z-index: -1;
        }

        .section-header {
            width: 100%;
            display: flex;
            align-items: center;
            gap: 1rem;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        /* When active (in viewport) */
        .section-header.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* h2 animation */
        .section-header h2.section-title {
            font-family: 'modernline - Personal Use', sans-serif;
            font-size: 1.5rem;
            margin: 0;
            white-space: nowrap;
            top: -80px;
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            left: 15px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            margin: 0;
            white-space: nowrap;
            top: -80px;
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        /* line animation */
        .section-header-line {
            height: 1px;
            background-color: var(--textcolor);
            flex-grow: 1;
            top: -80px;
            position: relative;
            opacity: 0;
            transform: scaleX(0);
            transform-origin: left;
            transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
        }

        /* When section is active, animate h2 and line */
        .section-header.active h2 {
            opacity: 1;
            transform: translateY(0);
        }

        .section-header.active .section-header-line {
            opacity: 1;
            transform: scaleX(1);
        }

        /* Keyframes */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes lineReveal {
            to {
                opacity: 1;
                transform: scaleX(1);
            }
        }
.gallery-grid {
    margin-top: -50px;
    margin-left: 15px;
    column-count: 3;
    column-gap: 10px;
}

.gallery-item {
    display: inline-block;
    width: 100%;
    margin-bottom: 5px;
    overflow: hidden;
    transition: transform 0.5s ease, filter 0.5s ease;
    will-change: transform, filter;        /* hint browser to optimize */
    backface-visibility: hidden;           /* prevents white flash */
}

.gallery-img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.5s ease;
    will-change: transform;
    backface-visibility: hidden; /* prevents blinking */
}

.gallery-item:hover .gallery-img {
    transform: scale(1.05);
}


/* Fade-in animation */
@keyframes fadeInOnScroll {
    from { opacity: 0; transform: scale(1.03); }
    to { opacity: 1; transform: scale(1); }
}

.gallery-item.visible {
    animation: fadeInOnScroll 0.8s ease forwards;
}


        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2rem;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-overlay h3 {
            color: white;
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }
        
        .gallery-overlay p {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.8);
        }

        /* Import Cormorant Garamond font */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&display=swap');

.info-section {
  padding: 4rem 0rem; /* Removed left/right padding */
  background-color: var(--primary);
  margin-bottom: -40px;
}

.info-wrapper {
  display: flex;
  align-items: stretch;
  max-width: 1200px;
  margin: 0 auto;
}
/* Left Column */
.info-left {
    transform: translateX(-100px);
  flex: 1;
  padding: 2rem; /* uniform padding */
  display: flex;
  flex-direction: column;
  align-items: center; /* center content horizontally */
  text-align: center;  /* ensures text inside is centered */
}

.info-name {
  font-family: 'NewYork', 'Cormorant Garamond', serif;
  font-weight: 700;
  line-height: 0.8; /* tighten spacing */
  margin-bottom: 1rem;
}

.info-name .bride_name {
  font-weight: 400;
  font-size: 4rem;
  margin: 0;
}

.info-name .groom_name {
  font-weight: 400;
  font-size: 3.5rem;
  margin: 0;
}

.info-name .full-name {
  display: none;
}

.info-location {
  font-size: 2rem;
  margin-bottom: 1.5rem;
}

.info-logo img {
  max-width: 125px;
  height: auto;
}

.vertical-divider {
    height: 350px;
transform: translate(-10rem,-1rem);
  width: 2px;
  background-color: var(--textcolor); /* or any color */
  margin: 0 2rem;
}


/* Right Column */

.info-right {
    font-family: 'Montserrat', sans-serif;
  transform: translate(-10rem, -.3rem);
  flex: 2;
  padding: 2rem 0 2rem 0.5rem; /* Was 15rem, now tight */
  font-size: 1.1rem;
  line-height: 1.6;
  text-align: justify; /* ✅ Justify text to align both left and right */
}


     
   /* Mobile Responsiveness */
        @media (max-width: 1024px) {
            .hero h1 {
                font-size: 3rem;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .gallery-item {
                height: 400px;
            }
            
            .about-text p {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 956px) {
            .hero-text {
                height: auto;
               
            }
            
            .logotitle {
                width: 250px;
            }
            
            .nav-links-hero {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            .hero {
               transform: translateY(-10px);
            }
            .hero .hero-image {
              
                top: -30px;
                height: 300px;
                width: 500px;
                margin-bottom: -100px;
                
            }
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 0.8rem;
                letter-spacing: 0.2em;
            }
            
            
            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
                top: -60px;
            }
            
            .section-header h2.section-title {
                font-size: 1.2rem;
                top: -60px;
            }
            
            .section-header-line {
                top: -60px;
            }
            
            .testimonial-text {
                font-size: 1.2rem;
            }
        }
        


@media (max-width: 600px) {
  .info-section {
    margin-top: 0px;
    padding: 2rem 1rem;

  }
.logotitle {
   display: none;
  }
  .info-wrapper {
    margin-top: -280px;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .info-left {
    transform: translateX(0);
    padding: 1.5rem 1rem;
    margin-bottom: 3.5rem;
    
  }

  .info-name {
 margin-bottom: 1rem;
    margin-left: 0;
  }

  .info-name .bride_name {
   display: none;
  }

  .info-name .groom_name {
    display: none;
  }

  .info-name .full-name {
    
    margin-left: -10px;
    display: inline;
    font-size: 3rem;
    transform: translateY(-1rem);
    margin-top: -40px;
   
  }

  .info-location {
    margin-left: 0;
    font-size: 2.5rem;
  }

  .info-logo img {
    margin-left: 0px;
    max-width: 60px;
    margin-top: -1rem;
    margin-bottom: 10px;
  }

  .vertical-divider {
    display: none; /* Hide vertical line on mobile */
  }

  .info-right {
    margin-top: -80px;
    transform: none;
    padding: 1rem;

  }
  .info-section .info-right p {
    font-size: 1rem;
    text-align: justify;
    text-indent: 2em; /* ✅ This adds the indent */
    letter-spacing: 0.8px;
  }
  .gallery-section .gallery-grid {
   
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: .4rem;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.gallery-section .gallery-grid > * {
  width: 100%;
  height: 200px;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  display: block; /* Ensures <a> or <div> behaves same */
}

.gallery-section .gallery-grid .gallery-item {
  width: 100%;
  height: 100%;
  position: relative;
}

.gallery-section .gallery-grid .gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.gallery-section {
  margin-left: 5px !important;
  margin-right: 5px !important;
  padding-left: 5px !important;
  padding-right: 5px !important;
}
 .gallery-overlay {
  position: static;                /* Remove absolute positioning */
  width: 100%;
  padding: 0.5rem 0;
  background: none;                /* Remove gradient background */
  opacity: 1 !important;           /* Always visible */
  transition: none;                /* No fade effect needed */
  text-align: center;
}
.gallery-grid .gallery-overlay h3 {
width: 200px;
  color: var(--primary);
  margin: 0;
  font-size: .75rem;
  transform: translateY(20px);
  letter-spacing: .1rem;
}

.gallery-grid  .gallery-overlay p {
  font-family: 'Montserrat', sans-serif;
  font-size: 0.5rem;
  color: var(--primary);
  transform: translateY(15px);
  margin: 0.2rem 0 0;
  width: 200px;
  letter-spacing: 1px;
}




}
  
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>
<!-- Hero Section -->
<section class="hero" id="home">
    <img src="images/<?= htmlspecialchars($cover_photo) ?>" alt="Wedding Cover Photo" class="hero-image">
</section>

<section class="info-section">
  <div class="info-wrapper">


    <div class="info-left">
          <div class="info-name">
                <span class="bride_name"><?= $bride ?> &</span>
                <span class="groom_name"><?= $groom ?></span>
                <span class="full-name"><?= $bride ?> & <?= $groom ?></span>
            </div>
        <div class="info-location"><?= $location ?></div>
        <div class="info-logo">
            <img src="images/header-logo.png" alt="Logo" />
        </div>
    </div>

    <!-- Vertical Line -->
    <div class="vertical-divider"></div>

    <!-- Right Column -->
    <div class="info-right">
    <?php
    // Detect paragraphs by double line breaks and output as <p>
    $paragraphs = preg_split("/(\r?\n){2,}/", $message);
    foreach ($paragraphs as $p) {
        $p = trim($p);
        if ($p !== '') {
            echo '<p>' . nl2br(htmlspecialchars($p)) . '</p>';
        }
    }
    ?>
    </div>

<?php
} else {
    echo "<p>Wedding information not found.</p>";
}

$conn->close();
?>

  </div>
</section>



 <!-- Gallery Section -->
<section class="gallery-section" id="gallery">
    <div class="gallery-grid">
    <?php
    include 'db_connect.php';

    $wedding_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    if ($wedding_id > 0) {
        $stmt = $conn->prepare("SELECT filename FROM wedding_gallery WHERE wedding_id = ? ORDER BY display_order ASC");
        $stmt->bind_param("i", $wedding_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $filename = htmlspecialchars($row['filename']);
                echo '<div class="gallery-item">';
                echo '<img src="gallery/' . $filename . '" alt="Gallery Image" class="gallery-img">';
                echo '<div class="gallery-overlay"></div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-gray-600 italic">No photos uploaded for this wedding yet.</p>';
        }

        $stmt->close();
    } else {
        echo '<p class="text-gray-600 italic">Invalid wedding ID.</p>';
    }

    $conn->close();
    ?>
    </div>
</section>


<!-- Lightbox Modal -->
<div id="lightbox" class="lightbox">
    <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
    <div class="lightbox-caption" id="lightbox-caption"></div>
    <button class="lightbox-nav prev" onclick="changeImage(-1)">&#10094;</button>
    <button class="lightbox-nav next" onclick="changeImage(1)">&#10095;</button>
</div>
<script>
document.addEventListener('mousemove', function (e) {
    const nextArrow = document.querySelector('.lightbox-nav.next');
    const prevArrow = document.querySelector('.lightbox-nav.prev');
    const windowWidth = window.innerWidth;
    const x = e.clientX;

    // Reset hover effect
    nextArrow.classList.remove('simulated-hover');
    prevArrow.classList.remove('simulated-hover');

    // Define hover zones
    const leftHoverZone = windowWidth * 0.3;
    const rightHoverZone = windowWidth * 0.7;

    if (x < leftHoverZone) {
        prevArrow.classList.add('simulated-hover');
    } else if (x > rightHoverZone) {
        nextArrow.classList.add('simulated-hover');
    }
    // Between 30% and 70% = dead zone = no hover
});
</script>


<style>
    
.lightbox {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: var(--primary);
    opacity: 0;
    transition: opacity 0.5s ease;
}

.lightbox.show {
    display: block;
    opacity: 1;
}

.lightbox-content {
    display: block;
    max-width: 90%;
    max-height: 80vh;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
}


.lightbox-content.show {
    opacity: 1;
    animation: fadeIn 0.5s forwards;
}

.lightbox-caption {
    text-align: center;
    color: var(--textcolor);
    padding: 10px 0;
    font-size: 18px;
}

.lightbox-close {
    position: absolute;
    top: 30px;
    right: 45px;
    color: var(--textcolor);
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

.lightbox-nav {
    cursor: pointer;
    position: absolute;
    top: 50%;
    color: var(--dusty-rose);
    font-size: 30px;
    font-weight: bold;
    background: none;
    border: none;
    padding: 0;
    transform: translateY(-50%);
    user-select: none;
    transition: color 0.3s;
}

.lightbox-nav:hover,
.lightbox-nav.simulated-hover {
    color: var(--textcolor); /* same color used in hover */
}

.lightbox-nav.prev {
    left: 20px;
}

.lightbox-nav.next {
    right: 20px;
}



/* Keyframe Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes swipeLeft {
    0% { transform: translate(-50%, -50%) translateX(100%); opacity: 0; }
    100% { transform: translate(-50%, -50%) translateX(0); opacity: 1; }
}

@keyframes swipeRight {
    0% { transform: translate(-50%, -50%) translateX(-100%); opacity: 0; }
    100% { transform: translate(-50%, -50%) translateX(0); opacity: 1; }
}


/* Animation classes */
.animate-left {
    animation: swipeLeft 0.5s forwards;
}

.animate-right {
    animation: swipeRight 0.5s forwards;
}
@media (max-width: 956px) {
     .lightbox-content {
        max-width: 95vw;
        max-height: 70vh;
        top: 50%;
        left: 50%;
    }

   .lightbox-caption {
        position: fixed;
        bottom: 10px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 1rem;
    }

.lightbox-nav {
         position: fixed;
        top: 50%;
        transform: translateY(-50%);
        font-size: 2rem;
    }

    .lightbox-close {
        position: fixed;
        top: 15px;
        right: 15px;
        font-size: 30px;
    }
}

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Touch swipe functionality for mobile
let startX = 0;
let endX = 0;

lightbox.addEventListener('touchstart', function(e) {
    startX = e.changedTouches[0].screenX;
}, false);

lightbox.addEventListener('touchend', function(e) {
    endX = e.changedTouches[0].screenX;
    handleSwipe();
}, false);

function handleSwipe() {
    const deltaX = startX - endX;
    const threshold = 50; // Minimum distance for swipe

    if (Math.abs(deltaX) > threshold) {
        if (deltaX > 0) {
            changeImage(1); // Swipe left → Next
        } else {
            changeImage(-1); // Swipe right → Previous
        }
    }
}
</script>

<script>
const images = document.querySelectorAll('.gallery-img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');

let currentIndex = 0;
let galleryImages = [];

// Prepare gallery data
images.forEach((img, index) => {
    galleryImages.push({
        src: img.src
    });

    img.addEventListener('click', () => {
        currentIndex = index;
        openLightbox();
    });
});

function openLightbox() {
    lightbox.style.display = 'block';
    setTimeout(() => {
        lightbox.classList.add('show');
        updateLightbox('fade');
    }, 10);
}

function closeLightbox() {
    lightbox.classList.remove('show');
    setTimeout(() => {
        lightbox.style.display = 'none';
        lightboxImg.classList.remove('show');
    }, 500);
}

function changeImage(direction) {
    const swipeDir = direction > 0 ? 'left' : 'right';
    currentIndex += direction;

    if (currentIndex < 0) currentIndex = galleryImages.length - 1;
    if (currentIndex >= galleryImages.length) currentIndex = 0;

    updateLightbox(swipeDir);
}

function updateLightbox(animation = 'fade') {
    // Reset animations
    lightboxImg.className = 'lightbox-content';

    // Preload next image
    const img = new Image();
    img.src = galleryImages[currentIndex].src;
    img.onload = () => {
        lightboxImg.src = img.src;
        lightboxCaption.textContent = galleryImages[currentIndex].alt;

        // Add animation class
        if (animation === 'left') {
            lightboxImg.classList.add('animate-left');
        } else if (animation === 'right') {
            lightboxImg.classList.add('animate-right');
        } else {
            lightboxImg.classList.add('show'); // fadeIn
        }
    };
}

// Keyboard support
document.addEventListener('keydown', (e) => {
    if (lightbox.classList.contains('show')) {
        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowRight") changeImage(1);
        if (e.key === "ArrowLeft") changeImage(-1);
    }
});
</script>


    <!-- Footer -->
<?php include 'footer.php'; ?>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const galleryItems = document.querySelectorAll(".gallery-item");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Generate a random delay between 0s and 1s (adjust as needed)
          const delay = (Math.random() * 1).toFixed(2);
          entry.target.style.animationDelay = `${delay}s`;
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    galleryItems.forEach(item => {
      observer.observe(item);
    });
  });
</script>


</body>
</html>