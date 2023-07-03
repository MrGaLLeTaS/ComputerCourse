<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8d2596c097.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/login.css">
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

<main>
    <div class="login-form">
        <h2>Вход</h2>
         <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Электронная почта</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn-login">
                                    Войти
                                </button>

                                <h3 style="padding-top: 20px">Если у вас нет учетной записи <a href="register" class="reg">зарегистрируйтесь!</a></h3>
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
</main>

</body>
</html>