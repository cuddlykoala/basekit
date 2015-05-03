<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      <?php wp_title( '|', true, 'right' );?>
      <?php bloginfo('name'); ?>
    </title>


    <?php wp_head(); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


  <body <?php body_class(); ?> >  

  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <a class="navbar-brand hidden-lg hidden-md hidden-sm " href="index.php">
            <img class="img-responsive" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/effusion/images/effusion_white.png">
        </a>
        <div class="container nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <?php 
                         $args_left = array(
                            'menu'    => 'left-menu',
                            'menu_class' => 'nav navbar-nav small-right',
                            'container' => 'false'
                          );
                          wp_nav_menu( $args_left );
                         ?>

                <!-- <ul class="nav navbar-nav small-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                </ul> -->

                <a class="navbar-brand hidden-xs" href="<?php bloginfo( 'url' ); ?>">
                    <img class="img-responsive" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/effusion/images/effusion_white.png">
                </a>

                       <?php 
                         $args_right = array(
                            'menu'    => 'right-menu',
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'container' => 'false'
                          );
                          wp_nav_menu( $args_right );
                         ?>

                <!-- <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="members.php">Members</a>
                    </li>
                    <li>
                        <a id="contactUs" href="#">Contact</a>
                    </li>
                </ul> -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>