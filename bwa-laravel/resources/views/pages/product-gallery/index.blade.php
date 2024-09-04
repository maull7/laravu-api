@extends('layouts.default')

@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Daftar foto Barang</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Default</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td><img src="{{ url($item->photo) }}" alt=""></td>
                                            <td>
                                                @if ($item->is_default == 1)
                                                    {{ 'YA' }}
                                                @else
                                                    {{ 'TIDAK' }}
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route('products-gallery.destroy', $item->id) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @empty
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-danger" role="alert">
                                                    data belum tersedia!
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
