 <?php $themedirectory = get_template_directory_uri();
$id = get_current_user_id( ); 
 ?> 
<div class="container page-content">
	
	<div class="row">
		<div class="col-md-3 text-center">
			<img class="icon-xxl margin-bottom" src="<?php echo $themedirectory ?>/img/icons/icon-sales.svg" />
			<h3>Recent Sales</h3>
		</div>
		<div class="col-md-9">
			<?php echo getpurchases($id,'4'); ?>
		</div>
	</div>
	<div class="divider margin-bottom-bigger"></div>
	<div class="row">
		<div class="col-md-3 text-center">
			<img class="icon-xxl margin-bottom" src="<?php echo $themedirectory ?>/img/icons/icon-comment.svg" />
			<h3>Latest Reviews</h3>
		</div>
	  <div class="col-md-9">
		<div class="comment-list">
		  <?php echo getUserAllReviews($id); ?>
		</div>
	  </div>
	</div>
</div>

<!--
<div id="fes-vendor-dashboard" style="display: none;">
	<div id="fes-vendor-announcements">
		<?php // echo apply_filters( 'fes_dashboard_content', do_shortcode( EDD_FES()->helper->get_option( 'fes-dashboard-notification', '' ) ) ); ?>
	</div>

	<div id="fes-vendor-store-link">
		<?php // echo EDD_FES()->vendors->get_vendor_store_url_dashboard(); ?>
	</div>

	<div class="fes-comments-wrap">
		<table id="fes-comments-table">
			<tr>
				<th class="col-author"><?php //  _e( 'Author', 'edd_fes' ); ?></th>
				<th class="col-content"><?php //  _e( 'Comment', 'edd_fes' ); ?></th>
			</tr>
			<?php // echo EDD_FES()->dashboard->render_comments_table( 10 ); ?>
		</table>
	</div>
</div>
-->