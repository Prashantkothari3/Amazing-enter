<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<p class="meta">Posted on <span class="date">
			<?php the_time('F jS, Y') ?>
			</span> by
			<?php the_author() ?>
			&nbsp;|&nbsp;
			<?php edit_post_link('Edit', '', ' &nbsp;|&nbsp; '); ?>
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</p>
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
			</a></h2>
		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
		<div><a href="<?php the_permalink() ?>" class="links">Read More</a></div>
	</div>
	<?php endwhile; ?>
	<div class="navigation">
		<div class="alignleft">
			<?php next_posts_link('&laquo; Older Entries') ?>
		</div>
		<div class="alignright">
			<?php previous_posts_link('Newer Entries &raquo;') ?>
		</div>
	</div>
	<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
