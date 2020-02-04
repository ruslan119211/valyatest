<?php
    get_header();
?>
<!-- business_card -->
<?php
if( !empty(get_field('business_card'))): ?>
	<section class="section business_card">
		<div class="container">
			<div class="row">
				<div class="col-12 iamge_business_card">
					<?php echo get_field('business_card'); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- screen1 -->
<?php
$screen1 = get_field('screen1_home');
if( $screen1 ): ?>
	<section class="section screen1">
		<div class="container">
			<h2 class="title_section text-center"><?php echo $screen1['screen1_title']; ?></h2>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 left-column">
					<img src="<?php echo $screen1['screen1_img']; ?>" alt="image">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 right-column">
					<?php echo $screen1['screen1_text']; ?>
					<a href="<?php echo $screen1['screen1_button'];?>" class="button-red btn-read-more" ><?php echo _e('Більше','lushchyk'); ?></a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen2 -->
<?php
$screen2 = get_field('screen2_home');
if($screen2): ?>
	<section class="section screen2">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 col-12 left-column">
					<h2 class="title_section"><?php echo $screen2['screen2_title']; ?></h2>
					<?php echo $screen2['screen2_text']; ?>
				</div>
				<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-12 right-column">
					<img src="<?php echo $screen2['screen2_img']; ?>" alt="image">
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen3 -->
<?php
$screen3 = get_field('screen3_home');
if( $screen3 ): ?>
	<section class="section screen3">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 left-column">
					<img src="<?php echo $screen3['screen3_img']; ?>" alt="image">
				</div>
				<div class="col-lg-7 col-md-6 right-column">
					<h2 class="title_section"><?php echo $screen3['screen3_title']; ?></h2>
					<?php echo $screen3['screen3_text']; ?>
					<a href="<?php echo $screen3['screen3_button'];?>" class="button-red btn-read-more"><?php echo _e('Більше','lushchyk'); ?></a>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen4 -->
<?php
$screen4 = get_field('screen4_home');
if( $screen4 ): ?>
	<section class="section screen4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen4['screen4_title']; ?></h2>
				</div>
				<div class="col-md-6 col-12 text-md-right image-left">
					<img src="<?php echo $screen4['screen4_left_img']; ?>" alt="image_left">
				</div>
				<div class="col-md-6 col-12 image-right">
					<img src="<?php echo $screen4['screen4_right_img']; ?>" alt="image_right">
				</div>
				<a href="<?php echo $screen4['screen4_pdf'];?>" target="_blank" class="button-red big-btn btn-read-more"><?php echo _e('Завантажити буклет в pdf','lushchyk'); ?></a>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen5 -->
<?php
$screen5 = get_field('screen5_home');
if( $screen5 ): ?>
	<section class="section screen5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen5['screen5_title']; ?></h2>
				</div>
						
						<div class="achievement col-12">
							<?php
						     	$achievements = $screen5['screen5_achievement'];
						     	foreach($achievements as $achievement) {
							        ?>
										<div class="row achievement_item">
											<div class="achievement_content col-md-6 col-sm-12">
												<span class="achievement_item_year"><?php echo $achievement['screen5_year']; ?></span>
												<span class="achievement_item_text"><?php echo $achievement['screen5_achievement_text']; ?></span>
											</div>
											<div class="achievement_item_content_none col-md-6 col-sm-12"></div>
										</div>

								<?php
						       	}
							?>
						</div>
				
				<img src="<?php echo $screen5['screen5_img']; ?>" class="m-auto" style="width: auto;" alt="image">
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen6 -->
<?php
$screen6 = get_field('screen6_home');
if( $screen6 ): ?>
	<section class="section screen6">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen6['screen6_title']; ?></h2>
				</div>
				<div class="col-lg-5 col-md-6 p-0">
					<div class="text-block">
						<span><?php echo $screen6['screen6_autor']; ?></span>
						<div class="quote"><?php echo $screen6['screen6_quote']; ?></div>
					</div>
				</div>
				<div class="col-lg-7 col-md-6 screen6-video">
					<iframe width="720" height="430" src="https://www.youtube.com/embed/<?php echo $screen6['screen6_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>


<!-- screen7 -->
<?php
$screen7 = get_field('screen7_home');
if( $screen7 ): ?>
	<section class="section screen7">
		<div class="container">
			
			<div class="row">
				<div class="col-12"> 
					<h2 class="title_section text-center"><?php echo $screen7['screen7_title']; ?></h2>
				</div>
				<div class="col-12 text-center video-block" >
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $screen7['screen7_video']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!-- screen8 -->
<?php
$screen8 = get_field('screen8_home');
if( $screen8 ): ?>
	<section class="section screen8">
		<div class="container">
			
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen8['screen8_title']; ?></h2>
				</div>
				<div class="col-xl-8 col-lg-7 col-md-6  screen8_image-section">
					<img src="<?php echo $screen8['screen8_img']; ?>" alt="image_left" class="d-md-block d-sm-none d-none">
					<img src="<?php echo $screen8['screen8_img_mob']; ?>" alt="image_left" class="d-md-none d-sm-block">
				</div>
				<div class="col-xl-4 col-lg-5 col-md-6 link-block">
					<?php echo $screen8['screen8_link']; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

   
<!-- screen9 -->
<?php
$screen9 = get_field('screen9_home');
if( $screen9 ): ?>
	<section class="section screen9">
		<div class="container"> 
			
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen9['screen9_title']; ?></h2>
				</div>
				<div class="scientific_articles col-12">
					<?php
				     	$scientific_articles = $screen9['screen9_scientific_articles'];
				     	foreach($scientific_articles as $scientific_article) {
					        ?>
				        	<div class="scientific_articles_item">
								<div>
									<div class="scientific_articles_img">
										<img src="<?php echo $scientific_article['scientific_articles_image']; ?>" alt="image">
									</div>
									<div class="scientific_articles_content">
										<h4><?php echo $scientific_article['scientific_articles_title']; ?></h4>
										<p><?php echo $scientific_article['scientific_articles_text']; ?></p>
									</div>
									<a href="<?php echo $scientific_article['scientific_articles_link']; ?>" class="button-red btn-read-more" target="_blank"><?php echo _e('Більше','lushchyk'); ?></a>
								</div>
							</div>
						<?php
				       	}
					?>
				</div>
				
			</div>
		</div>
	</section>
<?php endif; ?>


<!-- screen10 -->
<?php
$screen10 = get_field('screen10_home');
if( $screen10 ): ?>
	<section class="section screen10">
		<div class="container"> 
			
			<div class="row">
				<div class="col-12">
					<h2 class="title_section text-center"><?php echo $screen10['screen10_title']; ?></h2>
				</div>
				<div class="company col-12">
					<?php
				     	$companys = $screen10['screen10_company'];
				     	foreach($companys as $company) {
					        ?>
								<div class="company_item">
									<a href="<?php echo $company['screen10_company_link']; ?>" target="_blank">
										<img src="<?php echo $company['screen10_company_logo']; ?>" style="width: auto;" alt="image">
									</a>									
								</div>

						<?php
				       	}
					?>
					<?php
				     	$companys = $screen10['screen10_company'];
				     	foreach($companys as $company) {
					        ?>
								<div class="company_item">
									<a href="<?php echo $company['screen10_company_link']; ?>" target="_blank">
										<img src="<?php echo $company['screen10_company_logo']; ?>" style="width: auto;" alt="image">
									</a>									
								</div>

						<?php
				       	}
					?>
				</div>
				
			</div>
		</div>
	</section>
<?php endif; ?>


<?php
    get_footer();
?>

