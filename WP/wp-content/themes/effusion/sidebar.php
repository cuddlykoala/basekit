

	<?php if ( ! dynamic_sidebar( 'page' ) ): ?>


		<?php $args = array(
		    'numberposts' => 6,
		    'orderby' => 'post_date',
		    'order' => 'DESC',
		    'post_type' => 'post'
		);

		    $recent_posts = wp_get_recent_posts( $args );
		?>


			<aside>

				<h2>Recent News</h2>
				<ul class="nav nav-stacked">
				<?php
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . mysql2date('j M', $recent["post_date"]) . " - " . $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>

			</aside>

		<?php else: ?>


					<?php $args = array(
					    'numberposts' => 6,
					    'orderby' => 'post_date',
					    'order' => 'DESC',
					    'post_type' => 'post'
					);

					    $recent_posts = wp_get_recent_posts( $args );
					?>

			<aside>

				<h2>Recent News</h2>
				<ul class="nav nav-stacked">
				<?php
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . mysql2date('j M', $recent["post_date"]) . " - " . $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>

			</aside>


	<?php endif; ?>
