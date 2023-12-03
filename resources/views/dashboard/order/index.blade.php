@auth
    @if (auth()->user()->role === 'admin')
        @extends('dashboard.template')
        @section('content-dashboard')
            <div>
                <a href="/dashboard/orders/create" class="btn btn-success mb-4">Tambah pesanan</a>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kode</th>
                                    <th>Pelanggan</th>
                                    <th>Paket</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Harga</th>
                                    <th>Bukti bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr>
                                        <th class="font-weight-normal">{{ $order->order_code }}</th>
                                        <th class="font-weight-normal">
                                            {{ $order->customer_name }}
                                            <br>
                                            <small class="text-primary">{{ $order->no_hp }}</small>
                                        </th>
                                        <th class="font-weight-normal">
                                            {{ $order->packet->name }}
                                            <br>
                                            <small class="text-primary">{{ $order->packet->code_packet }}</small>
                                        </th>
                                        <th class="font-weight-normal">{{ $order->weight }} {{ $order->packet->unit }}</th>
                                        <th class="font-weight-normal">
                                            <p
                                                class="btn btn-sm {{ $order->status == 'Belum Bayar' ? 'btn-danger' : 'btn-success' }}">
                                                {{ $order->status }}</p>
                                        </th>
                                        <th class="font-weight-normal">{{ number_format($order->price) }}</th>
                                        <th class="font-weight-normal">
                                            @foreach ($bayars as $bayar)
                                                @if ($order->order_code === $bayar->code_order)
                                                    <img src="{{ url('upload/') }}/{{ $bayar->gambar }}" class="img-fluid"
                                                        width="200" height="420">
                                                @else
                                                    <p>Belum Bayar</p>
                                                @endif
                                            @endforeach

                                        </th>
                                        <th>
                                            <a href="/dashboard/orders/{{ $order->id }}/edit"
                                                class="btn btn-warning text-white mr-2"><i class="fa fa-solid fa-pen"></i></a>
                                            <a href="/dashboard/orders/{{ $order->id }}" class="btn btn-success mr-2"><i
                                                    class="fa fa-solid fa-eye"></i></a>
                                            <a href="/dashboard/invoice/{{ $order->id }}" class="btn btn-primary mr-2"><i
                                                    class="fa fa-print"></i></a>
                                            <form action="/dashboard/orders/{{ $order->id }}" method="post"
                                                class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger"><i class="fa fa-solid fa-trash"></i></button>
                                            </form>
                                        </th>
                                    </tr>
                                @empty
                                    <tr>
                                        <th class="font-weight-normal">Orderan belum ada</th>
                                        <th class="font-weight-normal"></th>
                                        <th class="font-weight-normal"></th>
                                        <th class="font-weight-normal"></th>
                                        <th class="font-weight-normal"></th>
                                        <th></th>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        @endsection
    @else
        @extends('layouts.app')
    @section('title', 'Home')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="container col-xxl-10 px-4 py-5">
                        <div class="row flex-lg-row-reverse align-items-center">
                            <div class="col-10 col-sm-10 col-lg-7">
                                <img src="{{ url('img/viewauth.png') }}" class="d-block mx-lg-auto img-fluid"
                                    alt="Bootstrap Themes" width="1000" height="1300" loading="lazy">
                            </div>
                            <div class="col-lg-5">
                                <h1 class="display-5 fw-bold lh-1 mb-3">Selamat datang di Cuci Cepat Footwear</h1>
                                <h4 class="bold">solusi terbaik untuk menjaga sepatu
                                    Anda tetap bersih dan terawat dengan cepat dan mudah!</h4>
                                <p class="text-muted">Kami berusaha untuk memberikan layanan cuci sepatu terbaik yang akan
                                    membuat
                                    sepatu Anda terlihat seperti baru kembali.</p>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
@endauth
