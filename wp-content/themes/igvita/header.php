<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=no-js lang=en> <!--<![endif]-->
<head>
<meta charset=utf-8 />
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1"/>
<title><?php wp_title(''); ?></title>
<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:400,600"/>
<link rel=stylesheet href="<?php echo get_bloginfo('template_url'); ?>/css/boilerplate.css"/>
<style><? include(TEMPLATEPATH.'/css/style.css'); ?></style>
<script src="<?php echo get_bloginfo('template_url'); ?>/js/modernizr.js"></script>
<meta name=author content="Guillem Hernandez Sola"/>
<meta name=description content="Guillem Hernandez Sola is a developer advocate and web performance engineer at Google."/>
<meta property=og:image content="http://www.hernandezsola.net/images/ilya.jpg"/>
<link rel=alternate type="application/rss+xml" title="Guillem Hernandez Sola RSS Feed" href="<?php echo site_url(); ?>/feed/"/>
<link rel=canonical href="<?php echo site_url(); ?>"/>
</head>
<body>
<div id=container>
<header>
<div class=content>
<a href="/">Guillem Hernandez Sola</a><b>&nbsp;|&nbsp;</b><span>Random stupid smart quote</span>
</div>
</header>
<div id=about>
<?php
include(TEMPLATEPATH.'/banner_header.php');
?>
</div>
