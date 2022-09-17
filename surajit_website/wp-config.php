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
define( 'DB_NAME', 'surajit_website' );

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
define( 'AUTH_KEY',         'rw<-srSLF?QK8e,in8;D(+0]%$|ee99X|P9^#S{f``#4XCFECj( :JY?sfN=`MJc' );
define( 'SECURE_AUTH_KEY',  'R;c@3YumZ(q,+:*2tijH|UkV/x;[}/6j,zvLW-7SmfkoUU<0iIPf+Xt6Omw/5lgm' );
define( 'LOGGED_IN_KEY',    'A<Mf9@ya_8vVRc9!]aIv}ABhKDB@yNiG@C|9*7O4hs>hYDxxi%6T!%#JQ?(o(,4J' );
define( 'NONCE_KEY',        '?D-M))[A+Z(9N )L|rmCx}ho0TY7Di;E/c-cYjLliBHO|.u@7<Z]$&cc*{6u5Ckj' );
define( 'AUTH_SALT',        ';kU_CR[e$:~kZ@H2j;`k{aCnfkFKlu4dW;%Vni|F&c+_UGxl 8/U!`+=w5}N!!K7' );
define( 'SECURE_AUTH_SALT', '+W/kN]DoSOmpRYT&sqZ;%>aBCbzlq7dz!>MqUCIDYU>8BB-1?PH-/R46423t^V}=' );
define( 'LOGGED_IN_SALT',   '~j[r9c=a6;%$lJ?w(Sp0w$[y{$Y=i.BxmMvE[TS|a0D[e<H-8l] JmOh*W9U`UI9' );
define( 'NONCE_SALT',       '6Ez1Kkh>izU*5AU9S}qqZ}&Fwk}d*I vEn[ck5JmS5k7D :hL,-T3`Co?>4=MxY1' );

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
