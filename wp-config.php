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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mphuoc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gbAgG^p]^YLk.t-A(i.3V-rY>#Jz2<H`swtJtK1]a,S(w|@B5&hdc!nw2Oz0%^KQ' );
define( 'SECURE_AUTH_KEY',  '_s5#Ke1xtOFmDo^3=A*etd4vjIHI<GPlI![+j*IR`!ew1TZhJXc-HqC(MDKFy=Kw' );
define( 'LOGGED_IN_KEY',    ' WI+TjUsKR$oyAlf<dyTl(:e]SC$V U;mDtB5s8!m5.y/?1An:m|c#&;g0#9pcXk' );
define( 'NONCE_KEY',        '(lJzzHjFzriN%*IB!gadD]YYO~/l3tr;=B@pPx|0,-%kS_O7R#>#m(BvO$vH1Kp}' );
define( 'AUTH_SALT',        'H7uN?MCnjPj OZsB~[yl_DqU_%n*?R@=e{[nF?jd:E6=FxD?<QZz|p^IK-UdTT{n' );
define( 'SECURE_AUTH_SALT', 'F0WFB!nEylEh5uG@zXsfe?{6<|J$)4}O|lTk;]a&%2uG#Yby3uPpTz!s?_wmje%;' );
define( 'LOGGED_IN_SALT',   '{0bttKDg,oX:t:{9!jW%f_U_},nf$1JC%AfBOVdtBeQSz:mNsWHXT>B!W?}L.p6v' );
define( 'NONCE_SALT',       '+9@hrY$deM)d~]Yw^piM1m;kCkvgmCvBpQH`;U/_pZubR/qL4)}90HfrOKq$ .[L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
