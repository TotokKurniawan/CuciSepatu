@auth
    @if (auth()->user()->role === 'admin')

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>CUCI CEPAT FOOTWEAR | Dashboard</title>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <link rel="icon" type="image/png" sizes="80x90" href="/img/logo.png">
            <!-- Fonts -->
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'"
                rel="stylesheet">

            <!-- Styles -->
            <link href='https://unpkg.com/boxicons@2.1.1/dist/boxicons.js' rel='stylesheet'>
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
    @endif
@endauth
