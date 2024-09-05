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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')f$},d$S|x9l7k#u`cy!anF*DDF];WL8c3T TA1$OV{D0Pzcm5cVO-o!Y+Zg5>0(' );
define( 'SECURE_AUTH_KEY',  'V}?WP#20x+6q<oOgbiC`-sbz|M;^G[-$`3QN@[S[[eQF)J^TrFt|vrI),$?B$%d ' );
define( 'LOGGED_IN_KEY',    ',jb?|SySn1Gh,); 6}*:L/58g};jBxj0PMinM>N|J-T%}9.CxVKhHf<KRH A<TK*' );
define( 'NONCE_KEY',        'q.uNin(uP#oZQ*}8|x/eeg8c7T!tds?Tx*|*jtmT;BXE[l))80%fb&9+(9pwx96,' );
define( 'AUTH_SALT',        '7;EC_GPAs/%gb*#c3)AAnUGWd)Ex-#N/uwPl>Qf^kJ{6Az]-]$UAD<l)dy2L2gUW' );
define( 'SECURE_AUTH_SALT', '`.ox*BIzL/,W|H0%8-wnT=%83l]-M>_IviIz5Q.}DtnVl$z+TM=Jc7#Qf>&}c5y+' );
define( 'LOGGED_IN_SALT',   '!O/=DPS:TPsvW>-A>V!0M$>Rt,$bUFjm)D[YG8:i^?alR5(/=^&OJ4)b2k/7n!8X' );
define( 'NONCE_SALT',       'b;M@=7,Hsrd]+tY,cLVrhw@~PmiJL#8CX.<Q$^B hMn}v:/M~2xCCVr*S,*e/{MC' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
