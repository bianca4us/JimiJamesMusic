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
define('DB_NAME', 'db547581396');

/** MySQL database username */
define('DB_USER', 'dbo547581396');

/** MySQL database password */
define('DB_PASSWORD', 'XUwzaKENxwJxsxDCmxhM');

/** MySQL hostname */
define('DB_HOST', 'db547581396.db.1and1.com:3306');

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
define('AUTH_KEY',         '$GQ2J8B6lTyqp%VDYdpxNDs5PfUlsFD(47%B0%wy(s73KAxDv0I(yW0JD7bhxGLs');
define('SECURE_AUTH_KEY',  'Nj#VrB8yQ!NXfTMuekvr9dmm$(ky2gK2qQAnOLn!G025Gu%5Wkp346odVIT8NU&W');
define('LOGGED_IN_KEY',    'vpuzLnE1B%(Kt(lF&vDPhNaIz)BqXab3$Yff#Wh81Hi2KJD6t6ap^wJH2in@jNk#');
define('NONCE_KEY',        'UMSVm3Ry9pE0Ft)QozBKy9bHP1H*M7hOAWFOTjww)nv^JzB6eyBLe)VOLBaMDjEJ');
define('AUTH_SALT',        ')y*eEyOVthqus6@3)k&7IXjqIC6!M((^kw3spIya@c0xPbEG6S2!3&OSO8Wd*f&f');
define('SECURE_AUTH_SALT', 'CFY4^vFcslCPI()vK@!L^3Y&ar0FWu5SU1k(#da63RPMj!q47h(*G*)lg!vD&Y$7');
define('LOGGED_IN_SALT',   'CTHkv!KgB8U25$JEtju@xQv4LTXE!0YnFLdWW(%^Is(g8fTaL)*Ryync8aCs#RBL');
define('NONCE_SALT',       'qd%9y3eI&9&rDqfBj*JiD*lOFMUMWG(wXNix#Z70j1lCIOEy7TCDrrr)Tpf7RR4E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gszTIEdH';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Disable the Plugin and Theme Editor.
 *
 * Occasionally you may wish to disable the plugin or theme editor to prevent
 * overzealous users from being able to edit sensitive files and potentially crash the site.
 * Disabling these also provides an additional layer of security if a hacker
 * gains access to a well-privileged user account.
 */
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
