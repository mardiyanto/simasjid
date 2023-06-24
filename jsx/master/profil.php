
<?php
include "../../config/koneksi.php";
$act=$_GET['act'];

if($act=='editpro'){
if (empty($_POST[jd])){
 echo "<script>window.alert('Data yang Anda isikan belum lengkap');
        window.location=('javascript:history.go(-1)')</script>";
     }else{
mysqli_query($koneksi, "UPDATE profil SET alamat='$_POST[alamat]', nama='$_POST[jd]', alias='$_POST[alias]', tahun='$_POST[tahun]', peta='$_POST[peta]',status_profil='$_POST[status_profil]', isi='$_POST[isi]' WHERE id_profil='$_GET[id_p]'"); 
echo "<script>window.location=('../index.php?aksi=profil')</script>";

    }
}
elseif ($act == 'inputpro') {
    if (empty($_POST['jd'])) {
        echo "<script>window.alert('Data yang Anda isikan belum lengkap');
              window.location=('javascript:history.go(-1)')</script>";
    } else {
        $alamat = $_POST['alamat'];
        $nama = $_POST['jd'];
        $alias = $_POST['alias'];
        $tahun = $_POST['tahun'];
        $peta = $_POST['peta'];
        $status_profil = $_POST['status_profil'];
        $isi = $_POST['isi'];

        $sql = "INSERT INTO profil (alamat, nama, alias, tahun, peta,status_profil, isi) VALUES ('$alamat', '$nama', '$alias', '$tahun', '$peta','$status_profil', '$isi')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>window.location=('../index.php?aksi=profil')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }
    }
}
elseif ($act == 'hapuspro') {
    mysqli_query($koneksi, "DELETE FROM profil WHERE id_profil = $_GET[id_p]");
    echo "<script>window.location=('../index.php?aksi=halaman')</script>";
}


?>