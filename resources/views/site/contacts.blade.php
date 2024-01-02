@extends('layouts.site')

@section('content')

    <div class="mt-80"></div>
    <main class="contact contact_bg">
        <div class="contact_section">

            <div class="contact-container">
                <h1 class="h1">Контакты</h1>
                <div class="contact-container--block">
                    <img src="{{asset('img/phone-call.png')}}" alt="">
                    <a class="connect-call" href="mailto:povuzam@yandex.ru">povuzam@yandex.ru</a>
                </div>
                <div class="contact-container--block">
                    <img src="{{asset('img/email-call.png')}}" alt="">
                    <a class="connect-call" href="tel:+79852377198">+7 985 237 71-98</a>
                </div>
                <div class="social">
                    <div class="contact-container--block ">
                        <a class="connect-call" href=""><img src="{{asset('img/vk-red-icon.png')}}" alt=""></a>
                        <a class="connect-call" href=""><img src="{{asset('img/telegram-red-icon.png')}}" alt=""></a>
                    </div>
                </div>

                <p>Проект реализуется при поддержке Минобрнауки России и проекта «Женщины: школа наставничества»</p>
                <p>(Разработчик проекта Аширова Оксана)</p>
            </div>
            <div class="contact-container__images">
                <img src="{{asset('img/girl-lamp.png')}}" alt="">
            </div>
        </div>
        <div class="bg-contact-bottom"></div>
        <div class="bg-Shape-contact"><img src="{{asset('img/Shape-contact.png')}}" alt=""></div>
        <div class="bg-Shape-contact-center"><img src="{{asset('img/Shape-contact-center.png')}}" alt=""></div>
    </main>


@endsection
