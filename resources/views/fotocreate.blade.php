<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
</head>
<body>
    {{-- <div class="container m-5">
      <form method="post" action="{{ route('foto.action') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Judul Foto</label>
            <input type="text" class="form-control" name="JudulFoto">
          </div>
          <div class="mb-3">
            <label class="form-label">Deskripsi Foto</label>
            <input type="text" class="form-control" name="DeskripsiFoto">
          </div>
          <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" class="form-control" name="LokasiFile">
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
          <button class="btn btn-primary mt-5 mb-5">Tambah Foto</button>
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


<br><br><br><br><br><br><br>


<div class="container">
  <div class="mb-3">
    <p>HELLO, WELCOME TO OUR WEBSITE</p>
  </div>
  <div class="mb-2">
    <h1>{{ Auth::user()->namalengkap }}</h1>
  </div>
  <div class="text-bold">
    <h6>Share Your Experiences of Fun and Beautiful Cafes</h6>
  </div>
</div>



<br><br><br>


<section class="w-full h-screen flex">
    <div class="container" id="bg-welcome">
        <div class="row row-cols-1 row-cols-sm-2 ">
            <div class="col w-50 container-fluid">
                <img src="foto/img.jpeg" alt="" width="595" height="400">
            </div>
            <div class="col w-50 container-fluid p-5 text-center" data-aos="fade-right" data-aos-duration="3000">
                <h2 class="text-bold text-left">ABOUT US</h2>
                <hr>
                <p>illo eaque, provident amet laboriosam expedita saepe recusandae magnam nostrum ex odio iure
                    eligendi? Possimus enim aperiam id recusandae eum. Quod recusandae, eligendi voluptates
                    doloremque accusamus accusantium et quo, laudantium officia dolor aliquid optio dolores,
                    aspernatur maiores inventore sunt earum. Nemo amet quisquam mollitia quibusdam iusto nesciunt
                    quaerat explicabo laborum? Vel facere ad, dolorem nostrum quas veniam ut perferendis
                    perspiciatis debitis? Dicta ut enim vel recusandae delectus, aliquid dolor incidunt quo et odit
                    facilis. Similique ratione, hic illo magnam at corrupti nesciunt! Qui in asperiores libero
                    cumque natus eum sit.</p>
            </div>
        </div>
    </div>
</section>

<br><br><br>

    {{-- form tambah data foto  --}}
    <div class="container mt-5">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              FORM TAMBAH DATA FOTO
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="container p-10">
                <form method="post" action="{{ route('foto.action') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Judul Foto</label>
                      <input type="text" class="form-control" name="JudulFoto">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Deskripsi Foto</label>
                      <input type="text" class="form-control" name="DeskripsiFoto">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Image</label>
                      <input type="file" class="form-control" name="LokasiFile">
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
                    <button class="btn btn-primary mt-5 mb-5">Tambah Foto</button>
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
            <th scope="col">Nama Cafe</th>
            <th scope="col">Tanggal Unggah</th>
            <th scope="col">Lokasi File</th>
            <th scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($userfoto as $item)
          <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $item->JudulFoto }}</td>
            <td>{{ $item->TanggalUnggah }}</td>
            <td>
              <img src="{{asset('storage/'. $item->LokasiFile)  }}" alt="" width="100">
            </td>
            <td>
              <a class="btn btn-danger" href="hapusfoto/{{ $item->FotoID }}" style="border-radius: 14px"><i class="fa fa-trash"></i></a>
              <a class="btn btn-success mx-3" href="edit-foto/{{ $item->FotoID }}" style="border-radius: 14px"><i class="fa fa-pen"></i></a>
              <a class="btn btn-primary" href="detailfoto/{{ $item->FotoID }}" style="border-radius: 14px"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <p></p>
            </td>
          </tr>
          @endforeach
          </tbody>
      </table>
    </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>