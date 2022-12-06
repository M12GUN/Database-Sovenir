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
    <h1 class="text-center mb-5">edit data penjual</h1>
    <a href="{{ route('penjual.index')  }}" class="btn btn-primary mb-3">data penjual</a>
    <div class="card">
        <div class="card-body">
        <form action="{{ route('penjual.update', $penjual->id) }}" method="POST">
            @csrf
            @method("PUT")
  <div class="mb-3">
    <label for="nama" class="form-label">nama</label>
    <input type="text" class="form-control" name="nama" value="{{ $penjual->nama }}" id="nama">
  </div>
  <div class="mb-3">
    <label for="toko" class="form-label">toko</label>
    <input type="text" class="form-control" name="toko" value="{{ $penjual->toko }}" id="toko">
  </div>
  <div class="mb-3">
    <label for="asal" class="form-label">asal</label>
    <input type="text" class="form-control" name="asal" value="{{ $penjual->asal }}" id="asal">
  </div>
  <button type="submit" class="btn btn-primary float-end">Edit</button>
</form>  
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>