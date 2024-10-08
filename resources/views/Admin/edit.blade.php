<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Edit Produk - Beauteamor</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Produk</h2>
        <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    value="{{ $product->nama_produk }}" required>
            </div>
            <div class="form-group">
                <label for="jenis_produk">Jenis Produk</label>
                <select class="form-control" id="jenis_produk" name="jenis_produk" required>
                    <option value="Kosmetik" {{ $product->jenis_produk == 'Kosmetik' ? 'selected' : '' }}>Kosmetik
                    </option>
                    <option value="Skincare" {{ $product->jenis_produk == 'Skincare' ? 'selected' : '' }}>Skincare
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" value="{{ $product->stok }}"
                    required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}"
                    required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar Produk</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <img src="{{ asset('storage/' . $product->gambar) }}" alt="Gambar Produk" width="100" class="mt-3">
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
