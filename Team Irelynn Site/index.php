<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

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

<link rel='stylesheet' href='<?php bloginfo("style.css"); ?>'
type='text/css' media='screen' />
<link rel="stylesheet" href='<?php bloginfo("orbit-1.2.3.css")?>' type='text/css' media='screen' />
<link href='http://fonts.googleapis.com/css?family=Rosario:400,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lora:700' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.orbit-1.2.3.min.js"></script> 


  <script type="text/javascript">
    $(window).load(function() {
      $('#featured').orbit();
    });
  </script>

</head>

<header>
  <nav>
    <ul>
      <li><a href="" class="icon home"><span>Home</span></a></li>
      <li class="dropdown">
        <a href="">Meet Irelynn</a>
        <ul>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="">About DBA</a>
        <ul class="large">
          <li><a href="">tab</a></li>
          <li><a href="i">tab</a></li>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="">Upcoming Events</a>
        <ul class="large">
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
          <li><a href="">tab</a></li>
        </ul>
      </li>
      <li><a href="">Links</a></li>
      <li><a href="">DONATE NOW</a></li>
    </ul>
  </nav>

  <div id="logo">
    <img src="images/longlogo.png" id="long" />
  </div>

</header>

<body>

<div id="welcome">

  <div id="my_story">
    <p><h3>Hi, I'm Irelynn Rose.</h3>I'm 2 years old, and I was diagnosed with Diamond Blackfan Anemia or 'DBA' when I was five weeks old, a condition where my bone marrow doesn't make red blood cells.  You'd never know by looking at me that I require blood transfusions every 3 weeks in order to survive.</br >Thanks for taking a look at my page and helping support our cause. We hope to raise money and make a difference and give it to the doctors and scientists that need funds to research DBA.</br> <h4>Together, we can conquer DBA! With my parents help, and yours, I intend to!</h4><p>
  </div>

  <div id="slider">
      <div id="featured"> 
        <!--<img src="images/poster.jpeg" id="poster" />-->
        <img src="slidercliptwo.jpeg" class="slider"/>
        <img src="sliderclipthree.jpeg" class="slider"/>
        <img src="sliderclipfour.jpeg" class="slider"/>
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
	<article>
      <h3>Upcoming Events</h3>
      <h4>Next Blood Drive for Irelynn:</h4>
      <p>August 24th, 2012</br>Lower Creek Baptist Church, Lenoir, NC</p>
</article>
    </div>

    <div class="boxes drop-shadow">
	<article>
      <h3 id="moreHeader">More About DBA</h3></br>
      <p><h4>Diamond Blackfan Anemia is an extremely rare genetic blood disorder afflicting our daughter Irelynn Rose</h4></p>
      <p>DBA is usually diagnosed within the first year of life and is characterized by the failure of the bone marrow to produce a sufficient number of oxygen carrying red blood cells.  Some DBA patients's anemia can be managed with steroid treatment, while others require frequent blood transfusions and iron chelation therapy.</p>
      <a href="" id="link">Learn More</a>
	</article>
    </div>

</div>

</body>

<div id="footer">footer | foooter | footer | contact us | DONATE</div>

</html>
