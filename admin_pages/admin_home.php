<div class="content">
  <div class="content_kiri">
    <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr><td><h4>Judul</h4></td>
    </tr>
    <tr><td><textarea rows="1" cols="60" style="resize:none;" name="i_judul_utama" placeholder="Judul Berita"></textarea></td>
    </tr>
    <tr><td><h4>Content</h4></td>
    </tr>
    <tr><td>
        <textarea class="ckeditor" id="ckeditor" name="i_content_utama"></textarea>
        <!-- <textarea rows="18" cols="60" name="i_content_utama"></textarea></td> -->
      </td>
    </tr>
    <tr><td><input type="text" name="i_nama_gambar" placeholder="masukkan nama"/>
        <input type="file" name="i_gambar"/></td>
    </tr>
    <tr>
    <td><input type="submit" name="i_simpan" value="simpan" /></td>
    </tr>
    </table>
    </form>

      <?php
        if(isset($_POST['i_simpan'])){
          $asal=$_FILES['i_gambar']['name'];
          $tmp=$_FILES['i_gambar']['tmp_name'];
          $tampung="./upload/";
          move_uploaded_file($tmp, $tampung.$asal);

          $query=mysqli_query($link,"insert into utama values(null, '".$_POST['i_judul_utama']."',
                                                                    '".$_POST['i_content_utama']."',
                                                                    '".$_POST['i_nama_gambar']."',
                                                                    '$asal')
                                    ");
          if($query){
            echo "Berhasil Tersimpan";
          }
          else{
            echo "Gagal Tersimpan";
          }
        }
       ?>


  </div>
</div>
