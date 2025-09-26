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
        }</style>

            <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="row w-100 align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <a class="navbar-brand" href="index.php">
                        <img src="https://stavickstudios.com/wp-content/uploads/2023/05/header-logo.png" alt="Logo" height="40">
                    </a>
                </div>
                <div class="col-6">
                    <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">SERVICES</a>
                            </li>
                                          <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    PORTFOLIO
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                                    <li><a class="dropdown-item" href="#">SOUTH ASIAN WEDDINGS</a></li>
                                    <li><a class="dropdown-item" href="#">WESTERN WEDDINGS</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FILMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PHOTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CONTACT</a>
                            </li>
              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>