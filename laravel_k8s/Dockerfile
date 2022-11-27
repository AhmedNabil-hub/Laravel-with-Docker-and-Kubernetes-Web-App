FROM php:8.2.0RC6-fpm-bullseye

RUN apt-get install && apt-get update
RUN apt-get install -y zlib1g-dev libzip-dev unzip

RUN docker-php-ext-install pdo pdo_mysql sockets zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN mkdir /app
ADD . /app

WORKDIR /app

RUN composer install

RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap

CMD php artisan serve --host=0.0.0.0 --port=8000

# copy ./run.sh /tmp
# ENTRYPOINT ["/tmp/run.sh"]

EXPOSE 8000
