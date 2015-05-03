<?php get_header(); ?>
<?php
/* 
  this is the default blog page with name home.php
*/
?>

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



    <section class="main" id="news">
      <div class="container">
        <div class="row">
          <div class="title col-md-12">
            <h1>News &amp; Events</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <?php $args = array(
                    post_type => 'post',
                    order => 'DESC' ); 
            ?>

            <?php
              $the_query = new WP_Query( $args );
            ?>       

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article>
          
               <div class="page-header">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <h3 class="postdate"><?php the_time('M d Y'); ?></h3>
               </div>
               <div class="post-content">
                <?php the_content(); ?>
               </div>
               
             </article>
            <!--  <article>
               <div class="page-header">
                 <h2>Callbacks 2014-2015</h2>
                 <h3 class="postdate">Sept 15, 2014</h3>
               </div>
               <p>This never gets easier. After nearly 190 auditions, we’ve managed to narrow the list down to 15. A huge thanks to everyone who shared their talent with us this weekend! Congratulations to the following people on being invited to Effusion’s 2014-2015 callbacks:</p>
                <b>Kirk Wright</b> <br>
                <b>Casey Rosner</b> <br>
                <b>Matthew Marano</b> <br>
                <b>Gillian Ho</b> <br>
                <b>Gabe Daitzchman</b> <br>
                <b>Noah Elkind</b> <br>
                <b>Jessica Tjipta</b> <br>
                <b>Jack Ball</b> <br>
                <b>Emily Mulhall</b> <br>
                <b>Mimi Klein</b> <br>
                <b>Sophia Lanman</b> <br>
                <b>Ashique Hossain</b> <br>
                <b>Juliana Bergen</b> <br>
                <b>Aleksi Campagne</b> <br>
                <b>Jacoba Barber-Rozema</b> <br>
                <p>Callbacks will be held tomorrow, Tuesday, September 16th beginning at 7:30pm. Please meet us in the lobby of the McGill Music Building (555 Sherbrooke) at 7:30pm sharp – It is not necessary to have anything prepared. Please be sure to e-mail info.effusion@gmail.com today to confirm that you are able to join us!
                </p>

            </article>

            <article>
              <div class="page-header">
                <h2>Auditions Info!</h2>
                <h3 class="postdate">Sept 11, 2014</h3>
              </div>
              <p>Are you auditioning for us September 12, 13, or 14? Here is some information regarding your upcoming audition.</p>
              <p>1. Show up for your audition at 3454 Aylmer Apt. 204. Please arrive 5-10 minutes 
                early.</p>
              <p>2. Bring your smile and 1 minute of a prepared song of your choice. Whatever you love, we want to hear. We may also ask you to sing some scales or do some sight-reading.</p>
              <p>3. If a conflict arises, you are running late, or if you have other questions or problems call Emily at 438-829-0084.</p>
              <p>4. Have fun with it! Good luck, and see you there. We can’t wait to meet you!
              Email us at info.effusion@gmail.com if you have not yet signed up for an audition slot.</p>
            </article> -->

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

        </div>
      </div>
    </section>

<?php get_footer(); ?>