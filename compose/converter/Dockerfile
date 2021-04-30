FROM php:7.4-fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update -yqq && \
    apt-get install -yqqf --no-install-recommends \
    default-mysql-client \
    dnsutils \
    crudini \
    zlib1g \
    git \
    wget \
    bzip2 \
    pwgen \
    zip \
    unzip

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/application"