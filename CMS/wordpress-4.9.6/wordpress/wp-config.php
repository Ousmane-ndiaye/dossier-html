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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Aumones');

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
define('AUTH_KEY',         ';:%=KFr4!4BjF-:vOGRKHjg}SMSuS)s]r#{Fm?o3v00y=4xm#VZb;%=;m+iwZ=`X');
define('SECURE_AUTH_KEY',  '5.33%9!v/bA#y$r$q!+Jab>o40PG>5m?Is3WB2x?$|,)5F`,sEg)YD1O4+#0*[~B');
define('LOGGED_IN_KEY',    'wRZnq)#wP9WZ4Q[FE4@<c7UD^(r4eRYh2&td}-IB@l<MCqqCxS.87WSktK!jg{0z');
define('NONCE_KEY',        'DcS,`pKPB.ZYv8VPBCc t@FdH(]h0cHz~!![xyQ< snm5e]IlkwnMeJq$>+34DP9');
define('AUTH_SALT',        '3BK&W<t[.m)?ER(W:G)wz6M+3IPu(9dE1Gp|L|[Tgk:y7q^|d`rR*Y,?38)rKL@|');
define('SECURE_AUTH_SALT', 'yjtEM{w_/Ec`1M5#VOs/b6f.s=+UiuY.07Cs>d}}4<qL3IY9%`S9u$p,ETO>Hic=');
define('LOGGED_IN_SALT',   'Ox`xQk!AQy3iJ&A^:8hDWhh!XD(]d#6P f2/MaoGL(IN/N<$_1C!,[@JT`kt70u}');
define('NONCE_SALT',       ';yB<&$^`_+!Y`dz{2Ue8T_=xL+`8u}Kk9F#+>L2M2-%$0&*$WHzTW02XvZ ZdZB,');

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
