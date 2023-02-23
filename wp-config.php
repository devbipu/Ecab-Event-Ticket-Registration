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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_ecopi_p3' );

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
define( 'AUTH_KEY',         'KQVbLs_fpkF}JpF:+F]04Q._mU&#qd(csSJu ,4Eai6O~|zLV^f[dg/N6nweljLA' );
define( 'SECURE_AUTH_KEY',  '4 W0AgaHn?Zuo*D-wXsaU~5u+(vlDm#mJBjIC?Ff=X1*6qj5wKbQy6@BA)0Wt~c<' );
define( 'LOGGED_IN_KEY',    'X+AkPpNhjW#ZU6YjtEjAG.2>0t$@H;=,mtE/Iwm]s1,#Q.xaF1L}c9VKZWa6,0SO' );
define( 'NONCE_KEY',        'U4hp/&6OY`t]21/]@<hv63:IT?.);sU]ghe[>%*~.et1MrgW)&Jq-cqcO+*Z,>(@' );
define( 'AUTH_SALT',        'sPoB:3&$3Oc1Osyp`I4Mr%X4w0kX[WMZC><N9Hq%#I/|<`Eyi2JRJ~Cqatv8a%]6' );
define( 'SECURE_AUTH_SALT', 'd|Sav(dNO}9OhJ[@7G(IPD%vs[i9m) X(+_U0QB%6z3:,Orc~n_h_nX|0X#SMqX9' );
define( 'LOGGED_IN_SALT',   '7}+%+$1^1`lAB#/nd!*vFENH6.B4+Hu<Y)K29Aa2=.9dcm7FQ}NK,L_x^QhbCUQY' );
define( 'NONCE_SALT',       'T8H30f0bOG/%j3afo?N8MkAYIVY:B{a{HsC[t2}h8zz{qEicg^:R75KH,io24fO*' );

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
