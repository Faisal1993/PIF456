<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Akses dan Manipulasi Data</title> 
  <style type="text/css"> 
	.even { 
		background: #ddd; 
		}
	.inner{
			margin:50px auto;
			padding:10px;
			width:240px;
			border:3px solid #333;
			background:white;
		}
  </style> 
</head> 
 
<body> 
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
<h1><p align="center"><a href="?m=logout"><input type="submit" value="Keluar" /></a></p><h1> 
</body> 
</html> 
