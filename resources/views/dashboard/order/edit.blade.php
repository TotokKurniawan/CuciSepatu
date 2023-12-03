@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form edit pesanan</h3>
        </div>

        <form action="/dashboard/orders/{{ $order->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="packetname">Nama pelanggan</label>
                        <input type="text" name="customer_name" value="{{ $order->customer_name }}" class="form-control"
                            id="packetname" placeholder="Masukkan nama pelanggan" required>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="no_hp">No. HP</label>
                        <input type="text" name="no_hp" value="{{ $order->no_hp }}" class="form-control" id="no_hp"
                            placeholder="Masukkan no hp pelanggan" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="packet">Paket</label>
                        <select name="packet_id" id="packet" class="form-control" required>
                            @foreach ($packets as $packet)
                                @if ($order->packet->id == $packet->id)
                                    <option value="{{ $packet->id }}" selected>{{ $packet->name }} -
                                        {{ $packet->code_packet }}</option>
                                @else
                                    <option value="{{ $packet->id }}">{{ $packet->name }} - {{ $packet->code_packet }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="price">Jumlah</label>
                        <input type="number" name="weight" value="{{ $order->weight }}" class="form-control"
                            id="price" placeholder="Masukkan jumlah barang" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" id="address" cols="30" rows="5"
                            placeholder="Masukkan alamat pelanggan" required>{{ $order->address }}</textarea>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="desc">Keterangan</label>
                        <textarea name="desc" class="form-control" id="desc" cols="30" rows="5"
                            placeholder="Masukkan keterangan pesanan" required>{{ $order->desc }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <label for="">Status</label>
                        <div class="form-group d-flex">
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="radio" name="status" value="Selesai" id="Selesai"
                                    {{ $order->status == 'Selesai' ? 'checked' : '' }}>
                                <label for="Selesai" class="form-check-label">Selesai</label>
                            </div>
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="radio" name="status" value="Proses" id="Prosesi"
                                    {{ $order->status == 'Proses' ? 'checked' : '' }}>
                                <label for="Proses" class="form-check-label">Proses</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="Belum Bayar"
                                    id="Belum Bayar" {{ $order->status == 'Belum Bayar' ? 'checked' : '' }}>
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
@endsection
