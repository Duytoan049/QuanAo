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
define( 'DB_NAME', 'quanao' );

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
define( 'AUTH_KEY',         ';nph*==k+V+6h.nDZ/*rUvg)o9bjRkJ-+6F|?^ecrA5:=3Q|oB,6=8c&*1nw_F%|' );
define( 'SECURE_AUTH_KEY',  'Z=oQ/OduD|K^fXoS}:w8LrS!9-Q(RclK)KVxILAjed1vbDERg`5+H;L{xj0ITh>?' );
define( 'LOGGED_IN_KEY',    ';q!rh+zA5j[7`M}g>@&z{im<>n{T[)7aQbxe7 ml|f2y_eZhx LQ/i(Tc&~j.amD' );
define( 'NONCE_KEY',        '3C46/Oc[IoRhjTNe6%R.R7_ @:E`{RSXLt@87=<U}-MiG:<,hSAw9n|85QU}~7S~' );
define( 'AUTH_SALT',        '98sxkZ8pdMOkI(vS*f31Fcwn@kK9$D,qVujI%3sE-LyHG_KZqMg.N~rQ>Ykf~klo' );
define( 'SECURE_AUTH_SALT', ' @xf1o>kLR=JQA*>ktiIF}eJ$h?FJGi=0395Z3@S{ku&0=C;/B(g3h{LYw8GQ2L&' );
define( 'LOGGED_IN_SALT',   'Nhq!.Ex7%|Zb$;!m_Yz>-*PR$_??o,3QOsbBQV.CodrL=]|?386V$!1/dZ}k#CP8' );
define( 'NONCE_SALT',       'bA]T-@Wpf=-S.D|[(5~t9ng<Y~ysHOR}bf/vQ5btuo)IQCE}.VFaH<@ZVWgGYu0w' );

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
