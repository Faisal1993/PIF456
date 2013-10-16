<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login</title>
   <script type="text/javascript">
		// Fungsi check digunakan untuk mengecheck kosong atau tidaknya inputtan username dan password
		function check()
		{
			if(form1.user.value == "")
			{
				alert('Masukkan User Name Terlebih Dahulu ');
				document.form1.user.focus();
				return false;
			}
			else if(form1.pass.value=="")
			{    
				alert('Masukkan Password Terlebih Dahulu ');
				document.form1.pass.focus();
				return false;
			}    
		return true;
		}

		// Fungsi Huruf digunakan untuk mengecheck penggunaan selain huruf tidak diperbolehkan
		function Huruf(evt) 
		{
			evt = (evt) ? evt : window.event
			var charCode = (evt.which) ? evt.which : evt.keyCode
			if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
				alert('Masukkan User Name dan Password Harus Berupa Huruf ');
				return false;
			}
			return true;
}
</script>

<style type="text/css">
	#kotak {
		position:absolute;
		width:373px;
		height:330px;
		z-index:1;
		left: 441px;
		top: 62px;
		background-color: gold;
		border: 5px solid Black;
	}
	body {
		background-color: silver;
	}
</style>

</head>

<body onLoad="document.form1.user.focus();">
<form name="form1" action="<?php $_SERVER['PHP_SELF'];?>"  method="post" onsubmit="return check(this)">
<div id="kotak">
  <div id="header">
  <br>
  </div>
  <div>
    <div align="center"><strong><br>Username :</strong>    
    <br>
    <input type="text" name="user" size="35" value="" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    <strong>Password : </strong>  
    <br>
    <input type="password" name="pass" size="35" title="Input berupa harus huruf" autocomplete="off" onKeyPress="return Huruf(event)">
    <br>
    <br>
    </div>
  </div>
  <br>
    <div align="center">
     <input type="submit" name="submit" value="LOGIN" >
    </div>
  </div>
</form>

<marquee><div align="center"><h1>
<?php
if(is_string($_POST['user']) AND ($_POST['pass'])) 
{    
    if (($_POST['user']=='faisal')AND($_POST['pass']=='faisal'))
    {
        echo 'BERHASIL LOGIN DENGAN USERNAME : '.$_POST['user'];
    }
    else 
    {
        echo 'LOGIN GAGAL';
    }
}
?>

</div></marquee></h1>
</body>
</html>