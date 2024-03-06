<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf: c";
} elseif ($nilaiNumerik <70){
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni <  $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500kilimoter.";

echo "<br> <br>";

$jumlahLahan = 10;
$tanamanPerlahan = 10;
$buahPerTaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br> <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";

echo "<br> <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}


echo "<br> <br>";

$nilaiSiswa = [
    85, 92, 78, 64, 90,
    75, 88, 79, 70, 96
];

sort($nilaiSiswa);

for ($i = 0; $i < count($nilaiSiswa); $i++) {
    if ($nilaiSiswa[$i] == $nilaiSiswa[0] || $nilaiSiswa[$i] == $nilaiSiswa[count($nilaiSiswa) - 1]) {
        continue;
    }

    echo "Nilai siswa: $nilaiSiswa[$i]<br>";
}

echo "<br> <br>";

$hargaProduk = 120000;
$hargaSetelahDiskon = 0;

if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.2;
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}

echo "<br>Harga yang harus dibayar setelah diskon: Rp $hargaSetelahDiskon <br>";

echo "<br> <br>";

$poin = 600;

$totalSkor = "Total skor pemain adalah: " . $poin;
$hadiahTambahan = $poin > 500 ? "YA" : "TIDAK";

echo $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiahTambahan;


