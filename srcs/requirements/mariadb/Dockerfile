FROM debian:buster

RUN apt-get update \
    && apt install -y mariadb-server

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./entrypoint.sh /

EXPOSE 3306

ENTRYPOINT [ "sh", "entrypoint.sh" ]