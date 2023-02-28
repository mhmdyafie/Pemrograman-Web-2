<?php
// definisikan variable konstanta
define ('PHI', 3.14);

// definisikan nilai jari2
$jari = 8;
// definisikan nilai luas

$luas = PHI * $jari * $jari;

// definisikan nilai keliling
$kll = 2 * PHI * $jari;

// soal 1 hitung luas lingkaran dengan jari2
echo 'Luas Lingkaran dengan jari jari ' .$jari. ' = ' .$luas;
// soal 2 hitung kelilingnya
echo '<br/> keliling nya : ' .$kll;
?>