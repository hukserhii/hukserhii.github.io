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
define('DB_NAME', 'printukr_db');

/** MySQL database username */
define('DB_USER', 'printukr_db');

/** MySQL database password */
define('DB_PASSWORD', 'VT9y6p49');

/** MySQL hostname */
define('DB_HOST', 'printukr.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         '&uX*aSFRbj(FriJ0xkRDhw%ybKgHo^Oq9eX3ZejDcwigkGu0gKbZ6AcurBiCydfC');
define('SECURE_AUTH_KEY',  'fLNfY#rfKEdKh#X%&nJmD&6ExxsCTl)1vQ0*Ud1NHqxPEa6puK8^UR4cdpzakpYb');
define('LOGGED_IN_KEY',    'e3Etc*MDkenK^M6&xj8nEtGpSBOT%wiTsLQ*5KP99zqti%3McUxtl93ecT##L)S6');
define('NONCE_KEY',        'P09W@BLWL6sP)lzWmgZrVTl08gSMNnCH!mZxSAxvH7coQ%(&lyowjn1KrqTdlzYu');
define('AUTH_SALT',        '2FO^52l*2ZFKC&9QN3PaYgRKpduoviHPa))&JhVY@bkZ16jcY#3rKxGynffHQi&g');
define('SECURE_AUTH_SALT', 'rG@Tr#rBrLxN(tIwLC&TkSszNMeTEOfY&4gAVe2mCXBg^!LFAkC#)lYTLEM2Ufbl');
define('LOGGED_IN_SALT',   'N8CMCJP#2sG!ObEXwJiY7(MW1J(06cMQJak9%6A7ayRBtYLy3Ft&L8V4sr!FaHRt');
define('NONCE_SALT',       'xMw@Mn)UhNp%B^so##r^&399)nQx8EsZ((BAf%M(#MBD^JyWOj@X9*%Df2Z50h02');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>