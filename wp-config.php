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
define( 'DB_NAME', 'tahsinkaligrafi' );

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
define( 'AUTH_KEY',         'xMV)3(_H-)z-S{Z*.VTwKw5C^5saR3a{YX{D3=l3*~R>S$[Hj~s8Z{[i2j8^.DyI' );
define( 'SECURE_AUTH_KEY',  '-bn`p20,s&pY@22w|MHED&?MOc9l!M^-+>uop;wDBj|_YPsGdkv=[7[{T]y}dF|t' );
define( 'LOGGED_IN_KEY',    'W=r2LhZ<^y!|1_Symbs5!Hf6ntt^M[-P7/j7cPzpupcg-.2{4rX3DS#zin7Qz6W;' );
define( 'NONCE_KEY',        'daxy{Lkd:9^^W#RF[I,=~L}3`b:~W;M~IF{>V]wTc=l^mobni@c592R}Ik,O:0$]' );
define( 'AUTH_SALT',        'N$O9,c$(I<#O3cFSpAn(v2VvRE,A4fZO[+XH{xh*;}_Th3[Sy}UfRd#@K* ,dra!' );
define( 'SECURE_AUTH_SALT', 'MJIh5CWe<}WRH8L JlOPy!uoRST#0-1!8&G$D0/ 3RU=E5+$?g25qR#,_l]ohyg1' );
define( 'LOGGED_IN_SALT',   'ZQ8z]Yo{#}{r`) T|g.:zAE$y;6yy,=&HMa,C7-hE__So?A@dlYCe.e6YYy&gt-?' );
define( 'NONCE_SALT',       '?bMvq9(6 0oJaIoWk#(tZ`ApD)F42lJW,Hl4W!Q;AhgKopV3(I[=|`Ss}++b/.Vk' );

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
