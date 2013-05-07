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
define('DB_NAME', 'birchpressdb');

/** MySQL database username */
define('DB_USER', 'a1FUIBA7');

/** MySQL database password */
define('DB_PASSWORD', '1W?0kU^7<8z+l6u]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'dXNZk)05674f<g}bPP@XG:@x{?@:*K$VmrJ-ohzO*FzH{D/X:1bXpS.W^Yq}-]Eo');
define('SECURE_AUTH_KEY',  '`Zik/;LarQ;`#Q<CfKH?)=N$.&7Jax43 Sx3B&Wm{7`g#SC}0tM(MUO_IOcmbi93');
define('LOGGED_IN_KEY',    'd-wt%Y+;KQ,xBC3$-=yo+6,Pc{s6nU[v743%?O,vFw0?Z|9o]-c0jNWa<5c#LuJ2');
define('NONCE_KEY',        'i6$Ff$d.HQT|U|^!?>-ghQ3d->r;R98#JSR|.;~Y^ds+Mj%cnomCx0^QN~nm%t*B');
define('AUTH_SALT',        'gVL+1|64dX^r!wgsH&t%|j2-Qua1d4S-]iHsVR,PNUh/(I|qi%=5+B#sf?KyuzE_');
define('SECURE_AUTH_SALT', 'XG2Y4&u./nu(-},5w*%N@KuyeKw8sFr_Sm{x*G8)dUual au+6U>n!R l&Dc_dV~');
define('LOGGED_IN_SALT',   'b|Kb1+r##~~c~RUe:B.WFRe2#D379sF1-Q.-1&e&4uK|5`Y5k=.hH7q*! gN*:N{');
define('NONCE_SALT',       'Hg5z+D|p`r9+bLN{ BD|+jF6yJfz4n&^ t|x$K,khVa3KZ;jVA8>SKUga[s4:gH]');

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
