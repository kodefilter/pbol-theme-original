<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/contrast.css" media="screen" title="contrast" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/styleswitcher.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fontresizer.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/submenu.js"></script>
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

 <body>
            <div id="wrapper">
                <div id="left">
                    <div id="Siteheader">
 						<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="<?php bloginfo('description'); ?>" title="<?php bloginfo('name'); ?>" /></a>
                     </div>
                    <div id="menu">
                        <nav>
                        	<?php wp_nav_menu() ?>   
                        </nav>
                        
                    </div>