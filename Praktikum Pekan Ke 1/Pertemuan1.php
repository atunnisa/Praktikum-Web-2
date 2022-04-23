<?php
    // $mahasiswa = ['Aul', 'Afifah', 'Atun'];

    // echo $mahasiswa[0];
    // echo "<br />";
    // echo $mahasiswa[1];
    // echo "<br />";
    // echo $mahasiswa[2];
    // echo "<br />";
    // var_dump($mahasiswa);
    // perulangan

    // foreach ($mahasiswa as $mhs){
    //    echo "<h1 style='color: green'>$mhs</h1>";
    //   echo "<br />";
    // }

    $mahasiswa = [
        ["nama" => "Aulia", "nim" => "0110221244", "uts" => 100, "uas" => 100],
        ["nama" => "Afifah", "nim" => "0110221244", "uts" => 90, "uas" => 90],
    ];

    foreach($mahasiswa as $mhs) {
        echo $mhs["nama"];
    }
?>