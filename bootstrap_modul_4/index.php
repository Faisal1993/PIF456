<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Akses dan Manipulasi Data</title> 
  <style type="text/css"> 
	.even { 
		background: #ddd; 
		}
  </style> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head> 
 
<body> 
	<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php 
	ini_set('display_errors',1); 
	define('_VALID', 1); 
	// Meng-include file koneksi dan data handler 
	require_once './koneksi.php'; 
	require_once './data_handler.php'; 
	// Konstanta nama tabel 
	define('COBA', 'tabel_percobaan'); 
	//login
	init_login();
	validate();
	// Memanggil fungsi data handler
	data_handler('?m=data'); 
?>
<h1><p align="center"><a href="?m=logout"><input type="submit" value="Keluar" class="btn btn-primary btn-lg" /></a></p><h1> 
</body> 
</html> 
