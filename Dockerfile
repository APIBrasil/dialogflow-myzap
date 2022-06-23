FROM php:8-fpm-alpine

COPY composer.lock composer.json /var/www/

WORKDIR /var/www

RUN apk update

RUN apk add --update \
		libpng-dev \
		libxml2-dev \
		libzip-dev \
		php-json \
		curl \
		bash \
		php-pdo \
		php-pdo_mysql \
		php-bcmath \
	&& docker-php-ext-install bcmath \
	&& docker-php-ext-install pdo \
	&& docker-php-ext-install pdo_mysql 

RUN apk add sudo

RUN curl -s https://getcomposer.org/installer | php
RUN alias composer='php composer.phar'

RUN set -x \
    && echo "https://repos.php.earth/alpine/v3.9" >> /etc/apk/repositories

RUN addgroup -g 1000 -S www && \
    adduser -u 1000 -S www -G www

COPY . /var/www
COPY --chown=www:www . /var/www

RUN sudo composer install
RUN cp .env.example .env

USER www

EXPOSE 9000
CMD ["php-fpm"]
