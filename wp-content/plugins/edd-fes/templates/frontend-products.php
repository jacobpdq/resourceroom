<?php global $products; ?>
<?php $themedirectory = get_template_directory_uri(); ?> 

<div class="container page-content">
	<div class="card-white double-padding">
		<div class="text-center">
			<h3> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-upload.svg" class="icon icon-xl icon-left">My Resources</h3>
		</div>
		<div class="divider"></div>
		<?php echo EDD_FES()->dashboard->product_list_status_bar(); ?>
		<div class="row">
			<table class="table fes-table table-condensed" id="fes-product-list">
				<thead>
					<tr>
						<th><?php _e( 'Image', 'edd_fes' ); ?></th>
						<th><?php _e( 'Name', 'edd_fes' ); ?></th>
						<th><?php _e( 'Status', 'edd_fes' ); ?></th>
						<th><?php _e( 'Price', 'edd_fes' ); ?></th>
						<th><?php _e( 'Purchases', 'edd_fes' ) ?></th>
						<th><?php _e( 'Actions','edd_fes') ?></th>
						<th><?php _e( 'Date', 'edd_fes' ); ?></th>
						<?php do_action('fes-product-table-column-title'); ?>
					</tr>
				</thead>
				<tbody>
					<?php
					if (count($products) > 0 ){
					foreach ( $products as $product ) :
					$site_url = site_url();
					$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
					$fields  = get_post_meta( $form_id, 'fes-form', true ); 
					$value = get_post_meta( $product->ID, $fields[ 'name' ], true );
					
						$resource_thumbnail_image_ser = $value['resource_thumbnail_image:'][0];
						
						$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
						
						$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
					
						
					if(isset( $resource_thumbnail_image_data['file']))
					{
						$resource_image = $resource_thumbnail_image_data['file'];
						$img = '<img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_image .'&sizex=100&sizey=100">';
					}

					?>
					
						<tr>
							<td class = "fes-product-list-td"><?php echo $img ?></td>
							<td class = "fes-product-list-td"><?php echo EDD_FES()->dashboard->product_list_title($product->ID); ?></td>
							<td class = "fes-product-list-td"><?php echo EDD_FES()->dashboard->product_list_status($product->ID); ?></td>
							<td class = "fes-product-list-td"><?php echo EDD_FES()->dashboard->product_list_price($product->ID); ?></td>
							<td class = "fes-product-list-td"><?php echo EDD_FES()->dashboard->product_list_sales_esc($product->ID); ?></td>
							<td class = "fes-product-list-td"><?php EDD_FES()->dashboard->product_list_actions($product->ID); ?></td>
							<td class = "fes-product-list-td"><?php echo EDD_FES()->dashboard->product_list_date($product->ID); ?></td>
							<?php do_action('fes-product-table-column-value'); ?>
						</tr>
					<?php endforeach;
					}
					else{
						echo '<tr><td colspan="7" class = "fes-product-list-td" >'.__('No', 'edd_fes') . ' ' . EDD_FES()->vendors->get_product_constant_name( $plural = true, $uppercase = false ) . ' ' . __('found','edd_fes').'</td></tr>';
					}
					?>
				</tbody>
			</table>
		</div>
		<?php EDD_FES()->dashboard->product_list_pagination(); ?>
	</div>
</div>