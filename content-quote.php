<?php
/**
 * @package Serene
 * @since Serene 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="top-info"<?php echo serene_get_post_background(); ?>>
		<div class="post-content clearfix">
			<div class="entry-content clearfix">
				<?php echo serene_get_blockquote_in_content(); ?>
		<?php if ( ! is_single() ) : ?>
				<p><cite><?php echo the_title();  ?></cite></p>
		<?php endif; ?>
			</div>
		</div> <!-- .post-content -->



		<?php if ( ! is_single() ) : ?>
		<a href="<?php the_permalink(); ?>" class="et-quote-more-link"><?php esc_html_e( 'Read More', 'Serene' ); ?></a>
		<?php endif; ?>
	</div> <!-- .top-info -->

	<?php if ( is_single() ) : ?>

	<div class="bottom-info">
		<div class="post-content"<?php serene_blockquote_color(); ?>>
			



			<div class="entry-content clearfix">
			<?php
				the_content();
			?>
				<p><cite><?php echo the_title();  ?></cite></p>

			<?php
				wp_link_pages( array(
					'before'         => '<p><strong>' . esc_attr__( 'Pages', 'Serene' ) . ':</strong> ',
					'after'          => '</p>',
					'next_or_number' => 'number',
				) );

				the_tags( '<ul class="et-tags clearfix"><li>', '</li><li>', '</li></ul>' );

				edit_post_link( esc_attr__( 'Edit this post', 'Serene' ) );
			?>
			</div>
		</div> <!-- .post-content -->
	</div> <!-- .bottom-info -->

	<?php endif; ?>
</article>