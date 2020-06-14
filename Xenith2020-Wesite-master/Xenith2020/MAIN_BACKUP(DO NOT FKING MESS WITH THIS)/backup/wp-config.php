<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u975939485_vIXow' );

/** MySQL database username */
define( 'DB_USER', 'u975939485_18LFg' );

/** MySQL database password */
define( 'DB_PASSWORD', '8T9yJS0pJw' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '10PeF-t)2SmCl`~+EfjnbE:d,YP!$C[_Q@tKbnQJLV*0LWFb:A-Mbo)fp1!&)B^<' );
define( 'SECURE_AUTH_KEY',   'USMd 9CRqk}*yfk]-Iy 51o|> :QD`AL>$bR}<%%B|;LoaW^2Hs3gI+y@< [LPpA' );
define( 'LOGGED_IN_KEY',     'ks^$U-4 38R3T]P@P3F/QK@[s~@p*L=+N^Wzd]<+Po-wtnT3)oq`GcAK_G36HD{.' );
define( 'NONCE_KEY',         'wnC-RV<l.MWI@@ nx!^_z,y.%$*S#xTB_91yFfF.!D_4_ib&1eZ=BV,SlvOd;Xv*' );
define( 'AUTH_SALT',         '?4Y?G22 [U97 H~ff,S?Gf^<=#d.)5BCHQ2J`x>e6aZS?US;_lU3sLE7EC|wHuv ' );
define( 'SECURE_AUTH_SALT',  '=uDngb3,E=.wbOn11Z(`WIw[0nplMHjDy$02]zJ47tSJL NQcPk[D(P/Qe]ZtPAD' );
define( 'LOGGED_IN_SALT',    'f.b S4lbaAt>}oh4oXbU*gWF%r/FOh}/q2t.UlBm ~5PIWB{AbqmT3|!FfVfNQj!' );
define( 'NONCE_SALT',        'U}.L0%@yl4X^2U/9g{5(<L(uDKq%{;(xS<l>c2jxN$t-DMgN8M](4`?)[$X@m?]@' );
define( 'WP_CACHE_KEY_SALT', 'E)0[kNO/1xM38O-G*#t4KYS|3BMD%LA9LhR`{/J*,qvI0Y?4!_<DFu<A<VwRG0~ ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
