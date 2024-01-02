

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;subset=latin,cyrillic" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/reset.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/media-1200.css')}}">

    <link rel="stylesheet" href="{{asset('css/media-959.css')}}">

    <link rel="stylesheet" href="{{asset('css/media-639.css')}}">

    <link rel="stylesheet" href="{{asset('css/media-479.css')}}">

    <link rel="stylesheet" href="{{asset('css/noty.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" ></script>
    <script src="{{asset('js/jquery.inputmask.min.js')}}" ></script>
    <script src="{{asset('js/script.js')}}" ></script>
    <script src="{{asset('js/noty.js')}}" ></script>
</head>
<body>



<div class="block-container">
    <div class="favourites-slide-block slide-block" data-name="favourites">
        <div class="slide-block-title">Избранное:</div>
        <ul class="list-cards">

        </ul>
    </div>
    <svg class="closed-slide-block" width="25" height="25" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 13L13 2" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
        <path d="M12.8481 13.1499L2.00011 2.00001" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
    </svg>
</div>
<div class="icons-fixed" style="display: none">
    <div class="favourites-block icon-block ">
        <svg role="img" width="41" height="35" viewBox="0 0 41 35" fill="none" xmlns="http://www.w3.org/2000/svg" class="favourites-icon">
            <path d="M39.9516 11.9535C39.9516 22.5416 20.4993 33.8088 20.4993 33.8088C20.4993 33.8088 1.04688 22.5416 1.04688 11.9535C1.04688 -2.42254 20.4993 -2.2284 20.4993 10.4239C20.4993 -2.2284 39.9516 -2.03914 39.9516 11.9535Z" stroke="#e55c18" ;="" stroke-width="1.5" stroke-linejoin="round"></path>
        </svg>
        <div class="hint"></div>
    </div>

</div>
@include('layouts.top-menu')





@yield('content')






<footer class="footer">

    <div class="footer-container">


        <div class="social"><img src="{{asset('img/vk-social-network-lo.png')}}" alt=""></div>
        <div class="social"><img src="{{asset('img/telegram.png')}}" alt=""></div>
    </div>
    <div class="fond">
        <span>при поддержке:</span>
        <img src="{{asset('img/fond.svg')}}" alt="">
    </div>

</footer>




</body>
</html>
