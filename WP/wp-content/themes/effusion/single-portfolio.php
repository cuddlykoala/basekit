<?php
/*
  No Template name required, single-(custompost).php works! Where our custom post is portfolio
*/

$p = get_adjacent_post(1, '', 1);
if(!empty($p)) echo '<a class="prevpost" href="'.$p->guid.'" title="'.$p->post_title.'">&nbsp</a>';
$n = get_adjacent_post(1, '', 0);
if(!empty($n)) echo '<a class="nextpost" href="'.$n->guid.'" title="'.$n->post_title.'">&nbsp</a>';

?>



<?php get_header(); ?>

<div class="container">
  <!-- Example row of columns -->
  <div class="page-header">
    <div class="row">

        <div class="col-xs-8">
          <h1>Portfolio</h1>
        </div>

        <div class="col-xs-4 prev-next">

          <?php
            $prev = get_adjacent_post(false, '', true);
            $next = get_adjacent_post(false, '', false);
          ?>
          <div class="row">
            <div class="col-xs-5">
              <?php previous_post_link( '<p><span class="glyphicon glyphicon-circle-arrow-left"></span> %link</p>', $prev->post_title );?>
            </div>
            <div class="col-xs-2">
              <a href="<?php bloginfo('url'); ?>/?p=71"><span class="glyphicon glyphicon-th"></span></a>
            </div>
            <div class="col-xs-5">
          <?php next_post_link( '<p>%link <span class="glyphicon glyphicon-circle-arrow-right"></span></p>', $next->post_title );?>
            </div>

          </div>
        </div>
    </div>

  </div>

  <div class="row">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="col-sm-8 portfolio-image">

        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
        ?>
        <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic">

      </div>


      <div class="col-sm-4">
        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>
        <a href="<?php the_field('link');?>" class="btn btn-primary">View Final Piece</a>        
      </div>

    

    <?php endwhile; else: ?>

      <div class="page-header">
        <h1>Oh no!</h1>
      </div>

      <p>No content on this page.</p>

  <?php endif; ?>
    
    
  </div>

<?php get_footer(); ?>