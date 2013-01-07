<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'SyncMaster710n');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0@Vpzu4nk-x)nF$% C-p-`f#&e^b08!3!+=``BrF$J;T~4;4_`*-L~!qT%D_m9cv');
define('SECURE_AUTH_KEY',  ']V{dOs#)!ROXbG;O5^ruFb|(U~GPp=o0%r(Ci7KAQ3*Jcmd|R,d8-kr^LojyRGpX');
define('LOGGED_IN_KEY',    'R|v(Eo`|C_2s5[!3!5)>LqV<%+Oy$(LMPf!|+-N?wZ%l%Y Zw:br+,[1-q^NI(3:');
define('NONCE_KEY',        '!0M:Wv;7fNv7/e~t, |xUdCtxf%e$$77,@m+3|8.ZG:@g9Bi:!eH.narw~t-_+NE');
define('AUTH_SALT',        'DMk+QE[-8_?a+wbC5y%+!3_5Obm#G7J,#MPx*1>=XWbvAJOfK=#WY+f(R4(D|N9%');
define('SECURE_AUTH_SALT', ',KC%d2dy3I!qc|8Ic,e|d|jNeztKF/@CQ5|q5.h<{Edz<XeZH|kJ-CyCYZ.aoJUZ');
define('LOGGED_IN_SALT',   'zP|6jV|`a+6GKs&(Jh,kr}^&LF+1w4[vzR+!Lab$In=jMiE5Io3xX^p`Rvpq$p.r');
define('NONCE_SALT',       'wR&(!YHpb=(Dp5k|pq|Z+8gZ$P?K&&Lm!t&n,+Vu,IA5ML&g{=j5jM<O<GMFUGlr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

