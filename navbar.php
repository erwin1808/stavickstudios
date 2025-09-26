<style>  .navbar {
             z-index: 10000;
            background: #ebebeb !important;
            border-bottom: 1px solid #eee;
            margin-left: 100px;
            margin-right: 100px;
            transform: translateY(20px);
        }
        .navbar-nav .nav-link, .navbar-nav .dropdown-toggle {
            font-family: 'Cormorant Garamond', sans-serif;
            color: #2d2c2a !important;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            
        }

        .dropdown-menu {
            font-family: 'Cormorant Garamond', sans-serif;
            border-radius: 0%;
            margin-left: -50px;
            background-color: #ebebeb;
            
        }
        .dropdown-item {
            font-family: 'Cormorant Garamond', sans-serif;
            color: #2d2c2a !important;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 1px;
        }</style><style>
/* Full-screen mobile navbar with links at top */
@media (max-width: 991.98px) {
    /* Remove container margins/padding */
    .navbar,
    .navbar .container-fluid,
    .navbar .row {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
    }

    /* Make the collapsed menu full-screen */
    .navbar-collapse {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #ebebeb;
        z-index: 9999;
        padding-top: 70px; /* space for logo */
        display: flex;
        flex-direction: column;
        justify-content: flex-start; /* push links to top */
        align-items: center;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }

    /* Show the menu when toggled */
    .navbar-collapse.show {
        transform: translateX(0);
    }

    /* Stack nav items vertically at top */
    .navbar-nav {
        flex-direction: column;
        width: 100%;
        text-align: center;
        padding-left: 0;
        margin: 0;
        transform: translateY(150px);
    }

    .navbar-nav .nav-item {
        margin: 15px 0;
    }

    /* Dropdown items full width */
    .dropdown-menu {
        position: static;
        float: none;
        background-color: #ebebeb !important;
        border: none;
        box-shadow: none;
        width: 100%;
        text-align: center;
    }

    .dropdown-item {
        padding: 10px 0;
    }.navbar-nav .dropdown-menu {
margin-left: -10px;
}
/* Remove arrow from dropdown-toggle */
.navbar .dropdown-toggle::after {
    display: none;
}


    /* Keep hamburger on top-right */
    .navbar-toggler {
        z-index: 10001;
        margin-right: 20px;
    }

    /* Adjust logo image */
    .navbar-brand img {
        margin-left: 20px;
    }

    /* Optional: prevent background scrolling when menu open */
    body.nav-open {
        overflow: hidden;
    }
}
</style>


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <!-- Logo left -->
        <a class="navbar-brand" href="index.php">
            <img src="https://stavickstudios.com/wp-content/uploads/2023/05/header-logo.png" alt="Logo" height="40">
        </a>

        <!-- Hamburger right -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Full-screen collapse -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="#">SERVICES</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button" data-bs-toggle="dropdown">
                        PORTFOLIO
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                        <li><a class="dropdown-item" href="#">SOUTH ASIAN WEDDINGS</a></li>
                        <li><a class="dropdown-item" href="#">WESTERN WEDDINGS</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">FILMS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PHOTOS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
