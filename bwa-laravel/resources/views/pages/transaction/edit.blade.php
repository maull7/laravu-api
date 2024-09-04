@extends('layouts.default')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>EDIT TRANSAKSI {{ $item->uuid }}</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaction.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="Name" class="form-label">Nama Pelanggan</label>
                                <input type="text" name="name" class="form-control" id="Name"
                                    placeholder="Masukan nama produk" value="{{ $item->name }}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Type" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="Type"
                                    placeholder="Masukan tipe produk" value="{{ $item->email }}">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Descrepsi" class="form-label">Nomor telepon</label>
                                <input type="number" name="number" class="form-control" id="Type"
                                    placeholder="Masukan tipe produk" value="{{ $item->number }}">
                                @error('number')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" id="Price"
                                    placeholder="Masukan harga produk" value="{{ $item->address }}">
                                @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="form-label">Total transaksi</label>
                                <input type="number" name="transaction_total" class="form-control" id="Quantity"
                                    placeholder="Masukan stok produk" value="{{ $item->transaction_total }}">
                                @error('transaction_total')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="form-label">Status transaksi</label>
                                <input type="text" name="transaction_status" class="form-control" id="Quantity"
                                    placeholder="Masukan stok produk" value="{{ $item->transaction_status }}">
                                @error('transaction_status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <input type="text" value="{{ $item->uuid }}" name="uuid">
                            <button class="btn btn-primary" type="submit">EDIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
