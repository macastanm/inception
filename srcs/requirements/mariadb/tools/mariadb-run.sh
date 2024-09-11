#!/bin/bash

service mariadb start

#echo $DB_PASSWORD and $DB_NAME and $DB_USER

mysql_secure_installation << EOF
$DB_PASS_ROOT
y
n
y
y
y
y
EOF

mariadb -v -u root << EOF
CREATE DATABASE IF NOT EXISTS $DB_NAME;
CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASSWORD';
GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'localhost';
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$DB_PASS_ROOT');
GRANT ALL PRIVILEGES ON $DB_NAME.* TO 'root'@'localhost';
FLUSH PRIVILEGES;
EOF

sleep 10

service mariadb stop

mysqld_safe