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
define( 'DB_NAME', 'ligimport' );

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
define( 'AUTH_KEY',         'L)E<~M1cJ.EhNxQ~d+^@ybb#BXMH<kM&wJDrNk.1QiSEwMvY7/qZ>BAPX[=!HL?}' );
define( 'SECURE_AUTH_KEY',  'b@&Gs;!y(m>(E=c}hp&*m?o. &a13p5%a;@hhhN:;j4m1J^g77jf.x3^z*ZK+@_j' );
define( 'LOGGED_IN_KEY',    ':!9Z7#9g%}}gjDSNer<K.2kFIJ#fq&D#5{QQVW7!#i7 [2*b;{{0r1zwwF7jBTn{' );
define( 'NONCE_KEY',        ':[<o^jGQDJTz]I{AAjCIP(jcfxZE?Gj{,%/tXC*26xi]LG7ht2~tQy<[Ef,J{.LU' );
define( 'AUTH_SALT',        'tO0DF}wJMWRlisAd.9p(/pLoD8Q#*fiEWTg3kCB:3#Xj$^&gki!NR3&*czB?%U3G' );
define( 'SECURE_AUTH_SALT', '_TllJtij%iXZa$F^CW*L# !:yQ1bn@-I7_I&?]w5nce6wni0=_D<Pj9VZoteCaA[' );
define( 'LOGGED_IN_SALT',   'y*?[mA~QT$5D{z$:%+t>0TagUc042ZX3`4#$G|Gs871XO]D!^ZJ@_%pj|_1$Ty{D' );
define( 'NONCE_SALT',       '3G )S_?BjqL9<4xHZc&)6#Rkfnz-ybW(ha/lVqXOG;vKte*}i8;8LIBWG>wv*3P(' );

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
