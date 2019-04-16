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
define('AUTH_KEY',         'zUz3ONGi8/2lpgRp26sQIBsoAnkWtZS1Oh802A82gDD5lyjmNHOUggbYpro9ZFEcX9WXcpaA9LhsmnEVZ+5DVA==');
define('SECURE_AUTH_KEY',  'CufrdUX8rSPrqlW93qzroLN25JcbkXyPlNwiEqAFW3vUGHFsT7f/9tpcF484xEqBDzJCSc6NK0wA8MWXmhQD2A==');
define('LOGGED_IN_KEY',    '2ndV0n67KT5insXUxEstroNHqxtX3BFv7kFLbA1dEfq70TlACAEo3Lga6tj0fKVKk1Jm6mSxdXRGZuttXzi3xg==');
define('NONCE_KEY',        'DF/42P/L7Dfm5TVMMuQGWNr6sl44wj9JLBb1rh+/Bh7tEmBOlfBNsjyvbn92R4G1Krej+9llRdj90JqKAZTQjg==');
define('AUTH_SALT',        'XD9rip9Mnc7kwStIPeOIK3ysVKRzRG9Gb0iTNWQjxzbAMqFGhFW+9KbXUfpLJtVHOVUqS/ySZ41/Z6aa2iXlwg==');
define('SECURE_AUTH_SALT', 'ThT7XojCBTIKjXGfaiALuphsiApQ8uVIfPrGW3e0x2RXOfrZm2NuIpDUu/26+52DgoLF2u/oFbpXHix5bGljEw==');
define('LOGGED_IN_SALT',   'WJbcSZ9aGqOZCrvPjC/IQr5t3D/GjJjGz7Meme+VL2eNhO7AjEzs7+LYbsihMFqsLINzoQfBZ4ecErtzP6ig7A==');
define('NONCE_SALT',       'vy5CO//VtwCjQecEc7sspcDDKiW3f46CaFWa517KFWy6uQbNBiOwDhAqUJ9fpLoBQALB2HPVjyCdSnvzhAcPGA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
