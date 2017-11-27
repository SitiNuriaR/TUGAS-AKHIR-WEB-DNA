<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}

</style>
</head>
<body>  

<?php
$namaErr = $alamatErr = $mobilErr = $pinjamErr = $kembaliErr = $telpErr="";
$nama = $alamat =  $mobil = $pinjam = $kembali =$telp= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = "Nama harus diisi";
  } else {
    $nama = test_input($_POST["nama"]);
  }
  
  if (empty($_POST["alamat"])) {
    $alamatErr = "Alamat harus diisi ";
  } else {
    $alamat = test_input($_POST["alamat"]);
  }
   
   if (empty($_POST["mobil"])) {
    $mobilErr = "Mobil harus diisi ";
  } else {
    $mobil = test_input($_POST["mobil"]);
  }
   if (empty($_POST["pinjam"])) {
    $pinjamErr = "Tanggal pinjam harus diisi ";
  } else {
    $pinjam = test_input($_POST["pinjam"]);
  } 
  if (empty($_POST["kembali"])) {
    $kembaliErr = "Tanggal kembali harus diisi ";
  } else {
    $kembali = test_input($_POST["kembali"]);
  }
  if (empty($_POST["telp"])) {
    $telpErr = "No telp harus diisi ";
  } else {
    $telp = test_input($_POST["telp"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Book a Car</h2>
<form method="post" action="tiga.php">  
  Nama lengkap : <input type="text" name="nama" value="<?php echo $nama;?>">
  <span class="error"><?php echo $namaErr;?></span>
  <br><br>
  Alamat Rumah Lengkap: <input type="text" name="alamat" value="<?php echo $alamat;?>">
  <span class="error"><?php echo $alamatErr;?></span>
  <br><br>
  No telp : <input type="text" name="telp" value="<?php echo $telp;?>">
  <span class="error"><?php echo $telpErr;?></span>
  <br><br>
  Id mobil yang disewa : <input type="text" name="mobil" value="<?php echo $mobil;?>">
  <span class="error"><?php echo $mobilErr;?></span>
  <br><br>
  Tanggal pinjam : <input type="text" name="pinjam" value="<?php echo $pinjam;?>">
  <span class="error"><?php echo $pinjamErr;?></span>
  <br><br>
  Tanggal kembali :<input type="text" name="kembali" value="<?php echo $kembali;?>">
  <span class="error"><?php echo $kembaliErr;?></span>
  <br><br>

    <input type="submit" value="SUBMIT"></input>
</form> 

</body>
</html>