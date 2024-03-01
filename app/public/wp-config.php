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
define( 'AUTH_KEY',          'L2?Of#+#JiumS~ht$^46R1tp%S!XG{uCubdTpEh)Bu6X.%Q(|!iW%,8T5O!A:o,j' );
define( 'SECURE_AUTH_KEY',   '{{:#}}d,qzk=o1Y``.u*o>A1g#J?.&?x~^CHlN/9@@xJ(JD;gAD5 ]hu#*6r>CDB' );
define( 'LOGGED_IN_KEY',     't#29@(b}yp>#d?@/3hJ]PCqfy4Uu,:gHg>2|8xcTLj` >XwXt`R1+=;E_@U]KHZG' );
define( 'NONCE_KEY',         'kE3|dP:a^0Oh7|:=Zc,&:)P4|(LM$eEs1YI-,QK|!O{UL+fN2@YN1@S9}B_dCz%i' );
define( 'AUTH_SALT',         'K5P1z8J9*t)}=ZUDMdpNcVQsB^!~JbTJ2sr1L`MVP+,GsX{C^2ZR/n}jQ&%zOsT|' );
define( 'SECURE_AUTH_SALT',  'k] <lnj`}U66AmtmBnZ6b!f+zhucm7x~FWD@a?u;x1%gac=s2E^|^A~?)L{8t5Y<' );
define( 'LOGGED_IN_SALT',    'k3;~?LI6:4HJ}}-$+Z9#Fqc7l)mqCau.:8U._fJiVWk?kzt0ebgv$TERL#^C}*ai' );
define( 'NONCE_SALT',        'C9}uLw9{@]F;Gsz*.Ph?Lu F)ScIW{X&Nj#8_m^&.D5b:$`sSmX;;W[E_d2Wm0X#' );
define( 'WP_CACHE_KEY_SALT', 'dUt.o.~i.*mE_=QJzIPB vDK/Xc889ON+3B$.`fp 7ksc rvHS60#*F,)5VuGnf4' );


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
