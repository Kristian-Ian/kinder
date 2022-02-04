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
define( 'DB_NAME', 'wordpress 2' );

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
define( 'AUTH_KEY',         'Pt6V{{#V H|{XYnn&*y/AUd;1d[KD@f)~0/yPi:^^cWj*79MY@> 9cU-x3&b0/MA' );
define( 'SECURE_AUTH_KEY',  'vcFQFONPFz012a(%K|-@r,T[~_>=MQ5cXU|HE,[ENH@p]F9ATJAmP:(:n`%jV#F&' );
define( 'LOGGED_IN_KEY',    'hm-QN~<RS!J.YsHGx]AinA5E=|yLu@p^/ndDS^LQdXyFE/4G.FO:_FSX1I,UjI~F' );
define( 'NONCE_KEY',        'Lc>_I#_$(;65?;q(a5siD0>9j]ggIC9.Kr2>w51 kWz:g7X^p}.WA-+oT&gB}jN0' );
define( 'AUTH_SALT',        '&HFKRXqCuW|p` k;A8EBG,zrt{onEm*~stEvHHTb2.;|l$8%uz32x,y6^EC@I{ y' );
define( 'SECURE_AUTH_SALT', 'g `><Bl_8_b*l]nZB6_Vt$JlX|nvz8Rx|0Ivd9d32EYs1d%$=4gRj5XS&pC3Jn.~' );
define( 'LOGGED_IN_SALT',   'TlZGJw)6BHfZb99HML/qq`<`EPy-0+}iFVU-Sm)-8 Y?`QVX8t_yt*m:e22Nt!1;' );
define( 'NONCE_SALT',       'mjoNJvb }Jz4A0?a 5hfN6e[#GL21uWcm#~A&vgUfj}_3  5$jHuQId[~HiQ`<|_' );

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
