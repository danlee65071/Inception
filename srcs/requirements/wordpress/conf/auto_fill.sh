#!/bin/bash

sed -i "s/listen=\/run\/php\/php7.3-fpm.sock/listen = 9000/etc/php/7.3/fpm/pool.d/www.conf"
touch /run/php/php7.3-fpm.pid
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

if [ ! -f /var/www/html/wp-config.php ]; then
    mkdir -p /var/www/html/
    wget http://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
    cd var/www/html/
    wp core download --allow-root
    cp /var/www/wordpress/wp-config.php /var/www/html/
    wp core install --allow-root \
        --url=hcharlsi.42.fr \
        --title=Inception \
        --admin_user=hcharlsi \
        --admin_password=password \
        --admin_email=1234@gmail.com
    wp user create --allow-root hcharlsi2 hcharlsi2@42.fr --user_pass=1234
    mv /var/www/object-cache.php /var/www/html/wp-content/
fi
/usr/sbin/php-fpm7.3 -F --nodaemonize