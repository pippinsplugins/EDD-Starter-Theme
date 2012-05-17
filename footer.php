<div class="container" id="footer">
	
	<div class="row" id="footer-widgets">
	
		<div class="threecol">
			<?php if(is_active_sidebar('footer_one')) { dynamic_sidebar('footer_one'); } ?>
		</div><!--end .threecol-->
		
		<div class="threecol">
			<?php if(is_active_sidebar('footer_two')) { dynamic_sidebar('footer_two'); } ?>
		</div><!--end .threecol-->
		
		<div class="threecol">
			<?php if(is_active_sidebar('footer_three')) { dynamic_sidebar('footer_three'); } ?>
		</div><!--end .threecol-->
		
		<div class="threecol last">
			<?php if(is_active_sidebar('footer_four')) { dynamic_sidebar('footer_four'); } ?>
		</div><!--end .threecol-->
		
	</div><!--end .row#footer-widgets-->
	
</div><!--end .container#footer-->

<div class="container" id="copyright">
	<div class="row">
		<div id="footer-nav" class="twelvecol last">
			<p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?></p>
		</div>
	</div><!--end .row-->
</div><!--end .container#copyright-->
<div><?php wp_footer(); ?></div>

</body>
</html>
