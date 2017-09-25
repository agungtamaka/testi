<?php
echo "Gaji Pak Joko<br>";
echo "Bulan September<br>";

$lk = 18;
$lmb = 16.5;
echo "<br><br>";
echo "Pak Joko sudah bekerja selama ".$lk." tahun.<br>";
echo "Pak Joko sudah lembur selama ".$lmb." jam.<br>";

if($lk >= 50)
{
	$gaji = 2000000 + 400000 + 800000 + 500000 + ($lmb * 30000);
}
if($lk >= 30 && $lk <= 49)
{
	$gaji = 2000000 + 400000 + 800000 + 400000 + ($lmb * 30000);
}
if($lk >= 10 && $lk <= 29)
{
	$gaji = 2000000 + 400000 + 800000 + 300000 + ($lmb * 30000);
}
if($lk <= 9)
{
	$gaji = 2000000 + 400000 + 800000 + 200000 + ($lmb * 30000);
}

echo "Gaji yang diterima Pak Joko sebesar Rp ".$gaji;
?>