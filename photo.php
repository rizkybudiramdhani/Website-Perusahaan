<!-- ------------------------------------------------------------------------------------------------------- -->

    <div class="container-xxl py-5" id="photo">
        <div class="container">
            
            <!-- kategori -->

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our Company Gallery</h6>
                <h1 class="mb-4">Take a closer look at our locations, facilities, and activities in producing high-quality products.</h1>
            </div>

            <!-- start looping kategori  -->

            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <!-- start -->
                            <?php 
                                $ktg = mysqli_query($conn,"SELECT * FROM category ORDER BY id DESC");
                                if(mysqli_num_rows($ktg) > 0){
                                    while($k = mysqli_fetch_array($ktg)){
                                        $kategori =  $k['kategori'];  
                            ?>
                                <li class="mx-2"  data-filter=".<?=$kategori?>" ><?=$kategori?></li>
                            <?php }}else{ ?>        
                                <li class="mx-2 active">Belum Ada Kategori</option>  
                            <?php } ?>
                        <!-- end -->
                    </ul>
                </div>
            </div>

            <!-- end looping kategori -->

            <!-- end kategori -->

            <!-- start foto -->
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">

                <!-- start looping -->

                <?php 
                    $Foto = mysqli_query($conn,"SELECT * FROM photo ORDER BY id DESC");
                    if(mysqli_num_rows($Foto) > 0){
                        while($f = mysqli_fetch_array($Foto)){  
                            $kategori =  $f['kategori'];
                ?>
                    <div class="col-lg-3 col-md-5 portfolio-item <?=$kategori?> ">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img src="img/foto/<?= $f['foto'] ?>" alt="Gambar tidak muncul" class="img-fluid">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href="img/foto/<?= $f['foto'] ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="pt-3">
                            <h5 class="lh-base"><?=$f['judul']?></h5>
                            <hr class="text-primary w-25 my-2">
                        </div>
                    </div>
                <?php }}else{ ?>
                    <option value="">Belum ada foto</option>      
                <?php } ?>
    
                <!-- end looping -->

            </div>
            <!-- end foto -->
        </div>
    </div>