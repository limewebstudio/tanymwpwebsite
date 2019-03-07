<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 
   <?php wp_head(); ?>
</head>

<body>
   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="<?php bloginfo('url')   ?>">
                <div><?php bloginfo('name') ?></div>
               </a>
            </div>
            <nav id="nav-wrap">
               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
               
               <?php wp_nav_menu( array(
                                'theme_location'  => 'top',
                                'container'       => null,
                                'menu_class'      => 'nav',
                                'menu_id'         => 'nav',
                             ) );

                              ?> 
              

            </nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->