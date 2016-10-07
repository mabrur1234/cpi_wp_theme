<?php
/*
Plugin Name: OEL Customer portal
Description: For manage the customer info
Version: 0.0.1
Author: Shah Alam
Author URI: https://www.outsourceexpertsbd.com/
*/


define( 'PLUGIN_ROOT_DIR', plugin_dir_path( __FILE__ ) );

include(PLUGIN_ROOT_DIR . 'template_filter.php');
include(PLUGIN_ROOT_DIR . 'include/oel-cmp-scripts.php');
include(PLUGIN_ROOT_DIR . 'include/ajax-handaler.php');
add_action( 'plugins_loaded', array( 'Page_Template_Plugin', 'get_instance' ) );


function unload_all_jquery() {
    //wp_enqueue_script("jquery");
    $jquery_ui = array(
        "jquery-ui-widget",
        "jquery-ui-mouse",
        "jquery-ui-accordion",
        "jquery-ui-autocomplete",
        "jquery-ui-slider",
        "jquery-ui-tabs",
        "jquery-ui-draggable",
        "jquery-ui-droppable",
        "jquery-ui-selectable",
        "jquery-ui-position",
        "jquery-ui-datepicker",
        "jquery-ui-resizable",
        "jquery-ui-dialog",
        "jquery-ui-button"
    );

    foreach($jquery_ui as $script){
        wp_deregister_script($script);
    }
}




if(!function_exists('cmp_ng_ui_view')){
    add_action('ng-ui-view','cmp_ng_ui_view',10);
    function cmp_ng_ui_view(){
        echo "<div ui-view id=\"app\" ng-class=\"{'app-mobile' : app.isMobile, 'app-navbar-fixed' : app.layout.isNavbarFixed, 'app-sidebar-fixed' : app.layout.isSidebarFixed, 'app-sidebar-closed':app.layout.isSidebarClosed, 'app-footer-fixed':app.layout.isFooterFixed}\"></div>";
    }
}









//add_filter('authenticate', function($user, $email, $password){
//
//    //Check for empty fields
//    if(empty($email) || empty ($password)){
//        //create new error object and add errors to it.
//        $error = new WP_Error();
//
//        if(empty($email)){ //No email
//            $error->add('empty_username', __('<strong>ERROR</strong>: Email field is empty.'));
//        }
//        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //Invalid Email
//            $error->add('invalid_username', __('<strong>ERROR</strong>: Email is invalid.'));
//        }
//
//        if(empty($password)){ //No password
//            $error->add('empty_password', __('<strong>ERROR</strong>: Password field is empty.'));
//        }
//
//        return $error;
//    }
//
//    //Check if user exists in WordPress database
//    $user = get_user_by('email', $email);
//
//    //bad email
//    if(!$user){
//        $error = new WP_Error();
//        $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
//        return $error;
//    }
//    else{ //check password
//        if(!wp_check_password($password, $user->user_pass, $user->ID)){ //bad password
//            $error = new WP_Error();
//            $error->add('invalid', __('<strong>ERROR</strong>: Either the email or password you entered is invalid.'));
//            return $error;
//        }else{
//            return $user; //passed
//        }
//    }
//}, 20, 3);




?>