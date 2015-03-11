<?php
/**
 * The template for displaying item pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Marketify
 */

get_header(); ?>
    <script type="text/javascript" charset="utf-8">$(window).load(function() {
  $('.flexslider').flexslider({
    controlNav: "thumbnails"
  });
});
    </script>
	<style>
		.edd_go_to_checkout
		{
			display:none;
		}
		
	</style>

	<div class="container page-content">
		<div id="content" class="site-content row">

			<div id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>
         <div class="card-white double-padding margin-bottom text-center">
          <div class="showcase-header">
            <h2 class="item-title"><?php echo get_the_title(); ?></h2>
            <div class="item-author">
			<?php 
			global $wpdb;
			$site_url = site_url();
			$id=get_the_ID();
			$download = get_post($id);
			$post_count = $download->post_count+1;
			$wpdb->query('update wp_posts set post_count = '.$post_count.' where ID ='.$id.''); 
			$user=$download->post_author;
			$users_info=get_userdata($user);
			$user_name=$users_info->user_login;
			//echo get_the_post_thumbnail($user_id,150);
			echo getUserimage($user,'30','30')
 			?>
			
			 By <a href="<?php echo $site_url ?>/user-profile?user_id=<?php echo $user ?>"><?php echo $user_name; ?></a></div>
          </div>
        </div>
					<?php /* Start the Loop */ ?>
					 <div class="row">
					          <div class="col-md-7">
            <div class="card-white double-padding margin-bottom-bigger">
              <div class="showcase-text">
                <div class="info-list">
				<p><?php
                  $form_id = EDD_FES()->helper->get_option( 'fes-submission-form' );
				 $fields  = get_post_meta( $form_id, 'fes-form', true ); 
				
				   
				 ?></p>
				
                  <p class="info-list-item"><strong>Subject(s): </strong>

					<?php echo custom_taxonomies_terms_links($id); ?>


				  <?php $value = get_post_meta( $id, $fields[ 'name' ], true );
				 
					$res =$value['subjects(s):'];
					$impval =explode('|',$res[0]);
					
					?>
					
					</p>
				 
                  <p class="info-list-item"><strong>Topics/Strands: </strong>
				  <?php $topval =$value['topic(s)/strand(s):'];
				   $toparr =explode('| ',$topval[0]);
				  foreach($toparr as $result1){
					$top[] ='<a href="'.site_url().'/search-result/?q='.$result1.'">'.$result1.'</a>';
					}
					echo $topim = implode($top,' , ');
					?> 
				  </p>
                  <p class="info-list-item"><strong>Resource Type: </strong>
				  <?php
				  $resval =$value['resource_type:'];
				  $resarr =explode('| ',$resval[0]);
				  foreach($resarr as $result2){
				  $restype[] = ' <a href="'.site_url().'/search-result/?resource%5D%5B='.$result2.'">'.$result2.'</a>';
				  }
				  echo $restypeim = implode($restype,' , ');
				  ?>
				 </p>
                  <p class="info-list-item"><strong>Province: </strong>
				  <?php $res =$value['province:'];
				
				  ?>
				  <a href="<?php echo site_url(); ?>/search-result/?province%5B%5D=<?php echo $res[0]; ?>"><?php echo $res[0]; ?></a> </p>
                  <p class="info-list-item"><strong>Grade(s): </strong>
				  <?php 
				  $gradeval =$value['grades'];
				  $graearr =explode('| ',$gradeval[0]);
				  foreach($graearr as $result3){
					$grade[] =  '<a href="'.site_url().'/search-result/?grades%5B%5D='.$result3.'">'.$result3.'</a>' ;
				  }
				  echo $gradeim = implode($grade,' , ');
				  ?></p>
                  <p class="info-list-item"><strong>Technology Required: </strong>
				  <?php $techval =$value['technology_required:'];
				 $techarr =explode('| ',$techval[0]);
				  foreach($techarr as $result4){
					$tech[] =  '<a href="'.site_url().'/search-result/?technology%5B%5D='.$result4.'">'.$result4.'</a>' ;
				  }
				  echo $techim = implode($tech,' , ');
				  ?>
				  </p>
                  <!--<p class="info-list-item"><strong>Number of Pages: </strong>5</p>-->
                  <p class="info-list-item"><strong>Enduring Understanding:</strong>
				  <?php $endunderval =$value['enduring_understanding:'];
				  $endunderarr =explode('| ',$endunderval[0]);
				  foreach($endunderarr as $result5){
					$endu[] = '<a href="'.site_url().'/search-result/?enduring%5B%5D='.$result5.'">'.$result5.'</a> ';
					}
					  echo $enduim = implode($endu,' , ');
					?></p>
                  <p class="info-list-item"><strong>Cirriculum Expectations: </strong>
				  <?php 
				  $cexpectation =$value['curriculum_expectations:'][0];
				  echo $cexpectation;
				  ?></p>
                  <!--<p class="info-list-item"><strong>File Format: </strong>.pdf</p>-->
                  <p class="info-list-item"><strong>User Rating: </strong>
				  	<div class="rating-sm clearfix"><div class="StarRating <?php echo Rating($id) ?>"></div><div style="float:left">based on <?php echo NoReviews($id) ?></div></div>
				  <em></em></p>
                </div>
				
                <div class="divider divider-lg"></div>
                <div class="showcase-item-full-description">
                 <p><?php  //get_template_part( 'content', 'page' ); 
				 echo $value['full_description'][0];
				 ?></p>
                </div>
				
                <div class="divider"></div>
                <div class="text-right"><a href="#" class="showcase-report-link">Report</a></div>
				
				
                <!--<div class="text-right"><a href="" class="showcase-report-link">Report</a></div>-->
              </div>
            </div>
            <h3>Reviews:</h3>
            <div class="comment-section ItemCommentBox">
              <div class="comment-list">
                <div class="comment">
				
				<?php
				/* $comments = get_comments();
				 echo "<pre>";
				print_r($comments);
				echo "</pre>";   
				//echo $comments['comment_ID'][0];
				foreach($comments as $comment)
				{
				$id= $comment->comment_ID;
				
		       echo "hello".$id; 
		        }*/
				?>
				
				<?php
							// If comments are open or we have at least one comment, load up the comment template
							 if ( comments_open() || '0' != get_comments_number() )
								comments_template(); 
						?>
                  
                  
                </div>
                
                
              </div>
            </div>
			<!--<a href="" class="btn btn-block btn-muted">Load More</a>-->
          </div>
		   <div class="col-md-5">
				
                 <?php 
					$sizex = '441';
					$sizey = '260';
					$site_url = site_url();
					$value = get_post_meta( $post->ID, $fields[ 'name' ], true );
					$resource_preview_images_ser = $value['resource_preview_images:'][0];
					$resource_edd_variable_prices_ser = $value['edd_variable_prices'][0];
					$resource_edd_variable_prices_unser = unserialize($resource_edd_variable_prices_ser);
					$resource_preview_images_unser = unserialize($resource_preview_images_ser);
					$count_preview_images = count(	$resource_preview_images_unser);
					
						 $amount = $resource_edd_variable_prices_unser[0]['amount'];
					
					//$resource_edd_variable_prices_data = get_post_meta( $resource_edd_variable_prices_unser[0],'_wp_attachment_metadata', true );
					 $resource_preview_images =  $resource_preview_images_data['file'];
					
					?>
					
					<div class="card-white">
              <div class="flexslider">
                <ul class="slides">
				<?php
					for($i=0;$i<$count_preview_images;$i++)
					{
						$resource_preview_images_data = get_post_meta( $resource_preview_images_unser[$i],'_wp_attachment_metadata', true );
						 $resource_preview_images =  $resource_preview_images_data['file'];
						?>
						  <li data-thumb="<?php echo $site_url ?>/thumb.php?file=wp-content/uploads/<?php echo $resource_preview_images ?>&sizex=100&sizey=100"><img src="<?php echo $site_url ?>/thumb.php?file=wp-content/uploads/<?php echo $resource_preview_images ?>&sizex=<?php echo $sizex ?>&sizey=<?php echo $sizey ?>"></li>
						<?php
					}
					
					
?>
				</ul>
              </div>
            </div>
			<?php 
			$price_get = do_shortcode('[edd_price]');
			if(empty($amount))
				$price = 'Free';
			else
			{
				$price = do_shortcode('[edd_price]');
			}
			?>
<div class="showcase-action-box">
              <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                  <div class="item-price">
                    <p class="price-number"><?php  echo $price ;
					/* if(!$value['edd_price'][0])
					echo  $value['resource_price:'][0].'$';
					else
					echo do_shortcode('[edd_price]'); */
					//for frontend price
					//echo $value['price'][0];
					?></p>
                    <p class="price-info">Digital download</p>
                  </div>
                  <div class="purchase-link"><?php echo do_shortcode('[purchase_link text="Add to Cart" class="btn btn-primary" style="plain"]') ;?></div>
                </div>
              </div>
            </div>
            <div class="showcase-sharing-box card-white">
              <p class="small">Share this resource:</p>
              <div class="sharing-links"><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-facebook.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-twitter.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-pinterest.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-linkedin.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-google.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-email.svg"></a></div>
            </div>
            <div class="divider"></div>
            <div class="card-white">
              <h4 class="text-center">More by <?php echo $user_name; ?></h4>
              <div class="divider"></div>
			  
				<?php echo do_shortcode('[MOREPRODUCT]');?>
				
				<div class="divider"></div>
				<div class="text-center"><a href="<?php echo $site_url ?>/resource-by-user?userid=<?php echo $user ?>">See All Resources by <?php echo $user_name  ?></a></div> 
             </div>
            </div>
          </div>
		  </div>
						
				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div>
	</div>
	
<?php get_footer(); ?>