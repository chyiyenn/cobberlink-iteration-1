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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u787525150_QuEz8' );

/** Database username */
define( 'DB_USER', 'u787525150_wtdqf' );

/** Database password */
define( 'DB_PASSWORD', 'nIWp1pjO5y' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'f,]~8GrL+qd[G)]<YjsT7)j0K3v=&/<)[?S@*#Hv~V-SRjfh.5BYy q6dc.Wfu.6' );
define( 'SECURE_AUTH_KEY',   'YavZ>Vg)tezQ^6t1Px-Jns>? 5&%`)TDTHUuza;0^*bQ;/s KA:U3Eid4KfsJr!}' );
define( 'LOGGED_IN_KEY',     '2C+&524US35 t$oSuf:(/uoV<F)J H<$WoyC}S&9!2K(Y)Fnb6L`l)ds&0Q}uuyM' );
define( 'NONCE_KEY',         '?~5t|*M0CxOdZ>#B_Mi exWrT/x, jiqHu^ya!M@R~9@XvU,-QM3#{c*2eL-Vm^?' );
define( 'AUTH_SALT',         '!q/ao&0Y`zF=<{o}`] `?},I#<S>*&Ix)b#ni+^ffYcfv_=,ZRux:G;,w0UE1ki<' );
define( 'SECURE_AUTH_SALT',  '#JO~~o+iiRl8@uuj7?;xPiN`-:_{5zHOy?0zj`~qtw;pl!*n1rp7aF{m^<`)7,4=' );
define( 'LOGGED_IN_SALT',    'JT$0T_#V$gc(PDb@,MUr%_)X#^Wu(xfZ7^&vcw1>_6d`h6w4X./?%cej<l!#5l-c' );
define( 'NONCE_SALT',        '^<ev)w5`==|T8O#KZ0u;<fXQ`@g:U`cv&ZP,]XR*xqFgKgb@z8JTO+/C2/cFseS^' );
define( 'WP_CACHE_KEY_SALT', '?PqDeyK1%<it_? ;$(=gccj=-zY}KY8z,YC-_t4~E04Wz rL{r>-uikcM>dO`<!*' );


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
