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
define( 'DB_NAME', 'shoeshop' );

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
define( 'AUTH_KEY',         '#0^!sma;TZcaq ae&1EbZN$] `_&4gXOGT7_0Y-Q`^f>p1?`w]/3~ittwCcW.[wZ' );
define( 'SECURE_AUTH_KEY',  '!L-CVnGy%0vnga]t#+[oq:+MAlUAM;v8g>H]J@#!4)A.S]bLP.Jqt7h%CJn-{>~[' );
define( 'LOGGED_IN_KEY',    'F,nXIObe}1 M[A/OA5B|ZeDoGH[pdI=Ko~NM%o._?yqlCJy@$G:0E?AcHL`bNE;c' );
define( 'NONCE_KEY',        '$(W;es{&&Gf|#0=Sba`=^C3d F2+7_`c##VC_cVJM.^jCGtYitb e^-9Q$!#|X:e' );
define( 'AUTH_SALT',        'S%e_=vIVtLZ}T&[.D1foBuO*(5$-kLiZI`p9T WHnc>x0_OFb{U%%D?8oGBJv2rr' );
define( 'SECURE_AUTH_SALT', '%Gh.-IX9jm xcw0RJsM>Uz.ozZcu<S57M~dw*8&uRqInS1;C}O]XRJ6gJB5j$g 8' );
define( 'LOGGED_IN_SALT',   '9SFQq*lH5hqv$K>BLY1WA9}<$F/L.!b3bMTK9k5W]+U[!__*7lln`-5[+aXsMiw{' );
define( 'NONCE_SALT',       'H$z-G+KUuh_0C$I,.zxy}xn9_c:RF7|f%SfK^D33# 2fd~`(76^S,/+^nrn(wA$_' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
