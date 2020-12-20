<?php
$id=$_GET['edit_home'];
$query=mysqli_query($link, "SELECT * FROM utama WHERE id='$id' ");
$outputan=mysqli_fetch_assoc($query);
 ?>
<div class="content">
  <div class="content_kiri">
    <a href="?rubah_home"> <h4>sebelumnya</h4></a>
    <h5>Halaman Edit Data</h5>

    <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr><td><h4>Judul</h4></td>
    </tr>
    <tr><td><textarea rows="1" cols="60" style="resize:none;" name="i_judul_utama"><?php echo $outputan['judul'] ?> </textarea></td>
    </tr>
    <tr><td><h4>Content</h4></td>
    </tr>
    <tr><td>
        <textarea class="ckeditor" id="ckeditor" name="i_content_utama"><?php echo $outputan['isi'] ?></textarea>
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
      $update=mysqli_query($link, "UPDATE utama SET judul='".$_POST['i_judul_utama']."',
                                                            isi='".$_POST['i_content_utama']."' where id='$id'");

      if($update){
        echo "berhasil update";
        header("location:?rubah_home");
      }
      else{
        echo "gagal update";
      }
    }
     ?>
  </div>
</div>
