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
define( 'DB_NAME', 'clownsansfrontiere' );

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
define( 'AUTH_KEY',         ']&7~aqeCE/o,qx&6hRuM@Lu^-Ol1+o.6W[~U-z0;Frhacc|>Vj_Mbd:)y3Pp,Zku' );
define( 'SECURE_AUTH_KEY',  ']gu$C7@P;#XCJ7.vgb#b0m/x,G]CV9Ar,Pug50, VImsh,@>=g/&f1j-Q,1i[[#D' );
define( 'LOGGED_IN_KEY',    'A_Ch.!]#>#y`pesS(?!o1LD$ke+8QGL?N{w}UnS3.f7@R(aICB5:9z_.0<?O,V~>' );
define( 'NONCE_KEY',        'W}uj*^l,<H?M^Bb+t$fDe vlv!s49f]RV]jZlavjE#+ih8|.gzA(|v6;/X6RfF+L' );
define( 'AUTH_SALT',        '%O1I];<oYm}S)9-smz;6Tmt-eEr@Zvtu=O;;4YOnUf?R>[tFo*Z.RxM}QQ0=e_&,' );
define( 'SECURE_AUTH_SALT', 'lH!s:8I2D^Ct>jrt<4ufDF8OO8y[:@_aR&`Ap@.pFPw.@@lRrK`_ts3=pU|dk8?x' );
define( 'LOGGED_IN_SALT',   '.tJq#[3OAZgGg `u?V~UKeu$fo#+S~50Tkb]{#AL]Vdkq BR86+(J`0lr{cj+gY<' );
define( 'NONCE_SALT',       '&M},&Ltt!l1Jr1Lj1};^TsPhL7NZk:(SYt[9;aq4iH^{JA|dg?@5t7Nj,k:s./#%' );

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
