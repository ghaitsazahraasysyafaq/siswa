<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Data Siswa</h1>
    <table class="table">
    <a type="button" class="btn btn-primary" href="/tambahsiswa">+tambah siswa</a>
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">TTL</th>
      <th scope="col">NomerHp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php 
     $no = 1;
    @endphp

    @foreach( $data as $row )
    <tr>
      <th scope="row">1</th>
      <td>{{$row->nis}}</td>
      <td>{{$row->nama}}</td>
      <td>{{$row->alamat}}</td>
      <td>{{$row->ttl}}</td>
      <td>{{$row->nomerhp}}</td>
      <td>
      <a type="button" class="btn btn-warning" href="/tampilsiswa/{{ $row->id }}">Edit</a>
      <a type="button" class="btn btn-danger" href="/hapussiswa/{{ $row->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>