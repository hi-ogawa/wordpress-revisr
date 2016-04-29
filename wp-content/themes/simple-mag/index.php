<?php get_header(); ?>

	<div id="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<div class="post-thumb">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(' ') ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('post-thumbnails', array('title' => '')); ?>
						</a>
					<?php endif; ?>
				</div>

				<div class="post-entry">
					<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					<div class="post-meta">
						<a href="<?php the_permalink() ?>"><?php the_time(get_option('date_format')); ?></a> <?php _e( 'by', 'simple_mag' ); ?> <?php the_author() ?> | <?php _e( 'Filed in', 'simple_mag' ); ?> <?php the_category(', ') ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?>
					</div>
			
					<div class="entry">
						<?php the_excerpt(''); ?>
						<?php if(strpos(get_the_content(),'more-link')) { ?>
							<span class="read-more"><a href="<?php the_permalink()?>"><?php _e( 'Continue Reading...', 'simple_mag' ); ?></a></span>
						<?php } ?>
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

		<h2 class="page-title"><?php _e( 'Not Found', 'simple_mag' ); ?></h2>
		<p><?php _e( 'Sorry, but you are looking for something that isn&rsquo;t here.', 'simple_mag' ); ?></p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>