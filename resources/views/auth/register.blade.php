<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8d2596c097.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/register.css">
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
                <li class="header__list-item"><a class="header__list-link" href="#">Преподаватели</a>
                </li>
                <li class="header__list-item"><a class="header__list-link" href="#">Рассылка</a></li>
                <li class="header__list-item"><a class="header__list-link" href="contacts">Контакты</a></li>

            </ul>
        </nav>
    </div>
</header>

<div class="main">
    <div class="registration-form">
        <h2>Регистрация</h2>
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Имя</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Электронная почта</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span role="alert" style="padding-top: -7px;">
                                        <strong>Почта уже занята!</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Пароль должен содержать не менее 8 символов!</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Подтвердите пароль</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="sb-button">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
    </div>

        <footer class="footer">
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
</body>
</html>