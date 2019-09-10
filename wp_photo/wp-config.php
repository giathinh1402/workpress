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
define( 'DB_NAME', 'wp_photo' );

/** MySQL database username */
define( 'DB_USER', 'thinhgia' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'SrelHNasFkc_?X(k#EH/pFk|}sQ-VXY$Y<Q(?9lNhMwb_,[=Kh6cwr],/_ewP7$.' );
define( 'SECURE_AUTH_KEY',  'p8hp=PqB-LR.|5&vQSeH];|fWU=Nu<~55Dx6n*Om%xrv0lMFZB0, rqh!]?+:8C ' );
define( 'LOGGED_IN_KEY',    'V|p,<Uz`?:K>L#`$T|-yU?/+TO~&#Bd+{?In17_q~jxDSj[CSmv#b}azwMslmrs>' );
define( 'NONCE_KEY',        'N6<|mL?F;~9$5EwneJXGy(-hYR]}oI1bjE|7ee{mD580T/$&X;ok@{p/j^MDG{E^' );
define( 'AUTH_SALT',        'T=ZJY=qet@?Z^gOte@DU_5Iw]|E+VrZ@{NY9NQeSVR3f>lqT}Sc}.@L/BIH6&0HB' );
define( 'SECURE_AUTH_SALT', 'GwYSO;v}TyA9-[$]dr[~Po=StGL50F#Mw;fk/^F*iNm5T+%#M%T{]EF$;hs16>7-' );
define( 'LOGGED_IN_SALT',   'ciFZcJebJDRycw5>Px<bsRNKloR?|0:E6E-~L)x(b+h.>Go68G.HkMsA|Y?l-EdU' );
define( 'NONCE_SALT',       'eUbS%Y}fY*e}4{Mw1OZzya#X PXG*m_N?k8WpK+8kN6(9DVEq4Yz<2NBR#sf(}PA' );

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
