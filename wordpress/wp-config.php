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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+nnC;_ux||)M`uKzmKZs2<jZEP*Il,L+Vy]o#|H ia)$`3O=_g~slQI|qa_|-Xa@');
define('SECURE_AUTH_KEY',  'y.@ln`S !RMQNh]~m$`iFh?A%+q<1uJ|D %(gwJ.)a)ASiNn;Ps+N`m[`Zz{4$au');
define('LOGGED_IN_KEY',    'j(fDJX~U&f5}}?]H>`]`|)Pv <Qy+(HD@]`+W]`QfTAlEQ`n|eW7+6*Pqlm7Zh|q');
define('NONCE_KEY',        'FkV*@p_>.;w|Vy6B/ZK)drWP&0-1-U_e$epZ].ey&-p9_y[6`-shCkcW0mt|1.sK');
define('AUTH_SALT',        '<e|Rv~FIqU .7+/Q: 5|apE;,^Rx@$LkDwJ$ttmepVimlzW5Oaqd_(Sk:d{W:I`)');
define('SECURE_AUTH_SALT', '<LNd+Y1&jjj*_>XN~Yp92 |[-*kp2z:YzA/&nP^RVQIIag@1@/7JN#gSF~k vy|O');
define('LOGGED_IN_SALT',   '&ygiK2@|^fciRhvByR K^@yp[;cmbo9bY+W<U0E65K?h>`bbU+Ti} Fp2?G6F*=r');
define('NONCE_SALT',       'E )qk2te.vZ,|E8k%J>CYT{]g8(ScPW#;c;^w)>/PX&S8e*C$~(RqVI)Emzit17B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
