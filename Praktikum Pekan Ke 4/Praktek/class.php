<?php

// cara membuat class
class Mahasiswa{
    //cara membuat property (variabel)
    public $nama;
    public $alamat;
    public $jurusan;

    // cara membuat method (fungsi)
    function Ceknama(){
        echo "Nama saya adalah : " . $this->nama;

    }
    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}

// cara membuat object
$mahasiswa1 = new Mahasiswa("Aulia", "Bogor", "Informatika");
$mahasiswa2 = new Mahasiswa("Alim", "Jakarta", "Bisnis");


// cara mengakses property
echo $mahasiswa1->nama;
echo "<br>";

// akses data mahasiswa2
echo $mahasiswa2->nama;

// cara mengakses method
//$mahasiswa1->Ceknama();


?>