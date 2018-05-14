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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EaoDUGW7i8eygnXNIjoNigHPGQfuTndDF8Kf3DwY720LjAAwm+CDqDvvrM6E1cAfAGfLG253/IIMy3Du1+f7xw==');
define('SECURE_AUTH_KEY',  'YmHf5BEfVjqaqnNKe1XTyJ0PdvxBPl0DP+WkcpMKxSR04iA4W5GDTiUuLsVO6/qM+thWjeVFefgokN0UIuh0nQ==');
define('LOGGED_IN_KEY',    '4RgNEu8tRXUs1mkVhyYkgPJj54a7uS4V3/X02p1sVTpWmCD6NeF9fa9h5ITZX828HgiQWmbjEGckxsAGceeW6g==');
define('NONCE_KEY',        '6gh8oZYPflTrjAMqvxX3lkg4enHcOrzKvvhVvj/6bBToPhV+2Aq/TAkRqEGa7Qr7a/PbOvR42wRF1fVbFbz+RA==');
define('AUTH_SALT',        '4q9wn/bgyb+tT68obL/u3fJmQr/+9ex4O52doCavIdCvh4bh/Wci/tWBIimF1JESt2ayoRW/gtYijS2IbnIXRQ==');
define('SECURE_AUTH_SALT', 'tEfzT8FDQOFJ50p7iRF8Ssn7vnqtwYQHktg/dk4b0Bu8GBegndI8PlTPvyAwGovqCisAvAdVOu5LIGrLTlHFHw==');
define('LOGGED_IN_SALT',   '2waKQUYsMrUYTApTZdQZtbBKv3Ug+9fda8yybr9AT3x41AKZO90xlEIn/C3ErRObXWZZY4QdW/ecR5fhRJSVgA==');
define('NONCE_SALT',       'e/jD9ANnxWZTAeOdhNZR8I+JyXgZEtfR7ZUs0Qj2ckG9RVflS8/KjZ7LIAsX9eOXN+6X9lVzsfu5fxFpJDt3sw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
