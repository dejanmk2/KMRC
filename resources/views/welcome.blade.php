<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Квиско</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image:url('{{ asset('images/pozadina2.png') }}');
                background-size: cover;
                background-attachment: fixed;
                color: white;
                font-family: 'Roboto', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 18px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .dugmeReg {
               background-color: white;
               border: 2px solid #008CBA;
               color: black;
               padding: 16px 32px;
               text-align: center;
               text-decoration: none;
               display: inline-block;
               font-size: 16px;
               margin: 4px 2px;
               -webkit-transition-duration: 0.4s; /* Safari */
               transition-duration: 0.4s;
               cursor: pointer;
            }

            .dugmeReg:hover {
                background-color: #008CBA;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Почетна</a>
                    @else
                        <a href="{{ url('/login') }}">Пријава</a>
                        <a href="{{ url('/register') }}">Регистрaција</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Квиско
                </div>
                <div class="title с-b-md" style="font-size:25px">
                    Тестирајте своје знање!<br><br>
                    <a href="{{ url('/register') }}">
                      <button class="dugmeReg">Региструј се</button>
                    </a>
                </div>

              <!--  <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
