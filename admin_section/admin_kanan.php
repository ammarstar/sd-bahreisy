<?php
    // if(!isset($_SESSION))
    // {
    //     session_start();
		// include "koneksi/konek.php";
    // }
?>

<div class="content_kanan">
  <div class="kanan_pencarian">
    <div class="kanan_pencarian_atas">
      >>pencarian
    </div>

    <div class="kanan_pencarian_bawah">
      <input type="text" name="search_kata" placeholder="search"/>
      <input type="button" name="search_simpan" value="cari"/>
    </div>

  </div>
  <div class="kanan_login">
    <div class="kanan_login_atas">
      >>login member
    </div>
    <div class="kanan_login_bawah">

      <form class="" action="" method="post">
      <table>
      <tr>
        <td>username</td>
        <td><input type="text" name="login_nama"/></td>
      </tr>
      <tr>
        <td>password</td>
        <td>
        <input type="text" name="login_password"/></td>
      </tr>
      </table>
      <input type="submit" name="login_masuk" value="login"/>
      <input type="submit" name="login_submit" value="submit"/>
    </form>

    </div>
  </div>

<?php
if(isset($_POST['login_masuk'])){
  $nama=$_POST['login_nama'];
  $pass=$_POST['login_password'];
  // setelah "where" username dan password dari nama row pada database
  $data_user=mysqli_query($link,"SELECT *FROM multiuser where username='$nama' AND password='$pass'");
  $r=mysqli_fetch_array($data_user);
  $username=$r['username'];
  $password=$r['password'];
  $level=$r['level'];
  if($nama=="$username" && $pass=="$password"){
    // $_SESSION['level']=$level;
    header('location:admin_index.php');

  }
  else{
    echo "gagal terhubung";
  }
}

?>

  <div class="kanan_galeri">
    <div class="kanan_galeri_atas">
        >>Galeri Foto Terbaru
    </div>
    <div class="kanan_galeri_bawah">
      <img src="banner dan ikon/halaman depan.jpg" alt="depan sekolah">
    </div>
  </div>
  <div class="kanan_banner">
    <div class="kanan_banner_atas">
      >>Banner
    </div>
    <div class="kanan_banner_bawah">
      <img src="banner dan ikon/2.png" alt="banner">
      <img src="banner dan ikon/3.jpg" alt="banner">
    </div>
  </div>
</div>

</div>
