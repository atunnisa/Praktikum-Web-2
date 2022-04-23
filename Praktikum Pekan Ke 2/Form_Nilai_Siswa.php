<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">      
    <title>Form Nilai Siswa</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Form Nilai Siswa</a>
  </div>
</nav>

<form action="Form_Nilai_Siswa.php" method="POST">
  <div class="form-group row">
    <label for="Nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Nama" name="Nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="Matkul" name="Matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="BD">Basis Data</option>
        <option value="PW">Pemograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_UTS" class="col-4 col-form-label">NILAI UTS</label> 
    <div class="col-8">
      <input id="Nilai_UTS" name="Nilai_UTS" placeholder="Nilai UTS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_UAS" class="col-4 col-form-label">NILAI UAS</label> 
    <div class="col-8">
      <input id="Nilai_UAS" name="Nilai_UAS" placeholder="Nilai UAS" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nilai_Tugas" class="col-4 col-form-label">Nilai Tugas/ Praktikum</label> 
    <div class="col-8">
      <input id="Nilai_Tugas" name="Nilai_Tugas" placeholder="Nilai Tugas" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="Proses" type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>


<?php

$Proses = $_POST["Proses"];
$Nama = $_POST["Nama"];
$Matkul = $_POST["Matkul"];
$Nilai_UTS = $_POST["Nilai_UTS"];
$Nilai_UAS = $_POST["Nilai_UAS"];
$Nilai_Tugas = $_POST["Nilai_Tugas"];
$nilai_akhiruts = (int)$Nilai_UTS;
$nilai_akhiruas = (int)$Nilai_UAS;
$nilai_akhirtugas = (int)$Nilai_Tugas;
$nilai_akhirsemester = ($nilai_akhiruts + $nilai_akhiruas + $nilai_akhirtugas) / 3;

if($nilai_akhirsemester >=80 && $nilai_akhirsemester <=100){
  $hasil = "A";
  $pencapaian = "Lulus";
  $nilai = "Sangat Baik";
}elseif($nilai_akhirsemester >=75 && $nilai_akhirsemester <=81){
  $hasil = "B";
  $pencapaian = "Lulus";
  $nilai = "Baik";
}elseif($nilai_akhirsemester >=74 && $nilai_akhirsemester <=60){
  $hasil = "C";
  $pencapaian = "Lulus";
  $nilai = "Cukup";
}elseif($nilai_akhirsemester >=45 && $nilai_akhirsemester <=59){
  $hasil = "D";
  $pencapaian = "Tidak Lulus";
  $nilai = "Kurang";
}else{
  $hasil = "E";
  $pencapaian = "Tidak Lulus";
  $nilai = "Sangat Kurang";
}

echo 'Nama : '.$Nama;
echo '<br/>Matkul : '.$Matkul;
echo '<br/>Nilai UTS : '.$Nilai_UTS;
echo '<br/>Nilai UAS : '.$Nilai_UAS;
echo '<br/>Nilai Tugas : '.$Nilai_Tugas;
echo '<br/>Hasil : '.$hasil;
echo '<br/>Pencapaian : '.$pencapaian;
echo '<br/>Nilai : '.$nilai;
?>

</body>
</html>