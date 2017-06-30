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
define('DB_NAME', 'jk');

/** MySQL database username */
define('DB_USER', 'jk');

/** MySQL database password */
define('DB_PASSWORD', '121212');

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
define('AUTH_KEY',         'S|4`jCt;PcS.B/:]AEA@Z}WBYiV)oP`vBHRZ*uILa7rc2MjIqq;#$]l.lIH_HPC$');
define('SECURE_AUTH_KEY',  'lRMygwnOSjoK!YdhzaE:QC=C{;Lv<?mpRMcMap:jk&cU[Gjo!1)(IZh)B/[Wv`Gz');
define('LOGGED_IN_KEY',    ' H94R3||]v}$I;nQ%Iyxf 2;APIWiEW$Ji;7Y+%SUG[]8:t`~0.8.EtpBmM0nUeO');
define('NONCE_KEY',        'tf8b#K<=kur8ixC<F7y681kMe>*P5n[>(#L4_$f@-5%+:~)SAGkwXrtSDbdpzW[P');
define('AUTH_SALT',        '.2J4wc1/*Q5j6Eu>xs(_V-X>ZQQ0|9fAKH~*?T;J|H+;}~<aE l!?HB#s-)Ttrar');
define('SECURE_AUTH_SALT', 'V_F)>h *l:xLt8a.pC+[iKHcl.(MX7*R`ysUZy|U(ZQy&WdC3xFbhs=Y,Y+ #]uH');
define('LOGGED_IN_SALT',   'xBEJBTc >Uv@:ltETy~rVAEe;kIteFbgWY`bWc<1s02ob3{m$Ti[:1sueBDB5XR[');
define('NONCE_SALT',       '0*?Qak;@C&xq;Im$%dK~~COZ$W3QEBM x<I<0+3[L)=hu%2k,Yr,K?Ma%Rqx{.fq');

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
