<?php get_header(); ?>
<div id=about>
<?php
include(TEMPLATEPATH.'/banner_header.php');
?>
</div>
<div id=main role=main>
<div id=page class=content>
<div id=home>
<p>Guillem Hernandez Sola is a Quality Assurance engineer and Web performance engineer at Softonic, where Guillem spends all the time working on making the web reliable by driving adoption of performance best practices, standards, and protocols.</p>
<p>Guillem Hernandez Sola is a Quality Assurance engineer specialized in starting and building QA programs and performance testing. Guillem has testing experience with a wide variety of projects and environments. Guillem has been a coordinator and a leader in testing processes, test strategies and plans, bug documentation and regression, and bug tracking development.</p>
<h3 style=padding-top:0.75em>Recent Posts <a href="/archives" class=more>view all posts</a></h3>
<ul class=posts>
<?php
global $post;
$args = array( 'numberposts' => 20 );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); 
?>
<li class=clearfix>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<time datetime="<?php echo get_the_date('Y-M-j');  ?>" pubdate=pubdate><?php echo get_the_date('j M Y');  ?></time>
</li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div>

<?php get_footer(); ?>
