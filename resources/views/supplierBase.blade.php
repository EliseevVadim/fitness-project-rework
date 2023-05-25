@extends('layouts/supplierBase')

@section('content')
    <section id="base-main" class="base-main">
        <div class="base-main__line"></div>
        <div class="base-main__circle"></div>
        <div class="container base-main__container">
            <div class="base-main__row">
                <img class="base-main__img base-main__img_Lyosha" src="{{ ('images/Lyosha.png') }}">
                <img class="base-main__img base-main__img_Lyuba" src="{{ ('images/Lyuba.png') }}">
                <div class="base-main__col">
                    <img class="base-main__title" src="{{ ('images/base-main__title.png') }}">
                    <div class="base-main__caption">
                        Здесь собран самый большой список
                        контактов проверенных поставщиков всевозможных товаров!
                    </div>
                    <ul class="base-main__list">
                        <li class="base-main__item">
                            <img class="object-fit" src="{{ ('images/base-main__svg1.png') }}">
                        </li>
                        <li class="base-main__item">
                            <img class="object-fit" src="{{ ('images/base-main__svg2.png') }}">
                        </li>
                        <li class="base-main__item">
                            <img class="object-fit" src="{{ ('images/base-main__svg3.png') }}">
                        </li>
                        <li class="base-main__item">
                            <img class="object-fit" src="{{ ('images/base-main__svg4.png') }}">
                        </li>
                    </ul>
                </div>
                <div class="base-main__col">
                    <div class="base-main__parallelogram">
                        <p>
                            С помощью нашей базы <br>Вы сможете заказывать эксклюзивные вещи и, самое главное, экономить
                            Ваш
                            семейный бюджет!
                        </p>
                    </div>
                    <div class="base-main-card">
                        <div class="base-main-card__head">
                            Кроме этого, Вы сможете открыть
                            свой магазин и получать достойную прибыль благодаря нашей базе!
                        </div>
                        <ul class="base-main-card__list">
                            <li class="base-main-card__item">
                                1500+
                                <small class="base-main-card__small">
                                    поставщиков
                                </small>
                            </li>
                            <li class="base-main-card__item">
                                100к+
                                <small class="base-main-card__small">
                                    товаров
                                </small>
                            </li>
                            <li class="base-main-card__item">
                                7
                                <small class="base-main-card__small">
                                    чатов
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="base-info" class="base-info">
        <div class="container">
            <div class="base-info__wrap">
                <h5 class="base-info__subtitle">
                    Что такое
                </h5>
                <h2 class="base-info__title">
                    база поставщиков?
                </h2>
                <div class="base-info__text">
                    <b>
                        База — это огромный список контактов поставщиков из стран СНГ
                        и всего МИРА!
                    </b>
                    <p>
                        В нашей базе собраны продавцы и производители, осуществляющие торговлю в розницу и оптом,
                        благодаря
                        этому Вы сможете заказывать множество качественных товаров ПО СЕБЕСТОИМОСТИ!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="base-usefulness" class="base-usefulness">
        <div class="container">
            <div class="base-usefulness__wrap">
                <h2 class="base-usefulness__title">
                    ЧЕМ ПОЛЕЗНА БАЗА ПОСТАВЩИКОВ?
                </h2>
                <ul class="base-usefulness__grid">
                    <li class="base-usefulness__item">
                        <div class="base-usefulness__content">
                            <h3 class="base-usefulness__subtitle title_purple">
                                Экономия семейного бюджета
                            </h3>
                            <div class="base-usefulness__text">
                                <p>
                                    В среднем одна семья может экономить до 60% семейного бюджета, закупая товары
                                    <b>БЕЗ НАЦЕНОК </b> напрямую у поставщиков из нашей базы!
                                </p>
                            </div>
                            <img class="base-usefulness__svg" src="{{ ('images/icons/base-usefulness1.svg') }}">
                        </div>
                    </li>
                    <li class="base-usefulness__item">
                        <div class="base-usefulness__content">
                            <h3 class="base-usefulness__subtitle title_purple">
                                легкая прибыль
                            </h3>
                            <div class="base-usefulness__text">
                                <p>
                                    Вы можете получать достойный <b>дополнительный доход</b> на перепродаже товаров
                                    с Вашей
                                    наценкой!
                                </p>
                                <p>
                                    <b>Дропшиппинг - система перепродажи товаров без собственного склада.</b>
                                    Находите покупателя, оформляете заказ у поставщика, делаете наценку на товар,
                                    разницу в цене (Ваша прибыль) забираете себе,
                                    а поставщик направляет товар Вашему покупателю.
                                </p>
                            </div>
                            <img class="base-usefulness__svg" src="{{ ('images/icons/base-usefulness2.svg') }}">
                        </div>
                    </li>
                    <li class="base-usefulness__item">
                        <div class="base-usefulness__content">
                            <h3 class="base-usefulness__subtitle title_purple">
                                свой магазин
                            </h3>
                            <div class="base-usefulness__text">
                                <p>
                                    Обладатели Бизнес базы получают не только контакты поставщиков, а также
                                    подробные гайды по выходу
                                    на <b>МАРКЕТПЛЕЙСЫ</b> и созданию вашего личного
                                    онлайн <b>МАГАЗИНА!</b>
                                </p>
                            </div>
                            <img class="base-usefulness__svg" src="{{ ('images/icons/base-usefulness3.svg') }}">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="base-program" class="base-program">
        <div class="container">
            <h2 class="base-program__title">
                КАКИЕ ЕСТЬ БАЗЫ?
            </h2>
            @foreach($supplierBases as $supplierBase)
                <supplier-base-buy-modal :supplier-base="{{ json_encode($supplierBase) }}"></supplier-base-buy-modal>
            @endforeach
            <div class="base-program__swiper swiper">
                <div class="swiper-wrapper">
                    <script type="application/javascript">
                        function startTimer1(duration) {
                            var timer = duration, hours, minutes, seconds;
                            setInterval(function () {
                                hours = parseInt(timer / 3600, 10);
                                minutes = parseInt((timer - hours * 3600) / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                hours = hours < 10 ? "0" + hours : hours;
                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                document.getElementById("supplierBase_time" + 1).innerHTML =
                                    hours + ":" + minutes + ":" + seconds;

                                if (--timer < 0) {
                                    timer = duration;
                                }
                            }, 1000);
                        }

                        startTimer1(7200); // Запускаем таймер на два часа
                        function startTimer2(duration) {
                            var timer = duration, hours, minutes, seconds;
                            setInterval(function () {
                                hours = parseInt(timer / 3600, 10);
                                minutes = parseInt((timer - hours * 3600) / 60, 10);
                                seconds = parseInt(timer % 60, 10);

                                hours = hours < 10 ? "0" + hours : hours;
                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;

                                document.getElementById("supplierBase_time" + 2).innerHTML =
                                    hours + ":" + minutes + ":" + seconds;

                                if (--timer < 0) {
                                    timer = duration;
                                }
                            }, 1000);
                        }

                        startTimer2(25200); // Запускаем таймер на семь часов
                    </script>
                    @foreach($supplierBases as $supplierBase)
                        <div class="base-program__slide swiper-slide">
                            <div id="{{'supplierBase' . $supplierBase->base_type_id}}" class="base-program__content">
                                <div class="base-program-head">
                                    <div class="base-program-head__timer">
                                        <div class="base-program-head__description">
                                            Окончание акции
                                        </div>
                                        <div class="base-program-head__time">
                                            <div id="{{'supplierBase_time' . $supplierBase->base_type_id}}"></div>
                                        </div>
                                    </div>
                                    <h2 class="base-program-head__title">
                                        {{$supplierBase->name}}
                                    </h2>
                                    @if ($supplierBase->base_type_id == 1)
                                        <img class="base-program-head__img"
                                             src="{{ ('images/base-program-head__img.png') }}"
                                             alt="#">
                                    @elseif ($supplierBase->base_type_id == 2)
                                        <div class="base-program-head__img_group">
                                            <img class="base-program-head__img_base"
                                                 src="{{ ('images/base-program-head__img2.png') }}"
                                                 alt="#">
                                            <div class="base-program-head__img_money">
                                                <img class="base-program-head__img_money_img"
                                                     src="{{ ('images/money.png') }}"
                                                     alt="#">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="base-program-body">
                                    <ul class="base-program-body__list">
                                        @if ($supplierBase->base_type_id == 1)
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/icon-park-outline_clothes-windbreaker.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Женская/мужская одежда, белье, обувь, сумки
                                                    и аксессуары;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/icon-park-outline_lipstick.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Косметика, уходовые средства и оригинальная парфюмерия;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/tabler_horse-toy.svg') }}" alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Одежда для детей и игрушки;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/maki_garden-centre.svg') }}" alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Товары для дома, дачи и сада;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/icon-park-outline_sport.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Товары для спорта, туризма и охоты;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/bi_car-front.svg') }}" alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Товары для авто и гаража;
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/fluent-emoji-high-contrast_strawberry.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Товары для взрослых (18+);
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/mdi_basket-fill.svg') }}" alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Зоотовары, канцелярия, товары для беременных и многое другое!
                                                </div>
                                            </li>
                                        @elseif ($supplierBase->base_type_id == 2)
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/russia.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>РОССИИ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/emojione-monotone_flag-for-turkey.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>ТУРЦИИ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/emojione-monotone_flag-for-kyrgyzstan.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>КЫРГЫЗСТАНА;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/emojione-monotone_flag-for-belarus.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>БЕЛАРУСИ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/emojione-monotone_flag-for-china.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>КИТАЯ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/fluent-emoji-high-contrast_world-map.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Поставщики из <b>СНГ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/carbon_document-multiple-01.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Гайд по <b>ДРОПШИППИНГУ;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/carbon_document-multiple-01.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Гайд по созданию <b>ОНЛАЙН - МАГАЗИНА;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/carbon_document-multiple-01.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Гайд по выходу на <b>WILDBERRIES;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/carbon_document-multiple-01.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Гайд по выходу на <b>OZON;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/carbon_document-multiple-01.svg') }}"
                                                         alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Гайды по <b>ДРОПШИППИНГУ</b>, созданию <b>ОНЛАЙН - МАГАЗИНА</b>,
                                                    выходу на <b>WILDBERRIES</b> и <b>OZON;</b>
                                                </div>
                                            </li>
                                            <li class="base-program-body__item">
                                                <div class="base-program-body__icon">
                                                    <img class="base-program-body__svg"
                                                         src="{{ ('images/icons/tabler_message-2-star.svg') }}" alt="#">
                                                </div>
                                                <div class="base-program-body__text">
                                                    Полезные товарные <b>ЧАТЫ;</b>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                    <div
                                        class="base-program-body__texts  @if ($supplierBase->base_type_id == 2) base-program-body__texts_small-mob @endif">
                                        @if ($supplierBase->base_type_id == 1)
                                            <p>
                                                + Вы получаете доступ в наши чаты, где более 30000 человек ежедневно
                                                делятся
                                                своими полезными находками!
                                            </p>
                                        @elseif ($supplierBase->base_type_id == 2)
                                            <p>
                                                <b>ГЛАВНЫЙ ПЛЮС!</b> Обладатели Бизнес Базы бесплатно получат рекламу в
                                                наших
                                                проектах! Эта реклама стоит
                                                в несколько раз дороже самой базы и полностью окупает вложения! Бизнес
                                                база
                                                отлично подойдет для тех, кто хочет зарабатывать большие деньги!
                                            </p>
                                        @endif
                                    </div>
                                    <div class="base-program-footer">
                                        <div class="base-program-footer-price">
                                            <div
                                                class="base-program-footer-price__price base-program-footer-price__price_discount">
                                                {{$supplierBase->price}} ₽
                                            </div>
                                            <div class="base-program-footer-price__price">
                                                {{$supplierBase->discount_price}} ₽
                                            </div>
                                        </div>
                                        <button
                                            class="base-program-footer__btn {{'base-order-open-modal-' . $supplierBase->base_type_id}}">
                                            Купить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section id="base-questions" class="base-questions">
        <div class="container">
            <div class="base-questions__row">
                <div class="base-questions__col">
                    <h2 class="base-questions__title">
                        ЧАСТЫЕ ВОПРОСЫ:
                    </h2>
                    <div class="base-questions__caption">
                        Не можете найти ответ, который ищете?<br>
                        Свяжитесь с нами в <b>Telegram!</b>
                    </div>
                    <img class="base-questions__img" src="{{ ('images/base-questions.png') }}">
                </div>
                <div class="base-questions__col">
                    <ul class="base-questions-accordion">
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head active">
                                Сложно ли пользоваться базой?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Нет! База — это контакты проверенных поставщиков, с которыми легко связаться.
                                    Более того в базе есть подробная инструкция как с ней работать и как быстро
                                    заказывать различные товары намного дешевле, чем в магазинах. С помощью базы вы
                                    можете экономить свой бюджет или даже начать дополнительно зарабатывать - открыть
                                    свой собственный бизнес!
                                </p>
                            </div>
                        </li>
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head">
                                Как я получу базу?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Доступ к базе Вы получите через 1-10 минут после оплаты. Вся информация поступит на
                                    Вашу электронную почту!
                                </p>
                            </div>
                        </li>
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head">
                                Что входит в Бизнес базу кроме базы поставщика?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Кроме базы Вы получаете ТРИ СУПЕР - ГАЙДА:
                                </p>
                                <br>
                                <p>
                                    1. ГАЙД по дропшиппингу - уникальная система перепродажи товаров БЕЗ собственного
                                    склада. Находите покупателя, оформляете заказ у поставщика, добавляете свою наценку,
                                    разницу в цене (ваша прибыль) забираете себе, а поставщик направляет товар вашему
                                    покупателю. Имея данный гайд вы будете знать все нюансы прибыльной
                                    доропшиппинг - торговли!
                                </p>
                                <br>
                                <p>
                                    2. Гайд по ведению и развитию вашего магазина в социальных сетях. Мы дадим вам
                                    контакты нашей личной команды. Лучшие фотографы, видеографы, стилисты, ретушеры,
                                    графические дизайнеры и многие другие специалисты из нашей команды смогут
                                    реализовать оформление ваших социальных сетей по высшему уровню!
                                </p>
                                <br>
                                <p>
                                    3. ГАЙД по выходу на маркетплейсы. Вы узнаете, как зарегистрировать бизнес, какие
                                    нужны документы, коды ОКВЭД и сертификаты. Мы расскажем, как маркировать и
                                    упаковывать товар, как управлять ценами и продажами, и конечно же как оформить
                                    карточки товаров так, чтобы они отображались на первых страницах в поиске привлекая
                                    огромное количество покупателей!
                                </p>
                                <br>
                                <p>
                                    ГЛАВНЫЙ ПЛЮС! Обладатели Бизнес Базы бесплатно получат рекламу в наших проектах!
                                    Эта реклама стоит в несколько раз дороже самой базы и полностью окупает вложения!
                                    Бизнес база отлично подойдет для тех, кто хочет зарабатывать большие деньги!
                                </p>
                            </div>
                        </li>
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head">
                                Бывают ли у вас скидки?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Цена на нашу базу очень доступная! Зачастую стоимость проверенной базы начинается
                                    от 10000р, а стоимость гайдов по ведению бизнеса стартует от 150000р. У нас же цены
                                    адекватные поэтому акционные дни мы делаем крайне редко, всего лишь несколько раз в
                                    год. Если в тексте, рядом с описанием базы, вы видите таймер, значит сейчас как раз
                                    акционные дни и можно успеть заказать базу со скидкой!
                                </p>
                            </div>
                        </li>
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head">
                                Что делать если после оплаты база не пришла на электронную почту?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Прежде всего проверьте папку СПАМ. Некоторые письма Ваша почта может отправлять
                                    туда. Если и там ничего нет, то напишите нам в чат, указанный внизу сайта. Мы быстро
                                    решим этот вопрос!
                                </p>
                            </div>
                        </li>
                        <li class="base-questions-accordion__item">
                            <div class="base-questions-accordion__head">
                                Если я не из России могу ли я заказать базу?
                                <img class="base-questions-accordion__svg"
                                     src="{{ ('images/icons/base-questions-accordion-arrow.svg') }}"
                                     alt="#">
                            </div>
                            <div class="base-questions-accordion__body">
                                <p>
                                    Цены на сайте указаны в рублях, но заказать базу можно из любой точки планеты. Если
                                    Вы не из РФ и оплата не проходит, то внизу сайта есть окошко для связи с нами.
                                    Напишите нам в чат из какой вы страны, и мы быстро решим этот вопрос!
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="base-telegram" class="base-telegram">
        <div class="container">
            <h2 class="base-telegram__title">
                ОСТАЛИСЬ ВОПРОСЫ?
            </h2>
            <div class="base-telegram__wrap">
                <div class="base-telegram-head">
                    <img class="base-telegram-head__img" src="{{ ('images/base-telegram-head__img.png') }}" alt="#">
                    <div class="base-telegram-head__text">
                        <div class="base-telegram-head__name">
                            Любовь и Алексей
                        </div>
                        <div class="base-telegram-head__online">
                            сейчас в сети
                        </div>
                    </div>
                </div>
                <div class="base-telegram-body">
                    <div class="base-telegram-body__text">
                        <div class="base-telegram-body__name">
                            Любовь и Алексей
                        </div>
                        <p>
                            Привет, остались вопросы<br>
                            или нужна помощь?
                        </p>
                        <p>
                            Пишите нам в чат!
                        </p>
                    </div>
                </div>
                <div class="base-telegram-foot">
                    <a href="" class="base-telegram-foot__link link">
                        Начать чат
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="base-info-economy" class="base-info-economy base-info">
        <div class="container">
            <div class="base-info-economy__wrap base-info__wrap">
                <h2 class="base-info-economy__title base-info__title base-info__title_small">
                    НАЧНИТЕ ЭКОНОМИТЬ УЖЕ СЕЙЧАС!
                </h2>
                <div class="base-info-economy__text  base-info__text">
                    С нашей базой поставщиков, Вы сможете заказывать множество качественных товаров по самым
                    <strong>приятным ценам!</strong>
                </div>
                <a href="#base-program" class="base-info-economy__link base-info__link link">
                    Купить БАЗУ
                </a>
            </div>
        </div>
    </section>
@endsection
