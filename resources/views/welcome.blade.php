
    @include('header')

    <style>
        .home-content{
            background-image: url(https://wallpapercave.com/dwp1x/wp8825456.jpg);
            height: 80vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 200px;
            text-align: center;
            color: white;
        }
        .section-1{
            padding: 40px 0;
        }
        .box{
            border: none;
            border-radius: 2px;
        }
        .green{
            background-color: green;
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
                <h1>Welcome to Vehicle Registration</h1> 
            </div>
            <div class="container">
                <div class="section-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box green">
                                <div class="row">
                                    <div class="col-lg-4" style="padding-top: 18px; font-size: 50px;" >
                                        Vehicle Owners
                                    </div>
                                    <div class="col-lg-4" style="text-align: right;">
                                        <span style="font-size: 50px">55</span>
                                    </div>
                                    <div class="col-lg-4" style="text-align: left;">
                                        <i class="fas fa-shuttle-van" style="font-size: 50px; padding-top: 18px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="row">
                                    <div class="col-lg-6">
                                        Vehicle Owners
                                    </div>
                                    <div class="col-lg-6">
                                        <i class="fas fa-shuttle-van"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        55
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box">
                                <div class="row">
                                    <div class="col-lg-6">
                                        Vehicle Owners
                                    </div>
                                    <div class="col-lg-6">
                                        <i class="fas fa-shuttle-van"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        55
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>

    @include('layouts.footer')

</html>
