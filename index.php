<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>UAS WEB 7</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div align="center">
  <h3>Simpan Data SQL Server dengan PHP<br>jancukers.com</h3>
    <?php
      date_default_timezone_set('Asia/Jakarta');
      echo date('d F Y H:i:s'); ?>
    <p><a href="tambah.php">Tambah Data</a></p>
  <table border="1" width="700px">
   <thead>
    <tr>
     <th>No</th>
     <th>NIM</th>
     <th>Nama</th>
     <th>Alamat</th>
     <th>TTL</th>
     <th>Status</th>
     <th>Aksi</th>
    </tr>
   </thead>
   <tbody>
    <?php
     $sql="SELECT * FROM tugas_data";
     $no=1;
     //eksekusi query menampilkan data dari tabel data_mhs
     $query=mysqli_query($conn, $sql);
     //mengembalikan data row menjadi array dan looping data menggunakan while
     while ($data=mysqli_fetch_array($query)) {
    ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['nim_data']; ?></td>
      <td><?php echo $data['nama_data']; ?></td>
      <td><?php echo $data['alamat_data']; ?></td>
      <td>
        <?php $source = $data['ttl_data'];
        				$date = new DateTime($source);
        				echo $date->format('d - m - Y');?>
      <td>
      <td><?php echo $data['status_data']; ?></td>
        <a href="edit.php?id=<?php echo $data['id_data']; ?>" style="float: left;">Edit</a> 
        <a href="delete.php?id=<?php echo $data['id_data']; ?>" style="float: right;" onClick="javascript: return confirm('Apakah anda yakin?');">Hapus</a>
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
  </div>

</body>
</html>
