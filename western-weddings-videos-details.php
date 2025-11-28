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
    <!-- Add Font Awesome for play icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Cormorant Garamond', serif;
            color: #2d2c2a;
            background-color: #ebebeb;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
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

        /* Video Section */
    .video-section {

        border-top: 1px solid #2d2c2a;
        margin-top: 3rem;
        padding: 3rem 1rem;
        background-color: #ebebeb;
    }

        .video-container {
            max-width: 1300px;
            margin: 0 auto;
            width: 100%;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 21 / 9; /* Standard YouTube ratio */
            background: #000;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            cursor: pointer;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Custom Play Button Overlay */
        .play-button-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .play-button-overlay.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .play-button {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .play-button i {
            color: #2d2c2a;
            font-size: 2rem;
            margin-left: 4px; /* Adjusts the play icon to be centered */
        }

        .play-button:hover {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 1);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4);
        }

        .video-wrapper:hover .play-button-overlay {
            background: rgba(0, 0, 0, 0.2);
        }

        .no-video {
            text-align: center;
            padding: 3rem 1rem;
            color: #2d2c2a;
            font-style: italic;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .no-video p {
            font-size: 1.1rem;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

        /* Info Section */
        .info-section {
            padding: 3rem 1rem;
            background-color: #7c806f;
        }

        .info-wrapper {
            display: flex;
            align-items: stretch;
            max-width: 1200px;
            margin: 0 auto;
            gap: 2rem;
        }

        /* Left Column */
        .info-left {
            flex: 1;
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: center;
        }

        .info-name {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            line-height: 0.9;
            margin-bottom: 1.5rem;
        }
        
        .info-name .bride_name {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-size: 3.5rem;
            color: #ebebeb;
            display: block;
            line-height: 1;
        }

        .info-name .groom_name {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-size: 3rem;
            color: #ebebeb;
            display: block;
            line-height: 1;
            margin-top: 0.5rem;
        }

        .info-name .full-name {
            display: none;
        }

        .info-location {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #ebebeb;
            font-weight: 400;
        }

        .info-logo img {
            max-width: 100px;
            height: auto;
        }

        .vertical-divider {
            width: 1px;
            background-color: #ebebeb;
            margin: 0 1rem;
            align-self: stretch;
        }

        /* Right Column */
        .info-right {
            font-family: 'Montserrat', sans-serif;
            flex: 2;
            padding: 1rem 0 1rem 1rem;
            font-size: 1rem;
            line-height: 1.7;
            text-align: justify;
            color: #ebebeb;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info-right p {
            margin-bottom: 1.5rem;
        }

        .info-right p:last-child {
            margin-bottom: 0;
        }

        /* ===== MOBILE RESPONSIVENESS ===== */
        
        /* Tablets and smaller desktops */
        @media (max-width: 1024px) {
            .info-name .bride_name {
                font-size: 3rem;
            }
            
            .info-name .groom_name {
                font-size: 2.5rem;
            }
            
            .info-location {
                font-size: 1.6rem;
            }
            
            .info-wrapper {
                gap: 1.5rem;
            }
        }

        /* Large tablets */
        @media (max-width: 900px) {
            .video-section {
                padding: 2.5rem 1rem;
            }
            
            .info-section {
                padding: 2.5rem 1rem;
            }
            
            .info-name .bride_name {
                font-size: 2.8rem;
            }
            
            .info-name .groom_name {
                font-size: 2.3rem;
            }
        }

        /* Tablets and small devices */
        @media (max-width: 768px) {
            .info-wrapper {
                flex-direction: column;
                gap: 2rem;
            }
            
            .vertical-divider {
                display: none;
            }
            
            .info-right {
                padding: 0;
                text-align: left;
            }
            
            .info-left {
                padding: 1rem;
            }
            
            .info-name .bride_name,
            .info-name .groom_name {
                display: none;
            }
            
            .info-name .full-name {
                display: block;
                font-size: 2.5rem;
                color: #ebebeb;
                font-weight: 400;
                line-height: 1;
                margin-bottom: 1rem;
                border-bottom: 2px solid #ebebeb;
                padding-bottom: 0.5rem;
            }
            
            .info-location {
                font-size: 1.8rem;
                margin-bottom: 1.5rem;
            }
            
            .info-logo img {
                max-width: 80px;
            }

            /* Smaller play button for mobile */
            .play-button {
                width: 70px;
                height: 70px;
            }

            .play-button i {
                font-size: 1.8rem;
            }
        }

        /* Mobile phones */
        @media (max-width: 600px) {
            .video-section {
                padding: 2rem 1rem;
            }
            
            .info-section {
                padding: 2rem 1rem;
            }
            
            .video-wrapper {
                border-radius: 8px;
            }
            
            .info-name .full-name {
                font-size: 2.5rem !important;
                text-align: center;
                margin-bottom: 1rem;
            }
            
            .info-location {
                font-size: 1.5rem;
                text-align: center;
                margin-bottom: 1.5rem;
            }
            
            .info-logo img {
                max-width: 70px;
            }
            
            .info-right {
                font-size: 0.95rem;
                line-height: 1.6;
                text-align: left;
            }
            
            .info-right p {
                margin-bottom: 1.2rem;
                text-indent: 1.5em;
                text-align: center;
            }
            
            .no-video {
                padding: 2rem 1rem;
            }
            
            .no-video p {
                font-size: 1rem;
            }

            /* Even smaller play button for small mobile */
            .play-button {
                width: 60px;
                height: 60px;
            }

            .play-button i {
                font-size: 1.6rem;
            }
        }

        /* Small mobile phones */
        @media (max-width: 480px) {
            .video-section {
                padding: 1.5rem 0.8rem;
            }
            
            .info-section {
                padding: 1.5rem 0.8rem;
            }
            
            .info-name .full-name {
                font-size: 1.8rem;
                margin-bottom: 0.8rem;
            }
            
            .info-location {
                font-size: 1.3rem;
                margin-bottom: 1.2rem;
            }
            
            .info-logo img {
                max-width: 60px;
            }
            
            .info-right {
                font-size: 0.9rem;
                line-height: 1.6;
            }
            
            .info-right p {
                margin-bottom: 1rem;
                text-indent: 1.2em;
            }
            
            .video-wrapper {
                border-radius: 6px;
            }

            .play-button {
                width: 50px;
                height: 50px;
            }

            .play-button i {
                font-size: 1.4rem;
            }
        }

        /* Very small mobile phones */
        @media (max-width: 360px) {
            .video-section {
                padding: 1rem 0.5rem;
            }
            
            .info-section {
                padding: 1rem 0.5rem;
            }
            
            .info-name .full-name {
                font-size: 1.6rem;
            }
            
            .info-location {
                font-size: 1.2rem;
            }
            
            .info-right {
                font-size: 0.85rem;
            }
            
            .info-right p {
                text-indent: 1em;
            }

            .play-button {
                width: 45px;
                height: 45px;
            }

            .play-button i {
                font-size: 1.2rem;
            }
        }

        /* Fix for very tall mobile screens */
        @media (max-height: 700px) and (max-width: 768px) {
            .video-section {
                padding: 1.5rem 1rem;
            }
            
            .info-section {
                padding: 1.5rem 1rem;
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
            <div class="video-wrapper" id="videoPlayer">
                <div class="play-button-overlay" id="playOverlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <iframe 
                    src="https://www.youtube.com/embed/<?= $youtube_id ?>?rel=0&enablejsapi=1" 
                    title="Wedding Film - <?= $bride ?> & <?= $groom ?>"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                    id="youtubeIframe">
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
    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Play button functionality
document.addEventListener('DOMContentLoaded', function() {
    const videoWrapper = document.getElementById('videoPlayer');
    const playOverlay = document.getElementById('playOverlay');
    const youtubeIframe = document.getElementById('youtubeIframe');
    
    if (videoWrapper && playOverlay && youtubeIframe) {
        // Click on play button or overlay to play video
        playOverlay.addEventListener('click', function() {
            // Hide the play button overlay
            playOverlay.classList.add('hidden');
            
            // Get the current iframe src and add autoplay parameter
            let currentSrc = youtubeIframe.src;
            if (!currentSrc.includes('autoplay=1')) {
                // Replace or add autoplay parameter
                if (currentSrc.includes('?')) {
                    youtubeIframe.src = currentSrc + '&autoplay=1';
                } else {
                    youtubeIframe.src = currentSrc + '?autoplay=1';
                }
            }
        });

        // Optional: Hide play button when video starts playing
        youtubeIframe.addEventListener('load', function() {
            // The play button will be hidden when user clicks it
        });

        // Optional: Show play button again when video ends (if needed)
        // This would require YouTube API integration for more advanced control
    }
});
</script>

</body>
</html>

<?php
} else {
    echo "<p>Wedding information not found.</p>";
}

$conn->close();
?>