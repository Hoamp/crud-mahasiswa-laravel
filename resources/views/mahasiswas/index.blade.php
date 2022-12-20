<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="float-right">Halaman Admin</h2>
                <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary float-right mb-3">Tambah Mahasiswa</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">{{ $message }}</div>   
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Email</td>
                    <td>Tanggal Lahir</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @forelse ($mahasiswas as $mahasiswa)
                <tr>
                    <td><?= $no;$no++ ?></td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->tanggal_lahir }}</td>
                    <td>
                        {{-- <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="Post">
                            <a class="btn btn-warning" href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form> --}}
                    </td>
                </tr>
                @empty
                    <td colspan="6" class=" text-center" role="alert">Belum Ada Data Mahasiswa</td>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>