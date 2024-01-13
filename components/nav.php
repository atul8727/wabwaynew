<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
 ?>
<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>WabWay</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?= ($activePage == 'index') ? 'active':''; ?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?= ($activePage == 'about') ? 'active':''; ?>">About</a>
                    <a href="service.php" class="nav-item nav-link <?= ($activePage == 'service') ? 'active':''; ?>">Services</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="detail.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.php" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.php" class="dropdown-item">Our features</a>
                            <a href="team.php" class="dropdown-item">Team Members</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="quote.php" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-item nav-link <?= ($activePage == 'contact') ? 'active':''; ?>">Contact</a>
                </div>

            </div>
        </nav>