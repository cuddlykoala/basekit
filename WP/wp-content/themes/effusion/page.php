<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
          $thumbnail_id = get_post_thumbnail_id();
          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
        ?>

<header>
  <div class="header-img">
    <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>">

  </div>
</header>

    
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="title col-md-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-9">
            
            <article>
              <?php the_content(); ?>
            </article>

          </div>

              <?php endwhile; else: ?>

      <div class="page-header">
        <h1>Oh no!</h1>
      </div>

      <p>No content on this page.</p>

  <?php endif; ?>

          <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-0">
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>
    </section>

<?php get_footer(); ?>