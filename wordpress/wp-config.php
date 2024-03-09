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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Wordpress123#' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '*4Zu-S-QZeP(KL5/TVoFzR,p97ifSDbnaO5JpyhK>q?3]qw{IQ4po7ww&?+GvW}-');
define('SECURE_AUTH_KEY',  'OR@5rjgxoM1$_s,vQ_jF&q,eW0J,Yj{/=OJ*Hk@l#n+!K++|F]rJGzl&lXAmHbxs');
define('LOGGED_IN_KEY',    'Tc7nuz>@x]5 BVK]u8IPL00=yWl:f|R2ji09mi*;<xL06-emDyc&foa>&MAuBRqg');
define('NONCE_KEY',        '4:/-TJFS8?k]mi4wr}<tj<w3CPgU4On N=uNvmU4WWR.Y:Uz!cf6J=~=Tt=>[<eH');
define('AUTH_SALT',        '{Z?K#TwT)u*y}8X-+jwb_-]J%y[RW|p!R@DA@teJ=0s9%A89*-AkOYA5=3ah$Pnc');
define('SECURE_AUTH_SALT', 'q,Y19OMT~_DL#9[w!v?&04DP4+F1R96>.[)0B|)^_vWKebf5O$5B9NdEd;X5kN6Z');
define('LOGGED_IN_SALT',   '8bH`6H#c!NGq|46^7EDSE;qBRJd3sDP+o^xY?eK+]M>$c[|9^aDtvlI;SqpTZWYh');
define('NONCE_SALT',       '@W%&2S^hILAt}4En>*9g1o{v4?#ZJX.cv2Q|#Y9RXmGnFw,n/H943hNt~C>B!6&c');

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
