<?php 
/*
Template Name: Шаблон "Особисте"
*/
	get_header();
?>


<div class="container personal-template">
	<div class="row">
		<div class="col-3 left-side-bar">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'personal-menu',
				) );
			?>
		</div>
		<div class="col-9 content-block">
			<h1 class="title_page text-center"><?php the_title(); ?></h1>
			<?php 
				global $more;   
				$more = 1;       
				the_content();
			?>
			<?php echo do_shortcode(get_field('id_album_personal')); ?> 
		</div>
	</div>
</div>












<?php 
	get_footer();
?>