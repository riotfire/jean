<?php get_header(); ?>

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php

				$orient = 'none';

				if ( has_post_thumbnail() ) { 
					$post_thumbnail_id = get_post_thumbnail_id( $get_the_ID );
					$imgmeta = wp_get_attachment_metadata( $post_thumbnail_id );
					if ($imgmeta['width'] > $imgmeta['height']) {
						$orient = 'horizontal';
					} else {
						$orient = 'vertical';
					}
				}
			?>

			<header class="<?php echo $orient; ?>">
				<?php if ( has_post_thumbnail() ) { echo '<figure>'; the_post_thumbnail('fd-lrg'); echo '</figure>'; } ?>
				<section class="headline">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-meta"><?php reverie_entry_meta(); ?></div>
				</section>
			</header>

		<!-- Row for main content area -->
			<div class="row">
				<div class="small-12 large-8 large-offset-1 columns" id="content" role="main">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<footer>
						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
						<p class="entry-tags"><?php the_tags(); ?></p>
						<?php edit_post_link('Edit this Post'); ?>
					</footer>
				</div>
		</article>
			<div class="entry-author panel">
				<div class="row">
					<div class="large-3 columns">
						<?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
					</div>
					<div class="large-9 columns">
						<h4><?php the_author_posts_link(); ?></h4>
						<p class="cover-description"><?php the_author_meta('description'); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<?php comments_template(); ?>
		</div>
	<?php endwhile; // End the loop ?>

<! -- fixthis -->
	<script>

		vH = window.innerHeight;
		jQuery('.post header.vertical, .post header.horizontal').height(vH);


	</script
		
<?php get_footer(); ?>