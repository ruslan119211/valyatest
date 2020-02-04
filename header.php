<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header">
	<div class="container">
		<div class="row align-items-center justify-content-between header-line">
			<div id="mobile-menu" class="d-lg-none">
				<?php echo do_shortcode('[responsive_menu]'); ?>
			</div>
			<div class="col-lg-auto col-md-auto col-sm-8 col-8 site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div><!-- .site-branding -->	
			<div class="col-auto d-flex block-contact">
				<?php get_search_form(); ?>
				<?php dynamic_sidebar('wpml_lang'); ?> 	
				<div class="header-social d-flex align-items-center">
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
	<div class="header-menu">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav>
				</div>
			</div>
		</div>

	</div>
</header><!-- #masthead -->


	<div id="content" class="site-content">

<?php if(!empty(get_field('main_slider'))){ ?>
	<section class="main-slider-block">
		<div class="container">
			<div class="row">
				<div id="main-slider" class="col-md-12 col-sm-12 col-12 pr-lg-0 ">
					<?php
						if( have_rows('main_slider') ):
							while ( have_rows('main_slider') ) : the_row(); ?>
								<?php 
									$position = get_sub_field('img_position');
									
									if( $position === 'left' ){
										$classes = 'content-' . $position;
									}else if( $position === 'right' ){
										$classes = 'content-' . $position;
									}
								?>
							<div class="d-flex slide-item <?php echo $classes ?>">
								
								<div class="col-md-5 col-sm-12 col-12 d-flex align-items-center content-slider ">
									<div>
										<?php if(!empty(get_sub_field('txt_slider'))) { ?> 
											<div class="txt-slider">
											<?php the_sub_field('txt_slider','options'); ?></div>
										<?php } ?> 
										<?php if(!empty(get_sub_field('link_slider','options'))) { ?> 
											<a href="<?php the_sub_field('link_slider','options'); ?>" class="link-slider button-red"><?php echo _e('Більше','lushchyk'); ?></a>
										<?php } ?> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-12 slider-switches">
									<img class="w-100 slider-img col-md-12" src="<?php the_sub_field('image_slider'); ?>" alt="">
									<div class="btn-slider">
										<a class="prev-slide"></a>
										<a class="next-slide"></a>									
									</div>
								</div>
								
							</div>
							<?php endwhile;
						endif;
					?>
				</div>
				
			</div>
		</div>
	</section>
<?php } ?>


	<?php if (!is_home() && !is_front_page() && !is_404()) { ?>
		<div class="container">
			<div class="inner-page-breadcrumb">
				<div><?php the_breadcrumb() ?></div>
			</div>
		</div>
   <?php } ?>
