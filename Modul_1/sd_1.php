<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Greeting</title>
</head>
<body>

<center>

<h1>
<?php
function greeting()
{
$date = date ("G : i A");
if ($date>=0 and $date<10) {
echo "Selamat Pagi";
} else if ($date>=10 and $date<15) {
echo "Selamat Siang";
} else if ($date>=15 and $date<19) {
echo "Selamat Sore";
} else if ($date>=19 and $date<00) {
echo "Selamat Malam";
}else echo "Waktu salah)";
}
?>
<?php greeting(); ?><br>

</h1>
<h3> Sekarang adalah

<?php

//Array Hari
$array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
$hari = $array_hari[date("N")];
//Format Tanggal
$tanggal = date ("j");
//Array Bulan
$array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
$bulan = $array_bulan[date("n")];
//Format Tahun
$tahun = date("Y");
//Menampilkan hari dan tanggal
echo "hari $hari, tanggal $tanggal $bulan $tahun";
?>
<br>

Waktu menunjukkan pukul
<?php
//penulisan waktu
$date = date ("G : i A");
echo "$date WIB";
?>

</h3>
</body>

</html>