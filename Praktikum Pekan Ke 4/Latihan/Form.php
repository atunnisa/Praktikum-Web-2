<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NilaiMahasiswa</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">WEB02</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Review PHP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PHP5 OOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Submit</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <h2 style="text-align: center;">FORM NILAI SISWA</h2>
    <hr/>
</div>

<form method="POST" action="Form.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Pilihan Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Pemograman WEB2">Pemograman WEB 2</option>
        <option value="Basis Data">Basis Data</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

<?php

require_once 'Class_Nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungnilai();
    $hasil1 = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);

    echo "NIM : ".$ns->nim;
    echo "<br>";
    echo "MATKUL : ".$ns->matkul;
    echo "<br>";
    echo "NILAI : ".$ns->nilai;
    echo "<br>";
    echo "STATUS : ".$hasil1;
    echo "<br>";
    echo "GRADE : ".$hasil2;
}

?>


</body>
</html>