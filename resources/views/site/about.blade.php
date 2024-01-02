@extends('layouts.site')

@section('content')

    <div class="mt-80"></div>

    <main class="project project_bg">
        <div class="project_section">
            <h1 class="h1">О ПРОЕКТЕ</h1>
            <div class="project-container">
                <div class="project-container__description">
                    <p class="project-container__p">
                        <span class="text-blue">ПОВУЗАМ</span> - это очные и виртуальные экскурсии по <br> вузам России, специально разработанные для
                        <br> школьников и абитуриентов
                    </p>
                    <h3 class="h3 text-red">Мы стремимся помочь:</h3>
                    <p class="project-container__p"><strong>Старшеклассникам и абитуриентам</strong> - посетить ВУЗ своей мечты, получить подлинное представление о нём, почувствовать себя в роли студента и задать вопросы преподавателям и студентам</p>
                    <p class="project-container__p"><strong>Организаторам туристических поездок</strong> – повысить профориентационную ценность школьного путешествия и легко забронировать экскурсию в вузы России</p>
                    <p class="project-container__p"><strong>Высшим учебным заведениям</strong>- привлекать новых абитуриентов и повышать узнаваемость по всей России</p>
                    <p class="project-container__p">Наш сервис предоставляет вам доступ к вузам по всей стране. Посетите вуз очно или изучите с помощью виртуальных туров</p>


                </div>
                <div class="project-container__images">
                    <img src="{{asset('img/girl-table.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="bg-project-bottom"></div>
    </main>


    <div class="footer-dop">
        <h3 class="h3">Примите участие в экскурсии по вузу</h3>
        <div class="footer-dop-container">
            <div class="footer-girl-left"><img src="{{asset('img/girl-left.png')}}" alt=""></div>
            <div class="footer-button">Хочу учавствовать</div>
            <div class="footer-girl-right"><img src="{{asset('img/girl-right.png')}}" alt=""></div>
        </div>
    </div>

@endsection
