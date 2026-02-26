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
define( 'DB_NAME', 'adpei' );

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
define( 'AUTH_KEY',         '.};o^aUiI9<gfD36:ZK=3xUhX6|wy~/xIUx2=Wg)GB`>:j:O|8jf6O(Zv8vk5j2m' );
define( 'SECURE_AUTH_KEY',  'C(lTvJK#IUO u0w2f^#KhJPl]}%D&PS*QP@;hM3[.JHBSy,SrmkSK:RKz;4j42-b' );
define( 'LOGGED_IN_KEY',    '.4kLPNow Do|E[d&2z_Y FJl}.wEe{hKb]N34X6ZR&k1+=VaqxxX>+;AisOs/Hpx' );
define( 'NONCE_KEY',        'rUn(V+FU_J?PRoU1%3<qp%YPx+#/s6?c!PBxkq:v-Ls+jj^q.Rmpih/CLusgp9E~' );
define( 'AUTH_SALT',        'cf1M*4in9%:$|%>F&9w,#1HG)6$%jA^so?eVQ*EaZH[jGr? >@/OW?in>.{S|;P2' );
define( 'SECURE_AUTH_SALT', 'pS8F7UE4 }`1,][0%A{2211(S% .$6(4]d>6F}qkDSa>wFf6x=vfCq4`,AU=@U`*' );
define( 'LOGGED_IN_SALT',   'X$$pT3(F-p`~BH7lt;n4wE_3Ra!Zd.>b]|Eb^SS+]pJ/8onWevkf88LO>V`8.EXW' );
define( 'NONCE_SALT',       'D0Lkg*2rnC!cQ_4rP_`/JNnT`|Q}+pcCo?m& |M)HX1OCCOk/ARLigp40xEZFECc' );

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
