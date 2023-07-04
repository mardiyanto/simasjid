<?php
///////////////////////////lihat/////////////////////////////////////////////
if($aksi=='home'){
echo"
 <div class='row'>
                   <div class='col-lg-12'>
			<div class='panel panel-default'>
                            <div class='panel-heading'>
                           Sambutan
                            </div>
                            <div class='panel-body'>                         
				<p>Selamat Datang Di halaman Admin, Silahkan Pilih menu untuk pengaturan data yang di butuhkan guna mendapatkan hasil yang maksimal sesuai keinginan.</p>
                            </div>
			</div>
                   </div>
</div>
<div class='row'>
                    <div class='col-xs-12'>
              <div class='panel panel-primary'>
			    <div class='box-header'>
				   <h3 class='box-title'>INFORMASI</h3>
                </div>
                <div class='box-header'>
				</div>
     <div class='box-body'>
                  <a href='index.php?aksi=profil' class='btn btn-app'>
                    <span class='badge bg-yellow'>3</span>
                    <i class='fa fa-bullhorn fa-5x'></i> Profil
                  </a>
				     <a href='index.php?aksi=kategori' class='btn btn-app'>
                    <span class='badge bg-red'>$agt</span>
                    <i class='fa fa-heart-o fa-5x'></i> kategori
                  </a>
                  <a href='index.php?aksi=artikel' class='btn btn-app'>
                    <span class='badge bg-green'>$kk</span>
                    <i class='fa fa-barcode fa-5x'></i>Data artikel
                  </a>
                  <a href='index.php?aksi=admin' class='btn btn-app'>
                    <span class='badge bg-purple'>1</span>
                    <i class='fa fa-users fa-5x'></i> admin
                  </a>
            </div>
			</div>
 </div>
			</div>
";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='kategori'){
echo"
<div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
			Data Kategori Artikel
                        </div>
                        <div class='panel-body'>
                            <ul class='nav nav-pills'>
                                <li class='active'><a href='#home-pills' data-toggle='tab'>Data Kategori</a>
                                </li>
                                <li><a href='#profile-pills' data-toggle='tab'>Input Kategori</a>
                                </li>
                            </ul>
                            <div class='tab-content'>
                                <div class='tab-pane fade in active' id='home-pills'>
                                    <h4>Data Kategori </h4> 
				   <div class='panel-body'>
                            <div class='table-responsive'>
                                <table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
				    ";
				$tebaru=mysqli_query($koneksi, " SELECT * FROM kategori ORDER BY id_kategori DESC ");
while ($t=mysqli_fetch_array($tebaru)){
              
$no++;    
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>	       <div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[kategori]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editkategori&id_k=$t[id_kategori]'>edit</a></li>
                        <li><a href='master/kategori.php?id_k=$t[id_kategori]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[kategori] ?')\">hapus</a></li>
                      </ul>
                    </div></td>
                                        </tr>
                                       
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
				 </div>
				 
				 
                                <div class='tab-pane fade' id='profile-pills'>
                                    <h4>Input Kategori</h4>
                                   
<form id='form1' method='post' enctype='multipart/form-data' action='master/kategori.php?act=inputkategori'>
         <div class='form-grup'>
        <label>Nama </label>
        <input type='text' class='form-control'  name='kat'/><br>
		<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br>
		
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> 
    </form>  

				</div></div>
                            </div>
                        </div>
                    </div>
           
";}

elseif($aksi=='editkategori'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM kategori WHERE id_kategori=$_GET[id_k] ");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT
                        </div>
                        <div class='panel-body'>
<form id='form1'  method='post' enctype='multipart/form-data' action='master/kategori.php?act=editkategori&id_k=$_GET[id_k]&gb=$t[gambar]'>
       <div class='form-grup'>
        <label>Nama </label>
        <input type='text' class='form-control' value='$t[kategori]' name='kat'/><br>
		<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />";
		if($t[gambar]!=0){echo"
		<img src='../foto/kategori/$t[gambar]' width='150' />";}
            echo"</br><a href='index.php?aksi=kategori' class='btn btn-default' data-dismiss='modal'>kembali</a>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div> </div></div> </div>
";	
}
///////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editartikel'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM berita WHERE id_berita=$_GET[id_b]");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
			 <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>

<form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=editberita&id_b=$_GET[id_b]&gb=$t[gambar]'>
       <div class='form-grup'>
        <label>Kategori</label>
		    <select class='smallInput' name='kat'>";

             $tampil=mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY kategori");
          if ($t[id_kat]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysqli_fetch_array($tampil)){
            if ($t[id_kat]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[kategori]</option>";
            }
          }

    echo "</select><br>
    	<label>Judul</label>
        <input type='text'  value='$t[judul]' name='jd' class='form-control'/><br>
		<label>Isi</label>
       <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
			<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />";
		if($t[gambar]!=0){echo"
		<img src='../foto/data/$t[gambar]' width='150' />";}
            echo"

            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
    </div></div></div></div></div></div>
";
}
////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='viewartikel'){
$detail=mysqli_query($koneksi, " SELECT * FROM berita WHERE id_berita='$_GET[id_b]'");
$d=mysqli_fetch_array($detail); 
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI ARTIKEL
                        </div>
                        <div class='panel-body'>
<a href='index.php?aksi=artikel' title='Edit' class='btn btn-info'>kembali</a>			
     
<a href='index.php?aksi=editartikel&id_b=$d[id_berita]' title='Edit' class='btn btn-info'>EDIT</a>

<a href='master/artikel.php?id_b=$d[id_berita]&act=hapus&gbr=$d[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $d[judul] ?')\" title='Hapus' class='btn btn-info'>HAPUS</a><br /><br />	    	  
 <h4>$d[judul]</h4><em>$d[tanggal] - $d[jam]</em><br />
    ";
if($d[gambar] !=0){echo"<img src=../foto/data/$d[gambar]  class=box-shadow2 width=200 height=130 align='left'/>";}else{echo"";}
echo"$d[isi]</div></div></div></div></div></div>";
}

elseif($aksi=='artikel'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI 
                        </div>
						  <div class='box-header'>
				<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button>
						<div class='btn btn-info' >
                              artikel :$kk
                            </div>	
				</div>
                        <div class='panel-body'>	

                            <div class='table-responsive'>
                               <table id='example1' class='table table-bordered table-striped'>
<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
				    ";
$tebaru=mysqli_query($koneksi, " SELECT * FROM berita,kategori WHERE id_kat=id_kategori ORDER BY id_berita DESC ");
while ($t=mysqli_fetch_array($tebaru)){
$no++;  
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[judul]</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[kategori]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editartikel&id_b=$t[id_berita]'>edit</a></li>
						<li><a href='index.php?aksi=viewartikel&id_b=$t[id_berita]'>view</a></li>
                        <li><a href='master/artikel.php?id_b=$t[id_berita]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\">hapus</a></li>
                      </ul>
                    </div></td>
                                        </tr>                                      
                                    </tbody>";
}
                               echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
	 </div>
	  </div>";			

////////////////input admin			

echo"			
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data</h4>
                                        </div>
                                        <div class='modal-body'>
<form id='form1' enctype='multipart/form-data' method='post' action='master/artikel.php?act=inputberita'>
			<div class='form-group'>
       <label>Kategori</label>
		    <select class='form-control' name='kat'>
        	<option value=0 selected>----- Pilih Kategori -----</option>";
            $tampil=mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY kategori");
            while($r=mysqli_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[kategori]</option>";
            }
              
        echo "</select><br>
    	<label>Judul</label>
        <input type='text' class='form-control' name='jd'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
	
    	<label>Gambar</label>
        <input type='file' class='smallInput' size='50'name='gambar'/><br><br />
            <div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form>
                                    </div>
                                </div>
                            </div>
                    </div>
		    </div>			
"; 

}

elseif($aksi=='kritik'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI kritik
                        </div>
						  <div class='box-header'>
				</div>
                        <div class='panel-body'>	

                            <div class='table-responsive'>
                               <table id='example1' class='table table-bordered table-striped'>
<thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
				    ";
$tebaru=mysqli_query($koneksi, " SELECT * FROM kritik  ORDER BY id_kritik DESC ");
while ($t=mysqli_fetch_array($tebaru)){
$no++;  
                                    echo"<tbody>
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama]</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[email]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
						<li><a href='index.php?aksi=viewkritik&k=$t[id_kritik]'>view</a></li>
                       </ul>
                    </div></td>
                                        </tr>                                      
                                    </tbody>";
}
                               echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
	 </div>
	  </div>";			
}
elseif($aksi=='viewkritik'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM kritik WHERE id_kritik=$_GET[k] ");
$t=mysqli_fetch_array($tebaru);
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>$t[nama]
                        </div>
                        <div class='panel-body'>
<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>";
echo"$t[pesan] </div></div></div></div></div>";
}
////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='halaman'){
echo"			
	<div class='row'>
	 <div class='col-xs-12'>
              <div class='panel panel-primary'>
			    <div class='box-header'>
				   <h3 class='box-title'>INFORMASI PROFIL</h3>
                </div>
                <div class='box-header'>
                <a href='index.php?aksi=inputprofil' title='Edit' class='btn btn-info'>Tambah Halaman</a>
				</div>
                             <div class='box-body'>
		<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
	 <thead> 
	 <tr>
                                            <th>No</th>
                                            <th>Profil</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
				   <tbody> ";
				$tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE status_profil = 'hal' ORDER BY id_profil DESC ");
while ($t=mysqli_fetch_array($tebaru)){
                $isi_berita = strip_tags($t['isi']); 
                $isi = substr($isi_berita,0,70); 
                $isi = substr($isi_berita,0,strrpos($isi," ")); 
				if($t[aktif]=='Y'){$mk='<strong>Tampil</strong>';}else{$mk='Tidak';}
$no++;    
                                    echo"
                                        <tr>
                                            <td>$no</td>
                                            <td>$t[nama]</td>
                                            <td><div class='btn-group' role='group' aria-label='Basic example'>
                                            <a href='index.php?aksi=viewprofil&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-eye'></i></a>
                                            <a href='index.php?aksi=edithalaman&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-edit'></i></a>
                                            <a href='master/profil.php?act=hapuspro&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-trash-o'></i></a>
                                          </div> 
                                            </td>
                                       </tr>                                      
                                    ";
}
                                echo"</tbody></table>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>		
	 </div>
	  </div>	
	";
}
elseif($aksi=='halamanprofil'){
    echo"			
        <div class='row'>
         <div class='col-xs-12'>
                  <div class='panel panel-primary'>
                    <div class='box-header'>
                       <h3 class='box-title'>INFORMASI PROFIL</h3>
                    </div>
                    <div class='box-header'>
                    <a href='index.php?aksi=inputhalprofil' title='Edit' class='btn btn-info'>Tambah Halaman</a>
                    </div>
                                 <div class='box-body'>
            <div class='table-responsive'>		
         <table id='example1' class='table table-bordered table-striped'>
         <thead> 
         <tr>
                                                <th>No</th>
                                                <th>Profil</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                       <tbody> ";
                    $tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE status_profil = 'halpro' ORDER BY id_profil DESC ");
    while ($t=mysqli_fetch_array($tebaru)){
                    $isi_berita = strip_tags($t['isi']); 
                    $isi = substr($isi_berita,0,70); 
                    $isi = substr($isi_berita,0,strrpos($isi," ")); 
                    if($t[aktif]=='Y'){$mk='<strong>Tampil</strong>';}else{$mk='Tidak';}
    $no++;    
                                        echo"
                                            <tr>
                                                <td>$no</td>
                                                <td>$t[nama]</td>
                                                <td><div class='btn-group' role='group' aria-label='Basic example'>
                                                <a href='index.php?aksi=viewprofil&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-eye'></i></a>
                                                <a href='index.php?aksi=edithalamanprofil&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-edit'></i></a>
                                                <a href='master/profil.php?act=hapuspro&id_p=$t[id_profil]' class='btn btn-info'><i class='fa fa-trash-o'></i></a>
                                              </div> 
                                                </td>
                                           </tr>                                      
                                        ";
    }
                                    echo"</tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>		
         </div>
          </div>	
        ";
    }

elseif($aksi=='profil'){
    echo"			
        <div class='row'>
         <div class='col-xs-12'>
                  <div class='panel panel-primary'>
                    <div class='box-header'>
                       <h3 class='box-title'>INFORMASI PROFIL</h3>
                    </div>
                    <div class='box-header'>
                    </div>
                                 <div class='box-body'>
            <div class='table-responsive'>		
         <table id='example1' class='table table-bordered table-striped'>
         <thead> 
         <tr>
                                                <th>No</th>
                                                <th>Profil</th>
                                            </tr>
                                        </thead>
                       <tbody> ";
                    $tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE status_profil = 'pro' ORDER BY id_profil DESC ");
    while ($t=mysqli_fetch_array($tebaru)){
                    $isi_berita = strip_tags($t['isi']); 
                    $isi = substr($isi_berita,0,70); 
                    $isi = substr($isi_berita,0,strrpos($isi," ")); 
                    if($t[aktif]=='Y'){$mk='<strong>Tampil</strong>';}else{$mk='Tidak';}
    $no++;    
                                        echo"
                                            <tr>
                                                <td>$no</td>
                                                <td><div class='btn-group'>
                          <button type='button' class='btn btn-info'>$t[nama]</button>
                          <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                            <span class='caret'></span>
                            <span class='sr-only'>Toggle Dropdown</span>
                          </button>
                          <ul class='dropdown-menu' role='menu'>
                            <li><a href='index.php?aksi=editprofil&id_p=$t[id_profil]'>edit</a></li>
                            <li><a href='index.php?aksi=viewprofil&id_p=$t[id_profil]'>view</a></li>
                            </ul>
                        </div></td>
                                           </tr>                                      
                                        ";
    }
                                    echo"</tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>		
         </div>
          </div>	
        ";
    }

elseif($aksi=='inputprofil'){
    echo"
    <div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>EDIT PROFIL
                            </div>
                            <div class='panel-body'>			
    <form id='form1'  method='post' action='master/profil.php?act=inputpro'>
           <div class='form-grup'>
            <label>Judul</label>
            <input type='text' class='form-control' name='jd'/>
            <label>nama menu</label>
            <input type='text' class='form-control' name='alias'/>
            <input type='hidden' class='form-control' value='hal' name='status_profil'/><br>
            <label>Isi</label>
            <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
            <script>CKEDITOR.replace('text-ckeditor');</script>
            <div class='modal-footer'>
                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                <button type='submit' class='btn btn-primary'>Save </button>
                                            </div> </div>
        </form></div> </div></div> </div></div> </div>
    ";
    }
    elseif($aksi=='inputhalprofil'){
        echo"
        <div class='row'>
                        <div class='col-lg-12'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>EDIT PROFIL
                                </div>
                                <div class='panel-body'>			
        <form id='form1'  method='post' action='master/profil.php?act=inputpro'>
               <div class='form-grup'>
                <label>Judul</label>
                <input type='text' class='form-control' name='jd'/>
                <label>nama menu</label>
                <input type='text' class='form-control' name='alias'/>
                <input type='hidden' class='form-control' value='halpro' name='status_profil'/><br>
                <label>Isi</label>
                <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
                <script>CKEDITOR.replace('text-ckeditor');</script>
                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                    <button type='submit' class='btn btn-primary'>Save </button>
                                                </div> </div>
            </form></div> </div></div> </div></div> </div>
        ";
        }
           
/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($aksi=='editprofil'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT PROFIL
                        </div>
                        <div class='panel-body'>			
<form id='form1'  method='post' action='master/profil.php?act=editpro&id_p=$_GET[id_p]'>
       <div class='form-grup'>
        <label>Judul</label>
        <input type='text' class='form-control' value='$t[nama]' name='jd'/><input type='hidden' class='form-control' value='pro' name='status_profil'/><br>
		<label>Email</label>
        <input type='text' class='form-control' value='$t[alias]' name='alias'/><br>
		<label>No/Wa</label>
        <input type='text' class='form-control' value='$t[tahun]' name='tahun'/><br>
		<label>Alamat</label>
        <input type='text' class='form-control' value='$t[alamat]' name='alamat'/><br>
        <label>Peta</label>
        <input type='text' class='form-control' value='$t[peta]' name='peta'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
    	<div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div> </div></div> </div>
";
}

elseif($aksi=='edithalaman'){
    $tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
    $t=mysqli_fetch_array($tebaru);
    echo"
    <div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>EDIT PROFIL
                            </div>
                            <div class='panel-body'>			
    <form id='form1'  method='post' action='master/profil.php?act=editpro&id_p=$_GET[id_p]'>
           <div class='form-grup'>
            <label>Judul</label>
            <input type='text' class='form-control' value='$t[nama]' name='jd'/><br>
            <label>nama menu</label>
            <input type='text' class='form-control' value='$t[alias]' name='alias'/>
            <input type='hidden' class='form-control' value='hal' name='status_profil'/>
            <label>Isi</label>
            <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
            <script>CKEDITOR.replace('text-ckeditor');</script>
            <div class='modal-footer'>
                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                <button type='submit' class='btn btn-primary'>Save </button>
                                            </div> </div>
        </form></div> </div></div> </div></div> </div>
    ";
    }


elseif($aksi=='viewprofil'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysqli_fetch_array($tebaru);
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>$t[nama]
                        </div>
                        <div class='panel-body'>
<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>
";
if($t[aktif] =='Y'){echo"<img src=../foto/foto_profil/$t[foto]  class=box-shadow2 width=50% /><br /><br />";}
echo"$t[isi] </div></div></div></div></div>";
}
////////////////hal admin		
elseif($aksi=='admin'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI 
                        </div>
                        <div class='panel-body'>	
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data Admin
                            </button>
                           	<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>User</th>		  
                                        </tr>
                                    </thead>
				    ";
$tebaru=mysqli_query($koneksi, " SELECT * FROM users ");
while ($t=mysqli_fetch_array($tebaru)){	
$no++;
                                    echo"<tbody>
                                        <tr>
                                            <td>$t[nama_lengkap]</td>
							<td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[username]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editadmin&id=$t[id]' title='Edit'><i class='fa fa-pencil'></i>edit</a></li>
						<li><a href='master/admin.php?id=$t[id]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[nama_lengkap] ?')\" title='Hapus'><i class='fa fa-remove'></i>hapus</li>
                        </ul>
                    </div></td>
                                        </tr>
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>		
	 </div>
	  </div>";			
////////////////input admin			
echo"			
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input Data Guru</h4>
                                        </div>
                                        <div class='modal-body'>
                                           <form role='form' method='post' action='master/admin.php?act=inputadmin'>
                                            <div class='form-group'>
                                            <label>Nama Lengkap</label>
						 <input type='text' class='form-control' name='nm'/><br>
						<label>Email</label>
						<input type='text' class='form-control' name='em'/><br>
						<label>User Name</label>
						 <input type='text' class='form-control'  name='um'/><br>
						<label>Password</label>
						<input type='text' class='form-control'  name='pw'/><br><br />
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div>
					</form>
                                   </div>
                                </div>
                            </div>
                    </div>
		    </div>			
"; 
}
/////////////////////////////////////////////////////////////////////////////////////////////////
elseif($aksi=='editadmin'){
$tebaru=mysqli_query($koneksi, " SELECT * FROM users WHERE id=$_GET[id]");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='col-lg-6'>
      <h4 class='modal-title' id='H3'>Edit Data Admin</h4>
    <div class='modal-body'>
<form id='form1'  method='post' action='master/admin.php?act=editadmin&id=$t[id]'>
    	<label>Nama Lengkap</label>
        <input type='text' class='form-control'  name='nm' value='$t[nama_lengkap]'/>
	<label>Email</label>
        <input type='text' class='form-control' name='em' value='$t[email]' />
	<label>User Name</label>
        <input type='text' class='form-control'  name='um' value='$t[username]'/>
	<label>Password</label>
        <input type='text' class='form-control'  name='pw'/> </br>
	 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='submit' class='btn btn-primary'>Save </button>
    </form>  
      </div></div></div></div>
";
}
elseif($aksi=='agenda'){
    echo"
    <div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                Data Agenda Kegiatan
                            </div>
                            <div class='panel-body'>
                                <div class='panel-group' id='accordion'>
                                    <div class='panel panel-default'>
                                        <div class='panel-heading'>
                                            <h4 class='panel-title'>
                                                <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>Agenda</a>
                                            </h4>
                                        </div>
                                        <div id='collapseOne' class='panel-collapse collapse in'>
                                            <div class='panel-body'>
                                <div class='table-responsive'>
                                    <table class='table table-striped table-bordered table-hover'>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tema</th>
                                                <th>Isi</th>
                                                <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Pilihan</th>
                                            </tr>
                                        </thead>
                        ";
                    $tebaru=mysqli_query($koneksi," SELECT * FROM agenda ORDER BY id_agenda DESC ");
    while ($t=mysqli_fetch_array($tebaru)){
                    
    $no++;    
                                        echo"<tbody>
                                            <tr>
                                                <td>$no</td>
                                                <td>$t[tema]</td>
                                                <td>$t[isi_agenda]</td>
                                                <td>$t[tgl_mulai]</td>
                              <td>$t[tgl_selesai]</td>
                             <td>
                             
                             <a href='index.php?aksi=editagenda&id_a=$t[id_agenda]' title='Edit' class='icon-edit'>edit</a>&nbsp;
                    <a href='index.php?aksi=lihat_agenda&id=$t[id_agenda]' title='Lihat' class='icon-eye-open'>lihat</a>&nbsp;
                    <a href='master/agenda.php?id_a=$t[id_agenda]&act=hapus' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[tema] ?')\" title='Hapus' class='icon-trash '>hapus</a>
                
                          
                    </td>
                                            </tr>
                                           
                                        </tbody>";
    }
                                    echo"</table>
                                </div>
                            </div>
                                        </div>
                                    </div>
                                    <div class='panel panel-default'>
                                        <div class='panel-heading'>
                                            <h4 class='panel-title'>
                                                <a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>Tambah Agenda</a>
                                            </h4>
                                        </div>
                                        <div id='collapseTwo' class='panel-collapse collapse'>
              
          <div class='panel-body'>
                                            
        <form  method='post' action='master/agenda.php?act=inputagenda' >
        <label>Tema</label>
            <input class='form-control' placeholder='Masukan Tema' name='tm' required>
            
            <label>Tanggal Mulai</label>
        
          <input type='date' class='form-control' id='datepicker' name='tglm' required/>
        
            <label>Tanggal Selesai</label>
           <input type='date' class='form-control' id='datepicker1' name='tgls' required/>
            
            <label>Jam</label>
            <input class='form-control timepicker-default' type='time' name='jm' required/>
            
            <label>Tempat</label>
            <input class='form-control' placeholder='Masukan Tema' name='tp' required>
            
            <label>Pengirim</label>
            <input class='form-control' placeholder='Masukan Tema' name='pg' required>
            <label>Isi Agenda</label>
            <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
            <script>CKEDITOR.replace('text-ckeditor');</script>
                <input type='submit' value='Simpan' class='btn btn-primary'  />
                 <input type='reset' value='Ulangi' class='btn btn-default'  />
        </form>
                        
                        </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></div>
    
    ";
    }
    //////////////////////////////////////
    elseif($aksi=='lihat_agenda'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM agenda WHERE id_agenda=$_GET[id]  ");
    $t=mysqli_fetch_array($tebaru);
    echo"<div class='row'>
                    <div class='col-lg-6'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>$t[tema]
                            </div>
                            <div class='panel-body'>
            
    
    ";
    
    echo"<h4>Tema Agenda</h4>
    <p>$t[isi_agenda]</p>
    
    <h4>Lokasi</h4>
    <p>$t[tempat]</p>
    
    <h4>Tanggal Mulai Dan Selesai</h4>
    <p>$t[tgl_mulai] s/d $t[tgl_selesai]</p>
    
    <h4>Tanggal Posting</h4>
    <p>$t[tgl_posting]</p>
    
    <h4>Pengirim</h4>
    <p>$t[pengirim]</p>
    
    
    <a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>
    </div></div></div></div></div>";
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    elseif($aksi=='editagenda'){
    $tebaru=mysqli_query($koneksi," SELECT * FROM agenda WHERE id_agenda=$_GET[id_a] ");
    $t=mysqli_fetch_array($tebaru);
    echo"
    <div class='row'>
                    <div class='col-lg-12'>
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                Edit Kegiatan
                            </div>
                            <div class='panel-body'>
    
    <form id='form1'  method='post' action='master/agenda.php?act=editagenda&id_a=$t[id_agenda]'>
            <label>Tema</label>
            <input type='text' class='form-control'  name='tm' value='$t[tema]'/><br>
            
            <label>Tanggal Mulai</label>
            <input type='text' class='form-control'  size='50' name='tglm' id='pertg1' value='$t[tgl_mulai]' /><br>
            <script type='text/javascript'>
            // BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
            jQuery('#pertg1').datepicker()</script>
           
            <label>Tanggal Selesai</label>
            <input type='text' class='form-control'  size='50' name='tgls' id='pertg2' value='$t[tgl_selesai]' /><br>
            <script type='text/javascript'>
            // BeginWebWidget jQuery_UI_Calendar: jQueryUICalendar1
            jQuery('#pertg2').datepicker()</script>
            
            <label>Jam</label>
            <input type='text' class='form-control' size='50' name='jm' value='$t[jam]'/><br>
            
            <label>Tempat</label>
            <input type='text' class='form-control'  name='tp' value='$t[tempat]'/><br>
            
            <label>Pengirim</label>
            <input type='text' class='form-control'  name='pg' value='$t[pengirim]'/><br>
            
            <label>Isi Agenda Kegiatan</label>
           <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi_agenda]</textarea></br>
            <script>CKEDITOR.replace('text-ckeditor');</script><br />	
                <input type='submit' value='Simpan' class='btn btn-primary'  />
                 <input type='reset' value='Ulangi' class='btn btn-default'  />
        </form>
        </div> </div> </div> </div> </div>  </div> 
    ";
    }
    elseif($aksi=='galeri'){
        echo"<div class='row'>
                        <div class='col-lg-12'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>INFORMASI GALERI
                                </div>
                                <div class='panel-body'>
                    <button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                        Tambah Data
                                    </button>
                                    <div class='table-responsive'>
                                        <table class='table table-striped table-bordered table-hover'>
                            <thead>
                                <tr>
                                    <th width=1% >No</th>
                                    <th width=20% >Jundul</th>
                                    <th width=5% >Foto</th>
                                    <th width=35%>Keterangan</th>
                                    <th width=5%>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>";
        $tebaru=mysqli_query($koneksi," SELECT * FROM galeri ORDER BY id_galeri DESC");
        while ($t=mysqli_fetch_array($tebaru)){
        $no++;
        
                               echo"<tr class='gradeA' >
                                    <td align=center valign='top'>$no</td>
                                    <td valign='top'>$t[judul]</td>
                                    <td  valign='top' align='center'><img alt='galeri'  src='../foto/galleri/$t[gambar]' width=80 height=60 class='box-shadow2'/></td>
                                    <td  valign='top'>$t[keterangan]</td>
                                    <td>
                            
                        <a href='index.php?aksi=editgaleri&id_g=$t[id_galeri]' title='Edit' class='icon-edit'></a>&nbsp;
                        <a href='master/galleri.php?id_g=$t[id_galeri]&act=hapus&gbr=$t[gambar]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[judul] ?')\" title='Hapus' class='icon-trash'>
                        
                                </td></tr>";
                                 }						
                                echo"</tbody>
                        </table></div></div></div></div></div></div></div>";
                        
                        
                        
                        echo"
                        <div class='col-lg-12'>
                                <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                                    <h4 class='modal-title' id='H3'>Input Data Galeri</h4>
                                                </div>
                                                <div class='modal-body'>
                        <form id='form1'  method='post' enctype='multipart/form-data' action='master/galleri.php?act=inputgalleri'>
               <div class='form-grup'>
               <label>Gambar</label>
                <input type='file' size='50'name='gambar'/>
                <label>Judul</label>
                <input type='text' class='form-control'  name='jd'/>
                <label>Isi</label>
                <textarea id='text-ckeditor' class='form-control' name='isi'></textarea></br>
                <script>CKEDITOR.replace('text-ckeditor');</script>	
                    <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                    <button type='submit' class='btn btn-primary'>Save </button>
                                                </div>
                </div>
            </form>
            </div></div></div></div></div> 
                        
                        
                        
                        ";
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////
        
        
        elseif($aksi=='editgaleri'){
        $tebaru=mysqli_query($koneksi," SELECT * FROM galeri WHERE id_galeri=$_GET[id_g] ");
        $t=mysqli_fetch_array($tebaru);
        echo"
        <div class='row'>
                        <div class='col-lg-12'>
                            <div class='panel panel-default'>
                                <div class='panel-heading'>INFORMASI GALERI
                                </div>
                                <div class='panel-body'>
        <form id='form1' method='post' enctype='multipart/form-data' action='master/galleri.php?act=editgalleri&gb=$t[gambar]&id_g=$t[id_galeri]'>
               <div class='form-grup'>
               <img src='../foto/galleri/$t[gambar]' width='215' height='160' class='box-shadow2'/><br />
               <label>Gambar</label>
                <input type='file' size='50'name='gambar'/><br>
                <label>Judul</label>
                <input type='text' class='form-control'  name='jd' value='$t[judul]'/><br>
                <label>Isi</label>
               <textarea id='text-ckeditor' class='form-control' name='isi'>$t[keterangan]</textarea></br>
                <script>CKEDITOR.replace('text-ckeditor');</script>		
                    <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                    <button type='submit' class='btn btn-primary'>Save </button>
                                                </div>
                </div>
            </form>
            </div></div></div></div></div></div>
        ";
        }
elseif($aksi=='editwaktusholat'){
            $tebaru=mysqli_query($koneksi," SELECT * FROM waktusholat WHERE id_sholat='1'");
            $t=mysqli_fetch_array($tebaru);
            echo"
            <div class='row'>
                            <div class='col-lg-12'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>INFORMASI GALERI
                                    </div>
                                    <div class='panel-body'>
            <form id='form1' method='post' enctype='multipart/form-data' action='master/galleri.php?act=editgalleri&gb=$t[gambar]&id_g=$t[id_galeri]'>
                   <div class='form-grup'>
                   <img src='../foto/galleri/$t[gambar]' width='215' height='160' class='box-shadow2'/><br />
                   <label>Gambar</label>
                    <input type='file' size='50'name='gambar'/><br>
                    <label>Judul</label>
                    <input type='text' class='form-control'  name='jd' value='$t[judul]'/><br>
                    <label>Isi</label>
                   <textarea id='text-ckeditor' class='form-control' name='isi'>$t[keterangan]</textarea></br>
                    <script>CKEDITOR.replace('text-ckeditor');</script>		
                        <div class='modal-footer'>
                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                        <button type='submit' class='btn btn-primary'>Save </button>
                                                    </div>
                    </div>
                </form>
                </div></div></div></div></div></div>
            ";
}  
?>