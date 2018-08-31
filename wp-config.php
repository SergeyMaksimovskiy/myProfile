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
define('DB_NAME', 'maksisait1');

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
define('AUTH_KEY',         'PxJ?]})d5I`d V}*}@P)fT7Apv ;[55G#ZTzF.~~T;j~_>tbHF7zuQ#Y:9DR<K/[');
define('SECURE_AUTH_KEY',  '{@,:ttAHRq*r-xnfY}EybmIAX&>%w.U^ve~/b:5[{ wZ@XriKAsT<c3>d$n4~?TM');
define('LOGGED_IN_KEY',    '>6GYI>TDh;o1|nK6R3(i}cls44#6lvU%wGZ8wen/k,=:Czplu,hND{vHHXCVe;Z]');
define('NONCE_KEY',        '7}GN@p#czrsU}Or8p&X&tQMQKTPn{UY~}%f!IyN9L^:t =#Q5~7mj9p*Q-3zW!yK');
define('AUTH_SALT',        '@`LPEqB?zv57q4kl&`{zdVnjy;Cu=;I^T0N&JZG>F2lJ=s]<!q5oLGV:KG,VCfW3');
define('SECURE_AUTH_SALT', 'jDWbY[z;[bgv&#SsMf@%O`[T2iU_qeO4;s~4LiVo*b_276gXQ=DVyHy%jm!3R{SB');
define('LOGGED_IN_SALT',   'N{M lS*?2o;Qe[A=+lwo(7v<W@H^P 2{2Naj=*MWqwszhV47KL-ip_shv#TVmq&m');
define('NONCE_SALT',       'YP:D&=3]X#)dS.B;Y5Y_Zkub2ni%]/j1&dT-S60oDeaitMW Np]0O=uh|UCOx*S=');

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
