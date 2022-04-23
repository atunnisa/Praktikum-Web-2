<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form_Belanja_Online</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Belanja Online</a>
  </div>
</nav>


<form>
  <div class="form-group row">
    <label for="Customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="Customer" name="Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Produk" class="col-4">Pilihan Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="TV" id="TV" type="radio" class="custom-control-input" value="TV"> 
        <label for="TV" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Kulkas" id="Kulkas" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="Kulkas" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Mesin Cuci" id="Mesin Cuci" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="Mesin Cuci" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="Jumlah" name="Jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="Kirim" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>

<div class="float-right">
  <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
    <div class="list-group-item">
      <p class="list-group-item">
      TV : 4.200.000
      </p>
    </div>

    <div class="list-group-item">
      <p class="list-group-item">
        Kulkas : 3.100.000
      </p>
    </div>

    <div class="list-group-item">
      <p class="list-group-item">
        Mesin Cuci : 3.800.000
      </p>
    </div>

      <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga Dapat Berubah Setiap Saat</a>

  </div>
</div>

<?php

$Kirim = $_POST['Kirim'];
$Customer = $_POST['Customer'];
$Produk = $_POST['Produk'];
$Jumlah = $_POST['Jumlah'];

if($Produk=="TV"){
  $HargaTV = 4200000;
  $Total = $HargaTV * $Jumlah;
}elseif($Produk=="Kulkas"){
  $HargaKulkas = 3100000;
  $Total = $HargaKulkas * $Jumlah;
}elseif($Produk=="Mesin_Cuci"){
  $HargaMesinCuci = 3800000;
  $Total = $HargaMesinCuci * $Jumlah;
}else{
  $Total = 0;
}


echo '<ol class="list-group list-group-numbered">';
echo '<li class="list-group-item">Nama Customer : '.$Customer .'</li>';
echo '<li class="list-group-item">Nama Produk : '.$Produk .'</li>';
echo '<li class="list-group-item">Jumlah : '.$Jumlah .'</li>';
echo '<li class="list-group-item">Total Harga : '.$Total .'</li>';
echo '</ol>';

?>

</body>
</html>