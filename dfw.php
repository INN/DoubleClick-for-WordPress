<?php
/*
Plugin Name: Super Cool Ad Manager Plugin
Description: A simple way to serve DoubleClick and Google Ad Manager ads in WordPress.
Version:     0.3.1-rc1
Author:      innlabs, Will Haynes for INN
Author URI:  https://labs.inn.org/
License:     GPL Version 2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dfw
*/

define( 'DFP_VERSION', '0.3.1-rc1' );

$includes = array(
	'/inc/class-doubleclick.php',
	'/inc/class-doubleclickadslot.php',
	'/inc/class-doubleclickbreakpoint.php',
	'/dfw-init.php',
	'/inc/block.php',
	'/inc/class-doubleclick-widget.php',
	'/dfw-options.php',
);

foreach ( $includes as $include ) {
	if ( 0 === validate_file( dirname( __FILE__ ) . $include ) ) {
		require_once( dirname( __FILE__ ) . $include );
	}
}
