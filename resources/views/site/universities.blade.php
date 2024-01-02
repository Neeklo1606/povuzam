@extends('layouts.site')

@section('content')







    <div class="mt-80"></div>

    <div class="universities">
        <h1 class="h1">Список университетов и институтов</h1>

        <div class="universities-search-container-mob">
            <div class="universities-search-container-mob-search">
                <div class="span">
                    <svg  class="filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.42 100"><path fill="#0d8bbc" d="M13.75,22.59V.38h-6V22.59a10.75,10.75,0,0,0,0,20.64V99.62h6V43.23a10.75,10.75,0,0,0,0-20.64Z"></path><path fill="#0d8bbc" d="M63.42,67.09a10.75,10.75,0,0,0-7.75-10.32V.38h-6V56.77a10.75,10.75,0,0,0,0,20.64V99.62h6V77.41A10.75,10.75,0,0,0,63.42,67.09Z"></path></svg>
                    <span>Фильтры</span>
                </div>
                <div class="span ">
                    <svg class="span-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88"> <path fill="#0d8bbc" d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z"></path></svg>
                </div>
            </div>
        </div>
        <div class="universities-search">
            <div class="universities-search-container">

                <div class="universities-search-block">
                    <input class="universities-input" type="text" name="query" placeholder="Поиск">
                    <svg class="t-store__search-icon js-store-filter-search-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88"> <path fill="#757575" d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z"></path></svg>
                </div>

                <!--            <div class="universities-search-block">-->
                <!--                <select class="universities-list-style" name="sort">-->
                <!--                    <option data-filter-value="" value="">Порядок: по умолчанию</option>-->
                <!--                    <option data-filter-value="price:asc" value="price:asc">Цена: по возрастанию</option>-->
                <!--                    <option data-filter-value="price:desc" value="price:desc">Цена: по убыванию</option>-->
                <!--                    <option data-filter-value="title:asc" value="title:asc">Название: А—Я</option>-->
                <!--                    <option data-filter-value="title:desc" value="title:desc">Название: Я—А</option>-->
                <!--                    <option data-filter-value="created:desc" value="created:desc">Порядок: сперва новые</option>-->
                <!--                    <option data-filter-value="created:asc" value="created:asc">Порядок: сперва старые</option>-->
                <!--                </select>-->
                <!--            </div>-->


            </div>
        </div>
        <div class="universities-container">

        </div>
    </div>



    <main class="univers">
        <div class="nav-towns-block sticky">
            <div class="show"></div>
            <h3 class="h3">Город</h3>
            <ul class="nav-towns">
                @foreach($towns as $town)

                <li data-id="{{$town->id}}">
                    <a href="/universities/{{$town->link}}">{{$town->name}}</a>
                </li>

                @endforeach
            </ul>
            <svg class="sticky-closed" width="25" height="25" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none">
                <path d="M2 13L13 2" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
                <path d="M12.8481 13.1499L2.00011 2.00001" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
            </svg>
        </div>

        <div class="universities-content">

            @foreach($cards as $card)
                @php
                $images = $card->images($card->id);
                @endphp

            <div class="cards" data-id-card="{{$card->id}}" data-id-town="{{$card->town_id}}">
                <div class="cards-images">
                    <div class="cards-images-block prev" style="background-image: url('@if($images->isNotEmpty()){{$images[0]->disk}}/{{$images[0]->path}}@endif') "></div>
                    <div class="cards-images-block prev-to"  style="background-image: url('@if($images->isNotEmpty()){{$images[1]->disk}}/{{$images[1]->path}}@endif')"></div>

                    <div class="favourites-img">
                        <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 6.32647C20 11.4974 10.5 17 10.5 17C10.5 17 1 11.4974 1 6.32647C1 -0.694364 10.5 -0.599555 10.5 5.57947C10.5 -0.599555 20 -0.507124 20 6.32647Z" stroke="black" stroke-linejoin="round"></path></svg>
                    </div>
                </div>
                <div class="cards-title">
                    {{$card->title}}
                </div>
                <div class="cards-description">
                    {{$card->description}}
                </div>

                <button class="btn-cards-link" data-id-card="{{$card->id}}">
                    Забронировать экскурсию
                </button>
                <a href="{{route('universities.id',$card->id)}}" class="btn-cards-bron" data-id-card="{{$card->id}}">
                    Подробнее
                </a>
            </div>
            @endforeach


        </div>

    </main>
    {{$cards->links()}}


@endsection
