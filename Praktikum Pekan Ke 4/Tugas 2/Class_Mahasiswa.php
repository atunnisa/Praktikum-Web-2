<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <table id="example" class="table table-striped table-bordered">
        <caption>Showing 1 to 4 of 4 entries</caption>
            <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Tahun Angakatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
            <tr>
      <th scope="row">1</th>
      <td>02011</td>
      <td>Maesaroh</td>
      <td>TI</td>
      <td>2012</td>
      <td>3.8</td>
      <td>Cum Laude</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>02012</td>
      <td>Yusuf Salman</td>
      <td>TI</td>
      <td>2012</td>
      <td>3.9</td>
      <td>Cum Laude</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>01011</td>
      <td>Asma Syahida</td>
      <td>SI</td>
      <td>2010</td>
      <td>3.46</td>
      <td>Memuaskan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>01012</td>
      <td>Zainul Ilmi</td>
      <td>SI</td>
      <td>2010</td>
      <td>3.2</td>
      <td>Memuaskan</td>
    </tr>
            </thead>

</body>
</html>





<?php
class Mahasiwa{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;
    function __construct($nim , $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }
    function predikat_ipk(){
        if($this->ipk < 2.0 ) return "Cukup";
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0) 
            return "Baik";
        elseif($this->ipk >= 3.0 && $this->ipk < 3.75)
            return "Memuaskan";
        elseif($this->ipk >= 3.75 && $this->ipk <= 4)
            return "Cumlaude";
    }
}


?>