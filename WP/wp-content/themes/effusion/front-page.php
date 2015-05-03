<?php get_header(); ?>

  <header id="myCarousel" class="carousel-fade carousel slide">

    <?php 
    $args = array(
          'post_type' => 'carousel_image'
      );

    $the_query = new WP_Query( $args ); 
    ?>

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <div class="carousel-inner">
    <?php 
      if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
        
            <div class="item">
                <div class="fill" style="background-image:url('<?php the_field('image') ?>');"></div>
                <div class="carousel-caption">
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
            
  <?php endwhile; endif; ?>
        </div>
    </header>

<?php get_footer(); ?>