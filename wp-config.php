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
define('DB_NAME', 'accelerate1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'y&+w2!~)t(<[/SoEJM#uF?WEgV!~~%#Qyro>|U0C]kF7dSJ3;h$u>qsS(4_A[={Q');
define('SECURE_AUTH_KEY',  'E{3b-*M0RU9J>0H;{ D}{9Y!fiX/[QlBN2)ngXA>&#]zNgc!Dplc9$grS7&xy}Wu');
define('LOGGED_IN_KEY',    '9oi~7OMWmp`Q-nK#z+`cPRAmpdf/Uo`WZ+XqWjNL,m(<s c]BaL1,AoE@zdbzl{q');
define('NONCE_KEY',        'YpNv`kY/N4Lk/d~y::DLS. &Yr^1>;sosG7UpZRN6%f!U!2d4g%%,ffhr# 2Vo/c');
define('AUTH_SALT',        '6t7h}%^bj)>S:=6E`8s4p2~aT]|u+]Hd!PG;C@_@ndkS,.@ox_I`&VY@qAwL+O$x');
define('SECURE_AUTH_SALT', 'oes2g>7&0)L(|y@EgQyJu2JUOYG*6wFCE)XE9P0/Z2}~@aVoOtkLWQ+RRjn`F$Lo');
define('LOGGED_IN_SALT',   'PD9>rZ}@y+]S|4D}`3;cE]<]:|J)a>(IJVZt.*vV36(d[m=}[|! _IkWTjM?EU}7');
define('NONCE_SALT',       '&z(?]2q|rt}?p/jI=$[D!8vh;xfK>aO*e)sR9|+4k,d_y*SK$wVvI/C5erXZ~mdD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
