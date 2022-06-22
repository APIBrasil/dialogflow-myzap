FROM php:8-fpm-alpine

COPY composer.lock composer.json /var/www/

WORKDIR /var/www

RUN apk update
RUN apk add --update \
		libpng-dev \
		libxml2-dev \
		libzip-dev \
		php-json \
		php-pdo \
		php-pdo_mysql \
		php-bcmath \
	&& docker-php-ext-install bcmath \
	&& docker-php-ext-install pdo \
	&& docker-php-ext-install pdo_mysql 

RUN set -x \
    && echo "https://repos.php.earth/alpine/v3.9" >> /etc/apk/repositories

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
          
RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

COPY . /var/www
COPY --chown=www:www . /var/www

RUN composer install
RUN cp .env.example .env

USER www

EXPOSE 9000
