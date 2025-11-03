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
/* Center the form column */
.form-column {
    padding: 2rem;
    margin: 0 auto;
    max-width: 800px;
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers the form horizontally */
}

/* Form groups (questions) spacing */
.form-group {
    margin-bottom: 2rem; /* space between questions */
}

/* Inquiry header spacing */
.inquiry-header {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    gap: 3rem; /* Space between header elements (h2 + logo + description) */
}

.inquiry-text h2 {
    margin: 0;
    font-size: 3rem;
    color: var(--primary);
    text-align: center;
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.2;
     font-family: 'Cormorant Garamond', sans-serif;
}
.inquiry-logo { margin-left: 280px; margin-bottom: 5px;}
@media screen and (max-width: 768px) {
    .inquiry-logo {
        display: block;       /* Make logo block */
        margin-left: auto;    /* Center horizontally */
        margin-right: auto;   /* Center horizontally */
        margin-bottom: 5px;   /* Space below logo */
        max-width: 200px;     /* Optional: prevent logo from being too large */
    }

    .inquiry-text p {
        font-size: 1rem !important;       /* Slightly smaller text */
        line-height: 1.7;                 /* Maintain readability */
        color: var(--primary);
        text-align: center !important;   /* Justify text */
        font-family: 'DM Sans', sans-serif;
        margin: 0 auto 1rem auto;         /* Center the container with auto margins */
        max-width: 90%;                   /* Limit width so justify works nicely */
    }
}

.inquiry-text p {
    font-size: 1.3rem;
    line-height: 1.7;
    color: var(--primary);
    text-align: center;
    font-family: 'DM Sans', sans-serif;
    margin-bottom: -1px;
}
.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    font-size: 1.3rem;
    color: var(--primary);
    text-align: left;
    font-family: 'Cormorant Garamond', sans-serif;
    text-transform: uppercase;
}
.form-group input,
.form-group textarea {
    width: 100%;
    padding: 0.75rem;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
   font-family: 'DM Sans', sans-serif;
}
/* Center the inline flatpickr calendar only */
.datepicker-wrapper .flatpickr-calendar {
    margin: 0 auto !important; /* Centers the calendar */
}
/* Adjust font size for all dropdowns */
.form-group select {
    font-size: 1rem; /* Change to whatever size you prefer */
    padding: 0.75rem;
    font-family: 'DM Sans', sans-serif; /* match your input font */
}
.btn-submit {
    background-color: #2d2c2a;
    color: #fff;
    padding: 0.75rem 1.5rem;
    font-size: 1.2rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    text-align: center;
}
.btn-submit:hover {
    background-color: #444340;
    color: #fff;
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
<!-- === INQUIRY FORM SECTION === -->
<section class="inquiry-section">
    <div class="inquiry-header">
        <div class="inquiry-text">
            <h2>INQUIRE WITH</h2>
            <img src="https://stavickstudios.com/wp-content/uploads/2023/05/header-logo.png" alt="Logo" class="inquiry-logo">
            <p>We want every photo and film to be a dream our couples can revisit</p>
            <p>Hopefully, you’re as excited to get started as we are to hear from you!</p>
            <p>Please fill out the form below and we will be in touch within 24 hours.</p>
        </div>
    </div>
</section>

<div class="main-content">
    <div class="form-column">
        <form action="send_inquiry.php" method="POST">

            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="First and Last" required>
            </div>

            <div class="form-group">
                <label for="instagram">Instagram Handle</label>
                <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Instagram Handle">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Youremail@gmail.com" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="92915557777">
            </div>

            <div class="form-group datepicker-wrapper">
                <label for="wedding-date">Wedding Date</label>
                <input type="text" name="wedding_date" id="wedding-date" class="form-control" placeholder="mm/dd/yyyy" required>
            </div>

            <div class="form-group">
                <label for="location">Wedding Location (Venue and City)</label>
                <input type="text" name="location" id="location" class="form-control" placeholder="Venue name and City name">
            </div>

            <div class="form-group">
                <label for="wedding-type">Wedding Type?</label>
                <select name="wedding_type" id="wedding-type" class="form-control">
                    <option value="">Select an option</option>
                    <option value="traditional">Traditional</option>
                    <option value="modern">Modern</option>
                    <option value="fusion">Fusion</option>
                    <option value="elopement">Elopement</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="hear-about">How did you hear about us?</label>
                <input type="text" name="hear_about" id="hear-about" class="form-control" placeholder="Wedding Vendor, friend, please share their names">
            </div>

            <div class="form-group">
                <label for="planner">Who is your wedding planner? (If you have one)</label>
                <input type="text" name="planner" id="planner" class="form-control" placeholder="We'd love to see their style">
            </div>

            <div class="form-group">
                <label for="interest">What are you interested in?</label>
                <select name="interest" id="interest" class="form-control">
                    <option value="">Select an option</option>
                    <option value="photography">Photography</option>
                    <option value="videography">Videography</option>
                    <option value="both">Both</option>
                </select>
            </div>

            <div class="form-group">
                <label for="booking-stage">Where are you in the process of booking Videography and Photography?</label>
                <select name="booking_stage" id="booking-stage" class="form-control">
                    <option value="">Select an option</option>
                    <option value="just-started">Just Started</option>
                    <option value="researching">Researching</option>
                    <option value="ready-to-book">Ready to Book</option>
                </select>
            </div>

            <div class="form-group">
                <label for="budget">Estimated Budget for Videography and Photography</label>
                <input type="text" name="budget" id="budget" class="form-control" placeholder="$">
            </div>

            <div class="form-group">
                <label for="details">Tell us more about your wedding and how you envision your photos and videos</label>
                <textarea name="details" id="details" class="form-control" placeholder="Share your story..."></textarea>
            </div>

            <button type="submit" class="btn-submit">SEND INQUIRY</button>
        </form>
    </div>
</div>

<!-- Include Flatpickr JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
flatpickr("#wedding-date", {
    inline: true,
    dateFormat: "m/d/Y",
    defaultDate: "today",
});

</script>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
