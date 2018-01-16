FROM php:7.1.8-apache
RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip

# Composer
RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    composer --version

# PHPUnit
RUN curl -fsSL https://phar.phpunit.de/phpunit-6.5.phar -o phpunit-6.5.phar && \
    mv phpunit-6.5.phar /usr/local/bin/phpunit && \
    chmod +x /usr/local/bin/phpunit && \
    phpunit --version

# php-memcached
RUN apt-get install -y libmemcached-dev zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

# Imagick
RUN apt-get install -y libmagickwand-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick

# Necessary extensions
RUN docker-php-ext-install pdo pdo_mysql zip opcache

# Apache2 config
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

WORKDIR /var/www/html

# Custom docker entry point to run initial commands
# ENTRYPOINT [ "docker-entrypoint.sh" ]

EXPOSE 80
