<?php

/**
 * @link       http://c2cg.net
 * @since      1.0.0
 *
 * @package    C2cg_Projecthuddle_Script
 * @subpackage C2cg_Projecthuddle_Script/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    C2cg_Projecthuddle_Script
 * @subpackage C2cg_Projecthuddle_Script/includes
 * @author     C2CG Group <info@c2cg.net>
 */
class C2cg_Projecthuddle_Script {
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Start up
     */
    public function __construct()
    {
        //~ add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        //~ add_action( 'admin_init', array( $this, 'page_init' ) );
        add_action( 'admin_menu', array( $this,'C2cg_Projecthuddle_Script_create_menu') );
		add_action( 'admin_init', array( $this,'C2cg_Projecthuddle_Script_settings_page_option') );
		add_action('wp_footer',array( $this, 'c2cg_projecthuddle_script_frontend'));
    }
    
	public function C2cg_Projecthuddle_Script_create_menu() {
		add_options_page(
			'ProjectHuddle Website', 
			'ProjectHuddle Website', 
			'manage_options', 
			'projecthuddle-website-script', 
			array( $this, 'C2cg_Projecthuddle_Script_options_do_page' )
		);
	}

	public function C2cg_Projecthuddle_Script_settings_page_option() {
		register_setting( 'c2cg_projecthuddle_script-settings-group', 'c2cg_projecthuddle_script' );
	}


	function C2cg_Projecthuddle_Script_options_do_page() {
		?>
		<div class="wrap">
		<?php //screen_icon(); ?>
		<form action="options.php" method="post">
		<?php
		settings_fields( "c2cg_projecthuddle_script-settings-group" );
		do_settings_sections( "c2cg_projecthuddle_script-settings-group" );
		?>
		<table class="form-table instellingen-setting">
		<tr valign="top">
		<th scope="row" style="padding-bottom: 0;">Copy and paste the Website Setup code from Project Huddle "Install Website Code" field.</th>
		</tr>	
		<tr valign="top">
		<td><textarea name="c2cg_projecthuddle_script" style="width:500px;height:300px"><?php echo esc_attr( get_option('c2cg_projecthuddle_script') ); ?></textarea></td>
		</tr>
		</table>
		<?php submit_button(); ?>
		</form>
		</div>
		<?php
	}
	function c2cg_projecthuddle_script_frontend() {
		echo get_option('c2cg_projecthuddle_script'); 
	}
		
}

