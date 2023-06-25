<?php
// Bagian Home
if ($_GET[module]=='home'){
 echo"<div class='bs-docs-section'>
                      <div class='bs-glyphicons'>
                        <ul class='bs-glyphicons-list'>
				    ";
				
$kat=mysqli_query($koneksi," SELECT COUNT( berita.id_berita ) as jlh, kategori.id_kategori, kategori.kategori FROM kategori LEFT JOIN berita ON berita.id_kat= kategori.id_kategori GROUP BY kategori.id_kategori ORDER BY jlh DESC ");
while($t=mysqli_fetch_array($kat)){
$no++;
                          echo" <li><a href='xxx.php?module=cari&id_k=$t[id_kategori]'>
                            <span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>
                            <span class='glyphicon-class'>$t[kategori] ($t[jlh])</span></a>
                          </li>
                                  ";
}
  echo"
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>   ";
}  elseif ($_GET[module]=='artikel'){ ?>
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
<?php     
}


elseif ($_GET[module]=='cari'){
$kate2=mysqli_query($koneksi, " SELECT * FROM berita,kategori WHERE id_kat=id_kategori AND id_kat='$_GET[id_k]'");
$r=mysqli_fetch_array($kate2); 
	echo"<form action='xxx.php?module=detailcari' method='post'>
	<div class='col-md-12 col-sm-12   form-group pull-right top_search'>
                  <div class='input-group'>
<input type='text' name='berdasarkan' class='form-control' value='$r[kategori]'>
                    <input type='text' name='cari' class='form-control' placeholder='Cari Hadis...'>
                    <span class='input-group-btn'>
					<input type='submit' name='submit' class='btn btn-secondary' value='CARI'> 
                 
                    </span>
                  </div>
                </div></form>";
}

elseif ($_GET[module]=='detailcari'){
if ((isset($_POST['submit'])) and ($_POST['cari']<>"")){
      $cari=$_POST['cari'];
      $berdasarkan=$_POST['berdasarkan'];
 $editktp = mysqli_query($koneksi, "SELECT * FROM berita WHERE  $berdasarkan LIKE '%$cari%'");
    $rkp    = mysqli_fetch_array($editktp);
	  $s=mysql_query($koneksi, "SELECT * FROM berita,kategori WHERE $berdasarkan LIKE '%$cari%' 
AND id_kat=id_kategori");

      $ada=mysql_numrows($s);
$no=1;
echo "Di temukan Ada $ada data";

if($ada > 0){
  while($d=mysqli_fetch_array($s)){

	echo "
	<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$d[tanggal] - $d[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $d[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]' title='$d[judul]' rel='bookmark'>$d[judul]</a></h2>
		  <div class='entry clearfix'>";
		 if($d[gambar] !=0){echo" <a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]'>
		  <img width='300' height='172' src='foto/data/$d[gambar]' class='alignleft featured_image wp-post-image' alt='$d[judul]' /></a>";}else{echo"";}	

echo"
		  <p align='justify'>$d[isi]</p>
              </div></div>
	";
}
 
}else{
   
   echo"<div align='center'>Maaf, Data yang anda cari belum terdaftar</div>";
  }
}
}


elseif ($_GET[module]=='detail'){
$detail=mysqli_query($koneksi," SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d=mysqli_fetch_array($detail); 

echo" <a href='xxx.php?module=kategori&id_k=$d[id_kat]' class='btn btn-info'>Kembali</a>
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$d[tanggal] - $d[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $d[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]' title='$d[judul]' rel='bookmark'>$d[judul]</a></h2>
		  <div class='entry clearfix'>";
		 if($d[gambar] !=0){echo" <a href='xxx.php?module=detail&id=$d[id_berita]&id_k=$d[id_kat]'>
		  <img width='300' height='172' src='foto/data/$d[gambar]' class='alignleft featured_image wp-post-image' alt='$d[judul]' /></a>";}else{echo"";}	

echo"
		  <p align='justify'>$d[isi]</p>
              </div></div>";

}
elseif ($_GET[module]=='kategori'){
$kate2=mysqli_query($koneksi," SELECT * FROM berita,kategori WHERE id_kat=id_kategori AND id_kat='$_GET[id_k]'");
$we=mysqli_fetch_array($kate2);
  $p      = new Paging3;
  $batas  = 4;
  $posisi = $p->cariPosisi($batas); 		  
$kate=mysqli_query($koneksi," SELECT * FROM berita WHERE id_kat='$_GET[id_k]' ORDER BY id_berita DESC LIMIT $posisi,$batas");
$jmldata     = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM berita WHERE id_kat='$_GET[id_k]'"));
$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

				

  $ada = mysqli_num_rows($kate);
  
  if ($ada > 0) {
while ($ta=mysqli_fetch_array($kate)){

                $isi_berita6 = strip_tags($ta['isi']); 
                $isi6 = substr($isi_berita6,0,500); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 
echo"
<div class='post'>
	<div class='postmeta-primary'>
            <span class='meta_date'>$ta[tanggal] - $ta[jam]</span>
                 &nbsp; <span class='meta_comments'><a href='#'> dibaca : $ta[dilihat] kali</a></span> 
				&nbsp;  <span><a href='#' >by  Administrator</a></span>
        </div>
		<h2 class='title'><a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='$ta[judul]' rel='bookmark'>$ta[judul]</a></h2>
		  <div class='entry clearfix'>
";
 		// Apabila ada gambar dalam berita, tampilkan
    if ($ta['gambar']!=''){
			echo "<a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]'><img width='200' height='133' src='foto/data/$ta[gambar]' class='alignleft featured_image wp-post-image' alt='$t[judul]' /></a>";
		}
    echo "<p align='justify'>$isi6</p>
         <div class='readmore'>
            <a href='xxx.php?module=detail&id=$ta[id_berita]&id_k=$ta[id_kat]' title='' rel='bookmark'>Read More</a>
        </div>
        </div></div>";
}
}else{
echo"<div id='detail-category'>
           <strong>TIDAK ADA DATA PADA KATEGORI INI</strong>
          </div>";

}
echo"<div class='cleaner_h10'></div>

<div align=center >$linkHalaman</div>";
		
	?>	  
<?php }
elseif ($_GET[module]=='hubungi'){ ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Phone Number</h4>
                        <p class="mb-2"><?php echo"$k[tahun]";?></p>
                        <a class="btn btn-primary px-4" href="tel:<?php echo"$k[tahun]";?>">Call Now <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Email Address</h4>
                        <p class="mb-2"><?php echo"$k[alias]";?></p>
                        <a class="btn btn-primary px-4" href="<?php echo"$k[alias]";?>">Email Now <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Office Address</h4>
                        <p class="mb-2"><?php echo"$k[alamat]";?></p>
                        <a class="btn btn-primary px-4" href="index.php" target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <?php echo"$k[peta]";?>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
                   
                     <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Call Us</h6>
                                    <span><?php echo"$k[tahun]";?></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Mail Us</h6>
                                    <span><?php echo"$k[alias]";?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <form action="xxx.php?module=kritik" method="post" >
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="nama"  id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                    
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="isi" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->



<?php }

elseif ($_GET[module]=='tentang'){ 
    $kate2=mysqli_query($koneksi, " SELECT * FROM profil WHERE  id_profil='$_GET[id_profil]'");
    $t=mysqli_fetch_array($kate2);   
    ?>
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">34 TH</h1>
                                <small class="fs-5 fw-bold">Sejak 1989</small>
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
                    <p class="section-title bg-white text-start text-primary pe-3">Tentang <?php echo"$k[nama]";?></p>
                    <h1 class="mb-4"><?php echo"$t[nama]";?></h1>
                    <p class="mb-4"><?php echo"$t[isi]";?></p>
              
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="xxx.php?module=tentang&id_profil=9">Mulai Beramal</a>
                </div>
            </div>
        </div>
    </div>


<?php }
elseif ($_GET[module]=='galery'){ ?>
  <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
           
                    <h1 class="mb-5">INFORMASI <span class="text-primary text-uppercase">TERKINI</span></h1>
                </div>
                <div class="row g-4">
                    <!-- BERITA Start -->
                    <?php $con=mysqli_query($koneksi, "SELECT * FROM berita order by id_berita DESC ");
	while($ar=mysqli_fetch_array($con)){
		$isi_berita6 = strip_tags($ar['isi']); 
                $isi6 = substr($isi_berita6,0,200); 
                $isi6 = substr($isi_berita6,0,strrpos($isi6," ")); 	 ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="foto/data/<?php echo"$ar[gambar]";?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Pos by admin</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo"$ar[judul]";?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>dibaca : <?php echo"$ar[dilihat]";?> X</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo"$ar[tanggal]";?> - <?php echo"$ar[jam]";?></small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3"><?php echo"$isi6";?></p>
                                <div class="d-flex justify-content-between">
                                    <a href='xxx.php?module=detail&id=<?php echo"$ar[id_berita]";?>&id_k=<?php echo"$ar[id_kat]";?>' class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                </div>
                            </div>
                        </div>
                    </div> <?php }?>
                     <!-- BERITA End -->
                    
                    
                </div>
            </div>
        </div>
        <!-- Room End -->

<?php }
elseif ($_GET[module]=='kritik'){
	  mysqli_query($koneksi,"INSERT INTO kritik (nama, email, pesan) 
             VALUES('$_POST[nama]',
			 '$_POST[email]',
			 '$_POST[isi]')"); 
echo "<script>window.alert('terimakasih sudah mengunjungi aplikasi kami..... ');
        window.location=('index.php')</script>";
}
?>

