<?php
$task       = ! empty( $_GET['task'] ) ? $_GET['task'] : '';
$icon_css   = apply_filters( "fes_vendor_dashboard_menu_icon_css", "icon-white" ); //else icon-black/dark
$menu_items = EDD_FES()->dashboard->get_vendor_dashboard_menu();
$id = get_current_user_id( ); 
$userdata = get_userdata($id);
$meta =  get_user_meta($id);  
$val = unserialize($meta['metaboxhidden_download'][0]);
$username = $userdata->data->user_login;
$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
$fields  = get_post_meta( $form_id, 'fes-form', true ); 
$final_rating=0;
$all_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$id."' and post_status='publish'");
$purchase_count =$wpdb->get_row("select * from wp_edd_customers where user_id = '".$id."'");
if(!empty($purchase_count))
{
	$total_sales_count = $purchase_count->purchase_count;
}
else
	$total_sales_count = 0;
$count_products = count($all_products);
foreach($all_products as $k=>$v)
{
		$rating = Rating($v->ID);
		$rating_arr[] = explode('StarRating',$rating);
		$rating_with_hiphen = $rating_arr[$k][1];
		$explode = explode('-',$rating_with_hiphen);
		if($explode)
		{
			$implode = implode('.',$explode);
		}
		 $total +=$implode;
}
if(!empty($total))
{

$aggregate_rating =  $total/$count_products;
$final_rating = round($aggregate_rating);
}
?>
<div class="fluid-container dashboard-page-heading">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <h2 class="nomargin"><?php echo $username ?>'s Homeroom</h2>
		</div>
		<div class="col-md-6">
		  <div class="row">
			<div class="col-md-4">
			  <div class="dashboard-snapshot-card">
				<h3 class="nomargin"><?php echo $total_sales_count ?></h3><a href="">Total Sales</a>
			  </div>
			</div>
			<div class="col-md-4">
			  <div style="color:#fff" class="dashboard-snapshot-card">
			<?php 
			if(!empty($count_products)) 
			{ 
				if($count_products>1)
				{
					?>
					<h3 class="nomargin"><?php echo $count_products ?></h3><a href="<?php echo site_url() ?>/resource-by-user?userid=<?php echo $id ?>">Items for Sale</a>
					<?php
				}
				else
				{
					?>
					<h3 class="nomargin"><?php echo $count_products ?></h3><a href="<?php echo site_url() ?>/resource-by-user?userid=<?php echo $id ?>">Item for Sale</a>
					<?php
				
				}
			}
			else 
			{
			?>


				<h3 class="nomargin">0</h3><a href="">Item for Sale</a>


			<?php
			}
			?>
			  </div>
			</div>
			<div class="col-md-4">
			  <div class="dashboard-snapshot-card" style="padding:23px 14px 24px;">
				<div class="StarRating StarRating<?php echo $final_rating ?>" style="display:inline-block"></div><br /><a href="">Average Item Rating</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>
<div class="fluid-container dashboard-nav">
	<div class="container">
		<?php foreach ( $menu_items as $item => $values ) : ?>
			<a href='<?php echo add_query_arg( 'task', $values["task"][0], get_permalink() ); ?>' class="dashboard-nav-link <?php if( in_array( $task, $values["task"] ) ) { echo "active"; } ?>">
				<?php echo $values["name"]; ?>
			</a>
		<?php endforeach; ?>
        <a href="/upload-resource" class="btn btn-green margin-left">+ Upload New Resource</a>
	</div>
</div>