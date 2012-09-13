<?php get_header(); ?>
<div id=main role=main>
<div id=home>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id=post class=content itemscope itemtype="http://schema.org/Article">
<h1 itemprop=name><?php the_title(); ?></h1><p>
<p class=byline>By <a href="/" rel=author itemprop=author><?php the_author(); ?></a> on <b itemprop=datePublished datetime="<?php echo get_the_date('Y-m-d');  ?>"><?php echo get_the_date('j F Y');  ?></b></p>
<?php the_content('<p class="serif">Read the rest of this page</p>'); ?>
<?php endwhile; endif; ?>
</div>


</div>
</div>
<?php get_footer(); ?>
