<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album</title>
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


<br><br><br><br><br>

    {{-- album  --}}
    <div class="container mb-5">
        <div class="row g-4">
            @foreach ($albumfoto as $item)
            {{-- <p>{{ $item->LokasiFile}}</p> --}}
            {{-- <a href="/storage/.{{ $item->LokasiFile }}"></a> --}}
            {{-- <img src="{{asset('storage/'. $item->LokasiFile)  }} " alt=""> --}}
            <div class="col-16 col-md-6 col-lg-4">
                <div class="card border-0">
                    <li class="list-group-item border-dark" hidden></li>
                    <img src="{{asset('storage/'. $item->LokasiFile)  }} " class="card-img-top" height="250" width="200" style="text-decoration: none;">
                </div>
            </div>
            @endforeach
        </div>
    </div>


    {{-- js bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    {{-- js navbar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function () {
            if (window.pageYOffset) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark');
            }
        })
    </script>
    </script>
    {{-- AOS ANIMATED  --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>