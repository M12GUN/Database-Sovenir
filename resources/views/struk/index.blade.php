<!doctype html>
<html lang="en">
        <x-app-layout>
            <x-slot name="header">
            </x-slot>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="my-3 col-12 col-sm-8 col-md-5">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Keyword" name = "keyword" aria-label="Keyword" aria-describedby="basic-addon1">
                        <button class="input-group-text btn btn-primary" id="basic-addon1">Search</button>
                    </div>
                </form>
    </div>
  <div class="container mt-5">
    <h1 class="text-center mb-5">data struk</h1>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <th>NO</th>
                <th>JENIS</th>
                <th>ASAL</th>
                <th>NAMA</th>
</thead>
                    <tbody>
                        @foreach ($struk as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil-> jenis }}</td>
                            <td>{{ $hasil-> asal }}</td>
                            <td>{{ $hasil-> nama }}</td>
                            <td>
</td>
</tr>
                        @endforeach
                    </tbody>
</table>
</div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
</x-app-layout>