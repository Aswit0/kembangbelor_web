<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-top shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="build/assets/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#wisata">Wisata</a></li>
                <li class="nav-item"><a class="nav-link" href="/kritik">Kritik dan Saran</a></li>
                <li class="nav-item"><a class="nav-link" href="/360">360</a></li>
            </ul>
        </div>
    </div>
</nav>
  
<script>
        // Wait for the DOM content to be loaded
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.querySelector('.navbar');
            const carousel = document.getElementById('carouselExampleIndicators');

            // Listen for slide.bs.carousel event
            carousel.addEventListener('slide.bs.carousel', function (event) {
                const nextSlideIndex = event.to;
                if (nextSlideIndex > 0) {
                    navbar.classList.add('navbar-at-carousel');
                } else {
                    navbar.classList.remove('navbar-at-carousel');
                }
            });
        });
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>