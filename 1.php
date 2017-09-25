<?php
$n = 10;
$hitung = 0;
$temp = 1;
for ($i = 1; $i <= $n; $i++)
{
	$hitung = $hitung + $temp;
	$temp++;
}

echo "Hasil = ".$hitung;
?>