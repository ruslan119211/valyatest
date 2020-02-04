<?php 
/*
Template Name: Батьківська сторінка
*/
	get_header();
?>


<div class="container">
	<div class="row">
		<div class="col-12">
			<h1 class="title_page text-center"><?php the_title(); ?></h1>
			<?php 
				global $more;   
				$more = 1;       
				the_content();
			?>
			<div class="block-top auto-height">
				<div class="row">
					<?php 
					$args = array(
				      'post_type'      => 'page',
				      'posts_per_page' => 4,
				      'post_parent'    =>  get_the_ID(),
				      'orderby'        => 'date',
				      'order'          => 'ASC',
				    );

				    $parent = new WP_Query( $args );

				    if ( $parent->have_posts() ) : ?>

				      <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				            <div class="col-3 services-items">
				                <div class="items-img"><?php the_post_thumbnail(); ?></div>	
				                <div class="items-content">	            	
					                <h3><?php the_title(); ?></h3>
					                <?php the_truncated_post(700); ?>
					            </div>
					            <a href="<?php the_permalink() ?>" class="button-red btn-read-more"><?php echo _e('Більше','lushchyk'); ?></a>
				            </div>
				      <?php endwhile; ?>

				    <?php endif; wp_reset_query(); ?>
				</div>
			</div>
			<div class="block-bottom auto-height">
				<div class="row">
					<?php 
					$args = array(
				      'post_type'      => 'page',
				      'posts_per_page' => 3,
				      'post_parent'    =>  get_the_ID(),
				      'orderby'        => 'date',
				      'order'          => 'ASC',
				      'offset'         => 4,

				    );

				    $parent = new WP_Query( $args );

				    if ( $parent->have_posts() ) : ?>

				      <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				            <div class="col-md-4 services-items">
				                <div class="items-img"><?php the_post_thumbnail(); ?></div>	
				                <div class="items-content">	            	
					                <h3><?php the_title(); ?></h3>
					                <?php the_truncated_post(700); ?>
					            </div>
					            <a href="<?php the_permalink() ?>" class="button-red btn-read-more"><?php echo _e('Більше','lushchyk'); ?></a>
				            </div>
				      <?php endwhile; ?>

				    <?php endif; wp_reset_query(); ?>
				</div>
			</div>


			
		</div>
	</div>
</div>












<?php 
	get_footer();
?>