<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         'bSIg*:y+Ge3N?KqA6] nz9~ Tc<gP2KWoY*urg]RRD2[~8B3rN%>Z^wU*>Gtrs.q' );
define( 'SECURE_AUTH_KEY',  'K_Y5LvcJGogXuFB,LuEA$?I$ZuPr|XM$r$&VS?dZgN-h$ywq//{b{?axp*`1_?k|' );
define( 'LOGGED_IN_KEY',    't&@]M*(q&@[7`S{k$,ViyBoc3avtDcH@h8off?IE].2+{LE[e=E%>ZFu%/*X0`6x' );
define( 'NONCE_KEY',        '-Z@yD:+AX,&-!2@++MH$,t9nR<k-hT~rg`?9gE Q#bnUfM<rk6^1PN=L%nUb!w8G' );
define( 'AUTH_SALT',        ']8dc!;y@YY 4S7t8>/C!Djz&C<>xRI^E3bn8tnDrI&-d9eS+fSF=V.9>1l~_ 3%5' );
define( 'SECURE_AUTH_SALT', 'Xy=@q(I*ZN)P/UgKBEHgnowTm=Z_Y0Exq>0|#|0{265xr%a8/pm).BIqmh,}lz|B' );
define( 'LOGGED_IN_SALT',   'Yls>TGle_9t3>}Ms_6^l;KH8M?#|Ufda?`z/RN;C~yWh&J DG&#R<b Hf4|h7Dgx' );
define( 'NONCE_SALT',       'Z3/ttCOGC_a.gkhXU2W}**#,0I?U>hb<AeQ:=ryUj!X5m?+$B^O@a=:_TE]RRNnr' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
