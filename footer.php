<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Dsn. Balung Barat No 2 RT. 001. RW. 001 Balung Arusbaya , Bangkalan Jawa Timur</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 812 3481 4277</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sosmedmpg2025@gmail.com</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link smooth-scroll about" href="#about">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link smooth-scroll" href="#news">Our News</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Gallery Us</h5>
                    <div class="row g-2">
                        <?php 
                            $Foto = mysqli_query($conn,"SELECT * FROM photo ORDER BY id DESC LIMIT 6");
                            if(mysqli_num_rows($Foto) > 0){
                                while($f = mysqli_fetch_array($Foto)){  
                        ?>
                            <div class="col-4">
                                <img class="img-fluid rounded" src="img/foto/<?= $f['foto'] ?>" >
                            </div>
                        <?php }}else{ ?>
                        <option value="">Belum ada foto</option>      
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Get the latest updates on our products and business delivered straight to your email!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#" onclick="aksiHome()">PT. Mutiara Pulau Garam</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>