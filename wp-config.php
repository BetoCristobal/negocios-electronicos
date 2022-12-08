<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edutec' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RiSeqd>rhLzTo3Dte33p@$Fz|U)o{1z%[1+ohN:#.*mT8/2<R]6vEwp1l8d+x,jv' );
define( 'SECURE_AUTH_KEY',  '^y6.zz[C|RrHrFC,*#RvU}Ayxd*hq~j1[o?4{NC).&4:H1r:9F:4-W$_Wq`Z~S=~' );
define( 'LOGGED_IN_KEY',    'dtnx/,e4nw0Xv7Nj42a29g@^3xj(;:L5yg{nJ!~,%D9al8!??*l/D>9&9m?>Wk7o' );
define( 'NONCE_KEY',        '*5t{;C<$5Hud}ovkiO5W9Uo)b+.>Uz#T9Ob~R8V9~<Zf-cVI*6KO(Q=j|8z, )X.' );
define( 'AUTH_SALT',        '[o*Y(kAeKM^KDWp=49Oo@T3btM-R$6aNAhu]za3~{m%MXTpNiRIW[Ag/Xu*,Soy4' );
define( 'SECURE_AUTH_SALT', 'x0RsBcP.S$Yub0lm<(:oc4ZNe B-%EzdD*[ctbd&*- D[s2L}{}T3#%%3*bHE)V|' );
define( 'LOGGED_IN_SALT',   'Z)`mGHK)pT)tds,yd{tM`/S!KktfpBH&!:Q6Dp(GEB_9)7Yd9$4EX=~%L$WRFE}]' );
define( 'NONCE_SALT',       '0s 8,?Af_G{(U=J*F(K;{5}ncXAm.-6;N+z$|&HQI+`st7v-u#oK?F!jL@(QX0c_' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
