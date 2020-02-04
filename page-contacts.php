<?php 
	get_header();
?>


<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12 col-12 m-md-auto p-sm-0">
			<h1 class="title_page text-center"><?php the_title(); ?></h1>
			<?php 
				global $more;   
				$more = 1;       
				the_content();
			?>
			<div class="contactform-block">
				<?php echo do_shortcode('[contact-form-7 id="6" title="Контакти"]'); ?>
			</div>
		</div>
	</div>
</div>












<?php 
	get_footer();
?>