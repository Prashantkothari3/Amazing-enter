<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive
<?php } ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/jquery.slidertron-0.1.js"></script>
<?php wp_head(); ?>
</head>
<body>
<div id="logo">
	<h1><a href="<?php echo get_option('home'); ?>/">
		<?php bloginfo('name'); ?>
		</a></h1>
	<p><em>
		<?php bloginfo('description'); ?>
		</em></p>
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="menu">
			<ul>
				<li class="first page_item<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/" class="first">Home</a></li>
				<?php wp_list_pages('title_li=' ); ?>
			</ul>
		</div>
		<div id="search">
			<form method="get" action="">
				<fieldset>
					<input type="text" name="s" id="search-text" size="15" />
				</fieldset>
			</form>
		</div>
	</div>
</div>
<hr />
<!-- start page -->
<div id="slideshow">
	<!-- start -->
	<div id="foobar">
		<div id="col1"><a href="#" class="previous">&nbsp;</a></div>
		<div id="col2">
			<div class="viewer">
				<div class="reel">
					<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/img04.jpg" width="726" height="335" alt="" /> <span>Lorem Ipsum Dolor Sit Amet.</span> </div>
					<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/img07.jpg" width="726" height="335" alt="" /> <span>Mauris vitae nisl nec metus placerat consectetuer.</span> </div>
					<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/img08.jpg" width="726" height="335" alt="" /> <span>Nam bibendum dadn nulla tortor elementum ipsum</span> </div>
				</div>
			</div>
		</div>
		<div id="col3"><a href="#" class="next">&nbsp;</a></div>
	</div>
	<script type="text/javascript">

						$('#foobar').slidertron({
							viewerSelector:			'.viewer',
							reelSelector:			'.viewer .reel',
							slidesSelector:			'.viewer .reel .slide',
							navPreviousSelector:	'.previous',
							navNextSelector:		'.next',
							navFirstSelector:		'.first',
							navLastSelector:		'.last'
						});
						
					</script>
	<!-- end -->
</div>
<div id="page">
<div id="page-bgtop">
<div id="page-bgbtm">
