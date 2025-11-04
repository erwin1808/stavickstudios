<style>
/* Navbar base */
.navbar {
    z-index: 10000;
    background: #ebebeb !important;
    border-bottom: 1px solid #eee;
    padding: 5px 100px 0; /* desktop spacing */
    margin-bottom: -30px;
}

.navbar-nav .nav-link,
.navbar-nav .dropdown-toggle {
    font-family: 'Cormorant Garamond', serif;
    color: #2d2c2a !important;
    font-size: 1.1rem;
    font-weight: 700;
    letter-spacing: 1px;
}

/* Dropdown menu styling */
.dropdown-menu {
    font-family: 'Cormorant Garamond', serif;
    border-radius: 0;
    background-color: #ebebeb;
    text-align: left;
}

.dropdown-item {
    font-family: 'Cormorant Garamond', serif;
    color: #2d2c2a !important;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: 1px;
}

/* Logo on left, nav links centered */
.navbar-brand img {
    height: 40px; /* smaller logo */
    width: auto;  /* maintain aspect ratio */
    margin-left: -80px;
    margin-right: 80px;
}

.navbar-nav {
    margin: 0 auto; /* center nav links horizontally */
}

/* Full-screen mobile navbar */
@media (max-width: 991.98px) {
    .navbar {
        padding: 0;
    }
        .navbar-brand img {
        height: 40px; /* even smaller on mobile */
    }
    .navbar-collapse {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #ebebeb;
        z-index: 9999;
        padding-top: 70px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }
    .navbar-collapse.show {
        transform: translateX(0);
    }
    .navbar-nav {
        flex-direction: column;
        width: 100%;
        text-align: center;
        transform: translateY(100px);
    }
    .navbar-nav .nav-item {
        margin: 15px 0;
    }
    .dropdown-menu {
        position: static;
        background-color: #ebebeb !important;
        border: none;
        box-shadow: none;
        width: 100%;
        text-align: center;
    }
    .dropdown-item {
        padding: 10px 0;
    }
    .navbar-toggler {
        z-index: 10001;
        margin-right: 20px;
    }
}
</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <!-- Logo on the left -->
        <a class="navbar-brand" href="index.php">
            <img src="images/header-logo.png" alt="Logo">
        </a>

        <!-- Hamburger button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Centered nav links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="portfolioDropdown" role="button" data-bs-toggle="dropdown">
                        PORTFOLIO
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                        <li><a class="dropdown-item" href="south-asian-weddings.php">SOUTH ASIAN WEDDINGS</a></li>
                        <li><a class="dropdown-item" href="western-weddings.php">WESTERN WEDDINGS</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="experience.php">EXPERIENCE</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
