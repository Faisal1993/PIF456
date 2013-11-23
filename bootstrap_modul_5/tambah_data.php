<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
  <title>Tambah Data</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head> 
 
<body> 
<br><br>
 <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
<table> 
  <tr> 
    <td>NIM</td> 
    <td><input type="text" name="nim" /></td> 
  </tr> 
  <tr> 
    <td>Nama</td> 
    <td><input type="text" name="nama" size=40 /></td> 
  </tr> 
  <tr> 
    <td>Alamat</td> 
    <td><input type="text" name="alamat" size=60 /></td> 
  </tr> 
   <tr> 
    <td></td> 
    <td><input type="submit" value="Simpan" class="btn btn-primary btn-lg"/></td> 
  </tr> 
</table> 
 
</form> 
 
 
<?php 
require_once './koneksi.php'; 
 
// Jika field nim dan nama diisi lalu disubmit 
if (isset($_POST['nim']) && isset($_POST['nama'])) { 
  $nim    = $_POST['nim']; 
  $nama   = $_POST['nama']; 
  $alamat = $_POST['alamat']; 
 
  // Tambahkan data baru ke tabel 
  $sql = "INSERT INTO tabel_percobaan 
          VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "' )"; 
 
  $res = mysql_query($sql); 
  if ($res) { 
    echo 'Data Berhasil Ditambahkan'; 
    mysql_close($res); 
  } else { 
    echo 'Gagal Menambah Data <br />'; 
    echo mysql_error(); 
  } 
 
} 
 
echo '<hr />'; 
// Memanfaatkan script pengambilan data untuk 
// menampilkan hasil 
require_once './seleksi.php'; 
?> 
 
</body> 
</html> 