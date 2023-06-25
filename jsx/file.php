<?
///pemanggilan tabel calon_mhs
$k3=mysqli_query($koneksi, "SELECT * FROM berita ");
$kk=mysqli_num_rows($k3);

$k3=mysqli_query($koneksi, "SELECT * FROM berita ");
$kk=mysqli_num_rows($k3);

$agt=mysqli_query($koneksi, "SELECT * FROM kategori ");
$agt=mysqli_num_rows($agt);

$posting=mysqli_query($koneksi, "SELECT SUM(id_berita)as b FROM berita");
$post=mysqli_fetch_array($posting);

$k4=mysqli_query($koneksi, "SELECT * FROM kritik ");
$kri=mysqli_num_rows($k4);
?>