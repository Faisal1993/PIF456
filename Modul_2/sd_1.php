<html>
<head><title>Identifikasi Metode</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Jenis Kelamin </br>
<input type="radio" name="jk" value="Pria"/>Laki-Laki </br>
<input type="radio" name="jk" value="Wanita" checked/>Perempuan </br>
<input type="submit" value="ok"/>
</form>
<?php
if(isset($_POST['jk'])) {
echo $_POST['jk'];
}
?>
</body>
</html>