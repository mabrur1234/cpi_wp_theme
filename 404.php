<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

</div>
	</div>
<!-- ending block of header div -->

		<div class="row-fluid err_content_area">
			<div class="container error_content">
				<h1>404</h1>
				<p class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'cpitest' ); ?></p>
				<p><?php _e( 'It looks like nothing was found at this location.', 'cpitest' ); ?></p>
			</div><br><br>
		</div>

<style>
.err_content_area {
  background: #50574c none repeat scroll 0 0;
}
.error_content {
  color: #90978c;
  font-size: 32px;
  line-height: 28px;
  text-align: center;
  text-shadow: 2px 3px 3px #000000;
}
.error_content h1 {
  font-size: 79px;
  text-shadow: 0 -5px 8px #030303;
}
</style>

<?php get_footer(); ?>