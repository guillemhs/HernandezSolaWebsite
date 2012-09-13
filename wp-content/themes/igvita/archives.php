<?php get_header(); ?>
<?php
$currentyear = date("Y");
$years = range($currentyear, 2007);
foreach($years as $year) { ?>
<div id=main role=main>
<div id=page class=content>
<div id=home>
<h1>Archives</h1>
<h2><?php echo $year; ?></h2>
<ul class=posts>
<li class=clearfix><?php wp_get_archives('type=monthly&year='.$year); ?></li>
</ul>
</div>
</div>
</div>
<?php } ?>
<?php get_footer(); ?>
