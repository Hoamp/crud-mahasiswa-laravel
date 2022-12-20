<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">
        <form action="{{ route('mahasiswas.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <h2 class="float-right">Halaman Tambah Data</h2>
                    <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary float-right mb-3">Kembali</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama : </label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $mahasiswa->nama }}">
                        @error('nama')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat : </label>
                        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $mahasiswa->alamat }}">
                        @error('alamat')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email : </label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="{{ $mahasiswa->email }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir : </label>
                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}">
                        @error('tanggal_lahir')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>