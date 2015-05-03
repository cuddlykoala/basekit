<?php get_header(); ?>

<section class="main" id="members">
  <div class="container">
  <!-- Example row of columns -->
  <div class="row single-post">
    <div class="col-md-8">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
  $image_id = get_post_thumbnail_id();
  $image_src = wp_get_attachment_image_src( $image_id, 'thumbnail-size', true );
  $image_url = $image_src[0];
?>

      <div class="page-header">
        <img class="img-responsive member-img" src="<?php echo $image_url; ?>">
        <h1><?php the_title(); ?></h1>
       </div>
       <div class="credentials">
        <h2 class="h3 role"><?php the_field('role_title'); ?></h2>
        <h2 class="h3 years"><?php the_field('years_in_effusion'); ?></h2>
       </div>

      <article>
        <?php the_content(); ?>
      </article>

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


