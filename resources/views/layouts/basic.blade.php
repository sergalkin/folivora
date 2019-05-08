<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home page</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
          integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<header id="header">
    <figure class="logo">
        <svg version="1.1" id="layer1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 1080.1 129.2" style="enable-background:new 0 0 1080.1 129.2;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        stroke-width: 3px;
                        stroke-miterlimit: 10;
                    }

                    .st1 {
                        font-family: 'Tele-Marines';
                    }

                    .st2 {
                        font-size: 150px;
                    }
                </style>
            <text transform="matrix(1 0 0 1 3 99.2381)" class="st0 st1 st2 st3">Folivora</text>
            </svg>
    </figure>
    <nav>
        <ul>
            <li><a href="#">Проекты</a></li>
            <li><a href="#">Блог</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">О нас</a></li>
        </ul>
    </nav>
    <figure class="icons">
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-discord"></i></a>
        <a href="#"><i class="fab fa-vk"></i></a>
    </figure>
    <div class="search">
        <form action="#" method="POST">
            @csrf
            <input type="text" placeholder="Искать тут" class="input-search">
        </form>
    </div>
    <div class="authorisation">
        <div class="nav-divider"></div>
        @auth
            <figure class="user-image">
                <img src="{{asset('images/user.png')}}" alt="">
            </figure>
            <p class="user-name">{{Auth::user()->name}}</p>
            <ul class="user-menu" style="margin-right: 0">
                <li class="drop-down">
                    <a href="javascript:void(0);" class="drop-btn"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="drop-down-content">
                        <a href="#">Профиль</a>
                        <a href="#">Тест</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="drop-down-btn">Выйти</button>
                        </form>
                    </div>
                </li>
            </ul>
            <div class="extra-div"></div>
        @else
            <a href="{{route('login')}}" class="auth-btn">Войти</a>
            <a href="{{route('register')}}" class="auth-btn">Регистрация</a>
        @endauth
    </div>
    <div class="mobile-menu">
        <span class="span-mob">Меню<i class="fas fa-bars"></i></span>
        <nav class="nav-mobile">
            <div class="mobile-search">
                <input type="text" class="mobile-search-input" placeholder="Что ищем....?">
                <span class="cross-mobile"><i class="fas fa-times"></i></span>
            </div>
            <ul class="ul-mobile">
                <div class="user-mobile">
                    @auth
                        <div class="user-card-mobile">
                            <figure class="user-image-mobile">
                                <img src="{{asset('images/image1.png')}}" alt="">
                            </figure>
                            <p class="user-name-mobile">Привет, <span
                                        class="user-name-mobile">{{Auth::user()->name}}</span></p>
                        </div>
                        <div class="user-links-mobile">
                            <a href="#">Профиль<span><i class="fas fa-angle-right"></i></span></a>
                            <a href="#">Тест<span><i class="fas fa-angle-right"></i></span></a>
                        </div>
                    @endauth
                    @guest
                        <a href="{{route('login')}}" class="auth-btn">Войти<span><i
                                        class="fas fa-angle-right"></i></span></a>
                        <a href="{{route('register')}}" class="auth-btn">Регистрация<span><i
                                        class="fas fa-angle-right"></i></span></a>
                    @endguest
                </div>
                <div class="nav-list">
                    <li><a href="#">Проекты<span><i class="fas fa-angle-right"></i></span></a></li>
                    <li><a href="#">Блог<span><i class="fas fa-angle-right"></i></span></a></li>
                    <li><a href="#">Контакты<span><i class="fas fa-angle-right"></i></span></a></li>
                    <li><a href="#">О нас<span><i class="fas fa-angle-right"></i></span></a></li>
                </div>
                @auth
                    <div class="logout-mobile">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="button-blog">Выйти</button>
                        </form>
                    </div>
                @endauth
            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="wrapper">
        @yield('content')
    </div>
</main>
<div class="scroll-up-button" hidden>&#8673;</div>
<div class="progress-container">
    <div class="progress-bar" id="how-much-read"></div>
</div>
<footer>
    <div class="box">
        <div class="copy-right"> &#169; 2018 год, FOLIVORA</div>
        <div class="bottom-social">
            <figure class="icons">
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-discord"></i></a>
                <a href="#"><i class="fab fa-vk"></i></a>
            </figure>
        </div>
    </div>
</footer>
</body>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="{{asset('js/functions.js')}}"></script>
</html>
