<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rahvitac_a2wp213' );

/** Database username */
define( 'DB_USER', 'rahvitac_a2wp213' );

/** Database password */
define( 'DB_PASSWORD', 'p[e4]111Ss' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fxl3hpgrkzal5vrk23tmi4rdimydpy4kms23focxxf5kej8llc5t0gh4opnkowww' );
define( 'SECURE_AUTH_KEY',  'plhhu03qjewt41xdsknfccguahmmjh6uylglfzqfytzwyobnx7m0pqd3jhjv5sth' );
define( 'LOGGED_IN_KEY',    'qj6ze6pn7k3uzjg6bmj8ol5qzm13itic3mobxv3y9uucbb0mtnjgdwue4znoxuaj' );
define( 'NONCE_KEY',        'p8p23dxdjtknioaclvt4anf1nzobkmjs3d1blkrn4cqpxiqcxrtdbpny6n7tr4st' );
define( 'AUTH_SALT',        'lk3e1eqf6smrmyfjxum1yc6zvrdw79dwfkhbk6qksex5vuh7ytiw9plrlspbsxuh' );
define( 'SECURE_AUTH_SALT', '7cgoc4insgd5vi5peadfzdanouismaukewsvwe9dbddvcjos9rkuvqcsksierspq' );
define( 'LOGGED_IN_SALT',   'rczajy4hhalxhwrvknoiajk17vtdijeyukfjhet6ltthgur7a2qtzen4rqpebvym' );
define( 'NONCE_SALT',       'ud15beub9pdnnehmanhlwhircrlj2halunhjj2kgbzulzgbzhtxabl5w3k9rd2qj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpve_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
