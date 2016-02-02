<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href="/wp/wp-content/themes/opendatang-theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp/wp-content/themes/opendatang-theme/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/wp/wp-content/themes/opendatang-theme/font-awesome/css/font-awesome.min.css">
    <script src="/wp/wp-content/themes/opendatang-theme/js/bootstrap.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		
	<header class="jumbotron jumboHead">
        <div class="container">

            <div class="logo"><img src="/wp/wp-content/themes/opendatang-theme/images/mict-logo.png" ></div>
            <div class="heading"><span class="brand">DATA.GOV.NG</span><br><span style="font-size: medium"> FEDERAL MINISTRY OF COMMUNICATION TECHNOLOGY</span></h2></div>
            <div class="search visible-lg visible-md">
            	
               <form method="GET" action="/dataset" class="navbar-form">
                   <div class="input-group">
                       <input type="text" name="q" class="form-control" placeholder="Search Data.gov.ng" aria-describedby="basic-addon1">
                       <span class="input-group-btn">
                           <button class="btn btn-default" type="submit">
                               <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                           </button>
                      </span>
                   </div>
                
              </form>
            </div>          
      </div>
      </header>
      <nav class=" navbar-default">
          <div class="container">
              
              <div class="navbar-header">
              	<form class="visible-sm visible-xs navbar-form navbar-left" role="search" method="GET" action="/dataset">
              		<div class="input-group">
      				 <input type="text"  name="q" class="form-control" placeholder="Search for...">
                     <span class="input-group-btn">
				        <button class="btn btn-default" type="submit">Go!</button>
				      </span>
				  	</div>
				</form>
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav nav-pills mynav visible-lg visible-md">
                        <li role="presentation"><a href="/">HOME</a></li>
                        <li role="presentation"><a href="/dataset">DATA</a></li>
                        <li role="presentation"><a href="/wp/index.php/innovations/">INNOVATION</a></li>
                        <li role="presentation"><a href="/apihelper">DEVELOPERS</a></li>
                        <li role="presentation"><a href="/wp/index.php/forums/forum/11-2/">REQUEST A DATASET</a></li>
                        <li role="presentation"><a href="/wp/index.php/contact/">CONTACT</a></li>
                      </ul>
                    
                    <ul class="nav mynav visible-sm visible-xs">
                        <li class="col-xs-12" role="presentation"><a href="/">HOME</a></li>
                        <li class="col-xs-12" role="presentation"><a href="/dataset">DATA</a></li>
                        <li class="col-xs-12" role="presentation"><a href="/wp/index.php/innovations/">INNOVATION</a></li>
                        <li class="col-xs-12" role="presentation"><a href="/apihelper">DEVELOPERS</a></li>
                        <li class="col-xs-12" role="presentation"><a href="/wp/index.php/forums/forum/11-2/">REQUEST A DATASET</a></li>
                        <li class="col-xs-12" role="presentation"><a href="/wp/index.php/contact/">CONTACT</a></li>
                      </ul>
                </div><!-- /.navbar-collapse -->
           
          </div>
      </nav>
		
		<div id="main" class="site-main">
