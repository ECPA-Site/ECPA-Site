FROM php:8.2-apache

# Устанавливаем ServerName, чтобы убрать warning
RUN echo "ServerName localhost" > /etc/apache2/conf-available/servername.conf \
    && a2enconf servername

# Копируем все файлы проекта в директорию Apache
COPY . /var/www/html/

# Открываем порт 80
EXPOSE 80
