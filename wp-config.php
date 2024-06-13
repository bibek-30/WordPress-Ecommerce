<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'lp1AAH#N0M/^``wq6@g&E6!bTe0:%NvD4Els?7N7]#sEjR^b(Fw]LlqE*]t8jY+Z' );
define( 'SECURE_AUTH_KEY',  'L=jT S-KD+6UCp1%E|c55}&c9{qvG.F)FaAU5Mvr9t,gcF.QZ Oq_NfEh$5Kxiam' );
define( 'LOGGED_IN_KEY',    '3Z59oa.eIk.Bm)gMc`A4@[:Ul.[/;EvMe.@iDGz$$67U ELNW=<]C{ad-uGmD[nh' );
define( 'NONCE_KEY',        'W)R]Iz[1}@@:?c[YF&HZ.4)CxS1fs8a?j<@=uhop/!eh.!G5]QLS9rcK~N<S#UZV' );
define( 'AUTH_SALT',        'CQ-WywibpgI[p^XGQ6xSHg77@B2r:gDB8`(a+xpLOW)T&QU*(10#P`c1ZE<6k_[E' );
define( 'SECURE_AUTH_SALT', '64NfN4*.vEE/2(2tGP`^eH[mUp]EL3m*Ui=8PLbN=~9!>ol_Ux7I#aE&x^6.~y02' );
define( 'LOGGED_IN_SALT',   '>(gS8`Ph2[~+#ObR#DxH|,^VTO?$.XX#B?~d/9!;.`KPeDhMLe+~?PE+lUh!_z<H' );
define( 'NONCE_SALT',       'QheSlssuHg#k,2Hu-8V99FT;ad^3}<(1*[XRQKIoQ&I1@_aY8{I#79a|z7{RDM+=' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
