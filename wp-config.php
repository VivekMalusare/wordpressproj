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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'XHxXGTKT.=h(9woWY(v}ON> Z3y:YeORaejKX?s_wj+3J%h|}&M*]%j@R1>V`?XM' );
define( 'SECURE_AUTH_KEY',  '`)Hknd(szjh[(d^<WhO?^kgK#i6h=nL==@3[`{ nz-[ZbyEN!Ys=ur9:6j)sw#},' );
define( 'LOGGED_IN_KEY',    ')Yz#rVh98WMu7.Shfl2g!syf|QbRJxLeYT[@0a:f&*>ZKBn#[B~(7CiAyr2Q6e$B' );
define( 'NONCE_KEY',        '2l6kL|V~kT-N-TYWxKi@D~nP-AuP>ONpDR+ITgxn QeUE6`PF,Wd8Yw[X/PsJgm[' );
define( 'AUTH_SALT',        'H(tG5#D/VttPd^_DvCyPc4e[[(V0:4s3fH6WJmb~x6,KRg)bjAYH3!Cg6]KHH<&.' );
define( 'SECURE_AUTH_SALT', '73/(0&f~v/V>kPnJad~]zGZ+$}C.ACp.Cd+l!bpRI`@%^P/#.0/R/<Acg;2+PfhJ' );
define( 'LOGGED_IN_SALT',   '$dR:Nu@,ILLKfC+74bB(t4,}Lm<tv30.]H4EOq<!Tbh-NL94<RRPU$3CZ,2h9[<:' );
define( 'NONCE_SALT',       '62Ja1eT$Z{1>4}aIj&@H?xcK=.4LM`6vt<G}]97(XIT3ZT4$>He(B5Isyi.^.{5+' );

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
