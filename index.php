<?php get_header(); ?>


	<div id="main-content" class="row">	
		<div class="eightcol">		
			<div class="content clearfix">
				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
			
						<div class="entry clearfix">
			
							<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_post_thumbnail('thumbnail'); ?>
							</a>
			
							<h2 class="title">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>
							
							<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
							<?php the_excerpt(); ?>
							
						</div><!--end .entry-->
			
			
					<?php endwhile; ?>
			
					<div class="pagination">
						<?php 
							global $wp_query;
							
							$big = 999999999; // need an unlikely integer
							
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages
							) );
						?>
					</div>
			
				<?php else : ?>
			
						<div class="entry">
							<h2 class="title">Not Found</h2>
							<p>Sorry, but you are looking for something that isn't here.</p>
							<?php get_search_form(); ?>
						</div><!--end .entry-->
			
				<?php endif; ?>
												
			</div><!--end .content-->
		</div><!--end .eightcol-->

		<div class="fourcol last">
			<?php get_sidebar(); ?>
		</div><!--end .fourcol-->		
		
	</div><!--end .row#main-content-->

<?php get_footer(); ?>
