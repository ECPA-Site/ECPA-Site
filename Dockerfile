FROM php:8.2-apache

# Копируем все файлы проекта в директорию Apache
COPY . /var/www/html/

# Открываем порт 80 для сайта
EXPOSE 80
