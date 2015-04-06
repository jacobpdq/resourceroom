<div class="container page-content">
	<div class="card-white double-padding">
		<div class="text-center">
			<h3>Purchase Confirmation</h3>
			<div class="divider"></div>
		</div>
<?php 
if (!isset($_GET['order_id'])){
	_e('Access Denied','edd_fes');
	return;
}

$key = edd_get_payment_key( $_GET['order_id']);

	do_action('fes_above_vendor_receipt');
	echo do_shortcode('[edd_receipt payment_key='. $key .']');
	do_action('fes_below_vendor_receipt');

?>
	</div>
</div>