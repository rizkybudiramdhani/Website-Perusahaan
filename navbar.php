<?php include 'header.php' ?>
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5" onclick="aksiHome()">
            <img src="img/icon.png" alt="Logo" class="me-3" style="height: 40px;">          
            <h2 class="m-0 text-primary">PT. Mutiara Pulau Garam</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" class="nav-item nav-link active" onclick="aksiHome()">Home</a>
                <a href="#about" class="nav-item nav-link smooth-scroll about">About</a>
                <a href="#news" class="nav-item nav-link smooth-scroll news">News</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="#photo" class="dropdown-item smooth-scroll photo">Our Photo</a>
                        <!-- <a href="#team" class="dropdown-item smooth-scroll team">Our Team</a>
                        <a href="#testi" class="dropdown-item smooth-scroll testi">Testimonial</a> -->
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#feature" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block smooth-scroll feature">WHY US?<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>