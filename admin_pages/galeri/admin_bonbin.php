<div class="content">
  <div class="content_kiri">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="bonbin_judul" />
    <br>
    <input type="file" name="bonbin_files" value="pilih file" />
    <br>
    <input type= "submit" name="bonbin_simpan" value="simpan" />

  </form>

  <?php
  if(isset($_POST['bonbin_simpan'])){
    $asal=$_FILES['bonbin_files']['name'];
    $tmps=$_FILES['bonbin_files']['tmp_name'];
    $tampung="././upload/";
    move_uploaded_file($tmps, $tampung.$asal);

    $query=mysqli_query($link, "INSERT into tb_bonbin values(null,'".$_POST['bonbin_judul']."',
                                                                  '$asal')
                                ");
    if($query){
      echo "berhasi tersimpan";
    }
    else{
      echo "gagal tersimpan";
    }
  }
   ?>
  </div>
  </div>
