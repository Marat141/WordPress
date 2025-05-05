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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '8x,PD?W0w9$eUD5?=-/MSJr4U&/pH}EJOk4BeR h(JFYPkK>KTs2^p?ZXwql[vr)' );
define( 'SECURE_AUTH_KEY',  'u*2a-dCM<nAFx,O61kj5uJ,0)1E~Z(32C<-_6I`f!`gv/nY3^zr07Rc,()&H`V}/' );
define( 'LOGGED_IN_KEY',    'TG6jfcJ2 _ftW.=w;8)Y`xl]1JS`)g|)K 9I:IJ2bs|?_L.[A[j)@98z#cVC4kgG' );
define( 'NONCE_KEY',        '}Q3yb- 1D{m^&-5.!5e]=-MF;dL,O#,f(@m,ULUQ L;w:/kv^^]+Q<7 |e!]*nA4' );
define( 'AUTH_SALT',        'k){}DGuE<djsJK]A=,dx2ZxB3]ev$C&m%GoThUQ@TVDF=%LB@1WLgx{GU<ED8zW$' );
define( 'SECURE_AUTH_SALT', '#m,B!3ZH1eSC{(^YGFB;:CKYQ@Qxt[nQWiR:dKoTFJLz*o_hW*jSCskI9z(O4Dm$' );
define( 'LOGGED_IN_SALT',   '*L*~8:p>~p]7RBJcKm&WLaIQ[.ZpcZKSe4k|<oP[O-m$cHU,KhsT|/|.ME$[uN7q' );
define( 'NONCE_SALT',       '*Qot^xvGo,hXC>bsWPef}L0ErwJy/fnxuCN<uZx)fv+F.X!{x;S`}-CA|fCv?Jb/' );

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
