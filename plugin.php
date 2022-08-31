<?php
/**
 * Plugin Name: Darka Wtyczka
 * Description: Centruje górne menu w wersji mobilnej
 */

add_action( 'wp_footer', function() {
?>
<style>
	@media (max-width: 576px) {
		.maglist-top-bar-right {
			margin: auto;
		}
	}
</style>
<?php
} );
