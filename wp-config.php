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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^iDM|!*/3ZgB8>5QM. p;}rS=>aSaSceQ`roktwt/niAF4RfSjPm%:#_3GeIO}[b' );
define( 'SECURE_AUTH_KEY',  'lMB+&5{qn,YCv P&G5S*2My~?xr:o96{B:H7}Fz%qa<MR7&WOrC]EctdW#8}>S/I' );
define( 'LOGGED_IN_KEY',    '.w5{z-@G*mZz$81ZM NK0o)}+}.k/nIJ/8.d`x@h:r(A=}Jlo9,0iHX}Y$RhEx=K' );
define( 'NONCE_KEY',        'kN.u_kA[d?SZxpQML=t|KF>Q]tgX4=R8{o6ej,sPs=7f=.;Yz^R#P~v.w.Oz}!l,' );
define( 'AUTH_SALT',        'ilsR*EtN30mafs$]e_va5^9L|5dyZs,)IXTB8/DT8yMvYl?wRhN%62yG }B=Q?2[' );
define( 'SECURE_AUTH_SALT', 'E.-^,iZ6<`Y_*NUuDW`ei;D*Q)Ez[^/>kjM);$sY/fLO0Mv,M H3`#ADQu.}[P!q' );
define( 'LOGGED_IN_SALT',   'pJCJ^w&Zt:p,;$z;_@PN^~!Z6z0k}c~U?F:#4waYX51LJsdc^+~QCA_UQgi(v-xP' );
define( 'NONCE_SALT',       ' `k0.f(|_oJ`~{8{zmV[3~lMu2:C9+yKC6?I-5lI]%a1NAJ[P tGBf$8{iw>`:I^' );

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
