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
define('DB_NAME', 'lunch_learning');

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
define('AUTH_KEY',         ';RQe1@t1-69VM<GV%[grM-gO><|VWj:@$8e!RdjE2u76t*oAhxQ%2IsFy:N *u`h');
define('SECURE_AUTH_KEY',  '*O%b3VjQ%~Ae.g$bc_]%/C8PNG@Jq^DL@&5?y=[C{dLj={8Nc~](Fm<Onrbo]Z)9');
define('LOGGED_IN_KEY',    'ruyGeH!-{3wDf6BONSg(XX`5i(tfOt+lB_[kVWd FTf^_7*2NHG2gG 0_eOzhq;i');
define('NONCE_KEY',        'rBEdRlp?y$-wDa;7ASo-f}Ybz=(<9j{>V`YOPM]O N(4{nAMJ~TIW5tj5]nI.| I');
define('AUTH_SALT',        'REd7W$b,gh,lw~uagwO9bLn70NCE_`[r[jgS>*MYAk_,ml)YW4>XQPk^y6n[ye7S');
define('SECURE_AUTH_SALT', '$Au1dBfDa$i)IKoVTqYyW*Kx/(EuJ[vjVbYeP(`0Y0KWVIx&&h@.^_Fj C?$./@{');
define('LOGGED_IN_SALT',   'bW8Pd|UGb^&sP+Q}.b6DnV63,R4GzR9UijvFsXZ$,4px=3|0A}AzJ[5@^!(CXiIR');
define('NONCE_SALT',       '(CgaeZ<5[xScnl>UeLC_!o9(bse%rfGgcD)ApsG;u(roLy_b{3a~9zmedF91w^WK');

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
