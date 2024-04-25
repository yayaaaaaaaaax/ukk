<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
      {{-- <table class="table container mt-5">
        <thead>
          <tr>
            <th scope="col">Nama Cafe</th>
            <th scope="col">Deskripsi Cafe</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Album</th>
            <th scope="col">User</th>
            <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>{{ $foto->JudulFoto }}</td>
            <td>{{ $foto->DeskripsiFoto }}</td>
            <td>{{ $foto->TanggalUnggah }}</td>
            <td>
              <img src="{{ asset('storage/image/'.$foto->LokasiFile) }}" alt="" width="100">
            </td>
            <td>{{ $foto->AlbumID }}</td>
            <td>{{ $foto->UserID }}</td>
            <td>
              <a href="/detailfoto/likefoto/{{ $foto->FotoID }}">{{ $like }} Like</a>
              <a href="/komentarfoto/{{ $foto->FotoID }}">{{ $komentarfoto }} Comment</a>
            </td>
          </tr>
          </tbody>
        
        
      </table>


      <div class="container mt-4"> --}}

      {{-- <form action="detailfoto/{{ $foto->FotoID }}" method="post">
        @csrf
        <input type="text" class="form-control" name="FotoID" value="{{ $foto->FotoID }}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Isi Komentar</label>
          <input type="text" class="form-control" name="IsiKomentar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div> --}}

{{-- navbar --}}
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

<br>

{{-- halaman detail data foto dan komentar  --}}
<div class="container mt-5 mb-5">
    <div class="card m-auto" style="max-width: 800px;">
      <img src="{{asset('storage/'. $albumfoto->LokasiFile)  }}" class="card-img-top" style="max-height: 450px">
      <div class="card-body">
        <h5 class="card-title"><i class="fa fa-clipboard mx-3"></i>{{ $albumfoto->JudulFoto }}</h5>
        <hr>
        <p class="card-text mt-4"><i class="fa fa-list mx-3"></i>
          <a class="text-danger" href="/detailfoto/likefoto/{{ $albumfoto->FotoID }}" style="text-decoration: none;">{{ $like }} <i class="fa fa-heart"></i></a>
          <a class="text-danger" href="#" style="text-decoration: none;">{{ $komentarfoto }} <i class="fa fa-comment"></i></a>
        </p>
        <p class="card-text"><i class="fa fa-compass mx-3"></i>{{ $albumfoto->DeskripsiFoto }}</p>
        <p class="card-text"><i class="fa fa-calendar mx-3"></i><small class="text-muted">{{ $albumfoto->TanggalUnggah }}</small></p>
        <p class="card-text"><i class="fa fa-images mx-3"></i>{{ $albumfoto->NamaAlbum }}</p>
        <p class="card-text"><i class="fa fa-user mx-3"></i>{{ $userfoto->namalengkap }}</p>
        <div class="accordion mx-auto" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Tambah Komentar
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form  method="post" action="{{ $foto->FotoID }}">
                  @csrf
                  <input type="text" class="form-control" name="FotoID" value="{{ $foto->FotoID }}" hidden>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Isi Komentar</label>
                    <input type="text" class="form-control" name="IsiKomentar">
                  </div>
                  <button type="submit" class="btn btn-primary">Komen</button>
                </form>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Komentar
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <table class="table container mt-5">
                    <tbody>
                    @foreach ($userkomentar as $item)  
                    <tr>
                      <td class="text-slate-900"><i class="fa fa-user mx-3">    {{ $item->namalengkap }}</td>
                      <td>{{ $item->IsiKomentar }}</td>
                      <td class="text-slate-900"><a href="hapuskomentar/{{ $item->KomentarID }}"><i class="fa fa-trash mx-3"></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>