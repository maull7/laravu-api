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
                        <form action="{{ route('products-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="Product" class="form-label">Pilih produk</label>
                                <select name="products_id" id="Product" class="form-control">
                                    <option>PILIH</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                @error('products_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Type" class="form-label">Foto produk</label>
                                <br>
                                <input type="file" name="photo" class="form-control" id="Type"
                                    placeholder="Masukan poto produk" accept="image/*" value="{{ old('photo') }}">
                                @error('photo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <label>Default</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_default" id="1"
                                    value="1">
                                <label class="form-check-label" for="1">
                                    YA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_default" id="0"
                                    value="0">
                                <label class="form-check-label" for="0">
                                    Tidak
                                </label>
                            </div>
                            <button class="btn btn-success btn-block" type="submit">TAMBAH FOTO</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
