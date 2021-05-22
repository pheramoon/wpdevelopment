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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lxosvp78/zxVBZUhxt6pWNy/W9dwx9iSSKflE+iE66biUtHWH6199lE526iyhvOaG2PjeCBj9oTEYE7+66gqbQ==');
define('SECURE_AUTH_KEY',  'Da4X7EqJ/xlJuurjJOrV+NdEYfUIR+NP9UZPp+CY0U6zn2mgtIJVYcw+8mAYYfgfknBIllmZZURXMxzsQ/FvjQ==');
define('LOGGED_IN_KEY',    'yjK+JO7G7xv+aER9CMNg2dohERCHXcH5M431rg6H0s0POGz6E4zGLwKsw11MJpoSxbYWnJYjhtCdR51auOAkgg==');
define('NONCE_KEY',        'f9KJ0hFo4o9NoaAvgi9tjctQbWE0zS2yktYNDu88bPYQTcMhQ0GwvKEOyIaSfWmCKKh6mvfmRgTsvhiJhdyWlg==');
define('AUTH_SALT',        'Mn9r1dologLnr8atmU827WB+9Va4XrWKZOxjgGnY0MwlHXql8bHe9cu1G0c1AL21XHvJ8KystZrCEfEEGRd97A==');
define('SECURE_AUTH_SALT', 'md2Jinburalnkca1lwc6uFV9QK4SlYLSNYl02H6kEgMARcbxv0l8OlHAa8+pQTvSm/ojl784FtuTcGmf8M9SIQ==');
define('LOGGED_IN_SALT',   'yeE+cL5iG8xq+EnAkGr+0+HeafH/26wD/lP/PeFpIXCsrdqm4mtyDrhrgnFo3RUtZkZJ7X9sEawSWNCFLw5QnA==');
define('NONCE_SALT',       'G+PJBvDbUrECHzdo/VqZkG99k083QIJ8CcGUog/41+TfA+eUwEYNcFzF8riMP7gs157glzB5x74l8iY2S9ZlFg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
