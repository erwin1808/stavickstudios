<style>
.navbar {
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
}

/* Layout for desktop */
.navbar-nav {
    align-items: center;
}
.navbar-left {
    margin-right: auto;
}
.navbar-right {
    margin-left: auto;
}
.navbar-center {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}

/* Full-screen mobile navbar */
@media (max-width: 991.98px) {
    .navbar,
    .navbar .container-fluid {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
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
        padding-left: 0;
        margin: 0;
        transform: translateY(150px);
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

    .navbar .dropdown-toggle::after {
        display: none;
    }

    .navbar-toggler {
        z-index: 10001;
        margin-right: 20px;
    }

    .navbar-brand img {
        margin-left: 20px;
    }
}
</style>

<nav class="navbar navbar-expand-lg navbar-light position-relative">
    <div class="container-fluid">
        <!-- Hamburger button (mobile) -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Left links -->
            <ul class="navbar-nav navbar-left">
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
            </ul>

            <!-- Centered logo -->
            <a class="navbar-brand navbar-center" href="index.php">
                <img src="https://stavickstudios.com/wp-content/uploads/2023/05/header-logo.png" alt="Logo" height="40">
            </a>

            <!-- Right links -->
            <ul class="navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="stavick-films.php">FILMS</a></li>
                <li class="nav-item"><a class="nav-link" href="stavick-photography.php">PHOTOS</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
