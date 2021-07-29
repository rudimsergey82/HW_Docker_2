FROM php:8.0-apache as first-stage

WORKDIR /tmp/crud

RUN apt-get update && \
    apt-get install -y git && \
    git clone https://github.com/FaztWeb/php-mysql-crud .

COPY db.php .

FROM php:8.0-apache

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli

COPY --from=first-stage --chown=www-data:www-data /tmp/crud .

EXPOSE 80/tcp

CMD ["apache2-foreground"]