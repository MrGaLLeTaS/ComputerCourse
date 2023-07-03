<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсы по КС</title>
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8d2596c097.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link type="text/css" href="css/slick.css">
    <link type="text/css" href="css/slick-theme.css">
</head>

<body>



<header class="header">
    <div class="header__top">
        <a class="header__logo" href="/">
            <img class="header__logo-img" src="images/header/logo.svg" alt="">
        </a>
        <div class="menu js-menu">
            <span class="menu__line"></span>
            <span class="menu__line"></span>
            <span class="menu__line"></span>
        </div>
        <nav class="header__nav js-nav">
            <ul class="header__list js-nav__list">
                <li class="header__list-item"><a class="header__list-link" href="/">Главная</a></li>
                <li class="header__list-item"><a class="header__list-link" href="#">Курсы</a></li>
                <li class="header__list-item"><a class="header__list-link" href="schedule">Расписание</a></li>
                <li class="header__list-item"><a class="header__list-link" href="#prepod">Преподаватели</a>
                </li>
                <li class="header__list-item"><a class="header__list-link" href="#rassilka">Рассылка</a></li>
                <li class="header__list-item"><a class="header__list-link" href="contacts">Контакты</a></li>

            </ul>
        </nav>


            @if (Auth::check())
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
            @else
            <a href="login"><button type="button" class="header__top-btn">Войти в кабинет</button></a>
            @endif
        </a>
    </div>
    <div class="container">
        <div class="header__inner">

            <div class="header__down">
                <a class="header__down-logo" href="#">
                    <img class="header__down-logo-img" src="images/header/logo.svg" alt="">
                </a>

                <h1 class="header__down-title  wow animate__animated animate__fadeIn">
                    Курс <br>
                    по компьютерной сборке <br>
                    стартует через
                </h1>


                <div id="countdown" class="header__countdown">
                    <div class="header__countdown-number">
                        <span class="days header__countdown-time"></span>
                        <span class="header__countdown-text">Дней</span>
                    </div>
                    <div class="header__countdown-number">
                        <span class="hours header__countdown-time"></span>
                        <span class="header__countdown-text">Часов</span>
                    </div>
                    <div class="header__countdown-number">
                        <span class="minutes header__countdown-time"></span>
                        <span class="header__countdown-text">Минут</span>
                    </div>
                    <div class="header__countdown-number">
                        <span class="seconds header__countdown-time"></span>
                        <span class="header__countdown-text">Секунд</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<div  class="parallax-window" data-parallax="scroll" data-image-src="images/bg.png">
    <section class="course">
        <div class="container">
            <div class="course__inner">

                <button class="course__inner-btn" type="button">
                    Заказать курс
                </button>

                <div class="course__group">
                    <div class="course__only">
                        <h3 class="course__only-text">
                            Учеников всего:

                        </h3>
                        <span class="course__only-number">
                                200
                            </span>

                    </div>

                    <div class="course__end">
                        <h3 class="course__end-text">
                            Успешно закончили курс:

                        </h3>
                        <span class="course__end-number">
                                190
                            </span>
                    </div>
                </div>

                <div class="course__earned">

                    <div class="course__box">
                        <h3 class="course__box-text">
                            Заработано учениками:

                        </h3>
                        <span class="course__box-money">
                                400 000₽
                            </span>
                    </div>
                    <div class="course__wrap">
                        <div class="course__rank clearfix " data-percent="60%">
                            <div class="course__rank-bar"></div>
                            <div class="course__money">
                                <span class="course__money-zero">0</span>
                                <span class=" course__money-more">1 000 000₽</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-us">
        <div class="container">
            <div class="about-us__inner">
                <div class="about-us__left">
                    <div class="about-us__box">
                        <img class="about-us__box-img  wow animate__animated animate__fadeInLeft"
                             src="images/about-us/computer.png" alt="">
                    </div>

                </div>
                <div class="about-us__right">
                    <div class="about-us__info">
                        <h2 class="about-us__info-title  wow animate__animated animate__fadeIn">
                            Чем мы занимаемся?
                        </h2>
                        <p class="about-us__info-text  wow animate__animated animate__fadeInBottomRight">
                            Мы не просто собираем и продаем мощные компьютеры, а ставим перед собой цель создать
                            сообщество геймеров и просто творческих людей. Каждый член команды
                            одержим играми, наша страсть так велика, что мы хотим поделиться ей с миром. Мы
                            хотим, чтобы вы взглянули на мир нашими глазами, потому мы предоставляем лучшие игровые
                            системы и сервис

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fast-start">
        <div class="container">
            <div class="fast-start__inner">
                <div class="fast-start__top">
                    <h2 class="fast-start__top-title wow animate__animated animate__fadeIn">
                        Быстрый старт
                    </h2>
                    <p class="fast-start__top-text wow animate__animated animate__fadeInLeft">
                        Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                    </p>
                </div>
                <div class="fast-start__down">

                    <div class="fast-start__item fast-start__item-1 wow animate__animated animate__fadeInDown">
                        <div class="fast-start__item-num">
                            100%
                        </div>
                        <div class="fast-start__item-box fast-start__item-box--one"></div>
                        <p class="fast-start__item-text fast-start__top-text--one">
                            Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                            производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                            мощными
                            видеокартами NVIDIA, высокоскоростной памятью DDR4, SDD-накопителями. Все используемые
                            компоненты отличаются высоким качеством и надежностью!
                        </p>
                    </div>

                    <div class="fast-start__item fast-start__item-2 wow animate__animated animate__fadeInUp">
                        <div class="fast-start__item-num">
                            75%
                        </div>
                        <div class="fast-start__item-box fast-start__item-box--two"></div>
                        <p class="fast-start__item-text fast-start__top-text--two">
                            Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                            производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                            мощными
                            видеокартами NVIDIA, высокоскоростной памятью DDR4, SDD-накопителями. Все используемые
                            компоненты отличаются высоким качеством и надежностью!
                        </p>
                    </div>


                    <div class="fast-start__item fast-start__item-3 wow animate__animated animate__fadeInDown">
                        <div class="fast-start__item-num">
                            50%
                        </div>
                        <div class="fast-start__item-box fast-start__item-box--three"></div>
                        <p class="fast-start__item-text fast-start__top-text--three">
                            Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                            производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                            мощными
                            видеокартами NVIDIA, высокоскоростной памятью DDR4, SDD-накопителями. Все используемые
                            компоненты отличаются высоким качеством и надежностью!
                        </p>
                    </div>


                    <div class="fast-start__item fast-start__item-4 wow animate__animated animate__fadeInUp">
                        <div class="fast-start__item-num">
                            Итог
                        </div>
                        <div class="fast-start__item-box fast-start__item-box--four"></div>
                        <p class="fast-start__item-text fast-start__top-text--four">
                            Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                            производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                            мощными
                            видеокартами NVIDIA, высокоскоростной памятью DDR4, SDD-накопителями. Все используемые
                            компоненты отличаются высоким качеством и надежностью!

                        </p>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <section class="profession">
        <div class="container">
            <div class="profession__inner">
                <div class="profession__top">
                    <h2 class="profession__top-title wow animate__animated animate__fadeIn">
                        Получите профессию прямо сейчас
                    </h2>
                </div>

                <div class="profession__down">

                    <div class="profession__item profession__item-1 wow animate__animated animate__backInLeft ">
                        <img class="profession__item-img" src="images/profession/img-1.png" alt="">

                        <div class="profession__info">
                            <h3 class="profession__info-title">
                                Только практические
                                навыки в работе
                            </h3>

                            <p class="profession__info-text">
                                Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                                производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                                мощными

                            </p>
                        </div>
                    </div>

                    <div class="profession__item profession__item-2 wow animate__animated animate__backInUp">
                        <img class="profession__item-img" src="images/profession/img-2.png" alt="">

                        <div class="profession__info">
                            <h3 class="profession__info-title">
                                Работа на самом
                                современном оборудовании
                            </h3>

                            <p class="profession__info-text">
                                Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                                производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                                мощными

                            </p>
                        </div>


                    </div>

                    <div class="profession__item  profession__item-3 wow animate__animated animate__backInRight">
                        <img class="profession__item-img" src="images/profession/img-3.png" alt="">

                        <div class="profession__info">
                            <h3 class="profession__info-title">
                                Сертификация
                                по окончании обучения
                            </h3>

                            <p class="profession__info-text">
                                Интернет-магазин компьютеров использует сертифицированные комплектующие лучших
                                производителей! Наши компьютеры оснащены сверхпроизводительными процессорами Intel,
                                мощными


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="company">
        <div class="container">
            <div class="company__top">
                <h2 class="company__top-title  wow animate__animated animate__fadeIn ">
                    Партнеры - топовые бренды
                </h2>

            </div>
            <div class="company__down">
                <div class="company__line">
                    <div class="company__line-item company__line-item--one">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>


                    <div class="company__line-item company__line-item--one">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--one">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--one">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--two">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--two">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--two">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>

                    <div class="company__line-item company__line-item--two">
                        <img class="company__line-item-img" src="images/company/img-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="program">
        <div class="container">
            <div class="programm__inner">
                <div class="program__top">
                    <h2 class="programm__top-title wow animate__animated animate__fadeIn">
                        Программа обучения
                    </h2>
                    <p class="programm__top-text  wow animate__animated animate__backInLeft">
                        Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                    </p>

                </div>
                <div class="programm__down">
                    <div class="programm__timeline">
                        <ul class="programm__list">
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №1</div>
                                    <p class="programm__wrap-text">

                                        Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №2</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №3</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №4</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №5</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №6</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                            <li class="programm__item">
                                <div class="programm__wrap">
                                    <div class="programm__wrap-date">Неделя №7</div>
                                    <p class="programm__wrap-text"> Красивая часть курса,
                                        которая помогает в успехе
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="#prepod" class="teacher">
        <div class="container">
            <div class="teacher__inner">
                <div class="teacher__top">
                    <h2 class="teacher__top-title wow animate__animated animate__fadeIn">
                        Ваши преподаватели
                    </h2>

                </div>
                <div id="prepod" class="teacher__down">

                    <div class="teacher__card teacher__card-1 wow animate__animated animate__backInLeft">
                        <img class="teacher__card-img" src="images/teacher/avatar-1.png" alt="">

                        <div class="teacher__info">
                            <h3 class="teacher__info-name">
                                Дмитрий Иванов
                            </h3>

                            <p class="teacher__info-text">
                                Специалист по видеокартам
                            </p>

                            <a class="teacher__info-link" href="#">
                                Биография
                            </a>

                        </div>

                    </div>


                    <div class="teacher__card teacher__card-2 wow animate__animated animate__backInUp">
                        <img class="teacher__card-img" src="images/teacher/avatar-2.png " alt="">

                        <div class="teacher__info">
                            <h3 class="teacher__info-name">
                                Дмитрий Иванов
                            </h3>

                            <p class="teacher__info-text">
                                Специалист по видеокартам
                            </p>

                            <a class="teacher__info-link" href="#">
                                Биография
                            </a>

                        </div>

                    </div>


                    <div class="teacher__card teacher__card-3 wow animate__animated animate__backInRight">
                        <img class="teacher__card-img" src="images/teacher/avatar-3.png" alt="">

                        <div class="teacher__info">
                            <h3 class="teacher__info-name">
                                Дмитрий Иванов
                            </h3>

                            <p class="teacher__info-text">
                                Специалист по видеокартам
                            </p>

                            <a class="teacher__info-link" href="#">
                                Биография
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer id="rassilka" class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__top">
                    <h2 class="footer__top-title wow animate__animated animate__fadeIn">
                        Статьи каждую неделю
                    </h2>

                    <p class="footer__top-text wow animate__animated animate__backInLeft">
                        Больше 90% учеников прошли полный курс и смогли собрать свой первый компьютер
                    </p>
                </div>
                <div class="footer__down">

                    <form class="footer__form">
                        <input class="footer__form-input" type="email" placeholder="E-mail" required>
                        <button class="footer__form-btn" type="submit">Подписаться</button>
                    </form>

                    <div class="footer__messengers">
                        <ul class="footer__list">
                            <a class="footer__list-link" href="#"><i class="fab fa-vk"></i></a>
                            <a class="footer__list-link" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="footer__list-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="footer__list-link" href="#"><i class="fab fa-instagram"></i></a>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/main.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>