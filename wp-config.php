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
define( 'DB_NAME', 'Remote-well' );

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
define( 'AUTH_KEY',         'M+4[#QFFc!.!6CP,0#GGFSkrpw0*r^57+V4XziEO+Ztw6IIFSah&&<QzB:vyT[Rh' );
define( 'SECURE_AUTH_KEY',  'rt:l%K?n,HaZgtR1TLCIXetM7B5m:q/Kw%mS{P@TmJrX-De2>RP,Z#l[^8>t_dba' );
define( 'LOGGED_IN_KEY',    'C9``m3bTrUW8YB._E-5;7T9iplk,0mEYP%JR|tdyjW<w7Fn[#h!!#.WKmdM-}1]l' );
define( 'NONCE_KEY',        '$*)SW7H}+Dkdv3m8;cl8VqW]10q_CL*p8hsK~)u??.c]Ov-*k$lmd*o$?1m.RX,A' );
define( 'AUTH_SALT',        ']Z@Un-G2sF=X6C88rkO{_Q[iv[a%X=NBx4PC@K@ldp]OgE+A4mo/HI-B?+:?XzV ' );
define( 'SECURE_AUTH_SALT', '1N<2oRVTn~^5DfLYO xl}_:h@8.)voxkJ=k,Xf}$BvLy=E+79KH|f^*%~&;wtD[`' );
define( 'LOGGED_IN_SALT',   'Hc{JZ:drM{[~`)/)GAr83r?kq_7F+zcP=sL770aCpdF#LWgtE[sP/4%;0T|rtD_B' );
define( 'NONCE_SALT',       's<u!4@6MC3IF%)/J?Gt}i3>~Iu)HJbH=Km$c7h#/Ipr({sasL87Y8fGJIh~xgi;,' );

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

