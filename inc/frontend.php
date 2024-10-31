<?php
if(!function_exists('QuixChat_AddonScript_into_footer')){
    function QuixChat_AddonScript_into_footer() {
        wp_enqueue_script( 'quixchat_api_script', 'https://api.quixchat.com/assets/js/quixchat.js',array(), '3.5', true );
        wp_add_inline_script('quixchat_api_script','var Quix_base_id ="'.get_option('QuixChat_Base_id').'"; 
        var Quix_license_key ="'.get_option('QuixChat_license_key').'";','before');
    }
}

if(get_option('QuixChat_Base_id') and get_option('QuixChat_license_key') and get_option('QuixChat_showIn') =='all'){
    add_action( 'wp_enqueue_scripts','QuixChat_AddonScript_into_footer');
}

if(!function_exists('QuixChat_func_create_sc')){
    function QuixChat_func_create_sc($atts){
      return QuixChat_AddonScript_into_footer();
    }
    
    if(get_option('QuixChat_Base_id') and get_option('QuixChat_license_key') and get_option('QuixChat_showIn') =='none'){
        add_shortcode( 'IT_QUIXCHAT', 'QuixChat_func_create_sc' );
    }
    
}