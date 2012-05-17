<?php get_header(); ?>

	<div id="main-content" class="container">
		
		<div class="row">
		
				<?php if (have_posts()) : ?>
		
					<?php while (have_posts()) : the_post(); ?>
						
						<div class="eightcol">
							
							<div class="content">							
							
								<div class="entry product-content">
				
									<h2 class="title"><?php the_title(); ?></h2>
				
									<?php the_post_thumbnail('product-image-large'); ?>
									<?php the_content('Read the rest of this entry &raquo;'); ?>
									
								</div><!--end .product-content.entry-->
								
								<div id="commentsbox">
									<?php comments_template(); ?>
								</div><!--end #comments-->
							
							</div><!--end .content-->
						
						</div><!--end .eightcol-->
						
						<div class="fourcol last">
							<div class="product-meta content">
							
								<?php if(!edd_has_variable_prices($post->ID)) { ?>
									<h4 class="single-product-price"><?php edd_price($post->ID); ?></h4>
								<?php } ?>		
											
								<?php echo edd_get_purchase_link($post->ID, 'Add to Cart', 'button', 'blue'); ?>
								
								<div class="product-categories">
									<?php the_terms( $post->ID, 'download_category', '<span class="product-categories-title">Categories:</span> ', ', ', '' ); ?>
								</div><!--end product-categories-->
								
								<div class="product-tags">
									<?php the_terms( $post->ID, 'download_tag', '<span class="product-tags-title">Tags:</span> ', ', ', '' ); ?>
								</div><!--end .product-tags-->
								
							</div><!--end .product-meta-->
							
							<?php get_sidebar(); ?>
							
						</div><!--end .fourcol-->								
						
					<?php endwhile; ?>
		
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div><!--end .navigation-->
		
				<?php else : ?>
		
					<div class="entry product-content not-found">
	
						<h2>Not Found</h2>
						<p>Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>
						
					</div><!--end .product-content.entry-->
				
				
				<?php endif; ?>
			
		</div><!--end .row-->

	</div><!--end #main-content.container-->

<?php get_footer(); ?>
