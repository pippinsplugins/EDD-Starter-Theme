<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<?php get_sidebar('right'); ?>
	<?php get_sidebar('left'); ?>

	<div id="main-content" class="has-sidebar">
		<div class="entry">
			<h2 class="title">Sorry, not found</h2>
			<p>We apologize, but you're looking for something that isn't here.</p>
		</div>
	</div>

<?php get_footer(); ?>
