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
define('AUTH_KEY',         'iWApKy80w6JKntLLtpQOKeXnyny5Cksd4Y1WbQ08Y4lj6BBkI6ki+DiX1AnQ2/eACITNRuonMiAITM/FyjpQFQ==');
define('SECURE_AUTH_KEY',  'oqLYBdAYhkGY5d6VgH2lrfmvHZYMG4ohkUKaO9Lsam4BG9xWAzVvjn636wq2szT8gPvIJkfRETABgh3FwOf3nA==');
define('LOGGED_IN_KEY',    'NiXsQdlHt+aWF4ppvz+/t07qoF1IPAdtwHC6RXvIQRZau59OIX/RTE9Qfw/SA5pXm5lTA4ygMm64GkIm3vxEQA==');
define('NONCE_KEY',        'nSHft4R2sXZFNcLwIPGGPqdy+DJPuFAk4OqtTFbdZJ80U85J3XVUUE2IgSepjNF5N8ilZZimkQXFh9hY5yT+nQ==');
define('AUTH_SALT',        '21q+2NyzSHY82dej7DQ1tzpCScog5kQM8c3B2QRd8gQ/O9Fv/vpUxFEA7GpSzgK6ALzHSCJFPxHHCejLs+jlwQ==');
define('SECURE_AUTH_SALT', 'dNljuiMHx6XFaun4ZSOVSN3KKl40YRy0t3GehfSsn0iN2IyT4n6Zz3Yl3koW/E4uPjS60Yn/7RKmfdO6wHK3Tw==');
define('LOGGED_IN_SALT',   'nllrG825uhI+Ug8p6bG0DSuXsWgJFdhBDhuVTr8NFkhRxep4rLF0eK8TRq3F0EDtljUk/ry17Jlwg3K/lTNHEA==');
define('NONCE_SALT',       'nRQJlRys1S2w5gIJk3V93yT0AZEBMw3ri0eDux8bRwdP771D4Ok4j/ocPHI7rH6DVrlNprPqnKphpOp+KpwnMQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'https://devchen0811mtm6303assg2.local' );
define( 'WP_SITEURL', 'https://devchen0811mtm6303assg2.local' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
