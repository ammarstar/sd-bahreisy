<div class="content">
  <div class="content_kiri">
    <h2>Kontak kami</h2>

		<form action="" method="get">
		<table><tr>
		<td>nama		<td>:</td></td><td><input placeholder=username size="25" name="k_nama" required /></td>
		</tr>

		<tr>
		<td>Email		<td>:</td></td><td><input placeholder=Email size="25" name="k_email" required/></td>
		</tr>

		<tr>
		<td>Subject		<td>:</td></td><td><input type="text" size="25" name="k_subject" /></td>
		</tr>

		<tr>
		<td>Message		<td>:</td></td><td><textarea rows="8" cols="30" style="resize:none;" name="k_message"></textarea></td>
		</tr>

		<tr>
		<td><input type="submit" value="Simpan" name="savekontak" /></td>
		</tr>
		</table>

		</form>
  </div>

  <?php
    if(isset($_GET['savekontak'])){
      $query=mysqli_query($link, 'insert into kontak values (null,
                                    "'.$_GET['k_nama'].'",
                                    "'.$_GET['k_email'].'",
                                    "'.$_GET['k_subject'].'",
                                    "'.$_GET['k_message'].'")
                                  ');
    if($query){
      echo "berhasil tersimpan";
    }else{
      echo "gagal tersimpan";
    }
    
    }
   ?>
