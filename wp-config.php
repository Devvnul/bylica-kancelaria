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
define( 'DB_NAME', 'serwer107018_bylicakancelariatest' );

/** Database username */
define( 'DB_USER', 'serwer107018_bylicakancelariatest' );

/** Database password */
define( 'DB_PASSWORD', 'Admin123!' );

/** Database hostname */
define( 'DB_HOST', 'sql66.lh.pl' );

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
define( 'AUTH_KEY',         'm)!Ex4@g%ysz(Wwh]Sl3jSD}$9kP~151:It:IS7n|EG?o>^B}%2J3h^xGVH%00,B' );
define( 'SECURE_AUTH_KEY',  'Ld19sk=SuT]mz5xsps80+&MU#~R@6qMCuR&)b>3IwB!L)Jqrt9N`0zZUoyq:g-{|' );
define( 'LOGGED_IN_KEY',    'qoz]M&w~$;I%KhG;`L4@.v/3:Okc1V,MU9FC~yA:^$MlC]fwv.^vbM;?{K=O]C3o' );
define( 'NONCE_KEY',        '!hCtwYZZ`gv3nA$SD3#5SEPBHal=&TiUNvO</~j/O=.2:* AMV,]*PMQ-@&;=9hI' );
define( 'AUTH_SALT',        'kn}R+9OMd?RwT8E7aii<c.?7>y}^T@8/:A-$?ySmX1};#2>m-2b*y>I]]-^PmLuV' );
define( 'SECURE_AUTH_SALT', '8E9Z2c?p2#m0qT6Og!o[$2&K[zm1(M91AM=VgNw7O]dI#&(Lcb/X|w3PE afo!Tu' );
define( 'LOGGED_IN_SALT',   '%lMwsX6qC{:dlB% MPehf-tF.3Q{HenX===WRdQ,(-vyrf18]gq:!O>F>6WA&SD_' );
define( 'NONCE_SALT',       '3noGdeHl!LI9F$?On1@e}rHk]-n6~c,+XG<AbZ5N0|Jh!7+VgaB+9of%zK/RPsMO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
