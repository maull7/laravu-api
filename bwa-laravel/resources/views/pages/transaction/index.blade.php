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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Addres</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->number }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->transaction_total }}</td>
                                            <td>
                                                @if ($item->transaction_status == 'PENDING')
                                                    <span class="badge badge-info">
                                                    @elseif ($item->transaction_status == 'SUCCESS')
                                                        <span class="badge badge-success">
                                                        @elseif ($item->transaction_status == 'FAILED')
                                                            <span class="badge badge-danger">
                                                @endif
                                                {{ $item->transaction_status }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    @if ($item->transaction_status == 'PENDING')
                                                        <a href="{{ route('transaction.status', $item->id) }}?status=SUCCESS"
                                                            class="btn btn-success mx-1 btn-sm">
                                                            <i class="fa fa-check"></i></a>
                                                        <a href="{{ route('transaction.status', $item->id) }}?status=FAILLED"
                                                            class="btn btn-warning mx-1 btn-sm">
                                                            <i class="fa fa-times"></i></a>
                                                    @endif
                                                    <a href="{{ route('transaction.edit', $item->id) }}"
                                                        class="btn btn-info  mx-1"><i class="fa fa-pencil-square"></i></a>
                                                    <a href="#mymodal"
                                                        data-remote="{{ route('transaction.show', $item->id) }}"
                                                        data-toggle="modal" data-target="#mymodal"
                                                        data-title="Detail transaksi {{ $item->uuid }}"
                                                        class="btn btn-success mx-1"><i class="fa fa-share-square"></i></a>
                                                    <form action="{{ route('transaction.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger mx-1"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>

                                                </div>


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
