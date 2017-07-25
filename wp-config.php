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
define('DB_NAME', 'eesps');

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
define('AUTH_KEY',         '<+HP]^ iQGfeoUEum$()$<xPIeCP+e%/D?S`Xa:oCkF/cnKmt>mlD5`r55Jbig^5');
define('SECURE_AUTH_KEY',  '+>%5ZDe`4:)Cy#^0p{&:87XuOLf@g;p?I}Au9OhkNO1A5O*bu3NqRX8}%#1 ~=a}');
define('LOGGED_IN_KEY',    '@4*UclccncP?/L[3F-+Dlgtv(QZ5Q)YAlErm<5=XTVa2%GQsImh6K$Q:%gq52]K:');
define('NONCE_KEY',        'WN1Ur@C}rT40mI4oC(de10>#|TJ^Hn0/Lsb#~-Zy(AGX$ co>!!rbP/ZevGNz,v>');
define('AUTH_SALT',        'xiCT2r0I-MfY;igZW<)ua!Jj^fCr>QvGC3p.(j?bYo1w7pD*}MP}Xw &|8 yj3](');
define('SECURE_AUTH_SALT', '<V6~BhY}2+#`<WYxPqeBzZhoaKRjB)>h&OmP@s[$?*_xSo5?*zGammA+Fj`T>k/^');
define('LOGGED_IN_SALT',   '.l(4-g7J`k09Uz6Z`txAonyi,1l^uPMN*l<^5kxX7ZH,@Q8`%-s!Wsd}r FjFA6g');
define('NONCE_SALT',       'Qm{{i>}ZqS~vSoVu?|h!G_jf8Wziu>y;2>N(NI:#VKk9^}t7y<P)2!o3-ohj>L9&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
