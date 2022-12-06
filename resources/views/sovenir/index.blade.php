<!doctype html>
<html lang="en">
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
    <h1 class="text-center mb-5">data sovenir</h1>
    <a href="{{ route('sovenir.create')  }}" class="btn btn-primary mb-3y">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                <th>NO</th>
                <th>HARGA</th>
                <th>JENIS</th>
                <th>ASAL</th>
                <th>AKSI</th>
                    <tbody>
                        @foreach ($sovenir as $no => $hasil)
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $hasil-> harga }}</td>
                            <td>{{ $hasil-> jenis }}</td>
                            <td>{{ $hasil-> asal }}</td>
                            <td>
                        <form action="{{ route('sovenir.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                        <a href="{{ route('sovenir.edit', $hasil->id)}}" class="btn btn-success btn-sm">Edits</a>
                        <button class="btn btn-danger btn-sm">Hapus</a>
                        <form class = "mt-1 form-inline" method="POST" action="{{ route('sovenir.soft', $hasil->id) }}">
                    </form>
                    <form class = "mt-1 form-inline" method="POST" action="{{ route('sovenir.soft', $hasil->id) }}">
                        @csrf
                            <button onclick="return confirm('{{ __('Are you sure you want to destroy?') }}')" type="submit" class="btn btn-warning">Hapus Sediluk</button>
                    </form>

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