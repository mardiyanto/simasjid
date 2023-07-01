
<?php
include "../../config/koneksi.php";
$act=$_GET[act];
$date=date ('d/m/Y');
$time=date ('h:i A');

if($act=='inputgalleri'){
if (empty($_POST[jd]) || empty($_POST[isi])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
	 
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
echo "<script>window.alert('File gambar masih kosong');
        window.location=('javascript:history.go(-1)')</script>";
}else{
$tanggal=date("dmYhis");
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/galleri/".$tanggal.".jpg");
mysqli_query($koneksi,"insert into galeri (judul,keterangan,gambar) values ('$_POST[jd]','$_POST[isi]','$tanggal.jpg')");
   
echo "<script>window.location=('../index.php?aksi=galeri')</script>";
   }
  } 
}

elseif($act=='editgalleri'){
if (empty($_POST[jd]) || empty($_POST[isi])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
	 
$lokasi_file=$_FILES[gambar][tmp_name];
if(empty($lokasi_file)){
mysqli_query($koneksi,"UPDATE galeri SET judul='$_POST[jd]', keterangan='$_POST[isi]' WHERE id_galeri='$_GET[id_g]'");
echo "<script>window.location=('../index.php?aksi=galeri')</script>";
}else{
$a=$_GET['gb'];
$file=$_FILES['gambar']['tmp_name'];
$file_name=$_FILES['gambar']['name'];
copy($file,"../../foto/galleri/".$a);
mysqli_query($koneksi,"UPDATE galeri SET judul='$_POST[jd]', keterangan='$_POST[isi]' WHERE id_galeri='$_GET[id_g]'");
   
echo "<script>window.location=('../index.php?aksi=galeri')</script>";
   }
  } 
}

elseif($act=='hapus'){
mysqli_query($koneksi,"DELETE FROM galeri WHERE id_galeri='$_GET[id_g]'");
$b=$_GET['gbr'];
$pathFile="../../foto/galleri/$b";	   
unlink($pathFile);

echo "<script>window.location=('../index.php?aksi=galeri')</script>";
}
?>
