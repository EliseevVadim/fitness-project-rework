<!doctype html>
<html lang="ru">
@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', 'GoodDiets') }}</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        <link rel="icon" href="images/logo.svg" type="image/x-icon">
    </head>
@show
<body>
    <div id="app">
        <div class="wrapper">
            <main class="main">
                @section('content')

                @show
            </main>

    @section('footer')
        <footer class="footer">
            <div class="container">
                <ul id="footer-nav" class="footer__nav">
                    <li><a href="#questions">Вопрос-ответ</a></li>
                    <li><a href="#program">Программа</a></li>
                    <li><a href="#program">Марафон</a></li>
                    <li><a href="https://goodiets.com/base" target="_blank">База</a></li>
                </ul>
                <div class="footer__social">
                    <a href="https://vk.com/goodiets">
                        <svg width="31" height="28" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M30.8357 20.4399C30.7981 20.3668 30.7631 20.3062 30.7306 20.2576C30.1928 19.3827 29.165 18.3088 27.6478 17.0355L27.6157 17.0064L27.5997 16.9921L27.5835 16.9774H27.5672C26.8786 16.3846 26.4426 15.9859 26.26 15.7818C25.9259 15.393 25.851 14.9995 26.0336 14.6008C26.1626 14.2995 26.6472 13.6633 27.4863 12.6912C27.9276 12.1761 28.2772 11.7632 28.5353 11.4521C30.397 9.21664 31.2041 7.78815 30.9565 7.16607L30.8603 7.02069C30.7957 6.93317 30.6289 6.85311 30.3602 6.78009C30.0909 6.70723 29.7467 6.69518 29.3269 6.74374L24.6786 6.77274C24.6033 6.74864 24.4958 6.75088 24.3557 6.78009C24.2158 6.8093 24.1458 6.82395 24.1458 6.82395L24.0649 6.86046L24.0007 6.90432C23.9468 6.93333 23.8877 6.98434 23.823 7.05725C23.7588 7.12991 23.705 7.21519 23.662 7.31236C23.156 8.48835 22.5806 9.58173 21.9348 10.5924C21.5366 11.1951 21.171 11.7174 20.8371 12.1597C20.5036 12.6018 20.2238 12.9275 19.998 13.1363C19.7719 13.3453 19.5678 13.5127 19.3845 13.6392C19.2015 13.7657 19.0618 13.8192 18.9651 13.7996C18.8681 13.7801 18.7768 13.7607 18.6904 13.7413C18.5399 13.6537 18.4188 13.5347 18.3275 13.3841C18.2358 13.2334 18.174 13.0439 18.1418 12.8155C18.1097 12.5869 18.0907 12.3903 18.0852 12.225C18.0802 12.06 18.0825 11.8264 18.0934 11.5252C18.1046 11.2238 18.1097 11.0198 18.1097 10.9129C18.1097 10.5435 18.1176 10.1426 18.1336 9.71015C18.1499 9.27766 18.1631 8.93499 18.1741 8.68254C18.1851 8.42984 18.1902 8.16248 18.1902 7.88062C18.1902 7.59876 18.1712 7.37771 18.1336 7.21728C18.0965 7.05705 18.0396 6.90152 17.9646 6.75073C17.8891 6.6001 17.7787 6.48358 17.6337 6.40086C17.4885 6.31824 17.3079 6.25268 17.093 6.20396C16.5227 6.08739 15.7964 6.02433 14.9139 6.01453C12.9126 5.99512 11.6266 6.11185 11.0563 6.36455C10.8304 6.47132 10.6259 6.6172 10.4431 6.80174C10.2493 7.01564 10.2223 7.13236 10.3622 7.15156C11.0079 7.23893 11.465 7.44792 11.734 7.77834L11.831 7.95343C11.9064 8.07976 11.9817 8.30341 12.0571 8.62408C12.1323 8.94474 12.1809 9.29947 12.2022 9.68804C12.2559 10.3976 12.2559 11.0051 12.2022 11.5104C12.1484 12.0159 12.0975 12.4094 12.0489 12.6913C12.0004 12.9731 11.9278 13.2015 11.831 13.3764C11.734 13.5514 11.6695 13.6583 11.6372 13.6971C11.6049 13.7359 11.578 13.7604 11.5566 13.77C11.4168 13.8184 11.2713 13.843 11.1208 13.843C10.97 13.843 10.7872 13.7749 10.572 13.6388C10.3569 13.5026 10.1337 13.3157 9.90227 13.0775C9.67089 12.8393 9.40993 12.5064 9.1193 12.0788C8.82889 11.6513 8.52758 11.1459 8.21552 10.5628L7.95733 10.1399C7.79593 9.86783 7.57546 9.4717 7.29568 8.95184C7.01573 8.43178 6.76829 7.92872 6.55318 7.44277C6.4672 7.23867 6.33802 7.08329 6.16588 6.97637L6.08509 6.93251C6.03139 6.8937 5.94518 6.8525 5.82691 6.80858C5.70847 6.76472 5.58489 6.73327 5.45566 6.71391L1.03319 6.74292C0.581266 6.74292 0.274634 6.83539 0.113178 7.02008L0.0485613 7.10745C0.0162813 7.15611 0 7.23382 0 7.3408C0 7.44772 0.03228 7.57895 0.0968966 7.73433C0.742497 9.10482 1.44457 10.4265 2.20312 11.6997C2.96168 12.9729 3.62084 13.9985 4.18023 14.7755C4.73973 15.5531 5.31003 16.287 5.89113 16.9769C6.47223 17.667 6.85687 18.1092 7.04507 18.3035C7.23349 18.4981 7.38149 18.6437 7.48908 18.7408L7.89266 19.0907C8.1509 19.324 8.53012 19.6034 9.03049 19.9289C9.53097 20.2546 10.085 20.5753 10.693 20.8914C11.3011 21.207 12.0084 21.4646 12.8156 21.6638C13.6226 21.8632 14.408 21.9432 15.1721 21.9046H17.0282C17.4047 21.8752 17.6899 21.7683 17.8837 21.5837L17.948 21.5107C17.9912 21.4527 18.0316 21.3625 18.0689 21.2413C18.1067 21.1198 18.1254 20.986 18.1254 20.8404C18.1144 20.4226 18.1496 20.046 18.2301 19.7107C18.3106 19.3755 18.4023 19.1228 18.5048 18.9526C18.6073 18.7826 18.723 18.6391 18.8517 18.5228C18.9807 18.4062 19.0726 18.3356 19.1266 18.3113C19.1801 18.2869 19.2229 18.2703 19.2552 18.2603C19.5135 18.1826 19.8174 18.2579 20.1674 18.4865C20.5172 18.7149 20.8453 18.9969 21.1521 19.332C21.4588 19.6675 21.8273 20.0439 22.2576 20.4617C22.6882 20.8797 23.0647 21.1904 23.3874 21.3948L23.7101 21.5698C23.9256 21.6865 24.2054 21.7934 24.5498 21.8906C24.8935 21.9877 25.1947 22.012 25.4534 21.9634L29.5852 21.9052C29.9938 21.9052 30.3118 21.8441 30.5374 21.7228C30.7634 21.6014 30.8977 21.4675 30.941 21.322C30.9842 21.1762 30.9865 21.0109 30.9492 20.826C30.9109 20.6417 30.8732 20.5127 30.8357 20.4399Z"
                                    fill="#464646"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="31" height="28" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="https://instagram.com/goodiets">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5034 0H6.49657C2.9143 0 0 2.9143 0 6.49657V17.5036C0 21.0857 2.9143 24 6.49657 24H17.5036C21.0857 24 24 21.0857 24 17.5036V6.49657C24 2.9143 21.0857 0 17.5034 0V0ZM12 18.5623C8.38146 18.5623 5.43767 15.6185 5.43767 12C5.43767 8.38146 8.38146 5.43767 12 5.43767C15.6185 5.43767 18.5623 8.38146 18.5623 12C18.5623 15.6185 15.6185 18.5623 12 18.5623ZM18.7192 6.98528C17.6499 6.98528 16.7801 6.11553 16.7801 5.04619C16.7801 3.97686 17.6499 3.10693 18.7192 3.10693C19.7885 3.10693 20.6585 3.97686 20.6585 5.04619C20.6585 6.11553 19.7885 6.98528 18.7192 6.98528Z"
                                fill="#464646"/>
                            <path
                                d="M12.0001 6.84473C9.15753 6.84473 6.84473 9.15734 6.84473 12.0001C6.84473 14.8426 9.15753 17.1554 12.0001 17.1554C14.8428 17.1554 17.1554 14.8426 17.1554 12.0001C17.1554 9.15734 14.8428 6.84473 12.0001 6.84473Z"
                                fill="#464646"/>
                            <path
                                d="M18.7191 4.51416C18.4258 4.51416 18.187 4.75293 18.187 5.04626C18.187 5.3396 18.4258 5.57837 18.7191 5.57837C19.0126 5.57837 19.2514 5.33978 19.2514 5.04626C19.2514 4.75275 19.0126 4.51416 18.7191 4.51416Z"
                                fill="#464646"/>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/c/Goodiet">
                        <svg width="31" height="22" viewBox="0 0 31 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M29.3112 2.70754C28.2102 1.45726 26.1776 0.947266 22.2956 0.947266H8.20411C4.2333 0.947266 2.16619 1.49016 1.06937 2.82127C0 4.1191 0 6.03136 0 8.67797V13.7224C0 18.8497 1.2688 21.453 8.20411 21.453H22.2957C25.6621 21.453 27.5275 21.003 28.7344 19.8996C29.972 18.7681 30.5 16.9207 30.5 13.7224V8.67797C30.5 5.88689 30.4173 3.96336 29.3112 2.70754ZM19.5811 11.8966L13.1822 15.0915C13.0391 15.1629 12.8827 15.1983 12.7265 15.1983C12.5496 15.1983 12.3731 15.1528 12.2167 15.0624C11.9224 14.892 11.7426 14.5872 11.7426 14.2584V7.88919C11.7426 7.56097 11.9219 7.25644 12.2156 7.08594C12.5095 6.91544 12.875 6.90379 13.1799 7.05511L19.5788 10.2294C19.9044 10.3909 20.1089 10.7119 20.1093 11.0622C20.1097 11.4128 19.9062 11.7344 19.5811 11.8966Z"
                                fill="#464646"/>
                        </svg>
                    </a>
                    <a href="https://vt.tiktok.com/ZSR8GoCKR/">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.3767 5.27179C18.9625 5.27179 16.9984 3.22229 16.9984 0.703125C16.9984 0.314758 16.6968 0 16.3246 0H12.7158C12.3438 0 12.0419 0.314758 12.0419 0.703125V16.1422C12.0419 17.6232 10.8871 18.828 9.46788 18.828C8.04863 18.828 6.894 17.6232 6.894 16.1422C6.894 14.6611 8.04863 13.4562 9.46788 13.4562C9.84007 13.4562 10.1417 13.1415 10.1417 12.7531V8.98737C10.1417 8.59918 9.84007 8.28424 9.46788 8.28424C5.31559 8.28424 1.9375 11.8094 1.9375 16.1422C1.9375 20.475 5.31559 24 9.46788 24C13.6202 24 16.9984 20.475 16.9984 16.1422V9.30817C18.3394 10.0543 19.8318 10.4438 21.3767 10.4438C21.7489 10.4438 22.0506 10.129 22.0506 9.74066V5.97491C22.0506 5.58673 21.7489 5.27179 21.3767 5.27179Z"
                                fill="#464646"/>
                        </svg>
                    </a>
                    <a href="https://t.me/goodiets">
                        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M0.959237 13.0181L6.95016 15.3401L9.26901 23.0843C9.41738 23.5803 10.0014 23.7636 10.3891 23.4345L13.7285 20.6074C14.0786 20.3112 14.5772 20.2965 14.943 20.5722L20.9661 25.1134C21.3808 25.4264 21.9684 25.1904 22.0724 24.67L26.4846 2.62985C26.5982 2.06141 26.0603 1.5872 25.5391 1.79654L0.952217 11.6462C0.345463 11.8892 0.35075 12.7813 0.959237 13.0181ZM8.8953 14.104L20.6038 6.61541C20.8142 6.48122 21.0307 6.77669 20.85 6.95075L11.1871 16.2783C10.8475 16.6067 10.6284 17.046 10.5663 17.523L10.2372 20.0561C10.1936 20.3943 9.73606 20.4279 9.64618 20.1006L8.38024 15.4813C8.23525 14.9544 8.44654 14.3917 8.8953 14.104Z"
                                    fill="#464646"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="26" height="27" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="footer__link">
                    <a href="https://docs.google.com/document/d/1c_rzgfENzcQTeQ9keB9NKU-A93BTSxcG/edit?usp=sharing&ouid=101753323313468438089&rtpof=true&sd=true">
                        Договор оферты
                    </a>
                </div>
            </div>
        </footer>
    @show
</div>

        {{--<!-- Modal  -->--}}
        <formstep></formstep>
        <buy></buy>
        {{--<!-- Modal-end -->--}}
    </div>
@section('footerScript')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@show
</body>
</html>
