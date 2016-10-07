<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/4/2016
 * Time: 3:43 PM
 */





add_action( 'wp_ajax_user_login', 'prefix_ajax_add_foobar' );
add_action( 'wp_ajax_nopriv_user_login', 'prefix_ajax_add_foobar' );
function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response
    //echo json_encode(array("data"=>array("msg"=>"success")));

    // Nonce is checked, get the POST data and sign user on
    $info = array();
    $info['user_email'] = $_REQUEST['user_email'];
    $info['user_password'] = $_REQUEST['password'];
    $info['remember'] = (isset($_REQUEST['remember'])&& !empty($_REQUEST['remember']))?$_REQUEST['remember']:false;

    $user = get_user_by( 'email', $info['user_email'] );
    $info['user_login'] = $user->user_login;
    $user_signon = wp_signon( $info, false );

    if ( is_wp_error($user_signon) ){
        echo json_encode(array('type'=>false ,'loggedin'=>false, 'message'=>__('Wrong username or password.')));
    } else {
        $cookies_name = $_COOKIE[$user->user_login] ;
        echo json_encode(array('type'=>true,'loggedin'=>true,'userData'=>$user,'user_loggedin_cookie'=>$cookies_name  ,'message'=>__('Login successful, redirecting...' )));
    }
    die();
}

add_action( 'wp_ajax_get_user', 'oel_ajax_get_user' );
add_action( 'wp_ajax_nopriv_get_user', 'oel_ajax_get_user' );
function oel_ajax_get_user() {
    // Handle request then generate response using WP_Ajax_Response
    if(is_user_logged_in()){
        $current_user = wp_get_current_user();
    }
    echo json_encode(array("data"=>array("msg"=>$current_user)));
    die();
}

//add_action('admin_enqueue_scripts', 'unload_all_jquery');
//add_action('enqueue_scripts', 'unload_all_jquery');


add_action( 'wp_ajax_oeluser_login', 'cmp_ajax_user_login' );
add_action( 'wp_ajax_nopriv_oeluser_login', 'cmp_ajax_user_login' );



function cmp_ajax_user_login() {

    global $json_api;

    if (!$json_api->query->cookie) {

        $json_api->error("You must include a 'cookie' authentication cookie. Use the create_auth_cookie method.");

    }

    $valid = wp_validate_auth_cookie($json_api->query->cookie, 'logged_in') ? true : false;

    $userid = wp_validate_auth_cookie($json_api->query->cookie, 'logged_in');

// print_r($userid);
// print_r(get_userdata( $userid ));
    $data = get_userdata( $userid );
    $username = $data->user_login;
// print_r($username );
// require('../wp-blog-header.php');
    $user_login = $username;
    $user = get_userdatabylogin($user_login);
// print_r($user);
    $user_id = $user->ID;
    $dsf=wp_set_current_user($user_id, $user_login);
// print_r($dsf);
    $sdf=wp_set_auth_cookie($user_id);
// print_r($sdf);
    $datas=do_action('wp_login', $user_login);
// print_r($datas);
// exit;
    wp_redirect( get_site_url(), 301 ); //exit;
// exit;

    if($userid) {
        $creds = array();
// $creds['user_login'] = 'add';// $json_api->query->username;
// $creds['user_password'] = 'add'; // $json_api->query->password;
        $creds['remember'] = true;
        $user = wp_signon( $creds, false );
        if ( is_wp_error($user) )
            echo $user->get_error_message();

        wp_redirect( get_site_url(), 301 ); exit;
    }
    else

    {
        return array("valid" => $valid);
    }
}




