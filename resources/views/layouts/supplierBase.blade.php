<!doctype html>
<html lang="ru">
@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'GoodDiets') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800;900&display=swap"
              rel="stylesheet">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="{{mix('/css/modal-box.min.css')}}">
        <link rel="stylesheet" href="{{mix('/css/supplierBase.css')}}">
        <link rel="icon" href="images/logo.svg" type="image/x-icon">
    </head>
@show
<body>
<div class="wrapper">
    @section('header')
        <header class="header">
            <div class="container">
                <div class="header__row">
                    <nav class="header-nav" id="nav">
                        <ul class="header-nav__list">
                            <li class="header-nav__item ">
                                <a href="#base-main" class="header-nav__link nav__link">
                                    Главная
                                </a>
                            </li>
                            <li class="header-nav__item ">
                                <a href="#base-info" class="header-nav__link nav__link">
                                    Что такое база поставщиков?
                                </a>
                            </li>
                            <li class="header-nav__item ">
                                <a href="#base-usefulness" class="header-nav__link nav__link">
                                    Чем полезна?
                                </a>
                            </li>
                            <li class="header-nav__item ">
                                <a href="#base-program" class="header-nav__link nav__link">
                                    Какие есть базы?
                                </a>
                            </li>
                            <li class="header-nav__item ">
                                <a href="#base-questions" class="header-nav__link nav__link">
                                    Частые вопросы
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__burger">
                        <span class="header__burger-line"></span>
                    </div>
                </div>
            </div>
        </header>
    @show
    <main>
        @section('content')

        @show
    </main>
    @section('footer')
        <footer id="footer" class="footer">
            <div class="container">
                <div class="footer__row">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-vk.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-inst.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-youtube.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-tik-tok.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-telegram.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                    </ul>
                    <a href="" class="footer__link">
                        Договор оферты
                    </a>
                </div>
            </div>
        </footer>
    @show
</div>
@section('footerScript')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/modal-box.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@show
</body>
</html>
