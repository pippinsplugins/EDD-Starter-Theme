<?php get_header(); ?>

	<div id="main-content" class="row store-template">
		<div class="content clearfix">
			<?php
			$current_page = get_query_var('page');
			$per_page = get_option('posts_per_page');
			$offset = $current_page > 0 ? $per_page * ($current_page-1) : 0;
			$product_args = array(
				'post_type' => 'download',
				'posts_per_page' => $per_page,
				'offset' => $offset
			);
			$products = new WP_Query($product_args);
			?>
			<?php if ($products->have_posts()) : $i = 1; ?>
				<?php while ($products->have_posts()) : $products->the_post(); ?>
					<div class="threecol product<?php if($i % 4 == 0) { echo ' last'; } ?>">
						<a href="<?php the_permalink(); ?>">
							<h2 class="title"><?php the_title(); ?></h2>
						</a>
						<div class="product-image">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('product-image'); ?>
							</a>
							<?php if(function_exists('edd_price')) { ?>
								<div class="product-price">
									<?php 
										if(edd_has_variable_prices(get_the_ID())) {
											// if the download has variable prices, show the first one as a starting price
											echo 'Starting at: '; edd_price(get_the_ID());
										} else {
											edd_price(get_the_ID()); 
										}
									?>
								</div><!--end .product-price-->
							<?php } ?>
						</div>
						<?php if(function_exists('edd_price')) { ?>
							<div class="product-buttons">
								<?php if(!edd_has_variable_prices(get_the_ID())) { ?>
									<?php echo edd_get_purchase_link(get_the_ID(), 'Add to Cart', 'button'); ?>
								<?php } ?>
								<a href="<?php the_permalink(); ?>">View Details</a>
							</div><!--end .product-buttons-->
						<?php } ?>
					</div><!--end .product-->
					<?php $i+=1; ?>
				<?php endwhile; ?>
				
				<div class="pagination">
					<?php 					
						$big = 999999999; // need an unlikely intege					
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, $current_page ),
							'total' => $products->max_num_pages
						) );
					?>
				</div>
			<?php else : ?>
		
				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>
		
			<?php endif; ?>
		</div><!--end .content-->
	</div><!--end #main-content.row-->

<?php get_footer(); ?>
