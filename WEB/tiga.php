    <?php
      include "dua.php";
      $nama = $_REQUEST['nama'];
      $alamat = $_REQUEST['alamat'];
      $telp = $_REQUEST['telp'];
	  $mobil = $_REQUEST['mobil'];
	  $pinjam = $_REQUEST['pinjam'];
	  $kembali = $_REQUEST['kembali'];
      $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
      $mysqli = "INSERT INTO input_tabel SET nama='$nama', alamat='$alamat', telp='$telp', mobil='$mobil', pinjam='$pinjam', kembali='$kembali'";
      $result = mysqli_query($conn, $mysqli);
      echo "Input berhasil.Pesanan Anda telah kami terima.<br> Silahkan Menuju kontor kami untuk melakukan Transaksi lebih lanjut. Terima Kasih :)";
    ?>