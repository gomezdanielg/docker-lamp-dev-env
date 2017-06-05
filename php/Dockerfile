FROM php:7-fpm

RUN curl -s -o /usr/local/bin/composer https://getcomposer.org/composer.phar && \
    chmod 0755 /usr/local/bin/composer

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install json
RUN docker-php-ext-install mbstring

RUN apt-get update && apt-get install -y zlib1g-dev && docker-php-ext-install zip

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libldap2-dev  \
        libpng12-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt

# Add an alias for PHPUnit
RUN echo "alias phpunit='./vendor/bin/phpunit'" >> ~/.bashrc
# Source the bash
RUN . ~/.bashrc
