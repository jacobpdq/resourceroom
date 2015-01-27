<div class="container page-content">
	<div class="card-white double-padding">
		<?php
		if ( EDD_FES()->integrations->is_commissions_active() ) { ?>
			<div class="text-center"><h3><?php _e( 'Commissions Overview', 'edd_fes' ); ?></h3></div>
			<?php 
			if( eddc_user_has_commissions() ) {
				echo do_shortcode('[edd_commissions]'); 
			}
			else{
				echo __( 'You haven\'t made any sales yet!', 'edd_fes' );
			}
		} else {
			echo 'Error 4908';
		}
		?>
	</div>
</div>