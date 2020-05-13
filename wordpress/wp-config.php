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
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('UPLOADS', 'pv-uploads');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ya/2J2^EuVA+=XR/{yJuyY?$_i#{V!ij6 GXT11/fa$DD)W1|}avMY&N6j>M{ttu');
define('SECURE_AUTH_KEY',  'CpJ9Z[/0zoHl91iPn3:+ND2)xFw2*v9oiqO_rMI~Wj-qhm-r:R42b2.96ArGkxLA');
define('LOGGED_IN_KEY',    'R9inH$~[|r?fuS9!d+~6bf|uFsAL5Q#1<SkL%@^&z<t1},JY??[Ay&1!{KlquU1S');
define('NONCE_KEY',        'A=U~oF0sY3y4FhT3v@?lT{aLz%h+hV.T).5z6+Ifw[-ea+Rb0H+9Y1w^#xS@XihA');
define('AUTH_SALT',        'q[;r0oHIKap+kl9XvsYFO={tGnkyhXr:Z/2plY:>P1eM}3c]b!&canOHRkTa3;Q$');
define('SECURE_AUTH_SALT', '4?3@Al-DDAd>%vJk(U2i:)6)~3;i7h5N[Y~+qpGx(T-Nyr63}i794)mza<oP]p/d');
define('LOGGED_IN_SALT',   's(N>+o5K?09&-;umTKHo^yX|^h&b<TA++X*,u48m+BC]?K4_M0MhB=|{G[+w>ZS<');
define('NONCE_SALT',       '<UK+:;LS<~8myd#L)|h[`ZGo;(Hpk w75a@a| iQ6dDE1ZS3;7)`<xhY{mN/[#uh');

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
