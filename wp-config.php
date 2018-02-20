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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';.km!Xf>q3(Z:fX79uNkw{L/)&Z6wj)ODTN_Tn^)*q70X/IEgIsR]#_w,c~f%98V');
define('SECURE_AUTH_KEY',  '&,dL>hH}J^c&@*b]e^J[p$CG,O?9B1bymK :LoTD[@,Z%7xkzwX+)Q,akYauY)/R');
define('LOGGED_IN_KEY',    'y~,Rv7z,;EAzS}(6L2YK_P;P*UKSJ!uaJ4_JfBL:<$ry,;exV Ju(E&VXMn{M eS');
define('NONCE_KEY',        'PVQ>YY[s6$&7]_xi^Hdz&_E=7&i%+sjO_^|+?b@foFx-0_Lm2|BB2[t2{/-h3s%$');
define('AUTH_SALT',        's13|2D0l#:_0sdox-Ombr.Pw9p!D)>u[W_k)Nh6V]D1:3MgcrG;^JK@YrJ#WWuKP');
define('SECURE_AUTH_SALT', '612K9QS,p <]>{f ?A`s[.aM#%xR/Vln!io}bg<9MPD_2$-Jtk^>D5hRMx87YH/4');
define('LOGGED_IN_SALT',   'UI_-bSeOk~YCFcB]Vk#pkxKZ_Z#+kM@Hd$mag2Rcw0LYL`VL>3I~kj{#:.C4O~ZC');
define('NONCE_SALT',       '*}o/kQ(]SIOj(RACa+ZlU{*fDLbZcdIng~>.3h L8Q&x%$sHH)-;^9!.2jo(BdzU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
