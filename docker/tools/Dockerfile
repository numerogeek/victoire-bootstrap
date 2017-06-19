FROM php:7.0.17-cli

ARG SYMFONY_ENV=dev

# Base packages
RUN apt-get update && apt-get install -y \
    python \
    apt-transport-https \
    libicu-dev \
    git \
    zlib1g-dev \
    libxml2-dev \
    mysql-client

# PHP extensions
RUN docker-php-ext-install intl mbstring zip mysqli pdo pdo_mysql soap

# Xdebug
RUN pecl install -o -f xdebug-2.4.0 \
    && rm -rf /tmp/pear

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin

# Nodejs
RUN curl -sS https://deb.nodesource.com/gpgkey/nodesource.gpg.key | apt-key add -
RUN echo 'deb https://deb.nodesource.com/node_6.x jessie main' > /etc/apt/sources.list.d/nodesource.list
RUN apt-get update && apt-get install -y nodejs
RUN npm install less -g
RUN npm install bower -g
#RUN npm uninstall npm -g

# Assign a shell to user www-data
RUN chsh -s /bin/bash www-data

# Access rights
RUN mkdir -p /var/www/html && chown -R www-data:www-data /var/www/html
RUN mkdir -p /var/www/.config && chown -R www-data:www-data /var/www/.config
RUN mkdir -p /var/www/.cache && chown -R www-data:www-data /var/www/.cache
RUN mkdir -p /var/www/.local && chown -R www-data:www-data /var/www/.local

# Copy configuration files
ADD config/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY config/php.ini /usr/local/etc/php/php.ini
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
COPY .bashrc /var/www/.bashrc

WORKDIR /var/www/html
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
