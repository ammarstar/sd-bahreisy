<div class="content">
  <div class="content_kiri">
    <?php

    $id=$_GET['delete_home'];

    $delete=mysqli_query($link, "DELETE FROM utama where id='$id'");
    if($delete){
      header("location:./admin_index.php?rubah_home");
      echo "berhasil";
      }
      else{
        echo "gagal hapus";
      }

     ?>

  </div>
</div>
