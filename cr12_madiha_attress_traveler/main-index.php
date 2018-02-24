<!DOCTYPE html>
<html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php bloginfo('cdescriotion'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head() ?>
</head>
<body>

  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
        <?php
        wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker())
        );
        ?>
      </nav>
    </div>
  </div>
  <div class="jumbo2">
      <h1 class="blog-title"> <?php bloginfo('name'); ?></h1>
      <p class="lead blog-description">
        <?php bloginfo('description'); ?>
      </p>
  </div>
  
   <center>
          <h1>Travel</h1>
           <p><a class="btn btn-primary btn-lg" href="#" role="button">more...</a></p>
           </center>
     
      </p>
      <div class="row">
          <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                 <img id="pic1" src="
                 img/aswan.jpg" alt="Aswan">
                   <div class="caption">
                       <h3>Hurgada</h3>
                       <p>stay in 5 stars Hotel all inclusive..</p>
                      
                       <p><a href="#" class="btn btn-primary" role="button">get more information</a>
                   </div>
              </div>

        </div>
        <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                 <img id="pic2" src="img/everest.jpg" alt="Everest">
                   <div class="caption">
                       <h3>camping in everest</h3>
                       <p>Everest Base Camp is either of two base camps on opposite sides of Mount Everest (It could also be any Everest base camp on a given route, but this is less common since the two main routes became standardized). </p>
                       <p>South Base Camp is in Nepal at an altitude of 5,364 metres (17,598 ft) (28°0′26″N 86°51′34″E), and North Bas</p>
                       <p><a href="#" class="btn btn-primary" role="button">get more information</a>
                   </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                 <img id="pic3" src="img/The-Great-Egyptian-Pyramids-Names-Picture.jpg" alt="pyramids">
                   <div class="caption">
                       <h3>Egypt</h3>
                       <p>stay in 5stars hotel all inclusive..</p>
                       <p>transportation</p>
                       <p><a href="#" class="btn btn-primary" role="button">get more information</a>
                   </div>
              </div>
</div>
  </div>
   


<?php get_footer(); ?>