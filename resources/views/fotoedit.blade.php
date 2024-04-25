<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

{{-- navbar  --}}
<nav class="navbar navbar-expand-lg fixed-top nav-home mb-5" data-bs-theme="dark" style="background-color: black">
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
                    <a class="nav-link fw-medium active text-white" aria-current="page" href="#">GALLERY</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-medium active text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    ALBUM
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($album as $item)
                        <li><a class="dropdown-item" href="#">{{ $item->NamaAlbum }}</a></li>
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
  
  <br><br><br>

    {{-- <div class="container m-5">
      <form method="post" action="{{$foto->FotoID}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Judul Foto</label>
            <input type="text" class="form-control" name="JudulFoto" value="{{ $foto->JudulFoto }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi Foto</label>
            <input type="text" class="form-control" name="DeskripsiFoto" value="{{ $foto->DeskripsiFoto }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="LokasiFile">
          </div>
          <div class="mb-3">
            <label for="">Foto Lama</label>
            <img src="{{ asset('storage/image/'.$foto->LokasiFile) }}" alt="">
          </div>
          <div class="form-group">
            <label class="form-label">Album</label>
            <select name="AlbumID" id="AlbumID" class="form-control">
                <option disabled value="">Pilih Album</option>
                @foreach ($album as $item)
                    <option value="{{ $item->AlbumID }}">{{ $item->NamaAlbum }}</option>
                @endforeach
            </select>
          </div>
          {{-- <div class="mb-3">
            <label for="">Album Lama</label>
            <ul>
                @foreach ($foto->album as $item)
                    <li>{{ $item->album->NamaAlbum }}</li>
                @endforeach
            </ul>
          </div> 
          <button class="btn btn-primary mt-5 mb-5">Edit Foto</button>
        </form>
      </div> --}}

      <div class="container mt-5">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                FORM EDIT DATA FOTO
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <div class="container p-10">
                    <form method="post" action="{{$foto->FotoID}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Judul Foto</label>
                          <input type="text" class="form-control" name="JudulFoto" value="{{ $foto->JudulFoto }}">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Deskripsi Foto</label>
                          <input type="text" class="form-control" name="DeskripsiFoto" value="{{ $foto->DeskripsiFoto }}">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Image</label>
                          <input type="file" class="form-control" name="LokasiFile">
                        </div>
                        <div class="mb-3">
                          <label for="">Foto Lama</label>
                          <img src="{{ asset('storage/image/'.$foto->LokasiFile) }}" alt="">
                        </div>
                        <div class="form-group">
                          <label class="form-label">Album</label>
                          <select name="AlbumID" id="AlbumID" class="form-control">
                              <option disabled value="">Pilih Album</option>
                              @foreach ($album as $item)
                                  <option value="{{ $item->AlbumID }}">{{ $item->NamaAlbum }}</option>
                              @endforeach
                          </select>
                        </div>
                        {{-- <div class="mb-3">
                          <label for="">Album Lama</label>
                          <ul>
                              @foreach ($foto->album as $item)
                                  <li>{{ $item->album->NamaAlbum }}</li>
                              @endforeach
                          </ul>
                        </div> --}}
                        <button class="btn btn-primary mt-5 mb-5">Edit Foto</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>