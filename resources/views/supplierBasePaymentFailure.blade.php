@extends('layouts/supplierBase')
@section('header')
@endsection
@section('content')
    <section class="base-payment__section" id="base-payment">
        <h2 class="base-payment__title">
            При оплате произошла ошибка!
        </h2>
        <div class="base-payment-text">
            <p>
                Попробуй снова, или напиши нам в <a class="base-payment-text__link" target="_blank"
                                                    href="https://t.me/AlexLiubov">ЧАТ</a> и мы решим эту проблему!
            </p>
        </div>
        <a href="/base" class="base-payment__link link">
            На главную
        </a>
    </section>
@endsection
