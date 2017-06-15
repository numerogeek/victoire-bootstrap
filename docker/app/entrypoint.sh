#!/bin/bash
set -e

: ${XDEBUG:=0}
: ${LOCAL_IP:=none}

# Change www-data's uid & guid to be the same as directory in host
# Fix cache problems

sed -ie "s/`id -u www-data`:`id -g www-data`/`stat -c %u /var/www/html`:`stat -c %g /var/www/html`/g" /etc/passwd

# Disabled Xdebug if needed
if [ "$XDEBUG" = "0" ]; then
    rm /usr/local/etc/php/conf.d/xdebug.ini
elif [ ! "$LOCAL_IP" = "none" ]; then
    export XDEBUG_CONFIG="remote_host=${LOCAL_IP}"
fi

php-fpm
