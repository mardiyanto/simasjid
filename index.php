<? include"config/koneksi.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo"$k[nama]"; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="tema/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="tema/lib/animate/animate.min.css" rel="stylesheet">
    <link href="tema/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="tema/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="tema/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="tema/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner 
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
   Start -->




<?php include "menu.php";?>


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="tema/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-2 text-white">Welcome to <?php "$k[nama]"; ?></p>
                                    <h1 class="fs-2 text-white mb-5 animated slideInRight">Shalat adalah obat dari segala kegelisahan</h1>
                                    <a href="xxx.php?module=tentang&id_profil=9" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">BERAMAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="tema/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-2 text-white">Welcome to <?php echo" $k[nama]"; ?></p>
                                    <h1 class="fs-2 text-white mb-5 animated slideInRight">Nabi SAW berkata, antara ketidakpercayaan dan iman adalah meninggalkan salat.</h1>
                                    <a href="xxx.php?module=tentang&id_profil=9" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">BERAMAL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">61 TH</h1>
                                <small class="fs-5 fw-bold">Sejak 1962</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="tema/img/service-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="tema/img/service-2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="tema/img/service-3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">Tentang <?php echo" $k[nama]"; ?></p>
                    <h1 class="mb-4">Kuatkan Iman, Kuatkan Umat</h1>
                    <p class="mb-4"><?php echo"$k[isi]"; ?></p>
              
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="xxx.php?module=tentang&id_profil=9">Mulai Beramal</a>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="https://baznas.go.id/kalkulatorzakat">KALKULATOR ZAKAT</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Ayo Beramal</p>
                    <h1 class="mb-4">Sedakah Tidak Membuatmu Miskin</h1>
                    <p class="mb-4">Jika kamu bersedekah, ulurkan tangan kananmu dan sembunyikanlah tangan kirimu.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Obati penyakitmu dengan bersedekah. </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Turut Kata Yang baik adalah sedekah</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Dana : <?php echo"$k[tahun]";?></p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="xxx.php?module=tentang&id_profil=9">Ayo Sedekah</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="tema/img/service-4.jpg">
                        </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3"><?php echo"$k[nama]";?></p>
                <h1 class="mb-5">informasi</h1>
            </div>
            <div class="row gy-5 gx-4">
                <?php 	$con=mysqli_query($koneksi, "SELECT * FROM berita order by id_berita ASC");
	while($ar=mysqli_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,200); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 	?>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="foto/data/<?php echo"$ar[gambar]";?>" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="foto/data/<?php echo"$ar[gambar]";?>" alt="">
                            </div>
                            <h5 class="mb-3"><?php echo"$ar[judul]";?></h4>
                            <p class="mb-4"><?php echo"$isi6";?></p>
                            <a class="btn btn-square rounded-circle" href="xxx.php?module=detail&id=<?php echo"$ar[id_berita]";?>&id_k=<?php echo"$ar[id_kat]";?>"><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
<?php }?>
                
               
            </div>
        </div>
    </div>
    <!-- Service End -->


<?php "bawah.php";?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="tema/lib/wow/wow.min.js"></script>
    <script src="tema/lib/easing/easing.min.js"></script>
    <script src="tema/lib/waypoints/waypoints.min.js"></script>
    <script src="tema/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="tema/lib/counterup/counterup.min.js"></script>
    <script src="tema/lib/parallax/parallax.min.js"></script>
    <script src="tema/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="tema/js/main.js"></script>
</body>

</html>
