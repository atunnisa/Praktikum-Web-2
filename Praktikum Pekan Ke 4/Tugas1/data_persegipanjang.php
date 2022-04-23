<?php
require_once "class_persegipanjang.php";
$perpan1 = new Persegipanjang(10,5);
$perpan2 = new Persegipanjang(20,15);
echo "Luas Persegi Panjang I ".$perpan1->getLuas();
echo "<br>Luas Persegi Panjang II ".$perpan2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$perpan1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$perpan2->getKeliling();
?>