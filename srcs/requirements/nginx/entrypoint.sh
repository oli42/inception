mkdir -p /etc/ssl/certs /etc/ssl/private

openssl req -newkey rsa:4096 \
                -x509 \
                -sha256 \
                -days 365 \
                -nodes \
                -out /etc/ssl/certs/nginx.crt \
                -keyout /etc/ssl/private/nginx.key -subj "/C=FR/ST=FRANCE/L=Nice/O=42Nice/CN=${DOMAIN_URL}";

chown -R www-data:www-data /etc/ssl/certs;
chown -R www-data:www-data /etc/ssl/private;
chown -R www-data:www-data /var/lib/nginx;

nginx -g "daemon off;"