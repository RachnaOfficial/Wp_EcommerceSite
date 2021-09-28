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
define( 'DB_NAME', 'e_commercedb' );

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
define( 'AUTH_KEY',         'vP5xk-*reZna24c9Y |=`jR9tRax0g09{a-%Z.6Crkv0(WL wY103p5@]^agxp)m' );
define( 'SECURE_AUTH_KEY',  'XSmf3n$e_$+&m=igVde{J]v5Gnm+1Pm1iSjzXUk{DN7]Pm<j`dD.iFx|8Zya<>ze' );
define( 'LOGGED_IN_KEY',    'm2c1Jj!0%2y=/^I&^z[?/oaE/Z38F?X?NBU(-nAu6|Ox]x>fy7&AE3i$Sm-RCr *' );
define( 'NONCE_KEY',        '~odxE^TU%5fI-U}IsnL+,j< I)WcP1M6@8O@#leHw4uTA*<6A|6QDI8WC8;63A#}' );
define( 'AUTH_SALT',        'Yo0pkX*!?&: 8}~A9&eTOUiuT!*L!=xjUk,c+]W:?*:6#6=WA>/V$9 NVuN%X+G!' );
define( 'SECURE_AUTH_SALT', '*Jf1E</-]K*2oxA=;q{DT%{U_21X)aX1`@8>%m5SvDRZ?2B|XY|,SHB&M^uuEPA(' );
define( 'LOGGED_IN_SALT',   '@k)d ]C>g&.$Y0S$Kzg!W6~g`D8<Yijd~6y{X4>qfW]Sp XRk :O9f1FXk#ctUxn' );
define( 'NONCE_SALT',       'H>$4ztyAb.0WT{-s!Whh;BZ-K_?B%HgNY:=sO^>$r{,bCoovdO|7)AfMf%5c`k<m' );

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
