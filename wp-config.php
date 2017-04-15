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
define('DB_NAME', 'prdvns');

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
define('AUTH_KEY',         'wXegR13:dac,e!NyD3@lJOrL;w.tLA>,#=VpHvMHtQmB#X6E)%]@0 zImlN{w@Pn');
define('SECURE_AUTH_KEY',  '-LKU,Oq|#y=5^9QOz|}_c3v4Wf?B1Yhkxb<B^4|]>U$.JGiZM??mYP2iHA+}wj]{');
define('LOGGED_IN_KEY',    'yk!R!e}$H7qN`Ye(+$n2wX34G( QndC-!55+Jul::4|/E@-sx(E55U?5^,VcZMJ;');
define('NONCE_KEY',        'Bv_0Ql!!g4p*lJGak!<`FzvY/PsC7QA|x7gSXq *[t]u3uqHe;g*lRR*3tJ}NJ/~');
define('AUTH_SALT',        '}[0nGkh&k@[QlG$OM3nHris}U8ny*c$HEfQjov4ia<dXARdgD>s0)WR}$j o`VrD');
define('SECURE_AUTH_SALT', '(nWT<wFV)NoW]baY~`vNqjfU]F6]z7]|<n{Qz0<0}Ag1R}W% rsoYW^}*BMg.@F*');
define('LOGGED_IN_SALT',   'cKV!T>:`p0w8&vHl{qiT=`D3*:06>+TUXA71g+pN[##LP1UsVkTP=9z1am,~Zrd2');
define('NONCE_SALT',       '|O53_,WvF]Zbi8]_6PV_.H*O+?@A*v:<bU={~`b@4G?* fR+y;n%FQU-^jIM{u=c');

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
