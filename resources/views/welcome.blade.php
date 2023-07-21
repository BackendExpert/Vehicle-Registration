
    @include('header')

    <style>
        .home-content{
            background-image: url(https://wallpapercave.com/dwp1x/wp8825456.jpg);
            height: 80vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 200px 0;
            text-align: center;
            color: white;
        }
        .section-1{
            padding: 0;
        }
        .box{
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 20px 70px 20px 40px;     
            margin: 50px 0;       
        }
        .green{
            background-color: green;
        }
        .blue{
            background: rgb(64, 64, 248);
            color: white;
        }
        .orange{
            background: orange;
        }
        .content-title{
            font-size: 30px;
            font-weight: 500;
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
                <div class="container">
                    <h1>Welcome to Vehicle Registration</h1> 
                </div>                
            </div>

            <div class="content-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box green">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="content-title">Owners</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span style="font-size: 30px">55</span>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <i class="fas fa-users" style="font-size: 60px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box blue">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="content-title">Vehicle</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span style="font-size: 30px">55</span>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <i class="fas fa-shuttle-van" style="font-size: 60px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box orange">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="content-title">VIews</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span style="font-size: 30px">55</span>
                                    </div>
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-2">
                                        <i class="fas fa-eye" style="font-size: 60px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>                                        
                    </div>
                </div>
            </div>

            <div class="content-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content2-title"></div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>

        </div>
    </body>

    @include('layouts.footer')

</html>
