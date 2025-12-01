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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307/' );

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
define( 'AUTH_KEY',         'YHCh<h-vAX&2J}XQfG3,}Vqhgz6]wAQ&:N+_iSh.;Gn,M]hNJIHXc7F,;J.a0qJ4' );
define( 'SECURE_AUTH_KEY',  'g<s_&A,ztqx^U`BenGsS:PZY6M-~fv26).>9D|z[!BOG@.*FUj<mjImViFJap5XL' );
define( 'LOGGED_IN_KEY',    'pU2/fFY8egw}mcO{@x1J?k!p:$.lRE)0=Mm>Vvg&t#XMbu@ndc&f]T{xtaR2D8YU' );
define( 'NONCE_KEY',        'aP9)hG8[+g;N7A0|W5*KKaRH?_9D>-NRB7lG;?(.viQdKtX9-~R?,[:*~JC2SUFh' );
define( 'AUTH_SALT',        '8)_:=%Ri`1G^3COF#}Yhy?>.)(eC6/uvd~?QSe2{ zk9*Knx`<r/z{Afst-y]2w:' );
define( 'SECURE_AUTH_SALT', 'Mb&*F J%#PI2L+ `p;.L6H{,xM|iO{-<$Q`[&pqs.9tZ;7:]g_95B2TW7}&ymnZI' );
define( 'LOGGED_IN_SALT',   '>g<UqDKwJ&bFTt*<]b$3a=^}?>3(I T`3vI55e/|6B,NB`@dZ*m6L{6q5OQ8LK2$' );
define( 'NONCE_SALT',       'A{#EVXEs<x=MyABh=^;KpkH$Pm9{MQ5` 3A$Q3sJd3I*5TijQGojq!i_tBb+NCrc' );

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
$table_prefix = 'wp_';

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
