FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y php7.3 \
    php-mysql \
    php-fpm \
    mariadb-client \
    wget
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
WORKDIR /var/www
RUN wget https://wordpress.org/latest.tar.gz 
RUN tar -xvzf latest.tar.gz
RUN rm -rf latest.tar.gz
WORKDIR /
COPY ./conf/wp-config.php /var/www/wordpress
# RUN chmod 775 /var/www/wordpress/wp-config.php
RUN mkdir /run/php/
COPY ./conf/auto_fill.sh /
RUN chmod 775 /auto_fill.sh
ENTRYPOINT [ "/bin/bash", "auto_fill.sh" ]