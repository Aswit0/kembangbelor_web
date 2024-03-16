<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="build/assets/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
  body {
    border: 1px solid black;
  }
  </style>
</head>
<body>

@include('layouts\navbar')

<div class="container-fluid bg-image text-white" style="background-image: url('build/assets/wisata3.jpg'); height: 500px;">
  <h1 class="display-1 text-center">Bernah De Vallei</h1>
  <div class="d-flex justify-content-center align-items-end h-100">
    <p class="lead">Wisata alam terutama hutan</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h2>Deskripsi wisata</h2>
      <p>Bernah De Vallei merupakan kawasan wisata alam terutama hutan yang berada di Jl. Raya Tirtowening, Belor, Kembangbelor, Kabupaten Mojokerto, Jawa Timur 61374, Indonesia atau 8HW5+WG Kembangbelor, Kabupaten Mojokerto, Jawa Timur Tepatnya pada Kawasan Hutan</p>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-sm-6">
          <h2>Alamat</h2>
          <p>Jl. Raya Tirtowening, Belor, Kembangbelor, Kec. Pacet, Kabupaten Mojokerto, Jawa Timur 61374</p>
        </div>
        <div class="col-sm-6">
          <h2>Jam Buka</h2>
          <p>08:00 to 16:00</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <h2>Tiket Masuk</h2>
          <p>Rp7,000 Rp60,000</p>
        </div>
        <div class="col-sm-6">
          <a href="#" class="btn btn-primary">Lihat Instagram</a>
          <a href="#" class="btn btn-success">Hubungi Via Telepon</a>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col">
      <h2>Map</h2>
      <div class="d-flex">
        <a href="#" class="me-2">Map</a>
        <a href="#" class="text-muted">Satellite</a>
      </div>
      <p>Keyboard shortcuts Map date 02024 TemReportmap</p>
    </div>
    <div class="col">
      <h2>Sekitarnya</h2>
      <ul>
        <li>Pondok Pesantren Amanatul Ummah</li>
        <li>SMAU DE Amanatul Ummah</li>
        <li>Unyil Cell Serv</li>
        <li>Villa Panggung</li>
      </ul>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>