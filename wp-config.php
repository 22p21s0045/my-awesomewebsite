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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'iQDXe-wMdG<krVnVcrNe3Lv:^Sp<.pQfV7JU<F!-XG9rfYmN|EjBt)%[cq^gPM;$' );

define( 'SECURE_AUTH_KEY',  ']6(W[9V4ty4olNB!{6@+$@BxO9yb2TIHMaKFF~IA^h]1H%Ri}>NZ*FN0B*5`8,7n' );

define( 'LOGGED_IN_KEY',    '5d>t~3*V-Y^K o .~d?4[s2|h#0|wwM<4@lR~WDO!j=NC(c~,. 3L[H(>~kpDoO-' );

define( 'NONCE_KEY',        '!=U@D-MRZmbaWdlROZ4R |PHr5Q-E&&|K^Rh:IrObGIv[)M6a+bLb|+CC$Prj9tk' );

define( 'AUTH_SALT',        '|hNS7I*eQlm?3oH_])QIg+}CuN|H@@&.yEyoA<1Z;jtxuzNg>HF@u_Us{}BDVba ' );

define( 'SECURE_AUTH_SALT', '|O-ANp>GzyM1smMQ`8Z`6@a_D1m5g&AJ0E(tJ)xRJ|0,J5%bE.,r_boPo3.s(Sa,' );

define( 'LOGGED_IN_SALT',   'Y61lGp).~ W}J&Wq~jgLk63scW?[6^RJnJ;3:R,[!|]%g]6rszWbvR~EH!`R&k9v' );

define( 'NONCE_SALT',       '<ehnKm.uOQ+B[W4ZD;|*|U$)6,MMvi*Pq}q7lmjzItxd(?0l|g9:vMh4WzMx7T^-' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

