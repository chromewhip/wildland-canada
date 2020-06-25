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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4?M{^M>Ui{Y,I$59c6Gwd5`?.i9&[HK@?uthHQawu&[)eze9JS2^ tqMk*Rz_gY6' );
define( 'SECURE_AUTH_KEY',  '*=U].C+CeR~ql@kL}7ICMMuhUX]5SI(c%t[!|Q~@>E7Z6]PB$|hQ[d?IS!ru&Gk}' );
define( 'LOGGED_IN_KEY',    '.-0GSjFL|?yX;xMdK(#L!zR-/]+0uRO7N/OWJxHYT5:pKj9H^dSN5SugM?W NYnL' );
define( 'NONCE_KEY',        '9%?E`v_n96zy8d5#q(&-b7YuFZ<w!|U!S0?/lZc#Fk5A/?+3>V7Xj[t!R:C1x;4c' );
define( 'AUTH_SALT',        '9SlCmWdDJXaGB]$(- WicT)%T,l7@k gBnF-/yr`XSwB.KS7l]:nkW%_P8,T0|hn' );
define( 'SECURE_AUTH_SALT', '|e!%p@0B+%;gzIh5=<F ](]}P:]XF}Rvo>TAgLn.]([V0QzjV$B@oOq&;Y;5$RPK' );
define( 'LOGGED_IN_SALT',   '#)Pjo41?1xiGeTr0V(03;s0>!fy-7h}<v|VvS5(v:[f}w~<#$1|e++s[h>&^kxQ0' );
define( 'NONCE_SALT',       '8a4:A]6ixG!D*R:u!4v[tZX`TJ.GAREP@{^^FxW66s0`!(ocdxmIqBLr}U6#@h>{' );

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
