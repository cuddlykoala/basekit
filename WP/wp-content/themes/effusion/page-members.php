<?php
/*
  Template Name: Members Template

  Dynamically insert a row after every 4 portfolio pieces, for col-xs-3
  <?php $portfolio_count = $the_query->current_post + 1; ?>
  <?php if ( $portfolio_count % 4 == 0): ?>

  </div><div class="row">
  <php endif; ?>

*/
?>
<?php get_header(); ?>


<?php
//page id
$page_object = get_queried_object();
$page_id = get_queried_object_id();

  if (has_post_thumbnail($page_id) ):
    $image = wp_get_attachment_image_src( get_post_thumbnail_id($page_id), 'single-post-thumbnail' );
   endif;
   
   $image_URI = $image[0];
  
?>
<header>
  <div class="header-img">
    <img class="img-responsive" src="<?php echo $image_URI; ?>">

  </div>
</header>
<section class="main">
      <div class="container">
        <div class="row">
          <div class="title col-md-12">
            <h1>Meet the Group</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">

            <article>

              <?php 
                $args = array(
                      'post_type' => 'member'
                  );

                $the_query = new WP_Query( $args ); 
              ?>
   				
            <!-- "_/components/php/members-lg.php"; -->

                    
                <div class="container-fluid members">
                  <div class="row">
                    <?php 
                      if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <?php
                        $member_count = $the_query->current_post +1;
                     ?>
                     <div class="col-md-4 col-sm-6 col-xs-8">
                        <!-- Make a box. 
                        it takes in an image, on the left. Name and singer type
                        read more
                        bio goes here -->

                        <div class="profile row" data-target="#member_carousel" data-slide-to="<?php echo ($member_count - 1); ?>">                 
                            <a data-toggle="modal" class="member-modal" data-target=".bs-example-modal-lg" 
                              data-ref="<?php echo ($member_count - 1); ?>">
                                 <div class="profile-header">
                                    <div class="profile-image">
                                       <img class="img-square" src="<?php the_field('member_photo'); ?>">
                                    </div>
                                    <div class="profile-desc">
                                       <h4><?php the_field('member_name'); ?></h4>
                                       <h5><?php the_field('voice_type'); ?> - <?php the_field('years_in_effusion'); ?></h5>
                                    </div>
                                 </div>
                              </a>
                        </div>
                     </div>

                     


                     <?php
                       if($member_count % 3 == 0):
                     ?>

              <!--         </div>
                      <div class="row sm-none xs-none">
 -->
                    <?php endif; ?>

                   <?php endwhile; endif; ?>
                    </div>
                  </div>

            </article>

          </div>

          <div class="col-md-3 col-md-offset-0">
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>
    </section>


<?php rewind_posts(); ?>

<section class="presenter">


<div class="container text-center">
  
<div id="member_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="member_carousel" class="carousel slide">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

<?php 
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<?php
  $slide_count = $the_query->current_post;
?>

<?php 
  $image_id = get_post_thumbnail_id();
  $image_src = wp_get_attachment_image_src( $image_id, 'thumbnail-size', true );
  $image_url = $image_src[0];
?>

    <div class="item <?php if($slide_count == 0): ?>active<?php endif; ?>" id="member_<?php echo $slide_count; ?>">
      <div class="item-left">
        <div class="crop">
          <img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
        </div>
        <h2><?php the_field('member_name'); ?></h2>
        <h3><?php the_field('voice_type'); ?></h3>
        <h3><?php the_field('role_title'); ?> | <?php the_field('years_in_effusion'); ?></h3>
      </div>
      <div class="carousel-caption">
        
      <?php the_content(); ?>

      </div>
    </div>
    
<?php
  endwhile; endif;
?>


  </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#member_carousel" role="button" data-slide="prev">
              <p class="h1">
                &lt;
              </p>
            </a>
            <a class="right carousel-control" href="#member_carousel" role="button" data-slide="next">
              <p class="h1">
                &gt;
              </p>
            </a>
          </div>
              </div>
            </div>
          </div>
      </div>

    </section>

<?php get_footer(); ?>