@extends('layouts.app')
@section('title', 'Pesan')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-xxl-10 px-4 py-5">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Form tambah pesanan</h3>
                    </div>

                    <form action="/dashboard/orders" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-sm-5">
                                    <label for="packetname">Nama pelanggan</label>
                                    {{-- <input type="text" name="customer_name" class="form-control" id="packetname"
                                        placeholder="Masukkan nama pelanggan" required> --}}
                                    <select name="customer_name" id="packetname" class="form-control" required>
                                        <option>{{ Auth::user()->name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-5">
                                    <label for="no_hp">No. HP</label>
                                    <input type="text" name="no_hp" class="form-control" id="no_hp"
                                        placeholder="Masukkan no hp pelanggan" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-5">
                                    <label for="packet">Paket</label>
                                    <select name="packet_id" id="packet" class="form-control" required>
                                        @foreach ($packets as $packet)
                                            <option value="{{ $packet->id }}">{{ $packet->name }} -
                                                {{ $packet->code_packet }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-sm-5">
                                    <label for="weight">Jumlah</label>
                                    <input type="number" name="weight" class="form-control" id="weight"
                                        placeholder="Masukkan jumlah barang" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-5">
                                    <label for="address">Alamat</label>
                                    <textarea name="address" class="form-control" id="address" cols="30" rows="5"
                                        placeholder="Masukkan alamat pelanggan" required></textarea>
                                </div>
                                <div class="form-group col-sm-5">
                                    <label for="desc">Keterangan</label>
                                    <textarea name="desc" class="form-control" id="desc" cols="30" rows="5"
                                        placeholder="Masukkan keterangan pesanan" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <label for="">Status</label>
                                    <div class="form-group d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                value="Belum Bayar" id="Belum Bayar" checked>
                                            <label for="Belum Bayar" class="form-check-label">Belum Bayar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Simpan</button>
                            <a href="/dashboard/orders" class="btn btn-secondary ml-3">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
