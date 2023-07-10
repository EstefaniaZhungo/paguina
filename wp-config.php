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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2._C.6*ab<,Cs&qMa-VQ=Q!JPAB)z&vyW$Pqhx^x812=k{EdudGnA0I`T<;m`goe' );
define( 'SECURE_AUTH_KEY',  '.VL$j5(aIjhhnv,Q15#AII354HN1g/W>UDb{*v|KPHchPsLiI#= Rf23R#T?L8Xz' );
define( 'LOGGED_IN_KEY',    ',-t*m5]5!A%vNk2eIX]5KHtrd>%h`<eJfH{WHG$@ZN;~:|U}Kap&$KhdYFM9EB57' );
define( 'NONCE_KEY',        'cVxE}YqF)U)n-%Ux9(BA~{Ed!t}FL7~CXGu=-LQY[!3mw-wM^qws:z*7uj$5Q6r[' );
define( 'AUTH_SALT',        '[_}TQ1dYB-8bk)H8*b&IwZz`*M3 *Ocrl[bgw6fp0Ktu-JlJFd/#3UYVu^hH,+Zs' );
define( 'SECURE_AUTH_SALT', 'rjfEGXaPALS1`SU5NC~}u%n?bp1+h4Mx:`<uC*A%YQ>hmLcNMo6jcH]@=OTTzjAa' );
define( 'LOGGED_IN_SALT',   'f5>**T17&RbGIS -[&7%17qDbrseuvr&cWH/(ItU4GY-lU8ehya? EcO0}s]_brq' );
define( 'NONCE_SALT',       'nk:IA-iXW,B,&:UiEq{M:]X4?rm{G$!MDLj;1  %1D^Un B=6#y64RD)^&qIqlDt' );

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
