FROM composer:latest as build
WORKDIR /app
COPY . /app

FROM php:8.2-apache
RUN apt update
RUN apt install -y git
RUN apt install -y vim
RUN apt install -y zip unzip
RUN docker-php-ext-install bcmath pdo_mysql

# composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 8080
COPY --from=build /app /var/www/
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env /var/www/.env


RUN chmod 777 -R /var/www
RUN echo "Listen 8080" >> /etc/apache2/ports.conf
RUN chown -R www-data:www-data /var/www
RUN a2enmod rewrite
