<div class="container page-content">
	<div class="card-white double-padding">
		<?php
		if ( EDD_FES()->integrations->is_commissions_active() ) { ?>
			<div class="text-center"><h3><img class="icon icon-left icon-xl" src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-sales.svg"><?php _e( 'Commissions Overview', 'edd_fes' ); ?></h3></div>
            <div class="divider"></div>
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