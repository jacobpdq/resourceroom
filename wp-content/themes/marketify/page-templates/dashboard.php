<?php
/**
 * Template Name: User dashboard
 *
 * @package Marketify
 */

get_header(); ?>
	
	<div class="fluid-container dashboard-page-heading">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="nomargin">Username's Homeroom</h2>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <div class="dashboard-snapshot-card">
                    <h3 class="nomargin">1,240</h3><a href="">Total Sales</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="dashboard-snapshot-card">
                    <h3 class="nomargin">31</h3><a href="my-uploads.html">Items for Sale</a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="dashboard-snapshot-card">
                    <h3 class="rating-lg nomargin"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-star-yellow.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-star-yellow.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-star-yellow.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-star-half.svg"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-star-gray.svg"></h3><a href="">Average Item Rating</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fluid-container dashboard-nav">
        <div class="container"><a href="dashboard.html" class="dashboard-nav-link active">Overview</a><a href="my-uploads.html" class="dashboard-nav-link">My Uploads</a><a href="sales-log.html" class="dashboard-nav-link">Sales Log</a><a href="reviews.html" class="dashboard-nav-link">Reviews & Ratings</a><a href="notifications.html" class="dashboard-nav-link">Notifications</a><a href="payroll.html" class="dashboard-nav-link">Payroll</a><a href="<?php echo site_url(); ?>/upload-resource" class="btn btn-green margin-left">+ Upload New Resource</a></div>
      </div>
      <div class="container page-content">
        <div class="row">
          <div class="col-md-3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-bell.svg" class="icon-xxl margin-bottom">
            <h3>Notifications</h3><a href="notifications.html" class="btn btn-muted">See All</a>
          </div>
          <div class="col-md-9">
            <ul class="list-group">
              <li class="list-group-item"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-plus-circle-green.svg" class="icon-left icon-sm"><span class="margin-right">Your upload <a href="item-page.html">Resource Name</a> is now live!</span><small class="text-muted"><em>— 3 hours ago</em></small></li>
			  </ul>
          </div>
        </div>
        <div class="divider margin-bottom-bigger"></div>
        <div class="row">
          <div class="col-md-3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-sales.svg" class="icon-xxl margin-bottom">
            <h3>Recent Sales</h3><a href="sales-log.html" class="btn btn-muted">See All</a>
          </div>
          <div class="col-md-9 ">
		   <div class="table ">
              <div class="row table-row table-header">
			  
            <?php echo do_shortcode('[purchase_history numbers="4"]'); ?>
			
			</div>
			</div>
          </div>
        </div>
        <div class="divider margin-bottom-bigger"></div>
        <div class="row">
          <div class="col-md-3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-comment.svg" class="icon-xxl margin-bottom">
            <h3>Latest Reviews</h3><a href="reviews.html" class="btn btn-muted">See All</a>
          </div>
          <div class="col-md-9">
             <div class="comment-list">
              <div class="card-white comment">
                <div class="row">
				
				</div>
				</div>
				</div>
          </div>
        </div>
      </div>		
	
			   
	
<?php get_footer(); ?>