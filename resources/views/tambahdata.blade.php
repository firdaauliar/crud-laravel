<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mb-4">Tambah Data Mahasiswa</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Mata Kuliah</label>
                  {{-- <input type="text" class="form-control" name="matakuliah" id="matkul" aria-describedby="emailHelp"> --}}
                  <select class="form-select" name="matakuliah" id="matkul" aria-label="Default select example">
                    <option selected>Open this select mata kuliah</option>
                    <option value="Soft Computing">Soft Computing</option>
                    <option value="Data Mining">Data Mining</option>
                    <option value="Manajemen Proyek">Manajemen Proyek</option>
                    <option value="Database">Database</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nilai</label>
                  <input type="number" class="form-control" name="nilai" id="score" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Indeks</label>
                  <input type="text" class="form-control" name="indeks" id="index" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Upload File</label>
                  <input type="file" class="form-control" name="uploadfile">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
