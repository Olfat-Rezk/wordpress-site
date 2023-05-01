<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress-site' );

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
define( 'AUTH_KEY',         '%10z`2>?GZ{`wX$GPo9Cz)!(d~ht[pH`Umm+cLQ&UQL[nw`- 60Wi,bLtsbbh8VW' );
define( 'SECURE_AUTH_KEY',  '_&.Ko%<@6cgt7@G@@|gU`22Qx$_}_kD-/HwGj:&ZS2IkPJSBXKM}9&uOwaSA(vI9' );
define( 'LOGGED_IN_KEY',    ']%4p 2S/mv|5@cy]79<$W?pIyF-,vNtP$.6EMEEEWjPxbDM~rI-rt|ZZN9InTE>c' );
define( 'NONCE_KEY',        'bm5Wd<!z}+dE.3&aUuvV&_nBOkfF:1D?lAUR3$ii?{?g?^0+_h Q+r^x#^r4C*Rt' );
define( 'AUTH_SALT',        'E>[>7gV~~`UZx*9.^JPTTTp_0g[LP%%^n#/b*4V53A 01]PGzhQq6>upm_{ (!ep' );
define( 'SECURE_AUTH_SALT', 'y%FT)v5@*r<SOv>e{5_NcKpVe8yDM*x+RKi7CWK_Y U+o=zj<D+q1Jl0![i2Dj]+' );
define( 'LOGGED_IN_SALT',   ':yj5%sAR&[v6n<Ka[EZl*~,tF+1Q|OmBW$1F3*Bzl t3G BvBb{x#LK3]hW/:QP[' );
define( 'NONCE_SALT',       'w6C_R9%d>}K_%<3BJbnseV9;n(c6[CZ(xEVN)0X-`kpJ7j&Cuv@7w>^F|Bg0j3j.' );

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
