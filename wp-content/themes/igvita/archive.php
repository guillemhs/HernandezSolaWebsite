<?php get_header(); ?>
<div id=main role=main>
<div id=page class=content>
<div id=home>

<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	
			<?php /* If this is a category archive */ if (is_category()) { ?>				
			<h1>Entries Tagged '<?php echo single_cat_title(); ?>' &darr;</h1>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h1>Entries from <?php the_time('F Y'); ?> &darr;</h1>

			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<p class="post_date"><?php the_time('F jS, Y') ?> &#8212; <?php the_category(', ') ?></p>
			<div class="entry">
				<?php the_content("Continue reading &rarr;"); ?>
			</div>
					
			<?php endwhile; ?>
<?php endif; ?>

</div>
</div>
</div>
<?php get_footer(); ?>
