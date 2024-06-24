<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '&vN6J,i[xxY,WflOb~vl*@(nrt7_R GhiU6g- 6olZumBGo>_9kJng<#f6<rtV}Y' );
define( 'SECURE_AUTH_KEY',   '}B|t[Q`_QQfK9(`|+I2nqq19x.Bg4zI)2E;-<Y[v0K!Z]E*#aRFt5N1pJ,M;Ig,|' );
define( 'LOGGED_IN_KEY',     'p=]tq<z1)*?ivjCu]|G?Q%y,d6y^<!I)m3z(akMa>esD!Z_uw6$:BNiFSDGrCT_^' );
define( 'NONCE_KEY',         'QR7C8;hJgh*vk q}6/N?8gOH_s7`v#R z)JA.aBJFo/Ms<q^{>.&yyc:4.=@#cD5' );
define( 'AUTH_SALT',         'R&[{cQR c{ikYO+%7kM)5ki4CLWCR{NU{QCUw~g|Eh{f(WadpP06uay[h))[ge0o' );
define( 'SECURE_AUTH_SALT',  'f-gb,oky|L@ncS87>j,-jhqxh|7@bB&~X5=C)~:p?$L[)Md8cT*+4~23mQuM:TEP' );
define( 'LOGGED_IN_SALT',    '0(`oy?1zxkbM1eSlOHLO3QmanE<M+5u2_R<+{uTB6^p{^VMi29l+j0m%pv=DdqtA' );
define( 'NONCE_SALT',        '{<5wOKBx-]WD>S4?3a1}.4HA6JF.UPfp J1{>xx0X.9WD ] 1Bz/*Dr37[lB:*3i' );
define( 'WP_CACHE_KEY_SALT', 'V,N0OS,DL~]+4JS!7^]F+&%AacZu7ASFYaSc(nB*e:hK%7SPx!c(M.QPn7RLVUe/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
