<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'wptest' );
define( 'DB_USER', 'wptest' );
define( 'DB_PASSWORD', 'wptest' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

/**
 * Custom content directory
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );

/**
 * Accomodate sub-directories for local development.
 *
 * Local development environments usually live within sub-directories of http://localhost/ 
 */
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/'. basename(dirname( __FILE__ )) .'/content' );
define( 'WP_HOME',  'http://' . $_SERVER['HTTP_HOST'] . '/'. basename(dirname( __FILE__ )) );
