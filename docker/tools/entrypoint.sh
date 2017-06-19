#!/bin/bash
set -e

: ${XDEBUG:=0}
: ${LOCAL_IP:=none}
: ${RED:='\033[0;31m'}
: ${GREEN:='\033[0;32m'}
: ${NOCOLOR:='\033[0m'}

export PATH=$PATH:/var/www/html/node_modules/.bin

# Change www-data's uid & guid to be the same as directory in host or the configured one
# Fix cache problems
sed -ie "s/`id -u www-data`:`id -g www-data`/`stat -c %u /var/www/html`:`stat -c %g /var/www/html`/g" /etc/passwd

# Disable Xdebug if needed
if [ "$XDEBUG" = "0" -o "$1" != "xdebug" ]; then
    rm /usr/local/etc/php/conf.d/xdebug.ini
    echo -e "[${RED}XDebug is disabled${NOCOLOR}]"
elif [ ! "$LOCAL_IP" = "none" ]; then
    export XDEBUG_CONFIG="remote_host=${LOCAL_IP}"
    echo -e "[${GREEN}XDebug is enabled${NOCOLOR}]"
fi


    su -s /bin/bash -c "chown -R www-data /var/www/.config"
    su -s /bin/bash -c "chown -R www-data /var/www/.cache"
    su -s /bin/bash -c "chown -R www-data /var/www/.local"

# Execute all commands with user www-data except for superuser access 'su'
if [ "$1" = "composer" ]; then
    su www-data -s /bin/bash -c "`which php` -d memory_limit=-1 `which composer` ${*:2}"
elif [ "$1" = "su" ]; then
    /bin/bash -c "${*:2}"
elif [ "$1" = "mysql" ]; then
    mysql -u$MYSQL_USER -p$MYSQL_PASSWORD -hdb $MYSQL_DATABASE
elif [ "$1" = "bash" -o "$*" = "xdebug" ]; then
    su www-data
elif [ "$1" = "xdebug" ]; then
    su www-data -s /bin/bash -c "${*:2}*"
else
    su www-data -s /bin/bash -c "$*"
fi
