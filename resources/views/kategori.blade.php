@extends('layouts.app')
@section('title', 'Kategori')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container col-xxl-10 px-4 py-5">
                <div>
                    <div class="row row-cols-1 row-cols-md-3 g-3">
                        @forelse ($packets as $packet)
                            <div class="col">
                                <div class="card h-100 text-center">
                                    <img src="{{ url('upload/') }}/{{ $packet->gambar }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="display-6 fw-bold lh-1 mb-3">{{ $packet->name }}</h5>
                                        <h4 class="card-text">Rp {{ number_format($packet->price) }} / {{ $packet->unit }}
                                        </h4>
                                        <p class="card-text">{{ $packet->desc }} </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="card-body">
                                <h5 class="card-title">Tidak Tersedia</h5>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endsection
