<?php
include 'db_connect.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Get wedding details
$sql = "SELECT bride_name, groom_name, location, cover_photo, message FROM weddings WHERE id = $id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $bride = htmlspecialchars($row['bride_name']);
    $groom = htmlspecialchars($row['groom_name']);
    $location = htmlspecialchars($row['location']);
    $cover_photo = htmlspecialchars($row['cover_photo']);
    $message = $row['message'];

// Get YouTube video for this wedding
$video_sql = "SELECT youtube_id FROM wedding_videos WHERE wedding_id = $id ORDER BY display_order ASC LIMIT 1";
$video_result = $conn->query($video_sql);
$has_video = $video_result && $video_result->num_rows > 0;

if ($has_video) {
    $video = $video_result->fetch_assoc();
    $youtube_url = htmlspecialchars($video['youtube_id']);

    // Extract YouTube video ID from a full URL or short link
    if (preg_match('/(?:v=|\/|embed\/|youtu\.be\/)([0-9A-Za-z_-]{11})/', $youtube_url, $matches)) {
        $youtube_id = $matches[1];
    } else {
        $youtube_id = $youtube_url; // fallback if only ID is stored
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | <?= $bride ?> & <?= $groom ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/modernline-personal-use" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        body {
          font-family: 'Cormorant Garamond', serif;
      color: #2d2c2a;
      background-color: #ebebeb;
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

        /* Hero Section */
        .hero {
            position: relative;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 0 50px;
            width: 100vw;
            max-width: none;
            margin: 0;
        }

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

        /* Info Section */
        .info-section {
            padding: 4rem 0rem;
            background-color: #7c806f;
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
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .info-name {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            line-height: 0.8;
            margin-bottom: 1rem;
        }
        
        .info-name .bride_name {
             font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-size: 42px;
            color: #ebebeb;
        }

        .info-name .groom_name {
             font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-size: 42px;
            margin: 0;
            color: #ebebeb;
        }

        .info-name .full-name {
            display: none;
        }

        .info-location {
            font-size: 24px;
            margin-bottom: 1.5rem;
            color: #ebebeb;
        }

        .info-logo img {
            max-width: 100px;
            height: auto;
        }

        .vertical-divider {
            height: 350px;
            transform: translate(-10rem,-1rem);
            width: 2px;
            background-color: #ebebeb;
            margin: 0 2rem;
        }

        /* Right Column */
        .info-right {
            font-family: 'Montserrat', sans-serif;
            transform: translate(-10rem, -.3rem);
            flex: 2;
            padding: 2rem 0 2rem 0.5rem;
            font-size: 16px;
            line-height: 1.6;
            text-align: justify;
            color: #ebebeb;
        }

        /* Video Section */
   .video-section {
    padding: 4rem 2rem;
}

.video-container {
    max-width: 1000px;
    margin: 0 auto;
    width: 100%;
}

.video-wrapper {
    position: relative;
    width: 100%;
    aspect-ratio: 21 / 9; /* perfect ratio instead of padding-bottom hack */
    background: #000;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,0.1);
}

.video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    object-fit: cover; /* ensures video fills the space nicely */
}


        .no-video {
            text-align: center;
            padding: 4rem;
            color: var(--textcolor);
            font-style: italic;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .no-video p {
            font-size: 1rem;
            margin: 0;
        }

        /* Mobile Responsiveness */
        @media (max-width: 1024px) {
            .hero {
                height: 50vh;
            }
            
            .info-name .bride_name {
                font-size: 3rem;
            }
            
            .info-name .groom_name {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 956px) {
            .hero {
                transform: translateY(-10px);
                height: 40vh;
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
                display: none;
            }

            .info-right {
                margin-top: -80px;
                transform: none;
                padding: 1rem;
            }

            .info-section .info-right p {
                font-size: 1rem;
                text-align: justify;
                text-indent: 2em;
                letter-spacing: 0.8px;
            }

            .video-section {
                padding: 2rem 1rem;
            }

            .video-container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Video Section -->
<section class="video-section" id="videos">
    <div class="video-container">
        <?php if ($has_video): ?>
            <div class="video-wrapper">
                <iframe 
                    src="https://www.youtube.com/embed/<?= $youtube_id ?>?rel=0" 
                    title="Wedding Film - <?= $bride ?> & <?= $groom ?>"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
        <?php else: ?>
            <div class="no-video">
                <p>No wedding film available yet. Check back soon!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Info Section -->
<section class="info-section">
    <div class="info-wrapper">
        <div class="info-left">
            <div class="info-name">
                <span class="bride_name"><?= $bride ?></span><br/>
                <span class="groom_name"><?= $groom ?></span>
                <span class="full-name"><?= $bride ?> + <?= $groom ?></span>
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
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
} else {
    echo "<p>Wedding information not found.</p>";
}

$conn->close();
?>