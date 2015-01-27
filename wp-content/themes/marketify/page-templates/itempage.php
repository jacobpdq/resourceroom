<?php
/**
 * Template Name: Itempage
 *
 * @package Marketify
 */

get_header(); ?>

	<?php do_action( 'marketify_entry_before' ); ?>

	<div class="container">
		<div id="content" class="site-content row">

			<div id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>
         <div class="card-white double-padding margin-bottom text-center">
          <div class="showcase-header">
            <h2 class="item-title">Scarecrow Craftivity and Writing Activities</h2>
            <div class="item-author"><a href="" class="img-circle img-circle-small"><img src="img/placeholders/woman-1.jpg" width="" height="" alt=""></a><span>by </span><a href="user-page.html">Username</a></div>
          </div>
        </div>
					<?php /* Start the Loop */ ?>
					 <div class="row">
					          <div class="col-md-7">
            <div class="card-white double-padding margin-bottom-bigger">
              <div class="showcase-text">
                <div class="info-list">
                  <p class="info-list-item"><strong>Subject(s): </strong><a href="search-results.html">English Language Arts</a>, <a href="search-results.html">Holidays/Seasonal</a>, Custom Subject 1, Custom Subject 2</p>
                  <p class="info-list-item"><strong>Topics/Strands: </strong>Strand 1, Strand 2, Strand 3</p>
                  <p class="info-list-item"><strong>Resource Type: </strong><a href="">Activity</a></p>
                  <p class="info-list-item"><strong>Province: </strong><a href="">Alberta</a></p>
                  <p class="info-list-item"><strong>Grade(s): </strong><a href="">1</a>, <a href="">2</a></p>
                  <p class="info-list-item"><strong>Technology Required: </strong>None</p>
                  <p class="info-list-item"><strong>Number of Pages: </strong>5</p>
                  <p class="info-list-item"><strong>Enduring Understanding:</strong><a href="">Social Justice</a></p>
                  <p class="info-list-item"><strong>Cirriculum Expectations: </strong>Expectation 1, Expectation 2, Expectation 3</p>
                  <p class="info-list-item"><strong>File Format: </strong>.pdf</p>
                  <p class="info-list-item"><strong>User Rating: </strong><span class="info-val rating-sm margin-right-smaller"><img src="<?php echo get_template_directory_uri() ;?>/img/icons/icon-star-yellow.svg"><img src="img/icons/icon-star-yellow.svg"><img src="<?php echo get_template_directory_uri() ;?>/img/icons/icon-star-yellow.svg"><img src="img/icons/icon-star-half.svg"><img src="<?php echo get_template_directory_uri() ;?>/img/icons/icon-star-gray.svg"></span><em>3.5 — 15 Ratings</em></p>
                </div>
                <div class="divider divider-lg"></div>
                <div class="showcase-item-full-description">
                 <p>Description</p>
                </div>
                <div class="divider"></div>
                <div class="text-right"><a href="" class="showcase-report-link">Report</a></div>
              </div>
            </div>
            <h3>Reviews:</h3>
            <div class="comment-section">
              <div class="comment-list">
                <div class="comment">
				<?php echo sumobi_custom_show_average_star_rating(); ?>
				<?php 
				
				//echo do_shortcode('[review id="REVIEW_ID"]');?>
                  
                  
                </div>
                
                
              </div>
            </div><a href="" class="btn btn-block btn-muted">Load More</a>
          </div>
		   <div class="col-md-5">
            <div class="card-white">
              <div class="flexslider">
                <ul class="slides">
                 
				  <li><img src="<?php echo get_template_directory_uri() ;?>/img/placeholders/woman-1.jpg"></li>
                </ul>
              </div>
            </div>
            <div class="showcase-action-box">
              <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                  <div class="item-price">
                    <p class="price-number">$2.99</p>
                    <p class="price-info">Digital download</p>
                  </div>
                  <div class="purchase-link"><a href="" class="btn btn-primary btn-lg btn-block btn-3d">Add To Cart</a></div>
                </div>
              </div>
            </div>
            <div class="showcase-sharing-box card-white">
              <p class="small">Share this resource:</p>
              <div class="sharing-links"><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-facebook.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-twitter.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-pinterest.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-linkedin.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-google.svg"></a><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/share-email.svg"></a></div>
              <p class="page-url"><img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-link-gray.svg" class="icon icon-xs icon-left"><span href="" class="small text-muted">http://resour.ce/h123jad</span></p>
            </div>
            <div class="divider"></div>
            <div class="card-white">
              <h4 class="text-center">More by Username:</h4>
              <div class="divider"></div>
              <div class="item-mini">
                <div class="row margin-bottom">
                  <div class="col-md-4">
                    
					<?php echo do_shortcode('[downloads numbers="1" category="mydownload"]');?>
					
                  </div>
                  <div class="col-md-8">
                    <div class="item-text"><a href="item-page.html" class="item-title">Resource Item Title</a>
                      <div class="item-author"> <span>by </span><a href="user-page.html">Author Lastname</a></div>
                      <div class="rating-sm"><img src="img/icons/icon-star-yellow.svg"><img src="img/icons/icon-star-yellow.svg"><img src="img/icons/icon-star-yellow.svg"><img src="img/icons/icon-star-half.svg"><img src="img/icons/icon-star-gray.svg"></div>
                      <div id="card-bottom"><span class="item-price">$2.99</span><span class="item-type">Digital Download</span></div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="divider"></div>
              <div class="text-center"><a href="user-page.html">See All Resources by Username</a></div>
            </div>
          </div>
		  </div>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>

					<?php endwhile; ?>

					<?php marketify_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div>
	</div>
	
<?php get_footer(); ?>