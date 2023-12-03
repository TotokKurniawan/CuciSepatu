@extends('dashboard.template')
@section('content-dashboard')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Form ubah data pengguna</h3>
        </div>

        <form action="/dashboard/users/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="name">Nama</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name"
                            placeholder="Masukkan nama pengguna" required>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option>-- pilih --</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>user</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>admin</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="email"
                            placeholder="Masukkan email pengguna" required>
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" value="{{ $user->no_hp }}" class="form-control" id="no_hp"
                            placeholder="Masukkan nomor hp pengguna" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-10">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" id="address" cols="30" rows="4"
                            placeholder="Masukkan alamat pengguna" required>{{ $user->address }}</textarea>
                    </div>
                </div>

                <div class="btn btn-warning">
                    Secara default password akan dibuat sama dengan email
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Ubah</button>
                <a href="/dashboard/users" class="btn btn-secondary ml-3">Batal</a>
            </div>
        </form>
    </div>
@endsection
