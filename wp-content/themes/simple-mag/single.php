<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="post-thumb">
				<?php if ( has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('post-thumbnails', array('title' => '')); ?>
				<?php endif; ?>
			</div>

			<div class="post-entry">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-meta">
					<a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')); ?></a> <?php _e( 'by', 'simple_mag' ); ?> <?php the_author() ?> | <?php _e( 'Filed in', 'simple_mag' ); ?> <?php the_category(', ') ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
				</div>

				<div class="entry">
					<?php the_content(''); ?>
					<?php wp_link_pages(array('before' => '<p class="paged"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<div class="post-tags"><?php the_tags(' ',' '); ?><div class="clear"></div></div>
				</div>
			</div>
			
			<?php comments_template(); ?>
	
		</div>

	<?php endwhile; else: ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.', 'simple_mag' ); ?></p>

	<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>
	
	<div class="clear"></div>

	<?php get_footer(); ?>