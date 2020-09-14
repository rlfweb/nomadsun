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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('MYSQL_DATABASE') ?: 'nomadsun');

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER') ?: 'root');

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root');

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST') ?: 'localhost');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', getenv('AUTH_KEY') ?: '*()ST1Eh6d^t.[XrPXpO$/2;^etNSxI`tve_1R8SH;y3u3:kuXdO*9p^U/@gc>e7' );
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'q+{C.BY+MQW5DtVq0g(xCfi6?{;Z<o)kCaw+uCQc~nT $Lle5N,W)@i8rm1=g/ln' );
	define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?: '~yR0bT/&y`X]cR&s;=9!dmpd/2&h&n|4g)PJ WE2{Rcdx1N2wZFP9x11z^~Lw;Wj' );
		define('NONCE_KEY', getenv('NONCE_KEY') ?: '+SYZl`Y?U 33H_PNq_Kg_&OY1*BWJu>(<!Fmm=0Mg kUB&L+$oI?{}zkJC:pn@k5' );
		define('AUTH_SALT', getenv('AUTH_SALT') ?: 'A^Mj<wSiOT,$G[ul;4nqeJVV^g-c5#MF|Q(<7t-o^/C3fG}Z{2-14nAEqbFdk&nt' );
			define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?: '{5(:D_f7Q^2Q42hxgvJ*a3RvY^$?~>-]aZ ^I)IRIrKipV|W#(rhn{wl8wt2K-kZ' );
				define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?: 'L.zIUmb{ ft7Ut!*2N^- LPpw|mr+umv.J#79WUA+5sOmq%*x) a&>;$Cr@FzAp,' );
					define('NONCE_SALT', getenv('NONCE_SALT') ?: 'fVwy+5b~$nvk9vNd6Ui!8fL*_+NLf#Z&F).H)8bQoc0%|@nN]FG]$/]PLhi4B(AJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
