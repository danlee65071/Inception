FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install nginx -y
RUN apt-get install openssl -y
RUN openssl req -x509 -nodes -days 365 \
    -subj "/c=RU/ST=Russia/L=Moscow/O=school21/OU=21Moscow/CN=hcharlsi" \
    -newkey rsa:2048 \
    -keyout /etc/ssl/hcharlsi.key \
    -out /etc/ssl/hcharlsi.crt;
COPY ./conf/default /etc/nginx/sites-enabled/default
CMD [ "nginx", "-g", "daemon off;"]