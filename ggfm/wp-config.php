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
define( 'DB_NAME', 'ggfm' );

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
define( 'AUTH_KEY',         '%dz%(-*Sx49WR%1x;s.1z[zSsrx:|vN{@RT^;q@<~hO#~wGL|swTzcEx;jR3~NbP' );
define( 'SECURE_AUTH_KEY',  'N?^_j`]S7yq%gV9qyRJ2mm9RZzo-n-A SOV5W.VQ@F}U&+h:80R BJj:9ZO=;2a$' );
define( 'LOGGED_IN_KEY',    '>#+!Yb3N*@U/4:LQ(N-:.@~^$wH(JmilZ]OnOt{c-7J|}CaIP%!Yb>V+ 4+=#Z%%' );
define( 'NONCE_KEY',        'n.@qC2YJ%l$Uxlis=m&ogr1h<`cF zaR3uiRDOTK!IeYEC,s*oyw?)?w4mBg#-Bw' );
define( 'AUTH_SALT',        '3o<H4=^4> e9L` TR!({Z5tF.M(_%_KWH!d2;`k]e30#}cwRd4hwuNt-b]ai8VH-' );
define( 'SECURE_AUTH_SALT', '>3{}#BV9JIE7;K0wysQ+8-pRPeEWr#BGv#B_Z++VEXq<mHx5[Nn&8Hh-;6T#0:hL' );
define( 'LOGGED_IN_SALT',   'yDu<#PYAi`m?e#Vj_HyF]/yTh#-rj({b<a!fyi]?0qC2E0?p-q_vW85/P$(omNZ!' );
define( 'NONCE_SALT',       'Ld^<In5ReB3j:b3t[c5kdJJT>l<@c*5r/^t$(O5n]!t3>LrT*kB/U2{,pu`>$||_' );

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
