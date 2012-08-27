<!DOCTYPE html>
<html>
<head>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href='<?php bloginfo('template_url'); ?>/orbit-1.2.3.css' type='text/css' media='screen' />
	<script type="text/javascript"
	   src="<?php bloginfo("template_url"); ?>/js/jquery.orbit-1.2.3.min.js"></script>
	
	
</head>
<body>
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
</body>
</html>