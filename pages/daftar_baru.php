<div class="content">
  <div class="content_kiri">

    <div class="box-form">
      <div class="form-title">
        Halaman Buat Akun
      </div>
      <div class="form-isi">
        <form action="" method="post">
          Nama Lengkap <br>
          <input type="text" name="nama_lengkap" placeholder="nama lengkap"><br/>
          Username <br>
          <input type="text" name="username"  placeholder="username"><br/>
          Password <br>
          <input type="password" name="password" placeholder="password"><br/>
          Kategori <br>
          <select name="kategori">
            <option selected>--pilih jabatan--</option>
            <option>Kepala Sekolah</option>
            <option>Tata Usaha</option>
          </select><br/><br>
          <input type="submit" name="register" value="Register">

        </form>
      </div>
      <?php
      if (isset($_POST['register'])) {
        $query=mysqli_query($link, "insert into multiuser values(null,'".$_POST['nama_lengkap']."',
                                                                    '".$_POST['username']."',
                                                                    '".$_POST['password']."',
                                                                    '".$_POST['kategori']."'
                                                                       )");
            if ($query) {
              echo "berhasil simpan";
            }else{
              echo "gagal simpan";
            }
      }
       ?>
    </div>

  </div>
