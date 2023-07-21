@include('header')

<style>
    .home-content {
        background-image: url(https://wallpapercave.com/dwp1x/wp8825456.jpg);
        height: 80vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 200px 0;
        text-align: center;
        color: white;
    }

    .section-1 {
        padding: 0;
    }

    .box {
        border: none;
        border-radius: 5px;
        width: 100%;
        padding: 20px 70px 20px 40px;
        margin: 50px 0;
    }

    .green {
        background-color: green;
    }

    .blue {
        background: rgb(64, 64, 248);
        color: white;
    }

    .orange {
        background: orange;
    }

    .content-title {
        font-size: 30px;
        font-weight: 500;
    }

    .latest-update {
        background: orange;
    }

    .features {
        background: green;
    }

    .content2-title {
        font-size: 35px;
        font-weight: 500;
        padding: 35px 20px;
    }

    .conetent2-body {
        padding: 40px 20px;
    }
    .btn-login{
        margin-top: 20px;
        padding: 15px 35px;
        border: 2px solid orange;
        border-radius: 5px;
        background: transparent;
        color: orange;
        transition: 0.5s;
    }
    .btn-login:hover{
        cursor: pointer;
        color: black;
        background: orange;
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
            <a href="{{ route('login') }}"><button class="btn-login">Loging Here</button></a>
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
            <div class="col-lg-6 latest-update">
                <div class="container">
                    <div class="content2-title">
                        Latest Updates
                    </div>
                    <div class="conetent2-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quas architecto illo asperiores
                        explicabo neque illum modi, tenetur velit libero cum soluta quam voluptatem iusto maxime iure
                        minima, corrupti accusamus!
                        Cum unde vel accusantium illum id suscipit sunt? Magnam numquam est nostrum qui porro quae
                        exercitationem id, minus saepe ea aspernatur adipisci odio animi, doloremque dolorem! Molestiae
                        cupiditate assumenda perspiciatis.
                        Debitis repellendus vitae incidunt placeat quo fugiat omnis consequatur assumenda veritatis, at
                        velit earum vero unde possimus recusandae voluptatibus cum reiciendis numquam illum mollitia ad?
                        Omnis rem similique at totam.
                        Harum, maxime vitae necessitatibus saepe magnam suscipit doloremque eveniet accusantium
                        laudantium? Cupiditate possimus blanditiis quam adipisci distinctio alias neque aliquam qui,
                        unde ut earum sit tempore deserunt repudiandae, maiores beatae!
                        Vitae libero aliquid dolor, eaque molestiae amet voluptates quaerat, a doloribus esse, aliquam
                        ut similique maiores? Enim dolorem iste quae cum quam officia laboriosam? Quod eum consequatur
                        repudiandae maiores dolore.
                    </div>
                </div>
            </div>
            <div class="col-lg-6 features">
                <div class="container">
                    <div class="content2-title">
                        Site Features
                    </div>
                    <div class="conetent2-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quibusdam est ducimus saepe odit
                        repudiandae eveniet tenetur dolorem molestias sed nisi illo, doloremque, dignissimos
                        perspiciatis ratione. Ex magni hic dolores!
                        Modi accusantium in natus quae eaque omnis quas aliquid officia aspernatur aperiam et culpa
                        vitae itaque, magni quo nesciunt corrupti ipsa perferendis facere accusamus, eum vel minus
                        sapiente. Voluptates, tenetur.
                        Iste, impedit quaerat. Inventore nulla numquam nesciunt. Illo laboriosam quasi, natus officiis
                        voluptates fugiat aliquid, sint, ea perspiciatis cumque ab incidunt omnis! Voluptatem facere
                        impedit ad cumque aperiam, quis provident!
                        Voluptates hic quis dicta exercitationem doloribus? Reprehenderit praesentium officia, maiores
                        quidem dolore alias at veritatis, eos ad, nihil molestiae. Autem quam, similique voluptatem
                        dolorum error vel earum est dolor! Est.
                        Fugit amet ab iste, natus odio quasi repellendus voluptatem. Sequi, temporibus iure. Quisquam
                        magni repudiandae assumenda facere vitae odio nam rem accusamus aliquid cum placeat porro
                        repellendus laborum, laboriosam delectus.
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

@include('layouts.footer')

</html>
