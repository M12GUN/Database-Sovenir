<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container mt-5">
    <h1 class="text-center mb-5">data sovenir</h1>
    <a href="{{ route('sovenir.index')  }}" class="btn btn-primary mb-3">data sovenir</a>
    <div class="card">
        <div class="card-body">
        <form action="{{ route('sovenir.store') }}" method="POST">
            @csrf
    <div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="text" class="form-control" name="id" id="id">
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">harga</label>
    <input type="text" class="form-control" name="harga" id="harga">
  </div>
  <div class="mb-3">
    <label for="jenis" class="form-label">jenis</label>
    <input type="text" class="form-control" name="jenis" id="jenis">
  </div>
  <div class="mb-3">
    <label for="asal" class="form-label">asal</label>
    <input type="text" class="form-control" name="asal" id="asal">
  </div>
  <button type="submit" class="btn btn-primary float-end">Simpan</button>
</form>  
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>