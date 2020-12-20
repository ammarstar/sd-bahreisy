<div class="content">
  <div class="content_kiri">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="dhuha_judul" />
    <br>
    <input type="file" name="dhuha_files" value="pilih file" />
    <br>
    <input type= "submit" name="dhuha_simpan" value="simpan" />

  </form>

  <?php
  if(isset($_POST['dhuha_simpan'])){
    $asal=$_FILES['dhuha_files']['name'];
    $tmps=$_FILES['dhuha_files']['tmp_name'];
    $tampung="././upload/";
    move_uploaded_file($tmps, $tampung.$asal);

    $query=mysqli_query($link, "INSERT into tb_dhuha values(null,'".$_POST['dhuha_judul']."',
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
