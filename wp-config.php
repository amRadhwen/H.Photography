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
define( 'DB_NAME', 'hphotography' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?2(7{*Vlk%NOND,)c`TYEVx@(3_~WD[QXmX0^Hu[2,pE~IB-372x|=EQ@p]5}=L3' );
define( 'SECURE_AUTH_KEY',  'A>8Zr*4cw>&:._.%=Pti!HeYkNjpE)=e+jh3J;^a2H4`#knl-LBW?/hEh$;QT )?' );
define( 'LOGGED_IN_KEY',    'h4cl~|;ADn,&t~L||FT%F=*s(C}rxPXOdz)mU&7M~dvVNvn~ITSG1X`I<YiICE}9' );
define( 'NONCE_KEY',        'dL<n7kEIC:DoL5y$Mq BzUh*#)U@>RV52#V0dq(El#vLL2n V9R8=k78xmA2qZ9<' );
define( 'AUTH_SALT',        '^t?}i/}1h-U/M$GW<oncr#DG?a0aop$jMiXW+Nm:.&zjDxH5<K%Kh -+pK)U>:)O' );
define( 'SECURE_AUTH_SALT', 'sO1QiDO;G(T]ytrotu}T_:[~zTi|X((Av.(9:JL^rg1oO0-bQL0GUt.,;f|pEq_K' );
define( 'LOGGED_IN_SALT',   'f|2(xb9TFkTYV[xL|.beX:/5V=9I|70!4zJ|K&B[gd!&$`|fF3Qkh{OfWW5,t%Go' );
define( 'NONCE_SALT',       'z6NB>FrI<{LX[P7`Tq(tP%:3}0FaV:p.AGs|tL+F]pSTQvc;rE@`s6d_DxD%.}TT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hp_';

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
