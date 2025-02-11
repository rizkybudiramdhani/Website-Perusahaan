<div class="container-xxl py-5" id="news">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Our News</h6>
                <h1 class="mb-4">The Latest and Most Reliable Information About Our Products and Industry</h1>
            </div>
            <div class="row g-4">
                <?php 
                    $news = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC");
                    $delay = 0.1;
                    if(mysqli_num_rows($news) > 0){
                        while($n = mysqli_fetch_array($news)){  
                            
                ?>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="service-item rounded overflow-hidden">
                            <img class="img-fluid" src="img/fotoberita/<?= $n['foto'] ?>" alt="" >
                            <div class="position-relative p-4 pt-0">
                                <div class="service-icon">
                                    <i class="fa fa-exclamation fa-3x"></i>
                                </div>
                                <h4 class="mb-3"><?= $n['judul'] ?></h4>
                                <p><?= substr($n['keterangan'], 0, 35) . ' ...' ?></p>
                                <a class="small fw-medium" href="detailberita.php">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 0.1; ?>
                <?php }}else{ ?>
                    <option value="">Belum ada foto</option>      
                <?php } ?>
            </div>
        </div>
    </div>