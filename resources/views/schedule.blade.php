<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8d2596c097.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/rasp.css">
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
<main class="main">
    <h2>Расписание курсов</h2>
    <ul class="courses-list">
        <li>
            <img src="images/schedule/1.png" alt="">
            <h3>Основы компьютерной сборки</h3>
            <p>Курс о том, как собрать компьютер с нуля</p>
            <p>Дата начала: 1 сентября 2023</p>
            <p>Дата окончания: 1 декабря 2023</p>
            <a href="#" class="pod-rob">Подробнее</a>
        </li>
        <li>
            <img src="images/schedule/2.png" alt="">
            <h3>Продвинутый курс по компьютерной сборке</h3>
            <p>Курс о расширенной сборке компьютера</p>
            <p>Дата начала: 1 января 2024</p>
            <p>Дата окончания: 1 апреля 2024</p>
            <a href="#" class="pod-rob">Подробнее</a>
        </li>
        <li>
            <img src="images/schedule/3.png" alt="">
            <h3>Курс по настройке и диагностике компьютера</h3>
            <p>Курс о том, как настроить и диагностировать компьютер</p>
            <p>Дата начала: 1 май 2024</p>
            <p>Дата окончания: 1 августа 2024</p>
            <a href="#" class="pod-rob">Подробнее</a>
        </li>
    </ul>
</main>
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
</body>
</html>