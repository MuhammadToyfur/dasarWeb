<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "<p>Operasi Aritmatika:</p>";
echo "Hasil Tambah: $hasilTambah<br>";
echo "Hasil Kurang: $hasilKurang<br>";
echo "Hasil Kali: $hasilKali<br>";
echo "Hasil Bagi: $hasilBagi<br>";
echo "Sisa Bagi: $sisaBagi<br>";
echo "Hasil Pangkat: $pangkat<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<p>Operasi Perbandingan:</p>";
echo "Hasil Sama: " . ($hasilSama ? 1 : 0) . "<br>";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? 1 : 0) . "<br>";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? 1 : 0) . "<br>";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? 1 : 0) . "<br>";
echo "Hasil Lebih Kecil Sama: " . ($hasilLebihKecilSama ? 1 : 0) . "<br>";
echo "Hasil Lebih Besar Sama: " . ($hasilLebihBesarSama ? 1 : 0) . "<br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<p>Operasi Logika:</p>";
echo "Hasil AND: " . ($hasilAnd ? 1 : 0) . "<br>";
echo "Hasil OR: " . ($hasilOr ? 1 : 0) . "<br>";
echo "Hasil NOT A: " . ($hasilNotA ? 1 : 0) . "<br>";
echo "Hasil NOT B: " . ($hasilNotB ? 1 : 0) . "<br>";


$a += $b;
echo "<p>Operator Penugasan:</p>";
echo "Hasil a += b: $a<br>";

$a -= $b;
echo "Hasil a -= b: $a<br>";

$a *= $b;
echo "Hasil a *= b: $a<br>";

$a /= $b;
echo "Hasil a /= b: $a<br>";

$a %= $b;
echo "Hasil a %= b: $a<br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<p>Operator Identitas:</p>";
echo "Hasil Identik: " . ($hasilIdentik ? 1 : 0) . "<br>";
echo "Hasil Tidak Identik: " . ($hasilTidakIdentik ? 1 : 0) . "<br>";
?>
