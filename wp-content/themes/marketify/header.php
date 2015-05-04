<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Marketify
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/icheck.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.fs.selecter.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.2/select2-bootstrap.min.css" />
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
  <div id="wrap">
	  
      <nav role="navigation" class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="<?php echo site_url(); ?>" class="navbar-brand">Resource Room</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo site_url();?>/browse" class="nav-link">Browse Resources</a></li>
			   <li>
                <form role="search" class="navbar-form search-bar" action="<?php echo site_url();?>/search-result">
                  <div class="input-group">
                    <input type="text" placeholder="Search" name="q" class="form-control" value="<?php echo $_GET['q'] ;?>">
                    <div class="input-group-btn">
                      <button type="submit" class="search-button"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-search-small.svg" class="icon-sm"></button>
                    </div>
                  </div>
                </form>
              </li>
             
              <li><a href="<?php echo site_url();?>/advanced-search" class="nav-link">Advanced Search</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
			  
			 <?php if ( is_user_logged_in() ) {?>
			  
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle user-dropdown">
                <span class="navbar-profile-pic">
                  <?php
              $user_ID = get_current_user_id(); ?>
			 <?php echo getUserimage($user_ID,'30','30')?>
                </span>
                <span class="user-dropdown-username">
			  <?php
				$dat=get_userdata( $user_ID );
				echo $dat->user_login;
			?><span class="caret"></span></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="<?php echo site_url()?>/user-profile?user_id=<?php echo get_current_user_id(); ?>">View My Profile</a></li>
                  <li><a href="<?php echo site_url()?>/edit-profile">Edit My Profile</a></li>
                  <li><a href="<?php echo site_url()?>/purchases">Purchase History</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo site_url()?>/my-homeroom">My Homeroom</a></li>
                  <li><a href="<?php echo site_url(); ?>/upload-resource">Upload Resource</a></li>
                  <li><a href="<?php echo site_url(); ?>/cart">View Cart</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo site_url(); ?>/account-settings">Account Settings</a></li>
				  <li class="divider"></li>
                  <li><a href="<?php echo wp_logout_url(); ?>">Sign Out</a></li>
                </ul>
              </li>
			  <?php } else{?>
			  <li><a href="<?php echo site_url();?>/member-register" class="nav-link">Register</a></li>
			  <li><a href="<?php echo site_url();?>/login" class="nav-link">Sign In</a></li>
			  <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
	   <?php if(is_front_page()){ ?> 
	  
      <div class="fluid-container billboard">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
              <h1 class="billboard-title">Resource Room</h1>
              <p class="billboard-text">Welcome to the Resource Room: A collection of educational resources made for Canadian teachers, by Canadian teachers.</p>
              <p class="billboard-links">
              <a id="browse-resources" href="<?php echo site_url() ;?>/browse" class="billboard-link billboard-link-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-browse.svg" class="icon icon-left icon-lg">Browse Resources</a>
              <a href="<?php echo site_url() ;?>/upload-resource" class="billboard-link"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-upload.svg" class="icon icon-left icon-lg">Upload A Resource</a>
              </p>
              <p class="billboard-profits">
                *10% of our profits are donated to projects that benefit Canadian education – <a href="<?php echo $siteurl ?>/faq/#profits">submit a project</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container page-content">
        <h3>Newly Added:</h3>
        <div class="row">
           
              <?php echo do_shortcode('[NEWLYADDED]'); ?>
		
		
		</div>
		
        <div class="divider"></div>
        <h3>Most Popular Resources:</h3>
        <div class="row">
          
              <?php echo mostPopular(); ?>
			
        </div>
        <div class="divider"></div>
        <h3>Featured Authors:</h3>
        <div class="row feat-authors">
          <div class="col-md-6">
            <div class="card-white">

      				<?php echo getFeatureduser(); ?>

            </div>
          </div>
          
        </div>
      </div>
	  <?php } ?>
    
		<script>
			jQuery(document).ready(function(){
				jQuery('#proceed_checkout').click(function(){
					jQuery('#edd-purchase-button').click();
				})
			})
		</script>
	<!-- #masthead -->
<style>
	
</style>
	

