<?php
/**
 * Template Name: FAQ
 *
 * @package Marketify
 */

get_header();
$siteurl = site_url();
 ?>

	<?php do_action( 'marketify_entry_before' ); ?>

	<div class="container page-content">
		<div class="card-white double-padding">
			<div class="text-center">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="divider"></div>
		<div id="content" class="site-content row">
			<div id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">
				
				
				
          <div style="text-align:center">
            <h2> <img src="<?php echo get_template_directory_uri() ?>/img/icons/icon-question.svg" class="icon icon-left icon-xxl">Frequently Asked Questions</h2>
          </div>
          <div style="display:block !important" class="divider"></div>
          <div class="row">
            <div class="col-md-3">
              <ul class="sidenav small">
                <li class="header"><a href="">General</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whichbrowser"> Which browser should I use for Resource Room?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatisstore">What is a Store?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatishomeroom">What is a Homeroom?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howarepriced">How are resources priced?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#doyoufree">Do you ever offer free resources?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#resorceviolet">I have found a resource that violates copyright law, what should I do?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#resorceoffensive">I find a resource on Resource Room to be offensive or harmful, what should I do?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#outsidecanada">I live outside of Canada: Can I still use Resource Room?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howcancel">How do I cancel my account?</a></li>
                <li class="header"><a href="">Buyer</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howbuyresorce">How do I buy a resource?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatwithcredit">What do you do with my credit card information?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whathomeroom">What is a Homeroom?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatdoyoucredit">What do you do with my credit card information?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howaccessresorce">How can I access my purchased resources?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatrefundpolicy">What is your refund policy?</a></li>
                <li class="header"><a href="">Seller</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howuploadproduct">How do I upload a product?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatfiletypes">What file types can I upload to Resource Room?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#whatifresourcemore">What if my resource contains more than one file?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#resorcetoobig">Help, my resource is too big! What do I do?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howmanageresorce">How to I manage my resources?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#howgetpaid">How do I get paid?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#recordresorcesales">Is there a record of my resource sales?</a></li>
                <li><a href="<?php echo $siteurl ?>/faq/#resorceinviolation">I am afraid that my resource is in violation of copyright, what should I do?</a></li>
              </ul>
            </div>
            <div class="col-md-7">
				<h3>General</h3>
				<div id="whichbrowser">
					<h5>Which browser should I use for Resource Room?</h5>
					<p>Chrome, Internet Explorer, Firefox, and Safari are all supported browsers that will help you access all of our features. Please be sure to enable cookies and JavaScript.</p>
				</div>
			  
				<div id="whatisstore"> 
					<h5>What is a Store?</h5>
					<p>Resource Room allows all teachers to create their own personal profiles, called Stores. Your Store can be used to organize and promote the resources that you are selling. Here, you can introduce yourself to our Resource Room community by sharing a little bit about your teaching background and personal pedagogy.</p>
					<p>Your Store displays all the resources that you are sharing with the Resource Room community. From here, you can add, edit, and delete your resources.</p>
				</div>
			  
				<div id="whatishomeroom"> 
					<h5>What is a Homeroom?</h5>
					<p>Your Homeroom is the place where you can view and control all your activity on Resource Room. Your Homeroom provides access to your Sales Log (a list of your sales and transaction records), Payroll (a record of receipts for your earnings), Reviews and Ratings (tracking user feedback on your resources), Uploads, and Notifications. The Homeroom also provides easy access for uploading new resources, editing current resources, and managing communication with other users.</p>
				</div>
			 
				<div id="howarepriced"> 
					<h5>How are resources priced?</h5>
					<p>Resources on the Resource Room are not our property. They remain the intellectual property of the original author. The author decides how much to charge for their resource. Feel free to let them know if you think they are charging too much by leaving a user review. </p>
				</div>
				
				<div id="doyoufree">
					<h5>Do you ever offer free resources?</h5>
					<p>Resources on the Resource Room are not our property. They remain the intellectual property of the original author. If the resource author decides to post a resource for free, it is their own prerogative. We believe in sharing, but we also believe that hard work should pay off! </p>
				</div>
				
				<div id="resorceviolet">
					<h5>I have found a resource that violates copyright law, what should I do?</h5>
					<p>If you believe that any resources on our site violates copyright laws, please report the item by clicking the "Report Item" button and contact us at admin@resourceroom.ca. We take this very seriously and will promptly investigate and remove any items that violate copyright and other laws. Thank you for taking the time to notify us of these issues - your involvement makes Resource Room a stronger tool for Canadian educators.  </p>
				</div>
				
				<div id="resorceoffensive">
					<h5>I find a resource on Resource Room to be offensive or harmful, what should I do?</h5>
					<p>If you come across a resource that is offensive or harmful please report it by clicking the "Report Item" button and contact us at admin@resourceroom.ca. We take this very seriously and want to make sure that our site does not promote or distribute offensive or harmful products. Thank you for taking the time to notify us of these issues - your involvement makes Resource Room a stronger tool for Canadian educators. </p>
				</div>
				
				<div id="outsidecanada">
					<h5>I live outside of Canada: Can I still use Resource Room?</h5>
					<p>Of course you can! You are free to browse and use all resources offered on our site. If you'd like to contribute to our site as a Seller, please make sure the resources that you are selling are relevant to Canadian teachers and students. </p>
				</div>
				
				<div id="howcancel">
					<h5>How do I cancel my account?</h5>
					<p>Contact us at admin@resourceroom.ca and we will assist you! </p>
				</div>
				<h3>Buyer</h3>
			  
				<div id="howbuyresorce">
					<h5>How do I buy a resource?</h5>
					<p>After you have found a resource that you'd like to buy, click the Purchase button on the item listing. Resource Room accepts credit cards and Paypal transactions. Once you select your desired method of payment, follow the instructions given. </p>
				</div>
				
				<div id="whatwithcredit">
					<h5>What do you do with my credit card information?</h5>
					<p>Resource Room does not have access to your credit card information. Your credit card information is handled by Paypal. </p>
				</div>
				
				<div id="howaccessresorce">
					<h5>How can I access my purchased resources?</h5>
					<p> Your purchased resources can by clicking "My Purchases" in the dropdown menu in the top right corner of the page. From here, you can download and print your resources. Resources will be stored for an indefinite amount of time. </p>
				</div>
				
				<div id="whatrefundpolicy">
					<h5>What is your refund policy?</h5>
					<p>If a resource description is misleading or incorrect, you may file a complaint and receive a resource refund. On the rare occasion, our contributors may mistakenly upload the wrong file. If this occurs, please file a complaint and we will have the proper resource uploaded as soon as possible. You can keep the mistaken upload as a gift from Resource Room.   </p>
				</div>
            <h3>Seller</h3>
			<div id="howuploadproduct">
				<h5>How do I upload a product?</h5>
				<p></p>
				<ol>
					<li>Sign up and/or log in to Resource Room by clicking the Sign In button on the homepage or using the Sign In form on the top right corner of the screen. </li>
					<li>You may use the following methods to access the Upload Form:</li>
					<li>Click the green "Upload a Resource" button on the homepage. </li>
					<li>Select "Upload Resource" from the drop down menu on the top right-hand side of the page. </li>
					<li>Click on the green "Upload New Resource" button in your Homeroom</li>
					<li>Fill in the required fields on the Upload Form. Be as detailed as you can to paint a clear picture of your resource for buyers. </li>
					<li>Upload your resource by clicking the "Browse" button and locating the appropriate file on your computer. Click "Open" to upload it onto our site. Depending on the file size, time may vary. Remember, if your resource has more than one file, be sure to ZIP it. </li>
					<li>Upload a Thumbnail Image (a small picture that captures part of your resource or a graphic representation of your resource) by clicking the "Browse" button and locating the appropriate file on your computer. You may add up to three more images as Resource Previews. </li>
					<li>Enter the price that you would like to charge for your resource. Remember, you can offer resources for free if you'd like. Sharing is caring!</li>
					<li>Submit your resource. </li>
                </ol>
              <p></p>
			</div>
			  
			<div id="whatfiletypes">
				<h5>What file types can I upload to Resource Room?</h5>
				<p>The following file types are supported on Resource Room: </p>
				<p>.avi, .bmp, .bnk, .doc, .docx, .dot, .exe, .epub, .flp, .flv, .flipchart, .gif, .htm, .html, .ink, .jpeg, .jpg, .key, .knt, .mov, .mp3, .mpeg, .mpg, .mp4, .m4a, .m4v, .notebook, .ods, .pdf, .png, .pps, .ppt, .pptx, .pub, .ram, .rm, .rtf, .swf, .tif, .tiff, .txt, .wav, .wpd, .wmv, .xls, .xlsx, .xlt, .xltx, .zip</p>
			</div>
				
			<div id="whatifresourcemore">
				<h5>What if my resource contains more than one file?</h5>
				<p>If you want to include more than one file in your resource, you must ZIP your file. To do this, put all files into one folder and then compress the folder into a ZIP file. The ZIP file will be uploaded as your resource. </p>
			</div>
			
			
              <p><strong>How to create a ZIP file:</strong></p>
              <p>Mac Users:</p>
              <p>
                </p><ol>
                  <li>Put all of your resource's files into a single folder.</li>
                  <li>Name the folder.</li>
                  <li>Highlight the folder. Select "File" in your menu bar, and then select "Compress."</li>
                  <li>This will create a zipped version of your folder. Upload that ZIP file to your Upload form.</li>
                </ol>
              <p></p>
              <p>PC Users:
                </p><ol>
                  <li>Put all of your resource's files into a single folder.</li>
                  <li>Name the folder.</li>
                  <li>Right-click the folder.</li>
                  <li>Choose "Send to" and then "Compressed (zipped) folder."</li>
                  <li>This will create a zipped version of your folder. Upload that ZIP file to your Upload form.</li>
                </ol>
              <p></p>
			 <div id="resorcetoobig">
				<h5>Help, my resource is too big! What do I do?</h5>
				<p>Our website can't accept products that are bigger than 200 mb in size. We hope this is not too limiting. Here are some strategies to help minimize the size of your file:</p>
				<ul>
					<li>Delete unnecessary images within your documents.</li>
					<li>Upload your resource as several separate files. Be sure to be consistent in your naming (e.g - "Sustainability and Me Part 1" and "Sustainability and Me Part 2") so that buyers can easily locate the full resource.</li>
				</ul>
			</div>
			<div id="howmanageresorce">
				<h5>How to I manage my resources?</h5>
				<p>You can see all of your previously added resources in your Store and in your Homeroom. Your Homeroom offers the greatest options in managing your resources. By clicking on "My Uploads" you can see the status, number of views, and number of purchases of each resource. On the right hand side of the page, you can access Edit and Delete buttons. </p>
			 </div>
			 
			 <div id="howgetpaid">
				<h5>How do I get paid?</h5>
				<p>The Resource Room pays out all earnings quarterly via PayPal. Quarterly paydays are as follows: January 15, April 15, June 15, and September 15.</p>
				<p>To get paid, you must provide us with your PayPal e-mail. If you don't already have a PayPal account, sign up for one and then update your profile with your PayPal e-mail. You can start selling before you have a Paypal account, but to get paid you must have a PayPal account. Keep track of your sales through your personal Homeroom. </p>
				<p>*PayPal is a fast and safe way to get paid online. Sign up for a PayPal account by clicking here: </p>
				<p>*Please note that you are personally responsible for accurately filing taxes based on your earnings through Resource Room.</p>
			</div>
			
			<div id="recordresorcesales">
				<h5>Is there a record of my resource sales?</h5>
				<p>In your homeroom, you can see all of your sales information by clicking on the Sales Log tab. Here, you will see detailed information about each individual sale, including a record of their invoices. </p>
			</div>
			
			<div id="resorceinviolation">
				<h5>I am afraid that my resource is in violation of copyright, what should I do?</h5>
				<p>Copyright is the legal protection of literary, dramatic, artistic, and musical works, sound recordings, performances, and communications signals. Copyright provides creators with the legal right to be paid for, and to control the use of, their creations.</p>
				<p>In Canada, copyright is protected through the federal government's Copyright Act. Please familiarize yourself with Canada's Copyright Act before uploading content to Resource Room. </p>
				<p>The Council of Ministers of Education, Canada has created a document called Copyright Matters!&nbsp;, which provides the education community with user-friendly information on copyright law. This document will help clarify common questions related to copyright law and education. </p>
				<p>Please do not upload content that you did not create. If you refer to work that is not yours within your resource, please be sure to provide accurate citations. Any work that violates Canadian copyright law will be promptly removed from Resource Room. </p>
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