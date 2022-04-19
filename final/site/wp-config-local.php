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
define('AUTH_KEY',         '2i1PYXUhxmGDv1x7D4tfuy3EbuQsvcgfPo+vPlPBEdDOHJ7+IesnVeAtqyycKJn18s4mWPgeb/DCqUHXLtLp0g==');
define('SECURE_AUTH_KEY',  'gf/zM9H13VyB9nWwQIBLOl1AkYXNZI3Tp+qC7TWLpooverh5MRs9PZQpU1PHBJZJsiaIBuUNphz5UEFyMIgsEg==');
define('LOGGED_IN_KEY',    'gOlmSHVJmFteCUgaj4JeEWMQEA3eIjvRwmbn9Ks6QehF2Gvpd6TFnuuHqcr0gTbEasNWp5/NdaJuP6QhcNdgZg==');
define('NONCE_KEY',        'Z6B9pjaHeQKrQRRaZya7gwwl7Pf0Auii6jT+npgnrSicXb+LSRZN6Ah1ifBkg9nXx0GQt0WRsG6gkceK2Jihwg==');
define('AUTH_SALT',        'cWz8aZR7qOo6d6bfyUBNUj3yd8xuZ/0hPhvvH2QomJg02Ut+Mg70YwqNOzYTJMXuL4kCcHSst5RwL8cbtPYHJw==');
define('SECURE_AUTH_SALT', 'PiMjv09T6pIU33QAFoUWMKG3oJPyf9eT0A4i3q7sZ2ODWPzn5Psm0ehMWy82+9+vfVmNRPKwqRJ7bX2kx/8Bag==');
define('LOGGED_IN_SALT',   'Lv4vnFWzNaF5yev4lt9IYYMA4c9eDmgCPQ/1FVi6hm77PTCuTj7G+BxBJCr6+zm+gCuIxohmvmhOcmqeTfWEjg==');
define('NONCE_SALT',       'nc5o5TF2HBIypsvWJM3A0V+f41vwGixZX9bXNzCPtyQEMKACtJDjOM8T+Ca4RF+UruN9ZNRgxcY9280VBOW3eg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_HOME', 'https://chen0811mtm6303final.local' );
define( 'WP_SITEURL', 'https://chen0811mtm6303final.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
