<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>



{{-- <div class="container p-10">
  @if (session('success'))
    <p class="alert alert-danger">{{ session('success') }}</p>
  @endif
  @if ($errors->any())
    @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <form class="container mt-5" action="{{ route('album.action') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama Album</label>
      <input type="text" class="form-control" name="NamaAlbum">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" name="Deskripsi">
    </div>
    <button type="submit" class="btn btn-primary mb-5">Tambah Album</button>
  </form>
</div> --}}

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

{{-- form tambah data album  --}}
<div class="container mt-5">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          FORM TAMBAH DATA ALBUM
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <div class="container p-10">
            @if (session('success'))
              <p class="alert alert-danger">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
              @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
              @endforeach
            @endif
            <form class="container mt-5" action="{{ route('album.action') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Album</label>
                <input type="text" class="form-control" name="NamaAlbum">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="Deskripsi">
              </div>
              <button type="submit" class="btn btn-primary mb-5">Tambah Album</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- table data album  --}}
<div class="container p-5">
  <table class="table container mt-5">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Album</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">User</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($album as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->NamaAlbum }}</td>
          <td>{{ $item->Deskripsi }}</td>
          <td>{{ $item->TanggalDibuat }}</td>
          <td>{{ $item->namalengkap }}</td>
          <td>
            <a class="btn btn-success mx-3" href="albumedit/{{ $item->AlbumID }}" style="border-radius: 14px"><i class="fa fa-pen"></i></a>
            <a class="btn btn-danger" href="hapusalbum/{{ $item->AlbumID }}" style="border-radius: 14px"><i class="fa fa-trash"></i></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>