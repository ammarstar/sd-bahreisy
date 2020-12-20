<div class="content">
  <div class="content_kiri">

    <?php
    $query=mysqli_query($link, "SELECT * FROM tb_profil order by id asc");
    while ($outputan=mysqli_fetch_assoc($query)) {
      ?>
      <div class="judul"> <?php echo $outputan['judul']; ?>             </div>
      <div class="isi">   <?php echo $outputan['isi'];  ?>   </div>

      <?php
      if(!$outputan['gambar']){

      }
      else{
      ?>
      <img src="upload/<?php echo $outputan['gambar']; ?>"/>
      <?php
      }
    }
     ?>
  </div>
