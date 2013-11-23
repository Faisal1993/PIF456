<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Tugas Praktikum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
	  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <table border="1" width="500px" align=center>

                <?php
                        require "koneksi.php";
						$self = $_SERVER['PHP_SELF']; 
                        $query1 = "SELECT * FROM tabel_percobaan ORDER BY nim ";
                        $urut = 'asc';
                        $urutbaru = 'asc';
                        if(isset($_GET['orderby'])){
                                $orderby=$_GET['orderby'];
                                $urut=$_GET['urut'];
                                
                                $query1="SELECT * FROM  tabel_percobaan order by $orderby $urut ";
                                if($urut=='asc'){
                                        $urutbaru='desc';                                        
                                }else{
                                        $urutbaru='asc';
                                }
                        }
                ?>
				<h1 align=center>SORTING DENGAN SQL<h1><br>
                <th>
                        <td><a href='tugas_prak.php?orderby=nim&urut=<?=$urutbaru;?>'>NIM</a></td>
                        <td><a href='tugas_prak.php?orderby=nama&urut=<?=$urutbaru;?>'>NAMA</a></td>
                        <td><a href='tugas_prak.php?orderby=alamat&urut=<?=$urutbaru;?>'>ALAMAT</a></td>
                </th>
                                                        
                <?php
                        $result = mysql_query($query1) or die (mysql_error());
                        $no = 1; 
                        while($rows=mysql_fetch_object($result)){
                ?>

                <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $rows -> nim;?></td>
                        <td><?php echo $rows -> nama;?></td>
                        <td><?php echo $rows -> alamat;?></td>
                </tr>
                
                <?php
                        $no++;
                        }
                ?>

        </table>
</body>
</html>