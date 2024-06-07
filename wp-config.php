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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdongho' );

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
define( 'AUTH_KEY',         '7#OV(%pg$p&#B$Ks8nke]4Kuyal=L`GI%TO7<K23+o>&Z..9s.5Rjv 3=)s/m_l0' );
define( 'SECURE_AUTH_KEY',  'BBKx%s((>@bh;)$EDd.<A8GLyD0esR_tAorCQDh,aF>f8a55{)GnsnaqA!X?Wy#Z' );
define( 'LOGGED_IN_KEY',    '4F8&b<;oeau*,U)yDOFbI3(EL)7{-:y4jgGo;FP5JWutxml8NO*R`huG^5-PidvC' );
define( 'NONCE_KEY',        ')*>v{4BF(RqZ_}d-$~q+8WfEu@`ZAWmkLSOG@[7T^%+&Ld)rva*&G_*79%G(7gKy' );
define( 'AUTH_SALT',        '3pDrmK(aBHe[fO!Lc^`f{fYF )R~8+}`]6-3%?,NW_0qB3AJ2=k=w`PpO!UJI>%5' );
define( 'SECURE_AUTH_SALT', 'uUsg`pzvt@7%A=s05JtmFg5[A2LG%Y=Gi1v2qj}=.u(oTx_5w5$pMF3OK|V-+>})' );
define( 'LOGGED_IN_SALT',   'L:/y]}&JwnG{r1S*M(0Qc|%5/FrBYDSru~g[wHMIu-@;c_X6S{xh5 U8Vb>4V+P1' );
define( 'NONCE_SALT',       'mrZ[~%z~J+#1O]>Q]hl;D)OtcJMvi>Ol#tU_s vplafufzc =a(-gW/>X^J6AdA8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admins';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
