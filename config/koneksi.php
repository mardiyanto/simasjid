<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_masjid";
$koneksi = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die("Database tidak bisa dibuka");
$kontak_kami=mysqli_query($koneksi,"SELECT * FROM profil WHERE id_profil ='1'");
$k=mysqli_fetch_array($kontak_kami);

?>
