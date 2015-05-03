<?php get_header(); ?>

<section class="main" id="news">
  <div class="container">
  <!-- Example row of columns -->
  <div class="row single-post">
    <div class="col-md-8">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="page-header">
        <h1><?php the_title(); ?></h1>
        <h3 class="postdate"><?php the_time('M d Y'); ?></h3>
       </div>

      <?php the_content(); ?>

    <?php endwhile; else: ?>

      <div class="page-header">
        <h1>Oh no!</h1>
      </div>

      <p>No content on this page.</p>

  <?php endif; ?>

  </div>
    
  <div class="col-md-3 col-md-offset-1">
    <?php get_sidebar( 'blog' ); ?>
  </div> 
    
  </div>
</section>

<?php get_footer(); ?>


