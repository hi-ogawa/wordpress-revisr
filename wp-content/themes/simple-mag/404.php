<?php get_header(); ?>
	<div id="error-page">
		<div class="error-title"><?php _e( 'boom, you are lost!', 'simple_mag' ); ?></div>
		<div class="error-desc"><?php _e( 'The page you were looking for is not here. But don&rsquo;t worry, You can', 'simple_mag' ); ?>

			<ol>
				<li>
					<?php _e( 'Browse our', 'simple_mag' ); ?> <a href="<?php esc_url (home_url('/')); ?>"><?php _e( 'Home Page', 'simple_mag' ); ?></a> <?php _e( 'to read the latest posts', 'simple_mag' ); ?>
				</li>
				<li>
					<?php _e( 'Search our entire site by using the form below', 'simple_mag' ); ?>
				</li>
			</ol>
					<?php get_search_form(); ?>

		</div>
	</div>
<br /><br />
<?php get_footer(); ?>
