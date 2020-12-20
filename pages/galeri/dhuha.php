<div class="content">
  <div class="content_kiri">

    <?php
    $query=mysqli_query($link, "SELECT * FROM tb_dhuha order by id desc");
    while ($outputan=mysqli_fetch_assoc($query)) {
      ?>
      <div class="isi_folder"><img src="./upload/<?php  echo $outputan['gambar']; ?>"/> </div>

      <?php
    }
     ?>

  </div>
