<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8d2596c097.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/contacts.css">
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
    <div class="contact-form">
  <h2>Контакты</h2>
  <form id="contact-form">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="phone">Телефон:</label>
    <input type="tel" id="phone" name="phone" required>
    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" rows="5" required></textarea>
    <input type="submit" value="Отправить">
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