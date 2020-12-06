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
define( 'DB_NAME', 'mynewwebdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-8IbS,uw~A~e{ axj39fk|5I2qejT|(P}qApTj0rq7ICP-oK,IDb${?;tI`3.Z4u' );
define( 'SECURE_AUTH_KEY',  ';Dt;|@YmU}6r@O%&Y|wlxyLm.dbJQ?{RoFNB$yjv]?f,4b7vC(ra)CLXi@WvhF%7' );
define( 'LOGGED_IN_KEY',    '|/#AOhHgT8[CSn(q}j/r`OD7Ej{_{@ry`xmurbW:WQ0CWu0,.`A)SX}m!-ig-odk' );
define( 'NONCE_KEY',        'IoXJHy2WGsbLxh%iP/Xk{xV~mI!k-HbF-iG:<S9=MS8T1vRkYoQBaL~XI22:g,BK' );
define( 'AUTH_SALT',        '=)Q?;]VZGYzB),l<lBrb2f7pD[uG*5)2prr?q?6}]nS<3+>TPxf3TjOm>Uh1QD:T' );
define( 'SECURE_AUTH_SALT', 's`?Otwvv/O^fSC!yV=4Z;CI:i 5nDj?>a*YyzFvLHlBz[Jr!BFVkx&qb;%jmJPVv' );
define( 'LOGGED_IN_SALT',   'x (]i}@ql)X_yj9,W$|gRUS|n%W{ND,-a3R4>Ad{(a9YQ0D@z=rE~r(5ffrIN#b%' );
define( 'NONCE_SALT',       'gYzc`BmBz/ u%u<vUiXI!3>b%GQQ]Dq7s^yEPc/u2![:`Fa|!m,6H1J;;L`uVhV>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
