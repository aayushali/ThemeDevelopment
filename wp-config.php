<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projectone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'njRnB:[&OgHzsJ3NuGI7q72sg$fJ{c[3<g=Ceh&e5Utz7XI02H{ALb20/wBrrIil' );
define( 'SECURE_AUTH_KEY',  'T0<I4-5uq`3pdT|C=r;^U;3WW?>5i.`:4SC(ox=~Seg3UdKF{x><Zf}L@o?lF;s/' );
define( 'LOGGED_IN_KEY',    ')XC17|@y7MpAGbDC=ZuLn8HJ1,sH7X&eWZ.N6w}}ej|e@52) //!*i|#.ALk/e6B' );
define( 'NONCE_KEY',        '|Mm$@^Sh)a6R#:[OuIw!:]Q?e}VH0:9oh{:y)z6J9FD-oSG2hh[@GY@:GJ{3BBn:' );
define( 'AUTH_SALT',        'y F>L0PrRNS;??pF0 aHuwm]bs{=r*;!@q h54*dB9MQT+Q#Be,TX1?6$b#JpKo3' );
define( 'SECURE_AUTH_SALT', '+$i~Rdb%q`}mq?~]l`?UVc PS|XUz-7`<a-j#}f`O=4%l^%zjYcg0Z2j?xV6Oft`' );
define( 'LOGGED_IN_SALT',   'w6Ykj767h#+C;H]-M[LM(JU+rcOmIarf>B$:E)[ ,GW*@bwUj9.o:tE;*g:V_=F`' );
define( 'NONCE_SALT',       '~RRJg%~m{|Zo}e.Bm:|63|DNtQ*7r2nZwDzhA8fh.%=A]#n[%2>njh ;;:?fB1Uf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
