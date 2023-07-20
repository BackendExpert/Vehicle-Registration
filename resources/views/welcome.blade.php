
    @include('header')

    <style>
        .home-content{
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFH52NdAGrd-X_R0Ca-K7jtZkICsFusBUTC8C-RDyLy6VfDqXGF8Kc1CHZg2zkGJ1SntQ&usqp=CAU);
            height: 100vh;
        }
    </style>

    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="main-content">
                    <div class="container text-center main-btns">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-3 btn-login">
                                @auth
                                    <a href="{{ url('/home') }}"><button class="login-btn">Home</button></a>
                                @else
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <a href="{{ route('login') }}" ><button class="login-btn">Login</button></a>
                                </div>
                                @endauth
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            @endif             --}}

            <div class="home-content">
                hi 
            </div>

        </div>



    </body>
</html>
