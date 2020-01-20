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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

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
define( 'AUTH_KEY',         '``X(>DX,:BQ[m:rD~bZ7#F|:%)3/K7_NWxll=]!sjCt4s@%}ev4VST$KU|3|OWyA' );
define( 'SECURE_AUTH_KEY',  'BSmgzC[?T(nq*D(Eu;[nM=AV,3G5QM^KCoRbj}v*msgYrF.&E_Ui^jBW-<h;(lW&' );
define( 'LOGGED_IN_KEY',    'P_3mmcyl&b)gfL5Oe,RCJ0I3V-DoZv<Ir<aF^8BDG?hJ5VRd/OHoodJQe^0Z,d7K' );
define( 'NONCE_KEY',        'v@Mhh7_(kEpbcT9]G]&0(zbOf!,ujScK^_2r<2^lO_BvCabk9&&LSn-CT9y5T<}v' );
define( 'AUTH_SALT',        '@S@Z esyZWTaBJASTB0Rav@vx!zzv[P #Hj;=_z~6$0v-,Jm5Az3.{Mj1Zmo<e&,' );
define( 'SECURE_AUTH_SALT', '%Gbc.>n2Y}aXO)h0y%x2c77=|@6URMFR:{gU=lI!;otuHi8K9@2Q;9e3!k_t(vpZ' );
define( 'LOGGED_IN_SALT',   'I4^^*`(>wGh:f]n~RMT6mR5#n1t70Cydms!b[2;#se|y`8*>bVvT%Bq[{mLAHv0>' );
define( 'NONCE_SALT',       'vduXq[aEB5iqo?LQH%/|EmLH C)U`Xce?>XWQ^YWZ6NNdx(k&Oj~]>t&Fl4,kH<o' );

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
