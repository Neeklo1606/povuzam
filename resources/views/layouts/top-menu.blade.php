
<header id="header" class="header ">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
        </div>

        <nav class="nav">
            <ul class="nav-list ">
                @foreach($menus as $menu)
                    <li><a href="{{$menu->link}}">{{$menu->name}}</a></li>
                @endforeach


            </ul>
        </nav>
        <div class="search">
            <img src="{{asset('img/search.png')}}" alt="">
        </div>
        <div class="btn-nav-burger">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="16px">
                <path fill-rule="evenodd"  fill="#14a1de" d="M-0.000,-0.000 L17.000,-0.000 L17.000,2.000 L-0.000,2.000 L-0.000,-0.000 Z"/>
                <path fill-rule="evenodd"  fill="#14a1de" d="M-0.000,7.000 L17.000,7.000 L17.000,9.000 L-0.000,9.000 L-0.000,7.000 Z"/>
                <path fill-rule="evenodd"  fill="#14a1de" d="M-0.000,14.000 L17.000,14.000 L17.000,16.000 L-0.000,16.000 L-0.000,14.000 Z"/>
            </svg>

        </div>
    </div>

</header>
<div id="search">
    <div class="search-form-container">
        <div class="search-form ">
            <input type="text" class="search-form__input" placeholder="Поиск">
            <svg role="img"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88"><path fill="#b6b6b6" d="M85 31.1c-.5-8.7-4.4-16.6-10.9-22.3C67.6 3 59.3 0 50.6.6c-8.7.5-16.7 4.4-22.5 11-11.2 12.7-10.7 31.7.6 43.9l-5.3 6.1-2.5-2.2-17.8 20 9 8.1 17.8-20.2-2.1-1.8 5.3-6.1c5.8 4.2 12.6 6.3 19.3 6.3 9 0 18-3.7 24.4-10.9 5.9-6.6 8.8-15 8.2-23.7zM72.4 50.8c-9.7 10.9-26.5 11.9-37.6 2.3-10.9-9.8-11.9-26.6-2.3-37.6 4.7-5.4 11.3-8.5 18.4-8.9h1.6c6.5 0 12.7 2.4 17.6 6.8 5.3 4.7 8.5 11.1 8.9 18.2.5 7-1.9 13.8-6.6 19.2z"></path></svg>
            <div class="closed">
                <svg width="25" height="25" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 13L13 2" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
                    <path d="M12.8481 13.1499L2.00011 2.00001" stroke="#b6b6b6" stroke-width="3" stroke-linecap="round"></path>
                </svg>
            </div>
            <button class="search-form-btn">
                ПОИСК
            </button>
        </div>

    </div>
</div>


<div class="fade"></div>
