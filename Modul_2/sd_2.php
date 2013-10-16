<html>
<head><title>Studi Kasus 2</title></head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Pilih Hobby Anda :
<input type="checkbox" name="hobi1" value="Football" checked/>Football <br/>
<input type="checkbox" name="hobi2" value="Swimming"/>Swimming <br/>
<input type="checkbox" name="hobi3" value="Reading"/>Reading <br/>
<input type="checkbox" name="hobi4" value="Singing"/>Singing <br/>
<input type="checkbox" name="hobi5" value="Sleeping"/>Sleeping <br/>
<input type="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['hobi1'])) {
echo $_POST['hobi1'];
echo "<br/>";
}
if(isset($_POST['hobi2'])) {
echo $_POST['hobi2'];
echo "<br/>";
}
if(isset($_POST['hobi3'])) {
echo $_POST['hobi3'];
echo "<br/>";
}
if(isset($_POST['hobi4'])) {
echo $_POST['hobi4'];
echo "<br/>";
}
if(isset($_POST['hobi5'])) {
echo $_POST['hobi5'];
echo "<br/>";
}
?>
</body>
</html>