@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('produk.create') }}" class="btn btn-primary mt-5">TAMBAH PRODUK</a>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3 mt-4">
                    <div class="card border-dark">
                        <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{ $product->nama_produk }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->jenis_produk }}</h6>
                            <label class="card-text harga"><strong>Rp.</strong>
                                {{ number_format($product->harga) }}</label><br>
                            <a href="{{ route('produk.edit', $product->id) }}"
                                class="btn btn-primary btn-sm btn-block">EDIT</a>
                            <form action="{{ route('produk.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-block text-light"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">HAPUS</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
