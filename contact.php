<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stavick Studios</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

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

    /* === INQUIRY SECTION === */
    .inquiry-section {
      padding: 2rem 0;
      width: 100%;
    }

    .inquiry-header {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }

    .inquiry-text {
      max-width: 600px; 
      width: 90%; 
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .inquiry-text h2 {
      margin: 0;
      font-size: 34px;
      color: var(--primary);
      text-align: center;
      letter-spacing: 1px;
      line-height: 1.2;
      font-family: 'Cormorant Garamond', sans-serif;
    }

    .inquiry-logo { 
      margin: 15px auto;
      display: block;
      max-width: 100%;
    }

    .inquiry-text p {
      font-size: 16px;
      line-height: 1.7;
      color: var(--primary);
      text-align: center;
      font-family: 'DM Sans', sans-serif;
      margin-bottom: 5px;
      width: 100%;
    }

    /* === TAB BUTTONS === */
    .tab-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
        margin-bottom: 20px;
        width: 100%;
        padding: 0 15px;
    }

    .tab-btn {
        padding: 15px 0;
        width: 250px;
        border: 1px solid #2d2c2a;
        background-color: transparent;
        color: #2d2c2a;
        font-family: 'DM Sans', sans-serif;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .tab-btn:hover {
        background-color: #dedede;
    }

    .tab-btn.active {
        background-color: #d1d1d1; /* Grey background for active state like reference image */
        font-weight: 700;
    }

    /* Mobile Tab adjustment */
    @media (max-width: 600px) {
        .tab-container {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .tab-btn {
            width: 100%;
            max-width: 300px;
        }
    }

    /* === FORM STYLES === */
    .form-column {
      padding: 2rem;
      margin: 0 auto;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .form-container {
        width: 100%;
        /* Animation for smooth switching */
        animation: fadeIn 0.5s;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .form-group {
      margin-bottom: 2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      font-size: 18px;
      color: var(--primary);
      text-align: left;
      font-family: 'Cormorant Garamond', sans-serif;
      text-transform: uppercase;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 0.75rem;
      font-size: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-family: 'DM Sans', sans-serif;
      background-color: #fff;
    }

    /* Calendar Input Styling - Make it look like a normal input */
    .flatpickr-input {
        background-color: #fff !important;
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
      width: 100%;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background-color: #444340;
      color: #fff;
    }

    /* Hide element utility */
    .d-none {
        display: none;
    }
  </style>
</head>

<body>

<?php include 'navbar.php'; ?>

<section class="hero">
  <video class="hero-video" autoplay muted loop playsinline>
    <source src="videos/Stavick Studios - Website background video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>

<section class="inquiry-section">
    <div class="inquiry-header">
        <div class="inquiry-text">
            <h2>INQUIRE WITH</h2>
            <img src="images/header-logo.png" alt="Logo" class="inquiry-logo">
            <p>If you’re a planner or a couple seeking information regarding our wedding services,
              please complete the form below. For all other inquiries, 
              please email us at hello@stavickstudios.com</p>
        </div>
    </div>
</section>

<div class="main-content">
    <div class="form-column">
        
        <div class="tab-container">
            <button class="tab-btn active" onclick="switchForm('couples')">FOR COUPLES</button>
            <button class="tab-btn" onclick="switchForm('planners')">FOR PLANNERS</button>
        </div>

        <div id="couples-form" class="form-container">
            <form action="send_inquiry.php" method="POST">
                <input type="hidden" name="inquiry_type" value="couple">

                <div class="form-group">
                    <label for="full_name">Full Name *</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="First and Last" required>
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram Handle</label>
                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Instagram Handle">
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Youremail@gmail.com" required>
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter phone number">
                </div>

                <div class="form-group">
                    <label for="wedding-date">Wedding Date *</label>
                    <input type="text" name="wedding_date" id="wedding-date" class="form-control date-picker" placeholder="Select Date" required>
                </div>

                <div class="form-group">
                    <label for="location">Wedding Location (Venue and City)</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="Venue name and City name">
                </div>

                <div class="form-group">
                    <label for="wedding-type">Wedding Type?</label>
                    <select name="wedding_type" id="wedding-type" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Traditional">Traditional</option>
                        <option value="South East Asian">South East Asian</option>
                        <option value="Fusion">Fusion</option>
                        <option value="Elopement">Elopement</option>
                        <option value="Other">Other</option>
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
                    <textarea name="details" id="details" class="form-control" placeholder="Share your story..." rows="4"></textarea>
                </div>

                <button type="submit" class="btn-submit">SEND INQUIRY</button>
            </form>
        </div>

        <div id="planners-form" class="form-container d-none">
            <form action="send_inquiry_planner.php" method="POST">
                <input type="hidden" name="inquiry_type" value="planner">

                <div class="form-group">
                    <label for="planner_name">Your Full Name *</label>
                    <input type="text" name="planner_name" id="planner_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="partner_name">Your Partner's Full Name (Couple's Name)</label>
                    <input type="text" name="partner_name" id="partner_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="planner_email">Email *</label>
                    <input type="email" name="planner_email" id="planner_email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="planner_instagram">Instagram Handle *</label>
                    <input type="text" name="planner_instagram" id="planner_instagram" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="project_date">Project Date</label>
                    <input type="text" name="project_date" id="project_date" class="form-control date-picker" placeholder="Select Date">
                </div>

                <div class="form-group">
                    <label for="planner_location">Location | Venue</label>
                    <input type="text" name="planner_location" id="planner_location" class="form-control">
                </div>

                <div class="form-group">
                    <label for="event_type">What type of event are you planning? *</label>
                    <select name="event_type" id="event_type" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Wedding">Wedding</option>
                        <option value="Elopement">Elopement</option>
                        <option value="Engagement">Engagement</option>
                        <option value="Editorial/Styled Shoot">Editorial/Styled Shoot</option>
                        <option value="Corporate">Corporate</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="wedding_planner_company">Wedding Planner?</label>
                    <input type="text" name="wedding_planner_company" id="wedding_planner_company" class="form-control" placeholder="Company Name">
                </div>

                <div class="form-group">
                    <label for="wedding_photographer">Wedding Photographer</label>
                    <input type="text" name="wedding_photographer" id="wedding_photographer" class="form-control">
                </div>

                <div class="form-group">
                    <label for="videography_budget">What is your photography or videography budget? *</label>
                    <select name="videography_budget" id="videography_budget" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Under $3k">Under $3k</option>
                        <option value="$3k - $5k">$3k - $5k</option>
                        <option value="$5k - $7k">$5k - $7k</option>
                        <option value="$7k - $10k">$7k - $10k</option>
                        <option value="$10k+">$10k+</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="wedding_details">Tell us more about the wedding you are planning! We want to hear everything! *</label>
                    <textarea name="wedding_details" id="wedding_details" class="form-control" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="planner_hear_about">How did you hear about us?</label>
                    <select name="planner_hear_about" id="planner_hear_about" class="form-control">
                        <option value="">Select an option</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Google Search">Google Search</option>
                        <option value="Vendor Referral">Vendor Referral</option>
                        <option value="Friend/Family">Friend/Family</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="referral_source">If you were referred to us by another Vendor, tell us who to thank!</label>
                    <input type="text" name="referral_source" id="referral_source" class="form-control">
                </div>

                <div class="form-group">
                    <label for="booking_process">Where are you at in the process of booking a videographer? *</label>
                    <select name="booking_process" id="booking_process" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Just Browsing">Just Browsing</option>
                        <option value="Narrowing Down Options">Narrowing Down Options</option>
                        <option value="Ready to Book">Ready to Book</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="project_more_info">Tell me more about this project</label>
                    <textarea name="project_more_info" id="project_more_info" class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn-submit">SEND INQUIRY</button>
            </form>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Initialize Flatpickr (Calendar)
    // Note: 'inline: true' is removed so it behaves like a normal input popup
    flatpickr(".date-picker", {
        dateFormat: "m/d/Y",
        minDate: "today",
        disableMobile: "true" // Forces native picker on mobile if desired, or set false for flatpickr UI everywhere
    });

    // Toggle Forms Script
    function switchForm(type) {
        const couplesForm = document.getElementById('couples-form');
        const plannersForm = document.getElementById('planners-form');
        const buttons = document.querySelectorAll('.tab-btn');

        if (type === 'couples') {
            couplesForm.classList.remove('d-none');
            plannersForm.classList.add('d-none');
            
            // Update buttons
            buttons[0].classList.add('active');
            buttons[1].classList.remove('active');
        } else {
            couplesForm.classList.add('d-none');
            plannersForm.classList.remove('d-none');
            
            // Update buttons
            buttons[0].classList.remove('active');
            buttons[1].classList.add('active');
        }
    }

    // Phone Number Logic (Preserved from your code)
    fetch('https://ipapi.co/json/')
      .then(response => response.json())
      .then(data => {
        const countryCode = data.country_code;
        const phoneInput = document.getElementById('phone');
        let placeholder = "Enter phone number";
        const samples = {
          US: "+1 415 555 2671", GB: "+44 7700 900123", IN: "+91 98765 43210",
          CA: "+1 604 555 0189", AU: "+61 400 123 456", PH: "+63 912 345 6789"
        };
        if (samples[countryCode]) { placeholder = samples[countryCode]; }
        if(phoneInput) phoneInput.placeholder = placeholder;
      })
      .catch(err => {
        console.error("Geolocation failed:", err);
      });
</script>

</body>
</html>