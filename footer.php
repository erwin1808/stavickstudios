<div class="floating-backtotop" id="scrollIcon">Back to Top</div>

<style>
.floating-backtotop {
  position: fixed;
  bottom: 170px;
  right: 0;
  background: #7c806f;
  color: #fff;
  font-family: 'DM Sans', sans-serif;
  padding: 10px 15px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  box-shadow: -3px 3px 15px rgba(0,0,0,0.3);
  cursor: pointer;
  z-index: 1000;
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

.floating-backtotop:hover {
  background: #5f5d4f;
  transform: rotate(-90deg) scale(1.1);
}

.floating-backtotop.show {
  opacity: 1;
  pointer-events: auto;
}
</style>

<script>
const scrollIcon = document.getElementById('scrollIcon');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  const windowHeight = window.innerHeight;
  const documentHeight = document.body.scrollHeight;

  // Show when user scrolls at least 25% of the page
  if (scrollPosition > documentHeight * 0.15) {
    scrollIcon.classList.add('show');
  } else {
    scrollIcon.classList.remove('show');
  }
});

scrollIcon.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
</script>



<footer class="site-footer">
  <div class="footer-container">

    <!-- Left Column -->
    <div class="footer-left">
      <!-- Logo -->
      <div class="footer-logo">
        <img src="images/header-logo.png" alt="Logo" onclick="window.location.href = 'index.php';" style="cursor: pointer;">
      </div>

      <!-- Instagram Handle -->
      <div class="footer-instagram">
        <p onclick="window.open('https://www.instagram.com/stavickstudios/', '_blank')" style="cursor: pointer;">@stavickstudios</p>
      </div>

      <!-- 1x1 Pictures -->
      <div class="footer-photos">
        <img src="https://static.showit.co/62.5/73Vn7Yc20WKJbSvsMfJkjg/98783/favorite_shots_all_00_00_55_15_still014.jpg" alt="">
        <img src="https://static.showit.co/62.5/mFdaSbsURpOopqZCx_eKaA/98783/the_trailer_00_00_32_01_still003.jpg" alt="">
        <img src="https://static.showit.co/62.5/nt3xrXxWSUOYNOQwcRAqWQ/98783/the_trailer_00_01_04_18_still005.jpg" alt="">
        <img src="https://static.showit.co/62.5/gBMpn9RATmqMDZuC6kOFTQ/98783/film_1_option_1.jpg" alt="">
        <img src="https://static.showit.co/62.5/aAe50eyfu7sA-3aTywexXA/98783/stills_00_00_11_12_still005.jpg" alt="">
        <img src="https://static.showit.co/62.5/nt3xrXxWSUOYNOQwcRAqWQ/98783/the_trailer_00_01_04_18_still005.jpg" alt="">
      </div>

      <!-- Email -->
  <div class="footer-email">
  <p>
    <a href="mailto:Hello@StavickStudios.Com" style="text-decoration: none; color: inherit;">
      Hello@StavickStudios.Com
    </a>
  </p>
</div>


    </div>

    <!-- Right Column -->
    <div class="footer-right">
      <div class="footer-links-social">
        <!-- Navigation Links -->
        <div class="footer-nav">
          <h4>Navigate</h4>
          <ul>

            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="south-asian-weddings.php">South Asian Weddings</a></li>
            <li><a href="western-weddings.php">Western Weddings</a></li>
            <li><a href="#">Films</a></li>
            <li><a href="#">Photos</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <!-- Social Media Links -->
        <div class="footer-social">
          <h4>Follow Us</h4>
          <ul>
           <li><a href="https://www.facebook.com/StavickStudios" target="_blank" rel="noopener noreferrer">Facebook</a></li>
          <li><a href="https://www.instagram.com/stavickstudios/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
          <li><a href="https://ph.pinterest.com/stavickstudios/" target="_blank" rel="noopener noreferrer">Pinterest</a></li>
          <li><a href="https://www.youtube.com/@stavickstudios" target="_blank" rel="noopener noreferrer">Youtube</a></li>

          </ul>
        </div>
      </div>

      <!-- Copyright -->
      <div class="footer-copyright">
        &copy; 2025 STAVICK STUDIOS.
      </div>
    </div>

  </div>
</footer>

<style>
/* Footer Main */
.site-footer {
  background-color: #ebebeb;
  color: #323232; 
  font-family: 'DM Sans', sans-serif;
  padding: 30px 20px;
  width: 100%;
  border-top: 1px solid #323232;
}

/* Container Flex */
.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  width: 100%;
}

/* Left Column */
.footer-left {
  flex: 1;
  min-width: 280px;
  margin-left: 10px;
  margin-right: 150px;
}

/* Logo */
.footer-logo img {
  width: 100px;
  margin-bottom: 20px;
}

/* Instagram */
.footer-instagram {
  margin-bottom: 20px;
}

/* Photos */
.footer-photos {
  display: flex;
  gap: 5px;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.footer-photos img {
  width: 62.5px;
  height: 62.5px;
  object-fit: cover;
}
/* Mobile view: 2 rows × 3 columns, images slightly bigger (10px padding around) */
@media (max-width: 767px) {
  .footer-photos {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    grid-template-rows: repeat(2, auto);   /* 2 rows */
    gap: 10px; /* spacing between images */
    margin-bottom: 20px;
    margin-left: -15px;
  }

  .footer-photos img {
    width: 115px;  /* fixed width */
    height: 115px; /* fixed height */
    object-fit: cover;
  }
}
@media (width: 360px) {
  .footer-photos {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    grid-template-rows: repeat(2, auto);   /* 2 rows */
    gap: 10px; /* spacing between images */
    margin-bottom: 20px;
    margin-left: -25px;
  }

  .footer-photos img {
    width: 100px;  /* fixed width */
    height: 100px; /* fixed height */
    object-fit: cover;
  }
}
@media (width: 430px) {
  .footer-photos {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columns */
    grid-template-rows: repeat(2, auto);   /* 2 rows */
    gap: 10px; /* spacing between images */
    margin-bottom: 20px;
    margin-left: 5px;
  }  
  .footer-copyright {
      transform: translate(-90px, -0px) !important;
      font-size: 17px !important;
    }
}


  .footer-photos img {
    width: 115px;  /* fixed width */
    height: 115px; /* fixed height */
    object-fit: cover;
  }

/* Email */
.footer-email {
  margin-bottom: 20px;
  transform: translateY(95px);
}
/* Adjust for mobile devices (e.g., max-width 767px) */
@media (min-width: 320px) and (max-width: 393px) {
    .footer-email {  /* Replace with your actual selector */
        transform: none !important; /* Removes the translateY */
    }
    .footer-copyright {
      transform: translate(-70px, -0px) !important;
      font-size: 16px !important;
    }
    .footer-nav h4, .footer-social h4 {
      margin-top: 20px !important;
    }
    .floating-backtotop {
      position: fixed;
  bottom: 190px;
  right: 0;
  background: #7c806f;
  color: #fff;
  font-family: 'DM Sans', sans-serif;
  padding: 10px 15px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  box-shadow: -3px 3px 15px rgba(0,0,0,0.3);
  cursor: pointer;
  z-index: 1000;
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
}

/* Right Column */
.footer-right {
  flex: 1;
  min-width: 280px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Links + Social */
.footer-links-social {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
 
}

.footer-nav h4,
.footer-social h4 {
  margin-bottom: 10px;
  
}

.footer-nav ul,
.footer-social ul {
  list-style: none;
  padding: 0;
  line-height: 1.8;
  
}

.footer-nav a,
.footer-social a {
  color: #323232;
  text-decoration: none;
  transition: color 0.3s; /* smooth hover effect */
}

.footer-nav a:hover,
.footer-social a:hover {
  color: #7c806f;
}


.footer-social ul {
  text-align: right;
}

/* Copyright */
.footer-copyright {
  text-align: right;
  margin-top: 40px;
  font-size: 14px;
  transform: translateY(70px);
}
</style>
