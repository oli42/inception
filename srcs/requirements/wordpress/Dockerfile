FROM debian:buster

RUN apt-get update \
    && apt -y install php7.3 php-mysqli php-fpm curl
    
RUN mkdir -p ./run/php/

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./conf/wp-config.php /
COPY ./entrypoint.sh /

EXPOSE 9000

ENTRYPOINT [ "sh", "entrypoint.sh" ]
