<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'yQEC^gg:u=FUx|#1fML:,^M*s+=S>1=u6C/OzbDi@o%[<p9&?z-u[}Fm>T=_1sEs' );
define( 'SECURE_AUTH_KEY',  '_^liFs#b@CI2/, `OLgU)EYT-nh)toI~9qZ=(AFmKwL-iAGXx0Vv|n}f)@3qBS){' );
define( 'LOGGED_IN_KEY',    'u>%^@5jj:k<hDb@%Jt]DJa?N|,$XK1uM!6ytoB]io@}D+:BLA_=zh)f=87v3hM1S' );
define( 'NONCE_KEY',        'kzE z?tLY/7}b*Ds BR}wE|&q>AC|mkC(9[O76M3,Q#VybwW[$`=>KEmL?Z5<=E]' );
define( 'AUTH_SALT',        '^-}d#yHyd*k2*6Q kyFl`DUpw(5h5;X tMfWnT#lQS#gg E(wSN&d>iw^{QoBG<>' );
define( 'SECURE_AUTH_SALT', 'eNz.m9@G<r*wC7~qS^;5aW#{`+Ae%:QX(Tu@99vr4aXwsIBI4!WHPng1L]JEm!Nl' );
define( 'LOGGED_IN_SALT',   ']>wrjg;+1 QrF!?7%31,jJg4E6BhEYG*-]@16U_.UG!,V_2+ne6h9}LrIKs&_kP6' );
define( 'NONCE_SALT',       '#R2HH0G=8TF+;%qaL>F(&Iex)~h>h|3krV75n:2uS>@>3RyHj(fn:;F@o`LMmf|g' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
