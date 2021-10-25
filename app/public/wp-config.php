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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'd7tPtklfk73VwwGPiZqP4Vx5jGuuQ1VjJ7ummTw82GL/0gcLtyaj6fKUkkWdCFscZQoVgSb6ozrS9pS4rssm1w==');
define('SECURE_AUTH_KEY',  'NaHeMU4gka7Ws1889V9LaSAd5HwycXal0O6pvI+nC7m+gokIE+vvyLP4NMizCRSJuokGOHXhVxyzdAaKvouz+w==');
define('LOGGED_IN_KEY',    'toB4pSW9lCjd0uhtRF9MI7IcptO6kmBZvfDEYq+N+MwUxsGqsE7qeumKjrR+MxUtvdQUbBGg+oDTSVJPQ0InWg==');
define('NONCE_KEY',        'N14SGe/y3OrC38EK6KvWVnAj6S/TotHb9YWmTF6QjvsRRmb2ybu+GKzFT5lFpemvyfZclTeeC5JxHOSo+0DsXA==');
define('AUTH_SALT',        'tsEbRzNfMBxEDrqUeTAraWrjfFZR3dpzLwU/ApBuGiOBpgoe+9I6CWoB4Rzl2rT8rTceDYfiBk5I/1rOcR588g==');
define('SECURE_AUTH_SALT', 'Pybai1UIw9g5//Pt2kkCy2rPCIgSzpQ/+Nm+MeXy0JuZfpZJgDJAMzGfw+REkKypf8gg8lXvhOXta6y2+0yMVA==');
define('LOGGED_IN_SALT',   'JmFSYpXVkTVD5AYWbY+//4cMlvBbrqnnLxHiozDwHD5hIdlmcivbNKSC4N6NtzJ25CeXgLaoM+o6WXG6p3BqTg==');
define('NONCE_SALT',       'xWugKDUwV8guui5joycy7zK7Xh8nanlnQpUXrEMdNXMKa8UFfFrZRqLhAwVqx5A9phcWsHIvXaoe8mm25+5P5A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
