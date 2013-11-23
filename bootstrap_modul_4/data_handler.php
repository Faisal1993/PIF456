<?php 

function init_login(){
$sql = 'SELECT * FROM tabel_percobaan'; 
$res = mysql_query($sql); 
if ($res) { 
  if (mysql_num_rows($res)) { ?>
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				  Lihat Data
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in">
			  <div class="panel-body">
				<table align=center border=1 cellspacing=1 cellpadding=5> 
				<tr> 
				  <th>NO</th> 
				  <th width=150>NIM</th> 
				  <th width=250>Nama</th>
				  <th width=150>Alamat</th> 
				</tr> 
				<?php 
				$i = 1; 
				while ($row = mysql_fetch_row($res)) { ?> 
				  <tr> 
					<td> 
					  <?php echo $i;?> 
					</td> 
					<td> 
					  <?php echo $row[0];?> 
					</td> 
					<td> 
					  <?php echo $row[1];?> 
					</td> 
					<td> 
					  <?php echo $row[2];?> 
					</td> 
				  </tr> 
				  <?php 
				  $i++; 
				} 
				?> 
				</table>  
			</div>
		  </div>
		</div>
			
			
  <?php 
  } else { 
    echo 'Data Tidak Ditemukan'; 
  } 
}
//Simulasi data account nama dan password
$nama = 'faisal';
$pass = 'faisal';

if (isset($_POST['nama']) && isset ($_POST['pass'])){
$n = trim($_POST['nama']);
$p = trim($_POST['pass']);

if(($n===$nama) && ($p ===$pass)){

if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){
$_SESSION['nlogin'] = $n;
$_SESSION['time'] = time();
} 
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
} 
else {
return false;
}
}

}

function validate(){
if(!isset($_SESSION['nlogin']) || !isset($_SESSION['time'])){?>

<!-- Button trigger modal -->
<br><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Log In
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel" align=center>Log In</h4>
      </div>
      <div class="modal-body" align=center>
        
			<div class="inner">
			<form action="" method="post">
			<table border=0 cellpadding=5>
			<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" /></td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type="password" name="pass" /></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="MASUK" class="btn btn-primary"/>
			<button type="button" class="btn btn-default" data-dismiss="modal">KEMBALI</button>
			</td>
			</tr>
			</table>
			</form>
			</div>

      </div>
      <div class="modal-footer">
        
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
exit;
}
if(isset($_GET['m']) && $_GET['m'] == 'logout'){
//hapus session
if(isset($_SESSION['nlogin'])){
unset($_SESSION['nlogin']);
}
if(isset($_SESSION['time'])){
unset($_SESSION['time']);
}
//redireksi halaman
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
 defined('_VALID') or die ('not allowed');
//Pemanggilan session
session_start();
/** 
 * Fungsi utama untuk menangani pengolahan data 
 * @param string root parameter menu 
 */ 
function data_handler($root) { 
if (isset($_GET['act']) && $_GET['act'] == 'add') { 
data_editor($root); 
return; 
} 
 
$sql = 'SELECT COUNT(*) AS total FROM ' . COBA; 
$res = mysql_query($sql); 
 
// Jika data di tabel ada 
if (mysql_num_rows($res)) { 
 
if (isset($_GET['act']) && $_GET['act'] != '') { 
switch($_GET['act']) { 
case 'edit': 
if (isset($_GET['id']) && ctype_digit($_GET['id'])) { 
data_editor($root, $_GET['id']); 
} else { 
show_admin_data($root); 
} 
break; 

case 'view': 
if (isset($_GET['id']) && ctype_digit($_GET['id'])) { 
data_detail($root, $_GET['id'], 1); 
} else { 
show_admin_data($root); 
} 
break; 
 
case 'del': 
if (isset($_GET['id']) && ctype_digit($_GET['id'])) { 
// Key untuk penghapusan data
$id = $_GET['id']; 
 $sql = 'DELETE FROM ' . COBA . ' WHERE nim=' . $id;
// Lengkapi pernyataan SQL hapus data 
			
$res = mysql_query($sql); 
if ($res) { ?> 
 
<script type="text/javascript"> document.location.href="<?php echo $root;?>"; </script>
 
<?php 
} else { 
echo 'Gagal menghapus data'; 
} 
} else { 
show_admin_data($root); 
}
break; 
default: 
show_admin_data($root); 
} 
} else { 
show_admin_data($root); 
} 
 
@mysql_close($res); 
} else { 
echo 'Data Tidak Ditemukan'; 
} 
 
} 
/** 
 * Fungsi untuk menampilkan menu administrasi 
 * @param string root parameter menu 
 */ 
function show_admin_data($root) { ?><br> 
<h1 align=center class="heading">ADMINISTRASI DATA</h1> 
<?php 
$sql = 'SELECT nim, nama, alamat FROM ' . COBA; 
$res = mysql_query($sql); 
 
if ($res) { 
$num = mysql_num_rows($res); 
if ($num) { 
?> 
<div class="tabel"> 
<div align=center style="padding:5px;"> 
<a href="<?php echo $root;?>&amp;act=add"><input type="submit" value="Tambah Data" class="btn btn-primary btn-lg"/></a>
</div> 
<table align=center border=1 width=700 cellpadding=4 cellspacing=0> 
<tr> 
<th>NO</th> 
<th width=120>NIM</th> 
<th width=250>NAMA</th> 
<th width=200>ALAMAT</th> 
<th width=200>MENU</th> 
</tr> 
<?php 
$i = 1; 
while ($row = mysql_fetch_row($res)) { 
$bg = (($i % 2) != 0) ? '' : 'even'; 
$id = $row[0]; ?> 
<tr class="<?php echo $bg;?>"> 
<td width="2%"><?php echo $i;?></td> 
<td> 
<a href="<?php echo $root;?>&amp;act=view&amp;id=<?php echo $id;?>"title="Lihat Data"><?php echo $id;?></a> 
</td> 
<td><?php echo $row[1];?></td> 
<td><?php echo $row[2]?></td> 
<td align="center"> 
<a href="<?php echo $root;?>&amp;act=edit&amp;id=<?php echo $id;?>"><input type="submit" value="Edit" class="btn btn-success"/></a>
<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?php echo $root;?>&amp;act=del&amp;id=<?php echo $id;?>"><input type="submit" value="Hapus" class="btn btn-danger"></a>
</td> 
</tr> 
<?php 
$i++; 
} 
?> 
</table> 
</div> 
<?php 
} else { 
echo 'Belum ada data,
isi <a href="'.$root.'&amp;act=add">di sini</a>'; 
} 
@mysql_close($res); 
} 
} 
/** 
 * Fungsi untuk menampilkan detail data COBA 
 * @param string root parameter menu
 * @param integer id nim COBA 
 */ 
function data_detail($root, $id) {
	$view=true;
$sql = 'SELECT nim, nama, alamat FROM ' . COBA . ' WHERE nim=' . $id; 
$res = mysql_query($sql); 
if ($res) { 
if (mysql_num_rows($res)) { ?> 
<div align=center class="tabel"> 
<table border=1 width=700 cellpadding=4 cellspacing=0> 
<?php 
$row = mysql_fetch_row($res); ?> 
<br><br>
<p align=center><h2>Detail Data</h2></p> 
<tr> 
<td>NIM</td> 
<td><?php echo $row[0];?></td> 
</tr> 
<tr> 
<td>Nama</td> 
<td><?php echo $row[1];?></td> 
</tr> 
<tr> 
<td>Alamat</td> 
<td><?php echo $row[2];?></td> 
</tr> 
</table> 
</div> 
<?php 
} else { 
echo 'Data Tidak Ditemukan'; 
} 
@mysql_close($res); 
} 
} 

/** 
 * Fungsi untuk menghasilkan form penambahan/pengubahan 
 * @param string root parameter menu 
 * @param integer id nim COBA 
 */ 
function data_editor($root, $id = 0) { 
$view = true; 
if (isset($_POST['nim']) && $_POST['nim'] ) { 
// Jika tidak disertai id, berarti insert baru
		$nim= $_POST['nim']; 
		$nama = $_POST['nama']; 
		$alamat = $_POST['alamat'];
if (!$id) { 
		$sql = "INSERT INTO tabel_percobaan VALUES ('" .$nim. "', '" .$nama. "', '" .$alamat. "' )";
// Lengkapi Pernyataan PHP SQL untuk INSERT data 
		
$res = mysql_query($sql); 
if ($res) { ?> 
<script type="text/javascript"> document.location.href="<?php echo $root;?>"; </script> 
<?php 
} else { 
echo 'Gagal menambah data'; 
} 
} else { 
		//update
		$sql = "UPDATE tabel_percobaan SET nim='".$nim."' ,nama='".$nama."' ,alamat='".$alamat."' where nim=".$id;
		$res = mysql_query($sql); 
if ($res) { ?> 
 <script type="text/javascript"> document.location.href="<?php echo $root;?>"; </script>
<?php 
} else { 
echo 'Gagal memodifikasi'; 
} 
} 
} 
 
// Menyiapkan data untuk updating 
if ($view) { 
if ($id) { 
$sql = 'SELECT nim, nama, alamat FROM ' . COBA .
 ' WHERE nim=' . $id; 
$res = mysql_query($sql); 
if ($res) { 
if (mysql_num_rows($res)) { 
$row = mysql_fetch_row($res); 
$nim = $row[0]; 
$nama= $row[1]; 
$alamat= $row[2]; 
} else { 
show_admin_data(); 
return; 
} 
} 
} else { 
$nim = @$_POST['nim']; 
$nama = @$_POST['nama'];
	$alamat = @$_POST['alamat']; 
} 
?> 
<h2 align=center> <?php echo $id ? 'Edit' : 'Tambah';?> Data</h2> 
<form action="" method="post"> 
<table align=center border=1 cellpadding=4 cellspacing=0> 
<tr> 
<td width=100>NIM*</td> 
<td> <input type="text" name="nim" size=10
 value="<?php echo $nim;?>" /> </td> 
</tr> 
<tr> 
<td>Nama</td> 
<td> <input type="text" name="nama" size=40
 value="<?php echo $nama;?>" /> </td> 
</tr> 
<tr> 
<td>Alamat</td> 
<td> <input type="text" name="alamat" size=60
 value="<?php echo $alamat;?>" /> </td> 
</tr> 
<tr> 
<td> </td> 
<td><input type="submit" value="Submit" class="btn btn-success"/> 
<input type="button" value="Cancel" class="btn btn-danger" onclick="history.go(-1)" /></td> 
</tr> 
</table> 
</form> <br /> 
<p align=center>Ket: * Harus diisi</p> 
<?php 
} 
return false; 
} 
