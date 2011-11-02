<?php 

	if( is_single() || is_page() ){ 
		$titleblock = "h1";
	} else { 
		$titleblock = "h2";
	}
	
?>

<div class="entry-header">

	<!-- Entry Title -->
	<<?php echo $titleblock; ?> class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'stf' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" <?php if( 0 ): ?> xref="post#<?php the_ID(); ?>" class="ajax"<?php endif; ?>><?php the_title(); ?></a></<?php echo $titleblock; ?>>
	<!-- [End] Entry Title -->
	
	<?php stf_entry_header_meta(); ?>

	<?php if( is_single() || is_page() || is_attachment() ) get_template_part('share', 'horizontal'); ?>
	
	
	
</div><!-- .entry-header -->
