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
define('DB_NAME', 'i4958984_wp2');

/** MySQL database username */
define('DB_USER', 'i4958984_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'Y.O1izu7liRdoIf2vdV10');

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
define('AUTH_KEY',         'y27JYqoLAp4j4pKIK2j5CbTCmW2RAAnwMcNfCh4OlUCwQzQHuqqwqJDl0mPYTVTn');
define('SECURE_AUTH_KEY',  'TbQVju9ieXLqwotetN8VNaEYpOKwFlL9GTbI87MHHpJTFlD25sfoJ9oOveDofk4i');
define('LOGGED_IN_KEY',    'q3ZoLLLGGxenkHBu0L4AI2ZMhUp6ei0qb99rCrDyaqUvHptW1WUlEARDJL5ZCqtP');
define('NONCE_KEY',        'Ye6eBMyEI0cYuas2Xc7ThL5d0hArPp2PKQgQet3HxjNUK67czNr536M22tFbXqFH');
define('AUTH_SALT',        'RWvW5DyamIOmjzhlp0orDkwwuvipPQPxUbQK0CnrO1joSESbOqwgaEvP6SQClhoV');
define('SECURE_AUTH_SALT', 'ceT7l4tsouPknbYqfFx8QuCduYxE44bD18PaBrl4MGcTpyF0tY7t03A1qJWOf6Ve');
define('LOGGED_IN_SALT',   'gvj3bcQ89fjJoRRUgsdKkNOnJLfQyjLg8XXCwIMHlDB4rv4R0uFZ3tiaskPyFERl');
define('NONCE_SALT',       'V8CKCqN4jHcyYcJg1liUvQkWrsSUKlgtFCv5gCubm5dycZXDmeLiRrhGYUy9WV2e');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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