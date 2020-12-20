<div class="content">
  <div class="content_kiri">
    <a href="?admin_rubah"> <h4>sebelumnya</h4></a>
    <table border="1">
      <tr style="text-align:center;">
        <td>no</td>
        <td style="width:150px">Judul</td>
        <td>Isi</td>
        <td>Pilihan</td>
      </tr>
      <?php
      $no=1;
      $query=mysqli_query($link, "SELECT * FROM tb_syarat");
      while ($outputan=mysqli_fetch_assoc($query)) {
      ?>
      <tr>
        <td style="text-align:center;"><?php echo $no++ ?></td>
        <td><?php echo $outputan['judul'] ?></td>
        <td style="width:300px;"><?php echo $outputan['isi']; ?></td>

        <td style="width:100px; text-align:center;" >
              <a href="./admin_index.php?edit_syarat= <?php echo $outputan['id'] ?>">Edit</a> ||
              <a href="./admin_index.php?delete_syarat= <?php echo $outputan['id'] ?>">Hapus</a>
        </td>

      </tr>
      <?php
      }
       ?>

    </table>


  </div>
</div>
