<!-- Header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>    
    <?php wp_head(); ?>
</head>
<body id="page-top" class="index">
        <!-- Navigation -->
        <nav id="nav">
          <div class="container">
            <div class="row nav-section">
              <div class="col-md-12">
                <div class="col-md-4">
                  <div class="nav__logo ">
                    <a href="<?php echo get_site_url(); ?>">MODUS <span>versus</span></a>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="nav__top-menu">
                    <?php 
                      wp_nav_menu(array('menu' => 'main-menu'));
                    ?>
                  </div><!-- /nav__top-menu -->          
                </div><!-- /col-md-8 -->        
              </div><!-- /col-md-12 --> 
            </div><!-- /row -->
          </div><!-- /container -->
        </nav>
<!-- /Header -->