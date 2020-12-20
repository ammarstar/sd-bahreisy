<div class="content">
  <div class="content_kiri">

    <form action="" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td><h4>Judul</h4></td>
        </tr>
        <tr>
          <td><textarea cols="60" rows="1" name="judul_profil" style="resize:none;" placeholder="judul profil" ></textarea></td>
        </tr>
        <tr>
          <td><h4>Isi</h4></td>
        </tr>
        <tr>
          <td>
                <textarea class="ckeditor" id="ckeditor" name="i_content"></textarea>
          </td>
        </tr>
        <tr><td><input type="text" name="i_nama_gambar" placeholder="masukkan nama"/>
            <input type="file" name="i_gambar"/></td>
        </tr>
        <tr>
          <td><input type="submit" name="simpan_profil" value="simpan"/></td>
        </tr>
      </table>
    </form>

    <?php
    if(isset($_POST['simpan_profil'])){
      $asal=$_FILES['i_gambar']['name'];
      $tmp=$_FILES['i_gambar']['tmp_name'];
      $tampung="./upload/";
      move_uploaded_file($tmp, $tampung.$asal);
      $query=mysqli_query($link, "insert into tb_profil values(null,
                                                                '".$_POST['judul_profil']."',
                                                                '".$_POST['i_content']."',
                                                                '".$_POST['i_nama_gambar']."',
                                                                '$asal')
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
