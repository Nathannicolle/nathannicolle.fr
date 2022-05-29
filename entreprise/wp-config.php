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
define( 'DB_NAME', 'wp_cohnz' );

/** MySQL database username */
define( 'DB_USER', 'wp_iphna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mw%zNaO81&3hCAxy' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '!L4271|4DesAYh%Q]hM5bE4/fE#y8FH*Htat581w@2bHm_U[hn*&3I]I5k[I8_!C');
define('SECURE_AUTH_KEY', '2Z9AyZ5Lx34*u2/2|vFY8@956+2yX71Ps:FQGC%l70Nu7x*7*#jY_|sPOiVW3Ocv');
define('LOGGED_IN_KEY', 'Y!3:5dTN;;&K;cF&A5m@2+i/|8@n!5[yYQ*7u-8I05o47bJXdM9*7)7Rl4m/UWy8');
define('NONCE_KEY', 'lofxz%R&]n/B5_B3tw0UUrWQ!@(:3qc%ZUFb0T*B_4]M1+A0J)2q8Yf70usQQu;#');
define('AUTH_SALT', '%]TSOR/Y9a8!45TuI+@z/hZiK0Md2p|%9Se&-[+a5+39/C*u5)UvHNOA*PWpgmYs');
define('SECURE_AUTH_SALT', '[@Xe;%!5p56u*Te6Dmu2m:/63(74Cxoo!N9BnfmkT;s|32[k7p2;z4rK286;X]64');
define('LOGGED_IN_SALT', 'd%5!H-(b#M2Bo-QuW+9|dq%x0OY0s%)zY87+QCY%8:5Yt4[kcb~cIz3:dNME1d[b');
define('NONCE_SALT', 'r[0vtQB6zk:g902su12B6@A[7c5K91io)~15:&T97;Z#*aVpZa8G[61!wE)[V;BY');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Y09E0_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
