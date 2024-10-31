<?php
if( ! function_exists('itwpMods_Quixchat_addSubMenu')){
		
    add_action('admin_menu', 'itwpMods_Quixchat_addSubMenu');
    add_action( 'admin_init', 'itwpMods_QuixChat_Save_Settings' );
    function itwpMods_Quixchat_addSubMenu(){
        
        add_menu_page(__('QuixChat'), __('QuixChat'), 'manage_options', 'itwpMods_quixchat', 'itwpMods_quixchat', '
        dashicons-testimonial'); 
    }

}

if(!function_exists('itwpMods_QuixChat_Save_Settings')){
    function itwpMods_QuixChat_Save_Settings() { // whitelist options
        register_setting( 'QuixChat-settings', 'QuixChat_showIn' );
        register_setting( 'QuixChat-settings', 'QuixChat_email' );
        register_setting( 'QuixChat-settings', 'QuixChat_Base_id' );
        register_setting( 'QuixChat-settings', 'QuixChat_license_key' );
      }
}



//initializing page content of addons

if( ! function_exists('itwpMods_quixchat')){

	function itwpMods_quixchat(){
		include_once('quixchat.php');
	}

}