#!/bin/bash

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv -f wp-cli.phar /usr/local/bin/wp

wp core download --allow-root --locale=fr_FR --path="/var/www/wordpress"
sleep 2
rm -f /var/www/wordpress/wp-config-sample.php
mv -f /wp-config.php /var/www/wordpress/

wp core install --allow-root --url=${DOMAIN_URL} --title=titre --admin_name=${WORDPRESS_ADMIN} --admin_email="ochichep@student.42nice.fr"  --admin_password=${WORDPRESS_ADMIN_PASS} --path="/var/www/wordpress"
wp --allow-root --url=${DOMAIN_URL} user create ${WORDPRESS_USER} user44222@user.com --role=editor --user_pass=${WORDPRESS_USER_PASS}  --path="/var/www/wordpress"


exec "./usr/sbin/php-fpm7.3" "-F"