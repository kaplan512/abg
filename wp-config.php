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

define( 'DB_NAME', "kxewzuhe_test" );


/** Database username */

define( 'DB_USER', "kxewzuhe_test" );


/** Database password */

define( 'DB_PASSWORD', "OVSi{^q4eK&d" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'Ivc3`ZNLB/uQ^)/HY)3uOwF^6ol1]Mi>.NU1+b,7]#lceYKK?`3!-s.yNDDHZFg/' );

define( 'SECURE_AUTH_KEY',  '>G+?:gW`Hl,5o%[3AwL9PvAdI*bs| 2V N(z1y]ohgU<Zi=b;A;RnHDrWEW+#x#E' );

define( 'LOGGED_IN_KEY',    'D0[GqVO#UdToWl%+ V+Q %4ECQ2yA*I01Q47jeShYBpp*?YfNc+hO X#Y8B=t^$O' );

define( 'NONCE_KEY',        'I2$KdzY>jg9D8X8`3R%bv8c*GaURrQK,B>L@iByMqjw%WY|hVtChv27dp!L[{w(a' );

define( 'AUTH_SALT',        'sH!fpUFeSf+9? 6F,j_mXs!/VZ-ahRS0n-*Sq)nH<B?V6:.RL4^q{@1z:;I ; U;' );

define( 'SECURE_AUTH_SALT', 'VtIJCLBt$j%Nb4Yl^B8b~7^0*2[R94T%4KPm%x*`(/.bDS{u?:!4N>hP~fyO+E/o' );

define( 'LOGGED_IN_SALT',   '44l;UGm>cm3M]7P.$wRlEpL8>~i)O2ChmGS <*G]upGUB$s+-7%NR<-RF8$-3AGj' );

define( 'NONCE_SALT',       'CHXF7/%#3(oVa*7Mu@y`x;%Bn-9f{{v)@{Sg$!qH@[k09o@BV&J74%v(|,s!7R;f' );


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

