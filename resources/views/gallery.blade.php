<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- css public --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    {{-- AOS ANIMATED --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
</head>
<body>
    
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top nav-home" data-bs-theme="dark" style="background-color: black">
        <div class="container">
            <a class="navbar-brand fw-normal text-white" href="#">
                <img src="{{ asset('foto/logo.png') }}" alt="Logo" width="30" height="24"
              class="d-inline-block align-text-top">
                ENJOYMENT FUN CAFE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="/home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="/gallery">GALLERY</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium active text-white" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        ALBUM
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($album as $item)
                                <li><a class="dropdown-item" href="{{ route('album', $item->AlbumID) }}">{{ $item->NamaAlbum }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="/halamanfoto">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-medium active text-white" aria-current="page" href="/dashboard">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<br><br>


    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('foto/img.jpeg') }}" alt="Logo" width="100%" height="700"
            class="d-inline-block align-text-top" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('foto/img1.jpg') }}" alt="Logo" width="100%" height="700"
            class="d-inline-block align-text-top" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('foto/img2.jpg') }}" alt="Logo" width="100%" height="700"
            class="d-inline-block align-text-top" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    

<br><br><br><br>

    {{-- gallery  --}}
    <div class="container">
        <div class="row g-4">
            @foreach ($foto as $item)
            <div class="col-16 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="3000">
                <div class="card border-0 " style="width: 21rem;">
                    <img src="{{asset('storage/'. $item->LokasiFile)  }}" class="card-img-top" alt="..." style="max-height: 200px">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-dark">{{ $item->JudulFoto }}
                            <a href="/detailfoto/{{ $item->FotoID }}" class="card-title mx-5" style="text-decoration: none;"> <i class="fa fa-arrow-right"></i></a>
                        </li>
                        <li class="list-group-item border-dark">{{ $item->TanggalUnggah }}</li>
                        <li class="list-group-item">{{ $item->DeskripsiFoto }}</li>
                    </ul>
                    {{-- <div class="border-1 mb-2">
                        <a href="/detailfoto/{{ $item->FotoID }}" class="card-title text-right" style="text-decoration: none;">For More Info <i class="fa fa-arrow-right"></i></a>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>

<br><br><br><br><br><br><br><br>

    {{-- footer  --}}
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mt-3" style="margin-right: 220px;">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"><img src="{{ asset('foto/logo.png') }}" width="20">    ENJOYMENT FUN CAFE</h5>
                    <p>Cafetaria & Coffe Shop</p>
                    <p>Jln. Bunga Lily No. 201,Jakarta Pusat</p>
                    <p>+88 (0) 101 0000 000</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links</h5>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">HOME</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">GALLERY</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">ALBUM</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">LOGOUT</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Information</h5>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">ABOUT ME</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Social</h5>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">FACEBOOK</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">INSTAGRAM</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">TWITTER</a></p>
                    <p class="text-sm"><a href="" class="text-white" style="text-decoration: none;">WHATSAPP</a></p>
                </div>
            </div>  
            <hr class="mb-4" style="width: 1100px;">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <div class="text-md-left">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <p class="text-center text-md-right">UKKLULUS © 2024. All Developing Better</p>
                </div>
            </div>
        </div>
    </footer>

    {{-- js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- js navbar --}}
    {{-- AOS ANIMATED --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>