<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'deepakumar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4<fMOQw,SM,9R1Z_N^-of@py26B#]Qx{|n%|khNm+sgd|-<5D!YYB%LYMGx6_vh-');
define('SECURE_AUTH_KEY',  'X1bF$?rm-|KPN>#TK8%HwWev#V6Va-]ksZ-;Q|3<, +W1;{nCFD(=3K+&ERuT<PX');
define('LOGGED_IN_KEY',    'cyaK-NI%&f&Knc^&1,!V%QK!PMN_WK&IG(SKY2*l&+x}x:eoXWk=E?R;D#dAMq:s');
define('NONCE_KEY',        'W$zL^DcX}-%9|Q}p0!|kL}7@(68]kUiwz3-P^ZX]1>jPqO&YB{IAefX`HUqo,y4>');
define('AUTH_SALT',        '8(M5 {j<SR-J+lwe)4pdpl*fd%miy{_+G-/b0m| uFF}ZOme<MW+3:GC,7/X+7)_');
define('SECURE_AUTH_SALT', '^}<fa{{ei+#j/$=CoTV0)-0V&#n.&8XGj3,3kcs{a-fK,Zag;pFkW,W/tO+wfm6|');
define('LOGGED_IN_SALT',   '5JgP4PFTvoAv3rL2@BlA+__xFZckYT6&JS(7PS!{sC|j4)6|&H/7*2}v@@>&w.K:');
define('NONCE_SALT',       '$kqFg2wmf~8|:r0a@<XV6|+K|q=W9MLe3VWh+x2f0J$PI;u/yQ[`ztEbAxP}a-ED');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
