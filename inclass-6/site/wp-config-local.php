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
define('AUTH_KEY',         'YTO7UAia7x7lzqDQqIa4FFBAbewFUpYt68GZ+GQduIKZV73JKuaiFlxMMzUebXAtRboVMGoiUJNmHKDxni0wiQ==');
define('SECURE_AUTH_KEY',  'nmWyWmaOj3yTWazOAE6E28x4LeQbaWTxAzXyc9ppRVT/XT+1voPmvliapa34FgwZfiO/1k22Em7BrpUof7ODSw==');
define('LOGGED_IN_KEY',    'uZXZB4wNhPeDUXdMP4jH1AQl5x2wMKEeQy+tfCeudQ+DqJdya/0Bp5bk6TmNf2X26JGDaBoKilxvkK8Ysci70Q==');
define('NONCE_KEY',        'NTJ3SllKjiC08h6YD8g8XvoDAow2/CBYewaqbVv1d2WWtRbFMRBnBjho/mcbvePbGIJJiws2wKkaHfBKSUXMqg==');
define('AUTH_SALT',        'KImUkdsnqS4Re0N9pyPVxuywXDgIWGS83slkckaJUyP/awVjziLjipEGQbrFgKthlu6qcvdN2w/bbEQWB50B8A==');
define('SECURE_AUTH_SALT', 'Bli6VQczdBoRR1CHUIkZ9NgyD/f1Tet/b45GwjSVPtllLxa4Jskl2CFXAiC1385jPJYP9KxsZE9XVNyTQrW9gg==');
define('LOGGED_IN_SALT',   'ueOIhAkme6sk+OWegqw8sZgiMR+z8R64U9cb04OM0Ios/8KXfVbN6PchCtIMwSYvI/6ghMedcYoEjeeitVI0hw==');
define('NONCE_SALT',       'G95WNEOk1gqIx1rZp6kADnYBviIVSJomgxUs5lqpUxUHq6Jbxh7h5aSIF9RNvbm2eZbe/DQFMI5DBv8fMVCavA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define( 'WP_HOME', 'http://test1.local' );
define( 'WP_SITEURL', 'http://test1.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
