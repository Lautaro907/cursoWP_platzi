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
define('DB_NAME', 'curso_wp');

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
define('AUTH_KEY',         'NeLR~A;#BHsI_eV45:(8gW&HY >N@,rwY5?9g~z;3~^i2V32,:rjn}{ZO!0`AvYK');
define('SECURE_AUTH_KEY',  ';x(j>aQ!0DMqA% HW#z_H%o{PmlnP@v0.c(3b~yQ<In~ 3STgDy]y(vl kr2g!G$');
define('LOGGED_IN_KEY',    'y7LA0t}pk-i;u8^famkwS?5J*o13#!t5,LQs?X:1|pHu%@;m3%O1XJW=9|j_7Br2');
define('NONCE_KEY',        '$PJ~|(-3ez@C(XEL.9QZEP%H#JKRk>Qr9Fxns)DT+5YJljRo^LLMh`_o+B@r|`.6');
define('AUTH_SALT',        'DtD^:?zUiPkpP3Eps$H:[ii/Kp 4wj*,qU{0qg{LCEn~r%X.6+_Z<qnFhc<kErD=');
define('SECURE_AUTH_SALT', 'xUa~&2ghl^L$XF8D4sePPk,:NaurBe=OW8raZho=0tT,gCfKee.SB-tkLgU #8h4');
define('LOGGED_IN_SALT',   ')4irj]@1=d!(3=PyUO~G?dELHQ+*:>t,lkpvQ>Ri:RkrXte9eB<c>q)%!P7g!r1V');
define('NONCE_SALT',       'ZR@[^[mSUj7yjv.mhsfHzYP6/P@SMr]+48#_qA*X@U%BH>(K($EvR8~l<?T{X,2?');

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
