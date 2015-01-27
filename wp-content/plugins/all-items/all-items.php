<?php 
/*
Plugin Name:all items
Description:show all product in a page
*/
add_shortcode('ALLITEMS','allitems');

function allitems()
{
	$site_url = site_url();
	
	global $wpdb ;
	$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
	$fields  = get_post_meta( $form_id, 'fes-form', true ); 
	$sql =$wpdb->get_results("select * from wp_posts where post_type='download' and post_status='publish' order by post_date DESC");
	$result ='';

	foreach($sql as $res){
	$id=$res->ID ;
	$value = get_post_meta( $id, $fields[ 'name' ], true );
	
	
	//Check if product is free
	if(!empty($value[edd_price][0]))
		$price = '$'.$value[edd_price][0];
	else
		$price = 'Free';
		
	//Getting thumbnail image
	$sizex = '214';
	$sizey = '144';
	$resource_thumbnail_image_ser = $value['resource_thumbnail_image:'][0];
	$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
	$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
	$resource_thumbnail = $resource_thumbnail_image_data['file'];
	
	//Get user name
	$download = get_post($id);
	$user=$download->post_author;
	$users_info=get_userdata($user);
	$display_name=$users_info->user_login;
	
	//Get rating
	
		
	$rating = Rating($id);
		
	$result .='
	<div class="col-md-1-5">
            <div class="item-square">';
			if($resource_thumbnail){
              $result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'"><img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_thumbnail.'&sizex='.$sizex.'&sizey='.$sizey.'"></a></div>';}
			  else{
			  $result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'"><img src="'.get_template_directory_uri().'/img/placeholders/bird.jpg" width="" height="" alt="" class="img-responsive"></a></div>';
			  }
              $result .='<div class="item-text"><a href="'.get_permalink($res->ID).'" class="item-title">'.$res->post_title.'</a>
                <div class="item-author"> <span>by </span><a href="user-page.html">'.$display_name.'</a></div>
              	<div class="rating-sm clearfix"><div class="StarRating '.$rating.'"></div></div>
              </div>
              <div id="card-bottom"><span class="item-price">'.$price.'</span><span class="item-type">Digital Download</span></div>
            </div>
          </div>
';
}
return $result;
}

?>