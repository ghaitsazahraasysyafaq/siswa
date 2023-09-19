<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Tambah Siswa</h1>
    <form action="/inputsiswa" method="post">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nis</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nis">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ttl</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="ttl">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nomer.hp</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="nomerhp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>