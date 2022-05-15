
service mysql start

mysql --user=root --password=$DB_ROOT_PASSWORD <<EOF
# for security reasons delete the empty user and the built-in empty directory test. 
# Anyone with a MySQL account has full access to it and could in theory use it as a launching point for an attack.

DELETE FROM mysql.user WHERE User='';
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';

CREATE DATABASE IF NOT EXISTS $DB_NAME;
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD' WITH GRANT OPTION;
FLUSH PRIVILEGES;

EOF

service mysql stop

exec mysqld_safe


