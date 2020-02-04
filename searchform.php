<div class="d-flex search-form">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
		<input type="text" value="<?php echo get_search_query() ?>" placeholder="<?php echo _e('Пошук...','fertility-ukraine'); ?>" name="s" id="s" />
		<button type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</form>
</div>