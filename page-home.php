 <?php
/**
 * Template Name: Home
 *
 * Homepage template
 *
 * @package snpcore
 * @since snpcore 1.0
 */

get_header(); ?>

 <?php
require_once 'mobile-detect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$isMobile = false;
$isMobileClass = '';

if ($detect->isMobile() || $detect->isTablet()) {
    $isMobile = true;
    $isMobileClass = 'device-is-mobile';
}
?>

 <div id="home-slideshow">
   <ul class="slide-container"
     data-options="timer_speed:13000;slide_number:false;animation:slide;pause_on_hover:true;timer:false;animation_speed:9000;navigation_arrows:false;bullets:true;">
     <li id="slide1" class="slide">
       <img class="show-for-small-only" src="<?php echo get_template_directory_uri(); ?>/images/slider/slide5.jpg"
         alt="Travel Insurance Comparison">
       <img class="show-for-medium-only" src="<?php echo get_template_directory_uri(); ?>/images/slider/slide5.jpg"
         alt="Travel Insurance Made Easy">
       <div class="row">
         <div class="small-12 medium-10 medium-offset-1 large-8 large-offset-0 columns slide-text-outer">
           <div class="slide-text-container">
             <div class="slide-text">
               <h1>Travel Insurance Made Easy&#0153;</h1>
               <?php if ($isMobile) { ?>
               <!-- <p>You won't find a lower price anywhere else for a plan found on TravelInsurance.com. Use our unbiased
                 comparison engine to save time and money. Buy online and get coverage instantly by email using our 100%
                 safe and secure checkout.</p> -->
               <p>We make it easy to compare and buy travel insurance plans from all major insurers in under five
                 minutes. Find the right plan for your trip and buy online at the guaranteed lowest price.</p>
               <?php } else { ?>
               <p>We Make It Easy to Compare and Buy Travel Insurance From Top Rated Insurers at the Guaranteed Lowest
                 Price.</p>
               <ul>
                 <li>Millions of Travelers Insured</li>
                 <li>100,000+ Verified Customer Reviews</li>
                 <li>Over $3.5 Billion of Trips Protected</li>
               </ul>
               <?php } ?>
             </div>
              <!-- desktop featured in start-->
              <div class="logo-main-div">
                  <p class="mb-0 pb-0">Featured In:</p>
                  <div class="logo-row">
                    <img src="nyt.svg" alt="" class="img-fluid">
                    <img src="wapo-logo.svg" alt="" class="img-fluid">
                    <img src="wstj.svg" alt="" class="img-fluid">
                  </div>
                </div>
                 <!-- desktop featured in end -->
           </div>
         </div><!-- /columns -->
       </div><!-- /row -->
     </li><!-- /slide -->
   </ul>
 </div><!-- /home-slideshow -->
  <!-- Mobile featured in start -->
  <div class="logo-row-sm">
      <p class="mb-0 pb-0">Featured In:</p>
      <div class="logo-row-sm-text">
        <img src="nyt.svg" alt="" class="img-fluid">
        <img src="wapo-logo.svg" alt="" class="img-fluid">
        <img src="wstj.svg" alt="" class="img-fluid">
      </div>
    </div>
     <!-- Mobile featured in end -->

 <div class="mobile-accredited show-for-small-only">
   <a class="norton" target="_blank"
     href="https://seal.digicert.com/seals/popup/?tag=jrMpWCw0&lang=en&url=www.travelinsurance.com"><img
       src="https://www.travelinsurance.com/wp-content/themes/ti15/images/Norton.svg" alt="Norton Secured" />
     <a class="shopper" target="_blank" href="https://www.shopperapproved.com/reviews/travelinsurance.com"
       class="shopperlink new-sa-seals placement-171"><img src="//www.shopperapproved.com/seal/8083/171-sa-seal.gif"
         style="border-radius: 4px;" alt="Customer Reviews"
         oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by Shopper Approved \251 '+d.getFullYear()+'.'); return false;" /></a>
     <script type="text/javascript">
     (function() {
       var js = window.document.createElement("script");
       js.src = "//www.shopperapproved.com/seals/certificate.js";
       js.type = "text/javascript";
       document.getElementsByTagName("head")[0].appendChild(js);
       var link = document.createElement('link');
       link.rel = 'stylesheet';
       link.type = 'text/css';
       link.href = "//www.shopperapproved.com/seal/171.css";
       document.getElementsByTagName('head')[0].appendChild(link);
     })();
     </script>
     <a class="bbb" target="_blank"
       href="http://www.bbb.org/new-york-city/business-reviews/insurance-travel/travelinsurance-com-in-new-york-ny-136053/#bbbonlineclick"><img
         src="https://www.travelinsurance.com/wp-content/themes/ti15/images/BBB.svg" alt="BBB" /></a>
 </div>
 <div class="row">
   <div id="home-form-wrapper">

     <div class="home-form-intro-text small-10 small-offset-1 medium-8 medium-offset-2 large-10 large-offset-1 ">
       <h2>COMPARE AND BUY ONLINE</h2>
       <p>Enter your trip details to compare and buy travel insurance from trusted insurers. Get instant confirmation of
         coverage and travel worry-free.</p>
     </div>
     <div id="home-form">
       <?php
	$FORMVAL_LARGEVAL = 6;
	$FORMVAL_HIDEMOBILELABEL = "label-hide-mobile";
	include "newentryform.php";
?>
     </div>
   </div>
 </div><!-- /home-form -->

 <div id="home-accredited" class="show-for-medium-up">
   <div class="row">
     <?php include(TEMPLATEPATH.'/partials/know-sidebar-home.php'); ?>
   </div>
   <div id="logo-bar" class="row">
     <center class="wrap">
       <a class="norton" target="_blank"
         href="https://seal.digicert.com/seals/popup/?tag=jrMpWCw0&lang=en&url=www.travelinsurance.com"><img
           src="https://www.travelinsurance.com/wp-content/themes/ti15/images/Norton.svg" alt="Norton Secured" />
         <a class="shopperlink" target="_blank" href="https://www.shopperapproved.com/reviews/travelinsurance.com"
           class="shopperlink new-sa-seals placement-171"><img src="//www.shopperapproved.com/seal/8083/171-sa-seal.gif"
             style="border-radius: 4px;" alt="Customer Reviews"
             oncontextmenu="var d = new Date(); alert('Copying Prohibited by Law - This image and all included logos are copyrighted by Shopper Approved \251 '+d.getFullYear()+'.'); return false;" /></a>
         <script type="text/javascript">
         (function() {
           var js = window.document.createElement("script");
           js.src = "//www.shopperapproved.com/seals/certificate.js";
           js.type = "text/javascript";
           document.getElementsByTagName("head")[0].appendChild(js);
           var link = document.createElement('link');
           link.rel = 'stylesheet';
           link.type = 'text/css';
           link.href = "//www.shopperapproved.com/seal/171.css";
           document.getElementsByTagName('head')[0].appendChild(link);
         })();
         </script>
         <a class="bbb" target="_blank"
           href="http://www.bbb.org/new-york-city/business-reviews/insurance-travel/travelinsurance-com-in-new-york-ny-136053/#bbbonlineclick"><img
             src="https://www.travelinsurance.com/wp-content/themes/ti15/images/BBB.svg" alt="BBB" /></a>
     </center>
   </div>
 </div>
 <!--  home-accredited end -->
 <div class="mobile-accredited show-for-small-only">
   <a target="_blank"
     href="https://www.travelinsurance.com/media-center/travelinsurance-com-named-one-of-the-best-travel-insurance-companies-of-2023-by-money-com/"><img
       src="https://www.travelinsurance.com/wp-content/themes/ti15/images/best-travel-insurance.svg"
       alt="best travel insurance" style="margin-top:15px;" /></a>
 </div>
 <div id="home-compare" class="clearfix">
   <div class="row">
     <div class="row collapse">
       <div class="small-10 small-offset-1 large-12 large-offset-0 columns">
         <h2><em>24/7 EMERGENCY ASSISTANCE WORLDWIDE</em> - COMPARE AND BUY TRAVEL INSURANCE FROM TRUSTED PROVIDERS
           INCLUDING:</h2>
       </div><!-- -->
     </div>
     <div class="row collapse">
       <div class="small-10 small-offset-1 large-12 large-offset-0 columns">
         <ul class="compare-list clearfix">
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-travel-guard.svg"
                 alt="AIG Travel Guard" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-axa.svg"
                 alt="AXA Assistance USA" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/result-generali.svg"
                 alt="Generali Global Assistance" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-global-trip-protection.svg"
                 alt="Global Trip Protection" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-april.svg"
                 alt="GoReady Insurance" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-img.svg"
                 alt="International Medical Group (IMG)" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/result-jh.svg"
                 alt="John Hancock Travel Insurance" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-roamright.svg"
                 alt="RoamRight" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-seven-corners.svg"
                 alt="Seven Corners" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-travel-insured.svg"
                 alt="Travel Insured International" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-travelex.svg"
                 alt="Travelex Insurance" /></span></li>
           <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/logo-trawick.svg"
                 alt="Trawick International" /></span></li>
         </ul>
       </div>
     </div><!-- /row -->
   </div>
 </div><!-- /home-compare -->
 <div id="home-steps">
   <div class="row">
     <h2>4 EASY STEPS AND GET INSURED</h2>

     <div class="large-3 medium-3 small-12 columns">
       <img src="<?php echo get_template_directory_uri(); ?>/images/icon-1.svg" alt="Step 1" />
       <p>Enter your trip details into our quote form</p>
     </div><!-- -->

     <div class="large-3 medium-3 small-12 columns">
       <img src="<?php echo get_template_directory_uri(); ?>/images/icon-2.svg" alt="Step 2" />
       <p>Get quotes from top rated companies </p>
     </div><!-- -->

     <div class="large-3 medium-3 small-12 columns">
       <img src="<?php echo get_template_directory_uri(); ?>/images/icon-3.svg" alt="Step 3" />
       <p>Compare plans, prices and benefits</p>
     </div><!-- -->

     <div class="large-3 medium-3 small-12 columns">
       <img src="<?php echo get_template_directory_uri(); ?>/images/icon-4.svg" alt="Step 4" />
       <p>Buy online and get covered instantly</p>
     </div><!-- -->
   </div><!-- /row -->
 </div><!-- /home-steps -->
 <div id="home-why" class="show-for-medium-up">
   <div class="row">
     <div class="small-12 columns">
       <h2>WHY USE TRAVELINSURANCE.COM?</h2>
     </div>
   </div>
   <div class="row">
     <div class="small-12 columns">
       <div class="home-why-slider">
         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-quotes.png"
             alt="Guaranteed Best Prices for Travel Insurance" />
           <p>Guaranteed Best Prices</p>
         </div><!-- -->
         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-compare.png"
             alt="Unbiased Comparisons of Travel Insurance Policies" />
           <p>Unbiased Comparisons</p>
         </div><!-- -->

         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-coverage.png"
             alt="Fast and Easy to Buy Travel Insurance Online" />
           <p>Fast and Easy to Buy Online</p>
         </div><!-- -->

         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-online.png"
             alt="Get Travel Insurance Coverage Instantly by Email" />
           <p>Get Coverage Instantly by Email</p>
         </div><!-- -->

         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-tips.png"
             alt="Helpful Travel Insurance Tips and Articles" />
           <p>Helpful Tips and Articles</p>
         </div><!-- -->

         <div class="small-12 large-2 medium-2 columns">
           <img src="<?php echo get_template_directory_uri(); ?>/images/icon-secure.png"
             alt="Safe and Secure Travel Insurance Purchase" />
           <p>100% Safe and Secure Checkout</p>
         </div><!-- -->
       </div>
     </div>

   </div><!-- /row -->
 </div><!-- home-why -->
 <div id="home-tips">
   <div class="row">
     <div class="small-12 large-6 large-offset-0 medium-5 medium-offset-1  columns">
       <h2>TRAVEL TIPS</h2>
       <?php
						$blog_list = new WP_Query('category_name=travel-tips&showposts=2');

						if ($blog_list->have_posts()) : while ($blog_list->have_posts()) : $blog_list->the_post(); ?>
       <div>
         <h3><?php the_time('M d Y'); ?></h3>
         <h4><a href="<?php the_permalink(); ?>" style="font-weight:normal"><?php the_title(); ?></a></h4>
         <?php if (0) { ?>
         <p><?php echo get_the_excerpt(); ?>&nbsp;<a href="<?php the_permalink(); ?>">Read More</a></p>
         <?php } else { ?>
         <p><a href="<?php the_permalink(); ?>">Read More</a></p>
         <?php } ?>
       </div>
       <?php endwhile; endif; wp_reset_postdata(); ?>

       <p><a href="<?php bloginfo('url'); ?>/category/travel-tips/" class="learn-more">View More</a></p>
     </div>


     <div class="small-12 large-6 medium-5 end columns">
       <h2>ARTICLES</h2>
       <?php
						$article_list = new WP_Query('category_name=articles&showposts=2');

						if ($article_list->have_posts()) : while ($article_list->have_posts()) : $article_list->the_post(); ?>
       <div>
         <h3><?php the_time('M d Y'); ?></h3>
         <h4><a href="<?php the_permalink(); ?>" style="font-weight:normal"><?php the_title(); ?></a></h4>
         <?php if (0) { ?>
         <p><?php echo get_the_excerpt(); ?>&nbsp;<a href="<?php the_permalink(); ?>">Read More</a></p>
         <?php } else { ?>
         <p><a href="<?php the_permalink(); ?>">Read More</a></p>
         <?php } ?>
       </div>
       <?php endwhile; endif; wp_reset_postdata(); ?>

       <p><a href="<?php bloginfo('url'); ?>/category/articles/" class="learn-more">View More</a></p>
     </div>
   </div><!-- /row -->
 </div><!-- /home-tips -->


 <div id="home-buy-online" class="hide-for-small-only">
   <div class="row">
     <div class="large-12 medium-10 medium-centered columns">
       <h2>COMPARE AND BUY TRAVEL INSURANCE ONLINE</h2>
       <p><?php echo do_shortcode( '[lyte id="1IpWvX3FRew" /]' ); ?></p>
       <!-- <p><center>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/1IpWvX3FRew?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</center></p> -->
       <p>&nbsp;</p>
       <a
         href="https://www.travelinsurance.com/media-center/travelinsurance-com-named-one-of-the-best-travel-insurance-companies-of-2023-by-money-com/"><img
           src="https://www.travelinsurance.com/wp-content/themes/ti15/images/best-travel-insurance.svg"
           alt="best travel insurance" style="float:left;padding-right:10px;" /></a>
       <p>A travel insurance policy can protect you from a variety of unexpected circumstances while you're traveling.
         Whether you're looking for trip cancellation coverage to reimburse you for the costs of hotels, flights and
         other pre-paid and non-refundable trip expenses or if you need medical expense coverage to protect you from the
         extensive costs of overseas treatment and hospitalization, a travel insurance policy can drastically decrease
         your risks.</p>
       <p>Travel insurance is important for travelers who need a solution to protect themselves from unexpected
         situations that could affect their travel plans, trip investment and health when traveling. In the last few
         years, travel insurance has become one of the most popular insurance products available, as it is extremely
         cost-effective. It's practically indispensable on international trips, and for travelers of all ages and
         occupations, it's a great safety net to give peace of mind when traveling.</p>
       <p>Whether you're planning on going solo or with a group of friends or family, TravelInsurance.com can help you
         find an appropriate domestic or international travel insurance policy that meets your needs. You can compare
         all of your trip insurance options, procure coverage online and travel worry-free.</p>
       <p>The right travel insurance policy gives you peace of mind no matter where your travels take you. You'll know
         where to turn if something goes wrong, with 24/7 emergency assistance from your trip insurance provider.</p>
       <p>It can be hard to know where to begin when searching for a travel insurance policy. An ideal policy offers
         sufficient coverage at a reasonable price. There are many different variables involved in the quote process and
         insurance carriers offer a variety of plans and coverage levels to choose from. No one should go through this
         process uninformed and without an easy way of navigating the world of trip insurance.</p>
       <img src="https://www.travelinsurance.com/wp-content/themes/ti15/images/ustia-member.png"
         alt="united states travel insurance association member" style="float:right;padding-right:10px;" /></a>
       <p>TravelInsurance.com helps you compare plans from the world's leading travel insurance providers. Our
         comparison engine allows you to easily decipher plan benefits and coverage while choosing the right travel
         insurance policy for your trip. You can quote, compare and buy in just a few minutes and receive your policy
         confirmation and documents via email instantly after purchase.</p>
       <p>Find travel insurance policies from reliable companies and stay protected on your next trip with
         TravelInsurance.com - it's Travel Insurance Made Easy&#0153;.</p>
       <p><img src="https://www.travelinsurance.com/wp-content/uploads/2015/12/as-seen-in-news.png"
           alt="TravelInsurance.com in the news" align="center"></p>
       <p>&nbsp;</p>
       <h2>TRAVELINSURANCE.COM CUSTOMER REVIEWS</h2>
       <div style="min-height: 100px;"
         class="shopperapproved_widget sa_rotate sa_count3 sa_horizontal sa_bgWhite sa_colorBlack sa_borderGray sa_rounded sa_FjY sa_fixed sa_showlinks sa_large sa_showdate ">
       </div>
       <script type="text/javascript">
       var sa_interval = 15000;

       function saLoadScript(src) {
         var js = window.document.createElement('script');
         js.src = src;
         js.type = 'text/javascript';
         document.getElementsByTagName("head")[0].appendChild(js);
       }
       if (typeof(shopper_first) == 'undefined') saLoadScript(
         'https://www.shopperapproved.com/widgets/testimonial/3.0/8083.js');
       shopper_first = true;
       </script>
       <div style="text-align:right;"><a aria-label="travelinsurance.com certificate URL" title="Reviews"
           class="sa_footer" href="https://www.shopperapproved.com/reviews/travelinsurance.com/" target="_blank"
           rel="nofollow"><img class="sa_widget_footer" style="border: 0;" alt="travelinsurance.com widget logo"
             src=https://www.shopperapproved.com/widgets/widgetfooter-darklogo.png></a></div>
     </div>
   </div><!-- /row -->
 </div><!-- /home-buy-online -->


 <?php get_footer(); ?>