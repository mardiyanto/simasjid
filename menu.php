
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Sosial Media:</span>
                 
                    <a class="btn btn-link text-light" href="https://www.youtube.com/@jami_addawah"><i class="fab fa-youtube"></i></a>
                    <!--  <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                       <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a> -->
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>WA/TLP:</span>
                    <span><?=$k[tahun]?></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0"><?=$k[nama]?></h2>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Beranda</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                    <div class="dropdown-menu bg-light m-0">
                    <a href="xxx.php?module=tentang&id_profil=1" class='dropdown-item'>Tentang Kami</a>
                    <a href="xxx.php?module=jadwal" class='dropdown-item'>Jadwal</a>
                     <?php $profil = mysqli_query($koneksi, "SELECT * FROM profil WHERE status_profil = 'halpro'");
if (mysqli_num_rows($profil) > 0) {
    while ($t = mysqli_fetch_array($profil)) {
        echo "<a href='xxx.php?module=tentang&id_profil=$t[id_profil]' class='dropdown-item'>$t[alias]</a>";
        // Tambahkan kode lainnya sesuai kebutuhan
    }
} else {
    // Tidak ada data profil dengan status_profil "hal"
    // Tidak ada tautan yang ditampilkan
} ?>
                    
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Amal</a>
                    <div class="dropdown-menu bg-light m-0">
                     <?php $profil = mysqli_query($koneksi, "SELECT * FROM profil WHERE status_profil = 'hal'");
if (mysqli_num_rows($profil) > 0) {
    while ($t = mysqli_fetch_array($profil)) {
        echo "<a href='xxx.php?module=tentang&id_profil=$t[id_profil]' class='dropdown-item'>$t[alias]</a>";
        // Tambahkan kode lainnya sesuai kebutuhan
    }
} else {
    // Tidak ada data profil dengan status_profil "hal"
    // Tidak ada tautan yang ditampilkan
} ?>
                    
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                    <div class="dropdown-menu bg-light m-0">
                    <a href="xxx.php?module=artikel" class='dropdown-item'>Informasi</a>
                    <?$kat=mysqli_query($koneksi," SELECT COUNT( berita.id_berita ) as jlh, kategori.id_kategori, kategori.kategori, kategori.gambar_kat FROM 
kategori LEFT JOIN berita ON berita.id_kat= kategori.id_kategori GROUP BY kategori.id_kategori ORDER BY jlh DESC ");
while($t=mysqli_fetch_array($kat)){
$no++;?>
 <a class='dropdown-item' href="xxx.php?module=kategori&id_k=<?=$t[id_kategori]?>"><?=$t[kategori]?></a>
<?}?>
                     
                    </div>
                </div>
                <a href="xxx.php?module=galery" class="nav-item nav-link">Galery</a>
                <a href="xxx.php?module=agenda" class="nav-item nav-link">Agenda</a>
                <a href="xxx.php?module=hubungi" class="nav-item nav-link">Hubungi Kami</a>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->