<?php
    // Variable user
    $Nama = 'Aulia';
    $Umur = 18;

    echo 'Nama saya '.$Nama.' Umur saya '.$Umur;
    echo "<br />";
    echo "<h1 sytle='color: green'>Nama saya $Nama, Umur saya $Umur</h1>";
    echo "<br />";

    // Variable sistem
    // Variable built in php
    echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
    echo "<br />";

    // Variable konstan 
    // adalah varible yang tidak bisa diubah nilainya
    define('Minuman','Susu');

    // Define('Minuman','Kopi');
    echo '<h1 sytle="color: blue">'.Minuman.'</h1>';
    echo Minuman;
?>