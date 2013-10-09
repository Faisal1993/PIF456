<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<title>Hasil Generate Tabel</title>
 </head> 
 <body> <div align="center">
 <?php $rows = 1; $columns = 1; $cells = 1; ?>
 <?php $rows = (int) $_POST["JumlahRow"]; ?> 
 <?php $columns = (int) $_POST["JumlahColum"]; ?>
 <?php $cells = (int) $_POST["JumlahCell"]; ?> <strong>Kamu Memilih</strong> 
 <?php echo $rows; ?> <em>rows,</em><br /> <strong>Kamu Memilih</strong> 
 <?php echo $columns; ?> <em>columns,</em><br /> <strong>Dan Anda Membutuhkan</strong> 
 <?php echo $cells; ?> <em>cells,</em><br /> <br /> <br /> 
 <?php $width = $columns * 75; 
 echo "<table width=".$width." border=1>"; $rw = 0; $cel = 1; 
 while ($rw < $rows && $cel <= $cells) 
 { 
 echo "<tr>"; $cl = 0; 
 while ($cl < $columns)
 { 
 if ($cel <= $cells) { 
 echo "<td><div align=center>".$cel."</div></td>"; $cel++; } $cl++; } 
 echo "</tr>"; $rw++; } 
 echo "</table>"; ?> </div> 
 </body> 
 </html>