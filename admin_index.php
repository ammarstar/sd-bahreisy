
<?php

include "admin_section/admin_header.php";
include "admin_section/admin_menu1.php";
include "admin_section/admin_kiri.php";
include "koneksi/konek.php";
?>

<?php
if(isset($_GET['admin_profil'])){
  include("admin_pages/admin_profil.php");
}
else if(isset($_GET['admin_galeri'])){
  include("admin_pages/admin_galeri.php");
}
else if(isset($_GET['admin_bonbin'])){
  include("admin_pages/galeri/admin_bonbin.php");
}
else if(isset($_GET['admin_dhuha'])){
  include("admin_pages/galeri/admin_dhuha.php");
}
else if(isset($_GET['admin_rubah'])){
  include("admin_pages/admin_rubah.php");
}
elseif (isset($_GET['rubah_home'])) {
  include 'admin_pages/admin_read_home.php';
}
elseif (isset($_GET['rubah_profil'])) {
  include 'admin_pages/admin_read_profil.php';
}
elseif (isset($_GET['rubah_siswa_baru'])) {
  include 'admin_pages/admin_read_persyaratan.php';
}
elseif (isset($_GET['rubah_galeri'])) {
  // include 'admin_pages/admin_read_home.php';
}

  // awal edit
  elseif (isset($_GET['edit_home'])) {
    include 'admin_pages/admin_edit_home.php';
  }
  elseif (isset($_GET['edit_profil'])) {
    include 'admin_pages/admin_edit_profil.php';
  }
  elseif (isset($_GET['edit_syarat'])) {
    include 'admin_pages/admin_edit_syarat.php';
  }
  // akhir edit

  // awal hapus
  elseif (isset($_GET['delete_home'])) {
    include 'admin_pages/admin_delete_home.php';
  }
  elseif (isset($_GET['delete_profil'])) {
    include 'admin_pages/admin_delete_profil.php';
  }
  // akhir hapus
else if(isset($_GET['admin_hapus'])){
    include("admin_pages/admin_hapus.php");
  }
else if(isset($_GET['admin_logout'])){
  if(!isset($_SESSION)){
  session_start();
  session_destroy();
  header('location:index.php');
  }
}
else{
  include("admin_pages/admin_home.php");
}
 ?>

<?php

// include "admin_section/admin_kanan.php";
include "admin_section/admin_footer.php";
include "admin_section/admin_copyright.php";

 ?>
