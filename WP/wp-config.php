<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'effusionacapella');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']Qmt/bgUka_V3wxhu.=`Nk@Bo6r#o28U,@QwCp{^Rhtj-o#1^*M63Kjo#`@(XFqq');
define('SECURE_AUTH_KEY',  ')<.3AJ{Tre1hFP:3e]g|,XqvDd#MMI$f8[XN?Oe gQov}tl{^;giZ0H,|}Yt0[4j');
define('LOGGED_IN_KEY',    '&dMchv,)u0>gJhlJJ,U%vr #I 3v]h}d2_DgX]>Q2NK1=64gygLCg0u.|H%J;~7p');
define('NONCE_KEY',        'MmKs:,)z]52JpL%oOe$jsbO@n<HGrjb*l).I(67?K.@.2ii*~vw7z<5~`~wG2`Om');
define('AUTH_SALT',        'e3FpRid4NdbQv#@{XKaxG3fS.89ip$e[)?]GL7VWJ*W3fxDkTuzKG X9tz3TL!LH');
define('SECURE_AUTH_SALT', 'BTo2Y5MzV+S0*Jrmt/%pU&`Z@|u{(yK5e(-]~=YT [%_qpq~`yW`/]ObTyTWBo@#');
define('LOGGED_IN_SALT',   'Nl)a(LF9I5R$btIJQzN|r;Mp81Gj~/+%; YZ,zr3YP,n_D`)b/je850[ok*(_6)k');
define('NONCE_SALT',       'a!2;!dx*Y2 LZ$gE:F?]kRW4TeH ao!KUa7~7?6z&bgD-RpW]pw@c!1g83$n=2ZK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
