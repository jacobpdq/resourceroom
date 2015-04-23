<?php
/**
 * Template Name: About us
 *
 * @package Marketify
 */

get_header();
$siteurl = site_url();
 ?>

	<div class="container page-content page-reference">
      <div id="content" class="site-content row">
        <div id="primary" class="content-area col-sm-12">
          <main id="main" class="site-main" role="main">
				
        <div class="card-white double-padding">
          <div style="text-align:center">
            <h1>Resource Room</h1>
            <h3 class="nomargin">Canadian educational resources made by teachers, for teachers.</h3>
          </div>
          <div style="display:block !important" class="divider"></div>
          <div class="row">
            <div class="col-md-3">
              <ul class="sidenav affix-top" data-offset-top="275" data-spy="affix">
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#mission">Mission</a></li>
                <li><a href="#vision">Vision</a></li>
                <li><a href="#what-sets-us-apart">What Sets Us Apart</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#why-buy">Why Buy</a></li>
                <li><a href="#why-sell">Why Sell</a></li>
              </ul>
            </div>
            <div class="col-md-7">
              <h3 id="about-us">About Us</h3>
              <p>Resource Room is an online marketplace where teachers can buy and sell their original educational resources. Resource Room is designed for Canadian K-12 teachers and focuses on accumulating and organizing quality downloadable resources based on provincial curriculum.  </p>
              <h3 id="mission">Mission</h3>
              <p>Our mission is to create a useful tool for Canadian teachers, which will provide access to an abundance of relevant educational resources. By organizing resources by province, grade, and subject, Canadian teachers will be able to locate and share resources that are successfully used in Canadian classrooms. </p>
              <p>Resource Room encourages collaboration amongst teachers. As teachers, we know how much time is spent outside of the classroom walls developing engaging units and lessons for our students. Oftentimes there are simply not enough hours in a day to modify and differentiate our plans to suit our classroom needs.  Resource Room is here to offer support. We recognize that there is no need for teachers to spend countless hours recreating the wheel.  Through the Resource Room marketplace, we can share our hard work, enabling one another to take the time to adapt well made lesson plans and units to meet the needs of our diverse classrooms.</p>
              <p>Not only does Resource Room support teachers through collaboration, it also functions as an opportunity for teachers to earn a secondary income by sharing the work that they are proud of. Teachers put hard work into developing resources and we believe that they don't simply belong in a binder, in a drawer, or on a flash drive. We value your hard work and think that hard work should literally pay off! </p>
              <h3 id="vision">Vision</h3>
              <p>We envision a collaborative community of Canadian educators who come together to share their best practices, top resources, and personal experiences. Making a space for this community to thrive raises the bar for the standard of teaching in Canadian classrooms. </p>
              <p>Goodbye textbooks. Goodbye "1 size fits all" lessons. By sharing our professionally developed resources, we will now be able to direct our energy toward adapting, modifying, differentiating, and accommodating lessons to suit each individual learner. </p>
              <p>By supporting one another, we collectively support our students!</p>
              <h3 id="what-sets-us-apart">What Sets Us Apart</h3>
              <p>How is Resource Room different from other educational resource marketplaces, you ask? </p>
              <p>We opt for relevance. In Canada, our educational system is provincially regulated. That means Grade 5 Social Studies in British Columbia is not necessarily the same as Grade 5 Social Studies in Ontario. We offer an organized marketplace, created specifically for Canadian teachers, with provincial curriculum in mind. When you search for resources, we want you to be assured that they meet requirements and can be successfully applied in your classroom. </p>
              <p>We choose quality over quantity. By limiting our marketplace to Canadian teachers, we narrow the buying and selling community. The Resource Room is a marketplace of high quality resources that are used in real Canadian classrooms. To monitor the quality of resources available in our marketplace, we use a peer review system, which allows teachers to rate and review resources. Low-quality resources can be flagged and reported and together we can ensure that our community is top notch. </p>
              <h3 id="how-it-works">How it Works</h3>
              <h4>Buying</h4>
              <p>Sign up to become a member  Provide PayPal information to make regular purchases easy and safe (optional)  Browse resources  Read user reviews  Purchase  Download your resource and enjoy! (Resources will be held in your personal library where they can be accessed and printed) </p>
              <h4>Selling</h4>
              <p>Want to give selling your resources a shot and see how it goes?  We split the profit 70/30 (70 for you, the brains behind the operation!)</p>
              <p>Sign up to become a member  Provide PayPal information so we can send you your earnings  Select "Upload Resource"  Fill out the necessary information (the more information you provide, the easier it will be for teachers to locate your resource)  Set a price  Agree to the Terms of Use  Upload your resource  Submit  Pat yourself on the back for being a collaborator in our Canadian educational community... Oh, and get paid! </p>
              <p>*Please note that sellers must provide a $0.30 transaction fee for each PayPal transaction, with the exception of Free resources. </p>
              <h3 id="why-buy">Why Buy?</h3>
              <p>As teachers, we work hard. All day we focus our energy on our supporting the learning and development of our students. Our breaks are often filled with planning, marking, prepping, mediating, coaching, and professional development. And we don't stop there; many of us go home and spend all night marking and creating new and engaging lessons for our students. </p>
              <p>At the end of the day, many of us still don't feel like we're accomplishing everything that we wish we could. With some classrooms exceeding 30 students, it is hard to make sure that each student is accommodated for. By purchasing lesson plans that were created by our colleagues, we have a foundation that we are able to adapt to our diverse classroom compositions. On top of that, perhaps we can gift ourselves some much deserved personal and family time!</p>
              <p>New to teaching? We know we don't want to teach straight from the textbook, but we also hear horror stories about the exhaustion of creating our resource stock from scratch. Get support from colleagues that have been in your shoes. Gain ideas, insight, and years of experience within the Resource Room marketplace.</p>
              <h3 id="why-sell">Why Sell?</h3>
              <p>Simple &ndash; hard work should pay off! You put a lot of time and energy into creating unique and engaging units and lessons for your students. Your hard work shouldn't reside on a shelf or a flash drive, it should be shared amongst teachers for a far reaching benefit. Did we mention that it can also benefit your bank account? </p>
              <p>New Teachers and Students Teachers: You are the new energy in our field. You have been educated with the most up-to-date research on best practices, planning strategies, and educational technologies. Your contributions will keep teachers current and cutting-edge. You play an important role in our community and we look forward to seeing your contributions. Plus, it doesn't hurt to bring in some extra money while you work your way into the field! </p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
			  <p>&nbsp;</p>
            </div>
          </div>
		  
        </div>
				
         
				
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
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
	</div>
	
<?php get_footer(); ?>