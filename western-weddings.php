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

    /* === Main Section === */
    .media-selection {
      min-height: 100vh;
      background: #ebebeb;
      font-family: 'Cormorant Garamond', serif;
      padding: 80px 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .media-selection .container {
      max-width: 1600px;
    }

    /* === Section Title === */
    .media-section-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 34px;
      text-transform: uppercase;
      letter-spacing: 2px;
      text-align: center;
      color: #2d2c2a;
      margin-bottom: 60px;
      position: relative;
    }

    /* === Card Styles === */
    .media-card {
      position: relative;
      display: block;
      height: 650px;
      overflow: hidden;
      text-decoration: none;
      color: #fff;
      background: #000;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      width: 100%;
    }

    .media-card:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 30px rgba(0,0,0,0.4);
    }

    /* === Background (Image/Video) === */
    .media-bg {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
    }

    .media-card:hover .media-overlay {
      background: rgba(0,0,0,0.3);
    }

    /* === Title === */
    .media-title {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      z-index: 3;
      background: rgba(0,0,0,0.6);
      font-family: 'Cormorant Garamond', serif;
      font-size: 24px;
      padding: 15px 0;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: #fff;
    }

    /* === Responsive Adjustments === */
    @media (max-width: 992px) {
      .media-card {
        height: 450px;
      }
      .media-title {
        font-size: 1.7rem;
      }
      .media-section-title {
        font-size: 2.4rem;
        margin-bottom: 40px;
      }
    }

    @media (max-width: 768px) {
      .media-card {
        height: 350px;
      }
      .media-title {
        font-size: 1.5rem;
      }
      .media-section-title {
        font-size: 2rem;
      }
    }

    @media (max-width: 576px) {
      .media-card {
        height: 280px;
      }
      .media-title {
        font-size: 1.2rem;
      }
      .media-section-title {
        font-size: 1.6rem;
        margin-bottom: 30px;
      }
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<!-- Main Section -->
<section class="media-selection">
  <h2 class="media-section-title">Western Weddings</h2>

  <div class="container text-center">
    <div class="row justify-content-center g-4">

      <!-- Left Card: Images -->
      <div class="col-lg-6 col-md-10">
        <a href="western-weddings-images.php" class="media-card">
          <div class="media-overlay"></div>
          <img src="images/south-asian.jpg" alt="Western Weddings Images" class="media-bg">
          <div class="media-title">See Images</div>
        </a>
      </div>

      <!-- Right Card: Videos -->
      <div class="col-lg-6 col-md-10">
        <a href="western-weddings-videos.php" class="media-card">
          <div class="media-overlay"></div>
          <video class="media-bg" autoplay muted loop playsinline>
            <source src="videos/Stavick Studios - Website background video.mp4" type="video/mp4">
          </video>
          <div class="media-title">See More Videos</div>
        </a>
      </div>

    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
