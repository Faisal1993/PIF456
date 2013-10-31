<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Autentikasi</title>
<style type="text/css">
.inner{
		margin:200px auto;
		padding:20px;
		width:240px;
		border:5px solid #333;
		background:white;
	}
.inner2{
		margin:100px auto;
		padding:10px;
		width:250px;
		border:5px solid #000;
		background:white;
	}
.inner3{
		margin:50px auto;
		padding:1px;
		width:100px;
		border:5px solid #000;
		background:white;
	}
</style>
</head>

<body background="background.png">
	<?php
		ini_set('display_errors', 1);
		define('_VALID', 1);
		//include file eksternal
		require_once('./auth.php');
		init_login();
		validate();
	?>

	<h1 align="center"><marquee behavior="alternate" bgcolor="#cecef6"><strong>HALAMAN ADMINISTRATOR</strong></marquee></h3>
	<p align="center">
	<a href="?m=logout"></a>
	<div class="inner2">
		<h3><ul>
			<li>Belajar C++</li>
			<li>Belajar Java</li>
			<li>Belajar Visual Basic</li>
			<li>Belajar PHP</li>
		</ul></h3>
		</div>
	<div class="inner3"><p align="center"><a href="?m=logout"><strong>KELUAR<strong></a></p><br/></div>
</body>
</html>