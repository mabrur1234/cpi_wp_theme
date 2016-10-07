<!DOCTYPE html>

<html  data-ng-app="app" >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="{{app.description}}">
	<meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-touch-fullscreen" content="yes" />


<title>
<?php

	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'resortsupplies' ), max( $paged, $page ) );
?>
</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!--<link type='text/css' href='//fonts.googleapis.com/css?family=Lato:400,700' />-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- <link rel="preload" async href="/wp-content/themes/cpitest/fonts/1YwB1sO8YE1Lyjf12WNiUA.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" async href="/wp-content/themes/cpitest/fonts/H2DMvhDLycM56KNuAtbJYA.woff2" as="font" type="font/woff2" crossorigin> -->
	<link rel="stylesheet" rel="preload" href="/wp-content/themes/cpitest/css/menu.css" as="style">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- <link rel="stylesheet" rel="preload" href="/wp-content/themes/cpitest/css/all.style.css" as="style"> -->
	<!-- <script async rel="preload" type="text/javascript" src="https://www.clippingpath.com/wp-content/themes/cpitest/js/all-min.js"></script> -->
	
<?php
 //$css = pushCSS();
 //$js = pushJs();
//echo $css."\n". $js;
wp_head();


 $page = $wp_query->query_vars["pagename"];

switch ($page) {
    case "index":
        $active_price = 'active_nav';
		$C = $active_hwork = $active_myacc =  $active_freequote = 'inact_nav';
		echo "thisis  index page";
        break;
    case "pricing":
    	$active_price = 'active_nav';
		$active_index = $active_hwork = $active_myacc =  $active_freequote = 'inact_nav';
        break;
    case "how-it-work":
        $active_hwork = 'active_nav';
		$active_price = $active_index = $active_myacc =  $active_freequote = 'inact_nav';
        break;
    case "my-account":
        $active_myacc = 'active_nav';
		$active_price = $active_index = $active_hwork =  $active_freequote= 'inact_nav';		
        break;

    case "free-quote":
        $active_freequote = 'active_nav';
		$active_price = $active_index = $active_hwork = $active_myacc = 'inact_nav';
        break;
    default:
        $active_myacc = $active_price = $active_index = $active_hwork = 'inact_nav';
        break;
}
?>
</head>
<style>
	body{
		background-color: #c1b7b0;
	}
</style>
<body <?php body_class(); ?>>

<?php if(is_front_page()): 
	$full_height 	= "fullheight";
	$top_header_cls = "header_slider";
 else: 
	$full_height 	= "not-fullheight";
	$top_header_cls = "header";
endif?>

<!--without slider -->
	 <div class="row-fluid">
    	<div class="header_area" id="<?php echo $full_height; ?>">
	    	<div class="container"><!--NAV container-->
	    		<div class="<?php echo $top_header_cls; ?>"> <!--Satrt NAV-->
	    			<?php //wp_nav_menu( array( 'container_class' => 'cpi_menus', 'theme_location' => 'primary' ) ); ?>
	    			<nav class="navbar navbar-default menu">
					    <div class="container-fluid">
					      <div class="navbar-header">
					        <button data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
					          <span class="sr-only">Toggle navigation</span>
					          <span class="icon-bar"></span>
					          <span class="icon-bar"></span>
					          <span class="icon-bar"></span>
					        </button>
					        <a href="<?php echo site_url();?>" class="navbar-brand logo"><img height="54" width="178" alt="Dispute Bills" src="<?php bloginfo('template_url'); ?>/images/Capture.PNG""></a>
					      </div>
					      <div class="navbar-collapse collapse" id="navbar2" style="height: 1px;">
					        <ul class="nav navbar-nav navbar-right">
					          <li><a href="<?php echo site_url("/pricing/"); ?>" id="<?php echo $active_price; ?>">Pricing</a></li>
					          <li><a href="#" id="<?php echo $active_hwork; ?>">how it work</a></li>
					          <li><a href="#" id="<?php echo $active_myacc; ?>">my account</a></li>
					          <li class="ribbon" id="<?php ?>"><a href=""><h4>FREE</h4><span>quote</span></a></li>
					        </ul>
					      </div>
					    </div>
				  </nav> 
	    		</div><!--END NAV-->
			</div><!--NAV container-->