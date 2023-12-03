@extends('layouts.app')
@section('title', 'Kategori')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-xxl-6 px-4 py-5">
                <div>
                    <div class="row row-cols-1">
                        @forelse ($orders as $order)
                            @if ($order->customer_name === Auth::user()->name)
                                <div class="card">
                                    <div class="card-header py-2">
                                        <h3 class="card-title text-center">Detail Pesanan</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Kode pesanan</th>
                                                    <td>{{ $order->order_code }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama pelanggan</th>
                                                    <td>{{ $order->customer_name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Paket pesanan</th>
                                                    <td>{{ $order->packet->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        <span
                                                            class="btn btn-sm {{ $order->status == 'Belum Bayar' ? 'btn-danger' : 'btn-success' }}">
                                                            {{ $order->status }}
                                                        </span>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Jumlah</th>
                                                    <td>{{ $order->weight }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Harga</th>
                                                    <td>{{ number_format($order->price) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tanggal input</th>
                                                    <td>{{ $order->created_at->format('D, d - M - Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>No HP</th>
                                                    <td>{{ $order->no_hp }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>{{ $order->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Keterangan</th>
                                                    <td>{{ $order->desc }}</td>
                                                </tr>
                                            </table>
                                            @if ($order->status == 'Belum Bayar')
                                                <div class="d-grid gap-2 col-6 mx-auto"><a href="/bayar"
                                                        class="btn btn-primary mr-2">Bayar
                                                        Sekarang</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <tr>
                                <th class="font-weight-normal">Orderan belum ada</th>
                                <th></th>
                            </tr>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
