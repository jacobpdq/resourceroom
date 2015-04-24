<?php
/*
Plugin Name:All Resources By User
Description:Show all resources by this user
*/
add_shortcode('ALLRESOURCESBYUSER','all_resources_by_this_user');
function all_resources_by_this_user()
{
	if(!isset($_GET['userid']))
	{
		?>
		<script>window.location="<?php echo site_url() ?>"</script>
		<?php
	}
	$userdata_arr =  get_userdata(  $_GET['userid'] );
	$user_data_name = $userdata_arr->data->user_login;
	global $wpdb;
	$result ='';
	$result .='<h3>All uploads by '.$user_data_name.'</h3>';
	$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
	$fields  = get_post_meta( $form_id, 'fes-form', true ); 
	$all_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$_GET['userid']."' and post_status='publish'");

	foreach($all_products as $res){
	$userdata =  get_userdata(  $res->post_author ); 
	$name = $userdata->data->user_login;
	$value = get_post_meta( $res->ID, $fields[ 'name' ], true );
	$site_url = site_url();
	$resource_thumbnail_image_ser = $value['thumbnail_image'][0];
	$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
	$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
	if(isset( $resource_thumbnail_image_data['file']))
	{
		$resource_image = $resource_thumbnail_image_data['file'];
		$img = '<img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_image .'">';
	}
	$rating = Rating($res->ID);
$resource_edd_variable_prices_ser = $value['edd_variable_prices'][0];
					$resource_edd_variable_prices_unser = unserialize($resource_edd_variable_prices_ser);
					 $amount = $resource_edd_variable_prices_unser[0]['amount'];
					if(empty($amount))
						$price = 'Free';
					else
					{
						$price = $shortprice =  edd_price(  $res->ID ,false);
					}
				 	$result .='
	<div class="item-mini">
        <div class="row margin-bottom">
            <div class="col-md-4">';
				if(isset($resource_thumbnail_image_data['file'])){
					$result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'">'.$img.'</a></div>';
					}else{
					$result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'">Images not available</a></div>';
					}
					$result .='</div>
					<div class="col-md-8">
						<div class="item-text"><a href="'.get_permalink($res->ID).'" class="item-title">'.$res->post_title.'</a>
						<div class="item-author"> <span>by </span><a href="'.$site_url.'/user-profile?user_id='.$res->post_author.'">'.$name.'</a>
					</div>
                 	<div class="rating-sm clearfix"><div class="StarRating '.$rating.'"></div></div>
					<br/>
					<div id="card-bottom"><span class="item-price">'.$price.'</span><span class="item-type">Digital Download</span>
				</div>
            </div>
       </div>
</div>';
}
return $result;
echo '</div></div>';
}
?>