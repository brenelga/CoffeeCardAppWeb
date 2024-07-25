FROM php:8.1-apache
WORKDIR /var/www/html
RUN RUN apt-get update && apt-get install -y \
git \
curl \
libpng-dev \
libjpeg62-turbo-dev \
libfreetype6-dev \
libmcrypt-dev \
zip \
unzip

RUN docker-php-ext-install pdo mongoose pdo_mysql pcntl bcmath

COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-scripts --no-autoloader

COPY ./docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]