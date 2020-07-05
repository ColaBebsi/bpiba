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
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hees2dviedzz5w49c1uwc2gonh7ttajt6mpesn1xhifl5fm8htib4xoyzptxuqht' );
define( 'SECURE_AUTH_KEY',  'yhcms9qldlgagppvjhb8mj8u8d54wcwh2zycxlxzqfv9yeo0qcjqzq6z1mr0y0wr' );
define( 'LOGGED_IN_KEY',    'fhmnu9s1hyzquurhzkahswj3trx0msufujr4tvqcmchoq39f0cclkyqs03okbjui' );
define( 'NONCE_KEY',        '58ejdlosng60wrhdmdtutyf9lxen50nczsbafxc2waftxul5ctvrlgukzh4djhda' );
define( 'AUTH_SALT',        'wt0dsoafkmk03nfbt2wbnuv2tmhnulloswuxcbe8uuywez4tqdcozdbmpcn0se1i' );
define( 'SECURE_AUTH_SALT', '3ycfhazpzdlyndqrjxxdpl9sjbjrd56whb5jp9i9hkw3ssiafdtr7onowfwd33df' );
define( 'LOGGED_IN_SALT',   'nvozhziwb7rluthl4jyomimskp3aoocshruxahdw4rpf8ku65csajvj86vmrhiz8' );
define( 'NONCE_SALT',       '3y9rrormfw6lt4ossygxtzstlzjypgxajbgizhuroxbbyvrfk32h3ukk0kounnf5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuy_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
