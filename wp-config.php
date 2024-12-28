<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Webpage Test' );

/** Database username */
define( 'DB_USER', 'diane' );

/** Database password */
define( 'DB_PASSWORD', 'Qwerty123456@' );

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
define( 'AUTH_KEY',         'v31$TRMK]m;VHT|+$QT6KZ;9H=Zxi9LFHduSt&ruM3/Aa>8x]h%u) 0Y_pDt&4/~' );
define( 'SECURE_AUTH_KEY',  'pKl(kW{GvXR6qEI?rAT:?UnYP{Iy.Po-<vD@qX}B[?fvPp{-tbIZSD>So!DnOmO5' );
define( 'LOGGED_IN_KEY',    'a<XN_dRZ _[JuI9)WVrQ-nb,<6I#&1:B/CN&0 `gwo!AAS}S!hVv#N*9 ]NnQ1)m' );
define( 'NONCE_KEY',        '7K_~j lNMD00Mj[q0AXDQFlCeAW|O&6e4~m!?+|W9vu12r)yLbsG[8ch&)0a5=AS' );
define( 'AUTH_SALT',        '$ueC|P+E-B@ 9c08,OryGSI1pVnW/|^CsELP-E;#E:&qVEajRF7E$#F3GQ?-9T*(' );
define( 'SECURE_AUTH_SALT', '/8+*/21e!!QEo]Tj2v){M;dx1scc.^Z*;nW*|}apAr=?rN$Pi`9<C2Ij^aeR`BEu' );
define( 'LOGGED_IN_SALT',   'si3[0;E*VR>f(w0|z{>TYpi>PC~,p)]*vpX$o4fWOC/^CT>0k.T%@oz?xI@R=H`d' );
define( 'NONCE_SALT',       'RX0ADwce0D^wQ!YaP$6E.a&!pDI4fC+mf>![)M.WS<p[iR6afK*Bc,tEIz@-PZnC' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
