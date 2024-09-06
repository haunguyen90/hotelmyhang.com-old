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
define('DB_NAME', 'myhang_wp');

/** MySQL database username */
define('DB_USER', 'myhang_wp');

/** MySQL database password */
define('DB_PASSWORD', 'hotelmyhang4611');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Turn off core automatic update */
define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oAl$/w8v4NQd~3(2URi}?P!lcWAS|&jVfvW22#QfJV%iH3Cl}UDF@N}kn+ql,Yx0');
define('SECURE_AUTH_KEY',  'no|y!}>?):u<1^]Z1_b^qT>y8SXb2Qoy8GV$8*CZu*njcGN<9qlU+#w@}}3{{yc ');
define('LOGGED_IN_KEY',    'sX`_@N$FAO~dcVqP1@Jt@h3G4jU-0|RB.<f+|#&w#&{6A$/I?WCk!@j.MUm<uh`6');
define('NONCE_KEY',        '#VEWQ/t+o&-FmB(+/qyvwo6sH1&AV%k&ySIXnrm3-#<gb&4No}upIlO5jQ <6G_*');
define('AUTH_SALT',        'wVlKd?Ca?!CB9&>gg]lkc2T$R;#U,itK=siAa!^55^o*Rk!]$QlY&#(Ihy6%,Z4H');
define('SECURE_AUTH_SALT', 'N:-#V!*ALjM>O=r,ZABNnw}Iouy?Om]=Bx=PyTZlG,-LG~7x&ysSzHiQ$6^)*msR');
define('LOGGED_IN_SALT',   '09Y0)J-?(eK#J5q+kD>)wxm?C0+mW;@iG?Ow>y7z+#p(g,f951F0jUb7r/C88Ha6');
define('NONCE_SALT',       ':EDlf yLMV~lomf|8f Ml@>:CmBd]L:N6G7)3$JFwa=Ki|7l3I6<8`o#}^UmirRm');

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
