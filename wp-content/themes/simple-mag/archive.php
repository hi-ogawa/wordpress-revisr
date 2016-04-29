<?php get_header(); ?>

	<div id="main">

		<?php is_tag(); ?>
			<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

					<?php /* If this is a category archive */ if (is_category()) { ?>

						<div class="page-title"><?php _e( 'Posts Under', 'simple_mag' ); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e( 'Category', 'simple_mag' ); ?></div>

					<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>

						<div class="page-title"><?php _e( 'Posts Tagged', 'simple_mag' ); ?> &#8216;<?php single_tag_title(); ?>&#8217;</div>

					<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						
						<div class="page-title"><?php printf( __( 'Daily Archives : <span>%s</span>', 'simple_mag'), get_the_date() ); ?></div>
					
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					
						<div class="page-title"><?php printf( __( 'Monthly Archives : <span>%s</span>', 'simple_mag'), get_the_date( 'F Y' ) ); ?></div>

					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						
						<div class="page-title"><?php printf( __( 'Monthly Archives : <span>%s</span>', 'simple_mag'), get_the_date( 'Y' ) ); ?></div>
					
					<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						
						<div class="page-title"><?php _e( 'Author Archive', 'simple_mag' ); ?></div>
					
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					
					<div class="page-title"><?php _e( 'Blog Archives', 'simple_mag' ); ?></div>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<div class="post-thumb">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('post-thumbnails', array('title' => '')); ?>
						</a>
					<?php endif; ?>
				</div>

				<div class="post-entry">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<div class="post-meta">
						<a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')); ?></a> <?php _e( 'by', 'simple_mag' ); ?> <?php the_author() ?> | <?php _e( 'Filed in', 'simple_mag' ); ?> <?php the_category(', ') ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
					</div>

					<div class="entry">
						<?php the_excerpt(''); ?>
					</div>
				</div>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="a-left"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="a-right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<div class="clear"></div>
		</div>

	<?php else : ?>

		<div class="page-title"><?php _e( 'Not Found', 'simple_mag' ); ?></div>

		 <?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<div class="clear"></div>

<?php get_footer(); ?>