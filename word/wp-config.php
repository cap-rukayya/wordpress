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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'word');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '>]sG,:Y=[l-U|C</2:#A[2ob7orgn|veqB>c(|NHi[IG.pAszZn A0<Cimd:jTkZ');
define('SECURE_AUTH_KEY',  'NCRP)p,E5c<]:^]q C{<)hJG]-w:V@[y7= Sw|Eh?NlQ#x?UE~v EBPg 33*)fdT');
define('LOGGED_IN_KEY',    'Y+{=5#~k5T[xW<Ih$=Mke7-T;/gwAsz<}>FGlJQ6h^~]9kcTB!;8Pw4wKkTa(y-&');
define('NONCE_KEY',        'g-c0}} lCagag|cr>DaAWDjjl.$>.Brj#xBa;Mg.KtOYnY?56?8),pz6P~hkYU8+');
define('AUTH_SALT',        'cBf(S{=1}y{fHdhGTBC^Z;K~y16|p1ICM*^l/,@.9l#lZJO,ze#{w91O9+)KVtif');
define('SECURE_AUTH_SALT', '.RqIPSbHpkIk/o6u$U1Fq&fvOn[%O6kFv?i;XNAXl=o2fXZX,.UeyKE0hkE0$?Ld');
define('LOGGED_IN_SALT',   ']EOG%ni&8|ONUH|v|K/C~Vazk,l| 46HXqS1h1 Us=CUZ7eg#gly;ZCR;vGA&ev!');
define('NONCE_SALT',       'a.p9GGs, l]~Q{~f=y0f`/`(wg{uX}m}Rq(;^]]W]ODMMu<rSF)Jz(rXUG|R~Cqi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_word';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter('https_ssl_verify', '__return_false');
add_filter('https_local_ssl_verify', '__return_false');