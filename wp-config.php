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
define( 'DB_NAME', 'pisang_nglawu_db' );

/** Database username */
define( 'DB_USER', 'pisang_nglawu_user' );

/** Database password */
define( 'DB_PASSWORD', 'MerdekaBangsaku1945' );

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
define( 'AUTH_KEY',         'CU*?%Aac$Gm/f&}ZSMaXq|!GtvZv#DJ,Cm>FQ;_0Gh:M$),3t3{$4^@iqBM%6R{[' );
define( 'SECURE_AUTH_KEY',  '>j8djPO-_a1K}]%.20m4bLXRTwgqz=`_)HE|Y=,Us&X|0X.<2L+&71}OTE;hqe-F' );
define( 'LOGGED_IN_KEY',    '|45C;w.6w%)r1`>J}Bd* ZSlTaFy:Nam]=/A|aqL!iQk:dQX,3`,nGr9X:*+!aS!' );
define( 'NONCE_KEY',        '567(UR,[(W<xq@.wQSm;`kE5H]:AY<-k =~Y/BjeNpVnLn~I%L)P w08{Y~q:3me' );
define( 'AUTH_SALT',        ',.)X](?# z+svZ,U]L.W_R[mCW4P%~s>X(krH[XEnA`};3m4qQjQW-WI=n}4tfVq' );
define( 'SECURE_AUTH_SALT', '2/TG0`:$z[U)o3<_q3N4Re<t72!$]vD6,|1Cn`Q?KjFWz6QaWtFX~a>b/sf2x?M3' );
define( 'LOGGED_IN_SALT',   'xg~0[Su[@/pM(NHbf)9_/70wu!whO/e=W{8e?azjDe4-j+%:ufl5*h+Q;DtDDuS!' );
define( 'NONCE_SALT',       'zA`vZS86x.5tj^PXV@AySRLj9T}H?lK)VY]!OVbqX$DYw<L~eQ3AmcXR+<aDf`LG' );

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
