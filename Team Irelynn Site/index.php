<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<title>
	<?php if (function_exists('is_tag') && is_tag()) {
	single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
	} elseif (is_archive()) {
	wp_title(''); echo ' Archive - ';
	} elseif (is_search()) {
	echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
	} elseif (!(is_404()) && (is_single()) || (is_page())) {
	wp_title(''); echo ' - ';
	} elseif (is_404()) {
	echo 'Not Found - ';
	}
	if (is_home()) {
	bloginfo('name'); echo ' - '; bloginfo('description');
	} else {
	bloginfo('name');
	}
	if ($paged > 1) {
	echo ' - page '. $paged;
	} ?>	
</title>
<link rel='stylesheet' href='<?php get_stylesheet_uri(); ?>' type='text/css' media='screen' />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

</head>

<body>
  <div id="header"><!-- Header Begins Here -->  
	<?php get_header(); ?>
  </div>

<div id="welcome">

  <div id="my_story">
    <p><h3>Hi, I'm Irelynn Rose.</h3>I'm 2 years old, and I was diagnosed with Diamond Blackfan Anemia or 'DBA' when I was five weeks old, a condition where my bone marrow doesn't make red blood cells.  You'd never know by looking at me that I require blood transfusions every 3 weeks in order to survive.</br >Thanks for taking a look at my page and helping support our cause. We hope to raise money and make a difference and give it to the doctors and scientists that need funds to research DBA.</br> <h4>Together, we can conquer DBA! With my parents help, and yours, I intend to!</h4><p>
  </div>

  <div id="slider">
      <div id="featured"> 
        <!--<img src="images/poster.jpeg" id="poster" />-->
        <img class="slider" src="<?php bloginfo('template_url'); ?>/images/slidercliptwo.jpeg"/>
        <img class="slider" src="<?php bloginfo('template_url'); ?>/images/sliderclipthree.jpeg" />
        <img class="slider" src="<?php bloginfo('template_url'); ?>/images/sliderclipfour.jpeg" />
       <!-- <img src="sliderclipsix.png" class="slider"/>-->
      </div>
  </div>
</div>

<div id="content">
    <div class="boxes drop-shadow">
      <h3>We Need Your Help!</h3>
      <p>Because of the rarity of DBA, the support of our families and friends is important and essential.  Your tax-deductible donation is an endorsement of our mission, and will allow us and the <a href="">DBA Foundation</a> to continue supporting DBA patients and all their needs.  We sincerely thank you for your time, your support, and for giving hope to all DBA families.</p>
      <button id="donate" name="donate">DONATE NOW</button>

    </div>

    <div class="boxes drop-shadow">
      <h3 id="eventsheader">Upcoming Events</h3>
	<div id="calendar" style="width:300px; text-align:center;" ><iframe  src="http://www.eventbrite.com/calendar-widget?eid=4218389316" frameborder="0" height="368" width="300" marginheight="0" marginwidth="0" scrolling="no" allowtransparency="true"></iframe><div id="eventtext" style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:300px; text-align:center;" ><!--<a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com/r/ecal">Online Ticketing</a> <span style="color:#ddd;">powered by</span> <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com?ref=ecal">Eventbrite</a>--></div></div>
      <!--<h4>Next Blood Drive for Irelynn:</h4>
      <p>August 24th, 2012</br>Lower Creek Baptist Church, Lenoir, NC</p>-->
    </div>

    <div class="boxes drop-shadow">
      <h3 id="moreHeader">More About DBA</h3></br>
      <p><h4>Diamond Blackfan Anemia is an extremely rare genetic blood disorder afflicting our daughter Irelynn Rose</h4></p>
      <p>DBA is usually diagnosed within the first year of life and is characterized by the failure of the bone marrow to produce a sufficient number of oxygen carrying red blood cells.  Some DBA patients's anemia can be managed with steroid treatment, while others require frequent blood transfusions and iron chelation therapy.</p>
      <a href="" id="link">Learn More</a>
    </div>

</div>
<script type="text/javascript">
   jQuery(window).load(function() {
     jQuery('#featured').orbit();
   });
 </script>
<footer>
<?php get_footer(); ?>
</footer>
</body>

<!--<div id="footer">footer | foooter | footer | contact us | DONATE</div>-->

</html>
