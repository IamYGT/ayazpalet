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
define( 'DB_NAME', 'wp_nqep4' );

/** MySQL database username */
define( 'DB_USER', 'wp_5jbz4' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zLhR0IG&1Q*Q#1Vn' );

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
define('AUTH_KEY', '4++|lzu_3OD7RL0Rx[uUwB;6G3_N&r]I8kDPhexiGDt*L-J0X4_VF~)y:-d8@L08');
define('SECURE_AUTH_KEY', 'as9W8;&rNtfPY8953i;Xdi9gJuY*iL]%2l!iF:616KZ20~K-_6Y+uZxF9mIk0X:1');
define('LOGGED_IN_KEY', '0BM&23s8qI14K5tjm99mtDu~GmT%f4m]-&iq-3H85043*@WJ+L_Z02hZI;6V5SVk');
define('NONCE_KEY', 'z-~T_Y/ViR6A&4a7D%O])9py)&6aa1r]4@%NZbZ(3+44)7%[*QGJS0In9Pcx+-#m');
define('AUTH_SALT', '4Fr]5%3m%o2WhKt/;-84N%]0#vzIn]~&&2d8*sbTpnAm7T*~PU2V~v:d1]xOs4_K');
define('SECURE_AUTH_SALT', '(bP36*]sYK-|h#m!:Q%(!5-9K51)6mWy86%5E0V;MEmStD8)fqbEb68y!6k%||a:');
define('LOGGED_IN_SALT', '8RN53VV|+Q]:IK9(*]-+9Ouv2HMdlu5@Njk+@5W57D(i#916/Nl)w/vfo2l|0n#D');
define('NONCE_SALT', '~F!6[1800WfG0881:%rc|C|H[To~F|PS0EL|V8Mo(6r#R5f;GK1hT8-65V7Ql63Q');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'D6nfxxm_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
