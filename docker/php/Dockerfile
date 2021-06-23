FROM php:fpm

# Install needed software
RUN apt-get update && apt-get -y install \
    vim \
    nano \
    wget \
    curl \
    zip \
    build-essential && \
    rm -rf /var/lib/apt/lists/*


# Install PHP composer
RUN curl -sSL https://getcomposer.org/installer -o composer-setup.php && \
        php composer-setup.php --install-dir=/usr/local/bin --filename=composer --1 && \
        rm composer-setup.php && \
        composer global require hirak/prestissimo

WORKDIR /var/www