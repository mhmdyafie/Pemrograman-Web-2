<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];

echo "Ini adalah hasil data buah dalam array";

// Cetak buah dengan index ke 2
echo "<br>Ini buah index ke 2 - $ar_buah[2]";
// Cetak total buah
echo '<br>Total buah adalah ' .count($ar_buah);

//cetak seluruh data array buah
echo "<ol>";
foreach ($ar_buah as $buah ) {
    echo "<li>$buah</li>";
}
echo "</ol>";

// tambahkan buah
$ar_buah[] = "Durian";

// Hapus buah
unset($ar_buah[1]);
// ubah index kedua menjadi manggis
$ar_buah[2] = "manggis";

echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
?>