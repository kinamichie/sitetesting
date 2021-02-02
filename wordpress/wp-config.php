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
define( 'DB_NAME', 'sitetesting' );

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
define( 'AUTH_KEY',         '(#,5)axEsM5]K+ BC4BUIbj7R=t})b;{a|Zd!d:|8mPIl6&%+ZHDcQNhx,.ZnA]m' );
define( 'SECURE_AUTH_KEY',  ' ~&#P2*coJe2LAuRpj$BA|m:}e$J@%Zm{.sgv$ihT||h9k-p:?)Gr>qgYC=|a#_%' );
define( 'LOGGED_IN_KEY',    'iFcd2L-z}P{V|Qi5nDR6RKt|u4_>:5B2me=#A4T:RMo,ir]uC-Rk[Lu</.`[!oef' );
define( 'NONCE_KEY',        '{D3W)qQ{toKa+Z;+Nh2LKTY<=q[60EN9 L[^C$MUk5KbU]cQZRu^jNn,E1n@nY?#' );
define( 'AUTH_SALT',        ')bUdHl;o#n#CS@jLPPDe8CIHvBqit*r+R@Ru=QZghnmqQZ7-] c9grZ`e62 E&kS' );
define( 'SECURE_AUTH_SALT', '*0w1pwObsJ|&iR_L!5}O9 aL,<9kQLOp`{6p`f`N6qr2`8f~]s~jkn6WL5m,6ig(' );
define( 'LOGGED_IN_SALT',   'lP~#@40::H0R[_{XSu/I4D/RxJcwf|1ep/Q1%#:i=JaU@=Z]fSINtcxu9M5?glP3' );
define( 'NONCE_SALT',       '{Hcb.>*.tBTd}$42B5~wc_hh`{Azrui875E<DAU)bn$_v[g!Brt.vwx:u!3GoETF' );

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
