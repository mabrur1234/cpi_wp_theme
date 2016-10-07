<!DOCTYPE html>
<html lang="en" data-ng-app="app">
<head>
	<meta name="fragment" content="!">
	<base href="/">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="{{app.description}}">
	<meta name="keywords" content="app, responsive, angular, bootstrap, dashboard, admin">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<title data-ng-bind="pageTitle()">Packet - Angular Bootstrap Admin Template</title>
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<!-- Packet CSS -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/cpi_wp_theme/portal/templates/assets/css/app.min.css">

	<!-- Packet Theme -->
	<link rel="stylesheet" data-ng-href="<?php echo site_url(); ?>/wp-content/themes/cpi_wp_theme/portal/templates/assets/css/themes/{{ app.layout.theme }}.css" />
	<!-- <link rel="stylesheet" data-ng-href="<?php //echo site_url(); ?>/wp-content/themes/cpi_wp_theme/portal/templates/assets/css/themes/decoration.css" /> -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/cpi_wp_theme/portal/templates/assets/css/decoration.css">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo site_url(); ?>/wp-content/plugins/oel-cmp/favicon.ico" />
	<script data-cfasync="false">
		var siteUrl = '<?php echo site_url(); ?>'
		ajaxUrl =  '<?php echo admin_url('admin-ajax.php'); ?>';
		var templateDirRootUrl = '<?php echo site_url(); ?>/wp-content/plugins/oel-cmp/templates/';
		var pluginsDirUrd = '<?php echo site_url(); ?>/wp-content/plugins/oel-cmp';
		
		<?php
		if(is_user_logged_in()){
			$requestUri =$_SERVER['REQUEST_URI'];

			if($requestUri=='/signin/'){
				echo "var requestUri ='/app/dashboard' ";
			}else{
				echo "var requestUri ='".rtrim($_SERVER['REQUEST_URI'],'/')."' ";
			}
		}else{
			echo "var requestUri ='/signin' ";
		}  ?>
	</script>


	<!--[if lte IE 8]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
	<![endif]-->

	<?php $isiPad = (bool) strpos( $_SERVER['HTTP_USER_AGENT'],'iPad' ); ?>

	
	<?php wp_head(); ?>

</head>
<body>





