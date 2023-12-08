<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('/public/img/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('/public/library.general/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.general/config.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.general/theme1.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/general.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/css.landing/footer.css') }}">
    @yield('head')
    <title>
        {{ $info->info_name }}
        -
        @yield('title')
    </title>
</head>

<body class="scroll-style">
    <header>
        <div class="header">
            <div class="container">

                <button class="menu" id="el-burger-btn">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('/public/img/logo.png') }}" alt="logo">
                    </a>
                </div>

                <nav class="scroll-style">
                    <ul>
                        <li class="{{ Route::is('home') ? 'active' : '' }}">
                            <a href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="{{ Route::is('services') ? 'active' : '' }}">
                            <a href="{{ route('services') }}">Services</a>
                            <div class="sublist">
                                <ul>
                                    @foreach ($services as $service)
                                        <li>
                                            <a href="{{ $service->service_url }}">{{ $service->service_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        {{-- 
                            <li>
                            <a href="#">Weddings</a>
                            <div class="sublist">
                                <ul>
                                    <li>
                                        <a href="#">Engagement Sessions</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Quinces | Sweet 16's</a>
                            <div class="sublist">
                                <ul>
                                    <li>
                                        <a href="#">Pre Event Photo Shoot</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Portraits</a>
                            <div class="sublist">
                                <ul>
                                    <li>
                                        <a href="#">Creative Head Shoot</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li>
                            <a href="#">Products</a>
                            <div class="sublist">
                                <ul>
                                    <li>
                                        <a href="#">Multi-Camera Video</a>
                                    </li>
                                    <li>
                                        <a href="#">Video Cinematico</a>
                                    </li>
                                    <li>
                                        <a href="#">Drone</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Expo</a>
                        </li>
                        <li>
                            <a href="#">Vimage360</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    <main>
        @yield('content')
    </main>


    <footer>
        <div class="container">
            <div class="col col-1">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('/public/img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <b>Follow Us</b>
                <div class="social">
                    @foreach ($contacts as $contact)
                        <a href="{{ $contact->contact_link }}" target="_blank">
                            <i class="{{ $contact->contact_icon }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="col col-2">
                <h3>Services</h3>
                <ul>
                    @foreach ($services as $service)
                        <li>
                            <a href="{{ $service->service_url }}">{{ $service->service_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col col-3">
                <h3>Company</h3>
                <ul>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Expo</a>
                    </li>
                    <li>
                        <a href="#">Vimage360</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="{{ asset('/public/library.general/fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('/public/js.landing/general.js') }}"></script>
</body>

</html>
