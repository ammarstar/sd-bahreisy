<div class="content">
  <div class="content_kiri">

    <form action="" method="post">
      <table>
        <tr>
          <td><h4>Judul</h4></td>
        </tr>
        <tr>
          <td><textarea cols="60" rows="1" name="judul" style="resize:none;" placeholder="judul profil" ></textarea></td>
        </tr>
        <tr>
          <td><h4>Isi</h4></td>
        </tr>
        <tr>
          <td>
                <textarea class="ckeditor" id="ckeditor" name="isi"></textarea>
          </td>
        </tr>
        <!-- <tr><td><input type="text" name="i_nama_gambar" placeholder="masukkan nama"/>
            <input type="file" name="i_gambar"/></td>
        </tr> -->
        <tr>
          <td><input type="submit" name="simpan" value="simpan"/></td>
        </tr>
      </table>
    </form>

    <?php
    if(isset($_POST['simpan'])){
      // $asal=$_FILES['i_gambar']['name'];
      // $tmp=$_FILES['i_gambar']['tmp_name'];
      // $tampung="./upload/";
      // move_uploaded_file($tmp, $tampung.$asal);
      $query=mysqli_query($link, "insert into tb_syarat values(null,
                                                                '".$_POST['judul']."',
                                                                '".$_POST['isi']."')
                                                                ");
      if($query){
        echo "berhasil tersimpan";
      }
      else{
        echo "gagal tersimpan";
      }
    }
     ?>

  </div>
</div>
