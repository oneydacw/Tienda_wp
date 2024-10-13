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
define( 'DB_NAME', 'portafoliov1' );

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
define( 'AUTH_KEY',         'u?u6smCd0mCExK~lJ[+XHdL]jl_nEoE_ DCVB_6)E/l9t=;%3b!*^5<$[]I#{g!w' );
define( 'SECURE_AUTH_KEY',  '?%Ag{AVbB<8;6$IfPvFi:A@N]X6x6_}Fs5d:B:(lUG-t{(!#{eQq@7(gX3NMI:=N' );
define( 'LOGGED_IN_KEY',    '-Xen1d=14}[C+VT%x+=QA^%=~}I.D;.Uy~ZZ[[zfoe8]!0.I+xs_X<j?,udt$Ft1' );
define( 'NONCE_KEY',        '  Cd,W{]?eO0,I9vqDRV.T7dFO8jHH&Dzkqjj/fm/L :T!fE5TIQKvumh`AL]MP_' );
define( 'AUTH_SALT',        'I!dinBkVwJ#W,4zO&m-:oK*@8YD6z~=!EDqerT1Gl:;)-H)upCw)fH{VA?ToBk ?' );
define( 'SECURE_AUTH_SALT', 'dog/!OoVt0{^oukwd-aG,)Q9BT+Iw}Z4uhN5evOdn<7&Ned=*EjB|+;oh _3ew9S' );
define( 'LOGGED_IN_SALT',   'hA)F: 8Q8Ov^{-Lfup4~UI@F&J64A|=e,DX{[:VqNq`2>rL%.x6NmMY,_pxk&gET' );
define( 'NONCE_SALT',       '9)BjxrhB^I1OkS(G0M$?%,CB;OV.:{W{!_,w&#:Wh3P -=]S0A_EEKtI7p%8>O`{' );

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
