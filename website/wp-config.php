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
define( 'DB_NAME', 'web_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '-T<Hni<l`b*pq}W40J+7ojjW2`&9]}SYuL/o{n=eTR4*IPyGK%lS]Me-qlZU5)X`' );
define( 'SECURE_AUTH_KEY',  '>){ARBp!F>$J&e|]CXg1;*1j5gp[&pFjPM]P=KSeN]otTMf?P8Xab9P7+k~e=8/u' );
define( 'LOGGED_IN_KEY',    'qeMun)7vuu-e=/8LK=kw?b%PTJ!HPN~N&6$ 0bL<qQm4_4YngrMi3N`^bE8a#hB)' );
define( 'NONCE_KEY',        'S8-qf}$LBkS)vf#?P6eTtKlK=V=TSC*10#S23Abbz0.eUQ{)|Y#wAlJvM9Y& FCP' );
define( 'AUTH_SALT',        '~7Xv3[%,3aVn2&C|#gMO`9uN?q}MG8OA63!Eq#w7_*WJPj]bV_AKNTmcjd5Hbyfo' );
define( 'SECURE_AUTH_SALT', ':j2uG9CweTe5<r*{@S}@mkq-I!4kavhstkO{4]74Y5tzf&Jrw+<AUl~k}^5R4g,e' );
define( 'LOGGED_IN_SALT',   'm}T1nEy=Ns.Fy`[YRfp><i JNG@j[=T=VADZm-Lx#A*ai9p)q6vf05Wqh*|nMioQ' );
define( 'NONCE_SALT',       '0x$MLrCD!Fvv~2xl$&X<[.8B?-KPZYj0^=7#*D&-mG>|jL7%p*30<GV6.f2IWfRY' );

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
