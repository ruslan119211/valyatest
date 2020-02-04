<?php 
/*
Template Name: Внутрішня сторінка (меню зправа)
*/
	get_header();
?>
<div class="container template-right-menu">
	<div class="row">
		<div class="col-md-9 content-block">
			<h1 class="title_page text-center"><?php the_title(); ?></h1>
			<?php 
				global $more;   
				$more = 1;       
				the_content();
			?>
			<div class="row">
				<?php 
					$args = array(
				      'post_type'      => 'page',
				      'posts_per_page' => -1,
				      'post_parent'    =>  get_the_ID(),
				      'orderby'        => 'date',
				      'order'          => 'DESC',

				    );

				    $parent = new WP_Query( $args );

				    if ( $parent->have_posts() ) : ?>

				      <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				            <div class="col-md-3 services-items">
				            	<?php if(!is_page('investment-and-innovation-technologies')) {?>
				                	<div class="items-img"><?php the_post_thumbnail(); ?></div>	
				            	<?php } ?>
				                <div class="items-content">	            	
					                <h3><?php the_title(); ?></h3>
					                <?php if(!is_page('investment-and-innovation-technologies')) {?>
					                	<?php the_truncated_post(700); ?>
					                <?php } ?>
					            </div>
					            <a href="<?php the_permalink() ?>" class="button-red btn-read-more"><?php echo _e('Більше','lushchyk'); ?></a>
				            </div>
				      <?php endwhile; ?>

			    <?php endif; wp_reset_query(); ?>	
			</div>
		</div>
		<div class="col-md-3 right-side-bar">
			<h2 class="title-side-bar"><?php echo _e('До Вашої уваги','lushchyk'); ?></h2>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-3',
					'menu_id'        => 'right-menu',
				) );
			?>
			<h2 class="title-side-bar"><?php echo _e('Останні публікації','lushchyk'); ?></h2>
			<div class="recent-posts">
				<?php
					$args=array(
				   		'posts_per_page'	=> 2,
						'post_type' 		=> 'post',
					    'order'     		=> 'DESC'
					);
					$my_query = new wp_query($args);
					if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) {
						$my_query->the_post();
						?>
						<div class="news-item">
							<h5><?php echo the_title(); ?></h5>
							<?php the_truncated_post(100); ?>
							<a href="<?php the_permalink() ?>" class="button-red btn-read-more btn-small"><?php echo _e('Детальніше','lushchyk'); ?></a>
						</div>
					<?php } 
					}
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</div>









<?php 
	get_footer();
?>