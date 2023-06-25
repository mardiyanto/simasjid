
<?php
include "../../config/koneksi.php";
$act=$_GET[act];
$date=date ('d/m/Y');
$time=date ('h:i A');
if($act=='inputkategori'){
if (empty($_POST[kat])){
 echo "<script>window.alert('Kategori masih kosong');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
$tanggal=date("dmYhis");
$file=$_FILES['gb']['tmp_name'];
$file_name=$_FILES['gb']['name'];
copy($file,"../../foto/admin/".$tanggal.".jpg");
mysqli_query($koneksi,"insert into kat_download (kategori,gb) values ('$_POST[kat]','$tanggal.jpg')");  
echo "<script>window.location=('../index.php?aksi=kat_d')</script>";

  } 
}


elseif($act=='editkategori'){
if (empty($_POST[kat])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
	
$lokasi_file=$_FILES[gb][tmp_name];
if(empty($lokasi_file)){

mysqli_query($koneksi,"UPDATE kat_download SET kategori='$_POST[kat]', gb='$_POST[gb]' WHERE no='$_GET[id_d]'");
echo "<script>window.location=('../index.php?aksi=kat_d')</script>";

}else{
if($_GET[gb]==''){
$tanggal=date("dmYhis");
$file=$_FILES['gb']['tmp_name'];
$file_name=$_FILES['gb']['name'];
copy($file,"../../foto/admin/".$tanggal.".jpg");
mysqli_query($koneksi,"UPDATE kat_download SET kategori='$_POST[kat]', gb='$tanggal.jpg'WHERE no='$_GET[id_d]'");

echo "<script>window.location=('../index.php?aksi=kat_d')</script>";
}else{


$a=$_GET['gb'];
$file=$_FILES['gb']['tmp_name'];
$file_name=$_FILES['gb']['name'];
copy($file,"../../foto/admin/".$a);
mysqli_query($koneksi,"UPDATE kat_download SET kategori='$_POST[kat]' WHERE no='$_GET[id_d]'");
echo "<script>window.location=('../index.php?aksi=kat_d')</script>";
    }
   }
  } 
}
elseif($act=='hapus'){
mysqli_query($koneksi,"DELETE FROM kat_download WHERE no='$_GET[id_d]'");
$b=$_GET['gb'];
$pathFile="../../foto/admin/$b";	   
unlink($pathFile);
echo "<script>window.location=('../index.php?aksi=kat_d')</script>";
}
?>
