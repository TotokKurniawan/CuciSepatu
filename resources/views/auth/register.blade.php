<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUCI CEPAT FOOTWEAR | Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <main class="text-center">
        <br><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="container col-xxl-10 px-4 py-5">
                        <div class="card bg-white">
                            <div class="row flex-lg-row-reverse align-items-center">
                                <div class="col-10 col-sm-8 col-lg-6">
                                    <div class="card-body">
                                        <h2 class="display-8 fw-bold lh-1 mb-3">Cuci Cepat, Harga Murmer</h2>
                                        <h5 class="text-secondary">Buat akun, dan nikmati pelayanan kami.</h5>
                                        <br>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="name"
                                                    class="col-md-3 col-form-label text-md-right fw-bold">{{ __('Nama') }}</label>

                                                <div class="col-md-8">
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" value="{{ old('name') }}" required
                                                        autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email"
                                                    class="col-md-3 col-form-label text-md-right fw-bold">{{ __('E-Mail') }}</label>

                                                <div class="col-md-8">
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password"
                                                    class="col-md-3 col-form-label text-md-right fw-bold">{{ __('Password') }}</label>

                                                <div class="col-md-8">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="new-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password-confirm"
                                                    class="col-md-3 col-form-label text-md-right fw-bold">{{ __('Konfirmasi Password') }}</label>

                                                <div class="col-md-8">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" required
                                                        autocomplete="new-password">
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-3">
                                                    <a href="login" class="btn btn-outline-warning fw-bold">Login</a>
                                                    <button type="submit" class="btn btn-dark">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <img src="img/shoes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                                        width="450" height="650" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
