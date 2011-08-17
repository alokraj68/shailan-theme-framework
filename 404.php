<?php get_header(); ?>
<!-- PAGE START -->
<div id="page" class="clearfix">
	<div id="container">
		<div id="content" role="main">
		<article id="post-0" class="post no-results not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Nothing Found', 'stf' ); ?></h1>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'stf' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-0 -->
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>
<!--/ PAGE END -->
<?php get_footer(); ?>