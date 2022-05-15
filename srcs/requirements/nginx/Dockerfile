
FROM debian:buster

RUN	apt-get update && apt-get install -y nginx openssl

COPY	./entrypoint.sh /
COPY	./conf/default /etc/nginx/sites-enabled

EXPOSE	443

ENTRYPOINT	["sh", "entrypoint.sh"]