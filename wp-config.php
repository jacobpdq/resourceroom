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
define( 'WPCACHEHOME', '/home/resoroom/public_html/dev/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'resoroom_wrdp1');//

/** MySQL database username */
define('DB_USER', 'resoroom_wrdp1');//

/** MySQL database password */
define('DB_PASSWORD', 'UZFXf9RnltRwK');//

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
define('AUTH_KEY',         '5!S2e^gbk:OWpwjLTI5(AAZtN*/(V!>KHfsGvf;l1XD(he1k98ZxBw*Ld$As3Xo>mEfCo?oQOe');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'Sm?5wO5e=3nV(wQqBgRjV4I7oq(Lpnf3ojHHCX?wpVK5@I!Nt7F9/\`!Nn9_!wYs#jPxFV');
define('NONCE_KEY',        'Avsmzd_snV*Q3oUeJC?!USwE)hwgz?M(UhJ=EdH-i5j5~BCxV-Z3B\`ZK~IVXo4hiH/B');
define('AUTH_SALT',        'GoTA;Bb\`r>4E</Dwr!hyvJ3<9g9GDyYB:$I5$A^_AHKG85V5<jhB;C*PPg3nnTECI2eF/a_cJp8');
define('SECURE_AUTH_SALT', 'b9O^ow~:G0LfRh4T|rslenP3!vb!$J:ASq7>xa!KfHVdTY;/T|U;echey>|hrH_LX/36_/K<)A_iL');
define('LOGGED_IN_SALT',   'xG0O=ECga*i__@bL~??nss/_7hoADLJY!ImT)$ckXL@:)>DE*;2#J-V^l1Afi@');
define('NONCE_SALT',       '(mUm5e@AzqNhN4sDOYp^|z6rZqNF;>slApym5*Ha3t/yPG1Oa?hPwz3rNkHGS?aSXNaBwEbVg7');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );