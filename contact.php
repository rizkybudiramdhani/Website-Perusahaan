<?php include 'header.php' ?>
<?php

    include 'koneksi.php';
    
    if (!$conn) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }
?>

<body>
    <!-- Spinner Start -->
    <?php include 'spinner.php' ?>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include 'topbar.php' ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5" onclick="aksiHome()">
            <img src="img/icon.png" alt="Logo" class="me-3" style="height: 40px;">          
            <h2 class="m-0 text-primary">PT. Mutiara Pulau Garam</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php#home" class="nav-item nav-link active" onclick="aksiHome()">Home</a>
                <a href="index.php#about" class="nav-item nav-link">About</a>
                <a href="index.php#news" class="nav-item nav-link">News</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php#product" class="dropdown-item ">Our Product</a>
                        <a href="index.php#photo" class="dropdown-item ">Our Photo</a>
                        <a href="index.php#team" class="dropdown-item ">Our Team</a>
                        <a href="index.php#testi" class="dropdown-item ">Testimonial</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="#feature" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block smooth-scroll feature">WHY US?<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="index.php#home">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page" href="contact.php">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Contact Us</h6>
                        <h1 class="mb-4">Feel Free To Contact Us</h1>
                        <p class="mb-4">Have any questions or need assistance? Feel free to reach out to us! Simply fill out the form below, and our team will get back to you as soon as possible.</p>
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Your Name">
                                        <label for="nama">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subjek" name="subjek" placeholder="Subject">
                                        <label for="subjek">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="pesan" name="pesan" style="height: 100px"></textarea>
                                        <label for="pesan">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit" name="submit" >Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6445.864359860325!2d112.8211110871586!3d-6.969267072515923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd811c5b1f6a99b%3A0x60262a5e4dfd8c9b!2sBalung%20Barat%2C%20Balung%2C%20Kec.%20Arosbaya%2C%20Kabupaten%20Bangkalan%2C%20Jawa%20Timur!5e1!3m2!1sid!2sid!4v1739115893722!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php
        

        if(isset($_POST['submit'])){
            
            // print_r($_FILES['gambar']);

            $nama = addslashes( ucwords($_POST['nama']));
            $email = addslashes(($_POST['email']));
            $subjek = addslashes(($_POST['subjek']));
            $pesan = addslashes(($_POST['pesan']));

            
            // $filename = $_FILES['gambar']['name'];
            // $tmpname = $_FILES['gambar']['tmp_name'];
            // $filesize = $_FILES['gambar']['size'];

            // $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            // $rename = 'berita' .time().'.'.$formatfile;

            // $allowedtype =array('png', 'jpg', 'jpeg', 'gif','mp4');

            // if(!in_array($formatfile, $allowedtype)){
            //     echo '<div class="alert alert-error"> Format file tidak diizinkan</div>';
            // }elseif($filesize > 1000000){
            //     echo '<div class="alert alert-error"> Ukuran file tidak boleh lebih dari 1MB</div>';
            // }else{

            //     move_uploaded_file($tmpname,"../img/upload/".$rename );                           

                    $simpan = mysqli_query($conn, "INSERT INTO contact VALUES (
                        null,
                        '".$nama."',
                        '".$email."',
                        '".$subjek."',
                        '".$pesan."'
                    )");
                    if($simpan){
                        echo '<div class="alert alert-success"> Berhasil Dikirim</div>';
                    }else{
                        echo 'Gagal Simpan'.mysqli_error($conn);
                    }   
            }

        
                    
    ?>

    <!-- Footer Start -->
    <?php include 'footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <?php include 'bottom.php' ?>
</body>

</html>