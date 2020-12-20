<div class="content">
  <div class="content_kiri">
    <?php

    $id=$_GET['delete_profil'];

    $delete=mysqli_query($link, "DELETE FROM tb_profil where id='$id'");
    if($delete){
      header("location:./admin_index.php?rubah_profil");
      echo "berhasil";
      }
      else{
        echo "gagal hapus";
      }

     ?>

  </div>
</div>
