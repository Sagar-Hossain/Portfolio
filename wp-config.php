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
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '^Mi]&BGXR]g.4n@46Jkj/l1hPzf+Du^tCV3P2B)rlVeG)F_S}FG*tquK))sZEtyH' );
define( 'SECURE_AUTH_KEY',  'YdUzzwW555d?ZQDsivm<K&o]Xtk[NCBFfPn:}mBp-7J{olj,yTMARSlXZ[A8wC1m' );
define( 'LOGGED_IN_KEY',    '/b}P1h)8Q5nKpYep/MEW6opU+[{v^NgS5F#KYA&]&h}cj%D-2Ls?I{-zr>p{pJYd' );
define( 'NONCE_KEY',        '#e~Q.4UUIU-?g #i-}/!@B>@Q!ta<nr3KVBz*pO%FD1M_1,n *n6jERZN:>oa}S/' );
define( 'AUTH_SALT',        '/@#BRWWy%aA-}(!80P.dDA`ui/~8aD}k> ;ractfODiKsq^*=*0x-0`t?=T@`>5p' );
define( 'SECURE_AUTH_SALT', '0hcZf6{Ws0y *;ls?1P1I0-Zi0QHpRG<%U1M?9<ZZjpHs`$^76M+kPp{T.LQ5LU>' );
define( 'LOGGED_IN_SALT',   'Ws2Q~y RdzHZWg<?(fUD2Lxp%nH<7v8+{9@&e/.}&O?pf6YJd(z6Jrq9QD$t`/%s' );
define( 'NONCE_SALT',       '92<O>Y4_;-ZC?>8at(0/W?K+{_|RpSvNm?sE<ZrC72dHYC+54zqewi]6 !K3{k~S' );

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
