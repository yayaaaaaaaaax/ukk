<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- {{-- css bootstrap --}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- {{-- css public --}} -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- AOS ANIMATED -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

    <!-- {{-- navbar --}} -->
    <nav class="navbar navbar-expand-lg fixed-top nav-home" data-bs-theme="dark" style="background-color: black">
        <div class="container">
            <a class="navbar-brand fw-normal text-white" href="#">
                <img src="foto/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                ENJOYMENT FUN CAFE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="home.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page"
                            href="gallery.html">GALLERY</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium active text-white" href="album.html" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ALBUM
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">BANDUNG BARAT</a></li>
                            <li><a class="dropdown-item" href="#">BANDUNG BARAT</a></li>
                            <li><a class="dropdown-item" href="#">BANDUNG BARAT</a></li>
                            <li><a class="dropdown-item" href="#">BANDUNG BARAT</a></li>
                            <li><a class="dropdown-item" href="#">BANDUNG BARAT</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="aboutme.html">ABOUT
                            ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="#">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <br><br>

    <!-- carousel foto  -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="foto/img.jpeg" alt="Logo" width="100%" height="700" class="d-inline-block align-text-top"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="foto/img1.jpg" alt="Logo" width="100%" height="700" class="d-inline-block align-text-top"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="foto/img2.jpg" alt="Logo" width="100%" height="700" class="d-inline-block align-text-top"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <br><br><br><br>

    <!-- {{-- album  --}} -->
    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-16 col-md-6 col-lg-4">
                    <div class="card border-0">
                        <li class="list-group-item border-dark" hidden></li>
                        <img src="foto/img.jpeg" class="card-img-top" height="250" width="200">
                    </div>
            </div>
            <div class="col-16 col-md-6 col-lg-4">
                    <div class="card border-0">
                        <li class="list-group-item border-dark" hidden></li>
                        <img src="foto/img.jpeg" class="card-img-top" height="250" width="200">
                    </div>
            </div>
            <div class="col-16 col-md-6 col-lg-4">
                    <div class="card border-0">
                        <li class="list-group-item border-dark" hidden></li>
                        <img src="foto/img.jpeg" class="card-img-top" height="250" width="200">
                    </div>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br>

    

    <!-- {{-- js bootstrap --}} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <!-- {{-- js navbar --}} -->
    <!-- AOS ANIMATED -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>