<?php
include "config/koneksi.php";
$username = $_POST['user'];
$pass     = md5($_POST['pass']);
$login=mysqli_query($koneksi, "SELECT * FROM  users WHERE BINARY username='$username' AND password='$pass' ");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
   include "config/timeout.php";
  $_SESSION[anggota]  = $r[id_agt];
  $_SESSION[user]     = $r[username];
  $_SESSION[nama]  = $r[nama_lengkap];
  $_SESSION[pass]     = $r[password];

  
  // session timeout
  $_SESSION[login] = 1;
  timer();

	$sid_lama = session_id();
	
	session_regenerate_id();

	$sid_baru = session_id();
 $tgl=date ('d/m/Y');
 $dt=date ('h:i A');
  mysqli_query($koneksi, "UPDATE users SET id_session='$sid_baru',tgl_log='$tgl',jam_log='$dt' WHERE username='$username'");
  echo "<script>window.location=('jsx/index.php?aksi=home')</script>";
}
else{
echo "<script>window.location=('login.php?salah=salah')</script>";
}

?>

