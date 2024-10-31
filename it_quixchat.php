<?php
/*
Plugin Name: WP Click To Chat Button - Contact, Telegram, Line, WeChat, Email, Call Button
Plugin Uri: https://builder.quixchat.com
Description: WhatsApp Chat button allows you facility to connect with your customer via wordpress website to whatsapp chat, Messenger, Telegram Chat, Line, WeChat, Call button.
Author: WP WhatsApp Chat Button Team
Author URI: https://quixchat.com/
Version: 3.5
Tags: whatsapp, whatsapp chat, facebook messenger, click to chat, chat, chat button, call now button, messenger, whatsapp button, chat icon, contact button, click to call
Text Domain: quixchat-button
Licence: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/*###############################################################
    QuixChat 3.5 (A Complete Live Chat System)
##############################################################*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*********Plugin Initialization*/
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/****Inititalization********/
define('QUIXCHAT_PATH', plugin_dir_path(__FILE__));
define('QUIXCHAT_URL', plugins_url('',__FILE__));

/**ACTIVATOR*/
register_activation_hook(__FILE__, 'it_quixchat_activate');

if(!function_exists('it_quixchat_activate')){
        function it_quixchat_activate(){
        
        }
    }else{
        $plugin = dirname(__FILE__) . '/it-quixchat.php';
        deactivate_plugins($plugin);
        wp_die('<div class="plugins"><h2>QuixChat 3.0 Plugin Activation Error!</h2><p style="background: #ffef80;padding: 10px 15px;border: 1px solid #ffc680;">We Found that you are using Our Plugin\'s Already, Please Deactivate Previous to re-activate it. Don\'t worry your plugin data will be automatically migrate into this version. Thanks!</p></div>','Plugin Activation Error',array('response'=>200,'back_link'=>TRUE));
}
    

/** DEACTIVATOR *****/
register_deactivation_hook(__FILE__, 'it_quixchat_deactivate');
    
    if(!function_exists('it_quixchat_deactivate')){
        function it_quixchat_deactivate(){

        }
}

/*#################################################
           ADMIN MENU & PAGE of QUIXCHAT
#################################################*/
if(!function_exists('it_quixchat_script_register')){

  function it_quixchat_script_register() {
    wp_register_style('it_quxchat_bulma_css', plugins_url('/assets/css/bulma.min.css',__FILE__ ),false,'3.0',false);
    wp_register_style('it_quxchat_backend_css', plugins_url('/assets/css/backend.css',__FILE__ ),false,'3.0',false);
    wp_enqueue_style(array('it_quxchat_bulma_css','it_quxchat_backend_css'));
  }

}

if(isset($_REQUEST['page'])){
  if($_REQUEST['page'] == 'itwpMods_quixchat'){
    add_action( 'admin_enqueue_scripts', 'it_quixchat_script_register' );
  }
}

/*#################################################
           Backend of QUIXCHAT
#################################################*/
@include_once('inc/backend.php');

/*#################################################
           FRONTEND of QUIXCHAT
#################################################*/
@include_once('inc/frontend.php');