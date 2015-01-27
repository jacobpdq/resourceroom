<?php 
/*
Plugin Name:newly added product
Description:show current product
*/
add_shortcode('NEWLYADDED','newlyadded');
add_shortcode('MOSTPOPULAR','mostpopfunction');
function mostpopfunction()
{
	return mostPopular();
}

function newlyadded()
{
	global $wpdb ;
	$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
	$fields  = get_post_meta( $form_id, 'fes-form', true ); 
	//$id=$id = get_the_ID();
	//$value = get_post_meta( $id, $fields[ 'name' ], true );

		$sql =$wpdb->get_results("select * from wp_posts where post_type='download' and post_status='publish' order by post_date DESC LIMIT 5");
			 $count = count($sql);
		$result ='';
		if($count!=0)
		{
			foreach($sql as $res)
			{	
				

				$value = get_post_meta( $res->ID, $fields[ 'name' ], true );
				$resource_thumbnail_image_ser = $value['resource_thumbnail_image:'][0];
				
				$resource_thumbnail_image_unser = unserialize($resource_thumbnail_image_ser);
				
				$resource_thumbnail_image_data = get_post_meta( $resource_thumbnail_image_unser[0],'_wp_attachment_metadata', true );
				
				$resource_thumbnail = $resource_thumbnail_image_data['file'];
			
				$site_url = site_url();
				
				$download = get_post($res->ID);
				$user=$download->post_author;
				$users_info=get_userdata($user);
				$display_name=$users_info->user_login;
				 $firstname_arr= get_user_meta($user, 'first_name');
				 $firstname = $firstname_arr[0];
				 $lastname_arr= get_user_meta($user, 'last_name');
				 $lastname = $lastname_arr[0];
				 $fullname = $firstname.' '.$lastname;
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $res->ID ), 'single-post-thumbnail' );
				$explode = explode('/wp-content/',$image[0]);
				$sizex = '241';
				$sizey = '160';
				$url = $explode[0].'/thumb.php?file=wp-content/'.$explode[1].'&sizex='.$sizex.'&sizey='.$sizey.'';
					$resource_edd_variable_prices_ser = $value['edd_variable_prices'][0];
					$resource_edd_variable_prices_unser = unserialize($resource_edd_variable_prices_ser);
					 $amount = $resource_edd_variable_prices_unser[0]['amount'];
					if(empty($amount))
						$price = 'Free';
					else
					{
						$price = $shortprice =  edd_price(  $res->ID ,false);
					}
				 
				$rating = Rating($res->ID);
				
				$result .='
				<div class="col-md-1-5">
					<div class="item-square">';
					if($url){
					  $result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'"><img src="'.$site_url.'/thumb.php?file=wp-content/uploads/'.$resource_thumbnail.'&sizex='.$sizex.'&sizey='.$sizey.'"></a></div>';}
					  else{
					  $result .='<div class="item-thumbnail"><a href="'.get_permalink($res->ID).'"><img src="'.get_template_directory_uri().'/img/placeholders/bird.jpg" width="" height="" alt="" class="img-responsive"></a></div>';
					  }
					  $result .='<div class="item-text"><a href="'.get_permalink($res->ID).'" class="item-title">'.$res->post_title.'</a>
						<div class="item-author"> <span>by </span><a href="'.$site_url.'/user-profile?user_id='.$user.'">'.$fullname.'</a></div>
						<div class="rating-sm clearfix"><div class="StarRating '.$rating.'"></div></div>
					  </div>
					  <div id="card-bottom"><span class="item-price">'.$price.'</span><span class="item-type">Digital Download</span></div>
					</div>
				</div>
				';
			}
		return $result;
		}
		else
		{
			$result = '&nbsp;&nbsp;&nbsp;There are no product to show here';
			return $result;
		}
		
}

?>