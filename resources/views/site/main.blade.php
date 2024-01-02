@extends('layouts.site')

@section('content')


    <main class="main">
        <section class="top">
            <div class="container-fluid">
                <div class="top-container">
                    <div class="top-info">
                        <h1 class="h1">Выбери ВУЗ мечты</h1>
                        <p>
                            Проект, благодаря которому старшеклассники со всей страны <br>
                            могут посетить лучшие университеты России в рамках <br>
                            своего путешествия
                        </p>
                        <div class="btn-block">
                            <a href="#" class="danger btn">Выбрать ВУЗ</a>
                            <a href="#" class="success btn">Оставить заявку</a>
                        </div>

                    </div>
                    <div class="top-animation">

                        <div class="top-animation__images phone">

                            <div class="phone__img"  ></div>
                            <div class="top-animation__images-absolut phone-activ"><img src="{{asset('img/anime-phone.png')}}" alt=""></div>
                            <div class="top-animation__images-absolut bonet"><img src="{{asset('img/anime-bonet.png')}}" alt=""></div>
                            <div class="top-animation__images-absolut suitcase"><img src="{{asset('img/anime-suitcase.png')}}" alt=""></div>
                            <div class="top-animation__images-absolut map"><img src="{{asset('img/anime-map.png')}}" alt=""></div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <div class="circle"></div>
    </main>


@endsection
