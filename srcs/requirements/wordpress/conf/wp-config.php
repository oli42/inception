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
define( 'DB_NAME', getenv( 'DB_NAME' ) );

/** MySQL database username */
define( 'DB_USER', getenv( 'DB_USER' ) );

/** MySQL database password */
define( 'DB_PASSWORD', getenv( 'DB_PASSWORD' ) );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uRBHEc,oPhg=Q$T_4:`*<L_7<&RP85 L!8lPuRm~p?0N[VdF(kBIF@!R+u-&cszl');
define('SECURE_AUTH_KEY',  'PGy{?;58St36C~9Av@k{r]=-LJ27,DhSw*d8`|8QJm$_F]wx$&.hW{Kcy-iX@E~&');
define('LOGGED_IN_KEY',    'c.B6MUbQ+|OQ1D`aqKP`W3f+[zeBDA30u}y$QsLO{AV#3s]b*L]&pI--Ny@ %j8Z');
define('NONCE_KEY',        'l-.ZNJ<+@(!FjoM+NlGx(pxyO6yF&nMtUv}Wu4r%FU?WF~+>,wbOC6CG0v$2Kh<]');
define('AUTH_SALT',        ';&MZv&-2V3+rcebxG0QGRZm&bJv:%8lL|RC!1R1j.sHX^W8yKN#%q9`Z]mlTMi+p');
define('SECURE_AUTH_SALT', '_doXyd|Y1Km;&,E%tV}#Y.-rn-fNp^RKS[RBA#i^5<OSySV}7<b%|H@?j3BSB->y');
define('LOGGED_IN_SALT',   '#f~`gt7C=_&vn:%-LX@r#>?<-bh=N}N(]HeR-#]k*@Hp%6CQLsBYt(@cd ^=A0~s');
define('NONCE_SALT',       'xz6.W$).TonsHLrf0^lJcBnRoMVv^z*KCE6-.c_HP;r36l;t3J6 +C@;L>S2|Gl@');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>