FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install mariadb-server -y
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./conf/new_db.sql /
RUN service mysql start && mysql < new_db.sql
RUN rm -rf new_db.sql

CMD ["mysqld_safe"]