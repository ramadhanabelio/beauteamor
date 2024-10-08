@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('produk.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="{{ $product->nama_produk }}">
            </div>

            <div class="form-group">
                <label for="jenis_produk">Jenis Produk</label>
                <input type="text" name="jenis_produk" class="form-control" value="{{ $product->jenis_produk }}">
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $product->harga }}">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
@endsection
