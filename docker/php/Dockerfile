FROM php:7.1-fpm-alpine

RUN apk update
RUN apk add freetype \
            libpng \
            libjpeg-turbo \
            freetype-dev \
            libpng-dev \
            libjpeg-turbo-dev \
            icu-dev \
            bzip2-dev \
            libxml2-dev \
            curl \
            git \
    && docker-php-ext-install -j$(getconf _NPROCESSORS_ONLN) iconv pdo_mysql mysqli dom simplexml gd exif zip bz2 intl opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV PHP_EXTRA_CONFIGURE_ARGS --enable-fpm --with-fpm-user=root --with-fpm-group=root

WORKDIR /tmp

RUN curl -O https://raw.githubusercontent.com/Preis24/pimcore/master/composer.json

RUN composer install --no-scripts --no-autoloader

WORKDIR /var/www

RUN rm -rf /var/www/html

RUN git clone https://github.com/Preis24/pimcore.git /var/www
RUN cp -R /tmp/vendor /var/www/vendor
RUN cp -R /tmp/composer.lock /var/www/composer.lock

RUN composer dump-autoload --optimize && \
	composer run-script post-install-cmd

RUN chown -R www-data:www-data web/var var pimcore app/config
RUN chmod -R 777 web/var var pimcore app/config

RUN sudo -u www-data php /var/www/bin/console pimcore:user:reset-password admin -p demo

CMD ["php-fpm", "-R"]