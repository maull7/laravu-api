@extends('layouts.default')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>TAMBAH DATA</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="Product" class="form-label">Nama Produk</label>
                                <input type="text" name="name" class="form-control" id="Product"
                                    placeholder="Masukan nama produk">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Type" class="form-label">Tipe Produk</label>
                                <input type="text" name="type" class="form-control" id="Type"
                                    placeholder="Masukan tipe produk">
                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Descrepsi" class="form-label">Deskripsi produk</label>
                                <textarea class="form-control" class="desc" id="Descrepsi" name="descripton" rows="3"></textarea>
                                @error('descripton')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Harga Produk</label>
                                <input type="number" name="price" class="form-control" id="Price"
                                    placeholder="Masukan harga produk">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="form-label">Stok Produk</label>
                                <input type="number" name="quantity" class="form-control" id="Quantity"
                                    placeholder="Masukan stok produk">
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button class="btn btn-success" type="submit">TAMBAH</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
