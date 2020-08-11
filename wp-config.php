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
define( 'DB_NAME', 'testwordpres_db' );

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
define( 'AUTH_KEY',         '3StzOpz},V!fDG8t?myw{i+%c1]_s@??TiIH$HNitQTvH1I)e,1i`]@i7Yq]P.2j' );
define( 'SECURE_AUTH_KEY',  'Vek_#J]?%?BN}>{KYESDZjidU)|r1|O(PKjQ{+D2;1W$uU},n}E`bsbfs3+39lph' );
define( 'LOGGED_IN_KEY',    ';7g0uwd7&b|p45;MVpcN!&2!/Z)4]fCB>2Tw?lL?<I}!?x>(XZ$>ejd+&F#5%Q28' );
define( 'NONCE_KEY',        's]DpG~Qfy$nT%u-`JR/}rWJn/`F^k/@NF; lamT`}@4eNUNk`v.r!z8?@B]7iT4&' );
define( 'AUTH_SALT',        'X1Q($aLiXS%`?/}]Tt)nUrE?ia9f[K%J`aef<fjX}CW{5Le/lL);N?GOKiyCzB--' );
define( 'SECURE_AUTH_SALT', '4:(>Y}Jm}6Q>Krp^p%KH=Xgk>cCvgZQ#|.)nPNH%f+;7Km xC_$H? R]2LI)|&|?' );
define( 'LOGGED_IN_SALT',   'M<!97keSCrgV%#b22_I`eAuUj}O.o;$Ft4|u_oM)RJ^1bPC#{,(JEPf#/mQoBm>S' );
define( 'NONCE_SALT',       'R*_rLW;< {JQlDS$,`G5Bp!t=n/9@7{A`ckW>~CkXFuSCPY)S#9gbUtOt|@**n(D' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
