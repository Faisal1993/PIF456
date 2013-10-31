<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
   <title>Login</title>
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
    }
    else 
    {
    }
}
?>

</div></marquee></h1>
</body>
</html>