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
define( 'DB_NAME', 'Summer2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&?ap&}FIp|(u+B7+=Oop$|t_J/:5^vt|<bwpCvkEj|?A;a=O-E{{wyn7H}y5<56/' );
define( 'SECURE_AUTH_KEY',  '2kFZoUN).$l6:~}:R`sj[^vg>bY3r2aRK=+V[^<}1b*^9O]jPuT)E12?lKacHZF[' );
define( 'LOGGED_IN_KEY',    '^}LqhTOpF `E8A%ZcQ$5c+JP&; H@K8c@a!,Pf 6p8c{W9$Uq?o7wVAK@v:d6%qZ' );
define( 'NONCE_KEY',        'jjG k*$xqp7@|os49Sbx7d%1C}K}4l)Q/C,^eQ5Ax3 +$76(cljwS~,KD>Amh6v3' );
define( 'AUTH_SALT',        '^!AP3T{W0avQmLL>St=)GPX2J~(rl$3-y@2Iq<e[0T>lA .xWbCR9M%=`GN^*)3Y' );
define( 'SECURE_AUTH_SALT', 'z]S5 f.TSc ]c&*aZw<dx ndib=JuT[]@|3L$>v1V?L_oUK~W(}0=y*)qJ&:3/.b' );
define( 'LOGGED_IN_SALT',   '[!vp{KES:sO] 0g(;c*}e+p<.F1Zr?;f#_gn(#>AX]J_ Rjtt/3Dy~sl[2mQ8kHq' );
define( 'NONCE_SALT',       '^1u-VC9u<!!y-o.;@a=q]G)nX3i?_!wP*lKY?vth_`g;j{5OtRSk/,jfZKh !m@L' );

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
