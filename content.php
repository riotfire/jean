<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card row'); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="large-6 large-push-6 small-12 columns">
	<?php } else { ?>
		<div class="large-12 small-12 columns">
	<?php } ?>
		<header>
			<h2><a class="post-link <?php if ( has_post_thumbnail() ) { echo 'large-pull-1'; } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php reverie_entry_meta(); ?></p>
		</header>
		<section class="excerpt">
			<?php the_excerpt(); ?>
		</section>
	</div>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="large-6 large-pull-6 small-12 columns">
			<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fd-med'); ?></a></figure> 
		</div>
	<?php } ?>

</article>