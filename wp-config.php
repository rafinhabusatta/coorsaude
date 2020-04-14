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
define( 'DB_NAME', 'coorsaudDBl4grd' );

/** MySQL database username */
define( 'DB_USER', 'coorsaudDBl4grd' );

/** MySQL database password */
define( 'DB_PASSWORD', 'w9LTfz9ITQ' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'jq*t;amx9PLa#]9{Am*y<TiXm2LETX.2GZ#5:1dtw|RhZds8SDS~_#5Wll~KaShl1' );
define( 'SECURE_AUTH_KEY',  'k|Nggk4JNJNz}AEX.<^37j$q*PTifuIM7Qr^$}0fvjyIXbYn>Bpt#SWTim6L9O~_' );
define( 'LOGGED_IN_KEY',    ':Kw|hWap9D9OS_1#9Cp_p~OShz@JcgYr}BFJY>7,7jn^swCVZZ|48CV!|@04gz6Q$' );
define( 'NONCE_KEY',        '!ZYcv0FCFY|>XquATAT*.66Aqu.*.PimYr{B7BU^,<7Aq^n^MQjx+Laeap]DDHa-]' );
define( 'AUTH_SALT',        ']6ixu.Wx#Vo48NKZ-[[8@:NgSVp5859O~_!5hk~w-KZdv,FYQUn37BFU,>^37j$cr' );
define( 'SECURE_AUTH_SALT', 'os!|RkKZ[:C8Co_||8Zoko~NR^37j$jyIMffjIMIMy{@^4gjgvzFYMf}J0Fvz>A' );
define( 'LOGGED_IN_SALT',   'n>UYQjn3MPi;2LEHx<];Dexqt#TWMbf2{EIu.b[:Zpl-GKZds:C~1_#Wlpl+5OSS' );
define( 'NONCE_SALT',       '#Odad[DGUo>848N@!^47j@kzJNcRV!484Kk@@!0gkcwzFZ${bfuq^AUXXq6A6AQ*.' );

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
