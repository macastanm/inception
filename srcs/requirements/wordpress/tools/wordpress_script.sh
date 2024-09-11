#!/bin/bash

sleep 2s

cd /var/www/wordpress

#echo $DB_PASSWORD and $DB_NAME and $DB_USER

if [ ! -f "/var/www/wordpress/index.php" ]; then
	
    wp core download --allow-root

    wp config create --allow-root \
	--dbname=$DB_NAME \
	--dbuser=$DB_USER \
	--dbpass=$DB_PASSWORD \
	--dbhost=$DB_HOST \
	--dbcharset="utf8" \
	--dbcollate="utf8_general_ci"

    wp core install --allow-root \
	--url=https://$WP_DOMAIN \
	--title=$WP_TITLE \
	--admin_user=$WP_ADMIN_USER\
	--admin_password=$WP_ADMIN_PASSWORD \
	--admin_email=$WP_ADMIN_EMAIL \

	wp user create --allow-root \
		$WP_GUEST_USER \
		$WP_GUEST_EMAIL \
		--role=author \
		--user_pass=$WP_GUEST_PASSWORD
fi

service php7.4-fpm start 
service php7.4-fpm stop
/usr/sbin/php-fpm7.4 -F 