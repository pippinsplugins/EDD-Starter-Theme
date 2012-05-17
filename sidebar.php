<div class="sidebar content">
	<ul>
		<?php 
		if(is_active_sidebar('sidebar_right')) { 
			dynamic_sidebar('sidebar_right'); 
		} else {
			echo '<li class="widget edd-cart-widget">';
				echo '<h3 class="widget_title">Shopping Cart</h3>';
				echo edd_shopping_cart();
			echo '</li>';	
		}
		?>
	</ul>
</div>

