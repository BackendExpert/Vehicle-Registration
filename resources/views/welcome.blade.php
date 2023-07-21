
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
            border-radius: 2px;
            width: 100%;
            padding: 20px 40px;
        }
        .green{
            background-color: rgb(12, 180, 12);
        }
        .blue{
            background: rgb(80, 80, 255);
            color:white;
        }
        .orange{
            background: orange;
        }
        .box-title{
            font-size: 28px;
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
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4"></div>
                </div>
            </div>

        </div>
    </body>

    @include('layouts.footer')

</html>
