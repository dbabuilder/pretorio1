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
define( 'DB_NAME', 'db_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'dbabuilder' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bandeja123' );

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
define( 'AUTH_KEY',         '1wlh)HShkTp,XQ^X/MfEQM%UWMYL5y!-ch`7{|~>oH{^O,xt_1G&Ed%o| ~XZ%bm' );
define( 'SECURE_AUTH_KEY',  '$E-^Vuka1*`XvuldF?,D<|*xJq)/iY,=0Q j;@O X%eh3P)<rUc/02P$K{Rc{TBv' );
define( 'LOGGED_IN_KEY',    'KM7q|Wuj|#w#oKB0R*nW1fApU7D}7-d5gv2V-WlYZCV+xP-6Sag$ +c.A#/wi}jI' );
define( 'NONCE_KEY',        '=&nZ|d>kT6k2$4wRsyQ(AhqUy,Pi[TCa|f@_r0Zj=o5H4hOX8u/$m6f|SKLE9WdD' );
define( 'AUTH_SALT',        '[.@3R:RXF;u8<;#T_ 3FP-eOw: L8jb~nGR1aRX3cujjsn?$g*<<kws](vjNMobd' );
define( 'SECURE_AUTH_SALT', 'j]xI~.FI%g51L!i51=_Dvf?e/?@Z}`EN%VQF-Rmd6-)3c,]z7@?Ju3}ZwQ~UFl*7' );
define( 'LOGGED_IN_SALT',   'ok~)hNV3`e$OC6eh+Z}?^XlsR+BVQFfgimm54d<?%~x9qv,5L!0S1%qymQ~zLa*v' );
define( 'NONCE_SALT',       ': {*DbgAsztnkI5m0MjDR_r{#?}N>R-#ylu*B9&*Opa+]*;xH;B?l|GmgwrEh3s|' );

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
