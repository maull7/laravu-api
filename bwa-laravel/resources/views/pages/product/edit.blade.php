@extends('layouts.default')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>EDIT PRODUCT {{ $item->name }}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="Product" class="form-label">Nama Produk</label>
                                <input type="text" name="name" class="form-control" id="Product"
                                    placeholder="Masukan nama produk" value="{{ $item->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Type" class="form-label">Tipe Produk</label>
                                <input type="text" name="type" class="form-control" id="Type"
                                    placeholder="Masukan tipe produk" value="{{ $item->type }}">
                                @error('type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Descrepsi" class="form-label">Deskripsi produk</label>
                                <textarea class="form-control" class="desc" id="Descrepsi" name="descripton" rows="3"
                                    value="{{ $item->descripton }}">{{ $item->descripton }}</textarea>
                                @error('descripton')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Harga Produk</label>
                                <input type="number" name="price" class="form-control" id="Price"
                                    placeholder="Masukan harga produk" value="{{ $item->price }}">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="form-label">Stok Produk</label>
                                <input type="number" name="quantity" class="form-control" id="Quantity"
                                    placeholder="Masukan stok produk" value="{{ $item->quantity }}">
                                @error('quantity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">EDIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
