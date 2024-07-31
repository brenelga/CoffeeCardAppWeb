# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    zip \
    unzip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Instala las extensiones necesarias de PHP
RUN docker-php-ext-install pdo pdo_mysql gd exif pcntl bcmath

RUN pecl install mongodb && docker-php-ext-enable mongodb

# Instala Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto al contenedor
COPY . .

# Instala las dependencias de Laravel
RUN composer install --no-scripts --no-autoloader

# Genera el autoload
RUN composer dump-autoload --optimize

# Copia el archivo de configuración de Apache
COPY ./docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Establece las variables de entorno
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Cambia los permisos de los directorios necesarios
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80 para Apache
EXPOSE 80

# Comando por defecto para ejecutar Apache
CMD ["apache2-foreground"]
