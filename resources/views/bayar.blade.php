@extends('layouts.app')
@section('title', 'Bayar')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container col-xxl-10 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center">
                        <div class="col-10 col-sm-10 col-lg-7">
                            <img src="img/emoney.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="1000"
                                height="1300" loading="lazy">
                        </div>
                        <div class="col-lg-5">
                            <h4 class="bold">Mohon lakukan pembayaran dengan menggunakan e-money yang terkait dengan nomor
                                yang tercantum di samping.</h4>
                            <p class="text-muted">Pastikan untuk memperhatikan nomor yang tertera di samping dan unggah
                                bukti pembayaran di bawah ini.</p>
                            <form action="/bayar" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-sm-8">
                                    <input type="number" name="code_order" class="form-control" id="code_order"
                                        placeholder="Masukkan Kode Pesanan" required>
                                </div>
                                <div class="form-group col-sm-8 py-1">
                                    <input type="file" name="gambar">
                                </div>
                                <div class="d-grid gap-2 py-2">
                                    <button type="submit" class="btn btn-warning">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
