<?php
/*
Plugin Name:more Product
Description:Show all product related a particular user
*/

/* function count_user_posts_by_type( $userid, $post_type = 'post' ) {
	global $wpdb;

	$where = get_posts_by_author_sql( $post_type, true, $userid );

	$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );

  	return apply_filters( 'get_usernumposts', $count, $userid );
} */

add_shortcode('MOREPRODUCT','moreproduct');

function moreproduct()
{
	$id = get_the_ID();
	global $wpdb;
	$result ='';
	$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
	$fields  = get_post_meta( $form_id, 'fes-form', true ); 
	$sql =$wpdb->get_row("select * from wp_posts where ID = '".$id."' and post_status='publish'");
	$curr_user = $sql->post_author;
	$all_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$curr_user."' and post_status='publish' limit 6");
	foreach($all_products as $res){
	$userdata =  get_userdata(  $res->post_author ); 
	$name = $userdata->data->user_login;
	$value = get_post_meta( $res->ID, $fields[ 'name' ], true );
	$site_url = site_url();
	$resource_thumbnail_image_ser = $value['resource_thumbnail_image:'][0];
	$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
	$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
	if(isset( $resource_thumbnail_image_data['file']))
	{
		$resource_image = $resource_thumbnail_image_data['file'];
		$img = '<img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_image .'&sizex=136&sizey=95">';
	}
	$rating = Rating($res->ID);
	$sizex = '214';
	$sizey = '144';
	if($value['edd_price'][0]=='0.00')
		$price = 'Free';
	else
		$price = '$'.$value['edd_price'][0];
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
					<div id="card-bottom"><span class="item-price">'.$price.'</span><span class="item-type">Digital Download</span>
				</div>
            </div>
       </div>
	</div>
</div>';
}
return $result;
}

?>