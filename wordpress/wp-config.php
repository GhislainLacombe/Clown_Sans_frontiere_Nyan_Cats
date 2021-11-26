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
define( 'DB_NAME', 'csf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '&[UV<<%K9O%=fS^:lsL+U|q`UgDD<E3]/N5Cnu{;YrX.G%[Hl;1s69@*k*HUHtd}' );
define( 'SECURE_AUTH_KEY',  '9}l|*2e}C^uF|$C>_>yBJKVmpz~$~.PlW *[yJPm3~kMxcz_x2qG1Jnc&dGov&<n' );
define( 'LOGGED_IN_KEY',    'eibGsK~~Qfl,2GA6qJGr^H{F6bW=nNrA7|CoJZvf#d,D@V4-DMX,[*zwq~kMAGdC' );
define( 'NONCE_KEY',        '$HI-QnUHC:vVE(>9&;rQ|8*Gz>AvQNvfs&6CYv:n1q[oC5ySr{?iSMA^9x<i8kSV' );
define( 'AUTH_SALT',        'fHN =xJMT,n#4wV^3H+7d]I&AY]&MZ)~ $Xk+1j;)XI_+B.y)5mSH$_tm^YzPtt.' );
define( 'SECURE_AUTH_SALT', '.=>>QZa$vdR_Npu1&lZTO#!lxtj-;Jy_ %Uv<~_l`4g1%79z5P^ahO7fcIsujxH[' );
define( 'LOGGED_IN_SALT',   'ZCHF}>!msY4g[5qcIwJ<80s_8V^$PD[BuG8:qyNSJANT#9;8WRJg$WB`a*#4L6F5' );
define( 'NONCE_SALT',       'B4y[@:xC4#;|@4wpbLzr$?VA)]t}i#J&u~6nsLN?tEI;3c*9){D<a7_-$|}k^EpR' );

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
