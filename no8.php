<?php 
$angka = 5;

$faktorial = 1;

for ($apa = $angka; $apa > 0; $apa--) {
    $faktorial *= $apa;
}
echo "Faktorial dari $angka adalah: $faktorial";
?>