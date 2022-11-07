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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'u9Vyu*Jz>~S_I.38s:h%XRAnFF`Krd y:5Xi-Xg;~BRCjK9<0.JJ*oYoe~B$L.]+' );
define( 'SECURE_AUTH_KEY',  'Je*|5*P8{Sg0Ebtzf?kb:,-y.B0,E]mEwq:gkz_f(TnY`<!x26Jh-$94}GbbaOrH' );
define( 'LOGGED_IN_KEY',    'AUx8pV#Lk<EdL8tqIwx)6AhV7pY/J2fO8PKs^(r7$j9A;0G2Z iCU%Ohi@LolD4 ' );
define( 'NONCE_KEY',        'ftiy9*::Q<BT5s?s*!WO_}CSssp5.]6+<hT~2foxKL,^kqstMxuY<JFG*wn[f+uD' );
define( 'AUTH_SALT',        'c^R`>RA.(]g]^J{HGjC_VA:XO=,sc.=Kum_Qa 8_UZ<iBs@=(]]+28hnmY*C<#3q' );
define( 'SECURE_AUTH_SALT', '^xC7|gQn-/Yt^h1_QVn>97Q5.wO|[Bbr<[@Yp.US-FHU8$1jP#>@kISk#i0/LDC7' );
define( 'LOGGED_IN_SALT',   'V1.%L~@#TZhQMeo6tqX-Npr25Vb`No`u%6(PC>z8bJ7[I*RuuNynn |2HnYT<f]I' );
define( 'NONCE_SALT',       'x<pMpE10D|BAhjq?gYsT2g6DgI*U<2Vc*On$+[nX1%K39_I)*Z3Xi>|b}i$85E$;' );
define('WPSITEURL','http://localhost:85/'); define('WPHOME','http://localhost:85/');

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
