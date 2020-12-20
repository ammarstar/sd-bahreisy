<div class="content">
  <div class="content_kiri">
    <?php
    $query=mysqli_query($link, "SELECT * FROM tb_syarat");
    while ($outputan=mysqli_fetch_assoc($query)) {
      ?>
      <div class="judul">
        <?php echo $outputan['judul']; ?>
      </div>
      <div class="isi">
        <?php echo $outputan['isi']; ?>
      </div>
      <?php
    }
     ?>
     <div class="pendaftaran">
       <h2>Pendaftaran Online</h2>
       <form action="" method="post">
         Nama Siswa <br>
         <input type="text" name="nama_siswa" value="" placeholder="Hasyim Maskur"><br>
         Tgl/Bln/Thn lahir  <br>
         <input type="text" name="kelahiran" value="" placeholder="2002/08/17"><br>
         Alamat Siswa <br>
         <input type="text" name="alamat_siswa" value=""><br>
         Nama Wali <br>
         <input type="text" name="wali" value=""><br>
         Alamat Wali <br>
         <input type="text" name="alamat_wali" value=""><br>
         No. telepon Wali <br>
         <input type="text" name="telp" value=""><br><br>

         <input type="submit" name="save" value="simpan" style="height:30px;">
       </form>

       <?php
       if(isset($_POST['save'])){
       $query=mysqli_query($link, "insert into tb_daftar values(null,
                                                                    '".$_POST['nama_siswa']."',
                                                                    '".$_POST['kelahiran']."',
                                                                    '".$_POST['alamat_siswa']."',
                                                                    '".$_POST['wali']."',
                                                                    '".$_POST['alamat_wali']."',
                                                                    '".$_POST['telp']."'
                                                                    )");
          if($query){
            echo "berhasil simpan";
          }else{
            echo "gagal simpan";
          }
        }
        ?>
     </div>

  </div>
