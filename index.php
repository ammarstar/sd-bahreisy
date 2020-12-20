<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // session_start();
    include "section/header.php";
    include "section/menu.php";
    include "koneksi/konek.php";
    ?>

    <?php
    if(isset($_GET['kontak'])){
      include("pages/kontak.php");
    }
    else if(isset($_GET['profil'])){
      include("pages/profil.php");
    }
    else if(isset($_GET['persyaratan'])){
      include("pages/persyaratan.php");
    }
    else if(isset($_GET['galeri'])){
      include("pages/galeri.php");
    }
    else if(isset($_GET['bonbin'])){
      include("pages/galeri/bonbin.php");
    }
    else if(isset($_GET['dhuha'])){
      include("pages/galeri/dhuha.php");
    }
    else if(isset($_GET['savekontak'])){
      include("pages/kontak.php");
    }
    elseif (isset($_GET['buat_baru'])) {
      include("pages/daftar_baru.php");
    }
    else{
      include("pages/home.php");
    }
    ?>
    <?php
    include "section/kanan.php";
    include "section/footer.php";
    include "section/copyright.php";
    ?>
  </body>
</html>
