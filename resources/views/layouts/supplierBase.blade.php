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
<body class="overflow_body">
<div id="app" class="wrapper">
    @section('header')
        <header class="header">
            <div class="container">
                <div class="header__row">
                    <nav class="header-nav" id="nav">
                        <ul class="header-nav__list">
                            <li class="header-nav__item">
                                <a href="https://goodiets.com" class="header-nav__link nav__link nav-close">
                                    Главная
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="#base-info" class="header-nav__link nav__link nav-close">
                                    Что такое база поставщиков?
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="#base-usefulness" class="header-nav__link nav__link nav-close">
                                    Чем полезна?
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="#base-program" class="header-nav__link nav__link nav-close">
                                    Какие есть базы?
                                </a>
                            </li>
                            <li class="header-nav__item">
                                <a href="#base-questions" class="header-nav__link nav__link nav-close">
                                    Частые вопросы
                                </a>
                            </li>
                            <li class="header-nav-mob">
                                <a href="#base-program" class="header-nav-mob__link link nav-close">
                                    Купить
                                </a>
                                <ul class="header-nav-mob-social__list">
                                    <li class="header-nav-mob-social__item">
                                        <a  href="https://instagram.com/goodiets" target="_blank" class="header-nav-mob-social__link nav-close">
                                            <svg class="header-nav-mob-social__svg object-fit" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_63_1223)">
                                                    <path
                                                        d="M14.1992 0H5.27018C2.36415 0 0 2.36415 0 5.27018V14.1993C0 17.1052 2.36415 19.4694 5.27018 19.4694H14.1993C17.1052 19.4694 19.4694 17.1052 19.4694 14.1993V5.27018C19.4694 2.36415 17.1052 0 14.1992 0V0ZM9.73468 15.0582C6.79924 15.0582 4.41117 12.6701 4.41117 9.73468C4.41117 6.79924 6.79924 4.41117 9.73468 4.41117C12.6701 4.41117 15.0582 6.79924 15.0582 9.73468C15.0582 12.6701 12.6701 15.0582 9.73468 15.0582ZM15.1855 5.66663C14.318 5.66663 13.6124 4.96107 13.6124 4.0936C13.6124 3.22613 14.318 2.52042 15.1855 2.52042C16.0529 2.52042 16.7587 3.22613 16.7587 4.0936C16.7587 4.96107 16.0529 5.66663 15.1855 5.66663Z"
                                                        fill="#AF00CB"/>
                                                    <path
                                                        d="M9.73468 5.55261C7.42875 5.55261 5.55255 7.42866 5.55255 9.73474C5.55255 12.0407 7.42875 13.9169 9.73468 13.9169C12.0408 13.9169 13.9168 12.0407 13.9168 9.73474C13.9168 7.42866 12.0408 5.55261 9.73468 5.55261Z"
                                                        fill="#AF00CB"/>
                                                    <path
                                                        d="M15.1855 3.66199C14.9475 3.66199 14.7538 3.85568 14.7538 4.09364C14.7538 4.3316 14.9475 4.5253 15.1855 4.5253C15.4236 4.5253 15.6173 4.33175 15.6173 4.09364C15.6173 3.85553 15.4236 3.66199 15.1855 3.66199Z"
                                                        fill="#AF00CB"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_63_1223">
                                                        <rect width="19.4694" height="19.4694" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-nav-mob-social__item">
                                        <a href="https://vk.com/goodiets" target="_blank" class="header-nav-mob-social__link nav-close">
                                            <svg class="header-nav-mob-social__svg object-fit" width="26" height="24"
                                                 viewBox="0 0 26 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_63_1218)">
                                                    <path
                                                        d="M25.484 17.1735C25.4536 17.1121 25.4252 17.0612 25.3988 17.0204C24.9625 16.2853 24.1287 15.383 22.8979 14.3132L22.8719 14.2887L22.8589 14.2767L22.8457 14.2644H22.8325C22.274 13.7662 21.9202 13.4313 21.7721 13.2598C21.5011 12.9332 21.4403 12.6025 21.5885 12.2675C21.6931 12.0144 22.0862 11.4798 22.7669 10.6631C23.1249 10.2303 23.4085 9.88338 23.6179 9.62203C25.1281 7.74379 25.7829 6.54357 25.582 6.0209L25.504 5.89876C25.4516 5.82522 25.3163 5.75795 25.0983 5.6966C24.8798 5.63538 24.6006 5.62526 24.2601 5.66606L20.4892 5.69043C20.4282 5.67018 20.3409 5.67206 20.2273 5.6966C20.1138 5.72114 20.057 5.73346 20.057 5.73346L19.9914 5.76413L19.9393 5.80098C19.8956 5.82535 19.8476 5.86821 19.7952 5.92948C19.7431 5.99052 19.6994 6.06217 19.6646 6.14381C19.254 7.13188 18.7873 8.05054 18.2634 8.89973C17.9404 9.4061 17.6438 9.84494 17.3729 10.2165C17.1024 10.588 16.8754 10.8616 16.6922 11.0371C16.5088 11.2127 16.3432 11.3533 16.1946 11.4596C16.0461 11.5659 15.9328 11.6108 15.8543 11.5944C15.7757 11.578 15.7016 11.5617 15.6315 11.5454C15.5094 11.4718 15.4111 11.3718 15.3371 11.2453C15.2627 11.1187 15.2126 10.9594 15.1864 10.7675C15.1604 10.5755 15.1449 10.4103 15.1405 10.2714C15.1365 10.1327 15.1383 9.93654 15.1472 9.68342C15.1563 9.43017 15.1604 9.25882 15.1604 9.16899C15.1604 8.85863 15.1668 8.52181 15.1798 8.15843C15.193 7.79506 15.2037 7.50714 15.2126 7.29504C15.2215 7.08272 15.2257 6.85808 15.2257 6.62127C15.2257 6.38445 15.2102 6.19873 15.1798 6.06393C15.1497 5.9293 15.1035 5.79862 15.0427 5.67194C14.9815 5.54538 14.8918 5.44747 14.7743 5.37797C14.6564 5.30856 14.51 5.25347 14.3356 5.21254C13.873 5.1146 13.2838 5.06162 12.5679 5.05338C10.9444 5.03708 9.90116 5.13515 9.43852 5.34747C9.25522 5.43718 9.08934 5.55975 8.94103 5.71479C8.78387 5.89451 8.76194 5.99258 8.8754 6.00871C9.39922 6.08212 9.77005 6.25772 9.9883 6.53533L10.0669 6.68244C10.1281 6.78858 10.1892 6.97649 10.2503 7.24591C10.3114 7.51534 10.3508 7.81338 10.3681 8.13986C10.4117 8.73606 10.4117 9.24642 10.3681 9.67098C10.3244 10.0957 10.2831 10.4263 10.2437 10.6632C10.2043 10.9 10.1455 11.0919 10.0669 11.2388C9.9883 11.3858 9.93597 11.4756 9.90974 11.5082C9.88355 11.5409 9.86172 11.5614 9.84439 11.5695C9.73093 11.6101 9.61293 11.6309 9.4908 11.6309C9.36849 11.6309 9.22018 11.5736 9.04564 11.4593C8.87114 11.3449 8.69003 11.1878 8.50233 10.9877C8.31462 10.7875 8.10293 10.5079 7.86716 10.1486C7.63158 9.78934 7.38714 9.36475 7.13399 8.87481L6.92454 8.5195C6.79361 8.29091 6.61476 7.95808 6.38779 7.5213C6.16069 7.08435 5.95996 6.66168 5.78546 6.25338C5.71571 6.0819 5.61092 5.95136 5.47127 5.86152L5.40574 5.82467C5.36217 5.79206 5.29223 5.75744 5.19629 5.72054C5.10021 5.68369 4.99996 5.65726 4.89513 5.641L1.30751 5.66537C0.940898 5.66537 0.692151 5.74307 0.561173 5.89824L0.508755 5.97165C0.482568 6.01253 0.46936 6.07783 0.46936 6.16771C0.46936 6.25754 0.495547 6.3678 0.547965 6.49835C1.07169 7.64983 1.64123 8.76035 2.25659 9.83006C2.87195 10.8998 3.40668 11.7615 3.86047 12.4143C4.31435 13.0677 4.77699 13.6843 5.24839 14.2639C5.71979 14.8437 6.03182 15.2153 6.18449 15.3785C6.33735 15.5421 6.45741 15.6643 6.54468 15.746L6.87208 16.0399C7.08157 16.2359 7.3892 16.4707 7.79511 16.7442C8.20112 17.0179 8.65059 17.2873 9.14378 17.5529C9.63705 17.8181 10.2109 18.0345 10.8657 18.2018C11.5203 18.3693 12.1575 18.4366 12.7773 18.4041H14.2831C14.5885 18.3795 14.8198 18.2896 14.9771 18.1346L15.0292 18.0732C15.0642 18.0245 15.097 17.9487 15.1273 17.8468C15.1579 17.7448 15.1731 17.6323 15.1731 17.51C15.1642 17.159 15.1928 16.8426 15.2581 16.5609C15.3233 16.2793 15.3977 16.0669 15.4809 15.9239C15.5641 15.7811 15.6579 15.6605 15.7623 15.5628C15.867 15.4649 15.9415 15.4055 15.9853 15.3851C16.0288 15.3646 16.0635 15.3506 16.0897 15.3422C16.2992 15.2769 16.5457 15.3402 16.8297 15.5323C17.1134 15.7242 17.3795 15.9611 17.6285 16.2427C17.8773 16.5246 18.1762 16.8408 18.5253 17.1919C18.8746 17.5431 19.18 17.8041 19.4418 17.9759L19.7036 18.1228C19.8784 18.2209 20.1054 18.3107 20.3847 18.3924C20.6636 18.474 20.908 18.4944 21.1178 18.4536L24.4696 18.4047C24.8011 18.4047 25.0591 18.3533 25.242 18.2515C25.4254 18.1494 25.5343 18.0369 25.5694 17.9146C25.6045 17.7922 25.6064 17.6533 25.5761 17.498C25.545 17.3431 25.5145 17.2347 25.484 17.1735Z"
                                                        fill="#AF00CB"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_63_1218">
                                                        <rect width="25.148" height="23.5255" fill="white"
                                                              transform="translate(0.46936)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-nav-mob-social__item">
                                        <a href="https://www.youtube.com/c/Goodiet" target="_blank" class="header-nav-mob-social__link nav-close">
                                            <svg class="header-nav-mob-social__svg object-fit" width="26" height="18"
                                                 viewBox="0 0 26 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9684 1.46239C24.0538 0.423694 22.3651 0 19.14 0H7.4331C4.13424 0 2.41693 0.451025 1.50572 1.55688C0.61731 2.63509 0.61731 4.22375 0.61731 6.4225V10.6133C0.61731 14.873 1.6714 17.0357 7.4331 17.0357H19.1401C21.9368 17.0357 23.4866 16.6618 24.4892 15.7452C25.5174 14.8052 25.956 13.2704 25.956 10.6133V6.4225C25.956 4.10373 25.8873 2.5057 24.9684 1.46239ZM16.8849 9.09647L11.5688 11.7507C11.4499 11.81 11.32 11.8395 11.1902 11.8395C11.0432 11.8395 10.8966 11.8017 10.7667 11.7266C10.5221 11.585 10.3728 11.3318 10.3728 11.0586V5.7672C10.3728 5.49452 10.5217 5.24152 10.7658 5.09988C11.01 4.95823 11.3136 4.94855 11.5669 5.07426L16.883 7.71138C17.1535 7.84554 17.3233 8.11228 17.3237 8.40331C17.324 8.69457 17.1549 8.9617 16.8849 9.09647Z"
                                                    fill="#AF00CB"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-nav-mob-social__item">
                                        <a href="https://vt.tiktok.com/ZSR8GoCKR/" target="_blank" class="header-nav-mob-social__link nav-close">
                                            <svg class="header-nav-mob-social__svg object-fit" width="22" height="21"
                                                 viewBox="0 0 22 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_63_1227)">
                                                    <path
                                                        d="M19.3645 4.4548C17.2357 4.4548 15.5038 2.72292 15.5038 0.594159C15.5038 0.265979 15.2378 0 14.9097 0H11.7275C11.3995 0 11.1333 0.265979 11.1333 0.594159V13.6406C11.1333 14.892 10.1151 15.9101 8.86363 15.9101C7.61218 15.9101 6.59406 14.892 6.59406 13.6406C6.59406 12.389 7.61218 11.3709 8.86363 11.3709C9.19181 11.3709 9.45779 11.1049 9.45779 10.7767V7.59455C9.45779 7.26653 9.19181 7.00039 8.86363 7.00039C5.20228 7.00039 2.22359 9.97923 2.22359 13.6406C2.22359 17.3019 5.20228 20.2806 8.86363 20.2806C12.525 20.2806 15.5038 17.3019 15.5038 13.6406V7.86564C16.6863 8.49616 18.0022 8.82527 19.3645 8.82527C19.6926 8.82527 19.9586 8.55929 19.9586 8.23111V5.04896C19.9586 4.72093 19.6926 4.4548 19.3645 4.4548Z"
                                                        fill="#AF00CB"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_63_1227">
                                                        <rect width="20.2806" height="20.2806" fill="white"
                                                              transform="translate(0.956055)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="header-nav-mob-social__item">
                                        <a href="https://t.me/goodiets" target="_blank" class="header-nav-mob-social__link nav-close">
                                            <svg class="header-nav-mob-social__svg object-fit" width="19" height="21"
                                                 viewBox="0 0 19 21" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M-3.3621 9.95154L1.87172 11.905L3.89753 18.42C4.02716 18.8372 4.53739 18.9915 4.87606 18.7146L7.79349 16.3362C8.0993 16.0871 8.53488 16.0746 8.85447 16.3066L14.1165 20.1269C14.4788 20.3903 14.992 20.1917 15.0829 19.754L18.9376 1.21222C19.0368 0.734012 18.5669 0.335074 18.1115 0.511185L-3.36824 8.79743C-3.89831 9.00186 -3.89369 9.75234 -3.3621 9.95154ZM3.57105 10.8651L13.7999 4.56516C13.9837 4.45226 14.1729 4.70084 14.015 4.84727L5.57324 12.6943C5.27652 12.9705 5.08511 13.3401 5.0309 13.7413L4.74334 15.8724C4.70525 16.1569 4.30556 16.1852 4.22704 15.9098L3.12108 12.0238C2.99441 11.5805 3.179 11.1071 3.57105 10.8651Z"
                                                    fill="#AF00CB"/>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
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
                            <a href="https://vk.com/goodiets" target="_blank" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-vk.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://instagram.com/goodiets" target="_blank" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-inst.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://www.youtube.com/c/Goodiet" target="_blank" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-youtube.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://vt.tiktok.com/ZSR8GoCKR/" target="_blank" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-tik-tok.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="https://t.me/goodiets" target="_blank" class="footer__social">
                                <img class="object-fit"
                                     src="{{ ('images/icons/base-telegram.svg') }}"
                                     alt="#">
                            </a>
                        </li>
                    </ul>
                    <a href="https://drive.google.com/drive/folders/1-JSoiF_RaGaQh7dnFXihzfnf4oZERUls" target="_blank" class="footer__link">
                        Договор оферты
                    </a>
                </div>
            </div>
        </footer>
    @show
</div>
<div class="loader">
    <div class="loader__dot"></div>
    <div class="loader__dot"></div>
    <div class="loader__dot"></div>
</div>
@section('footerScript')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/modal-box.min.js') }}"></script>
    <script src="{{ asset('js/supplierBase.js') }}"></script>
@show
</body>
</html>
