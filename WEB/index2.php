<h2>List Penyewa</h2>
<table border="1">
    <tr><th>No.</th><th>Nama</th><th>Alamat</th><th>mobil</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th>Telp</th></tr>
    <?php
    include 'dua.php';
    $penyewa = mysqli_query($conn, "SELECT * from input_tabel");
    $no=1;
    foreach ($penyewa as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['nama']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['mobil']."</td>
			<td>".$row['pinjam']."</td>
			<td>".$row['kembali']."</td>
            <td>".$row['telp']."</td>
              </tr>";
        $no++;
    }
    ?>
</table>