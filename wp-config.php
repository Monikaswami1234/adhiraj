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
define( 'DB_NAME', 'adhiraj' );

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
define( 'AUTH_KEY',         '2o3|k&9i_4W=?x45`X[mb*{a`_|rzgNc0vWTtI-o./5UYSVB#[GH?DdQk5`z}A/6' );
define( 'SECURE_AUTH_KEY',  '9RPN4f&rn9vB$G<HU0}+JMxH_/(-#*p,mXNH3`y(RK[Mtoq/y/Bp`^A+&ro Yci:' );
define( 'LOGGED_IN_KEY',    'BWapWcQV}9_t3<.Zw:8U:d@:gAdfXT>[0$ ;uhD~ErIcA}9=-]&b8)[~{Y^|I0Z4' );
define( 'NONCE_KEY',        'CHAnYURG ^9odW4mGp=j)koUIJ#2:^Vj3Bhri&KO6PONVg`]9H}RLrE71T=!i9,p' );
define( 'AUTH_SALT',        ']&4;Qj!ML*zs1PYaaX*i2V3Wgvc}}!ezBysi?y,kgClhPqi1;w<#/A=sj$q$L/34' );
define( 'SECURE_AUTH_SALT', 't@-CPinjqs7[hO+]pu Y({=iCN.282C?8aKWp.e/7<7l~<]1BpYA*lvB<o@Yya@J' );
define( 'LOGGED_IN_SALT',   'KOu1?7#2Ugzkmo*2P5Cq9#5M!,1EB4:&h;NylbADIrDTpi0,VO|mUZQYGjZPpQj=' );
define( 'NONCE_SALT',       '1h,7h,A^KbUEd1F)p9/6?7J=spK:LOPF3BV>eqqX3Y{XnTu]>kzD<[&JT|juA-`+' );

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
