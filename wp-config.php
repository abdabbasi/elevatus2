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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elevatus_db' );

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
define( 'AUTH_KEY',         'sH{1nOs*_r)dE($NT?t.R=/m35U}NV7(?B5%-97l!a=lfOaYABRwuRT=&G_W,/uT' );
define( 'SECURE_AUTH_KEY',  'qTcK-!Z6xq5h/r,i8uoCb(HJ:~L 49(On~H;n39PIA|kz 7BqKG$PE2.0Iny?217' );
define( 'LOGGED_IN_KEY',    'rOjhb*9?3z(Vat->_oT7&aO+9uD* YM%YVx*b[S|K9LZmNU7{ZB{VVG*2G:f#Q1W' );
define( 'NONCE_KEY',        'J}.=([`%Qn^xo?_6}HnX0s7vMwH$]V@<~A~Cco5ATK7Oa>?!@Ajq<4,SNt-7U?_X' );
define( 'AUTH_SALT',        'o5R-|2M]%_#&8)xx!Vb%ZjQGYadD`u j1Xi_eb^7PL6#9OxudU+YR/uHi3nolqie' );
define( 'SECURE_AUTH_SALT', 'MC*n^+s5!JHrr+N=&AO^bY!@cp7+fsZy{*HH$3yKHx?R?=E6jBt0#5KTt$(P3,E7' );
define( 'LOGGED_IN_SALT',   'J R_cjvyNBR9`9(b%7CX K`pT:Swob~#p@,{B,z[2>`31u`OG[y/;S<!%IQmw>v@' );
define( 'NONCE_SALT',       '7I{X#CY~f|tT3sC%K~F}rQc,A6uKlS>pt(7P:RoLVssthDSa:>m98&X?i?W`r}FW' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
