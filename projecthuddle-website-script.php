<?php

/**
 *
 * @link              http://c2cg.net
 * @since             1.0.0
 * @package           C2cg_Projecthuddle_Script
 *
 * @wordpress-plugin
 * Plugin Name:       ProjectHuddle Website Script
 * Plugin URI:        https://www.c2cg.net/projecthuddle-website-plugin-for-wordpress/
 * Description:       An easy way to install Website Code for ProjectHuddle websites.
 * Version:           1.0.0
 * Author:            C2CG
 * Author URI:        http://c2cg.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       c2cg-projecthuddle-script
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'C2cg_Projecthuddle_Script_VERSION', '1.0.0' );

require plugin_dir_path( __FILE__ ) . 'includes/class-projecthuddle-website-script.php';

$plugin = new C2cg_Projecthuddle_Script();
