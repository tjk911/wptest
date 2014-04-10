<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main" style="height:300vh;">
	<h3 class="center" id="blackfont"><?php single_term_title(); ?></h3>
	<?php if ( have_posts() ) : ?>
	
		<div id="container">
            <?php $i = 1; echo '<div class="box col4">'; while ( have_posts() ): the_post();?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('thumb-medium border'); ?>
            <?php endif; ?></a>
            <?php if($i % 1 == 0) { echo '</div><div class="box col4">'; } $i++; endwhile; echo '</div>';?>
        </div>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>