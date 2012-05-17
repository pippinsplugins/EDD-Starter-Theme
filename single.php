<?php get_header(); ?>


	<div id="main-content" class="row">	
		<div class="eightcol">		
			<div class="content">
				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
			
						<div class="entry">
			
							<h2 class="title"><?php the_title(); ?></h2>
							
							<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
							
							<?php the_content('Read the rest of this entry &raquo;'); ?>
			
							<p class="postinfo"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
						</div>
			
			
					<?php endwhile; ?>

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
