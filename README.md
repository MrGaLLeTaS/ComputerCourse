# Компьютерные курсы онлайн

Добро пожаловать в онлайн-платформу по компьютерным курсам! Этот проект представляет собой веб-приложение, созданное с использованием PHP, HTML/CSS, JavaScript, Laravel и Blade. Он предоставляет возможность проходить курсы по различным языкам программирования и технологиям.

# Установка и настройка

Убедитесь, что у вас установлен PHP, Composer и Node.js.
Склонируйте репозиторий на свой локальный компьютер.
Перейдите в корневую папку проекта и выполните следующие команды:
# Установка зависимостей PHP
composer install

# Установка зависимостей JavaScript
npm install

# Компиляция ресурсов
npm run dev

# Настройка окружения
cp .env.example .env
php artisan key:generate

# Создание базы данных и запуск миграций
php artisan migrate

# Запуск сервера
php artisan serve

Откройте браузер и перейдите по адресу http://localhost:8000, чтобы начать использовать сайт.