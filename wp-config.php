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
define( 'DB_NAME', 'new-wp' );

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
define( 'AUTH_KEY',         'x$gfo.rQLC(9P6Gx`7q26s.ZZXko/O[1/E<@QWWLpL2Dv8CzKA~YL2bM+ic^*tPV' );
define( 'SECURE_AUTH_KEY',  '/XgDa-TA{^J@hB>*q9YO,q5D$S*K_uMeop*fXvBdKb}OGS^5s4Mm*:g/.:FpL_bc' );
define( 'LOGGED_IN_KEY',    'QiO7(YZ/K0oigLW/MMIR2fGi[o3wxFVOsGGQGm9mh7O`)iQ9!}-V+E7y$r!8G9B~' );
define( 'NONCE_KEY',        'Gij)DDb6=%L([l8hoRRQCFE,24+pCJ+4UQ`R%?r__)2OdA6e~(2_=Ye6Wq`ddMJ4' );
define( 'AUTH_SALT',        'BAX3[iq6<Yx6EBr6L#:Cz2:+hH[{vtiJ7B&SWG[c72d(,cYcrW?QuwR~jq<y!IB+' );
define( 'SECURE_AUTH_SALT', '_l!U>aN&fS,jN!<vNm,|i?;]V[!QNJ5y;X5--L1cNM%[fl_ogcD0]#+]#x,_{Zq7' );
define( 'LOGGED_IN_SALT',   '+R&;j9EJftM$z]ZBsJ`llMvDM5f8h^$L%j+/0*q:aFg;{()5IE@RbZ~RPZsEP(n_' );
define( 'NONCE_SALT',       '^5hM|y^R:;5*o@MVLa-E:q9{nyC8K@O3Kc{({ln_~Zjj+![ja^QC0KS=W]aoC.b*' );

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
