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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'remoto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mc#L4;$7}xfek.wBJ]Key&b8}!=oK$do+Cm&p,J)uU!,G}B~D&r/&3B8O-7{fcnz' );
define( 'SECURE_AUTH_KEY',  ':G$Q}`Qd.xDc+ gU3E?FE]+j%M,Z6gqWv{@3_A|?#zUGdOS0X967Ix1[oEb60#SK' );
define( 'LOGGED_IN_KEY',    'G0{xIl r$XzYC7+o6=uiw.AsVS{5,]HB7e!;{X3}:_eaVd1f@q@&Q}}X)8N]YKiD' );
define( 'NONCE_KEY',        '_Vdv>$_%B&;c7x0vZX_$j/_Yi5t;D_y|e49;6cU_XWt]j|>U0KQwb  }v<Pb<w1L' );
define( 'AUTH_SALT',        'S#@c[O%7mfH?m_,Q8U.gavNy&#+$Kl#k_Qoj~T@jMI$+tE5]O5!FvR?[g,MA6OnB' );
define( 'SECURE_AUTH_SALT', 'oT`~NRD={(t!v*Xi7I/HMw3B5RdX=Y@P/32C)Z*5!1CMtnV,MJFWB4:kxBhG>&j}' );
define( 'LOGGED_IN_SALT',   '/A*k9[QN~}|(QWjx1L-Pt/TAY,6cLWveEjH9y2(:/-G#s~e[DwP<g4|.bBrT(pRk' );
define( 'NONCE_SALT',       '}!rdzS~sq$wA:c6^R{$`9Ea#!jnx:RhO/WG%5 .W6rT+:Ck7*rv.lV$d,_1FwjnS' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
