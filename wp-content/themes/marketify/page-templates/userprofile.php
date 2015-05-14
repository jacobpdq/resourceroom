<?php
/**
 * Template Name: User Profile
 *
 * @package Marketify
 */

get_header();
 ?>

<?php $user_ID =	$_GET['user_id']; ?>
<script>	
	$(document).ready(function(){
		$('#showproduct').on('change',function(){
			var selectval = $('#showproduct').val();
			window.location = "<?php echo site_url() ?>/user-profile/?user_id=<?php echo $user_ID; ?>&show-products="+selectval;
		})
	})
</script>
	
			<div class="container page-content page-profile">
        <div class="card-white double-padding margin-bottom text-center"><span class="h2 profile-username">
		<?php  
		$user_ID =	$_GET['user_id'];
        $dat=get_userdata( $user_ID );
		$meta = get_user_meta($user_ID);
	
	
		echo $meta['nickname'][0];
		
		if(!empty($meta['bio'][0]))
			$description = $meta['bio'][0];
		else
			$description='';
		
		if(!empty($meta['city'][0]))
			$city = $meta['city'][0];
		else
			$city = '';
			
		if(!empty($meta['province'][0]))
			$provinces = $meta['province'][0];
		else
			$provinces = '';
			
			
		if(!empty($meta['levels_i_teach'][0]))
		{
			$gradeindex = $meta['levels_i_teach'][0];
			$graearr =explode('| ',$gradeindex);
				  foreach($graearr as $result3){
					$gradeim[] =  '<a href="'.site_url().'/search-result/?grades%5B%5D='.$result3.'">'.$result3.'</a>' ;
				  }
			$grade = implode($gradeim,', ');
		}
		else
			$grade = '';
			
		if(!empty($meta['years_teaching'][0]))
		{
			$teaching_count = $meta['years_teaching'][0];
			if($teaching_count>1)
				$teaching = $teaching_count.' Years';
			else
				$teaching = $teaching_count.' Year';
		}
		else
			$teaching = '';
			
		if(!empty($meta['website'][0]))
			$website = $meta['website'][0];
		else
			$website = '';
			
		if(!empty($meta['specialties'][0]))
			$specialties = $meta['specialties'][0];
		else
			$specialties = '';
			
			
			
		?>'s Room</span></div>

		
        <div class="row">
          <div class="col-md-4 col-sm-6 margin-bottom">
            <div class="profile-image"><?php echo getUserimage($user_ID) ?></div>
            <div class="card-white">
              <div class="profile-text">
                <div class="info-list margin-bottom">
				
				<?php if(empty($city) && empty($grade) && empty($teaching) && empty($specialties) && empty($website)){ ?>
					There is no data to show here 
				<?php } else { ?>
				
				<?php if(!empty($city )) { ?>
					<p class="info-list-item"><strong>Location:</strong> <?php echo $city ?>, <?php echo $provinces ?></p>
				<?php } ?>
				  
				<?php if(!empty($grade)) { ?>
                  <p class="info-list-item"><strong>Grades: </strong><span class="uppercase"><?php echo $grade ?></span></p>
				<?php } ?>
				
				 <?php if(!empty($teaching)) { ?>
                  <p class="info-list-item"><strong>Teaching Experience: </strong><?php echo $teaching ?></p>
				<?php } ?>
				 
				<?php if(!empty($specialties)) { ?>
                  <p class="info-list-item"><strong>Specialties: </strong><?php echo $specialties ?></p>
				<?php } ?>
				 
				  <?php if(!empty($website)) { ?>
                  <p class="info-list-item"><strong>Website: </strong><a href="<?php echo $website ?>"><?php echo $website ?></a></p>
				  <?php } 
				  }
				  ?>
				  
                </div>
                <div class="divider"></div>
                <div class="profile-bio">
				 <?php if(!empty($description)) {
					echo $description;
				 } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-6">
            <form class="form-inline">
              <div class="form-group">
                <select name="show-products" id="showproduct" class="form-control nomargin">
					<option
					<?php 
					if(!isset($_GET['show-products'])) { 
						echo 'selected';
					} 	?> value="most-recent">Most Recent Resources
					</option>
					<option
					<?php
					if($_GET['show-products']=='most-popular') {
					echo 'selected';
					}	?> value="most-popular">Most Popular Resources
					</option>
                </select>
				<input style="display:none" id="submit" type="submit" name="submit" value="submit">
              </div>
              <div style="display:none" class="form-group item-view-toggle"><a href=""><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-view-grid.svg" class="icon icon-sm icon-right"></a><a href=""><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-view-list.svg" class="icon icon-sm icon-right"></a></div>
            </form>
            <div class="divider"></div>
            <div class="row card-item-square-container margin-bottom-bigger">
             
				<?php 
					global $wpdb;
					$form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
					$fields  = get_post_meta( $form_id, 'fes-form', true ); 
					if(!isset($_GET['show-products'])) {
						$user_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$user_ID."' and post_status='publish' ORDER BY ID DESC ");
					}
					else
					{
						if($_GET['show-products']=='most-popular')
						{
							$user_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$user_ID."' and post_status='publish' ORDER BY post_count DESC");
						}
						else
						{
							$user_products =$wpdb->get_results("select * from wp_posts where post_type='download' and post_author = '".$user_ID."' and post_status='publish' ORDER BY ID DESC ");
						}
					}
					foreach($user_products as $res){
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
						?>

              
				
			<div class="col-md-4 ProListing">
				<div class="item-square">
					<div class="item-thumbnail">
						<?php 
							if(isset($resource_thumbnail_image_data['file'])){
							?>
							<a href="<?php echo get_permalink($res->ID) ?> "><?php echo $img ?></a>
							<?php
							}
							else
							{
							?>
							<div class="item-thumbnail"><a href="<?php echo get_permalink($res->ID) ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/default_file_pic.jpg"></a></div>
							<?php
							}
						?>
					</div>
					<div class="item-text"><a class="item-title" href="<?php echo get_permalink($res->ID) ?>"><?php echo $res->post_title ?></a>
					<div class="item-author"> <span>by </span><a href="<?php echo $site_url ?>/user-profile/?user_id=<?php echo $res->post_author ?>"><?php echo $name ?></a></div>
					<div class="rating-sm clearfix"><div class="StarRating <?php echo $rating ?>"></div></div>
				  </div>
				  <div id="card-bottom"><span class="item-price"> <?php echo $price  ?></span><span class="item-type">Digital Download</span></div>
				</div>
			</div>

			
							
						<?php
						}
						?>
          </div>
        </div>
      </div>
	</div>
			   
	
<?php get_footer(); ?>