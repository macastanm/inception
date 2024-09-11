<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'Abc*012345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2-(<B-*p_?BsDR }Cl[bL9bQ[?8@/E=5 -N~rC[wk5#{hOdBz}d4_D5PR)xT]4ml' );
define( 'SECURE_AUTH_KEY',  'LTqOp<y9`oPgBwGD+6?mrsihwfuC7 Z5Sj^,6sVl_o XONb#[MS8a@UCU+CTXkhT' );
define( 'LOGGED_IN_KEY',    ':QY$hvu;.vr ;;<#&e+ax~O_k~!)7i](PSZmt)}aUY49S7rmt/a&61,#?+Ur8$,:' );
define( 'NONCE_KEY',        'NPyNO{3A_prgTf6)o[Wod9OWcq(axsMhrr}FG#fUZD&SmvE2;u_>3VFWk7=E^IRm' );
define( 'AUTH_SALT',        'uj/(Ja)Q49Z)e=]cRh8{EE^,;_B61cdE[L:OQ$ek7-@(EMe]qnv<TSA1vHaQdzUC' );
define( 'SECURE_AUTH_SALT', '5Zm5[xel@rwu|[h>Rb/&Kua&s3Rx=<I)#Ia!@gTQP50>0wOx3-JrN@qO[O&2n9? ' );
define( 'LOGGED_IN_SALT',   '<>?*%IE>$ dda~JiW|CbmPP*Hk%%1{~/%]]I+ph9DN,f 4tqz&X*kz7(*q&MqT,Z' );
define( 'NONCE_SALT',       'V/A<:T:,e8k7 ,gJ8: u>0~p<G`>H+PR>M,a,`[-cWdlH63T @_&1&gA%Gaorz(8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';