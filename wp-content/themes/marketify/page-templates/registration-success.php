<?php
/*
Template Name:Registration Success
Description:show on successful registration
*/

get_header(); ?>

	<div class="container page-content">
      <div id="content" class="site-content row">
        <div class="col-md-6 col-md-offset-3">
		  <div id="primary" class="card-white double-padding">
            <main id="main" class="site-main" role="main">
              <div class="margin-bottom-bigger text-center">
                <h3>Welcome, <?php $user_ID = get_current_user_id(); $dat=get_userdata( $user_ID ); echo $dat->user_login; ?>!</h3>
                <p>You're all ready to go! We'll send you an e-mail confirmation shortly.</p>
              </div>
              <p class="text-big"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-user.svg" width="" height="" alt="" class="icon icon-lg icon-left">Complete your public profile</a></p>
              <p class="text-big"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-upload.svg" width="" height="" alt="" class="icon icon-lg icon-left">Upload your first resource</a></p>
              <p class="text-big"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-browse.svg" width="" height="" alt="" class="icon icon-lg icon-left">Browse Resources</a></p>
            </main>
          </div>
        </div>
      </div>
    </div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>