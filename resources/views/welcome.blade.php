<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <style>
            body {
    margin: 0;
    background-color: #383838;
}
.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    z-index: 99;
}

h1,
h2 {
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0;
    margin-top: 0;
    line-height: 0.8;
    text-shadow: 0 0 50px #fff;
    transform: translateZ(130px);
    -webkit-transform: translateZ(130px);
    -moz-transform: translateZ(130px);
    color: hsla(0, 0%, 0%, 0);
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    letter-spacing: 100px;
    opacity: 0;
    -webkit-animation: OpeningSequence 3.2s ease forwards;
    -moz-animation: OpeningSequence 3.2s ease forwards;
    animation: OpeningSequence 3.2s ease forwards;
}

h1 {
    font-size: 100px;
}

h2 {
    font-size: 18px;
}

#title-behind,
#title-the,
#title-lens,
#subtitle {
    letter-spacing: 0px;
    opacity: 1;
    transform: translateZ(20px);
    -webkit-transform: translateZ(20px);
    -moz-transform: translateZ(20px);
}

#title-behind {
    text-shadow: 0 0 15px #fff;
}

#title-the {
    text-shadow: 0 0 5px #fff;
}

#title-lens,
#subtitle {
    text-shadow: 0 0 0px #fff;
}

#subtitle {
    margin-top: 30px;
}

@-webkit-keyframes OpeningSequence {
    0% {
        letter-spacing: 50px;
        opacity: 0;
        transform: translateZ(130px);
        -webkit-transform: translateZ(130px);
        -moz-transform: translateZ(130px);
    }
    100% {
        letter-spacing: 5px;
        opacity: 1;
        transform: translateZ(20px);
        -webkit-transform: translateZ(20px);
        -moz-transform: translateZ(20px);
    }
}

@-moz-keyframes OpeningSequence {
    0% {
        letter-spacing: 50px;
        opacity: 0;
        transform: translateZ(130px);
        -webkit-transform: translateZ(130px);
        -moz-transform: translateZ(130px);
    }
    100% {
        letter-spacing: 5px;
        opacity: 1;
        transform: translateZ(20px);
        -webkit-transform: translateZ(20px);
        -moz-transform: translateZ(20px);
    }
}

@keyframes OpeningSequence {
    0% {
        letter-spacing: 50px;
        opacity: 0;
        transform: translateZ(130px);
        -webkit-transform: translateZ(130px);
        -moz-transform: translateZ(130px);
    }
    100% {
        letter-spacing: 5px;
        opacity: 1;
        transform: translateZ(20px);
        -webkit-transform: translateZ(20px);
        -moz-transform: translateZ(20px);
    }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="container">
                <div class="row">
                    <div class="banner-text">
                        <h1 id="title-behind">Welcome</h1>
                        <h1 id="title-the">To The</h1>
                        <h2 id="subtitle">New</h2>
                        <h1 id="title-lens">THE YUMMI PIZZA</h1>
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>
