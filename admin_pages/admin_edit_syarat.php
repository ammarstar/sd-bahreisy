<?php
$id=$_GET['edit_syarat'];
$query=mysqli_query($link, "SELECT * FROM tb_syarat WHERE id='$id' ");
$outputan=mysqli_fetch_assoc($query);
 ?>
<div class="content">
  <div class="content_kiri">
    <a href="?rubah_profil"> <h4>sebelumnya</h4></a>
    <h5>Halaman Edit Data</h5>

    <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr><td><h4>Judul</h4></td>
    </tr>
    <tr><td><textarea rows="1" cols="60" style="resize:none;" name="judul"><?php echo $outputan['judul'] ?> </textarea></td>
    </tr>
    <tr><td><h4>Content</h4></td>
    </tr>
    <tr><td>
        <textarea class="ckeditor" id="ckeditor" name="content"><?php echo $outputan['isi'] ?></textarea>
        <!-- <textarea rows="18" cols="60" name="i_content_utama"></textarea></td> -->
      </td>
    </tr>
    <tr>
    <td><input type="submit" name="simpan" value="simpan" /></td>
    </tr>
    </table>
    </form>

    <?php
    if(isset($_POST['simpan'])){
      $update=mysqli_query($link, "UPDATE tb_syarat SET judul='".$_POST['judul']."',
                                                            isi='".$_POST['content']."' where id='$id'");

      if($update){
        echo "berhasil update";
        header("location:?rubah_siswa_baru");
      }
      else{
        echo "gagal update";
      }
    }
     ?>
  </div>
</div>
