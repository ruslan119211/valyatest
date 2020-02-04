	</div><!-- #content -->
		<div class="you-tube_section">
			<div class="container">
				<div id="youTube_slider">
					<?php
			if( have_rows('youtube-channels','options') ):
				while ( have_rows('youtube-channels','options') ) : the_row(); ?>
	
								<div class="youTube_item">
									<div class="image_container">
										<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.jpg" alt="yotube">
									</div>	
									<div class="content">
										<span><?php the_sub_field('name_channels'); ?></span>
										<a href="<?php the_sub_field('link_channels'); ?>" target="_blank">
											<?php the_sub_field('link_title_youtube'); ?>
										</a>	
									</div>
								</div>

					<?php endwhile;
	
			endif;
		?>
				</div>
			</div>
		</div>
	<footer id="footer" class="site-footer">
		<div class="site-info">
			<div class="container">	
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-7 col-8 adress-footer">
						<span><?php echo _e('Адреса','lushchyk'); ?></span>
						<p><?php echo get_field('adress','option'); ?></p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-12 form-block-footer">
						<a href="#!" class="button-red btn-read-more ml-auto" data-toggle="modal" data-target="#footerModal">
						  <?php echo _e('Надіслати e-mail','lushchyk'); ?>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-5 col-4 social-footer">
						<?php if(!empty(get_field('facebook','options'))) { ?>
							<a href="<?php echo get_field('facebook','options'); ?>" class="facebook social"></a>
						<?php } ?>
						<?php if(!empty(get_field('linkedin','options'))) { ?>
							<a href="<?php echo get_field('linkedin','options'); ?>" class="linkedin social"></a>
						<?php } ?>
						<?php if(!empty(get_field('youtube','options'))) { ?>
							<a href="<?php echo get_field('youtube','options'); ?>" class="youtube social"></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">	
	            <div class="copyright-block">
	            	<span><?php echo _e('Персональний сайт Уляни Лущик  ', 'lushchyk'); ?> &copy; 2013 - <?php echo date('Y');?></span>
		            <div class="pl-lg-0 develop ">
		                <a href="https://webstudio-friendly.ua/" class="d-flex align-items-center" target="__blank"><? _e('Розробка сайту', 'lushchyk') ?> <img src="<?php echo get_template_directory_uri(); ?>/img/wf.png" alt="Web Studio Friendly"></a>    
		            </div>
	           </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php  get_template_part('template-parts/modal-footer');?>
<?php wp_footer(); ?>

</body>
</html>
